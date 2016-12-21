<div class="container pt-70 pb-50">
	<h1 class = 'clr-light-blue'>Sumar dígitos</h1>
	<hr>
	<p>Por: Leonardo Kuffo</p>
	<div class="row mt-xs-20 mt-md-20 mt-lg-20 pb-50">
		<div id="exitoejercicio">
		</div>
		<!-- Tabs -->
		<ul class="nav nav-tabs" role="tablist" id = 'curso-tabs'>
			<li role="presentation" class="active"><a href="#problema" aria-controls="problema" role="tab" data-toggle="tab">Problema</a></li>
			<li role="presentation"><a href="#envios" aria-controls="envios" role="tab" data-toggle="tab">Envíos</a></li>
		</ul>
		<!-- Paneles -->
		<div class="tab-content mt-lg-20">
			<div role="tabpanel" class="tab-pane fade in active" id="problema">
				<h4><strong>Descripción</strong></h4>
				<p>Muestre por pantalla la suma de los dígitos de un número que ingrese previamente el usuario.</p>
				<h4><strong>Formato de entrada</strong></h4>
				<p>Ingrese uno numero de N cifras, por ejemplo: 8, 56, 678, 4567, 67894.</p>
				<h4><strong>Formato de salida</strong></h4>
				<p>El resultado de la suma sera un numero entero.</p>

				<h4><strong>Ejemplo de entrada</strong></h4>
				<div class="well well-sm">
					<p>46</p>
					<p>234</p>
				</div>
				<h4><strong>Ejemplo de salida</strong></h4>
				<div class="well well-sm">
					<p>4+6= 10</p>
					<p>2+3+4 = 9</p>
				</div>

				<h4><strong>Explicación</strong></h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ultrices ultrices urna ut dignissim. Integer justo orci, convallis id condimentum non, malesuada vel mauris. Maecenas vitae tortor libero. Aliquam vel nisl viverra, sodales justo sed, pretium elit. Pellentesque posuere hendrerit mauris, pharetra hendrerit purus ultricies nec. Nulla iaculis commodo pulvinar. Aenean varius efficitur aliquam. Curabitur fringilla, ex eget finibus aliquam, dolor tellus hendrerit magna, nec molestie justo lectus vel tellus. Pellentesque nec lectus eget lacus blandit laoreet. Pellentesque non sem eget enim imperdiet euismod. Aliquam eleifend massa id arcu accumsan vehicula.</p>

				<p>Vestibulum auctor lorem porttitor enim laoreet malesuada. Maecenas fringilla arcu sit amet felis convallis semper. Pellentesque et porta tortor. Donec non urna porttitor, consectetur dolor a, efficitur lectus. Maecenas facilisis aliquam justo, id faucibus odio. Sed dui lacus, blandit at magna eu, consequat sodales sapien. Phasellus eget ex eu tellus fermentum hendrerit.</p>
				<hr>

				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading"><span class="glyphicon glyphicon glyphicon-console"></span> Python IDE</div>

							<div class="panel-body" id="panelIde">
								<p><b class="ideliterales">1|  >>> _</b></p>
								<p><b  class="ideliterales">2|</b></p>
								<p><b  class="ideliterales">2|</b></p>
								<p><b  class="ideliterales">3|</b></p>
								<p><b  class="ideliterales">4|</b></p>
								<p><b  class="ideliterales">5|</b></p>
								<p><b  class="ideliterales">6|</b></p>
								<p><b  class="ideliterales">7|</b></p>
							</div>
						</div>
					</div>
				</div>

				<div class = 'row'>
					<div class = 'col-md-8'>
						<label class="control-label">Subir tu código como archivo</label>
						<input id="input-4" name="input4[]" type="file" multiple class="file-loading ">
						<script>
							$(document).on('ready', function() {
								$("#input-4").fileinput({showCaption: false});
							});
						</script>
					</div>
					<div class = 'col-md-2'>
						<a href="#" class = "btn common-btn">Probar código</a>
					</div>
					<div class = 'col-md-2'>
						<a href="#" class = "btn common-btn" onclick="mensajeDeExito();">Enviar código</a>
					</div>
				</div>

			</div>
			<div role="tabpanel" class="tab-pane fade" id="envios">
				<div class = 'well'>
					<div class = 'row pt-20 pb-20'>
						<div class = 'align-center'>
							No has realizado algún envío aun.
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
