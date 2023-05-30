<!DOCTYPE html>
<html lang="en">
<head>
        <title>Olga Look</title>
        <link href="imagenes/icono.png" rel="icon" type="img/PNG"> 
        <meta charset="utf-8">
        <script src="https://kit.fontawesome.com/62ea397d3a.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="cssre/Restilo.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<body>

  <section class="sec_uno">
    <h1>POR FAVOR LLENE LOS SIGUIENTES CAMPOS 
      <br>
      PARA REGISTRAR SU CUENTA</h1>


    <form action="" class="formulario" id="formulario">
        <!-- Grupo: Correo Electronico -->
      <div class="formulario__grupo" id="grupo__correo">
				<label for="correo" class="formulario__label"></label>
				<div class="formulario__grupo-input">
				<i class="formulario__validacion-estado fas fa-times-circle"></i>
          		<i class="tama fas fa-solid fa-key"></i>
					<input type="email" class="tamaño formulario__input" name="correo" id="correo" placeholder="correo@correo.com">
				</div>
				<p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
			</div>

        <!-- Grupo Teléfono -->
			<div class="formulario__grupo" id="grupo__telefono">
				<label for="telefono" class="formulario__label"></label>
				<div class="formulario__grupo-input">
				<i class="formulario__validacion-estado fas fa-times-circle"></i>
          		<i class="tama fas fa-solid fa-phone"></i>
					<input type="text" class="tamaño formulario__input" name="telefono" id="telefono" placeholder="NUMERO DE TELEFONO">
				</div>
				<p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son 10 dígitos.</p>
			</div>


        <!-- Grupo Nacer -->
      <div class="formulario__grupo" id="grupo__nacer">
				<label for="nacer" class="formulario__label"><h3 class="tituloNacer">FECHA DE NACIMIENTO</h3></label>
				<div class="formulario__grupo-input">
          <i class="tama fas fa-solid fa-calendar"></i>
					<input type="date" class="tamaño formulario__input" name="nacer" id="nacer">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Complete su fecha de nacimiento</p>
			</div>

        <!-- Grupo Documento Elegir -->
      <div class="formulario__grupo" id="grupo__documento_elegir">
				<label for="elegir" class="formulario__label"></label>
				<div class="este formulario__grupo-ul">
          <div class="spoon">
            <i class="tama fas fa-solid fa-file-signature"></i>
            <span class="texts">TIPO DE DOCUMENTO<i class="fas fa-light fa-arrow-down"></i></span>
          </div>


					<ul class="opciones formulario__ul" name="documento_elegir" id="documento_elegir">
            <li class="opcion">
              <span class="opcion-text">C.C</span>

              </li>
              
            <li>------</li>
            <li class="opcion">
              <span class="opcion-text">T.I</span>

            </li>

            <li>------</li>
            <li class="opcion">
              <span class="opcion-text">
                Cedula De Extrangeria</span>

              </li>

          </ul>
				</div>
				<p class="formulario__input-error">Por favor elija una opción</p>
			</div>

      <script src="JSReg/registro.js"></script>

        <!-- Grupo NumeroDoc-->
			<div class="formulario__grupo" id="grupo__documento">
				<label for="documento" class="formulario__label"></label>
				<div class="formulario__grupo-input">
					<input type="text" class="arewop tamaño formulario__input" name="documento" id="documento" placeholder="NUMERO DEL DOCUMENTO">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El numero de documento solo puede contener numeros y el maximo son 20 dígitos.</p>
			</div>

        <!-- Grupo Tratar-->
			<div class="formulario__grupo" id="grupo__tratar">
				<label for="tratar" class="formulario__label"><h3 class="tituloTratar">CUENTANOS DE TUS TRATAMIETOS PASADOS</h3></label>
				<div class="formulario__grupo-input">
					<input type="text" class="granueve tamaño formulario__input" name="tratar" id="documento" placeholder="ESCRIBE AQUI TUS TRATAMIENTOS PASADOS">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Debes llenar esta sección</p>
			</div>

        <!-- Grupo: Contraseña -->
			<div class="formulario__grupo" id="grupo__password">
				<label for="password" class="formulario__label"></label>
				<div class="formulario__grupo-input">
				<i class="formulario__validacion-estado fas fa-times-circle"></i>
          		<i class="tama fas fa-solid fa-unlock"></i>
				<span class="ojoConElOjo">
                    <i class="fas fa-solid fa-eye-slash showhidepw"></i>
                </span>
					<input type="password" class="tamaño formulario__input" name="password" id="password" placeholder="Contraseña">
				</div>
				<p class="formulario__input-error">La contraseña tiene que tener de 4 a 12 dígitos.</p>
			</div>

        <!-- Grupo Terminos y Condiciones -->
			<div class="term formulario__grupo" id="grupo__terminos">
				<label class="formulario__label">
					<input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos">
					Acepto los Terminos y Condiciones
				</label>
			</div>

    </form>

  </section>

  <section class="sec_dos">

    <div class="comos">
      <a href="index.blade.php"><img src="imagenes/icono.png" ></a>

      <div>
        <img class="usu" src="imagenes/bx-user-circle.svg">
        <h1>Añada una imagen reconocible de usted</h1>
      </div>

      <form action="" class="formulario" id="formulario">


        <!-- Grupo Nombre -->
			<div class="formulario__grupo" id="grupo__nombre">
				<label for="nombre" class="formulario__label"></label>
				<div class="formulario__grupo-input">
					<input type="text" class="tamaño formulario__input" name="nombre" id="nombre" placeholder="Nombre Completo">
					<i class="formulario__validacion-estadodos fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El Nombre debe ser completo y no puede contener ni numeros ni caracteres especiales.</p>
			</div>


        <!-- Grupo Direccion -->
			<div class="formulario__grupo" id="grupo__direccion">
				<label for="Direccion" class="formulario__label"></label>
				<div class="formulario__grupo-input">
					<input type="text" class="tamaño formulario__input" name="direccion" id="Direccion" placeholder="Direccion Completa">
					<i class="formulario__validacion-estadodos fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Complete la direccion</p>
			</div>

	</form>

	<form action="" class="formulariobut" id="formulariobut">

		<div class="formulario__mensaje" id="formulario__mensaje">
				  <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
		  </div>
  
		
		  <div class="formulario__grupo formulario__grupo-btn-enviar">
			<p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente, 
				<br>
				vuelve al inicio para iniciar sesion</p>
			  <button type="submit" class="formulario__btn boton">REGISTRESE</button>
			
			</div>
  
		  </form>

	</div> 

  </section>

   <script src="JSReg/formulario.js"></script>
</body>
</html>