<?php
class Categoria{
    public $specie;
    private $nome;
    private $icon;

    public function __construct($_nome, $_icon)
    {
        $this->nome = $_nome;
        $this->icon = $_icon;
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
     * Get icon
     *
     * @return string
     */
    public function get_icon(){
        return $this->icon;
    }
        
    /**
     * set_icon
     *
     * @param  string $_nome
     * @return string
     */
    public function set_icon($_icon){
        $this->icon = $_icon;
    }
    
    public function get_categoria_info(){
        return "{$this->icon} {$this->nome}";
    }
}