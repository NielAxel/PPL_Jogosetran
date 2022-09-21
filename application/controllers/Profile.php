<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model("ProfileGembala");
  }
  public function index()
  {

    $data['title'] = 'List Profile Gembala';
    $profileGembala = $this->ProfileGembala->getAll();
    $dataProfile = array(
      "profiles" => $profileGembala
    );
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('profile/list_data', $dataProfile);
  }

  public function tambah()
  {

    $data['title'] = 'Tambah Data Profile Gembala';
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view("profile/add_data");
  }

  public function insert()
  {
    $config['upload_path']          = './assets/img/profileGembala/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 10000;
    $config['max_width']            = 10000;
    $config['max_height']           = 10000;

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('userfile')) {
      echo "Gagal Dikirim";
    } else {
      $gambar = $this->upload->data();
      $gambar = $gambar['file_name'];
      $nama_gembala = $this->input->post('nama_gembala');
      $deskripsi_gembala = $this->input->post('deskripsi_gembala');
      $riwayat_pendidikan = $this->input->post('riwayat_pendidikan');

      $data = array(
        "nama_gembala" => $nama_gembala,
        "deskripsi_gembala" => $deskripsi_gembala,
        "riwayat_pendidikan" => $riwayat_pendidikan,
        "gambar" => $gambar

      );
      $id = $this->ProfileGembala->insertGetId($data);
    }
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Data Berhasil Ditambahkan
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
    redirect('profile');
  }

  //untuk meload tampilan form update
  public function ubah($id)
  {

    $data['title'] = 'Ubah Data Profile Gembala';
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $profile = $this->ProfileGembala->getByPrimaryKey($id);
    $data = array(
      "profile" => $profile,
    );
    $this->load->view('profile/update_data', $data);
  }

  public function update()
  {
    $config['upload_path']          = './assets/img/profileGembala/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 10000;
    $config['max_width']            = 10000;
    $config['max_height']           = 10000;

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('userfile')) 
    {
      echo "Gagal Dikirim";
    } 
    else 
    {
      $gambar = $this->upload->data();
      $gambar = $gambar['file_name'];
      $nama_gembala = $this->input->post('nama_gembala');
      $deskripsi_gembala = $this->input->post('deskripsi_gembala');
      $riwayat_pendidikan = $this->input->post('riwayat_pendidikan');
      $id = $this->input->post('id_gembala');
      $data = array(
        "nama_gembala" => $nama_gembala,
        "deskripsi_gembala" => $deskripsi_gembala,
        "riwayat_pendidikan" => $riwayat_pendidikan,
        "gambar" => $gambar

      );
      $id = $this->ProfileGembala->update($id,$data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Data Berhasil Ditambahkan
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
    redirect('profile');
    }
    
  }
  

  public function hapus($id)
  {

    $data['title'] = 'Anda Yakin Hapus Data Ini ..?';
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $profile = $this->ProfileGembala->getByPrimaryKey($id);
    $data = array(
      "profile" => $profile,
    );
    $this->load->view('profile/delete_data', $data);
  }

  public function delete()
  {
    $id = $this->input->post('id_gembala');
    $this->ProfileGembala->delete($id);
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Berhasil Di Hapus
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
    redirect('profile');
  }
}
