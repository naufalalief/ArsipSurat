<?php 
class m_upload extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	public function save($tgl_surat,$kode_surat,$keterangan,$halaman,$user_entri,$data, $url)
	{
		$this->db->set('tgl_surat', $tgl_surat);
		$this->db->set('kode_surat', $kode_surat);
		$this->db->set('keterangan', $keterangan);
		$this->db->set('halaman', $halaman);
		$this->db->set('user_entri', $user_entri);
		$this->db->set('nama', $data);
		$this->db->set('path', $url);

		$this->db->insert('suratmasuk');
	}
}