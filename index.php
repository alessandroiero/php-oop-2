<?php
require_once __DIR__ . "/models/Prodotto.php";
require_once __DIR__ . "/models/Gioco.php";
require_once __DIR__ . "/models/Categoria.php";

$prova = new Prodotto("test", "test2", "test3", new Categoria("cane"));
var_dump($prova);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- /Bootstrap -->
    <title>Boolshop</title>
</head>

<body>
    <h1>Boolshop</h1>

    <header></header>
    <main></main>
    <footer></footer>

</body>

</html>