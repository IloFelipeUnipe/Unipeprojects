<?php
    include 'operacoes.php';
    $conexao = getConnection();
    if($conexao == true){
        echo "Conectado!";
    }else{
        echo "Erro na Conexao!";
    }
    $artefatos = listarTodos();
    for($i = 0; $i < count($artefatos); $i++){
    echo "Id: " . $artefatos[$i]["id"] . "<br/>";
    echo "Nome: " . $artefatos[$i]["nome"] . "<br/>";
    echo "Tipo: " . $artefatos[$i]["tipo"] . "<br/>";
    echo "Atributos: " . $artefatos[$i]["atributos"] . "<br/> <br/>";

}
    
?>
