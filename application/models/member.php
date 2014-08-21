<?php

class Member extends MY_Model{
	/*IDMEMBERS, ACTIVATION_CODE, FIRST_NAME, MIDDLE_NAME, 
	LAST_NAME, BIRTHDAY, CIVIL_STATUS, AGE, GENDER, TIN, MEMBERSHIP_DATE, 
	CONTACT_NUMBER, IMG, IS_ACTIVE, IS_APPROVED */

	const DB_TABLE='members mem';
	const DB_TABLE_PK='IDMEMBERS';

	public $IDMEMBERS;
	public $ACTIVATION_CODE;
	public $FIRST_NAME;
	public $MIDDLE_NAME;
	public $LAST_NAME;
	public $BIRTHDAY;
	public $CIVIL_STATUS;
	public $AGE;
	public $GENDER;
	public $TIN;
	public $MEMBERSHIP_DATE;
	public $CONTACT_NUMBER;
	public $IMG;
	public $IS_ACTIVE;
	public $IS_APPROVED;

	private $table_to_join=array();
	private $common_fields=array();

<<<<<<< HEAD
=======
	function loadActiveMembers($num=10,$start=0){
		/*
		SELECT * FROM `members` mem
		INNER JOIN users u
		ON mem.IDMEMBERS=u.IDMEMBERS
		WHERE mem.IS_ACTIVE=1
		AND mem.IS_APPROVED=1
		*/
		$this->db->SELECT('mem.*,u.*');
		$this->db->FROM('members mem');
		$this->db->JOIN('users u','mem.IDMEMBERS=u.IDMEMBERS','INNER');
		$this->db->where(array('mem.IS_ACTIVE'=>1,'mem.IS_APPROVED'=>1));
		$this->db->limit($num,$start);
		$query=$this->db->get();
		return $query->result_array();
	}

	function active_members_count(){
		$this->db->SELECT('mem.*,u.*');
		$this->db->FROM('members mem');
		$this->db->JOIN('users u','mem.IDMEMBERS=u.IDMEMBERS','INNER');
		$this->db->where(array('mem.IS_ACTIVE'=>1,'mem.IS_APPROVED'=>1));
		$query=$this->db->get();
		return $query->num_rows();
	}

>>>>>>> aa2443fefe75a9e89aa7fae06d43046322374fe0
	function addTableToJoin($table_name_with_alias){
		$this->table_to_join[]=$table_name_with_alias;
	}
	function addCommonFieldsToJoin($fields_to_join_with_alias){
		$this->common_fields[]=$fields_to_join_with_alias;
	}

	function join_record($limit=0,$offset=0){
		echo "table_to_join_count ".count($this->table_to_join).'</br>';
		echo "common_fields ".count($this->common_fields);
		return parent::get_join_record($this->table_to_join,$this->common_fields,$limit,$offset);
	}
}