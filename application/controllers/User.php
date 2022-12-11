<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

  public function index(){

    $data['title'] = "Informasi Malaria";

    $this->db->select('max(iterasi) as iterasi');
    $data_centroid['data_malaria'] = $this->db->get('centroid_temp')->row('iterasi');

    $this->load->view('user/layout/header', $data);
    $this->load->view('user/home', $data_centroid);
    $this->load->view('user/layout/footer');

  }

}

