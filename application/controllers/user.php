<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('user_model');
	}

	function _render_page($view, $data=null, $render=false)
	{

		$this->viewdata = (empty($data)) ? $this->data: $data;
		$view_html = $this->load->view($view, $this->viewdata, $render);
		if (!$render) return $view_html;
	}

	public function user_info($uid=null)
	{
		$score = $this->user_model->get_score($uid);
		$info = $this->user_model->get_info($uid);
		$result = array($info,$score);
		$this->data['info'] = json_encode($result);
		// print_r('<pre>');
		// print_r(json_encode($result));
		// die();
		$this->_render_page('user/info.php',$this->data);
	}
}
?>