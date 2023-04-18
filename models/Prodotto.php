<?php
class Prodotto{
    public $nome;
    public $image;
    public $prezzo;
    public $categoria;

    function __construct( $_nome, $_image, $_prezzo, Categoria $categoria)
    {
        $this->nome = $_nome;
        $this->image = $_image;
        $this->prezzo = $_prezzo;
        $this->categoria = $categoria;
    }

}