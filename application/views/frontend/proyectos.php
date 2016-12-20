<header id="proyectos-header" class="mt-xs-50 mt-md-50 mt-lg-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-offset-1 col-lg-10">
                <h1>Proyectos</h1>                       
            </div>
        </div>
    </div>
</header>
<section id="proyectos-body">
	<div class="container">
		<div class="row">
			<div id="proyectos-side-bar" class="col-lg-2 well side-bar">
				<ul class="nav" role="tablist">
					<li role="presentation" class="active"><a href="#new-proj" aria-controls="new-proj" role="tab" data-toggle="tab"><span class="daw-folder-upload"> </span>Nuevo Proyecto</a></li>
					<li role="presentation"><a id="up-proj-link" href="#up-proj" aria-controls="up-proj" role="tab" data-toggle="tab" onclick="loadProject()"><span class="daw-folder-plus"> </span>Proyectos Subidos</a></li>
				</ul>
			</div>
			<div class="col-lg-10">
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane fade in active" id="new-proj">
						<form>
							<div class="form-group">
								<label for="project-title">Título:</label>
							    <input class="form-control" type="text" placeholder="Ingresa un título..." id="project-title">
							</div>
							<div class="form-group">
							    <label for="project-description">Descripción:</label>
							    <textarea class="form-control" id="project-description" rows="3"></textarea>
						  	</div>
						  	<div class="form-group">
					  	  		<label for="project-date">Fecha de Entrega:</label>
					  	    	<input class="form-control" type="date" id="project-date">	
						  	</div>
						  	<div class="form-group">
						  		<label for="project-tags">Tags:</label>
				  		   		<input class="form-control" type="tags" placeholder="Añade algunos tags..." id="project-tags"/>
						  	</div>
						  	<div class="form-group">
						  	   <input type="file" class="form-control-file" id="project-file" aria-describedby="fileHelp">
						  	 </div>
						  	<button type="submit" class="btn btn-primary">Enviar</button>
						</form>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="up-proj">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>