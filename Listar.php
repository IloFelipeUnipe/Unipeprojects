<?php
    include 'operacoes.php';
    $conexao = getConnection();
    if($conexao == true){
        echo "Conectado!";
    }else{
        echo "Erro na Conexao!";
    }
    $produtos = listarTodos();
        for($i = 0; $i < count($produtos); $i++){
        echo "Id: " . $produtos[$i]["id"] . "<br/>";
        echo "Nome: " . $produtos[$i]["nome"] . "<br/>";
        echo "preco: " . $produtos[$i]["preco"] . "<br/> <br/>";
    }
    
?>