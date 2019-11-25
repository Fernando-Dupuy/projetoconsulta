<?php
class Usuario_model extends CI_Model
{
    public function validar()
    {
        $login = $this->input->post('login');
        $senha = $this->input->post('senha');
        $this->db->where('login', $login);
        $this->db->where('senha', $senha);
        $usuario = $this->db->get('usuario')->row_array();

        return $usuario;
    }
}