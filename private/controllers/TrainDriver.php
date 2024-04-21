<?php

/**
 * profile controller
 */

class TrainDriver extends Controller
{
    function index($id = '')
    {
        if (!Auth::is_logged_in() || !Auth::isUserType('train_driver')) {
            $this->redirect('login');
        }

        if (!Auth::isPinChanged(Auth::getuser_data(), 'train_driver')) {
            // get user id
            $user_id = Auth::getUser_id();
            $this->redirect('login/changepin/' . $user_id);
        }

        $train = new Trains();
        $data = array();
        
        // create a cookie to store the train id and driver id
        if(isset($id) && !isset($_COOKIE['train_driver'])){
            $train_data = $train->whereOne('train_id', $id);
            if($train_data){
                // get journey duration
                $tolerance = 7200; // 2 hours
                
                $duration = strtotime( $train_data->train_end_time) - strtotime($train_data->train_start_time) + $tolerance;
                
                // set the cookie of duration + 2 hours
                $data = array(
                    'train_id' => $id,
                    'driver_id' => Auth::getUser_id()
                );

                $data = json_encode($data);
                setcookie('train_driver', $data, time() + $duration , '/');

                
            }
        }
       

        $this->view('dashboard.traindriver');
    }
    function trainDelay($id = '')
    {

        $this->view('update.train.delay');
    }
    // function updateLocation($id = '')
    // {
    //     $train = new Trains();
    //     $data = array();
    //     $data['train'] = $train->whereOne('train_id', $id);

    //     $trainlocation = new TrainLocation();


    //     $this->view('update.location');
    // }



    function addLocation()
    {
        $train = new Trains();
        $data = array();
        $train_id = json_decode($_COOKIE['train_driver'])->train_id;


        $data['train'] = $train->findTrain($train_id)[0];


        $train_stop_station = new TrainStopStations();
        $data['train_stop_stations'] = $train_stop_station->getTrainStopStationNames($train_id);

        if(isset($_POST['submit'])){
            $trainlocation = new TrainLocation();
            
            $location_data = array(
                'train_id' => $train_id,
                'date' => date('Y-m-d'),
                'train_location' => $_POST['station_id'],
                'train_location_updated_time' => date('Y-m-d H:i:s')
            );

            if($trainlocation->validate($location_data) === true){
                // update the location
                $trainlocation->updateLocation($location_data);

                
                $this->redirect('traindriver/addlocation?success=1');
            } else {
               $data = array_merge($data, $trainlocation->errors);
            }
        }


        $this->view('add.location', $data);
    }

    function scanLocation($id = '')
    {

        $this->view('scan.train.location');
    }

    function qr()
    {
        $this->view('QRSearch.traindriver');
    }

    function idoption($id = '')
    {
        if(!Auth::is_logged_in() || !Auth::isUserType('train_driver')){
            $this->redirect('login');
        }

        if(!Auth::isPinChanged(Auth::getuser_data(), 'train_driver')){
            // get user id
            $user_id = Auth::getUser_id();
            $this->redirect('login/changepin/'.$user_id);
        }

        // if cookie is set redirect to train driver page
        if(isset($_COOKIE['train_driver'])){
            $data = json_decode($_COOKIE['train_driver']);
            if($data->driver_id != Auth::getUser_id() && $data->train_id != $id){
                $this->redirect('traindriver/index/'.$data->train_id);
            }
        }
         
        $this->view('option.traindriver');
    }

}