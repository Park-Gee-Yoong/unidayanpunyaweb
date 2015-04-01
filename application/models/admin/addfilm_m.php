<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Addfilm_m extends CI_Model {
	public function save($data) {
		$query = $this->db->insert('jdlfilm', $data);

		return $this->db->insert_id();
	}

	public function getDetail($id) {
		$this->db->select('*');
		$this->db->from('jdlfilm');
		$this->db->where('idfilm', $id);
		$query = $this->db->get();

		return $query->row();
	}
}