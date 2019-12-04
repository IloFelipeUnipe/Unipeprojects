<?php
    include "Conexao.php";
    function inserir($nome,$tipo, $atributos){
        //Abrir a Conexão
        $conexao = getConnection();
        //Criar a String(Query) SQL
        $query = "INSERT INTO artefatos (nome, tipo , atributos) VALUES ('$nome','$tipo' , '$atributos')";
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
        $artefatos = array();
        $conexao = getConnection();
        $query = "SELECT * FROM artefatos";
        $result = mysqli_query($conexao, $query);
        while($artefato = mysqli_fetch_array($result)){
            $artefatos[] = $artefato;
        }
        mysqli_close($conexao);
        return $artefatos;
    }
    function alterar($id, $nome, $tipo , $atributos){
        
        $conexao = getConnection();
        $query = "UPDATE artefatos SET nome = '$nome', tipo = '$tipo' , atributos = '$atributos' WHERE id = '$id'";
        if(mysqli_query($conexao, $query) == true){
            echo "artefato alterado com Sucesso!";
        }else{
            echo "Erro ao alterar um artefato!";
        }
        mysqli_close($conexao);
    }
    function deletar($id){
        $conexao = getConnection();
        $query = "DELETE FROM artefatos WHERE id = '$id'";
        if(mysqli_query($conexao, $query) == true){
            echo "item deletado com Sucesso!";
        }else{
            echo "Erro ao tentar deletar um item!";
        }
        mysqli_close($conexao);
    }
    
    function buscarPorId($id){
        $conexao = getConnection();
        $query = "SELECT * FROM artefatos WHERE id = '$id'";
        $result = mysqli_query($conexao, $query);
        $artefato = mysqli_fetch_array($result);
        mysqli_close($conexao);
        return $artefato;
    }
?>
