<?php defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Medicos_model');
        $this->load->model('Pacientes_model');
        $this->load->model('Usuario_model');
        $this->load->helper('form');
        $this->user_id = $this->session->userdata('user_id');
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
        $logon = array(
            'login' => $this->input->post('login'),
            'senha' => $this->input->post('senha')
        );
        $validacao = $this->Usuario_model->validar($logon);
        print $validacao->login;

        // $data['usuario'] = $usuario;
        if ($validacao) {
            $usuario = array(
                'user_id' => $validacao->usuarioID,
                'login' => $validacao->login,
                'tipo' => $validacao->tipo
            );
            $this->session->set_userdata($usuario);
            $this->session->set_flashdata('success', "Usuario Logado!");
        } else {
            $this->session->set_flashdata('danger', "Usuario ou senha invalidos!");
        }
        if ($usuario['tipo'] === true) {
            redirect("/medicos/");
        } else {
            redirect("/pacientes/");
        }
    }
}
