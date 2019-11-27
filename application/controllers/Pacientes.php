<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pacientes extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pacientes_model');
        $this->load->helper('form');
    }

    public function index()
    {

       
        $data['title'] = "Agenda do Dia";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top');
        $this->load->view('teste', $data);
        $this->load->view('templates/js');
        $this->load->view('templates/footer');
    }

    public function cadastrarPaciente()
    {
      
        $this->load->library('form_validation');

        $data['title'] = "Cadastro de Paciente";

        $this->form_validation->set_rules('nome', 'Nome', 'required');
        $this->form_validation->set_rules('cpf', 'CPF', 'required');
        $this->form_validation->set_rules('telefone', 'Telefone', 'required');

        if ($this->form_validation->run() === false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/nav-top');
            $this->load->view('cadastro_paciente', $data);
            $this->load->view('templates/js');
            $this->load->view('templates/footer');
        } else {
            
            $this->Pacientes_model->criar();
            $this->load->view('templates/header', $data);
            $this->load->view('sucesso_cadastro');
            $this->load->view('templates/js');
            $this->load->view('templates/footer');
        }
    }
}
