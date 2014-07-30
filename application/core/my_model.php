<?php

class MY_Model extends CI_Model{
	const DB_TABLE='abstract';
	const DB_TABLE_PK='abstract';

	private function insert(){
		$this->db->insert($this::DB_TABLE,$this);
		$this->{$this::DB_TABLE_PK}=$this->db->insert_id();
	}

	private function update(){
		$this->db->where($this::DB_TABLE_PK,$this->{$this::DB_TABLE_PK});
		$this->db->update($this::DB_TABLE,$this);
	}

	public function populate($row){
		foreach ($row as $key => $value) {
			$this->$key=$value;
		}
	}

	public function load($id){
			$query=$this->db->get_where($this::DB_TABLE,array(
			$this::DB_TABLE_PK=>$id,
		));
		$this->populate($query->row());
	}

	public function delete(){
		$this->db->delete($this::DB_TABLE,array(
			$this::DB_TABLE_PK=>$this->{$this::DB_TABLE_PK},
		));	
		unset($this->{$this::DB_TABLE_PK});
	}

	public function save(){
		if(isset($this->{$this::DB_TABLE_PK})){
			$this->update();
		}
		else{
			$this->insert();
		}
	}

	public function get($limit=0,$offset=0){
		if($limit){
			$query=$this->db->get($this::DB_TABLE,$limit,$offset);
		}
		else{
			$query=$this->db->get($this::DB_TABLE);
		}
		$ret_val=array();
		$class=get_class($this);
		foreach ($query->result() as $row) {
			$model=new $class;
			$model->populate($row);
			$ret_val[$row->{$this::DB_TABLE_PK}]=$model;
		}
		return $ret_val;
	}

	/*
	*usage: query record from database
	*param: field=>value
	*load object attribute
	*/
	protected function get_record($array_field_value){
		$query=$this->db->get_where($this::DB_TABLE,$array_field_value);
		//echo $this->db->last_query().'</br>';
		if($query->num_rows()){
			$this->populate($query->row());
		}
	}
}