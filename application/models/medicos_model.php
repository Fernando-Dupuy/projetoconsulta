<?php
class Medicos_model extends CI_Model
{
    public function listarTodos()
    {
        $sql = "select * from medicos";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function inserir()
    {
        $loginMedico = array(
            'login' => $this->input->post('login'),
            'senha' => $this->input->post('senha'),
            'tipo' => true
        );
        $this->db->insert('usuario', $loginMedico);
        $usuario_id = $this->db->insert_id();
        
        $dadosMedico = array(
            'nome' => $this->input->post('nome'),
            'cpf' => $this->input->post('cpf'),
            'crm' => $this->input->post('crm'),
            'usuarioID' => $usuario_id
        );
        $this->db->insert('medicos', $dadosMedico);
        

    }
 
    
}
