<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pending extends CI_Controller{

<<<<<<< HEAD
	function index(){
=======
	function __construct(){
		parent::__construct();
		$this->load->model('pending_model');
	}
	function index(){
		$p=new Pending_model();
		$ar=$p->loadPending();
		//echo '<tt><pre>'.var_export($ar,TRUE).'</pre></tt>';
		$data['pending']=$ar;

		$this->load->view('inc/header_view');
		$this->load->view('inc/admin/admin_logged_top_nav');
		$this->load->view('inc/company_logo_tagline');
		$this->load->view('inc/admin/admin_menu');
		$this->load->view('inc/admin/pending_view',$data);
		$this->load->view('inc/footer_view');
	}

	function viewDetails($id){

	}

	function approved($id){
		$this->load->model('member');
		$mem_to_update=new Member();
		$mem_to_update->load($id);
		$mem_to_update->IS_APPROVED=1;
		$mem_to_update->save();

		$p=new Pending_model();
		$pending_user=$p->loadPendingUser($id);
		$ar=$p->loadPending();
		
		$username='';
		foreach ($pending_user as $key => $value) {
			$username=$value['USER_NAME'];
		}
		$data['username']=$username;
		$data['pending']=$ar;

>>>>>>> aa2443fefe75a9e89aa7fae06d43046322374fe0
		$this->load->view('inc/header_view');
		$this->load->view('inc/admin/admin_logged_top_nav');
		$this->load->view('inc/company_logo_tagline');
		$this->load->view('inc/admin/admin_menu');
<<<<<<< HEAD
		$this->load->view('inc/admin/pending_view');
		$this->load->view('inc/footer_view');
	}
=======
		$this->load->view('inc/admin/pending_approved_view',$data);
		$this->load->view('inc/footer_view');
	}

	function discard($id){
		
	}
>>>>>>> aa2443fefe75a9e89aa7fae06d43046322374fe0
}