<?php
class DVD extends Produto{
    private $titulo;
    private $ano;

    public function setTitulo($newval){
        $this->titulo = $newval; 
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function setAno($newval){
        $this->ano = $newval; 
    }

    public function getAno(){
        return $this->ano;
    }
}

?>