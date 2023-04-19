<?php 


trait Name{
    private $nome;

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
        
}