<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            
        
<?php
session_start();

if (isset($_SESSION["atexto"])){
    $atexto=$_SESSION["atexto"];
    $row=count($atexto);
}

for($i=0;$i<$row;$i++){
    echo $atexto[$i]."<br>";   
}
?>
</div>
</body>
</html>