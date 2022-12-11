<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Area extends CI_Controller
{

    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->library('form_validation');
    //     $this->load->model('m_daerah');
    //     is_logged_in();
    // }

    public function index()
    {
        $data_area['malaria'] = $this->db->get('puskesmas');

        $data['title'] = "Data Master Daerah";

        $this->load->view('layout/header', $data);
        $this->load->view('area/daerah', $data_area);
        $this->load->view('layout/footer');
    }
}
