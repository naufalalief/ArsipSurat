<?php 

class suratmasuk extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
                $this->load->helper('url');
	}

	function index(){
		$data['suratmasuk'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_header4');
		$this->load->view('v_suratmasuk',$data);
		$this->load->view('v_footer');
	}
}