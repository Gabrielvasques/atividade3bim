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

    public function produtoModel($limit){
        $data = $this->produtoModel->getProdutos($limit);
        return $this->response->setJson($data);
    }

    public function gravarProduto(){
        $this->produtoModel->save([
            'nome' => $this->request->getPost('nome'),
            'valor' => $this->request->getPost('valor')
        ]);
    }
    
    public function deletar($id){
        $this->produtoModel->detete($id);
    }

    public function atualizar($id){
        $data = $this->request->getJSON();
        $this->produtoModel->update($id, $data);
    }
}