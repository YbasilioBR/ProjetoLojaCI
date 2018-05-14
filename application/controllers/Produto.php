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
        
                $resultado = $this->produto->listar_todos();

                echo '<pre>';

                var_dump($resultado);
	}

}
