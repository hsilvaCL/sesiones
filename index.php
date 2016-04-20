<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <body>
        <div>
            <form method="POST" action="agregar.php">
                <input name="texto" id="texto" type="text">
                <input type="button" value="Enviar" onclick="enviotexto()">
            </form>
            
            <br>
            <div id="resultado"></div>
            <a href="datos.php">Listado</a>
        </div>
        
         <script type="text/javascript">
            function enviotexto(){
                var texto = $("#texto").val();
                                
                 /*Uso de función para caracter especial*/
                $.ajax({
                    url:'AgregaAjax.php',
                    type:'POST',
                    data:"texto="+texto,
                    success:function(datos){
                       $("#resultado").html(datos);
                    }
                });
            }
          </script>
    </body>
</html>
