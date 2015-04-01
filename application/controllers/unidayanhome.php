<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Unidayanhome extends CI_Controller {
	
    public function index(){

        $data['title'] = 'Universitas Dayanu Ikhsanuddin Baubau';
        $data['taglineuni'] = 'Jalan. Yosudarso no 43 Baubau Sulawesi Tenggara';
        $data['page'] = 'unidayanhomemain';
        $this->load->view('unidayanhome', $data);

    }
}