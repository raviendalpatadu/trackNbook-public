SELECT i.*, r.* , u.* 
            FROM tbl_inquiry i
            INNER JOIN tbl_user u ON i.inquiry_passenger_id = u.user_id
            INNER JOIN tbl_reservation r ON i.inquiry_ticket_id = r.reservation_ticket_id
            WHERE i.inquiry_id = 1;