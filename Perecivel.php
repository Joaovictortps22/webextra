 <?php
include("Leite.php");


 function estaVencido($dataValidade){
     if($dataValidade > 26/10/2019){
         return true;
     }
     else{
         return false;
     }    
}


echo $dataValidade;




?>
