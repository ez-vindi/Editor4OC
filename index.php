<?php
    header("Cache-Control: private, max-age=10800, pre-check=10800");
    header("Pragma: private");
    header("Expires: " . date(DATE_RFC822,strtotime("30 day")));
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Opencode Editor</title>
    
    <META HTTP-EQUIV="Pragma" CONTENT="private">
    <META HTTP-EQUIV="Cache-Control" CONTENT="private, max-age=5400, pre-check=5400">
    <META HTTP-EQUIV="Expires" CONTENT="<?php echo date(DATE_RFC822,strtotime("1 day")); ?>">
    
</head>
<body>
    
    <div id="container">
        <div id="treeview">
            
            <?php
                $dir = './';
                $files = scandir($dir);

                foreach ($files as $value) { 
                    
                    if(is_dir($value)){
                        echo '<b data-url="'.$value.'">'.$value.'</b><br>'; 
                    }else{
                        echo '<span data-url="'.$value.'">'.$value.'</span><br>';
                    }
                }
                
            ?>
            
        </div>
        <div id="editor">//Clique em um arquivo ao lado</div>
        <button class="save-button">Salvar</button>
    </div>
    
</body>
    
</html>
    <!-- CSS -->
    <link async rel="stylesheet" href="css/index.css">
    
    <!-- JavaSript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/ace/1.2.1/min/ace.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="js/index.js"></script>
