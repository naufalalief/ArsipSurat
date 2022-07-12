<?php
class modal extends CI_controller{
        function __construct(){
        parent::__construct();      
        $this->load->helper('form', 'url');

    }

    function index(){
        $this->load->view('modal');
    }
}