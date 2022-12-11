<?php
  class Proccesskmeans{
    
    function __construct(){
      $this->CI =& get_instance();
      $this->CI->load->database();
    }

    function k3($c31,$c32){
      $nilai_c1_k3 = rand($c31, $c32);
      $nilai_c2_k3 = rand($c31, $c32);
      $nilai_c3_k3 = rand($c31, $c32);
      // echo "Centroid Awal C1 ". $nilai_c1_k3 ." Centroid Awal C2 ". $nilai_c2_k3 . " Centroid Awal C3 ". $nilai_c3_k3;

      if($nilai_c1_k3 == 0){
        $nilai_c1_k3;
      }else{
        $nilai_c1_k3;
      }

      if($nilai_c2_k3 == 0){
        $nilai_c2_k3;
      }else{
        $nilai_c2_k3;
      }

      if($nilai_c3_k3 == 0){
        $nilai_c3_k3;
      }else{
        $nilai_c3_k3;
      }

      $this->CI->db->where('idmalaria_baru', $nilai_c1_k3);
      $centroid['c1'] = $this->CI->db->get('data_malaria_baru');
      
      $this->CI->db->where('idmalaria_baru', $nilai_c2_k3);
      $centroid['c2'] = $this->CI->db->get('data_malaria_baru');
      
      $this->CI->db->where('idmalaria_baru', $nilai_c3_k3);
      $centroid['c3'] = $this->CI->db->get('data_malaria_baru');

      $centroid['cluster'] = $this->CI->db->get('data_malaria_baru');

      $data['title'] = 'Perhitungan K-Means';

      $this->CI->load->view('layout/header', $data);
      $this->CI->load->view('kmeans/k3/v_kmeans', $centroid);
      $this->CI->load->view('layout/footer');
  }

  function k3_2020($c31,$c32){
    $nilai_c1_k3 = rand($c31, $c32);
    $nilai_c2_k3 = rand($c31, $c32);
    $nilai_c3_k3 = rand($c31, $c32);
    // echo "Centroid Awal C1 ". $nilai_c1_k3 ." Centroid Awal C2 ". $nilai_c2_k3 . " Centroid Awal C3 ". $nilai_c3_k3;

    if($nilai_c1_k3 == 0){
      $nilai_c1_k3;
    }else{
      $nilai_c1_k3;
    }

    if($nilai_c2_k3 == 0){
      $nilai_c2_k3;
    }else{
      $nilai_c2_k3;
    }

    if($nilai_c3_k3 == 0){
      $nilai_c3_k3;
    }else{
      $nilai_c3_k3;
    }

    $this->CI->db->where('idmalaria_baru2020', $nilai_c1_k3);
    $centroid['c1'] = $this->CI->db->get('data_malaria_baru_2020');
    
    $this->CI->db->where('idmalaria_baru2020', $nilai_c2_k3);
    $centroid['c2'] = $this->CI->db->get('data_malaria_baru_2020');
    
    $this->CI->db->where('idmalaria_baru2020', $nilai_c3_k3);
    $centroid['c3'] = $this->CI->db->get('data_malaria_baru_2020');

    $centroid['cluster'] = $this->CI->db->get('data_malaria_baru_2020');

    $data['title'] = 'Perhitungan K-Means';

    $this->CI->load->view('layout/header', $data);
    $this->CI->load->view('kmeans/k3_2020/v_kmeans', $centroid);
    $this->CI->load->view('layout/footer');
}

  function k4($c51,$c52){
    $nilai_c1_k4 = rand($c51, $c52);
    $nilai_c2_k4 = rand($c51, $c52);
    $nilai_c3_k4 = rand($c51, $c52);
    $nilai_c4_k4 = rand($c51, $c52);

    if($nilai_c1_k4 == 0){
      $nilai_c1_k4;
    }else{
      $nilai_c1_k4;
    }

    if($nilai_c2_k4 == 0){
      $nilai_c2_k4;
    }else{
      $nilai_c2_k4;
    }

    if($nilai_c3_k4 == 0){
      $nilai_c3_k4;
    }else{
      $nilai_c3_k4;
    }

    if($nilai_c4_k4 == 0){
      $nilai_c4_k4;
    }else{
      $nilai_c4_k4;
    }

    $this->CI->db->where('idmalaria_baru', $nilai_c1_k4);
    $centroid['c1'] = $this->CI->db->get('data_malaria_baru');
    
    $this->CI->db->where('idmalaria_baru', $nilai_c2_k4);
    $centroid['c2'] = $this->CI->db->get('data_malaria_baru');
    
    $this->CI->db->where('idmalaria_baru', $nilai_c3_k4);
    $centroid['c3'] = $this->CI->db->get('data_malaria_baru');
    
    $this->CI->db->where('idmalaria_baru', $nilai_c4_k4);
    $centroid['c4'] = $this->CI->db->get('data_malaria_baru');

    $centroid['cluster'] = $this->CI->db->get('data_malaria_baru');

    $data['title'] = 'Perhitungan K-Means';

    $this->CI->load->view('layout/header', $data);
    $this->CI->load->view('kmeans/k4/v_kmeans', $centroid);
    $this->CI->load->view('layout/footer');

  }

  function k4_2020($c51,$c52){
    $nilai_c1_k4 = rand($c51, $c52);
    $nilai_c2_k4 = rand($c51, $c52);
    $nilai_c3_k4 = rand($c51, $c52);
    $nilai_c4_k4 = rand($c51, $c52);

    if($nilai_c1_k4 == 0){
      $nilai_c1_k4;
    }else{
      $nilai_c1_k4;
    }

    if($nilai_c2_k4 == 0){
      $nilai_c2_k4;
    }else{
      $nilai_c2_k4;
    }

    if($nilai_c3_k4 == 0){
      $nilai_c3_k4;
    }else{
      $nilai_c3_k4;
    }

    if($nilai_c4_k4 == 0){
      $nilai_c4_k4;
    }else{
      $nilai_c4_k4;
    }

    $this->CI->db->where('idmalaria_baru2020', $nilai_c1_k4);
    $centroid['c1'] = $this->CI->db->get('data_malaria_baru_2020');
    
    $this->CI->db->where('idmalaria_baru2020', $nilai_c2_k4);
    $centroid['c2'] = $this->CI->db->get('data_malaria_baru_2020');
    
    $this->CI->db->where('idmalaria_baru2020', $nilai_c3_k4);
    $centroid['c3'] = $this->CI->db->get('data_malaria_baru_2020');
    
    $this->CI->db->where('idmalaria_baru2020', $nilai_c4_k4);
    $centroid['c4'] = $this->CI->db->get('data_malaria_baru_2020');

    $centroid['cluster'] = $this->CI->db->get('data_malaria_baru_2020');

    $data['title'] = 'Perhitungan K-Means';

    $this->CI->load->view('layout/header', $data);
    $this->CI->load->view('kmeans/k4_2020/v_kmeans', $centroid);
    $this->CI->load->view('layout/footer');

  }

  function k5($c51,$c52){
    $nilai_c1_k5 = rand($c51, $c52);
    $nilai_c2_k5 = rand($c51, $c52);
    $nilai_c3_k5 = rand($c51, $c52);
    $nilai_c4_k5 = rand($c51, $c52);
    $nilai_c5_k5 = rand($c51, $c52);

    if($nilai_c1_k5 == 0){
      $nilai_c1_k5;
    }else{
      $nilai_c1_k5;
    }

    if($nilai_c2_k5 == 0){
      $nilai_c2_k5;
    }else{
      $nilai_c2_k5;
    }

    if($nilai_c3_k5 == 0){
      $nilai_c3_k5;
    }else{
      $nilai_c3_k5;
    }

    if($nilai_c4_k5 == 0){
      $nilai_c4_k5;
    }else{
      $nilai_c4_k5;
    }

    if($nilai_c5_k5 == 0){
      $nilai_c5_k5;
    }else{
      $nilai_c5_k5;
    }

    $this->CI->db->where('idmalaria_baru', $nilai_c1_k5);
    $centroid['c1'] = $this->CI->db->get('data_malaria_baru');
    
    $this->CI->db->where('idmalaria_baru', $nilai_c2_k5);
    $centroid['c2'] = $this->CI->db->get('data_malaria_baru');
    
    $this->CI->db->where('idmalaria_baru', $nilai_c3_k5);
    $centroid['c3'] = $this->CI->db->get('data_malaria_baru');
    
    $this->CI->db->where('idmalaria_baru', $nilai_c4_k5);
    $centroid['c4'] = $this->CI->db->get('data_malaria_baru');

    $this->CI->db->where('idmalaria_baru', $nilai_c5_k5);
    $centroid['c5'] = $this->CI->db->get('data_malaria_baru');

    $centroid['cluster'] = $this->CI->db->get('data_malaria_baru');

    $data['title'] = 'Perhitungan K-Means';

    $this->CI->load->view('layout/header', $data);
    $this->CI->load->view('kmeans/k5/v_kmeans', $centroid);
    $this->CI->load->view('layout/footer');

  }

  function k5_2020($c51,$c52){
    $nilai_c1_k5 = rand($c51, $c52);
    $nilai_c2_k5 = rand($c51, $c52);
    $nilai_c3_k5 = rand($c51, $c52);
    $nilai_c4_k5 = rand($c51, $c52);
    $nilai_c5_k5 = rand($c51, $c52);

    if($nilai_c1_k5 == 0){
      $nilai_c1_k5;
    }else{
      $nilai_c1_k5;
    }

    if($nilai_c2_k5 == 0){
      $nilai_c2_k5;
    }else{
      $nilai_c2_k5;
    }

    if($nilai_c3_k5 == 0){
      $nilai_c3_k5;
    }else{
      $nilai_c3_k5;
    }

    if($nilai_c4_k5 == 0){
      $nilai_c4_k5;
    }else{
      $nilai_c4_k5;
    }

    if($nilai_c5_k5 == 0){
      $nilai_c5_k5;
    }else{
      $nilai_c5_k5;
    }

    $this->CI->db->where('idmalaria_baru2020', $nilai_c1_k5);
    $centroid['c1'] = $this->CI->db->get('data_malaria_baru_2020');
    
    $this->CI->db->where('idmalaria_baru2020', $nilai_c2_k5);
    $centroid['c2'] = $this->CI->db->get('data_malaria_baru_2020');
    
    $this->CI->db->where('idmalaria_baru2020', $nilai_c3_k5);
    $centroid['c3'] = $this->CI->db->get('data_malaria_baru_2020');
    
    $this->CI->db->where('idmalaria_baru2020', $nilai_c4_k5);
    $centroid['c4'] = $this->CI->db->get('data_malaria_baru_2020');

    $this->CI->db->where('idmalaria_baru2020', $nilai_c5_k5);
    $centroid['c5'] = $this->CI->db->get('data_malaria_baru_2020');

    $centroid['cluster'] = $this->CI->db->get('data_malaria_baru_2020');

    $data['title'] = 'Perhitungan K-Means';

    $this->CI->load->view('layout/header', $data);
    $this->CI->load->view('kmeans/k5_2020/v_kmeans', $centroid);
    $this->CI->load->view('layout/footer');

  }

}