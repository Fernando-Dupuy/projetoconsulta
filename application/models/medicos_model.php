<?php
class Medicos_model extends CI_Model
{
    public function listarTodos()
    {
        $sql = "select * from medicos";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function salvarPaciente($paciente)
    {
        return $this->db->insert('pacientes', $paciente);
    }
}
