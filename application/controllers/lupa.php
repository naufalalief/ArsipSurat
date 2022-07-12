<?php 
class lupa extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_lupa');

	}

	function index(){
		$this->load->view('v_header3');
		$this->load->view('v_lupa');
		$this->load->view('v_footer');
	}
}