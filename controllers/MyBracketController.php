<?php

class MyBracketController extends CI_Controller{
	
	public function index(){
		
		$data['val'] = "This is passed from controller";
		$this->load->view('MyBracketView', $data);
	}
}
?>