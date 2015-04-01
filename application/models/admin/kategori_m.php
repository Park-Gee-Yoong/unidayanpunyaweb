<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Kategori_m extends CI_Model {

	public function get_kategori(){

		$rs = $this->db->get('kategori');

		return $rs->result();
	}
	function insert_kategori($data){
		$this->db->insert('kategori', $data);
	}

	function update_kategori($id, $data){
		$this->db->where('idkategori', $id);
		$this->db->update('kategori', $data);
	}
	public function delete_kategori($id){
        $this->db->where('idkategori', $id);
        $this->db->delete('kategori');
    }

}