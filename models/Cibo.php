<?php
require_once __DIR__ . "/Prodotto.php";


class Cibo extends Prodotto
{
    private $ingredienti;
    
    /**
     * set_ingredienti
     *
     * @param  string $_ingredienti
     * @return string
     */
    public function set_ingredienti($_ingredienti){
        $this->ingredienti= $_ingredienti;
    }
    
    /**
     * get_ingredienti
     *
     * @return string
     */
    public function get_ingredienti(){
        return $this->ingredienti;
    }
}