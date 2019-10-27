<?php

class Leite extends Produto{
    private $marca;
    private $volume;
    private $dataValidade;






    public function setMarca($newval){
        $this->marca = $newval; 
    }

    public function getMarca(){
        return $this->marca;
    }
    public function setVolume($newval){
        $this->volume = $newval; 
    }

    public function getVolume(){
        return $this->volume;
    }
    public function setDataValidade($newval){
        $this->dataValidade = $newval; 
    }

    public function getDataValidade(){
        return $this->dataValidade;
    }


    public function __construct($nome, $idade, $sexo){
        $this->marca = $marca;
        $this->volume = $volume;
        $this->dataValidade = $dataValidade;
    }


    public function __toString(){
        $resultado =
        "Marca: " .$this->marca."<br>".
        "Volume: " .$this->volume."<br>".
        "Data de Validade: " .$this->dataValidade."<br>";

        return $resultado;
    }
}


?>