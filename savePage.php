<?php 
    
    $caminho = $_GET['caminho'];
    $texto = $_GET['texto'];
    
    echo $caminho;
    echo $texto;
    
    $source = fopen($caminho, "w");
    fwrite($source, $texto);
    fclose($source);
?>
