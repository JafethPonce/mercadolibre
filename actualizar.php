<?php 
  session_start();
?>


<?php
require_once 'bd_conexion.php';

if (isset($_POST['actualizar'])) 
{  
  
    $rfc=$_POST['rfc'];
    $direccion=$_POST['direccion'];
    $nombre=$_POST['nombres'];
    $apellidos=$_POST['apellidos'];
    $password=$_POST['psw'];
    $email=$_POST['email'];
    
    $sql = $cnnPDO->prepare(
        'UPDATE registro SET rfc = :rfc, direccion = :direccion, nombres = :nombres, apellidos =:apellidos, psw =:psw WHERE email = :email'
    );
        
    $sql->bindParam(':rfc',$rfc);
    $sql->bindParam(':direccion',$direccion);
    $sql->bindParam(':nombres',$nombre);
    $sql->bindParam(':apellidos',$apellidos);
    $sql->bindParam(':psw',$password);
    $sql->bindParam(':email',$email);

    $sql->execute();
    unset($sql);
    unset($cnnPDO);

   
    


    header("location:actualizar.php");
}
?>

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
				<a href="index.php"><img src="images/menu/logo/mercado2.png" alt=""></a>
				</div>
				<div align="right">
					<a href="index.php">Regresar</a>
					<img src="images/menu/logo/informacion.png" width="4%">
				</div>
			</div>
		</nav>
	</section>
	<!-- Section NavBar -->

	<!-- Section Formulario -->
	<section>
		<div class="container" style="width:30%;margin-top:80px;">
			<form id="form"  method="post" style="color: #757575;">
				<!-- nombre -->
            <label for="nombre" class="grey-text font-weight-light">Ingrese sus nombres</label>
            <input type="text" name="nombres" id="nombres" class="form-control"  value="<?php echo $_SESSION['nombres'];?>">
            <br>

			<!-- apellidos -->
            <label for="nombre" class="grey-text font-weight-light">Ingrese su apellidos</label>
            <input type="text" name="apellidos" id="apellidos" class="form-control" value="<?php echo $_SESSION['apellidos'];?>">
            <br>

            <!-- Email -->
           <label for="email" class="grey-text font-weight-light">Ingresa tu email</label>
            <input type="text" name="email" id="email" class="form-control" value="<?php echo $_SESSION['email'];?>">
            <br>


            <!-- Contraseña -->
           <label for="password" class="grey-text font-weight-light">Ingresa tu contraseña</label>
            <input type="text" name="psw" id="psw" class="form-control" value="<?php echo $_SESSION['psw'];?>">
            <br>

            <!-- rfc -->
           <label for="confirmar" class="grey-text font-weight-light">Ingrese su rfc</label>
            <input type="text" name="rfc" id="rfc" class="form-control" value="<?php echo $_SESSION['rfc'];?>">
            <br>

            <!-- dirección -->
           <label for="confirmar" class="grey-text font-weight-light">Ingrese su dirección</label>
            <input type="text" name="direccion" id="direccion" class="form-control"  value="<?php echo $_SESSION['direccion'];?>">
            <br>

          
			
				<button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" name="actualizar" type="submit" id="actualizar">Actualizar</button>
				
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
            if ($("#nombres").val() == ""){
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