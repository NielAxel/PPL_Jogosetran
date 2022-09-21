<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datagereja extends CI_Controller
{
   function __construct()
   {
      parent::__construct();
      $this->load->model("DataGerejaModel");
   }
   
   public function index()
   {
      $data['title'] = "Data Gereja";
     
      $this->load->view('templates/header');
      $this->load->view('templates/sidebar', $data);
      $gereja = $this->DataGerejaModel->getAll();
      $dataGereja = array(
         "datagerejas" => $gereja
      );
      $this->load->view('Datagereja/list_data', $dataGereja);
   }

   public function tambah()
   {
      $data['title'] = "Data Gereja";
      $this->load->view('templates/header');
      $this->load->view('templates/sidebar', $data);
      $this->load->view('Datagereja/add_data');
   }
   public function insert()
   {
      $data = array(
         "nama_gereja" => $this->input->post("nama_gereja"),
         "tgl_berdiri_gereja" => $this->input->post("tgl_berdiri_gereja"),
         "visi_gereja" => $this->input->post("visi_gereja"),
         "misi_gereja" => $this->input->post("misi_gereja"),
         "deskripsi_gereja" => $this->input->post("deskripsi_gereja"),
         "alamat" => $this->input->post("alamat"),
         "no_hp" => $this->input->post("no_hp"),
         "sosmed" => $this->input->post("sosmed"),
         "email" => $this->input->post("email"),
         "url_logo_gereja" => $this->input->post("url_logo_gereja")
      );
      $id = $this->DataGerejaModel->insertGetId($data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Data Berhasil Ditambahkan
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>');
    redirect('datagereja');
   }

   public function ubah($id)
   {
      $data['title'] = "Data Gereja";
      $this->load->view('templates/header');
      $this->load->view('templates/sidebar', $data);
      $gereja = $this->DataGerejaModel->getByPrimaryKey($id);
      $dataGereja = array(
         "datagerejas" => $gereja
      );
      $this->load->view('Datagereja/update_data',$dataGereja);
   }

   public function update()
   {
      $id = $this->input->post('id_gereja');
      $data = array(
         "nama_gereja" => $this->input->post("nama_gereja"),
         "tgl_berdiri_gereja" => $this->input->post("tgl_berdiri_gereja"),
         "visi_gereja" => $this->input->post("visi_gereja"),
         "misi_gereja" => $this->input->post("misi_gereja"),
         "deskripsi_gereja" => $this->input->post("deskripsi_gereja"),
         "alamat" => $this->input->post("alamat"),
         "no_hp" => $this->input->post("no_hp"),
         "sosmed" => $this->input->post("sosmed"),
         "email" => $this->input->post("email"),
         "url_logo_gereja" => $this->input->post("url_logo_gereja")
      );
      $this->DataGerejaModel->update($id,$data);
        $this->session->set_flashdata('pesan', '<div  class="alert alert-warning alert-dismissible fade show" role="alert">
        Data Berhasil Di Ubah
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('datagereja');
   }

   public function hapus($id)
   {
      $data['title'] = "Data Gereja";
      $this->load->view('templates/header');
      $this->load->view('templates/sidebar', $data);
      $gereja = $this->DataGerejaModel->getByPrimaryKey($id);
      $dataGereja = array(
         "datagerejas" => $gereja
      );
      $this->load->view('Datagereja/delete_data',$dataGereja);
   }

   public function delete()
    {
        $id = $this->input->post('id_gereja');
        $this->DataGerejaModel->delete($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Berhasil Di Hapus
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('datagereja');
    }
}