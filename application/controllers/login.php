<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{

	function index(){ //for validation
		$this->load->library('form_validation');
		$this->form_validation->set_rules(array(
			array(
				'field'=>'username',
				'label'=>'Username',
				'rules'=>'required',
			),
			array(
				'field'=>'password',
				'label'=>'Password',
				'rules'=>'required',
			),
			array(
				'field'=>'user_type',
				'label'=>'User type',
				'rules'=>'required',
			),
		));
		$this->form_validation->set_error_delimiters('<div class="alert alert-error">','</div>');
		if(!$this->form_validation->run()){
			$this->load->view('inc/header_view');		
<<<<<<< HEAD
			$this->load->view('inc/company_logo_tagline');
=======
			$this->load->view('inc/company_logo_tagline',array('top_margin'=>60));
>>>>>>> aa2443fefe75a9e89aa7fae06d43046322374fe0
			$this->load->view('login_view');//trigger error on submit if data are not valid
			$this->load->view('inc/footer_view');	
		}
		else{
			$this->isValidAccount(); //trigger account validation if inputted data are valid
		}
	}

	function isValidAccount(){
		$username=$this->input->post(html_escape("username"));
		$pw=$this->input->post(html_escape("password"));
		$u_type=$this->input->post(html_escape("user_type"));

		$this->load->model('login_model');
		$login_model=new Login_model();
		$login_model->USER_NAME=$username;
		$login_model->PASSWORD=$pw;
		$login_model->USER_TYPE=$u_type;
		$result=$login_model->validate();
		
		if($result){
			//$this->load->view('success_msg');
			$this->session->set_userdata(array('login_id'=>$login_model->IDUSERS,'type'=>$login_model->USER_TYPE));
			if($login_model->USER_TYPE==='admin'){
				redirect('admin');
			}
			else{
				redirect('members');
			}
		}
		else{
			$data['invalid']='<div class="alert alert-error">Invalid username/password</div>';
			if($this->form_validation->run()){
			$this->load->view('inc/header_view');		
			$this->load->view('inc/company_logo_tagline');
			$this->load->view('login_view',$data);//trigger error on submit if data are not valid
			$this->load->view('inc/footer_view');	
		}
			$this->load->view('failed_msg');
		}
	}
}