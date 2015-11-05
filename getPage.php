<?php 
    
    $caminho = $_GET['caminho'];
    
    $source = fopen($caminho, "r");
    printf("%s", fread($source,filesize("$caminho")));
?>
