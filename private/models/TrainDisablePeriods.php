<?php
class TrainDisablePeriods extends Model{
    protected $table = 'train_disable_period';
    protected $allowedColumns = ['disable_period_id','disable_period_train_id'];

    public function __construct(){
        parent::__construct();
    }  

    public function getAllDisableTrains($train_id){
        $query = "SELECT t.train_id, dp.disable_period_start_date, dp.disable_period_end_date FROM tbl_train_disable_period tdp
        JOIN tbl_disable_period dp ON tdp.disable_period_id = dp.disable_period_id
        JOIN tbl_train t ON tdp.disable_period_train_id = t.train_id
        WHERE disable_period_train_id = :train_id";

        $result = $this->query($query, [
            'train_id' => $train_id]
        );

        if(is_array($result) && count($result) > 0){
            return $result;
        }
        return [];
    }

}

?>