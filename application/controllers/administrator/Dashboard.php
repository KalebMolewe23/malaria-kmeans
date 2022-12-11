<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

  public function __construct()
    {
        parent::__construct();
        // $this->load->library('form_validation');
        $this->load->model('m_daerah');
        $this->load->library(array('excel','session'));
        is_logged_in();
    }

  public function index(){

    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $this->db->select('max(iterasi) as iterasi');
    $data_centroid['data_malaria'] = $this->db->get('centroid_temp')->row('iterasi');

    $data['title'] = 'Halaman Utama';

    $this->load->view('layout/header', $data);
    $this->load->view('dashboard/v_dashboard', $data_centroid);
    $this->load->view('layout/footer');

  }

  public function zona_merah_2019(){

    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $this->db->select('max(iterasi) as iterasi');
    $data_centroid['data_malaria'] = $this->db->get('centroid_temp')->row('iterasi');

    $data['title'] = 'Halaman Utama';

    $this->load->view('layout/header', $data);
    $this->load->view('dashboard/v_merah_2019', $data_centroid);
    $this->load->view('layout/footer');

  }

  public function zona_kuning_2019(){

    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $this->db->select('max(iterasi) as iterasi');
    $data_centroid['data_malaria'] = $this->db->get('centroid_temp')->row('iterasi');

    $data['title'] = 'Halaman Utama';

    $this->load->view('layout/header', $data);
    $this->load->view('dashboard/v_kuning_2019', $data_centroid);
    $this->load->view('layout/footer');

  }

  public function zona_hijau_2019(){

    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $this->db->select('max(iterasi) as iterasi');
    $data_centroid['data_malaria'] = $this->db->get('centroid_temp')->row('iterasi');

    $data['title'] = 'Halaman Utama';

    $this->load->view('layout/header', $data);
    $this->load->view('dashboard/v_hijau_2019', $data_centroid);
    $this->load->view('layout/footer');

  }

  public function zona_merah_2020(){

    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $this->db->select('max(iterasi) as iterasi');
    $data_centroid['data_malaria'] = $this->db->get('centroid_temp')->row('iterasi');

    $data['title'] = 'Halaman Utama';

    $this->load->view('layout/header', $data);
    $this->load->view('dashboard/v_merah_2020', $data_centroid);
    $this->load->view('layout/footer');

  }

  public function zona_kuning_2020(){

    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $this->db->select('max(iterasi) as iterasi');
    $data_centroid['data_malaria'] = $this->db->get('centroid_temp')->row('iterasi');

    $data['title'] = 'Halaman Utama';

    $this->load->view('layout/header', $data);
    $this->load->view('dashboard/v_kuning_2020', $data_centroid);
    $this->load->view('layout/footer');

  }

  public function zona_hijau_2020(){

    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $this->db->select('max(iterasi) as iterasi');
    $data_centroid['data_malaria'] = $this->db->get('centroid_temp')->row('iterasi');

    $data['title'] = 'Halaman Utama';

    $this->load->view('layout/header', $data);
    $this->load->view('dashboard/v_hijau_2020', $data_centroid);
    $this->load->view('layout/footer');

  }

}