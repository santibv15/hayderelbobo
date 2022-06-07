<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Carrito</title>
	<link href="{{ asset('css/carrito/normalize.css') }}" rel="stylesheet">
	<link href="{{ asset('css/carrito/skeleton.css') }}" rel="stylesheet">
	<link href="{{ asset('css/carrito/style.css') }}" rel="stylesheet">
	<link href="{{ asset('css/carrito/footer.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">



<body>

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="retorno">
					<li><a href="../interfaz/buscar"><i class="fas fa-undo-alt">Volver</i></a></li>
				</div>
				<div class="four columns">
					<h1>SEIH</h1>
				</div>
				<div class="two columns u-pull-right">
					<ul>
						<li class="submenu">
							<img src="../imagenes/carrito/cart.png">
							<div id="carrito">
								<p class="vacio">carrito</p>
								<table id="lista-carrito" class="u-full-width">
									<thead>
										<tr>
											<th>Imagen</th>
											<th>Productos</th>
											<th>Precio</th>
											<th>Cantidad</th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>
										
									</tbody>
								</table>
								<a href="#" id="vaciar-carrito" class="button u-full-width">vaciar carrito</a>
							</div>	
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>

	<div class="hero">
		
		<div class="container">
			<div class="row">
				<div class="six columns">
					<div class="contenido-hero">
						<h2>Realiza un pedido</h2>
						<p>Pedidos con hasta el 20% de Descuento</p>
						<form>
							<input class="u-full-width" type="text" placeholder="¿Que te gustaria comprar?" id="buscador">
							<input type="submit" class="submit-buscador">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="barra">	
		<div class="container">
			<div class="row">
				<div class="four columns icono icono1">
					<p><br>
					Explora los nuevos productos</p>
				</div>
				<div class="four columns icono icono2">
					<p>Expertos<br>
					Prueba las nuevas combinaciones</p>
				</div>
				<div class="four columns icono icono3">
					<p>Envio<br>
					Tu tercera entrega sale gratis </p>
				</div>
			</div>
		</div>
	</div>

	<div id="lista-catalogo" class="container">
		<h1 class="encabezado">Pedidos en linea</h1>
		<div class="row">
			<div class="four columns">
				<div class="card">
					<img src="../imagenes/carrito/tipoa1.jpg" class="u-full-width">
					<div class="info-card">
						<h4>Clase A Acero Inoxidable </h4>
						<p>Envio Gratis</p>
						<img src="../imagenes/carrito/estrellas.png">
						<p>$17.999<span class="u-pull-right">$240.000</span></p>
						<input type="hidden" class="precio" value="240000">
						<input type="number" class="cantidad" placeholder="cantidad" style="color:#000">
						<a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Agregar al carrito</a>
					</div>
				</div>
			</div>
			
			<div class="four columns">
				<div class="card">
					<img src="../imagenes/carrito/tipoa.jpg" class="u-full-width">
					<div class="info-card">
						<h4>Extintor</h4>
						<p>Envio Gratis</p>
						<img src="../imagenes/carrito/estrellas.png">
						<p>$50<span class="u-pull-right">$15</span></p>
						<input type="hidden" class="precio" value="15">
						<input type="number" class="cantidad" placeholder="cantidad" style="color:#000">
						<a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="2">Agregar al carrito</a>
					</div>
				</div>
			</div>
			<div class="four columns">
				<div class="card">
					<img src="../imagenes/carrito/pulver.jpg" class="u-full-width">
					<div class="info-card">
						<h4>Extintor</h4>
						<p>Envio Gratis</p>
						<img src="../imagenes/carrito/estrellas.png">
						<p>$40.000<span class="u-pull-right">330.000</span></p>
						<input type="hidden" class="precio" value="330000">
						<input type="number" class="cantidad" placeholder="cantidad" style="color:#000">
						<a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="3">Agregar al carrito</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="four columns">
				<div class="card">
					<img src="../imagenes/carrito/splund.jpg" class="u-full-width">
					<div class="info-card">
						<h4>Extintor  Sencillo Oro puro</h4>
						<p>Envio Gratis</p>
						<img src="../imagenes/carrito/estrellas.png">
						<p>$310.000<span class="u-pull-right">3.400.000</span></p>
						<input type="hidden" class="precio" value="3400000">
						<input type="number" class="cantidad" placeholder="cantidad" style="color:#000">
						<a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="4">Agregar al carrito</a>
					</div>
				</div>
			</div>
			<div class="four columns">
				<div class="card">
					<img src="../imagenes/carrito/extin3.jpg" class="u-full-width">
					<div class="info-card">
						<h4>Extintor</h4>
						<p>Envio Gratis</p>
						<img src="../imagenes/carrito/estrellas.png">
						<p>$70.000<span class="u-pull-right">$249.990</span></p>
						<input type="hidden" class="precio" value="249990">
						<input type="number" class="cantidad" placeholder="cantidad" style="color:#000">
						<a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="5">Agregar al carrito</a>
					</div>
				</div>
			</div>
			<div class="four columns">
				<div class="card">
					<img src="../imagenes/carrito/safe.jpg" class="u-full-width">
					<div class="info-card">
						<h4>Extintor</h4>
						<p>Envio Gratis</p>
						<img src="../imagenes/carrito/estrellas.png">
						<p>$35.990<span class="u-pull-right">$445.990</span></p>
						<input type="hidden" class="precio" value="445990">
						<input type="number" class="cantidad" placeholder="cantidad" style="color:#000">
						<a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="6">Agregar al carrito</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="four columns">
				<div class="card">
					<img src="../imagenes/carrito/extin12.png" class="u-full-width">
					<div class="info-card">
						<h4>Extintor</h4>
						<p>Envio Gratis</p>
						<img src="../imagenes/carrito/estrellas.png">
						<p>$35.999<span class="u-pull-right">$300.000</span></p>
						<input type="hidden" class="precio" value="300000">
						<input type="number" class="cantidad" placeholder="cantidad" style="color:#000">
						<a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="7">Agregar al carrito</a>
					</div>
				</div>
			</div>
			<div class="four columns">
				<div class="card">
					<img src="../imagenes/carrito/extin6.jpg" class="u-full-width">
					<div class="info-card">
						<h4>Extintor</h4>
						<p>Envio Gratis</p>
						<img src="../imagenes/carrito/estrellas.png">
						<p>$50.000<span class="u-pull-right">$260.000</span></p>
						<input type="hidden" class="precio" value="260000">
						<input type="number" class="cantidad" placeholder="cantidad" style="color:#000">
						<a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="8">Agregar al carrito</a>
					</div>
				</div>
			</div>
			<div class="four columns">
				<div class="card">
					<img src="../imagenes/carrito/extin2.jpg" class="u-full-width">
					<div class="info-card">
						<h4>Extintor</h4>
						<p>Envio Gratis</p>
						<img src="../imagenes/carrito/estrellas.png">
						<p>$25.000<span class="u-pull-right">$150.000</span></p>
						<input type="hidden" class="precio" value="150000">
						<input type="number" class="cantidad" placeholder="cantidad" style="color:#000">
						<a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="9">Agregar al carrito</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="four columns">
				<div class="card">
					<img src="../imagenes/carrito/extin3.jpg" class="u-full-width">
					<div class="info-card">
						<h4>Extintor</h4>
						<p>Envio Gratis</p>
						<img src="../imagenes/carrito/estrellas.png">
						<p>$67.990<span class="u-pull-right">$230.000</span></p>
						<input type="hidden" class="precio" value="230000">
						<input type="number" class="cantidad" placeholder="cantidad" style="color:#000">
						<a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="10">Agregar al carrito</a>
					</div>
				</div>
			</div>
			<div class="four columns">
				<div class="card">
					<img src="../imagenes/carrito/extin7.jpg" class="u-full-width">
					<div class="info-card">
						<h4>Extintor</h4>
						<p>Envio Gratis</p>
						<img src="../imagenes/carrito/estrellas.png">
						<p>$39.990<span class="u-pull-right">$350.000</span></p>
						<input type="hidden" class="precio" value="350000">
						<input type="number" class="cantidad" placeholder="cantidad" style="color:#000">
						<a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="11">Agregar al carrito</a>
					</div>
				</div>
			</div>
			<div class="four columns">
				<div class="card">
					<img src="../imagenes/carrito/extin10.jpg" class="u-full-width">
					<div class="info-card">
						<h4>Extintor</h4>
						<p>Envio Gratis</p>
						<img src="../imagenes/carrito/estrellas.png">
						<p>$75.000<span class="u-pull-right">$280.000</span></p>
						<input type="hidden" class="precio" value="280000">
						<input type="number" class="cantidad" placeholder="cantidad" style="color:#000">
						<a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="12">Agregar al carrito</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- INICIO FOOTHER -->
<footer>

    <div class="container__footer">
        <div class="box__footer">
            <div class="logo">
                <img src="../imagenes/carrito/extintorlogo.png" alt="">
            </div>
            <div class="terms">
                <p>Lla mejor empresa líder en el rubro de seguridad contra incendio para el beneficio de nuestros clientes y personal, ejecutando nuestro trabajo con calidad, honestidad y responsabilidad mediante la mejora continua.</p>
            </div>
        </div>


        <!-- CAJAS -->
        <div class="box__footer">
            <h2>Soluciones</h2>
            <a href="https://www.google.com">App Desarrollo</a>
            <a href="#">App Marketing</a>
            <a href="#">IOS Desarrollo</a>
            <a href="#">Android Desarrollo</a>
        </div>

        <div class="box__footer">
            <h2>Compañia</h2>
            <a href="#">Acerca de</a>
            <a href="#">Trabajos</a>
            <a href="#">Procesos</a>
            <a href="#">Servicios</a>              
        </div>

        <div class="box__footer">
            <h2>Redes Sociales</h2>
            <a href="#"> <i class="fab fa-facebook-square"></i> Facebook</a>
            <a href="#"><i class="fab fa-twitter-square"></i> Twitter</a>
            <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
            <a href="#"><i class="fab fa-instagram-square"></i> Instagram</a>
        </div>

    </div>

    <div class="box__copyright">
        <hr>
        <p>Todos los derechos reservados © 2021 <b>SEIH</b></p>
    </div>
</footer>
  


<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

</body>
</html>