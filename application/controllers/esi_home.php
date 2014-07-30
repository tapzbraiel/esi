<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Esi_home extends CI_Controller{

	function index(){
		$this->public_page();
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
}