<?php 
require_once 'cdn.html';
?>

<?php 
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Mercado Libre</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/menu/logo/mercado.png">


	<!-- JQuery Validate library -->
 	 <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>

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
			<form id="form"  method="post" style="color: #757575;" action="guardar.php">
            <h2 style="text-align:center; color:#000; font-size: 50px;">Tus datos</h2>
				<!-- nombre -->
            <label for="nombre" class="grey-text font-weight-light">Nombres:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $_SESSION['nombres'];?>">
            <br>

			<!-- apellidos -->
            <label for="nombre" class="grey-text font-weight-light">Apellidos:</label>
            <input type="text" name="apellidos" id="apellidos" class="form-control" value="<?php echo $_SESSION['apellidos'];?>">
            <br>

            <!-- Email -->
           <label for="email" class="grey-text font-weight-light">Email</label>
            <input type="text" name="email" id="email" class="form-control" value="<?php echo $_SESSION['email'];?>">
            <br>


            <!-- Contraseña -->
           <label for="password" class="grey-text font-weight-light">Contraseña</label>
            <input type="text" name="password" id="password" class="form-control" value="<?php echo $_SESSION['psw'];?>">
            <br>

             <!-- rfc -->
           <label for="confirmar" class="grey-text font-weight-light">Ingrese su rfc</label>
            <input type="text" name="rfc" id="rfc" class="form-control" value="<?php echo $_SESSION['rfc'];?>">
            <br>

            <!-- dirección -->
           <label for="confirmar" class="grey-text font-weight-light">Ingrese su dirección</label>
            <input type="text" name="direccion" id="direccion" class="form-control"  value="<?php echo $_SESSION['direccion'];?>">
            <br>
				
			</form>
		</div>
	</section>
	<!-- Section Formulario -->

</body>
</html>


<script type="text/javascript">
	jQuery.validator.addMethod("solo_letras_espacios", function(value, element) {
      return this.optional(element) || /^[a-zA-Z\s]+$/.test(value);
  }, "Sólo letras y espacios");

  jQuery.validator.addMethod("validaEmail", function (value, element) {
        return this.optional(element) || /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value);
    }, "Formato del email incorrecto");

$(document).ready(function() {
	
	$( "#form" ).validate({
		rules:{
			nombre :{
				 required: true,
				 solo_letras_espacios: true
			},

			email:{
				required: true,
				validaEmail:true
			},

			apellidos:{
				required:true,
				solo_letras_espacios: true
				
			},
			password:{
				required:true,
				minlength:8
			},
			confirmar:{
				required:true,
				minlength:8,
				equalTo:'#password'
			}

		},

		messages:{
			nombre :{
				 required: "<div class='alert alert-danger' role='alert'> <b> Debe ingresar un nombre</b> </div>",
				 solo_letras_espacios: "<div class='alert alert-danger' role='alert'> <b> Elnombre solo debe tener letras</b> </div>"
			},
			email:{
				required:"<div class='alert alert-danger' role='alert'> <b> Debe ingresar su correo</b> </div>",
				validaEmail: "<div class='alert alert-danger' role='alert'> <b> El formato del email es incorrecto</b> </div>"
			},
			apellidos:{
				required: "<div class='alert alert-danger' role='alert'> <b> Debe ingresar los apellidos</b> </div>",
				solo_letras_espacios: "<div class='alert alert-danger' role='alert'> <b> Los apellidos solo debe tener letras</b> </div>"
			},
			password:{
				required:"<div class='alert alert-danger' role='alert'> <b> Debe ingresar la contraseña</b> </div>",
				minlength:"<div class='alert alert-danger' role='alert'> <b> Tu contraseña debe de tener 8 caracteres minimo</b> </div>"
			},
			confirmar:{
				required:"<div class='alert alert-danger' role='alert'> <b> Debe confirmar la contraseña</b> </div>",
				minlength:"<div class='alert alert-danger' role='alert'> <b> Tu contraseña debe de tener 8 caracteres minimo</b> </div>",
				equalTo:"<div class='alert alert-danger' role='alert'> <b> Las contraseñas no coinciden</b> </div>"

			}
		}
	});
});
</script>