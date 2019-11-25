<?php
class Pacientes_Model extends CI_Model
{ 
    public function criar()
    {
        $dado = array(
            'nome' => $this->input->post('nome'),
            'cpf' => $this->input->post('cpf'),
            'telefone' => $this->input->post('telefone')
        );
        
        return $this->db->insert('pacientes', $dado);
    }
    public function atualizar($dados)
    {
        # code...
    }
}
