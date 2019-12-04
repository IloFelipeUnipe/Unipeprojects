<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>buscando um item</title>
</head>
<body>
<?php
    include 'operacoes.php';
    if ($_SERVER["REQUEST_METHOD"]== "POST"){
        buscarPorId($_POST["id"]);
    }
    $produto = buscarPorId("id");
    $i = "id";
    echo "Id: " . $produto[$i]["id"] . "<br/>";
    echo "Nome: " . $produto[$i]["nome"] . "<br/>";
    echo "preco: " . $produto[$i]["preco"] . "<br/> <br/>";
    
?>
    <h1>buscando um item</h1>
    <form id="produtosdb" action="buscar.php" method="POST" onsubmit="return validar()">
        id
        <input type="text" name="id"><br><br>
        
        <button>buscar</button>
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