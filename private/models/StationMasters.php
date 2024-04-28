<?php


class StationMasterModel extends Model
{
    protected $table = 'tbl_station_master';

    public function __construct()
    {
        parent::__construct();
    }

    // public function getStationName($station_master_id)
    // {
    //     try {

    //         $result = $this->whereOne('station_master_id', $station_master_id);
    //         if ($result) {
    //             return $result['station_name'];
    //         }
    //     } catch (PDOException $e) {
    //         echo $e->getMessage();
    //     }
    //     return null;
    // }



    public function getAllStationMastersByStation($stationId)
    {
        try {
            $query = "SELECT 
                    sm.station_master_id,
                    sm.station_master_station,
                    u.user_name,
                    u.user_phone_number,
                    u.user_email
                  FROM
                    $this->table sm
                    JOIN tbl_user u ON sm.station_master_id = u.user_id
                  WHERE
                    sm.station_master_station = :stationId";

        $result = $this->query($query, ['stationId' => $stationId]);

            if(is_array($result) && count($result) > 0){
                return $result;
            }
            return [];
        } catch (PDOException $e) {
            // Log the error or handle it appropriately
            error_log("Error fetching station masters: " . $e->getMessage());
            return false;
        }
    }

}



