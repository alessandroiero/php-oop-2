<?php
require_once __DIR__ . "/../Traits/Name.php";
class Categoria{

    use Name;
    private $icon;

    public function __construct($_nome, $_icon)
    {
        $this->nome = $_nome;
        $this->icon = $_icon;
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
     * @param  string $_icon
     * @return string
     */
    public function set_icon($_icon){
        $this->icon = $_icon;
    }
    
    public function get_categoria_info(){
        return "{$this->icon} {$this->nome}";
    }
}