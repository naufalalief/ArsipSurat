<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Web extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url');
	}

	public function index(){		
		$data['judul'] = "Home";
		$this->load->view('v_header2',$data);
		$this->load->view('v_index',$data);
		$this->load->view('v_footer',$data);
	}

	public function about(){
		$data['suratmasuk'] = $data['suratmasuk'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_about',$data);
	}
	public function login(){
		$data['judul'] = "Welkom";
		$this->load->view('v_header3', $data);
		$this->load->view('v_login', $data);
		$this->load->view('v_footer', $data);
	}
	public function register(){
		$data['judul'] = "Silahkan mendaftar";
		$this->load->view('v_header3', $data);
		$this->load->view('v_register', $data);
		$this->load->view('v_footer', $data);


	}
	public function welcome(){
		$data['judul'] = "Selamat Datang";
		$this->load->view('v_header2', $data);
		$this->load->view('v_admin', $data);
		$this->load->view('v_footer', $data);

	}
	public function menu(){
		$data['judul'] = "Menu";
		$this->load->view('v_header2', $data);
		$this->load->view('v_menu', $data);
		$this->load->view('v_footer', $data);
	}
	public function lain(){
		$data['judul'] = "lain-lain";
		$this->load->view('v_header2', $data);
		$this->load->view('v_lain', $data);
		$this->load->view('v_footer', $data);
	}
	public function lupa(){
		$data['judul'] = "Lupa password";
		$this->load->view('v_header2', $data);
		$this->load->view('v_lupa', $data);
		$this->load->view('v_footer', $data);
	}
	public function setting(){
		$data['judul'] = "Setting";
		$this->load->view('v_setting', $data);
	}
	
}