<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('cookie');
		$this->load->helper('url');
		$this->load->model('user_model');
		$this->load->library('form_validation');
	}

	function _render_page($view, $data=null, $render=false)
	{

		$this->viewdata = (empty($data)) ? $this->data: $data;
		$view_html = $this->load->view($view, $this->viewdata, $render);
		if (!$render) return $view_html;
	}

	public function info()
	{
		$this->data['title'] = 'User Info';
		$cookie = get_cookie('quiz_cookie');

		$cookie = substr($cookie,1,-1);
		$str = explode(',', $cookie);
		$temp = explode(':', $str[1]);
		$uid = substr($temp[1],1,-1);

		$info = $this->user_model->get_info($uid);
		$this->data['info'] = json_encode($info);

		$this->_render_page('user/info',$this->data);
	}

	public function edit_info()
	{
		$this->data['title'] = 'Edit Userinfo';
		$id = $this->input->post('id');
		$this->db->where('id',$id);
		$this->db->from('users');
		$result = $this->db->get()->result();

		$fieldArray = array();
		foreach ($result[0] as $key => $value) {
			$fieldArray[$key] = $value;
		}
		$this->data['id'] = $fieldArray['id'];
		$this->data['lastname'] = $fieldArray['last_name'];
		$this->data['firstname'] = $fieldArray['first_name'];
		$this->data['email'] = $fieldArray['email'];
		$this->data['phone'] = $fieldArray['phone'];
		$this->data['company'] = $fieldArray['company'];		

		$this->form_validation->set_rules('lastname','Lastname','required');
		$this->form_validation->set_rules('firstname','Firstname','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('phone','Phone','required');
		$this->form_validation->set_rules('company','Company','required');
		
		if($this->form_validation->run() == TRUE)
		{
			$user_info = array(
				'id' => $this->input->post('id'),
				'last_name' => $this->input->post('lastname'),
				'first_name' => $this->input->post('firstname'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'company' => $this->input->post('company')
				);
			$this->user_model->update_info($user_info,$id);
			redirect('user/info','refresh');
		}
		$this->_render_page('user/edit_info',$this->data);
	}

	public function score()
	{
		$this->data['title'] = 'User Info';
		$cookie = get_cookie('quiz_cookie');

		$cookie = substr($cookie,1,-1);
		$str = explode(',', $cookie);
		$temp = explode(':', $str[1]);
		$uid = substr($temp[1],1,-1);

		$score = $this->user_model->get_score($uid);
		$this->data['score'] = json_encode($score);

		$this->_render_page('user/score',$this->data);
	}
}
?>