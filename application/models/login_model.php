<?php

class Login_model extends MY_Model{

	const DB_TABLE='users';
	const DB_TABLE_PK='IDUSERS';

	public $IDUSERS;
	public $USER_NAME;
	public $PASSWORD;
	public $USER_TYPE;
	public $IDMEMBERS;

	function validate(){
		$is_valid=FALSE;
		$data=array(
			'USER_NAME'=>$this->USER_NAME,
			'PASSWORD'=>$this->PASSWORD,
			'USER_TYPE'=>$this->USER_TYPE,
		);
		$this->get_record($data);
		if($this->IDUSERS){
			$is_valid=TRUE;
		}
		return $is_valid;
	}
}