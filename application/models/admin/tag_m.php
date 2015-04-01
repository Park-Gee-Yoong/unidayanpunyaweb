<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Tag_m extends CI_Model {

	public function get_tag(){

		$rs = $this->db->get('tag');

		return $rs->result();
	}
	function insert_tag($data){
		$this->db->insert('tag', $data);
	}

	function update_tag($id, $data){
		$this->db->where('idtag', $id);
		$this->db->update('tag', $data);
	}
	public function delete_tag($id){
        $this->db->where('idktag', $id);
        $this->db->delete('tag');
    }

}