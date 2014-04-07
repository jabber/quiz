<?php
	class User_model extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
		}

		public function get_score($uid)
		{
			$this->db->where('uid',$uid);
			$result = $this->db->get('userscore_lib')->result();
			return $result;
		}

		public function get_info($uid)
		{
			$this->db->where('id',$uid);
			$this->db->select('id,email,first_name,last_name,company,phone');
			$result = $this->db->get('users')->result();

			return $result;
		}

		public function update_info($user_info,$id)
		{
			$this->db->where('id',$id);
			$this->db->update('users',$user_info);
		}
	}

?>