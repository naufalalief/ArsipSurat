<?php 

class register extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_register');
		$this->load->helper('url');

	}

	function index(){
		$this->load->view('v_login');
	}

	function aksi_register(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$email	  = $this->input->post('email');
		$data = array(
			'username' => $username,
			'password' => $password,
			'email'	   => $email
			);
		$this->m_register->input_data($data,'login');
			redirect(base_url(""));
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url(""));
	}
}