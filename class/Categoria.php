<?php

class Categoria {

    private $url = 'https://dspi-7a6aa-default-rtdb.firebaseio.com/';
    private $jsonDados;

    public function getJsonDados() {
        return $this->jsonDados;
    }

    public function setJsonDados($jsonDados) {
        $this->jsonDados = $jsonDados;
    }

    // Função para criar um novo registro
    public function criar() {
        $caminho = curl_init($this->url . 'categoria.json'); // Caminho para a coleção 'categoria'

        curl_setopt($caminho, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($caminho, CURLOPT_POST, true);
        curl_setopt($caminho, CURLOPT_POSTFIELDS, json_encode($this->getJsonDados()));

        $resposta = curl_exec($caminho);
        curl_close($caminho);

        return json_decode($resposta, true);
    }

    // Função para listar todos os registros
    public function listar() {
        $caminho = curl_init($this->url . 'categoria.json');

        curl_setopt($caminho, CURLOPT_RETURNTRANSFER, true);

        $resposta = curl_exec($caminho);
        curl_close($caminho);

        return json_decode($resposta, true);
    }

    // Função para buscar um único registro pelo ID
    public function buscar($id) {
        $caminho = curl_init($this->url . 'categoria/' . $id . '.json');
        curl_setopt($caminho, CURLOPT_RETURNTRANSFER, true);
        $resposta = curl_exec($caminho);
        curl_close($caminho);
        return json_decode($resposta, true);
    }

    // Função para atualizar um registro
    public function atualizar($id) {
        $caminho = curl_init($this->url . 'categoria/' . $id . '.json');
        curl_setopt($caminho, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($caminho, CURLOPT_CUSTOMREQUEST, 'PATCH');
        curl_setopt($caminho, CURLOPT_POSTFIELDS, json_encode($this->getJsonDados()));

        $resposta = curl_exec($caminho);
        curl_close($caminho);

        return json_decode($resposta, true);
    }

    // Função para deletar um registro
    public function deletar($id) {
        $caminho = curl_init($this->url . 'categoria/' . $id . '.json');

        curl_setopt($caminho, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($caminho, CURLOPT_CUSTOMREQUEST, 'DELETE');

        $resposta = curl_exec($caminho);
        curl_close($caminho);

        return json_decode($resposta, true);
    }

}
