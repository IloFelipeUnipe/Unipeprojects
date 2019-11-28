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
        inserir($_POST["nome"],$_POST["email"]);
    }
?>
    <h1>Cadastrando no Banco</h1>
    <form id="p1cc" action="paginaValidacao.php" method="POST" onsubmit="return validar()">
        nome
        <input type="text" name="nome"><br><br>
        email
        <input type="text" name="email"><br><br>
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
            if(form.email.value == false){
                alert("Informe uma quantidade")
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
