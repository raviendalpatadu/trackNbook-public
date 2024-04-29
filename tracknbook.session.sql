
WITH current_station AS (
    SELECT *
    FROM tbl_train_stop_station
    WHERE train_id = 26 AND station_id = 1
),

next_stations AS (
    SELECT *
    FROM tbl_train_stop_station
    WHERE train_id = 26 AND stop_no > (SELECT stop_no FROM current_station)
)

SELECT *
FROM next_stations ns

JOIN tbl_reservation r ON  ns.train_id = r.reservation_train_id AND ns.station_id = r.reservation_start_station



