<?php 
class lain extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->helper('form', 'url');

	}

	function index(){
		$this->load->view('v_header2');
		$this->load->view('v_lain');
		$this->load->view('v_footer');
	}
}