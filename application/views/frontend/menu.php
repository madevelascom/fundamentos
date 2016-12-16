<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo site_url("frontend/index"); ?>">Brand</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active"><a href="<?php echo site_url("frontend/index"); ?>">Inicio <span class="sr-only">(current)</span></a></li>
				<li><a href="<?php echo site_url("frontend/semanas"); ?>">Curso</a></li>
				<li><a href="<?php echo site_url("frontend/semanas"); ?>">Semana a Semana</a></li>
				<li><a href="<?php echo site_url("frontend/ayudantias"); ?>">Ayudantías</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Cerrar sesión</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Made Velasco <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Ver Panel</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Inicia sesión<span class="caret"></span></a>
					<ul id="login-dp" class="dropdown-menu">
						<li>
							<div class="row">
								<div class="col-md-12">
									<form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
										<div class="form-group">
											<label class="sr-only" for="exampleInputEmail2">Dirección de correo</label>
											<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
										</div>
										<div class="form-group">
											<label class="sr-only" for="exampleInputPassword2">Contraseña</label>
											<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
											<div class="help-block text-right"><a href="">¿Olvidaste la contraseña?</a></div>
										</div>
										<div class="form-group">
											<button type="submit" class="btn btn-primary btn-block">Entrar</button>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox"> Mantenme conectado
											</label>
										</div>
									</form>
								</div>
							</div>
						</li>
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>