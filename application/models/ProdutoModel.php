<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProdutoModel extends CI_Model{
    
    public function listar_produtos()
    {
        $this->db->select("id_produto, descricao, valor");        
	    $resultado = $this->db->get("produto")->result();
	    return $resultado;
    }

    public function inserir_produtos($data){
        $this->db->insert("produto",$data);
        
    }
    
}
