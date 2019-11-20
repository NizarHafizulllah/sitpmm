<?php
class LoginController extends CI_Controller {
	function __construct() {
        parent::__construct();
        
	
	}

	function set_content($str) {
		$this->content['content'] = $str;
		
	}
	
	function set_title($str) {
		$this->content['title'] = $str;
	}
	
	function render()
	{
		$this->load->view("LoginViewTemplate",$this->content );
		
	}


}
