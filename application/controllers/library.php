<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Mahasiswa
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Perpus extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mahasiswa_model');
    $this->load->model('Prodi_model');
  }

  public function index()
  {
    $data['judul'] = 'Dashboard';
    $this->load->view('layout/header');
    $this->load->view('layout/navbar',$data);
    $this->load->view('layout/sidebar');
    $this->load->view('mahasiswa/vw_mahasiswa', $data);
    $this->load->view('layout/footer');
  }

  public function mhs()
  {
    $data['judul'] = 'Data Mahasiswa';
    $data['mahasiswa'] = $this->Mahasiswa_model->get();
    $this->load->view('layout/header');
    $this->load->view('layout/navbar',$data);
    $this->load->view('layout/sidebar');
    $this->load->view('mahasiswa/datamhs', $data);
    $this->load->view('layout/footer');
  }

  public function tambah()
  {
    $data['judul'] = "Tambah Data Mahasiswa";
    $data['prodi'] = $this->Prodi_model->get();
    $this->load->view('layout/header');
    $this->load->view('layout/navbar',$data);
    $this->load->view('layout/sidebar');
    $this->load->view('mahasiswa/tambahmhs', $data);
    $this->load->view('layout/footer');
  }

  public function edit($id)
  {
    $data['judul'] = "Edit Data Mahasiswa";
    $data['prodi'] = $this->Prodi_model->get();
    $data['mahasiswa'] = $this->Mahasiswa_model->getById($id);
    $this->load->view('layout/header');
    $this->load->view('layout/navbar',$data);
    $this->load->view('layout/sidebar');
    $this->load->view('mahasiswa/vw_ubahmahasiswa', $data);
    $this->load->view('layout/footer');
  }

  public function upload() 
  {
    $data = [
      'nama' => $this->input->post('nama'),
      'nim' => $this->input->post('nim'),
      'email' => $this->input->post('email'),
      'prodi' => $this->input->post('prodi'),
      'alamat' => $this->input->post('alamat'),
      'no_hp' => $this->input->post('no_hp'),
      'jenis_kelamin' => $this->input->post('jenis_kelamin'),
      'asal_sekolah' => $this->input->post('asal_sekolah'),
      
    ];
    $this->Mahasiswa_model->insert($data);
    redirect('Mahasiswa/mhs');
  }

  public function update() 
  {
    $data = [
      'nama' => $this->input->post('nama'),
      'nim' => $this->input->post('nim'),
      'email' => $this->input->post('email'),
      'prodi' => $this->input->post('prodi'),
      'alamat' => $this->input->post('alamat'),
      'no_hp' => $this->input->post('no_hp'),
      'jenis_kelamin' => $this->input->post('jenis_kelamin'),
      'asal_sekolah' => $this->input->post('asal_sekolah'),
      
    ];
    $id = $this->input->post('id');
    $this->Mahasiswa_model->update(['id' => $id], $data);
    redirect('Mahasiswa/mhs');
    // var_dump($data);
  }

  public function detail($id) 
  {
    $data['judul'] = 'Detail Mahasiswa';
    $data['mahasiswa'] = $this->Mahasiswa_model->getById($id);
    $this->load->view('layout/header');
    $this->load->view('layout/navbar',$data);
    $this->load->view('layout/sidebar');
    $this->load->view('mahasiswa/detailmhs', $data);
    $this->load->view('layout/footer');
  }

  public function hapus($id)
  {
    $this->Mahasiswa_model->delete($id);
    redirect('Mahasiswa/mhs');
  }


  

}


/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Mahasiswa.php */