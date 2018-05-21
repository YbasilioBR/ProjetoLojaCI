<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->database();
                $this->load->model('ProdutoModel');
        }

        public function index()
	{
                $texto = "Você está usando o controller produtos";
                $dados = array("mensagem" => $texto);
                $this->load->view("produto/principal", $dados);
	}

	public function listar_produto()
	{   
                $this->load->model("ProdutoModel","produto");        
                $dados['resultado'] = $this->produto->listar();
                $this->load->view("produto/listar",  $dados);
        }

        public function inserir_produto(){

                $this->load->view("produto/inserir");

                $descricao = $this->input->post('descricao');
                $valor = $this->input->post('valor');
                
                $data = array('descricao'=>$descricao,'valor'=>$valor);

                if ($this->input->post('add')){
                        $this->ProdutoModel->inserir($data);
                        echo "Records Saved Successfully";
                }    
        }

        public function carregarProduto()
	{                  
                
                $idProduto = $this->input->get('GetProd');
                
                $this->load->model("ProdutoModel","produto");        
                $dados['resultado'] = $this->produto->GetProduto($idProduto);
                $this->load->view("produto/alterar",  $dados);
        }

        public function alterar_produto() {                

                $id_produto = $this->input->post('id_produto');
                $descricao = $this->input->post('descricao');
                $valor = $this->input->post('valor');

                $data = array('id_produto'=>$id_produto, 'descricao'=>$descricao,'valor'=>$valor);

                if ($this->input->post('altera')){
                        $this->ProdutoModel->alterar($data);
                        echo "Records Updated Successfully";
                }
        }
        
}
