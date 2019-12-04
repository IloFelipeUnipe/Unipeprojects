<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Deletando um item</title>
</head>
<body>
<?php
    include 'operacoes.php';
    if ($_SERVER["REQUEST_METHOD"]== "POST"){
        deletar($_POST["id"]);
    }
    $produtos = listarTodos();
    for($i = 0; $i < count($produtos); $i++){
    echo "Id: " . $produtos[$i]["id"] . "<br/>";
    echo "Nome: " . $produtos[$i]["nome"] . "<br/>";
    echo "preco: " . $produtos[$i]["preco"] . "<br/> <br/>";
}

?>
    <h1>Deletando um item</h1>
    <form id="produtosdb" action="deletar.php" method="POST" onsubmit="return validar()">
        id
        <input type="text" name="id"><br><br>
        
        <button>deletar</button>
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