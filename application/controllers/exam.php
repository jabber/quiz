<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Exam extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('question_model');
		$this->load->model('quiz_model');
	}

	function _render_page($view, $data=null, $render=false)
	{
		$this->viewdata = (empty($data)) ? $this->data: $data;
		$view_html = $this->load->view($view, $this->viewdata, $render);
		if (!$render) return $view_html;
	}

	public function one_exam()
	{
		$this->data['title'] = 'Exam';

		$this->quiz_model->create_exam();

		$this->_render_page('exam/one_exam',$this->data);
	}
}
?>