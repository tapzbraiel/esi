<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('login_id')){
			redirect('login');
		}
	}
	function index(){
		$this->load->view('inc/header_view');
		$this->load->view('inc/admin/admin_logged_top_nav');
		$this->load->view('inc/company_logo_tagline');
		$this->load->view('inc/admin/admin_menu');
		$this->load->view('inc/admin/admin_view');
		$this->load->view('inc/footer_view');
	}
}