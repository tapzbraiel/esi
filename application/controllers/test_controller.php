<?php

class Test_Controller extends CI_Controller{

	function index(){
		$this->load->model('pending_model');
		$p=new Pending_model();
		$ar=$p->loadPending();
		echo '<tt><pre>'.var_export($ar,TRUE).'</pre></tt>';
	}
}