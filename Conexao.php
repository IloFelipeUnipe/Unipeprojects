<?php

    function getConnection(){

        $conexao = mysqli_connect("localhost","root","","produtosdb");
        if($conexao == true){
            echo 'conetado com sucesso';
        }else{
            echo 'nao conectado';
        }
        return $conexao;
    }

?>