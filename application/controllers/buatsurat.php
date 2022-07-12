<?php 
class buatsurat extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_upload');
		$this->load->helper('form', 'url');

	}

	function index(){
		$this->load->view('v_header2');
		$this->load->view('v_buatsurat');
		$this->load->view('v_footer');
	}

	public function aksi_buatsurat(){
		$url = $this->do_upload();
		$data = $_FILES["berkas"]['name'].$type;
		$kode_surat = $_POST['kode_surat'];
		$keterangan = $_POST['keterangan'];
		$halaman = $_POST['halaman'];
		$user_entri = $this->session->userdata('username');
		$tgl_surat  = date('Y-m-d');
		$this->m_upload->save($tgl_surat,$kode_surat,$keterangan,$halaman,$user_entri, $data ,$url);
				redirect("web/menu");
	}
	private function do_upload(){
		$type = explode('.', $_FILES["berkas"]['name']);
		$type = $type[count($type)-1];
		$url = "./assets/images/".$_FILES["berkas"]['name'];
		if(in_array($type, array("jpg", "png", "gif", "jpeg")))
			if(is_uploaded_file($_FILES['berkas']['tmp_name']))
				if(move_uploaded_file($_FILES['berkas']['tmp_name'], $url))
					return $url;
		redirect("web/menu");
	}
}