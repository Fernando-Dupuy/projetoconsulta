<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Medicos extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Medicos_model');
        $this->load->helper('form');
    }

    public function index()
    {

        $data['medicos'] = $this->Medicos_model->listarTodos();
        $data['title'] = "Agenda do Dia";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top');
        $this->load->view('medicos', $data);
        $this->load->view('templates/js');
        $this->load->view('templates/footer');
    }

    public function cadastrarPaciente()
    {
        // $data['medicos'] = $this->Medicos_model->listarTodos();
        //$this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = "Cadastro de Paciente";

        $this->form_validation->set_rules('nome', 'Nome', 'required');
        $this->form_validation->set_rules('cpf', 'CPF', 'required');
        $this->form_validation->set_rules('telefone', 'Telefone', 'required');

        if ($this->form_validation->run() === false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/nav-top');
            $this->load->view('medicos_cadastro', $data);
            $this->load->view('templates/js');
            $this->load->view('templates/footer');
        } else {
            $paciente = array(
                'nome' => $this->input->post('nome'),
                'cpf' => $this->input->post('cpf'),
                'telefone' => $this->input->post('telefone')
            );
            $this->Medicos_model->salvarPaciente($paciente);
            $this->load->view('templates/header', $data);
            $this->load->view('sucesso_cadastro');
            $this->load->view('templates/js');
            $this->load->view('templates/footer');
        }
    }
}
