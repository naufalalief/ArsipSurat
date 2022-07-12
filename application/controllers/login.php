<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');

	}

	function index(){
		$this->load->view('v_setting');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->m_login->cek_login("login",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'username' => $username,
				'password' => $password,
				'status' => "login"
				);

			$this->session->set_userdata($data_session,'login');
			$cek = 1;
			redirect(base_url("web"));

		}else{
				print "<script type=\"text/javascript\">alert('Username atau password salah ! ');
				window.location = 'http://localhost/codeigniter2/';
				</script>";

		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url(""));
	}
}