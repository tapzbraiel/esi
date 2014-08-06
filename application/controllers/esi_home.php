<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Esi_home extends CI_Controller{

	function index(){
		if($this->session->userdata('login_id')){
			$this->home_user_logged();
		}
		else{
			$this->public_page();
		}
	}

	function public_page(){
		$data=array();
		$announcement_col=array();

		$this->load->model('Announcement_model');
		$announcement=new Announcement_model();		
		$announcement_col=$announcement->get();
		$data['announcement']=$announcement_col;

		
		$this->load->view('inc/header_view');		
		$this->load->view('inc/public_top_nav');
		$this->load->view('inc/company_logo_tagline');
		$this->load->view('inc/public_menu');
		$this->load->view('inc/slider_product');
		$this->load->view('esi_public_content',$data);
		$this->load->view('inc/footer_view');
	}

	function home_user_logged(){
		$data=array();
		$announcement_col=array();

		$this->load->model('Announcement_model');
		$announcement=new Announcement_model();		
		$announcement_col=$announcement->get();
		$data['announcement']=$announcement_col;

		
		$this->load->view('inc/header_view');	
		$this->load->view('inc/admin/admin_logged_top_nav');
		$this->load->view('inc/company_logo_tagline');

		$this->load->model('login_model');
		$login_model=new Login_model();
		$login_model->load($this->session->userdata('login_id'));
		if($login_model->USER_TYPE==='admin'){
			$this->load->view('inc/admin/admin_menu');
		}
		else{
			$this->load->view('inc/public_menu');
		}
		$this->load->view('inc/slider_product');
		$this->load->view('esi_public_content',$data);
		$this->load->view('inc/footer_view');
	}
}