<?php
    include "Conexao.php";
    function inserir($nome, $preco){
        //Abrir a Conexão
        $conexao = getConnection();
        //Criar a String(Query) SQL
        $query = "INSERT INTO produtos (nome, preco) VALUES ('$nome','$preco')";
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
        $produtos = array();
        $conexao = getConnection();
        $query = "SELECT * FROM produtos";
        $result = mysqli_query($conexao, $query);
        while($produto = mysqli_fetch_array($result)){
            $produtos[] = $produto;
        }
        mysqli_close($conexao);
        return $produtos;
    }
    function alterar($id, $nome, $preco){
        
        $conexao = getConnection();
        $query = "UPDATE produtos SET nome = '$nome', preco = '$preco' WHERE id = '$id'";
        if(mysqli_query($conexao, $query) == true){
            echo "Produto alterado com Sucesso!";
        }else{
            echo "Erro ao alterar um produto!";
        }
        mysqli_close($conexao);
    }
    function deletar($id){
        $conexao = getConnection();
        $query = "DELETE FROM produtos WHERE id = '$id'";
        if(mysqli_query($conexao, $query) == true){
            echo "item deletado com Sucesso!";
        }else{
            echo "Erro ao tentar deletar um item!";
        }
        mysqli_close($conexao);
    }
    
    function buscarPorId($id){
        $conexao = getConnection();
        $query = "SELECT * FROM produtos WHERE id = '$id'";
        $result = mysqli_query($conexao, $query);
        $produto = mysqli_fetch_array($result);
        mysqli_close($conexao);
        return $produto;
    }
?>