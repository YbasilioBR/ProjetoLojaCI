<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProdutoModel extends CI_Model{
    
    public function listar_todos()
    {
        $this->db->select("id_produto, descricao, valor");
        
	    $resultado = $this->db->get("produto")->result();

	    return $resultado;

    }
}
