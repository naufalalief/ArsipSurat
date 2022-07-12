<?php 

class M_data2 extends CI_Model{
	function tampil_data(){
		return $this->db->get('suratkeluar');
	}
}