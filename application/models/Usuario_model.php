<?php
class Usuario_model extends CI_Model
{
    public function validar($usuario)
    {

        $query = $this->db->get_where('usuario', $usuario);
        if ($query) {
            $row = $query->row();
            return $row;
        } else {
            return false;
        }
    }
}
