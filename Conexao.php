<?php

    function getConnection(){

        
        $conexao = mysqli_connect("localhost","root","","p1cc");

        if($conexao == true){
            echo 'conectado!';
        }else{
            echo 'nao conectado!';
        }

        return $conexao;

    }
?>
