<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Deletando um Artefato</title>
</head>
<body>
<?php
    include 'operacoes.php';
    if ($_SERVER["REQUEST_METHOD"]== "POST"){
        deletar($_POST["id"]);
    }
    $artefatos = listarTodos();
    for($i = 0; $i < count($artefatos); $i++){
    echo "Id: " . $artefatos[$i]["id"] . "<br/>";
    echo "Nome: " . $artefatos[$i]["nome"] . "<br/>";
    echo "Tipo: " . $artefatos[$i]["tipo"] . "<br/>";
    echo "Atributos: " . $artefatos[$i]["atributos"] . "<br/> <br/>";

}

?>
    <h1>Deletando um Artefato</h1>
    <form id="artefatosdb" action="deletar.php" method="POST" onsubmit="return validar()">
        id
        <input type="text" name="id"><br><br>
        
        <button>deletar</button>
    </form>

    


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>
        let form = document.querySelector("#artefatosdb");
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
