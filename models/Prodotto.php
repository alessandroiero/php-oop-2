<?php
/**
 * Prodotto
 * 
 */
class Prodotto{
    private $nome;
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
    function __construct( $_nome, $_image, $_prezzo, Categoria $categoria)
    {
        $this->nome = $_nome;
        $this->image = $_image;
        $this->prezzo = $_prezzo;
        $this->categoria = $categoria;
    }    
    /**
     * Get Nome
     *
     * @return string
     */
    public function get_nome(){
        return $this->nome;
    }
        
    /**
     * set_nome
     *
     * @param  string $_nome
     * @return string
     */
    public function set_nome($_nome){
        $this->nome = $_nome;
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