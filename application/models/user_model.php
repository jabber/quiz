<?php
	class User_model extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
		}

		public function get_score($uid=null)
		{
			$uid = 2;	//temporarily set this

			$this->db->where('uid',$uid);
			$result = $this->db->get('userscore_lib')->result();
			return $result;
		}

		public function get_info($uid=null)
		{
			$uid = 2;	//temporarily set this

			$this->db->where('id',$uid);
			$this->db->select('email,first_name,last_name,company,phone');
			$result = $this->db->get('users')->result();
			return $result;
		}
	}

?>