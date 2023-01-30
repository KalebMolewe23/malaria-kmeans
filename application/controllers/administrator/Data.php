<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data extends CI_Controller
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

        $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malaria.id_puskesmas');
        $data_malaria['malaria'] = $this->db->get('data_malaria');

        $data['title'] = "Data Daerah Malaria";

        $this->load->view('layout/header', $data);
        $this->load->view('data/datamalaria', $data_malaria);
        $this->load->view('layout/footer');
    }

    //add data malaria
    public function tambah_datamalaria(){

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = "Tambah Data Puskesmas";

        $data_malaria['malaria'] = $this->db->get('puskesmas');

        $this->load->view('layout/header', $data);
        $this->load->view('data/tambah_datamalaria', $data_malaria);
        $this->load->view('layout/footer');
    }

    //proses tambah malaria
    public function tambah_malaria(){
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('id_puskesmas', 'id_puskesmas', 'required|trims');
        $this->form_validation->set_rules('tahun', 'tahun', 'required|trims');
        $this->form_validation->set_rules('positif', 'positif', 'required|trims');
        $this->form_validation->set_rules('usia_0', 'usia_0', 'required|trims');
        $this->form_validation->set_rules('usia_5', 'usia_5', 'required|trims');
        $this->form_validation->set_rules('usia_15', 'usia_15', 'required|trims');
        $this->form_validation->set_rules('usia_64', 'usia_64', 'required|trims');
        $this->form_validation->set_rules('pf', 'pf', 'required|trims');
        $this->form_validation->set_rules('pv', 'pv', 'required|trims');
        $this->form_validation->set_rules('po', 'po', 'required|trims');
        $this->form_validation->set_rules('pm', 'pm', 'required|trims');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Data Malaria';
            $wilayah['lowokwaru'] = $this->db->get('data_malaria');
            $this->load->view('layout/header', $data);
            $this->load->view('data/tambah_datamalaria', $wilayah);
            $this->load->view('layout/footer');
        } else {
            $datavaksinasi = [
                'id_puskesmas'  => $this->input->post('id_puskesmas'),
                'tahun'         => $this->input->post('tahun'),
                'positif'       => $this->input->post('positif'),
                'usia_0'        => $this->input->post('usia_0'),
                'usia_5'        => $this->input->post('usia_5'),
                'usia_15'       => $this->input->post('usia_15'),
                'usia_64'       => $this->input->post('usia_64'),
                'pf'            => $this->input->post('pf'),
                'pv'            => $this->input->post('pv'),
                'po'            => $this->input->post('po'),
                'pm'            => $this->input->post('pm'),
            ];

            $this->db->insert('data_malaria', $datavaksinasi);
            $this->session->set_flashdata('message', '<div class="alert-success" role="alert">Selamat!!! Data Berhasil Ditambah.</div>');
            redirect('administrator/data/index');
        }
    }

    //delete data malaria
    public function deleteall_kmeans(){
        if(isset($_POST['deleteEmpBtn'])){
            if(!empty($this->input->post("checkbox_value"))){
                $checkedEmp = $this->input->post('checkbox_value');
                $checked_id = [];
                foreach($checkedEmp as $row){
                    array_push($checked_id, $row);
                }
                $this->m_daerah->hapus_data_malaria($checked_id);
                $this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Data Berhasil Di Hapus');
                redirect('administrator/data/index');
            }else{
                $this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Data Berhasil Di Hapus');
                redirect('administrator/data/index');
            }
        }
    }

    // tampilan edit daerah vaksinasi

    public function edit_malaria($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = "Edit Data Malaria";

        $where = array('iddata_malaria' => $id);
        $data['title'] = 'Edit Data Malaria';
        $ewilayah['data_malaria'] = $this->m_daerah->edit_puskesmas($where, 'data_malaria')->result();

        $ewilayah['malaria'] = $this->db->get('puskesmas');

        $this->load->view('layout/header', $data);
        $this->load->view('data/edit_malaria', $ewilayah);
        $this->load->view('layout/footer');
    }

    public function update_malaria(){
        $id = $this->input->post('iddata_malaria');
        $id_puskesmas = $this->input->post('id_puskesmas');
        $tahun = $this->input->post('tahun');
        $positif = $this->input->post('positif');
        $usia_0 = $this->input->post('usia_0');
        $usia_5 = $this->input->post('usia_5');
        $usia_15 = $this->input->post('usia_15');
        $usia_64 = $this->input->post('usia_64');
        $pf = $this->input->post('pf');
        $pv = $this->input->post('pv');
        $po = $this->input->post('po');
        $pm = $this->input->post('pm');

        $data = array(
            'iddata_malaria' => $id,
            'id_puskesmas' => $id_puskesmas,
            'tahun' => $tahun,
            'positif' => $positif,
            'usia_0' => $usia_0,
            'usia_5' => $usia_5,
            'usia_15' => $usia_15,
            'usia_64' => $usia_64,
            'pf' => $pf,
            'pv' => $pv,
            'po' => $po,
            'pm' => $pm,
        );

        $where = array(
            'iddata_malaria' => $id
        );

        $this->m_daerah->update_data($where, $data, 'data_malaria');
        $this->session->set_flashdata('message', '<div class="alert-success" role="alert">Data Berhasil Diupdate...</div>');
        redirect('administrator/data/index');
    }

    public function puskesmas(){

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data_malaria['puskesmas'] = $this->db->get('puskesmas');

        $data['title'] = "Data Puskesmas";

        $this->load->view('layout/header', $data);
        $this->load->view('data/datapuskesmas', $data_malaria);
        $this->load->view('layout/footer');
    }
    
    //add data puskesmas
    public function tambah_datapuskesmas(){

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = "Tambah Data Malaria";

        $this->load->view('layout/header', $data);
        $this->load->view('data/tambah_puskesmas');
        $this->load->view('layout/footer');
    }

    //proses tambah data puskesmas
    public function tambah_puskesmas(){
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama_puskesmas', 'nama_puskesmas', 'required|trims');
        $this->form_validation->set_rules('kecamatan', 'kecamatan', 'required|trims');
        $this->form_validation->set_rules('alamat', 'alamat', 'required|trims');
        $this->form_validation->set_rules('lat', 'lat', 'required|trims');
        $this->form_validation->set_rules('lng', 'lng', 'required|trims');
        $this->form_validation->set_rules('geojson', 'geojson', 'required|trims');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Daerah Vaksinasi';
            $wilayah['lowokwaru'] = $this->db->get('puskesmas');
            $this->load->view('layout/header', $data);
            $this->load->view('data/tambah_puskesmas', $wilayah);
            $this->load->view('layout/footer');
        } else {
            $datavaksinasi = [
                'nama_puskesmas'    => $this->input->post('nama_puskesmas'),
                'kecamatan'         => $this->input->post('kecamatan'),
                'alamat'            => $this->input->post('alamat'),
                'lat'               => $this->input->post('lat'),
                'lng'               => $this->input->post('lng'),
                'geojson'           => $this->input->post('geojson'),
            ];

            $this->db->insert('puskesmas', $datavaksinasi);
            $this->session->set_flashdata('message', '<div class="alert-success" role="alert">Selamat!!! Data Berhasil Ditambah.</div>');
            redirect('administrator/data/puskesmas');
        }
    }

    //delete data puskesmas
    public function deleteall(){
        if(isset($_POST['deleteEmpBtn'])){
            if(!empty($this->input->post("checkbox_value"))){
                $checkedEmp = $this->input->post('checkbox_value');
                $checked_id = [];
                foreach($checkedEmp as $row){
                    array_push($checked_id, $row);
                }
                $this->m_daerah->hapus_puskesmas($checked_id);
                $this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Data Berhasil Di Hapus');
                redirect('administrator/data/puskesmas');
            }else{
                $this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Data Berhasil Di Hapus');
                redirect('administrator/data/puskesmas');
            }
        }
    }

    // tampilan edit daerah vaksinasi

    public function edit_puskesmas($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = "Edit Data Puskesmas";

        $where = array('id_puskesmas' => $id);
        $data['title'] = 'Edit Puskesmas';
        $ewilayah['puskesmas'] = $this->m_daerah->edit_puskesmas($where, 'puskesmas')->result();

        $this->load->view('layout/header', $data);
        $this->load->view('data/edit_puskesmas', $ewilayah);
        $this->load->view('layout/footer');
    }

    public function update_puskesmas(){
        $id = $this->input->post('id_puskesmas');
        $nama_puskesmas = $this->input->post('nama_puskesmas');
        $kecamatan = $this->input->post('kecamatan');
        $alamat = $this->input->post('alamat');
        $lat = $this->input->post('lat');
        $lng = $this->input->post('lng');
        $geojson = $this->input->post('geojson');

        $data = array(
            'id_puskesmas' => $id,
            'nama_puskesmas' => $nama_puskesmas,
            'kecamatan' => $kecamatan,
            'alamat' => $alamat,
            'lat' => $lat,
            'lng' => $lng,
            'geojson' => $geojson,
        );

        $where = array(
            'id_puskesmas' => $id
        );

        $this->m_daerah->update_data($where, $data, 'puskesmas');
        $this->session->set_flashdata('message', '<div class="alert-success" role="alert">Data Berhasil Diupdate...</div>');
        redirect('administrator/data/puskesmas');
    }
    

}