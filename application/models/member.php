<?php

class Member extends MY_Model{
	/*IDMEMBERS, ACTIVATION_CODE, FIRST_NAME, MIDDLE_NAME, 
	LAST_NAME, BIRTHDAY, CIVIL_STATUS, AGE, GENDER, TIN, MEMBERSHIP_DATE, 
	CONTACT_NUMBER, IMG, IS_ACTIVE, IS_APPROVED */

	const DB_TABLE='members';
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

 
}