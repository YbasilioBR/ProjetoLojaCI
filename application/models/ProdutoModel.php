<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProdutoModel extends CI_Model{
        function __construct() {
        parent::__construct();
    }

    public function listar()
    {
        $this->db->select("id_produto, descricao, valor");        
	    $resultado = $this->db->get('produto')->result();
	    return $resultado;
    }

    public function inserir($data){  
        
        $this->db->set($data);
        $this->db->insert('produto');
    }

    public function alterar($data) {
        $this->db->where('id_produto', $data['id_produto']);
        $this->db->set($data);
        return $this->db->update('produto', $data);
    }

    public function excluir($id) {
        $this->db->where('id_produto', $id);
        $this->db->delete('produto'); 
    }

    public function GetProduto($idProduto){
        $this->db->select("id_produto, descricao, valor");
        $this->db->where('id_produto', $idProduto );        
	    $resultado = $this->db->get('produto')->result();
	    return $resultado;
    }
    
}
