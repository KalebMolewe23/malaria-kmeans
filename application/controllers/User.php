<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_daerah');
        is_logged_in();
    }

    //tampilan menu utama user

    public function index(){
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        
        $data['title'] = 'Home';
        $wilayah['malaria'] = $this->m_daerah->data_puskesmas();
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/home', $wilayah);
        $this->load->view('user/templates/footer');
    }

    //tampilan zona hijau

    public function zona_hijau()
    {

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'Home';
        $wilayah['malaria'] = $this->m_daerah->zhijau();
        $wilayah['malarial'] = $this->m_daerah->zhijaulaki();
        $wilayah['malariap'] = $this->m_daerah->zhijauperempuan();
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/hijau', $wilayah);
        $this->load->view('user/templates/footer');
    }

    //tampilan zona kuning

    public function zona_kuning()
    {

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'Home';
        $wilayah['malaria'] = $this->m_daerah->zkuning();
        $wilayah['malarial'] = $this->m_daerah->zkuninglaki();
        $wilayah['malariap'] = $this->m_daerah->zkuningperempuan();
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/kuning', $wilayah);
        $this->load->view('user/templates/footer');
    }

    //tampilan zona merah

    public function zona_merah()
    {

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'Home';
        $wilayah['malaria'] = $this->m_daerah->zmerah();
        $wilayah['malarial'] = $this->m_daerah->zmerahlaki();
        $wilayah['malariap'] = $this->m_daerah->zmerahperempuan();
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/merah', $wilayah);
        $this->load->view('user/templates/footer');
    }

    //tampilan informasi puskesmas

    public function info_puskesmas(){
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'Info Puskesmas';
        $wilayah['malaria'] = $this->m_daerah->data_puskesmas();
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/daerah', $wilayah);
        $this->load->view('user/templates/footer');
    }

    //fitur print untuk informasi puskesmas

    public function print_infopuskesmas()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'Print info Vaksinasi';
        $wilayah['malaria'] = $this->m_daerah->data_puskesmas();
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/print_info', $wilayah);
    }

    //menampilkan data malaria

    public function data_malaria(){
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'Data Daerah Vaksinasi';
        $wilayah['malaria'] = $this->m_daerah->datamalaria();
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/malaria', $wilayah);
        $this->load->view('user/templates/footer');
    }

    //menampilkan data malaria laki laki

    public function malaria_laki()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'Data Malaria Laki-Laki';
        $wilayah['malaria'] = $this->m_daerah->datamalarial();
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/malaria_laki', $wilayah);
        $this->load->view('user/templates/footer');
    }

    //menampilkan data malaria laki laki

    public function malaria_perempuan()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'Data Malaria Perempuan';
        $wilayah['malaria'] = $this->m_daerah->datamalariap();
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/malaria_perempuan', $wilayah);
        $this->load->view('user/templates/footer');
    }

    //print data malaria

    public function print_data_malaria()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'Print Data Malaria';
        $wilayah['malaria'] = $this->m_daerah->datamalaria();
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/print_malaria', $wilayah);
    }

    //print data malaria laki-laki

    public function print_data_malaria_laki()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'Print Data Malaria Laki-Laki';
        $wilayah['malaria'] = $this->m_daerah->datamalarial();
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/print_malaria_laki', $wilayah);
    }

    //print data malaria perempuan

    public function print_data_malaria_perempuan()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'Print Data Malaria Perempuan';
        $wilayah['malaria'] = $this->m_daerah->datamalariap();
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/print_malaria_perempuan', $wilayah);
    }

    //tampilan about website

    public function about(){
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'Tentang Website';
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/about');
        $this->load->view('user/templates/footer');
    }

    //menampilkan data grafik malaria

    public function grafik()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data_hasil = $this->m_daerah->selectdata('hasil INNER JOIN (data_malaria,puskesmas) on hasil.id_malaria = data_malaria.id_malaria and data_malaria.id_puskesmas = puskesmas.id_puskesmas order by d3 DESC');

        $wilayah = array(
            'data_hasil'    => $data_hasil,
        );

        $data['title'] = 'Grafik Vaksinasi';
        $wilayah['malaria'] = $this->m_daerah->graph();
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/grafik', $wilayah);
        $this->load->view('user/templates/footer');
    }

    //menampilkan data grafik malaria laki-laki

    public function grafik_laki()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data_hasil = $this->m_daerah->selectdata('hasil_laki INNER JOIN (data_malarialaki,puskesmas) on hasil_laki.id_malarial = data_malarialaki.id_malarial and data_malarialaki.id_puskesmas = puskesmas.id_puskesmas order by d3 DESC');

        $wilayah = array(
            'data_hasil'    => $data_hasil,
        );

        $data['title'] = 'Grafik Vaksinasi';
        $wilayah['malaria'] = $this->m_daerah->graph_laki();
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/grafik_laki', $wilayah);
        $this->load->view('user/templates/footer');
    }

    //menampilkan data grafik malaria perempuan

    public function grafik_perempuan()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data_hasil = $this->m_daerah->selectdata('hasil_perempuan INNER JOIN (data_malariaperempuan,puskesmas) on hasil_perempuan.id_malariap = data_malariaperempuan.id_malariap and data_malariaperempuan.id_puskesmas = puskesmas.id_puskesmas order by d3 DESC');

        $wilayah = array(
            'data_hasil'    => $data_hasil,
        );

        $data['title'] = 'Grafik Vaksinasi';
        $wilayah['malaria'] = $this->m_daerah->graph_perempuan();
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/grafik_perempuan', $wilayah);
        $this->load->view('user/templates/footer');
    }

    //print grafik 

    public function print_grafik()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data_hasil = $this->m_daerah->selectdata('hasil INNER JOIN (data_malaria,puskesmas) on hasil.id_malaria = data_malaria.id_malaria and data_malaria.id_puskesmas = puskesmas.id_puskesmas order by d3 DESC');

        $wilayah = array(
            'data_hasil'    => $data_hasil,
        );

        $wilayah['q'] = $this->db->query('select * from centroid_temp group by iterasi');

        $data['title'] = 'Grafik Malaria';
        $wilayah['malaria'] = $this->m_daerah->graph();
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/print_grafik', $wilayah);
    }

    //print grafik laki laki

    public function print_grafik_laki()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data_hasil = $this->m_daerah->selectdata('hasil_laki INNER JOIN (data_malarialaki,puskesmas) on hasil_laki.id_malarial = data_malarialaki.id_malarial and data_malarialaki.id_puskesmas = puskesmas.id_puskesmas order by d3 DESC');

        $wilayah = array(
            'data_hasil'    => $data_hasil,
        );

        $data['title'] = 'Grafik Malaria Laki-Laki';
        $wilayah['malaria'] = $this->m_daerah->graph_laki();
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/print_grafik_laki', $wilayah);
    }

    //print grafik perempuan

    public function print_grafik_perempuan()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data_hasil = $this->m_daerah->selectdata('hasil_perempuan INNER JOIN (data_malariaperempuan,puskesmas) on hasil_perempuan.id_malariap = data_malariaperempuan.id_malariap and data_malariaperempuan.id_puskesmas = puskesmas.id_puskesmas order by d3 DESC');

        $wilayah = array(
            'data_hasil'    => $data_hasil,
        );

        $data['title'] = 'Grafik Vaksinasi';
        $wilayah['malaria'] = $this->m_daerah->graph_perempuan();
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/print_grafik_perempuan', $wilayah);
    }

}