<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dbi_proccess extends CI_Controller {

    public function index(){

        $data['title'] = "Nilai Centroid K-2";

        $this->db->where('idhasil_centroid_k2 =', 1);
        $dbi['data'] = $this->db->get("hasil_centroid_k2")->result();
        
        $this->db->where('idhasil_centroid_k2 =', 2);
        $dbi['data2'] = $this->db->get("hasil_centroid_k2")->result();

        $this->load->view('layout/header', $data);
        $this->load->view('dbi/k2/nilai_centroid', $dbi);
        $this->load->view('layout/footer');

    }

    public function ssw_proccess(){

        $data['title'] = "Proccess SSW K-2";

        $this->db->where("c1 =", 1);
        $this->db->where("iterasi =", 2);
        $this->db->join("data_malaria", "data_malaria.id_malaria = centroid_temp_k2.iddata_malaria");
        $dbi['datakmeans'] = $this->db->get("centroid_temp_k2")->result();
        
        $this->db->where("c2 =", 1);
        $this->db->where("iterasi =", 2);
        $this->db->join("data_malaria", "data_malaria.id_malaria = centroid_temp_k2.iddata_malaria");
        $dbi['datakmeans2'] = $this->db->get("centroid_temp_k2")->result();

        $dbi['centroid1'] = $this->db->get("data_centroid_k2_1")->result();
        $dbi['centroid2'] = $this->db->get("data_centroid_k2_2")->result();

        $this->load->view('layout/header', $data);
        $this->load->view('dbi/k2/ssw', $dbi);
        $this->load->view('layout/footer');

    }

    public function hasil_ssw(){

        $data['title'] = "Hasil SSW";

        $this->db->select('avg(distance) as hasil');
        $dbi['hasilssw1'] = $this->db->get("datacluster_distance_k2_1")->result();
        
        $this->db->select('avg(distance) as hasil');
        $dbi['hasilssw2'] = $this->db->get("datacluster_distance_k2_2")->result();

        $this->load->view('layout/header', $data);
        $this->load->view('dbi/k2/hasil_ssw', $dbi);
        $this->load->view('layout/footer');
    }

    public function ssb_proccess(){

        $data['title'] = "Process SSB";

        $dbi['centroid1'] = $this->db->get("data_centroid_k2_1")->result();
        $dbi['centroid2'] = $this->db->get("data_centroid_k2_2")->result();

        $this->load->view('layout/header', $data);
        $this->load->view('dbi/k2/ssb', $dbi);
        $this->load->view('layout/footer');

    }

    public function hasil_dbi(){

        $data['title'] = "Hasil DBI";

        $dbi['ssw'] = $this->db->get("hasil_ssw")->result();
        $dbi['rasio'] = $this->db->get("datassw_k2")->result();

        $this->load->view('layout/header', $data);
        $this->load->view('dbi/k2/hasil_dbi', $dbi);
        $this->load->view('layout/footer');

    }

    public function k3(){

        $data['title'] = "Nilai Centroid K-3";

        $this->db->where('idhasil_centroid_k3 =', 1);
        $dbi['data'] = $this->db->get("hasil_centroid_k3")->result();
        
        $this->db->where('idhasil_centroid_k3 =', 2);
        $dbi['data2'] = $this->db->get("hasil_centroid_k3")->result();

        $this->db->where('idhasil_centroid_k3 =', 2);
        $dbi['data3'] = $this->db->get("hasil_centroid_k3")->result();

        $this->load->view('layout/header', $data);
        $this->load->view('dbi/k3/nilai_centroid', $dbi);
        $this->load->view('layout/footer');

    }

    public function ssw_proccess_k3()
    {

        $data['title'] = "Proccess SSW K-3";

        $this->db->where("c1 =", 1);
        $this->db->where("iterasi =", 2);
        $this->db->join("data_malaria", "data_malaria.id_malaria = centroid_temp_k3.id_malaria");
        $dbi['datakmeans'] = $this->db->get("centroid_temp_k3")->result();

        $this->db->where("c2 =", 1);
        $this->db->where("iterasi =", 2);
        $this->db->join("data_malaria", "data_malaria.id_malaria = centroid_temp_k3.id_malaria");
        $dbi['datakmeans2'] = $this->db->get("centroid_temp_k3")->result();
        
        $this->db->where("c3 =", 1);
        $this->db->where("iterasi =", 2);
        $this->db->join("data_malaria", "data_malaria.id_malaria = centroid_temp_k3.id_malaria");
        $dbi['datakmeans3'] = $this->db->get("centroid_temp_k3")->result();

        $dbi['centroid1'] = $this->db->get("data_centroid_k3_1")->result();
        $dbi['centroid2'] = $this->db->get("data_centroid_k3_2")->result();
        $dbi['centroid3'] = $this->db->get("data_centroid_k3_3")->result();

        $this->load->view('layout/header', $data);
        $this->load->view('dbi/k3/ssw', $dbi);
        $this->load->view('layout/footer');
    }

    public function hasil_ssw_k3(){

        $data['title'] = "Hasil SSW K-3";

        $this->db->select('avg(distance) as hasil');
        $dbi['hasilssw1'] = $this->db->get("datacluster_distance_k3_1")->result();
        
        $this->db->select('avg(distance) as hasil');
        $dbi['hasilssw2'] = $this->db->get("datacluster_distance_k3_2")->result();
        
        $this->db->select('avg(distance) as hasil');
        $dbi['hasilssw3'] = $this->db->get("datacluster_distance_k3_3")->result();

        $this->load->view('layout/header', $data);
        $this->load->view('dbi/k3/hasil_ssw', $dbi);
        $this->load->view('layout/footer');
    }

    public function ssb_proccess_k3(){

        $data['title'] = "Process SSB K-3";

        $dbi['centroid1'] = $this->db->get("data_centroid_k3_1")->result();
        $dbi['centroid2'] = $this->db->get("data_centroid_k3_2")->result();
        $dbi['centroid3'] = $this->db->get("data_centroid_k3_3")->result();

        $this->load->view('layout/header', $data);
        $this->load->view('dbi/k3/ssb', $dbi);
        $this->load->view('layout/footer');

    }

    public function hasil_rasio_k3(){

        $data['title'] = "Process Rasio K-3";

        $dbi['sw'] = $this->db->get("hasil_ssw_k3")->result();
        $dbi['rasio'] = $this->db->get("datassw_k3")->result();

        $this->load->view('layout/header', $data);
        $this->load->view('dbi/k3/rasio', $dbi);
        $this->load->view('layout/footer');

    }

}