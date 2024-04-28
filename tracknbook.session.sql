WITH current_st AS ( 
            SELECT tss.*
            FROM tbl_train_stop_station tss 
            WHERE tss.train_id = 26 AND tss.station_id = 2
            ),
            next_st AS (
            SELECT ts.*
            FROM tbl_train_stop_station ts , current_st cs
            WHERE ts.train_id = 26 AND ts.stop_no BETWEEN cs.stop_no+1 AND cs.stop_no + 2
            )
            
            SELECT r.* 
            FROM tbl_reservation r , next_st ns
            WHERE r.reservation_start_station = ns.station_id AND r.reservation_date = '2024-04-28'
            AND r.reservation_status = 'Reserved'