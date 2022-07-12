<?php
	class delete2 extends CI_controller{
	function hapus($id){
		$where = array('id' => $id);
		$this->db->delete('suratkeluar', array('id' => $id));
		redirect('suratkeluar');
	}
	}
?>