<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct(Type $var = null)
    {
        parent::__construct();
        $this->load->model('Medicos_model');
        $this->load->model('Pacientes_model');
        $this->load->model('Usuario_model');
        $this->load->helper('form');
    }

    public function index()
    {
        $this->load->library('form_validation');
        $data['title'] = "login";
        $this->load->view('templates/header', $data);
        $this->load->view('login_sistema');
        $this->load->view('templates/js');
        $this->load->view('templates/footer');
    }

    public function logar()
    {
        $usuario = $this->Usuario_model->validar();
        // $data['status'] = $usuario;
        // $this->load->view('teste', $data);

        if ($usuario) {
            $this->session->set_userdata('bem vindo', $usuario);
            $this->session->flashdata('success', "Usuario Logado!");
        } else {
            $this->session->flashdata('danger', "Usuario ou senha invalidos!");
        }
        if ($usuario['tipo']) {
            redirect(' /medicos/');
        } else {
            redirect(' /pacientes/');
        }
    }
}
