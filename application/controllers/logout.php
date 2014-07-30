<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller{

	function index(){
		$this->session->unset_userdata(array('login_id'=>''));
		redirect('login');
	}
}