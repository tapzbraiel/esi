<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Members extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('login_id')){
			redirect('login');
		}
		$this->load->model('member');
	}
	function index(){
		$this->loadMembers();
	}
	
	function loadMembers($starts=0){

		$m=new Member();
		$ar=$m->loadActiveMembers(10,$starts);
		
		$this->load->library('pagination');
		$config['base_url']=base_url().'index.php/members/loadMembers';
		$config['total_rows']=$m->active_members_count();
		$config['per_page']=10;
		$this->pagination->initialize($config);
		$data['members']=$ar;
		$data['pages']=$this->pagination->create_links();

		$this->load->view('inc/header_view');
		$this->load->view('inc/admin/admin_logged_top_nav');
		$this->load->view('inc/company_logo_tagline');
		$this->load->view('inc/admin/admin_menu');
		$this->load->view('inc/member/members_view',$data);
		$this->load->view('inc/footer_view');
	}
}