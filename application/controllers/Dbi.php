<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dbi extends CI_Controller
{

    public function hasil_dbi()
    {

        $data['title'] = "Hasil DBI";

        $hasil['dbi'] = $this->db->get("hasil_dbi_k2")->result();
        $hasil['dbi2'] = $this->db->get("hasil_dbi_k3")->result();

        $this->load->view('layout/header', $data);
        $this->load->view('dbi/nilai_dbi', $hasil);
        $this->load->view('layout/footer');
    }

    public function zona()
    {

        $data['title'] = "Input Zona";

        $this->db->where("c1 =", 1);
        $this->db->where("iterasi =", 2);
        $this->db->join("data_malaria", "data_malaria.id_malaria = centroid_temp_k2.iddata_malaria");
        $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malaria.id_puskesmas');
        $hasil['datakmeans'] = $this->db->get("centroid_temp_k2")->result();

        $this->db->select('*,max(idcluster_name_1) as cl1');
        $cluster1 = $this->db->get('cluster_name_1');

        foreach($cluster1->result() as $c1){

            if($c1->idcluster_name_1 == null){
                $hc1 = "Data Belum Diisi";
            }else if($c1->idcluster_name_1 != null){
                $this->db->where('idcluster_name_1', $c1->cl1);
                $hc1 = $this->db->get('cluster_name_1')->row()->cluster_name1;
            }
        }

        $this->db->select('*,max(idcluster_name_2) as cl2');
        $cluster2 = $this->db->get('cluster_name_2');
        
        foreach($cluster2->result() as $c2){
            
            if($c2->idcluster_name_2 == null){
                $hc2 = "Data Belum Diisi";
            }else if($c2->idcluster_name_2 != null){
                $this->db->where('idcluster_name_2', $c2->cl2);
                $hc2 = $this->db->get('cluster_name_2')->row()->cluster_name2;
            }
        }
        
        $hasil['c1'] = $hc1;
        $hasil['c2'] = $hc2;

        $this->db->where("c2 =", 1);
        $this->db->where("iterasi =", 2);
        $this->db->join("data_malaria", "data_malaria.id_malaria = centroid_temp_k2.iddata_malaria");
        $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malaria.id_puskesmas');
        $hasil['datakmeans2'] = $this->db->get("centroid_temp_k2")->result();

        $hasil['centroid1'] = $this->db->get("data_centroid_k2_1")->result();
        $hasil['centroid2'] = $this->db->get("data_centroid_k2_2")->result();

        $this->load->view('layout/header', $data);
        $this->load->view('dbi/zona', $hasil);
        $this->load->view('layout/footer');
    }

    public function process_cluster_name(){
        $this->form_validation->set_rules('cluster_name1', 'Nama Cluster 1', 'required|trim');

        if($this->form_validation->run()== FALSE) {
            redirect('dbi/zona');
        }else {
            $data = [
                'cluster_name1' => htmlspecialchars($this->input->post('cluster_name1', true))
            ];

        $this->db->insert('cluster_name_1',$data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            <strong> Pemberitahuan! </strong> Tambah Data berhasil!. </div>');
        redirect('dbi/zona');   
        }
    }

    public function process_cluster_name2(){
        $this->form_validation->set_rules('cluster_name2', 'Nama Cluster 2', 'required|trim');

        if($this->form_validation->run()== FALSE) {
            redirect('dbi/zona');
        }else {
            $data = [
                'cluster_name2' => htmlspecialchars($this->input->post('cluster_name2', true))
            ];

        $this->db->insert('cluster_name_2',$data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            <strong> Pemberitahuan! </strong> Tambah Data berhasil!. </div>');
        redirect('dbi/zona');   
        }
    }
}
