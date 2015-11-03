<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Opencode Editor</title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="css/index.css">
    
    <!-- JavaSript -->
    <script src="https://cdn.jsdelivr.net/ace/1.2.1/min/ace.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
    
    <div id="container">
        <div id="treeview">
            
            <?php
                $dir = './';
                $files = scandir($dir);
                
                foreach ($files as $value) { 
                    
                        if(is_dir($value)){
                            echo '<b>'.$value.'</b><br>'; 
                        }else{
                            echo $value.'<br>';
                        }
                }
                
            ?>
            
        </div>
        <div id="editor"><?php
            
            $source = fopen("js/index.js", "r");
            echo fread($source,filesize("js/index.js"));
            
        ?></div>
    </div>
    <script type="text/javascript" src="js/index.js"></script>
</body>
</html>