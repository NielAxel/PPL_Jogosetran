<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['title'] = 'Admin';
        $data['user'] = $this->db->get_where(
            'user',
            ['email' => $this->session->userdata['email']]
        )->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function dashboard()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where(
            'user',
            ['email' => $this->session->userdata['email']]
        )->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/dashboard', $data);
        $this->load->view('templates/footer');
    }

    public function profileAdmin()
    {
        $data['title'] = 'Profile Admin';
        $data['user'] = $this->db->get_where(
            'user',
            ['email' => $this->session->userdata['email']]
        )->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/profileAdmin', $data);
        $this->load->view('templates/footer');
    }

    public function editProfile()
    {
        $data['title'] = 'Edit Profile ';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata['email']])->row_array();

        $this->form_validation->set_rules('name', 'Nama', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/editProfile', $data);
            $this->load->view('templates/footer');
        } else {
            $email = $this->input->post('email');
            $name = $this->input->post('name');
            

            $upload_image= $_FILES['image']['name'];

            if($upload_image){
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '2000';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                if($this->upload->do_upload('image')){
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                    
                }else{
                    echo $this->upload->display_errors();
                }
            }



            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');
            

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Anda telah Mengganti data Diri
            </div>');
            redirect('user/profileAdmin');
        }
    }
}
