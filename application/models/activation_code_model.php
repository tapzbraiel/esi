<?php

class Activation_code_model extends MY_Model{
	const DB_TABLE='activation_codes';
	const DB_TABLE_PK='ID';

	public $ID;
	public $ACTIVATION_CODE;
	public $GENERATED_DATE;
	public $GENERATED_BY;
}