<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Conecte-se ao seu banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "canada";

    
    // Crie uma conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifique a conexão
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }
   
    // Recupere e limpe os dados do formulário
    $resposta = filter_input(INPUT_POST, 'resposta', FILTER_SANITIZE_STRING);
      
    // Recupere o ID da mensagem da URL
  
        if(isset($_POST["id_mensagem"]))
        {
          $id_mensagem = $_POST["id_mensagem"];
        

        // Consulta SQL para inserir os dados na tabela usando declaração preparada
        $sql = "INSERT INTO tb_respostas (id_mensagem, resposta) VALUES (?, ?)";

        // Preparar a declaração SQL
        $stmt = $conn->prepare($sql);

        if ($stmt === false) {
            die("Erro na preparação da consulta: " . $conn->error);
        }

        // Vincular os parâmetros e executar a consulta
        $stmt->bind_param("is", $id_mensagem, $resposta);

        if ($stmt->execute() === true) {
             echo "Resposta arquivada ccom sucesso:";
        } else {
            echo "Erro ao inserir dados: " . $stmt->error;
        }

        // Fechar a declaração
        $stmt->close();
    } else {
        echo "ID da mensagem não encontrado na URL.";
    }

    // Fechar a conexão
    $conn->close();
}
?>
