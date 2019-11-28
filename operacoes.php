<?php

    include "Conexao.php";

    function inserir($nome, $email){

        //Abrir a Conexão
        $conexao = getConnection();
        //Criar a String(Query) SQL
        $query = "INSERT INTO pessoas (nome, email) VALUES ('$nome','$email')";
        //Executar a String(Query) SQL no banco de dados
        if(mysqli_query($conexao,$query)){
            echo "Inserido com Sucesso! <br/>";
        }else{
            echo "Erro ao tentar inserir um pessoa! <br/>";
        }
        //Fechar a Conexão
        mysqli_close($conexao);
    }

    function listarTodos(){

        $pessoas = array();

        $conexao = getConnection();

        $query = "SELECT * FROM pessoas";

        $result = mysqli_query($conexao, $query);

        while($pessoa = mysqli_fetch_array($result)){
            $pessoas[] = $pessoa;
        }

        mysqli_close($conexao);

        return $pessoas;
    }

    function alterar($id, $nome, $email){
        
        $conexao = getConnection();

        $query = "UPDATE pessoas SET nome = '$nome', email = '$email' WHERE id = '$id'";

        if(mysqli_query($conexao, $query) == true){
            echo "Pessoa alterada com Sucesso!";
        }else{
            echo "Erro ao alterar um pessoa!";
        }

        mysqli_close($conexao);
    }

    function deletar($id){

        $conexao = getConnection();

        $query = "DELETE FROM pessoas WHERE id = '$id'";

        if(mysqli_query($conexao, $query) == true){
            echo "Pessoa deletada com Sucesso!";
        }else{
            echo "Erro ao tentar deletar um pessoa!";
        }

        mysqli_close($conexao);
    }

    function buscarPorId($id){

        $conexao = getConnection();

        $query = "SELECT * FROM pessoas WHERE id = '$id'";

        $result = mysqli_query($conexao, $query);

        $pessoa = mysqli_fetch_array($result);

        mysqli_close($conexao);

        return $pessoa;
    }   
?>
