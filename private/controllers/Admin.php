<?php

/**
 * home controller
 */

class Admin extends Controller
{
    function index($id = '')
    {

        $this->view('home');
    }

    function getUsers(){

        $user = new Users();

        // $train = new Trains();

        $data = array();

        // $data['trains'] = $train->findAll();
        $data['users'] = $user->findAll();
        // if (isset($_POST['submit']) && !empty($_POST['reservation_date'])) {
        //     $data['users'] = $user->getusers('reservation_date', $_POST['reservation_date']);
        // }
        // if (isset($_POST['submit']) && !empty($_POST['reservation_passenger_nic'])) {
        //     $data['users'] = $user->getusers('reservation_passenger_nic', $_POST['reservation_passenger_nic']);
        // }
        // if (isset($_POST['submit']) && !empty($_POST['reservation_train_id'])) {
        //     $data['users'] = $user->getusers('reservation_train_id', $_POST['reservation_train_id']);
        // }

        $this->view('display.users.admin', $data);
    }

    function updateUser($id = ''){
        $user = new Users();
        $data = array();

        $data['user'] = $user->whereOne('user_id',$id);
        
        if(isset($_POST['update'])){
            try{
                $result = $user->updateUser($id, $_POST);

                if($result !=1 && array_key_exists('errors', $result)){
                    $data['errors'] = $result['errors'];
                }
            }catch(Exception $e){
                die($e->getMessage());
            }
        }


        $this->view('update.user.admin', $data);
    }

    function deleteUser($id = ''){
        $user = new Users();
        $data = array();
        
        // if(isset($_POST['delete'])){
            try{
                $result = $user->delete($id,"user_id");
                $this->redirect('admin/getUsers');

                // if($result !=1 && array_key_exists('errors', $result)){
                //     $data['errors'] = $result['errors'];
                //     echo "<pre>";
                //     echo "</pre>";
                // }

            }catch(Exception $e){
                die($e->getMessage());
            }
        // }
    }

    function search($id = '')
    {
        $this->view('view.user.admin');
    }
}
