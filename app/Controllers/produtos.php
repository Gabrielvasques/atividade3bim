<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Produtos extends ResourceController
{
    private $produtosModel;

    public function __construct(){
        $this->produtosModel = new \App\Models\produtosModel();
    }

    public function listar()
    {
        $data = $this->produtosModel->findAll();
        return $this->response->setJson($data);
    }

    public function produto($id)
    {
        $data = $this->produtosModel->getProduto($id);
        return $this->response->setJson($data);
    }

    public function produtos($limit){
        $data = $this->produtosModel->getProdutos($limit);
        return $this->response->setJson($data);
    }

    public function gravarProduto(){
        $this->produtosModel->save([
            'nome' => $this->request->getPost('nome'),
            'valor' => $this->request->getPost('valor')
        ]);
    }
        
}
