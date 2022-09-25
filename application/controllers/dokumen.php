<?php

class Dokumen extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_dokumen');
        $this->load->helper('form', 'url');
    }

    function index()
    {
        $data['title'] = "Dokumen Gereja";
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $data['dokumen'] = $this->m_dokumen->show_data()->result();
        $this->load->view('dokumen/v_show', $data);
    }

    function create()
    {
        $data['title'] = "Dokumen Gereja";
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dokumen/v_input');
    }

    function create_action()
    {
        $tgl_dokumen = $this->input->post('tgl_dokumen');
        $nama_dokumen = $this->input->post('nama_dokumen');
        $jns_dokumen = $this->input->post('jns_dokumen');
        $deskripsi = $this->input->post('deskripsi');
        $file = $_FILES['file'];
        if ($file = '') {
        } else {
            $config['upload_path']          = './assets/pdf';
            $config['allowed_types']        = 'pdf';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('file')) {
                echo "Upload gagal";
                die();
            } else {
                $file = $this->upload->data('file_name');
            }
        }
        $data = array(
            'tgl_dokumen' => $tgl_dokumen,
            'nama_dokumen' => $nama_dokumen,
            'jns_dokumen' => $jns_dokumen,
            'deskripsi' => $deskripsi,
            'file' => $file
        );


        $this->m_dokumen->input_data($data, 'dokumen');
        redirect('dokumen/index');
    }

    function edit($id)
    {
        $data['title'] = "Dokumen Gereja";
      $this->load->view('templates/header');
      $this->load->view('templates/sidebar', $data);
        $where = array('no_dokumen' => $id);
        $data['dokumen'] = $this->m_dokumen->edit_data($where, 'dokumen')->result();
        $this->load->view('dokumen/v_edit', $data);
    }

    function update()
    {
        $id = $this->input->post('no_dokumen');
        $tgl_dokumen = $this->input->post('tgl_dokumen');
        $nama_dokumen = $this->input->post('nama_dokumen');
        $jns_dokumen = $this->input->post('jns_dokumen');
        $deskripsi = $this->input->post('deskripsi');
        $file = $_FILES['file'];
        if ($file = '') {
        } else {
            $config['upload_path']          = './file/';
            $config['allowed_types']        = '*';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('file')) {
                echo "Upload gagal";
                die();
            } else {
                $file = $this->upload->data('file_name');
            }
        }
        $data = array(
            'tgl_dokumen' => $tgl_dokumen,
            'nama_dokumen' => $nama_dokumen,
            'jns_dokumen' => $jns_dokumen,
            'deskripsi' => $deskripsi,
            'file' => $file
        );

        $where = array(
            'no_dokumen' => $id
        );

        $this->m_dokumen->update_data($where, $data, 'dokumen');
        redirect('dokumen/index');
    }

    function delete($id)
    {
        $where = array('no_dokumen' => $id);
        $this->m_dokumen->delete_data($where, 'dokumen');
        redirect('dokumen/index');
    }
}
