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

  public function zona_merah_2019(){

    $this->db->select('max(iterasi) as iterasi');
    $data_centroid['data_malaria'] = $this->db->get('centroid_temp')->row('iterasi');

    $data['title'] = 'Halaman Utama';

    $this->load->view('user/layout/header', $data);
    $this->load->view('user/z_merah_2019', $data_centroid);
    $this->load->view('user/layout/footer');

  }

  public function zona_kuning_2019(){

    $this->db->select('max(iterasi) as iterasi');
    $data_centroid['data_malaria'] = $this->db->get('centroid_temp')->row('iterasi');

    $data['title'] = 'Halaman Utama';

    $this->load->view('user/layout/header', $data);
    $this->load->view('user/z_kuning_2019', $data_centroid);
    $this->load->view('user/layout/footer');

  }

  public function zona_hijau_2019(){

    $this->db->select('max(iterasi) as iterasi');
    $data_centroid['data_malaria'] = $this->db->get('centroid_temp')->row('iterasi');

    $data['title'] = 'Halaman Utama';

    $this->load->view('user/layout/header', $data);
    $this->load->view('user/z_hijau_2019', $data_centroid);
    $this->load->view('user/layout/footer');

  }

  public function zona_merah_2020(){

    $this->db->select('max(iterasi) as iterasi');
    $data_centroid['data_malaria'] = $this->db->get('centroid_temp')->row('iterasi');

    $data['title'] = 'Halaman Utama';

    $this->load->view('user/layout/header', $data);
    $this->load->view('user/z_merah_2020', $data_centroid);
    $this->load->view('user/layout/footer');

  }

  public function zona_kuning_2020(){

    $this->db->select('max(iterasi) as iterasi');
    $data_centroid['data_malaria'] = $this->db->get('centroid_temp')->row('iterasi');

    $data['title'] = 'Halaman Utama';

    $this->load->view('user/layout/header', $data);
    $this->load->view('user/z_kuning_2020', $data_centroid);
    $this->load->view('user/layout/footer');

  }

  public function zona_hijau_2020(){

    $this->db->select('max(iterasi) as iterasi');
    $data_centroid['data_malaria'] = $this->db->get('centroid_temp')->row('iterasi');

    $data['title'] = 'Halaman Utama';

    $this->load->view('user/layout/header', $data);
    $this->load->view('user/z_hijau_2020', $data_centroid);
    $this->load->view('user/layout/footer');

  }

}

