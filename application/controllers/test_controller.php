<?php

class Test_Controller extends CI_Controller{

	function index(){
		$this->load->model('pending_model');
		$p=new Pending_model();
		$ar=$p->loadPending();
<<<<<<< HEAD
		echo '<tt><pre>'.var_export($ar,TRUE).'</pre></tt>';
=======
		//echo '<tt><pre>'.var_export($ar,TRUE).'</pre></tt>';
		//$data['pending']=$ar;
		//$this->load->view('inc/admin/pending_view',$data);
		/*foreach ($ar as $key => $value) {
			//echo '<tt><pre>'.var_export($value,TRUE).'</pre></tt>';
			echo $value['USER_NAME'].'</br>';
		}*/
>>>>>>> aa2443fefe75a9e89aa7fae06d43046322374fe0
	}
}