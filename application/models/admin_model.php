<?php
class Admin_model extends CI_Model
{
	function __construct()
	{
		parent::__construct()
		$this->load->database();
	}

	private function list_user_hasScore()
	{
		$this->db->select('id');
		$this->db->where('has_score',1);
		$this->db->from('users');
		$result = $this->db->get()->result();
		print_r('<pre>');
		print_r($result);
		die();
	}

	public function list_user_score($uid)
	{
		$uidArray = $this->list_user_hasScore();

	}
}


?>