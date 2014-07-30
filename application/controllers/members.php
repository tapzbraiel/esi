<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Members extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('login_id')){
			redirect('login');
		}
	}
	function index(){
		$this->load->view('members_view');
	}
}