<?php
require_once __DIR__ . "/models/Prodotto.php";
require_once __DIR__ . "/models/Gioco.php";
require_once __DIR__ . "/models/Categoria.php";
require_once __DIR__ . "/models/Cibo.php";

// nuove istanze
$category_dog = new Categoria("dog",'<i class="fa-solid fa-dog"></i>');
$category_cat = new Categoria("cat",'<i class="fa-solid fa-cat"></i>');
$category_bird = new Categoria("bird",'<i class="fa-solid fa-crow"></i>');
$category_fish = new Categoria("fish",'<i class="fa-solid fa-fish"></i>');

// eccezione
try{
    $prodotto = new Prodotto("Guinzaglio", "https://images.unsplash.com/photo-1620954492246-f1f107f4ec89?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80", 15.99, $category_dog);
    $prodotto2 = new Prodotto("Osso di gomma", "https://images.unsplash.com/photo-1535294435445-d7249524ef2e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80", 15.99, $category_dog);
    $prodotto3 = new Cibo("Croccantini", "https://images.unsplash.com/photo-1676193866128-03a926df76ef?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80", 15.99, $category_dog);
    $prodotto4 = new Prodotto("Mangime Per Pesci", "https://images.unsplash.com/photo-1600781048302-ac9a3bc48bb2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80", 15.99, $category_fish);
    $prodotto5 = new Prodotto("Mangime Per Uccelli", "https://images.unsplash.com/photo-1591608971362-f08b2a75731a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80", 15.99, $category_bird);
    $prodotto3->set_ingredienti('pollo, cartone, manzo');
} catch (Exception $e){
    echo $e->getMessage();
}


$products = [
    $prodotto,
    $prodotto2,
    $prodotto3,
    $prodotto4,
    $prodotto5
];
// var_dump($products)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- /Font Awesome -->
    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- /Bootstrap -->
    <link rel="stylesheet" href="style.css">
    <title>Boolshop</title>
</head>

<body>
    <header class="container">    
        <h1>Boolshop</h1>
    </header>
    <main class="container">
        <div class="row">
            <?php foreach($products as $prodotto) : ?>
                <div class="col-12 col-md-6 col-lg-3 py-2">
                    <div class="card" style="width: 18rem;">
                        <img class='img-fluid' src="<?php echo $prodotto->get_image(); ?>" class="card-img-top" alt="<?php echo $prodotto->get_nome(); ?>">
                        <div class="card-body">
                            <h3 class="card-title text-danger"><?php echo $prodotto->get_nome();?></h3>
                            <h4><?php echo $prodotto-> get_categoria()->get_categoria_info();?></h4>
                            <p class="card-text">Prezzo: <?php echo $prodotto->get_prezzo();?></p>
                            <?php if(method_exists($prodotto, 'get_ingredienti')) : ?>
                            <p>Ingredienti: 
                                <?php echo $prodotto->get_ingredienti(); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
    <footer></footer>

</body>

</html>