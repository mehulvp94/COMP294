<?php

class BracketController extends CI_Controller{
	
	public function index(){
		
		$data['val'] = "This is passed from controller";
		$this->load->model('bracket_model');
		$this->load->view('BracketView', $data);
	}
}
?>