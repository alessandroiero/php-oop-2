<?php
require_once __DIR__ . "/../Traits/Name.php";
/**
 * Prodotto
 * 
 */
class Prodotto{

    use Name;
    private $image;
    private $prezzo;
    private $categoria;
    
    /**
     * __construct
     *
     * @param  string $_nome
     * @param  string $_image
     * @param  float $_prezzo
     * @param  mixed $categoria
     */
    function __construct( $_nome, $_image, $_prezzo, $categoria)
    {
        $this->nome = $_nome;
        $this->image = $_image;
        $this->prezzo = $_prezzo;
        $this->categoria = $categoria;
    }    
    /**
     * get_categoria
     *
     * @return string
     */
    public function get_categoria(){
        return $this->categoria;
    }    
    /**
     * set_categoria
     *
     * @param  string $_categoria
     * @return string
     */
    public function set_categoria($_categoria){
        $this->categoria = $_categoria;
    }    
    /**
     * get_prezzo
     *
     * @return float
     */
    public function get_prezzo(){
        return "{$this->prezzo} €";
    }    
    /**
     * set_prezzo
     *
     * @param  float $_prezzo
     * @return float
     */
    public function set_prezzo($_prezzo){

        if($_prezzo <=0){
            throw new Exception('Error: Prezzo inserito non valido');
        }
        $this->prezzo = $_prezzo;
    }    
    /**
     * get_image
     *
     * @return string
     */
    public function get_image(){
        return $this->image;
    }    
    /**
     * set_image
     *
     * @param  string $_image
     * @return string
     */
    public function set_image($_image){
        $this->image = $_image;
    }
    
}