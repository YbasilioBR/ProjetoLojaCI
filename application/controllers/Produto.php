<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto extends CI_Controller {

        public function index()
	{
                $texto = "Você está usando o controller produtos";
                $dados = array("mensagem" => $texto);
                $this->load->view("produto/lista", $dados);
	}

	public function listar_array()
	{
                $this->load->model("ProdutoModel","produto");        
                $resultado = $this->produto->listar_produtos();
                echo '<pre>';
                var_dump($resultado);
        }

        public function inserir_produtos(){

                $this->load->view("produto/inserir");

                $descricao = $this->input->post('descricao');
                $valor = $this->input->post('valor');

                $dados = array('descricao'=>$descricao, 'valor'=>$valor);

                $this->load->model("ProdutoModel","produto");

                $this->produto->inserir_produtos($dados);
        }
        
}
