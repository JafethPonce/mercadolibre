<?php 
  session_start();
 

    if (isset($_POST['finalizar'])) {
      require 'bd_conexion.php';

      $psw=$_POST['psw'];
      
      
      

     

      $sql=$cnnPDO->prepare('SELECT * from registro WHERE psw=:psw ');


      $sql->bindParam(':psw',$psw);
      $sql->execute();

      $count=$sql->rowCount();
      $campo = $sql->fetch();
     
      if ($count) 
      { 
        $_SESSION['nombres']=$campo['nombres'];
        $_SESSION['apellidos']=$campo['apellidos'];
        $_SESSION['email']=$campo['email'];
        $_SESSION['psw'] = $campo['psw'];  
		$_SESSION['rfc'] = $campo['rfc']; 
		$_SESSION['direccion'] = $campo['direccion'];

    
   
        header("location:index.php");
          
      }
      
         
    }
    ob_end_flush();
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


	<!-- JQuery Validate library -->
 	 <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>

</head>
<body>
	<!-- Section NavBar -->
	<section>
		<nav class="navbar fixed-top " style="background-color: #EFFF2B;">
			<div class="container-fluid">
				<div class="page-header" style="color: #EFFF2B;">
				<img src="images/menu/logo/mercado2.png" alt="">
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
		<div class="container" style="width:30%;margin-top:80px;">
			<form id="form"  method="post" style="color: #757575;">
				
            <!-- Email -->
           <label for="email" class="grey-text font-weight-light">Ingresa tu psw</label>
            <input type="password" name="psw" id="psw" class="form-control" style="border-radius: 30px;">
            <br>
			
				<button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" name="finalizar" type="submit" id="finalizar" style="border-radius: 30px;">Finalizar</button>
				¿No cuentas con una cuenta?<a href="valida.php">Registrate</a>
			</form>
		</div>
	</section>
	<!-- Section Formulario -->

</body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
        let formatoemail = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;

        $('#finalizar').click(function(){
            if ($("#psw").val() == ""){
         Swal.fire({
                  icon: 'error',
                  title: 'Dato Incorrecto!',
                  text: 'Debe de Ingrese su password.',
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





