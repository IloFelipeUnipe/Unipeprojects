<?php

    include "Conexao.php";

    function inserir($nome, $quantidade , $preco){

        //Abrir a Conexão
        $conexao = getConnection();
        //Criar a String(Query) SQL
        $query = "INSERT INTO produtos (nome , quantidade , preco) VALUES ('$nome','$quantidade','$preco')";
        //Executar a String(Query) SQL no banco de dados
        if(mysqli_query($conexao,$query)){
            echo "Inserido com Sucesso! <br/>";
        }else{
            echo "Erro ao tentar inserir um produtos! <br/>";
        }
        //Fechar a Conexão
        mysqli_close($conexao);
    }

    function listarTodos(){

        $produtos = array();

        $conexao = getConnection();

        $query = "SELECT * FROM produtos";

        $result = mysqli_query($conexao, $query);

        while($produtos = mysqli_fetch_array($result)){
            $produtos[] = $produtos;
        }

        mysqli_close($conexao);

        return $produtos;
    }

    function alterar($id, $nome, $email){
        
        $conexao = getConnection();

        $query = "UPDATE produtos SET nome = '$nome', email = '$email' WHERE id = '$id'";

        if(mysqli_query($conexao, $query) == true){
            echo "Pessoa alterada com Sucesso!";
        }else{
            echo "Erro ao alterar um pessoa!";
        }

        mysqli_close($conexao);
    }

    function deletar($id){

        $conexao = getConnection();

        $query = "DELETE FROM produtosdb WHERE id = '$id'";

        if(mysqli_query($conexao, $query) == true){
            echo "produtos deletada com Sucesso!";
        }else{
            echo "Erro ao tentar deletar um produtos!";
        }

        mysqli_close($conexao);
    }

    function buscarPorId($id){

        $conexao = getConnection();

        $query = "SELECT * FROM produtosdb WHERE id = '$id'";

        $result = mysqli_query($conexao, $query);

        $produtos = mysqli_fetch_array($result);

        mysqli_close($conexao);

        return $produtos;
    }   
?>