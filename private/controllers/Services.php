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
    function contact($id = '')
    {
        $this->view('contact');
    }
    function terms($id = '')
    {
        $this->view('terms');
    }
}