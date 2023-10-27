<?php

/**
 * home controller
 */

class Services extends Controller
{
    function index($id = '')
    {
        $this->view('services');
    }
    function manage($id = '')
    {
        $this->view('admin.manage');
    }
}