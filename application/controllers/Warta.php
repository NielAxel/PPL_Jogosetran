<?php

class Warta extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("ModelWarta");
    }

    public function index()
    {
        $data['title'] = "Warta";

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $dataWarta = $this->ModelWarta->getAll();
        $data = array(
            "wartas" => $dataWarta
        );
        $this->load->view('content/warta/v_list_warta', $data);
    }

    //untuk meload  form tambah tampilan barang
    public function tambah()
    {
        $data['title'] = "Warta";
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $this->load->view("content/warta/v_add_warta");
    }

    public function insert()
    {
        $data = array(
            "judul_warta" => $this->input->post("judul_warta"),
            "jenis_warta" => $this->input->post("jenis_warta"),
            "tgl_warta" => $this->input->post("tgl_warta")

        );

        $id = $this->ModelWarta->insertGetId($data);
        redirect('warta');
    }

    //untuk meload tampilan form update
    public function ubah($id)
    {
        $data['title'] = "Warta";
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $warta = $this->ModelWarta->getByPrimaryKey($id);
        $data = array(
            "warta" => $warta,
        );
        $this->load->view('content/warta/v_update_warta', $data);
    }

    public function update()
    {
        $id = $this->input->post('kd_warta');
        $data = array(
            "judul_warta" => $this->input->post("judul_warta"),
            "jenis_warta" => $this->input->post("jenis_warta"),
            "tgl_warta" => $this->input->post("tgl_warta")
        );
        $this->ModelWarta->update($id, $data);
        redirect('warta');
    }

    public function hapus($id)
    {
       $data['title'] = "Hapus Warta";
       $this->load->view('templates/header');
       $this->load->view('templates/sidebar', $data);
       $warta = $this->ModelWarta->getByPrimaryKey($id);
       $dataWarta = array(
          "wartas" => $warta
       );
       $this->load->view('content/warta/v_delete_warta',$dataWarta);
    }

    public function delete()
    {
        $id = $this->input->post('kd_warta');
        $this->ModelWarta->delete($id);
        redirect('warta');
    }
}
