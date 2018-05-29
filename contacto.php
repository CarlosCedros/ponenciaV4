<!DOCTYPE html>
<html lang="en">
<?php include 'header.php' ?>
<!-- Intro Header -->
<header class="intro">
	<div class="intro-body">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h1 class="brand-heading">Contactanos</h1>
					<p class="intro-text">
						Queremos conocer tu interés
					</p>
					<a href="#contact" class="btn btn-circle page-scroll">
						<i class="fa fa-angle-double-down animated"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- Contact Section -->
<section id="contact">
	<div class="container content-section">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">			
				<form method="post" action="mailer/contact.php" id="contactform">
					<div class="form">
						<input type="text" name="name" placeholder="Nombre Completo *">
						<input type="text" name="apellido" placeholder="Apellidos *">
						<input type="email" name="email" placeholder="Dirección de correo electrónico *">
						<input type="text" name="phone" placeholder="Teléfono de contacto *">
						<fieldset class="form-group">
							<legend>Quiero :</legend>
							<div class="form-check">
								<label class="form-check-label">participar con un Taller / Ponencia
									<input type="radio" class="form-check-input" name="optionsRadios"  value="0"  id="hide">
									
								</label>

								<label class="form-check-label">participar asistiendo a un Taller / Ponencia
									<input type="radio" class="form-check-input" name="optionsRadios"  value="1" id="show" checked>
									
								</label>
							</div>							
						</fieldset>
						<div class="form-group" id="temas">
							<label for="exampleSelect1" >Título: Taller / Ponencia</label>
							<select class="form-control" id="tipoCurso">
								<option>^w^</option>
								<option>Espionaje Virtual</option>
								<option>La industria tecnológica</option>
								<option>La naturaleza avances empíricos en tecnología</option>
								<option>La televisión y la difusión de la tecnología</option>      
							</select>
						</div>
						<textarea name="comment" rows="7" placeholder="Motivo de su participación *"></textarea>
						<input type="submit" id="submit" class="clearfix btn" value="Enviar">
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- Footer -->
<?php include 'footer.php' ?>
<!-- Contact JavaScript -->

</body>
</html>