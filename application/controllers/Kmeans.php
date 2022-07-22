<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kmeans extends CI_Controller {

    public function index(){

        $data['title'] = "Data Awal";

        $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malaria.id_puskesmas');
        $metode['malaria'] = $this->db->get("data_malaria")->result();

        $this->load->view('layout/header', $data);
        $this->load->view('kmeans/data_awal',$metode);
        $this->load->view('layout/footer');
    }
    
    public function k2(){

        $data['title'] = "Data K-2";

        $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malaria.id_puskesmas');
        $metode['malaria'] = $this->db->get("data_malaria")->result();

        $this->load->view('layout/header', $data);
        $this->load->view('kmeans/k2/data_awal', $metode);
        $this->load->view('layout/footer');

    }

    public function centroid_k2(){
        
        $data['title'] = "Data Centroid";

        $this->db->where("persentase = (SELECT max(persentase) from data_kmeans_k2)");
        $this->db->select("iddata_kmeans, nama_puskesmas,konfirmasi_lab,total_positif, max(persentase) as total1");
        $metode['centroid1'] = $this->db->get("data_kmeans_k2")->result();

        $this->db->where("persentase = (SELECT min(persentase) from data_kmeans_k2)");
        $this->db->select("nama_puskesmas,konfirmasi_lab,total_positif,min(persentase) as total2");
        $metode['centroid2'] = $this->db->get("data_kmeans_k2")->result();

        // $this->db->order_by("total3");
        // $this->db->select("nama_kelurahan,vaksin_gel1,vaksin_gel2,vaksin_gel3,min(persentase) as total3");
        // $metode['centroid3'] = $this->db->get("centroid")->result();

        // $metode['kmeans'] = $this->db->get("centroid")->result();
    
        $this->load->view('layout/header', $data);
        $this->load->view('kmeans/k2/data_centroid',$metode);
        $this->load->view('layout/footer');

    }

    public function iterasi_k2(){

        $data['title'] = "Iterasi K1";

        $datakmeans['malaria'] = $this->db->get('data_kmeans_k2')->result();
        $datakmeans['centroid1'] = $this->db->get('centroid_awal_k2_1')->result();
        $datakmeans['centroid2'] = $this->db->get('centroid_awal_k2_2')->result();

        $this->load->view('layout/header', $data);
        $this->load->view('kmeans/k2/iterasi',$datakmeans);
        $this->load->view('layout/footer');
    }

    public function interasi_k2_lanjut()
    {
        $datakmeans['malaria'] = $this->db->get('data_kmeans_k2');
        $id = "";
        $id = $this->db->query('select max(idhasil_centroid_k2) as m from hasil_centroid_k2');
        foreach ($id->result() as $i){
            $id = $i->m;
        }
        $this->db->where('idhasil_centroid_k2', $id);
        $datakmeans['centroid'] = $this->db->get('hasil_centroid_k2');
        $datakmeans['id'] = $id + 1;

        $it = "";
        $it = $this->db->query('select max(iterasi) as it from centroid_temp_k2');
        foreach ($it->result() as $i) {
            $it = $i->it;
        }

        $it_temp = $it - 1;
        $this->db->where('iterasi', $it_temp);
        $it_sebelum = $this->db->get('centroid_temp_k2');
        $c1_sebelum = array();
        $c2_sebelum = array();
        $no = 0;
        foreach ($it_sebelum->result() as $it_prev) {
            $c1_sebelum[$no] = $it_prev->c1;
            $c2_sebelum[$no] = $it_prev->c2;
            $no++;
        }

        $this->db->where('iterasi', $it);
        $it_sesesudah = $this->db->get('centroid_temp_k2');
        $c1_sesesudah = array();
        $c2_sesesudah = array();
        $no = 0;
        foreach ($it_sesesudah->result() as $it_next) {
            $c1_sesesudah[$no] = $it_next->c1;
            $c2_sesesudah[$no] = $it_next->c2;
            $no++;
        }

        if ($c1_sebelum == $c1_sesesudah || $c2_sebelum == $c2_sesesudah) {
        ?>
            <script>
                alert("Proses iterasi berakhir pada tahap ke-<?php echo $it; ?>");
            </script>
        <?php
            echo "<meta http-equiv='refresh' content='0; url=" . base_url() . "kmeans/iterasi_hasil_k2'>";
        } else {
            $datas['title'] = 'Data Daerah Malaria';
            $this->load->view('layout/header', $datas);
            $this->load->view('kmeans/k2/tampilandatalanjut', $datakmeans);
            $this->load->view('layout/footer');
        }   
    }

    function iterasi_hasil_k2()
    {
        $datas['title'] = 'Hasil Iterasi K-2';
        
        $this->db->join('data_malaria', 'data_malaria.id_malaria = centroid_temp_k2.iddata_malaria');
        $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malaria.id_puskesmas');
        $data_kmeans['q'] = $this->db->get('centroid_temp_k2')->result();

        // var_dump($data_kmeans);

        $this->load->view('layout/header', $datas);
        $this->load->view('kmeans/k2/hasil_iterasi', $data_kmeans);
        $this->load->view('layout/footer');
    }

    public function k3(){

        $data['title'] = "Data K-3";

        $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malaria.id_puskesmas');
        $metode['kmeans'] = $this->db->get("data_malaria")->result();

        $this->load->view('layout/header', $data);
        $this->load->view('kmeans/k3/data_awal', $metode);
        $this->load->view('layout/footer');

    }

    public function centroid_k3(){
        
        $data['title'] = "Data Centroid K-3";

        $this->db->where("persentase = (SELECT max(persentase) from data_malaria)");
        $this->db->select("id_malaria, jumlah_penduduk, nama_puskesmas, konfirmasi_lab , total_positif, ibu_hamil, max(persentase) as total1");
        $this->db->join("puskesmas", "puskesmas.id_puskesmas = data_malaria.id_puskesmas");
        $metode['centroid1'] = $this->db->get("data_malaria")->result();

        $this->db->where("id_malaria", 3);
        $this->db->select("id_malaria, jumlah_penduduk, nama_puskesmas, konfirmasi_lab , total_positif, ibu_hamil,persentase");
        $this->db->join("puskesmas", "puskesmas.id_puskesmas = data_malaria.id_puskesmas");
        $metode['centroid2'] = $this->db->get("data_malaria")->result();

        $this->db->where("persentase = (SELECT min(persentase) from data_kmeans_k3)");
        $this->db->select("nama_puskesmas, jumlah_penduduk, konfirmasi_lab , total_positif, ibu_hamil,min(persentase) as total3");
        $this->db->join("puskesmas", "puskesmas.id_puskesmas = data_malaria.id_puskesmas");
        $metode['centroid3'] = $this->db->get("data_malaria")->result();

        // $this->db->order_by("total3");
        // $this->db->select("nama_kelurahan,vaksin_gel1,vaksin_gel2,vaksin_gel3,min(persentase) as total3");
        // $metode['centroid3'] = $this->db->get("centroid")->result();

        // $metode['kmeans'] = $this->db->get("centroid")->result();
    
        $this->load->view('layout/header', $data);
        $this->load->view('kmeans/k3/data_centroid',$metode);
        $this->load->view('layout/footer');

    }

    public function iterasi_k3(){

        $data['title'] = "Iterasi K-3";

        $datakmeans['kmeans'] = $this->db->get('data_kmeans_k3')->result();
        $datakmeans['centroid1'] = $this->db->get('centroid_awal_k3_1')->result();
        $datakmeans['centroid2'] = $this->db->get('centroid_awal_k3_2')->result();
        $datakmeans['centroid3'] = $this->db->get('centroid_awal_k3_3')->result();

        $this->load->view('layout/header', $data);
        $this->load->view('kmeans/k3/iterasi',$datakmeans);
        $this->load->view('layout/footer');
    }

    public function interasi_k3_lanjut()
    {
        $this->db->join("puskesmas", "puskesmas.id_puskesmas = data_malaria.id_puskesmas");
        $datakmeans['malaria'] = $this->db->get('data_malaria');
        $id = "";
        $id = $this->db->query('select max(idhasil_centroid_k3) as m from hasil_centroid_k3');
        foreach ($id->result() as $i){
            $id = $i->m;
        }
        $this->db->where('idhasil_centroid_k3', $id);
        $datakmeans['centroid'] = $this->db->get('hasil_centroid_k3');
        $datakmeans['id'] = $id + 1;

        $it = "";
        $it = $this->db->query('select max(iterasi) as it from centroid_temp_k3');
        foreach ($it->result() as $i) {
            $it = $i->it;
        }

        $it_temp = $it - 1;
        $this->db->where('iterasi', $it_temp);
        $it_sebelum = $this->db->get('centroid_temp_k3');
        $c1_sebelum = array();
        $c2_sebelum = array();
        $c3_sebelum = array();
        $no = 0;
        foreach ($it_sebelum->result() as $it_prev) {
            $c1_sebelum[$no] = $it_prev->c1;
            $c2_sebelum[$no] = $it_prev->c2;
            $c3_sebelum[$no] = $it_prev->c3;
            $no++;
        }

        $this->db->where('iterasi', $it);
        $it_sesesudah = $this->db->get('centroid_temp_k3');
        $c1_sesesudah = array();
        $c2_sesesudah = array();
        $c3_sesesudah = array();
        $no = 0;
        foreach ($it_sesesudah->result() as $it_next) {
            $c1_sesesudah[$no] = $it_next->c1;
            $c2_sesesudah[$no] = $it_next->c2;
            $c3_sesesudah[$no] = $it_next->c3;
            $no++;
        }

        if ($c1_sebelum == $c1_sesesudah || $c2_sebelum == $c2_sesesudah || $c3_sebelum == $c3_sesesudah) {
        ?>
            <script>
                alert("Proses iterasi berakhir pada tahap ke-<?php echo $it; ?>");
            </script>
        <?php
            echo "<meta http-equiv='refresh' content='0; url=" . base_url() . "kmeans/iterasi_hasil_k3'>";
        } else {
            $datas['title'] = 'Data Daerah Vaksinasi';
            $this->load->view('layout/header', $datas);
            $this->load->view('kmeans/k3/tampilandatalanjut', $datakmeans);
            $this->load->view('layout/footer');
        }   
    }

    function iterasi_hasil_k3()
    {
        $datas['title'] = 'Hasil Iterasi K-3';

        $this->db->join('data_malaria', 'data_malaria.id_malaria = centroid_temp_k3.id_malaria');
        $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malaria.id_puskesmas');
        $data_kmeans['q'] = $this->db->get('centroid_temp_k3')->result();

        // var_dump($data_kmeans);

        $this->load->view('layout/header', $datas);
        $this->load->view('kmeans/k3/hasil_iterasi', $data_kmeans);
        $this->load->view('layout/footer');
    }

}