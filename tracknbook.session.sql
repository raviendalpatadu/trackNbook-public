SELECT c.*, start_st.station_name
FROM tbl_reservation_cancelled c
JOIN tbl_station start_st ON c.reservation_start_station = start_st.station_id;