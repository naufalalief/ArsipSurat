<?php 

class suratkeluar extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data2');
                $this->load->helper('url');
	}

	function index(){
		$data['suratkeluar'] = $this->m_data2->tampil_data()->result();
		$this->load->view('v_header4');
		$this->load->view('v_suratkeluar',$data);
		$this->load->view('v_footer');
	}
}