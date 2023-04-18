<?php
require_once __DIR__ . "/Prodotto.php";

class Gioco extends Prodotto {
    public $tipologia;
    
    /**
     * __construct
     *
     * @param  mixed $_nome
     * @param  mixed $_image
     * @param  mixed $_prezzo
     * @param  mixed $_tipologia
     * @return void
     */

    public function __construct($_nome, $_image, $_prezzo, $_tipologia)
    {   
        parent::__construct($_nome, $_image, $_prezzo, $_tipologia);
        $this->tipologia = $_tipologia;
    }
}