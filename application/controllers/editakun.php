<?php 
class editakun extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_edit');
		$this->load->helper('form', 'url');

	}

	function index(){
		$this->load->view('v_header2');
		$this->load->view('v_editakun');
		$this->load->view('v_footer');
	}

	public function aksi_editakun(){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$data_session = array(
				'username' => $username,
				'password' => $password,
				'status' => "login"
				);
		$this->session->set_userdata($data_session,'login');
		$this->m_edit->update($username, $password);
				redirect("web/about");
	}
}