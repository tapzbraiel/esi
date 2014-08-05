<?php

class Pending_model extends CI_Model{
	
	function loadPending(){
		/*$this->db->query("SELECT u.USER_NAME,
						mem.IDMEMBERS,mem.ACTIVATION_CODE,mem.FIRST_NAME,mem.LAST_NAME,
             			mem2.IDMEMBERS as REFERRALS_ID,mem2.ACTIVATION_CODE AS REFERRALS_ACTIVATION, mem2.FIRST_NAME AS REFERRALS_FNAME,
             			u2.USER_NAME as REFERRALS_USERNAME
						FROM users u 
						INNER JOIN members mem
						ON u.IDMEMBERS=mem.IDMEMBERS
						INNER JOIN members_referral mr
						ON mem.IDMEMBERS=mr.members_id
						INNER JOIN members mem2
						ON mr.referrals_id=mem2.IDMEMBERS
						INNER JOIN users u2
						ON mem2.IDMEMBERS=u2.IDMEMBERS");*/
		$this->db->SELECT('s.USER_NAME,mem.IDMEMBERS,mem.ACTIVATION_CODE,mem.FIRST_NAME,mem.LAST_NAME,mem2.IDMEMBERS as REFERRALS_ID,mem2.ACTIVATION_CODE AS REFERRALS_ACTIVATION, mem2.FIRST_NAME AS REFERRALS_FNAME,u2.USER_NAME as REFERRALS_USERNAME');
		$this->db->FROM('users s');
		$this->db->JOIN('members mem','s.IDMEMBERS=mem.IDMEMBERS','INNER');
		$this->db->JOIN('members_referral mr','mem.IDMEMBERS=mr.members_id','INNER');
		$this->db->JOIN('members mem2','mr.referrals_id=mem2.IDMEMBERS','INNER');
		$this->db->JOIN('users u2','mem2.IDMEMBERS=u2.IDMEMBERS','INNER');
		$query=$this->db->get();
		return $query->result_array();
	}
}