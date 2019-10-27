<?php
include ("Leite.php");

class Produto implements JsonSerializable{
    private $codigo;
    private $preco;

    public function jsonSerialize(){
        return [
            'codigo' => $this->codigo,
            'preco' => $this->preco,
        ];
    }

    public function setCodigo($newval){
        $this->codigo = $newval; 
    }

    public function getCodigo(){
        return $this->codigo;
    }

    public function setPreco($newval){
        $this->preco = $newval; 
    }

    public function getPreco(){
        return $this->preco;
    }


}

?>