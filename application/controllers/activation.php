<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Activation extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('login_id')){
			redirect('login');
		}
		else{
			$type=$this->session->userdata('type');
			if($type=='member'){
				redirect('members');
			}
		}
	}
	
	function index(){
		$this->load->view('inc/header_view');
		$this->load->view('inc/admin/admin_logged_top_nav');
		$this->load->view('inc/company_logo_tagline');
		$this->load->view('inc/admin/admin_menu');
		$this->load->view('inc/admin/activation_code_view');
		$this->load->view('inc/footer_view');
	}

	function generate_code(){
		$counter=0;
		$codes=array();
		$this->load->library('table');
		$this->table->set_heading('#','Activation Code');
		$this->load->library('table');
		$codes_to_gen = $this->input->post("no_of_cod");
		for($i=1;$i<=$codes_to_gen;$i++){
			 $codes[]=array($i,$this->randomized());
		}
		$this->load->model('activation_code_model');
		$ac_cols=array();
		foreach ($codes as $key => $value) {
			$ac=new Activation_code_model();
			$ac->ID=$value[0];
			$ac->ACTIVATION_CODE=$value[1];
			$ac_cols[]=$ac;
			$counter++;
		}
		$data['codes']=$ac_cols;
		$this->load->view('inc/header_view');
		$this->load->view('inc/admin/admin_logged_top_nav');
		$this->load->view('inc/company_logo_tagline');
		$this->load->view('inc/admin/admin_menu');
		$this->load->view('inc/admin/activation_code_view',array('amount' => ($counter*900)));
		$this->load->view('inc/admin/generated_activation_code',$data);
		$this->load->view('inc/footer_view');
		//echo '<tt><pre>'.var_export($ac_cols,TRUE).'</pre></tt>'; 
	}

	function saveGeneratedCode(){
		$codes=array();
		$codes=explode(",",$this->input->post(html_escape("imploded_codes")));
		//echo date('Y-m-d H:i:s a', time());
		/*
		*loop until arraySize minus one then save to database
		*/
		$msg = (count($codes)-1)." Activation Code Successfully saved!";
		for($x=0;$x<count($codes)-1;$x++){
			$this->load->model('activation_code_model');
			$ac=new Activation_code_model();
			$ac->ACTIVATION_CODE=$codes[$x];
			$ac->GENERATED_DATE=date('Y-m-d H:i:s a', time());
			$ac->GENERATED_BY=$this->session->userdata('login_id');
			$ac->save();
		}
		$data['msg']=$msg;
		$data['codes']=$codes;
		$this->load->view('inc/header_view');
		$this->load->view('inc/admin/admin_logged_top_nav');
		$this->load->view('inc/company_logo_tagline');
		$this->load->view('inc/admin/admin_menu');
		$this->load->view('inc/admin/saved_activation_code_view',$data);
		$this->load->view('inc/footer_view');
	}

	function randomized(){
		 $this->load->model('activation_reference');
		 $ref=new Activation_reference();
		 $ref->load(1);
		 $s = substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0,12-strlen($ref->DIGIT) ).$ref->DIGIT;
		 $ref->DIGIT++;
		 $ref->save();
		 return $s;
	}
}