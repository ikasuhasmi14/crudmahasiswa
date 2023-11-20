<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Prodi
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

class Prodi extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
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

  public function prodi()
  {
    $data['judul'] = 'Data Prodi';
    $data['prodi'] = $this->Prodi_model->get();
    $this->load->view('layout/header');
    $this->load->view('layout/navbar',$data);
    $this->load->view('layout/sidebar');
    $this->load->view('prodi/dataprodi', $data);
    $this->load->view('layout/footer');
  }

  public function detail($id) 
  {
    $data['judul'] = 'Detail Prodi';
    $data['prodi'] = $this->Prodi_model->getById($id);
    $this->load->view('layout/header');
    $this->load->view('layout/navbar',$data);
    $this->load->view('layout/sidebar');
    $this->load->view('prodi/detailprodi', $data);
    $this->load->view('layout/footer');
  }

  public function tambah() 
  {
    $data['judul'] = 'Tambah Data Prodi';
    $this->load->view('layout/header');
    $this->load->view('layout/navbar',$data);
    $this->load->view('layout/sidebar');
    $this->load->view('prodi/tambahprodi', $data);
    $this->load->view('layout/footer');
  }

  public function upload()
  {
    $data = [
      'nama_prodi' => $this->input->post('nama_prodi'),
      'ruangan' => $this->input->post('ruangan'),
      'jurusan' => $this->input->post('jurusan'),
      'akreditasi' => $this->input->post('akreditasi'),
      'tahun_berdiri' => $this->input->post('tahun_berdiri'),
      'output_lulusan' => $this->input->post('output_lulusan'),
      
    ];
    $this->Prodi_model->insert($data);
    redirect('Prodi/prodi');
  }

  public function edit($id) 
  {
    $data['judul'] = 'Tambah Data Prodi';
    $data['prodi'] = $this->Prodi_model->getById($id);
    $this->load->view('layout/header');
    $this->load->view('layout/navbar',$data);
    $this->load->view('layout/sidebar');
    $this->load->view('prodi/vw_ubahprodi', $data);
    $this->load->view('layout/footer');
  }

  public function update()
  {
    $data = [
      'nama_prodi' => $this->input->post('nama_prodi'),
      'ruangan' => $this->input->post('ruangan'),
      'jurusan' => $this->input->post('jurusan'),
      'akreditasi' => $this->input->post('akreditasi'),
      'tahun_berdiri' => $this->input->post('tahun_berdiri'),
      'output_lulusan' => $this->input->post('output_lulusan'),
      
    ];
    $id = $this->input->post('id');
    $this->Prodi_model->update(['id' => $id], $data);
    redirect('Prodi/prodi');
  }

  public function hapus($id) 
  {
    $this->Prodi_model->delete($id);
    redirect('Prodi/prodi');
  }

}


/* End of file Prodi.php */
/* Location: ./application/controllers/Prodi.php */