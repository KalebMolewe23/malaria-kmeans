<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_daerah');
        is_logged_in();
    }

    // menampilkan halaman home

    public function index()
    {

        $data['title'] = "Data Awal";

        $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malaria.id_puskesmas');
        $metode['malaria'] = $this->db->get("data_malaria")->result();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/home', $metode);
        $this->load->view('admin/templates/footer');
    }

    // menampilkan daerah malaria

    public function daerah_malaria()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'Lokasi Puskesmas';
        $wilayah['malaria'] = $this->m_daerah->data_puskesmas();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/daerah', $wilayah);
        $this->load->view('admin/templates/footer');
    }

    // menambahkan daerah malaria

    public function tambah_daerah()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama_puskesmas', 'nama_puskesmas', 'required|trims|is_unique[puskesmas.nama_puskesmas]', [
            'is_unique' => 'Maaf, data sudah ada!!!'
        ]);
        $this->form_validation->set_rules('alamat', 'alamat', 'required|trims');
        $this->form_validation->set_rules('kecamatan', 'kecamatan', 'required|trims');
        $this->form_validation->set_rules('lat', 'lat', 'required|trims');
        $this->form_validation->set_rules('lng', 'lng', 'required|trims');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Daerah Malaria';
            $wilayah['malaria'] = $this->m_daerah->get_rumahsakit();
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/tambah_daerah', $wilayah);
            $this->load->view('admin/templates/footer');
        } else {
            $datamalaria = [
                'nama_puskesmas' => $this->input->post('nama_puskesmas'),
                'alamat' => $this->input->post('alamat'),
                'kecamatan' => $this->input->post('kecamatan'),
                'lat' => $this->input->post('lat'),
                'lng' => $this->input->post('lng')
            ];
            $this->db->insert('puskesmas', $datamalaria);
            $this->session->set_flashdata('message', '<div class="alert-success" role="alert">Selamat!!! Data Berhasil Ditambah.</div>');
            redirect('admin/daerah_malaria');
        }
    }

    // tampilan edit daerah vaksinasi

    public function editdaerah($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $where = array('id_puskesmas' => $id);
        $data['title'] = 'Edit Daerah Malaria';
        $ewilayah['daerah'] = $this->m_daerah->edit_daerah_malaria($where, 'puskesmas')->result();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/editdaerah', $ewilayah);
        $this->load->view('admin/templates/footer');
    }

    // proses edit daerah vaksinasi

    public function edit_daerah()
    {
        $id = $this->input->post('id_puskesmas');
        $nama_puskesmas = $this->input->post('nama_puskesmas');
        $kecamatan = $this->input->post('kecamatan');
        $alamat = $this->input->post('alamat');
        $lat = $this->input->post('lat');
        $lng = $this->input->post('lng');

        $data = array(
            'id_puskesmas' => $id,
            'nama_puskesmas' => $nama_puskesmas,
            'kecamatan' => $kecamatan,
            'alamat' => $alamat,
            'lat' => $lat,
            'lng' => $lng,
        );

        $where = array(
            'id_puskesmas' => $id
        );

        $this->m_daerah->update_data($where, $data, 'puskesmas');
        $this->session->set_flashdata('message', '<div class="alert-success" role="alert">Data Berhasil Diupdate...</div>');
        redirect('admin/daerah_malaria');
    }

    // hapus daerah vaksinasi

    public function deletedaerah($id)
    {
        $where = array('id_puskesmas' => $id);
        $this->m_daerah->hapus_daerah($where, 'puskesmas');
        $this->session->set_flashdata('message', '<div class="alert-danger" role="alert">Data Telah Dihapus...</div>');
        redirect('admin/daerah_malaria');
    }

    // menampilkan data malaria

    public function add_data()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'Data Daerah Malaria';
        $wilayah['malaria'] = $this->m_daerah->datamalaria();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/datamalaria', $wilayah);
        $this->load->view('admin/templates/footer');
    }

    // menampilkan data laki laki malaria

    public function add_data_laki()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'Data Daerah Laki-laki Malaria';
        $wilayah['malaria'] = $this->m_daerah->datamalarial();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/datamalarial', $wilayah);
        $this->load->view('admin/templates/footer');
    }

    // menampilkan data perempuan malaria

    public function add_data_perempuan()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'Data Daerah Perempuan Malaria';
        $wilayah['malaria'] = $this->m_daerah->datamalariap();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/datamalariap', $wilayah);
        $this->load->view('admin/templates/footer');
    }

    //tambah data malaria

    public function data_malaria()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('id_puskesmas', 'id_puskesmas', 'required|trims|is_unique[data_malaria.id_puskesmas]', [
            'is_unique' => 'Maaf, data sudah ada!!!'
        ]);
        $this->form_validation->set_rules('jumlah_penduduk', 'jumlah_penduduk', 'required|trims');
        $this->form_validation->set_rules('konfirmasi_lab', 'konfirmasi_lab', 'required|trims');
        $this->form_validation->set_rules('total_positif', 'total_positif', 'required|trims');
        $this->form_validation->set_rules('ibu_hamil', 'ibu_hamil', 'required|trims');
        $this->form_validation->set_rules('persentase', 'persentase', 'required|trims');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Daerah Malaria';
            $wilayah['malaria'] = $this->m_daerah->get_rumahsakit();
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/malaria', $wilayah);
            $this->load->view('admin/templates/footer');
        } else {
            $datamalaria1 = [
                'id_puskesmas' => $this->input->post('id_puskesmas'),
                'jumlah_penduduk' => $this->input->post('jumlah_penduduk'),
                'konfirmasi_lab' => $this->input->post('konfirmasi_lab'),
                'total_positif' => $this->input->post('total_positif'),
                'ibu_hamil' => $this->input->post('ibu_hamil'),
                'persentase' => $this->input->post('persentase')
            ];

            $this->db->insert('data_malaria', $datamalaria1);
            $this->session->set_flashdata('message', '<div class="alert-success" role="alert">Selamat!!! Data Berhasil Ditambah.</div>');
            redirect('admin/add_data');
        }
    }

    //tambah data malaria laki-laki

    public function data_malarialaki()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('id_puskesmas', 'id_puskesmas', 'required|trims|is_unique[data_malarialaki.id_puskesmas]', [
            'is_unique' => 'Maaf, data sudah ada!!!'
        ]);
        $this->form_validation->set_rules('jumlah_penduduk', 'jumlah_penduduk', 'required|trims');
        $this->form_validation->set_rules('konfirmasi_lab', 'konfirmasi_lab', 'required|trims');
        $this->form_validation->set_rules('total_positif', 'total_positif', 'required|trims');
        $this->form_validation->set_rules('ibu_hamil', 'ibu_hamil', 'required|trims');
        $this->form_validation->set_rules('persentase', 'persentase', 'required|trims');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Data Laki-Laki Malaria';
            $wilayah['malaria'] = $this->m_daerah->get_rumahsakit();
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/malarialaki', $wilayah);
            $this->load->view('admin/templates/footer');
        } else {
            $datamalaria2 = [
                'id_puskesmas' => $this->input->post('id_puskesmas'),
                'jumlah_penduduk' => $this->input->post('jumlah_penduduk'),
                'konfirmasi_lab' => $this->input->post('konfirmasi_lab'),
                'total_positif' => $this->input->post('total_positif'),
                'ibu_hamil' => $this->input->post('ibu_hamil'),
                'persentase' => $this->input->post('persentase')
            ];

            $this->db->insert('data_malarialaki', $datamalaria2);
            $this->session->set_flashdata('message', '<div class="alert-success" role="alert">Selamat!!! Data Berhasil Ditambah.</div>');
            redirect('admin/add_data_laki');
        }
    }

    //tambah data malaria perempuan

    public function data_malaria_perempuan()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('id_puskesmas', 'id_puskesmas', 'required|trims|is_unique[data_malariaperempuan.id_puskesmas]', [
            'is_unique' => 'Maaf, data sudah ada!!!'
        ]);
        $this->form_validation->set_rules('jumlah_penduduk', 'jumlah_penduduk', 'required|trims');
        $this->form_validation->set_rules('konfirmasi_lab', 'konfirmasi_lab', 'required|trims');
        $this->form_validation->set_rules('total_positif', 'total_positif', 'required|trims');
        $this->form_validation->set_rules('ibu_hamil', 'ibu_hamil', 'required|trims');
        $this->form_validation->set_rules('persentase', 'persentase', 'required|trims');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Data Laki-Laki Malaria';
            $wilayah['malaria'] = $this->m_daerah->get_rumahsakit();
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/malariaperempuan', $wilayah);
            $this->load->view('admin/templates/footer');
        } else {
            $datamalaria2 = [
                'id_puskesmas' => $this->input->post('id_puskesmas'),
                'jumlah_penduduk' => $this->input->post('jumlah_penduduk'),
                'konfirmasi_lab' => $this->input->post('konfirmasi_lab'),
                'total_positif' => $this->input->post('total_positif'),
                'ibu_hamil' => $this->input->post('ibu_hamil'),
                'persentase' => $this->input->post('persentase')
            ];

            $this->db->insert('data_malariaperempuan', $datamalaria2);
            $this->session->set_flashdata('message', '<div class="alert-success" role="alert">Selamat!!! Data Berhasil Ditambah.</div>');
            redirect('admin/add_data_perempuan');
        }
    }

    //edit data malaria

    public function editmalaria($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $where = array('id_malaria' => $id);
        $data['title'] = 'Edit Data Malaria';
        $ewilayah['daerah'] = $this->m_daerah->edit_daerah($where, 'data_malaria')->result();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/editmalaria', $ewilayah);
        $this->load->view('admin/templates/footer');
    }

    //edit data malaria laki laki

    public function editmalarialaki($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $where = array('id_malarial' => $id);
        $data['title'] = 'Edit Data Malaria Laki-Laki';
        $ewilayah['daerah'] = $this->m_daerah->edit_daerahlaki($where, 'data_malarialaki')->result();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/editmalarialaki', $ewilayah);
        $this->load->view('admin/templates/footer');
    }

    //edit data malaria perempuan

    public function editmalariaperempuan($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $where = array('id_malariap' => $id);
        $data['title'] = 'Edit Data Malaria Perempuan';
        $ewilayah['daerah'] = $this->m_daerah->edit_daerahperempuan($where, 'data_malariaperempuan')->result();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/editmalariaperempuan', $ewilayah);
        $this->load->view('admin/templates/footer');
    }

    //proses update data malaria

    public function update()
    {
        $id = $this->input->post('id_malaria');
        $id_puskesmas = $this->input->post('id_puskesmas');
        $jumlah_penduduk = $this->input->post('jumlah_penduduk');
        $konfirmasi_lab = $this->input->post('konfirmasi_lab');
        $total_positif = $this->input->post('total_positif');
        $ibu_hamil = $this->input->post('ibu_hamil');
        $persentase = $this->input->post('persentase');

        $data = array(
            'id_malaria' => $id,
            'id_puskesmas' => $id_puskesmas,
            'jumlah_penduduk' => $jumlah_penduduk,
            'konfirmasi_lab' => $konfirmasi_lab,
            'total_positif' => $total_positif,
            'ibu_hamil' => $ibu_hamil,
            'persentase' => $persentase
        );

        $where = array(
            'id_malaria' => $id
        );

        $this->m_daerah->update_data($where, $data, 'data_malaria');
        $this->session->set_flashdata('message', '<div class="alert-success" role="alert">Data Berhasil Diupdate...</div>');
        redirect('admin/add_data');
    }

    //proses update data laki laki malaria

    public function updatelaki()
    {
        $id = $this->input->post('id_malarial');
        $id_puskesmas = $this->input->post('id_puskesmas');
        $jumlah_penduduk = $this->input->post('jumlah_penduduk');
        $konfirmasi_lab = $this->input->post('konfirmasi_lab');
        $total_positif = $this->input->post('total_positif');
        $ibu_hamil = $this->input->post('ibu_hamil');
        $persentase = $this->input->post('persentase');

        $data = array(
            'id_malarial' => $id,
            'id_puskesmas' => $id_puskesmas,
            'jumlah_penduduk' => $jumlah_penduduk,
            'konfirmasi_lab' => $konfirmasi_lab,
            'total_positif' => $total_positif,
            'ibu_hamil' => $ibu_hamil,
            'persentase' => $persentase
        );

        $where = array(
            'id_malarial' => $id
        );

        $this->m_daerah->update_data($where, $data, 'data_malarialaki');
        $this->session->set_flashdata('message', '<div class="alert-success" role="alert">Data Berhasil Diupdate...</div>');
        redirect('admin/add_data_laki');
    }

    //proses update data perempuan malaria

    public function updateperempuan()
    {
        $id = $this->input->post('id_malariap');
        $id_puskesmas = $this->input->post('id_puskesmas');
        $jumlah_penduduk = $this->input->post('jumlah_penduduk');
        $konfirmasi_lab = $this->input->post('konfirmasi_lab');
        $total_positif = $this->input->post('total_positif');
        $ibu_hamil = $this->input->post('ibu_hamil');
        $persentase = $this->input->post('persentase');

        $data = array(
            'id_malariap' => $id,
            'id_puskesmas' => $id_puskesmas,
            'jumlah_penduduk' => $jumlah_penduduk,
            'konfirmasi_lab' => $konfirmasi_lab,
            'total_positif' => $total_positif,
            'ibu_hamil' => $ibu_hamil,
            'persentase' => $persentase
        );

        $where = array(
            'id_malariap' => $id
        );

        $this->m_daerah->update_data($where, $data, 'data_malariaperempuan');
        $this->session->set_flashdata('message', '<div class="alert-success" role="alert">Data Berhasil Diupdate...</div>');
        redirect('admin/add_data_perempuan');
    }


    //menghapus data malaria

    public function deletedatamalaria($id)
    {
        $where = array('id_malaria' => $id);
        $this->m_daerah->hapus_data($where, 'data_malaria');
        $this->session->set_flashdata('message', '<div class="alert-danger" role="alert">Data Telah Dihapus...</div>');
        redirect('admin/add_data');
    }

    //menghapus data malaria

    public function deletedatamalarialaki($id)
    {
        $where = array('id_malarial' => $id);
        $this->m_daerah->hapus_data($where, 'data_malarialaki');
        $this->session->set_flashdata('message', '<div class="alert-danger" role="alert">Data Telah Dihapus...</div>');
        redirect('admin/add_data_laki');
    }

    //menghapus data malaria

    public function deletedatamalariaperempuan($id)
    {
        $where = array('id_malariap' => $id);
        $this->m_daerah->hapus_data($where, 'data_malariaperempuan');
        $this->session->set_flashdata('message', '<div class="alert-danger" role="alert">Data Telah Dihapus...</div>');
        redirect('admin/add_data_perempuan');
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
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/hijau', $wilayah);
        $this->load->view('admin/templates/footer');
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
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/kuning', $wilayah);
        $this->load->view('admin/templates/footer');
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
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/merah', $wilayah);
        $this->load->view('admin/templates/footer');
    }

    //tampilan data malaria sebelum fase penentuan centroid

    public function tampilan_data()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'Data Daerah Malaria';
        $wilayah['malaria'] = $this->m_daerah->datamalaria();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/tampilandata', $wilayah);
        $this->load->view('admin/templates/footer');
    }

    //tampilan data malaria laki laki sebelum fase penentuan centroid

    public function tampilan_data_laki()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'Data Daerah Malaria Laki-Laki';
        $wilayah['malaria'] = $this->m_daerah->datamalarial();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/tampilandatal', $wilayah);
        $this->load->view('admin/templates/footer');
    }

    //tampilan data malaria laki laki sebelum fase penentuan centroid

    public function tampilan_data_perempuan()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'Data Daerah Malaria Perempuan';
        $wilayah['malaria'] = $this->m_daerah->datamalariap();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/tampilandatap', $wilayah);
        $this->load->view('admin/templates/footer');
    }

    //proses generate centroid

    public function generate_centroid()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'Data Centroid';

        $kluster = 3;
        $data['c1'] = 80;
        $data['c2'] = 50;
        $data['c3'] = 0;
        $data_vaksin = $this->db->query('select * from data_malaria');
        $st = "";

        $this->db->query('truncate table hasil');
        foreach ($data_vaksin->result() as $s) {
            $d1 = abs($s->persentase - $data['c1']);
            $d2 = abs($s->persentase - $data['c2']);
            $d3 = abs($s->persentase - $data['c3']);

            $array_sort_awal = array($d1, $d2, $d3);
            $array_sort = $array_sort_awal;
            for ($j = 1; $j <= $kluster - 1; $j++) {
                for ($k = 0; $k <= $kluster - 2; $k++) {
                    if ($array_sort[$k] > $array_sort[$k + 1]) {
                        $temp = $array_sort[$k];
                        $array_sort[$k] = $array_sort[$k + 1];
                        $array_sort[$k + 1] = $temp;
                    }
                }
            }

            for ($i = 0; $i < $kluster; $i++) {
                for ($r = 0; $r < $kluster; $r++) {
                    if ($array_sort[0] == $array_sort_awal[$r]) {
                        if ($r == 0) $st =  "Tinggi";
                        else if ($r == 1) $st =  "Sedang";
                        else if ($r == 2) $st =  "Rendah";
                    }
                }
            }
            $this->db->query("insert into hasil (id_malaria,predikat,d1,d2,d3) values('" . $s->id_malaria . "','" . $st . "','" . $d1 . "','" . $d2 . "','" . $d3 . "')");
        }

        $wilayah['data_vaksin'] = $this->db->query("select * from data_malaria left join (puskesmas,hasil) on data_malaria.id_malaria=hasil.id_malaria and data_malaria.id_puskesmas=puskesmas.id_puskesmas");

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/generate_centroid', $wilayah);
        $this->load->view('admin/templates/footer');
    }

    //proses generate centroid laki laki

    public function generate_centroidl()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'Data Centroid';

        $kluster = 3;
        $data['c1'] = 80;
        $data['c2'] = 50;
        $data['c3'] = 0;
        $data_vaksin = $this->db->query('select * from data_malarialaki');
        $st = "";

        $this->db->query('truncate table hasil_laki');
        foreach ($data_vaksin->result() as $s) {
            $d1 = abs($s->persentase - $data['c1']);
            $d2 = abs($s->persentase - $data['c2']);
            $d3 = abs($s->persentase - $data['c3']);

            $array_sort_awal = array($d1, $d2, $d3);
            $array_sort = $array_sort_awal;
            for ($j = 1; $j <= $kluster - 1; $j++) {
                for ($k = 0; $k <= $kluster - 2; $k++) {
                    if ($array_sort[$k] > $array_sort[$k + 1]) {
                        $temp = $array_sort[$k];
                        $array_sort[$k] = $array_sort[$k + 1];
                        $array_sort[$k + 1] = $temp;
                    }
                }
            }

            for ($i = 0; $i < $kluster; $i++) {
                for ($r = 0; $r < $kluster; $r++) {
                    if ($array_sort[0] == $array_sort_awal[$r]) {
                        if ($r == 0) $st =  "Tinggi";
                        else if ($r == 1) $st =  "Sedang";
                        else if ($r == 2) $st =  "Rendah";
                    }
                }
            }
            $this->db->query("insert into hasil_laki (id_malarial,predikat,d1,d2,d3) values('" . $s->id_malarial . "','" . $st . "','" . $d1 . "','" . $d2 . "','" . $d3 . "')");
        }

        $wilayah['data_vaksin'] = $this->db->query("select * from data_malarialaki left join (puskesmas,hasil_laki) on data_malarialaki.id_malarial=hasil_laki.id_malarial and data_malarialaki.id_puskesmas=puskesmas.id_puskesmas");

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/generate_centroid_laki', $wilayah);
        $this->load->view('admin/templates/footer');
    }

    //proses generate centroid laki laki

    public function generate_centroidp()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'Data Centroid';

        $kluster = 3;
        $data['c1'] = 80;
        $data['c2'] = 50;
        $data['c3'] = 0;
        $data_vaksin = $this->db->query('select * from data_malariaperempuan');
        $st = "";

        $this->db->query('truncate table hasil_perempuan');
        foreach ($data_vaksin->result() as $s) {
            $d1 = abs($s->persentase - $data['c1']);
            $d2 = abs($s->persentase - $data['c2']);
            $d3 = abs($s->persentase - $data['c3']);

            $array_sort_awal = array($d1, $d2, $d3);
            $array_sort = $array_sort_awal;
            for ($j = 1; $j <= $kluster - 1; $j++) {
                for ($k = 0; $k <= $kluster - 2; $k++) {
                    if ($array_sort[$k] > $array_sort[$k + 1]) {
                        $temp = $array_sort[$k];
                        $array_sort[$k] = $array_sort[$k + 1];
                        $array_sort[$k + 1] = $temp;
                    }
                }
            }

            for ($i = 0; $i < $kluster; $i++) {
                for ($r = 0; $r < $kluster; $r++) {
                    if ($array_sort[0] == $array_sort_awal[$r]) {
                        if ($r == 0) $st =  "Tinggi";
                        else if ($r == 1) $st =  "Sedang";
                        else if ($r == 2) $st =  "Rendah";
                    }
                }
            }
            $this->db->query("insert into hasil_perempuan (id_malariap,predikat,d1,d2,d3) values('" . $s->id_malariap . "','" . $st . "','" . $d1 . "','" . $d2 . "','" . $d3 . "')");
        }

        $wilayah['data_vaksin'] = $this->db->query("select * from data_malariaperempuan left join (puskesmas,hasil_perempuan) on data_malariaperempuan.id_malariap=hasil_perempuan.id_malariap and data_malariaperempuan.id_puskesmas=puskesmas.id_puskesmas");

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/generate_centroid_perempuan', $wilayah);
        $this->load->view('admin/templates/footer');
    }

    //iterasi kmeans

    public function iterasi_kmeans()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'Data Daerah Malaria';
        $wilayah['malaria'] = $this->m_daerah->datamalaria();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/iterasi-kmeans', $wilayah);
        $this->load->view('admin/templates/footer');
    }

    //iterasi kmeans laki-laki

    public function iterasi_kmeans_laki()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'Data Daerah Malaria Laki-Laki';
        $wilayah['malaria'] = $this->m_daerah->datamalarial();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/iterasi-kmeans_laki', $wilayah);
        $this->load->view('admin/templates/footer');
    }

    //iterasi kmeans perempuan

    public function iterasi_kmeans_perempuan()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'Data Daerah Malaria Perempuan';
        $wilayah['malaria'] = $this->m_daerah->datamalariap();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/iterasi-kmeans_perempuan', $wilayah);
        $this->load->view('admin/templates/footer');
    }

    //proses iterasi lanjut

    public function interasi_lanjut()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $wilayah['data_malaria'] = $this->db->get('data_malaria inner join puskesmas on data_malaria.id_puskesmas = puskesmas.id_puskesmas');
        $id = "";
        $id = $this->db->query('select max(nomor) as m from hasil_centroid');
        foreach ($id->result() as $i) {
            $id = $i->m;
        }
        $this->db->where('nomor', $id);
        $wilayah['centroid'] = $this->db->get('hasil_centroid');
        $wilayah['id'] = $id + 1;

        $it = "";
        $it = $this->db->query('select max(iterasi) as it from centroid_temp');
        foreach ($it->result() as $i) {
            $it = $i->it;
        }

        $it_temp = $it - 1;
        $this->db->where('iterasi', $it_temp);
        $it_sebelum = $this->db->get('centroid_temp');
        $c1_sebelum = array();
        $c2_sebelum = array();
        $c2_sebelum = array();
        $no = 0;
        foreach ($it_sebelum->result() as $it_prev) {
            $c1_sebelum[$no] = $it_prev->c1;
            $c2_sebelum[$no] = $it_prev->c2;
            $c3_sebelum[$no] = $it_prev->c3;
            $no++;
        }

        $this->db->where('iterasi', $it);
        $it_sesesudah = $this->db->get('centroid_temp');
        $c1_sesesudah = array();
        $c2_sesesudah = array();
        $c2_sesesudah = array();
        $no = 0;
        foreach ($it_sesesudah->result() as $it_next) {
            $c1_sesesudah[$no] = $it_next->c1;
            $c2_sesesudah[$no] = $it_next->c2;
            $c3_sesesudah[$no] = $it_next->c3;
            $no++;
        }

        if ($c1_sebelum == $c1_sesesudah || $c2_sebelum == $c2_sesesudah || $c2_sebelum == $c2_sesesudah) {
?>
            <script>
                alert("Proses iterasi berakhir pada tahap ke-<?php echo $it; ?>");
            </script>
        <?php
            echo "<meta http-equiv='refresh' content='0; url=" . base_url() . "admin/iterasi_hasil'>";
        } else {
            $datas['title'] = 'Iterasi K-Means Lanjut';
            $this->load->view('admin/templates/header', $datas);
            $this->load->view('admin/tampilandatalanjut', $wilayah);
            $this->load->view('admin/templates/footer');
        }
    }

    //proses iterasi lanjut laki-laki

    public function interasi_lanjut_laki()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $wilayah['data_malaria'] = $this->db->get('data_malarialaki inner join puskesmas on data_malarialaki.id_puskesmas = puskesmas.id_puskesmas');
        $id = "";
        $id = $this->db->query('select max(nomor) as m from hasil_centroid_laki');
        foreach ($id->result() as $i) {
            $id = $i->m;
        }
        $this->db->where('nomor', $id);
        $wilayah['centroid'] = $this->db->get('hasil_centroid_laki');
        $wilayah['id'] = $id + 1;

        $it = "";
        $it = $this->db->query('select max(iterasi) as it from centroid_temp_laki');
        foreach ($it->result() as $i) {
            $it = $i->it;
        }

        $it_temp = $it - 1;
        $this->db->where('iterasi', $it_temp);
        $it_sebelum = $this->db->get('centroid_temp_laki');
        $c1_sebelum = array();
        $c2_sebelum = array();
        $c2_sebelum = array();
        $no = 0;
        foreach ($it_sebelum->result() as $it_prev) {
            $c1_sebelum[$no] = $it_prev->c1;
            $c2_sebelum[$no] = $it_prev->c2;
            $c3_sebelum[$no] = $it_prev->c3;
            $no++;
        }

        $this->db->where('iterasi', $it);
        $it_sesesudah = $this->db->get('centroid_temp_laki');
        $c1_sesesudah = array();
        $c2_sesesudah = array();
        $c2_sesesudah = array();
        $no = 0;
        foreach ($it_sesesudah->result() as $it_next) {
            $c1_sesesudah[$no] = $it_next->c1;
            $c2_sesesudah[$no] = $it_next->c2;
            $c3_sesesudah[$no] = $it_next->c3;
            $no++;
        }

        if ($c1_sebelum == $c1_sesesudah || $c2_sebelum == $c2_sesesudah || $c2_sebelum == $c2_sesesudah) {
        ?>
            <script>
                alert("Proses iterasi berakhir pada tahap ke-<?php echo $it; ?>");
            </script>
        <?php
            echo "<meta http-equiv='refresh' content='0; url=" . base_url() . "admin/iterasi_hasil_laki'>";
        } else {
            $datas['title'] = 'Iterasi K-Means Lanjut';
            $this->load->view('admin/templates/header', $datas);
            $this->load->view('admin/tampilandatalanjutlaki', $wilayah);
            $this->load->view('admin/templates/footer');
        }
    }

    //proses iterasi lanjut perempuan

    public function interasi_lanjut_perempuan()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $wilayah['data_malaria'] = $this->db->get('data_malariaperempuan inner join puskesmas on data_malariaperempuan.id_puskesmas = puskesmas.id_puskesmas');
        $id = "";
        $id = $this->db->query('select max(nomor) as m from hasil_centorid_perempuan');
        foreach ($id->result() as $i) {
            $id = $i->m;
        }
        $this->db->where('nomor', $id);
        $wilayah['centroid'] = $this->db->get('hasil_centorid_perempuan');
        $wilayah['id'] = $id + 1;

        $it = "";
        $it = $this->db->query('select max(iterasi) as it from centroid_temp_perempuan');
        foreach ($it->result() as $i) {
            $it = $i->it;
        }

        $it_temp = $it - 1;
        $this->db->where('iterasi', $it_temp);
        $it_sebelum = $this->db->get('centroid_temp_perempuan');
        $c1_sebelum = array();
        $c2_sebelum = array();
        $c2_sebelum = array();
        $no = 0;
        foreach ($it_sebelum->result() as $it_prev) {
            $c1_sebelum[$no] = $it_prev->c1;
            $c2_sebelum[$no] = $it_prev->c2;
            $c3_sebelum[$no] = $it_prev->c3;
            $no++;
        }

        $this->db->where('iterasi', $it);
        $it_sesesudah = $this->db->get('centroid_temp_perempuan');
        $c1_sesesudah = array();
        $c2_sesesudah = array();
        $c2_sesesudah = array();
        $no = 0;
        foreach ($it_sesesudah->result() as $it_next) {
            $c1_sesesudah[$no] = $it_next->c1;
            $c2_sesesudah[$no] = $it_next->c2;
            $c3_sesesudah[$no] = $it_next->c3;
            $no++;
        }

        if ($c1_sebelum == $c1_sesesudah || $c2_sebelum == $c2_sesesudah || $c2_sebelum == $c2_sesesudah) {
        ?>
            <script>
                alert("Proses iterasi berakhir pada tahap ke-<?php echo $it; ?>");
            </script>
<?php
            echo "<meta http-equiv='refresh' content='0; url=" . base_url() . "admin/iterasi_hasil_perempuan'>";
        } else {
            $datas['title'] = 'Iterasi K-Means Lanjut';
            $this->load->view('admin/templates/header', $datas);
            $this->load->view('admin/tampilandatalanjutperempuan', $wilayah);
            $this->load->view('admin/templates/footer');
        }
    }


    //hasil iterasi kmeans

    function iterasi_hasil()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data_hasil = $this->m_daerah->selectdata('hasil INNER JOIN (data_malaria,puskesmas) on hasil.id_malaria = data_malaria.id_malaria and data_malaria.id_puskesmas = puskesmas.id_puskesmas order by d3 DESC');

        $wilayah = array(
            'data_hasil'    => $data_hasil,
        );

        $wilayah['q'] = $this->db->query('select * from centroid_temp group by iterasi');

        $datas['title'] = 'Data Daerah Vaksinasi';
        $wilayah['malaria'] = $this->m_daerah->datamalaria();
        $this->load->view('admin/templates/header', $datas);
        $this->load->view('admin/tampilandatahasil', $wilayah);
        $this->load->view('admin/templates/footer');
    }

    //hasil iterasi kmeans laki laki

    function iterasi_hasil_laki()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data_hasil = $this->m_daerah->selectdata('hasil_laki INNER JOIN (data_malarialaki,puskesmas) on hasil_laki.id_malarial = data_malarialaki.id_malarial and data_malarialaki.id_puskesmas = puskesmas.id_puskesmas order by d3 DESC');

        $wilayah = array(
            'data_hasil'    => $data_hasil,
        );

        $wilayah['q'] = $this->db->query('select * from centroid_temp_laki group by iterasi');

        $datas['title'] = 'Hasil Data Malaria Laki-Laki';
        $wilayah['malaria'] = $this->m_daerah->datamalarial();
        $this->load->view('admin/templates/header', $datas);
        $this->load->view('admin/tampilandatahasillaki', $wilayah);
        $this->load->view('admin/templates/footer');
    }

    //hasil iterasi kmeans perempuan

    function iterasi_hasil_perempuan()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data_hasil = $this->m_daerah->selectdata('hasil_perempuan INNER JOIN (data_malariaperempuan,puskesmas) on hasil_perempuan.id_malariap = data_malariaperempuan.id_malariap and data_malariaperempuan.id_puskesmas = puskesmas.id_puskesmas order by d3 DESC');

        $wilayah = array(
            'data_hasil'    => $data_hasil,
        );

        $wilayah['q'] = $this->db->query('select * from centroid_temp_perempuan group by iterasi');

        $datas['title'] = 'Hasil Data Malaria Perempuan';
        $wilayah['malaria'] = $this->m_daerah->datamalariap();
        $this->load->view('admin/templates/header', $datas);
        $this->load->view('admin/tampilandatahasilperempuan', $wilayah);
        $this->load->view('admin/templates/footer');
    }

    //tampilan grafik

    public function grafik()
    {
        $data['title'] = 'Grafik Malaria';
        $wilayah['malaria'] = $this->m_daerah->graph();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/grafik', $wilayah);
        $this->load->view('admin/templates/footer');
    }

    //tampilan grafik

    public function grafik_laki()
    {
        $data['title'] = 'Grafik Malaria Laki-Laki';
        $wilayah['malaria'] = $this->m_daerah->graph_laki();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/grafik_laki', $wilayah);
        $this->load->view('admin/templates/footer');
    }

    public function grafik_perempuan()
    {
        $data['title'] = 'Grafik Malaria Perempuan';
        $wilayah['malaria'] = $this->m_daerah->graph_perempuan();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/grafik_perempuan', $wilayah);
        $this->load->view('admin/templates/footer');
    }
}
