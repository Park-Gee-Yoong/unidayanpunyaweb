<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_m extends CI_Model {

	public function get_user(){

		$rs = $this->db->get('user');

		return $rs->result();
	}
}