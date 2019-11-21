<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aprendendo PHP</title>
</head>
<body>
<?php
    include 'operacoes.php';
    if ($_SERVER["REQUEST_METHOD"]== "POST"){
        inserir($_POST["nome"],$_POST["quantidade"],$_POST["preco"]);
    }

?>
    <h1>Cadastrando no Banco</h1>
    <form id="produtosdb" action="paginaValidacao.php" method="POST" onsubmit="return validar()">
        Nome:
        <input type="text" name="nome"/><br><br>
        quantidade:
        <input type="text" name="quantidade"><br><br>
        preço
        <input type="text" name="preco"><br><br>
        <button>Cadastrar</button>
    </form>

    


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>
        let form = document.querySelector("#produtosdb");

        function validar(){
            if(form.nome.value == false){
                Swal.fire(
                    'Error',
                    'Informe um Nome',
                    'error'
                )
                return false;
            }
            if(form.quantidade.value == false){
                alert("Informe uma quantidade")
                return false;
            }
            if(form.preco.value == false){
                alert("Informe um preco")
                return false;
            }


            return true;
        }
    </script>
</body>
</html>