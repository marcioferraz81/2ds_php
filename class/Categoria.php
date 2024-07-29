<?php

class Categoria {

    private $url = 'https://dspi-7a6aa-default-rtdb.firebaseio.com/';
    private $jsonDados;

    public function getJsonDados() {
        return $this->jsonDados;
    }

    public function setJsonDados($jsonDados): void {
        $this->jsonDados = $jsonDados;
    }

    public function salvar() {
        $caminho = curl_init($this->url . 'categoria.json');

        curl_setopt($caminho, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($caminho, CURLOPT_POSTFIELDS, $this->jsonDados);
        curl_setopt($caminho, CURLOPT_RETURNTRANSFER, true);

        $resposta = curl_exec($caminho);
        curl_close($caminho);

        return $resposta;
    }

    public function listar() {
        $caminho = curl_init($this->url . 'categoria.json');

        curl_setopt($caminho, CURLOPT_RETURNTRANSFER, true);

        $resposta = curl_exec($caminho);
        curl_close($caminho);

        return $dados = json_decode($resposta, true);
    }

    public function excluir($id) {

        $node = 'categoria/' . $id;
        $caminho = curl_init($this->url . $node . '.json');

        curl_setopt($caminho, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($caminho, CURLOPT_RETURNTRANSFER, true);

        $resposta = curl_exec($caminho);
        curl_close($caminho);

        return $resposta;
    }

}
