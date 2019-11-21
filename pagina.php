<?php

    /*include 'Conexao.php';

    $conexao = getConnection();

    if($conexao == true){
        echo "Conectado!";
    }else{
        echo "Erro na Conexao!";
    }*/

    include 'operacoes.php';

    //inserir("Joana", "joana@email.com");

    $produtos = listarTodos();
    for($i = 0; $i < count($produtos); $i++){
        echo "Id: " . $produtos[$i]["id"] . "<br/>";
        echo "Nome: " . $produtos[$i]["nome"] . "<br/>";
        echo "Email: " . $produtos[$i]["email"] . "<br/>";
    }

    //alterar(1, "João das Flores", "joao@email.com")

    //deletar(1);

    //$pessoa = buscarPorId(3);

    //echo "Nome: " . $pessoa["nome"] . "<br/>";

?>