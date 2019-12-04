<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alterando um item</title>
</head>
<body>
<?php
    include 'operacoes.php';
    if ($_SERVER["REQUEST_METHOD"]== "POST"){
        alterar($_POST["id"],$_POST["nome"],$_POST["preco"]);
    }
    $produtos = listarTodos();
    for($i = 0; $i < count($produtos); $i++){
    echo "Id: " . $produtos[$i]["id"] . "<br/>";
    echo "Nome: " . $produtos[$i]["nome"] . "<br/>";
    echo "preco: " . $produtos[$i]["preco"] . "<br/> <br/>";
}

?>
    <h1>Alterando um item</h1>
    <form id="produtosdb" action="alterar.php" method="POST" onsubmit="return validar()">
        id
        <input type="text" name="id"><br><br>
        nome
        <input type="text" name="nome"><br><br>
        preco
        <input type="text" name="preco"><br><br>
        <button>alterar</button>
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
            if(form.preco.value == false){
                alert("Informe uma quantidade")
                return false;
            }
            return true;
        }
    </script>
</body>
</html>