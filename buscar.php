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
        $artefato = buscarPorId($_POST["id"]);
        echo "Id: " . $artefato["id"] . "<br/>";
        echo "Nome: " . $artefato["nome"] . "<br/>";
        echo "Tipo: " . $artefato["tipo"] . "<br/>";
        echo "Atributos: " . $artefato["atributos"] . "<br/> <br/>";
    }
    
    
?>
    <h1>buscando um Artefato</h1>
    <form id="artefatosdb" action="buscar.php" method="POST" onsubmit="return validar()">
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
            if(form.tipo.value == false){
                alert("Informe uma quantidade")
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
