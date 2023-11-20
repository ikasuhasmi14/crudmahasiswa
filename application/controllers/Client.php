<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Client extends CI_Controller
{
  public function index()
  {

    // Mengambil data dari URL
    $file = file_get_contents('http://localhost:8000/mahasiswa');
    $json = json_decode($file);

    $data['mahasiswa'] = $json->data;
    $this->load->view('v_client', $data);

  

  }
}

