<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard_m extends CI_Model {
	
	public function get_user($id){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('iduser', $id);

		return $this->db->get();
	}
	function updateprofil($id, $data){
		$this->db->where('iduser', $id);
		$this->db->update('user', $data);
	}
}