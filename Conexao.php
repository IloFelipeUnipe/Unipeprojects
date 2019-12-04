<?php
  function getConnection(){
        
    $conexao = mysqli_connect("localhost","root","","produtosdb");
    if($conexao == true){
        echo 'conectado!';
    }else{
        echo 'nao conectado!';
    }
    return $conexao;
}
?>