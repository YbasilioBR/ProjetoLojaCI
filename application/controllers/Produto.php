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

<<<<<<< HEAD
                $data = array('descricao'=>$this->$descricao,'valor'=>$this->$valor);

                $this->produto->inserir_produtos($valor);
=======
                $dados = array('descricao'=>$descricao, 'valor'=>$valor);

                $this->load->model("ProdutoModel","produto");

                $this->produto->inserir_produtos($dados);
>>>>>>> b54fa4c13740466439297e5680d1834e13710e7b
        }
        
}
