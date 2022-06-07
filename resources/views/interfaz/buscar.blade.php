<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar</title>

    <link href="{{ asset('css/buscar.css') }}" rel="stylesheet">

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

</head> 
<body>
    
        <main>
            <form>
                <a href="../interfaz/pagina_principal">
                    <button type="button" class="btn btn-danger">Volver</button></a>
            </form> 
        <div class="container__card">

            <div class="card__father">
                <div class="card">
                    <div class="card__front" style="background-image: url(../imagenes/images/extinverde.jpg);">
                        <div class="bg"></div>
                        <div class="body__card_front">
                            <h1>MATERIALES SÓLIDOS</h1>
                        </div>
                    </div>
                    <div class="card__back">
                        <div class="body__card_back">
                            <h1 class="colorl">Clase A</h1>
                            <p>Son los fuegos que surgen en materiales combustibles oridinarios o materiales fibrosos, cuya combustion presenta la formacion de brasas com: madera, papel, telas, gomas y plasticos similares.  </p>
                            <form method="get" action="../interfaz/carrito">
                            <input type="submit" value="Carrito 🛒 " >
                            </form> 
                        </div>
                    </div>
                </div>
            </div>

            <div class="card__father">
                <div class="card">
                    <div class="card__front" style="background-image: url(../imagenes/images/extinrojo.jpg);">
                        <div class="bg"></div>
                        <div class="body__card_front">
                            <h1>LIQUIDOS COMBUSTIBLE INFLAMABLE</h1>
                        </div>
                    </div>
                    <div class="card__back1">
                        <div class="body__card_back">
                            <h1 class="colorl">Clase B</h1>
                            <p>Son los fuegos que surgen en materiales combustibes derivados de los hidrocarburos, liquidos y gases inflamables como: aceites, grasas, gasolina, pinturas, ceras, hidrogeno etc.</p>
                            <form method="get" action="../interfaz/carrito">
                                <input type="submit" value="Carrito 🛒 " >
                            </form> 
                        </div>
                    </div>
                </div>
            </div>

            <div class="card__father">
                <div class="card">
                    <div class="card__front" style="background-image: url(../imagenes/images/extinazul.jpg);">
                        <div class="bg"></div>
                        <div class="body__card_front">
                            <h1>MATERIAL ELÉCTRICO Y ELECTRÓNICO</h1>
                        </div>
                    </div>
                    <div class="card__back2">
                        <div class="body__card_back">
                            <h1 class="colorl">Clase C</h1>
                            <p>Son fuegos que surgen de equipos eléctricos energizados como: interruptores, caja de fusibles, aparatos electrodomésticos etc. </p>
                            <form method="get" action="../interfaz/carrito">
                                <input type="submit" value="Carrito 🛒 " >
                            </form> 
                        </div>
                    </div>
                </div>
            </div>

            <div class="card__father">
                <div class="card">
                    <div class="card__front" style="background-image: url(../imagenes/images/extinamarillo.jpg);">
                        <div class="bg"></div>
                        <div class="body__card_front">
                            <h1>METAL COMBUSTIBLE</h1>
                        </div>
                    </div>
                    <div class="card__back3">
                        <div class="body__card_back">
                            <h1 class="colorl">Clase D</h1>
                            <p>Son los tipos de incendio que se decaran en los metales combustibles tales como: magnesio, titanio, sodio, potasio etc. A este tipo de incendios no le debe arrojar agua ya que puede provocar explosiones</p>
                            <form method="get" action="../interfaz/carrito">
                                <input type="submit" value="Carrito 🛒 " >
                            </form> 
                        </div>
                    </div>
                </div>
            </div>

            <div class="card__father">
                <div class="card">
                    <div class="card__front" style="background-image: url(../imagenes/images/extinplata.jpg);">
                        <div class="bg"></div>
                        <div class="body__card_front">
                            <h1>GRASAS Y ACEITES VEGETALES </h1>
                        </div>
                    </div>
                    <div class="card__back4">
                        <div class="body__card_back">
                            <h1 class="colorl">Clase K</h1>
                            <p>Los extintores a base de acetato de potasio para fuegos de clase K fueron creados para extinguir fuegos de aceites vegetales en freidoras de cocinas comerciales o incendio de grasas en acopios industriales o en restaurantes o cocinas industriales. </p>
                            <form method="get" action="../interfaz/carrito">
                                <input type="submit" value="Carrito 🛒 " >
                            </form> 
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </main>

    <script src="js/script.js"></script>
</body>
</html>