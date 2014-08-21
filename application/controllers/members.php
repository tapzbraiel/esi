<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Members extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('login_id')){
			redirect('login');
		}
	}
	function index(){
		$this->getMembers();
	}
	
	function getMembers(){
		
		$memberdata =array();
		$member_col=array();

		$this->load->model('Member');
		$this->load->library("pagination");
		$member=new Member();		
		$member_col=$member->get();
		
		$config = array();
        $config["base_url"] = "members/getMembers";
        $config["total_rows"] = $this->Member->record_count();
        $config["per_page"] = 1;
        $config["uri_segment"] = 3;
	    $choice = $config["total_rows"] / $config["per_page"];
	    $config["num_links"] = round($choice);
 
        $this->pagination->initialize($config);
 
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $memberdata["results"] = $this->Member->get($config["per_page"], $page);
        $memberdata["links"] = $this->pagination->create_links();
 
		
		$this->load->view('inc/header_view');
		$this->load->view('inc/admin/admin_logged_top_nav');
		$this->load->view('inc/company_logo_tagline');
		$this->load->view('inc/admin/admin_menu');
		$this->load->view('members_view',$memberdata);
		$this->load->view('inc/footer_view');
	}
}