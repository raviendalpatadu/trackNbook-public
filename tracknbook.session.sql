SELECT c.*, s.station_name
FROM tbl_reservation_cancelled c
    JOIN tbl_station s start_st ON c.reservation_start_station = s.station_id ;