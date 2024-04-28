WITH StartingTrains AS (
    SELECT *
    FROM tbl_train_stop_station
    WHERE station_id = :station_id
),
res AS (
    SELECT r.reservation_id,
        r.reservation_ticket_id,
        r.reservation_train_id,
        r.reservation_compartment_id,
        r.reservation_date,
        s.station_name AS reservation_start_station,
        reservation_start_st.stop_no AS reservation_start_stop_no,
        e.station_name AS reservation_end_station,
        reservation_end_st.stop_no AS reservation_end_stop_no
    FROM tbl_reservation r
        JOIN tbl_train_stop_station reservation_start_st ON r.reservation_start_station = reservation_start_st.station_id
        AND r.reservation_train_id = reservation_start_st.train_id
        JOIN tbl_train_stop_station reservation_end_st ON r.reservation_end_station = reservation_end_st.station_id
        AND r.reservation_train_id = reservation_end_st.train_id
        JOIN tbl_station s ON reservation_start_st.station_id = s.station_id
        JOIN tbl_station e ON reservation_end_st.station_id = e.station_id
    GROUP BY r.reservation_id
),
CountReservations AS (
    SELECT ac.*,
        COUNT(r.reservation_compartment_id) AS no_of_reservations
    FROM tbl_compartment ac
        LEFT JOIN res r ON ac.compartment_id = r.reservation_compartment_id
        AND r.reservation_date = :date_today
        
    GROUP BY ac.compartment_id,
        ac.compartment_class_type
)
SELECT DISTINCT train.train_id,
    train.train_name,
    train_type.train_type,
    train.train_start_time,
    train.train_end_time,
    START.station_name AS train_start_station,
END.station_name AS train_end_station,
TS1.train_stop_time AS estimated_start_time,
TS2.train_stop_time AS estimated_end_time,
reservation.*,
compartment_type.compartment_class_type,
fare.fare_price
FROM StartingTrains ST
    JOIN tbl_train_stop_station TS1 ON ST.train_id = TS1.train_id
    JOIN tbl_train_stop_station TS2 ON TS1.train_id = TS2.train_id
    JOIN tbl_train train ON ST.train_id = train.train_id
    JOIN tbl_train_type train_type ON train_type.train_type_id = train.train_type
    JOIN tbl_station AS START ON train.train_start_station = START.station_id
    JOIN tbl_station AS
END ON train.train_end_station =
END.station_id
JOIN tbl_compartment AS compartment ON compartment.compartment_train_id = train.train_id
JOIN tbl_compartment_class_type AS compartment_type ON compartment_type.compartment_class_type_id = compartment.compartment_class_type
JOIN CountReservations AS reservation ON reservation.compartment_id = compartment.compartment_id
JOIN tbl_fare AS fare ON fare.fare_train_type_id = train.train_type
WHERE TS1.station_id = :station_id
  
    AND TS1.stop_no < TS2.stop_no 
    AND fare.fare_compartment_id = compartment.compartment_class_type
    AND fare.fare_route_id = train.train_route
    AND fare.fare_start_station = :station_id
    AND train.train_id NOT IN (
        SELECT tbl_train_disable_period.disable_period_train_id
        FROM tbl_train_disable_period
            JOIN tbl_disable_period ON tbl_train_disable_period.disable_period_id = tbl_disable_period.disable_period_id
        WHERE disable_period_start_date <= :date_today
            AND disable_period_end_date >= :date_today
    )
GROUP BY compartment.compartment_id
ORDER BY train.train_start_time,
    compartment_type.compartment_class_type_id ASC