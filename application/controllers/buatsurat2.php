<?php 
class buatsurat2 extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_upload2');
		$this->load->helper('form', 'url');

	}

	function index(){
		$this->load->view('v_header2');
		$this->load->view('v_buatsurat2');
		$this->load->view('v_footer');
	}

	public function aksi_buatsurat(){
		$url = $this->do_upload();
		$data = $_FILES["berkas"]['name'].$type;
		$judul = $_POST['judul'];
		$keterangan = $_POST['keterangan'];
		$kepada = $_POST['kepada'];
		$pengirim = $this->session->userdata('username');
		$tgl_kirim  = date('Y-m-d');
		$this->m_upload2->save($tgl_kirim,$judul,$keterangan,$kepada,$pengirim,$data,$url);
				redirect("web/menu");
	}
	private function do_upload(){
		$type = explode('.', $_FILES["berkas"]['name']);
		$type = $type[count($type)-1];
		$url = "./assets/images2/".$_FILES["berkas"]['name'];
		if(in_array($type, array("jpg", "png", "gif", "jpeg")))
			if(is_uploaded_file($_FILES['berkas']['tmp_name']))
				if(move_uploaded_file($_FILES['berkas']['tmp_name'], $url))
					return $url;
		redirect("web/menu");
	}
}