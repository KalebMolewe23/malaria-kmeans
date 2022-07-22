<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dbi extends CI_Controller {

    public function hasil_dbi(){

        $data['title'] = "Hasil DBI";

        $hasil['dbi'] = $this->db->get("hasil_dbi_k2")->result();
        $hasil['dbi2'] = $this->db->get("hasil_dbi_k3")->result();

        $this->load->view('layout/header', $data);
        $this->load->view('dbi/nilai_dbi', $hasil);
        $this->load->view('layout/footer');

    }

    public function zona(){

        $data['title'] = "Input Zona";

        $this->db->where("c1 =", 1);
        $this->db->where("iterasi =", 2);
        $this->db->join("data_malaria", "data_malaria.id_malaria = centroid_temp_k2.iddata_malaria");
        $hasil['datakmeans'] = $this->db->get("centroid_temp_k2")->result();

        $this->db->where("c2 =", 1);
        $this->db->where("iterasi =", 2);
        $this->db->join("data_malaria", "data_malaria.id_malaria = centroid_temp_k2.iddata_malaria");
        $hasil['datakmeans2'] = $this->db->get("centroid_temp_k2")->result();

        $hasil['centroid1'] = $this->db->get("data_centroid_k2_1")->result();
        $hasil['centroid2'] = $this->db->get("data_centroid_k2_2")->result();

        $this->load->view('layout/header', $data);
        $this->load->view('dbi/zona', $hasil);
        $this->load->view('layout/footer');

    }

}