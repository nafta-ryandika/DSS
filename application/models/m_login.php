<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
	function __construct()
	{
		parent::__construct();
	}
	function cek_user($username, $password){
        $this->db->select('*');
        $this->db->from('tbl_administrator');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get();
    }
	
}