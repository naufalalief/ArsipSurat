<?php
	class delete extends CI_controller{
	function hapus($id_surat){
		$where = array('id_surat' => $id_surat);
		$this->db->delete('suratmasuk', array('id_surat' => $id_surat));
		redirect('suratmasuk');
	}
	}
?>