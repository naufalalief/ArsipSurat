<?php
	Class m_buatsurat extends CI_Model{
		function input_data($data,$table){
		return $this->db->insert($table,$data);
		}
	}
?>