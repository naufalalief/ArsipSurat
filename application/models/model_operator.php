<?php
class model_operator extends CI_Model{



	function login($username,$password)
	{
		$chek = $this->db->get_where('operator', array('username'=>$username,'password'=> $password));
		if($chek->num_rows()>0){
			return 1;
		}
		else{
			return 0;
		}
	}
}