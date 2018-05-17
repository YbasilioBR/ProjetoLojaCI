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

        public function inserir(){

                $this->load->view("produto/inserir");

                $descricao = $this->input->post('descricao');
                $valor = $this->input->post('valor');
                
                $data = array('descricao'=>$descricao,'valor'=>$valor);

                $this->load->model('ProdutoModel');

                if($this->ProdutoModel->inserir_produtos($data)){
                        echo "ok!";
                }else{
                        echo "fail";
                }
        }
        
}
