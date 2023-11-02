<?php

class Mensagem{

        public $id_mensagem;
        public $nome;
        public $assunto;
        public $mensagem;

        public function __construct($id_mensagem = false)
        {
            if($id_mensagem){
                $this->id_mensagem = $id_mensagem;
                $this->carregar();
            }
        }

    public function listar(){

        $sql = "SELECT * FROM tb_mensagems";
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=canada', 'root', '');
      
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
        
    }

    public function carregar(){

        $sql = "SELECT * FROM tb_mensagems WHERE id_mensagem=" . $this->id_mensagems;
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=canada', 'root', '');

    // Execução da query e armazenamento do resultado em uma variável
    $resultado = $conexao->query($sql);
    // Recuperação da primeira linha do resultado como um array associativo
    $linha = $resultado->fetch();



        $this->nome = $linha['nome'];
        $this->email = $linha['email'];
        $this->assunto = $linha['assunto'];
        $this->mensagem = $linha['mensagem'];
        


    }    

}