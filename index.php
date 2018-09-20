<!DOCTYPE html>
<!--Metemos las carpetas CSS y JS para que el servidor PHP pueda tener una hoja de estilos.
De la misma manera, en a carpeta js metemos el archivo jQuery para que la página tenga
estilos javascript.
Los scripts se ponen abajo y las hojas de estilo arriba para evitar fallos en la página.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>PRUEBA DE PHP CON BOOTSTRAP</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
        
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <button type="button" class="btn btn-primary" id="boton1">Primary</button>
                    <br>
                    <button type="button" class="btn btn-secondary" id="boton2">Secondary</button>
                </div>
                <div class="col-4">
                    <input id="username" name="usuario_nombre" type="text" placeholder="Usuario">
                    <input id="cajanombre" name="contraseña" type="password" placeholder="contraseña">
                </div>
                <div class="col-4"></div>
            </div>
        </div>
        
        <?php
        // put your code here
        
        ?>
    </body>
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <!--Lo que escribamos de jQuery tiene que ir después del script.
    -->
    <script>
        //Esta función es para saber si ha cargado la página. Se ejecuta cuando toda la página
        //se ha cargado correctamente, aunque todavía no se haya renderizado. Esto nos ayuda
        //si queremos ocultar o mostrar elementos.
        $(document).ready(function(){
            $('#cajanombre').hide();
        })
        
        $("#boton2").click(function(){
            $('#cajanombre').show(200); //el 200 es la velocidad que va a tardar en aplicarse.
        })
        
        //El dolar llama a jQuery, y entre paréntesis ponemos el elementos que vamos a afectar.
        //Para ello es más fácil definir un ID o clase para afectar a un elemento específico.
        //El .click es el desencadenante de la función. Entre paréntesis se define o bien la función,
        //o bien podemos tener la función escrita en otro sitio y la llamamos ahí.
        //En javascript no es obligatorio darle un nombre, aunque en este caso sólo se aplicaría
        //aquí, no podemos llamarla desde otro lugar.
        $('#boton1').click(function(){
            //Prueba de errores, el elemento sin ID no funcionaba.
            console.log("Aquí sí que llega");
            //En este caso no es un ID, por lo que no ponemos el hashtag-ID. Por eso llamamos
            //al elemento así.
            $('input[name=usuario_nombre]').val("Why you running?");
            //$('#username').val("Why you running?");
        })
    </script>
    
</html>
