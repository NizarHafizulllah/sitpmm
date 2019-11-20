<?php
class AdminController extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->model("CoreModel","cm");

		$userdata = $this->session->userdata('pengguna');
		if ($userdata['is_login']==false) {
			redirect(site_url('Login'));
		}

		$data_menu = $this->cm->get_menu($userdata['akses'])->result_array();

		foreach ($data_menu as $key => $value) {
			$data_menu[$key]['submenu'] = $this->cm->get_sub_menu($userdata['akses'], $value['menu'])->result_array();
		}
		$this->menu = $data_menu;



	}

	function set_content($str)
	{
		$this->content['content'] = $str;
	}

	function set_title($str)
	{
		$this->content['title'] = $str;
	}

	function render()
	{
		// show_array($this->menu);
		$this->load->view("AdminTemplate", $this->content);
	}
}
