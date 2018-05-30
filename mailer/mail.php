<?php


$nombre   = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email    = $_POST['email'];
$telefono = $_POST['telefono'];
$comment  = $_POST['comment'];
$ponente  = $_POST['optionsRadios'];
//$tipoCurso= $_POST['tipoCurso'];

//$Archivo = $_POST['Archivo'];
//$Condiciones = $_POST['Condiciones'];


	
	
		require_once 'class.phpmailer.php';
		$mail = new PHPMailer ();
		//SMTP VALIDACION DEL CORREO ELECTRONICO		
		$mail->IsSMTP();
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 587;
		$mail->SMTPSecure= 'tls';
		$mail->SMTPAuth = true;
		
		$mail->Username = 'ti@cedros.edu.mx';
		$mail->Password = 'C3dr0sti';
		


		//Correo del que sale 
		$mail -> From = "ti@cedros.edu.mx";
		$mail -> FromName = "jose_rodriguez@cedros.edu.mx";
		//Correo al que llega
		$mail -> AddAddress("jose_rodriguez@cedros.edu.mx"); //Agregar el correo de la empresa que recibe la informacion
		$mail -> Subject = "Formulario de Contacto";
		
		//Se puede agregar codigo html y estilos para que sea un email agradable

		$body = "Nombres: " .$nombre."\n\n";
		$body .= "Apellidos: " .$apellido. "\n\n";
		$body .= "Email: " .$email."\n\n";
		$body .= "Telefono: " .$telefono."\n\n";
		//$body .="Titulo (taller ó ponencia): ".$tipoCurso."\n\n";
		$body .= "Mensaje: " .$comment."\n\n";	
		$body .= "Participante (Taller ó Ponencia): " .$ponente."\n\n";	
		$mail->Body = $body;
		
		 
    if ($mail->Send()){

    	//Alerta y confirmacion del usuario

    	echo "<script>alert('Formulario Enviado');</script>";
    			
    }
    else {
    	echo "<script>alert('Error al enviar el formulario');</script>";
	}


?>