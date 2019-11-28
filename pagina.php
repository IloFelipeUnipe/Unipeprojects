
<?php

    include 'operacoes.php';

    $conexao = getConnection();

    if($conexao == true){
        echo "Conectado!";
    }else{
        echo "Erro na Conexao!";
    }


    $pessoas = listarTodos();
    for($i = 0; $i < count($pessoas); $i++){
        echo "Id: " . $pessoas[$i]["id"] . "<br/>";
        echo "Nome: " . $pessoas[$i]["nome"] . "<br/>";
        echo "Email: " . $pessoas[$i]["email"] . "<br/>";
    }

    alterar(1);
    
    deletar(2);

    $pessoas = buscarPorId(3);

    echo "Nome: " . $pessoas["nome"] . "<br/>";

?>
