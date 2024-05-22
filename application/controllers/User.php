<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class User extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("User_model");
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data = array(
            'title' => 'View data user',
            'user' => $this->User_model->getAll(),
            'content'=> 'user/index'
        );
        $this->load->view('template/main',$data);
    }
    public function add()
    {
        $data = array(
            'title' => 'Tambah Data user',
            'content' => 'user/add_form'
        );
        $this->load->view('template/main',$data);
    }
    public function save()
    {
        $this->User_model->Save();
        if($this->db->affected_row()>0){
            $this->session->set_flashdate("succes","Data user berhasil di Simpan");
        }
        redirect('user');
    }
}