<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokumentasi extends CI_Controller
{
   function __construct()
   {
      parent::__construct();
      $this->load->model("DokumentasiModel");
   }
   public function index()
   {
      $data['title'] = "Dokumentasi Gereja";
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $dokumentasi = $this->DokumentasiModel->getAll();
      $dokumentasiGereja  =  array(
         "dokumentasis" => $dokumentasi
      );
      $this->load->view('dokumentasi/list_data', $dokumentasiGereja);
   }

   public function tambah()
   {
      $data['title'] = "Dokumentasi Gereja";
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('dokumentasi/add_data', $data);
   }

   public function insert()
   {
      $config['upload_path']          = './gambar/';
      $config['allowed_types']        = 'gif|jpg|png|jpeg';
      $config['max_size']             = 10000;
      $config['max_width']            = 10000;
      $config['max_height']           = 10000;

      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('userfile')) {
         echo "Gambar Gagal Dikirim";
      } else {
         $gambar = $this->upload->data();
         $gambar = $gambar['file_name'];
         $judul_dokumentasi = $this->input->post('judul_dokumentasi', TRUE);
         $deskripsi_dokumentasi = $this->input->post('deskripsi_dokumentasi', TRUE);
         $tanggal_dokumentasi = $this->input->post('tanggal_dokumentasi', TRUE);
         $data = array(
            "judul_dokumentasi" => $judul_dokumentasi,
            "deskripsi_dokumentasi" => $deskripsi_dokumentasi,
            "tanggal_dokumentasi" => $tanggal_dokumentasi,
            "gambar" => $gambar
         );
         $id = $this->DokumentasiModel->insertGetId($data);
         $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
             Data Berhasil Ditambahkan
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>');
         redirect('dokumentasi');
      }
   }

   public function ubah($id)
   {
      $data['title'] = "Dokumentasi Gereja";
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $dokumentasi = $this->DokumentasiModel->getByPrimaryKey($id);
      $dataDokumentasi = array(
         "dokumentasis" => $dokumentasi
      );
      $this->load->view('dokumentasi/update_data', $dataDokumentasi);
   }

   public function update()
   {

      $config['upload_path']          = './gambar/';
      $config['allowed_types']        = 'gif|jpg|png|jpeg';
      $config['max_size']             = 10000;
      $config['max_width']            = 10000;
      $config['max_height']           = 10000;

      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('userfile')) {
         echo "Gambar Gagal Dikirim";
      } else {
         $id = $this->input->post('id_dokumentasi');
         $gambar = $this->upload->data();
         $gambar = $gambar['file_name'];
         $judul_dokumentasi = $this->input->post('judul_dokumentasi', TRUE);
         $deskripsi_dokumentasi = $this->input->post('deskripsi_dokumentasi', TRUE);
         $tanggal_dokumentasi = $this->input->post('tanggal_dokumentasi', TRUE);
         $data = array(
            "judul_dokumentasi" => $judul_dokumentasi,
            "deskripsi_dokumentasi" => $deskripsi_dokumentasi,
            "tanggal_dokumentasi" => $tanggal_dokumentasi,
            "gambar" => $gambar
         );
         $id = $this->DokumentasiModel->update($id, $data);
         $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
             Data Berhasil Ditambahkan
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>');
         redirect('dokumentasi');
      }
   }

   public function hapus($id)
   {
      $data['title'] = "Dokumentasi Gereja";
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $dokumentasi = $this->DokumentasiModel->getByPrimaryKey($id);
      $dataDokumentasi = array(
         "dokumentasis" => $dokumentasi
      );
      $this->load->view('dokumentasi/delete_data', $dataDokumentasi);
   }

   public function delete()
   {
      $id = $this->input->post('id_dokumentasi');
      $this->DokumentasiModel->delete($id);
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Berhasil Di Hapus
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
      redirect('dokumentasi');
   }
}
