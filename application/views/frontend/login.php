<div class = 'container pb-50'>
	<div class = 'row'>
		<div class="col-md-offset-4 col-md-4">
			<section class="login-form">
				<form method="post" action="#" role="login">
					<img src="<?php echo base_url('public/frontend/img/espol-logo.png'); ?>" class = 'img-responsive align-center mt-50'>
					<div class="alert alert-danger alert-dismissible mt-30" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						Los datos que ingresaste no son válidos
					</div>

					<p class = 'pt-10 pb-10'>Inicia sesión</p>
					<input type="email" name="email" placeholder="Correo ESPOL" required class="form-control input-lg" />

					<input type="password" class="form-control input-lg" id="password" placeholder="Contraseña" required="" />


					<button type="submit" name="go" class="btn chk-syllabus-btn align-center mt-20">Entrar</button>
					<div class = 'pt-10'>
						<a href="http://www.serviciosti.espol.edu.ec/ui/es/content/cta_elec/restablecer.aspx">¿Olvidaste la contraseña?</a>
					</div>

				</form>

			</section>  
		</div>
	</div>
</div>