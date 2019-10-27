<?php
include ("Leite.php");
include ("Produto.php");
include ("dvd");
include ("Perecivel");


$leite1 = new Leite("cemil", "1L", "25/10/2019");

echo __toString($leite1);

$leite1->__toString();


?>