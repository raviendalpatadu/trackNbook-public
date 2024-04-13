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

    function usersList()
    {

        $user = new Users();

        $data = array();


        $data['users'] = $user->findAll();
        if (isset($_POST['submit']) && !empty($_POST['user_first_name'])) {
            $data['users'] = $user->getUsers('user_first_name', $_POST['user_first_name']);
        }
        if (isset($_POST['submit']) && !empty($_POST['user_nic'])) {
            $data['users'] = $user->getUsers('user_nic', $_POST['user_nic']);
        }

        $this->view('display.users.admin', $data);
    }



    function updateUser($id = '')
    {
        $user = new Users();
        $data = array();

        $data['user'] = $user->whereOne('user_id', $id);

        if (isset($_POST['update'])) {
            try {
                $result = $user->updateUser($id, $_POST);

                if ($result != 1 && array_key_exists('errors', $result)) {
                    $data['errors'] = $result['errors'];
                }
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }


        $this->view('update.user.admin', $data);
    }

    function deleteUser($id = '')
    {
        $user = new Users();
        $data = array();

        // if(isset($_POST['delete'])){
        try {
            $result = $user->delete($id, "user_id");
            $this->redirect('admin/usersList');

            // if($result !=1 && array_key_exists('errors', $result)){
            //     $data['errors'] = $result['errors'];
            //     echo "<pre>";
            //     echo "</pre>";
            // }

        } catch (Exception $e) {
            die($e->getMessage());
        }
        // }
    }

    function search($id = '')
    {
        $this->view('view.user.admin');
    }

    function trainList()
    {
        $this->view('admin.trainList');

    }
    function trainRequest()
    {
        $this->view('admin.trainRequest');

    }
    function inquiry()
    {
        $this->view('admin.inquiry');

    }

    function test()
    {

        $user = new Users();
        $data = array();

        $data['users'] = $user->findAll();

        $this->view('displaytest.users.admin', $data);

    }

}
