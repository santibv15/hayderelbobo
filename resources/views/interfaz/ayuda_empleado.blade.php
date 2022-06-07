<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Se le esta agregando un titulo a la vista-->
    <title>Ayuda Empleado</title>
    <!--Se esta vinculando con el css-->
    <link href="{{ asset('css/ayuda_empleado.css') }}" rel="stylesheet">
    <!--Se esta vinculando con una pagina externa-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--LINK PARA LOS ICONOS-->
    <script src="https://kit.fontawesome.com/c9a8477372.js" crossorigin="anonymous"></script>


</head>
<body>
    <!--Se crea un contenedor--> 
    <div class="capa"></div>
    <!--Se le agrega un texto al contenedor-->
    <div class="parrafo">
        <p>Hola empleado espero la información a continuacion te sirva de algo, de lo contrario consultar con los superiores.</p>
        <br>
        <p>En este sitio web tú trabajo es mirar los pedido que llegan en el transcurso del dia y aceptarlos enviando al repartidor a la direccion indicada por el cliente, muchas gracias por preferirnos.</p>
        <!--Se agrega un boton que me hara devolver a al apartado principal-->
        <form>
            <a href="../interfaz/empleado">
                <!--Se agrega texto al boton-->
                <button type="button" class="btn btn-danger">Volver</button></a>
        </form> 
    </div>


    
</body>
</html>