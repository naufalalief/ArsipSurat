<?php 
class m_upload2 extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	public function save($tgl_kirim,$judul,$keterangan,$kepada,$pengirim,$data,$url)
	{
		$this->db->set('tgl_kirim', $tgl_kirim);
		$this->db->set('judul', $judul);
		$this->db->set('keterangan', $keterangan);
		$this->db->set('kepada', $kepada);
		$this->db->set('pengirim', $pengirim);
		$this->db->set('nama', $data);
		$this->db->set('path', $url);

		$this->db->insert('suratkeluar');
	}
}