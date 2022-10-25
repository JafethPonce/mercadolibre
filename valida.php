<?php 
require_once 'cdn.html';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Mercado Libre</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/menu/logo/mercado.png">
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


	

</head>
<body>
	<!-- Section NavBar -->
	<section>
		<nav class="navbar fixed-top " style="background-color: #EFFF2B;">
			<div class="container-fluid">
				<div class="page-header" style="color: #EFFF2B;">
				<a href="index.html"><img src="images/menu/logo/mercado2.png" alt=""></a>
				</div>
				<div align="right">
					<a href="index.html">Regresar</a>
					<img src="images/menu/logo/informacion.png" width="4%">
				</div>
			</div>
		</nav>
	</section>
	<!-- Section NavBar -->

	<!-- Section Formulario -->
	<section>
		<div class="container" style="width:30%;margin-top:90px;">
			<form id="form"  method="post" style="color: #757575;" action="guardar.php">
			
            <label for="nombre" class="grey-text font-weight-light" style="text-decoration-color: black;">Nombres:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" style="border-radius: 30px;" >
            <br>

		
            <label for="nombre" class="grey-text font-weight-light">Apellidos:</label>
            <input type="text" name="apellidos" id="apellidos" class="form-control" style="border-radius: 30px; ">
            <br>

            <!-- Email -->
           <label for="email" class="grey-text font-weight-light">Email:</label>
            <input type="text" name="email" id="email" class="form-control" style="border-radius: 30px; ">
            <br>


            <!-- Contraseña -->
           <label for="password" class="grey-text font-weight-light">Contraseña</label>
            <input type="password" name="password" id="password" class="form-control" style="border-radius: 30px; ">
            <br>

            <!-- Confirmar Contraseña -->
           <label for="confirmar" class="grey-text font-weight-light">Confirmar contraseña</label>
            <input type="password" name="confirmar" id="confirmar" class="form-control" style="border-radius: 30px; ">
            <br>
			
				<button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" name="enviar" type="submit" id="enviar" style="border-radius: 30px;">Registrar</button>
				¿Ya cuentas con cuenta?<a href="login.php">Inicia sesión</a>
			</form>
		</div>
	</section>
	<!-- Section Formulario -->

</body>
</html>


<script type="text/javascript">
    $(document).ready(function(){
        let formatoemail = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;

        $('#enviar').click(function(){
            if ($("#nombre").val() == ""){
         Swal.fire({
                  icon: 'error',
                  title: 'Dato Incorrecto!',
                  text: 'Debe de Ingrese su Nombre..',
                  //position: 'top-end',
                  showConfirmButton: false,
                  confirmButtonText: 'Aceptar',
                  timerProgressBar: true,
                timer: 2500
                  
                //}).then(function(){
                    //window.location="sweetalert.php"
                });

        return false;
      }
	  else if ($("#apellidos").val() == "" ){
        Swal.fire({
                  icon: 'error',
                  title: 'Error!',
                  text: 'Ingrese sus apellidos..',
                  //position: 'top-end',
                  showConfirmButton: false,
                  confirmButtonText: 'Aceptar',
                  timerProgressBar: true,
                timer: 2500
                  
                //}).then(function(){
                    //window.location="sweetalert.php"
                });

        return false;
      }
      else if ($("#email").val() == "" ){
        Swal.fire({
                  icon: 'error',
                  title: 'Error!',
                  text: 'Debe de Ingrese su correo..',
                  //position: 'top-end',
                  showConfirmButton: false,
                  confirmButtonText: 'Aceptar',
                  timerProgressBar: true,
                timer: 2500
                  
                //}).then(function(){
                    //window.location="sweetalert.php"
                });

        return false;
      }

      else if (!formatoemail.test($("#email").val())){
        Swal.fire({
                  icon: 'error',
                  title: 'Error!', 
                  text: 'Debe ingresar el formato correcto..',
                  //position: 'top-end',
                  showConfirmButton: false,
                  confirmButtonText: 'Aceptar',
                  timerProgressBar: true,
                timer: 2500
                  
                //}).then(function(){
                    //window.location="sweetalert.php"
                });

        return false;
      }
      else if ($("#celular").val() == "" ){
        Swal.fire({
                  icon: 'error',
                  title: 'Error!', 
                  text: 'Debe ingresar el celular.',
                  //position: 'top-end',
                  showConfirmButton: false,
                  confirmButtonText: 'Aceptar',
                  timerProgressBar: true,
                timer: 2500
                  
                //}).then(function(){
                    //window.location="sweetalert.php"
                });

        return false;
      }

      else if ($("#password").val() == "" ){
        Swal.fire({
                  icon: 'error',
                  title: 'Error!', 
                  text: 'Ingrese su password.',
                  //position: 'top-end',
                  showConfirmButton: false,
                  confirmButtonText: 'Aceptar',
                  timerProgressBar: true,
                timer: 2500
                  
                //}).then(function(){
                    //window.location="sweetalert.php"
                });

        return false;
      }

      else if ($("#confirmar").val() == "" ){
        Swal.fire({
                  icon: 'error',
                  title: 'Error!', 
                  text: 'Debe confirmar su password',
                  //position: 'top-end',
                  showConfirmButton: false,
                  confirmButtonText: 'Aceptar',
                  timerProgressBar: true,
                timer: 2500
                  
                //}).then(function(){
                    //window.location="sweetalert.php"
                });

        return false;
      }

      else if ($("#confirmar").val() !== $("#password").val()){
        Swal.fire({
                  icon: 'error',
                  title: 'Error!', 
                  text: 'No coinciden las contraseñas',
                  //position: 'top-end',
                  showConfirmButton: false,
                  confirmButtonText: 'Aceptar',
                  timerProgressBar: true,
                timer: 2500
                  
                //}).then(function(){
                    //window.location="sweetalert.php"
                });

        return false;
      }
      
     
        });

    });
</script>