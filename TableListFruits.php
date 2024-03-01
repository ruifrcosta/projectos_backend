<?php

//Informações que devem ser apresentados na tabela
$frutas = array(
    array("Manga", 10.10, 22, "1kg","07-01-2024"),
    array("Laranja", 20.00, 10, "2kg","08-01-2024"),
    array("Abacate", 150.00, 5, "4kg","09-01-2024"),
    array("Uva", 150.00, 2, "1kg","10-01-20")
);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container">
        
        <div class="shadow-lg p-3 mb-5 bg-body rounded mt-2"><h2>Tabela de frutas</h2></div>
        <table class="table">
            <thead>
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Peso</th>
                    <th scope="col">Data de registo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($frutas as $i => $frutas){
                    echo "<tr claass='text-center'>";
                    echo "<th scope='row' class=''>".($i++)."</th>";
                    for ($i=0; $i < count($frutas); $i++){
                        echo "<td class='text-center'>".$frutas[$i]. "</td>";
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>