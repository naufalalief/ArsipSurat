<?php 
class m_edit extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	public function update($username, $password)
	{
		$this->db->set('username', $username);
		$this->db->set('password', $password);
		$this->db->update('login');
	}
	public function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	

}