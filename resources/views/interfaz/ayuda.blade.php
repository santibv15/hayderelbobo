<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Se le esta agregando un titulo a la vista-->
    <title>ayuda</title>
    <!--Se esta vinculando con el css-->
    <link href="{{ asset('css/ayuda.css') }}" rel="stylesheet">
    <!--Se esta vinculando con una pagina externa-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--LINK PARA LOS ICONOS-->
    <script src="https://kit.fontawesome.com/c9a8477372.js" crossorigin="anonymous"></script>


</head>
<body> 
    <!--Se crea un contenedor-->
    <div class="capa"></div>
    <!--Se le agrega un texto y imagenes al contenedor-->
    <div class="parrafo">
        <img src="imagenes/imagen-interna.jpg" alt="">
        <p>En este sitio wed podrás solicitar tú extintor o recarga de extintor de manera inmediata.</p>
        <br>
        <p>En EXTINALEX nos dedicamos a ayudar a recargar y suministrar tus extintores de manera fiable, la cual te aseguramos no arrepentirte. Trabajamos para dar seguridad y tranquilidad a nuestros clientes.</p>
        <!--Se agrega un boton que me hara devolver a al apartado principal-->
        <form>
            <a href="../interfaz/pagina_principal">
                <!--Se le agrega un texto al boton-->
                <button type="button" class="btn btn-danger">Volver</button></a>
        </form> 
    </div>


    
</body>
</html>