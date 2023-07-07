<!DOCTYPE html>
<html lang="en">
<head>
    <title>Olga Look</title>
    <link href="../img/icono.PNG" rel="icon" type="img/PNG"> 
    <meta charset="utf-8">
    <script src="https://kit.fontawesome.com/62ea397d3a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="cssIngreso/estingreso.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<body>

   <section class="wop">
        <form action="">
            <a href="index.blade.php" class="img"><img src="imgIngreso/icono.png"></a>
            <label>
                <i class="fas fa-solid fa-key"></i>
                <input type="text" id="correo" name="username" placeholder="E-MAIL">
            </label>
            <label>
                <i class="fas fa-solid fa-unlock"></i>
                <span class="ojoConElOjo">
                    <i class="fas fa-solid fa-eye-slash showhidepw"></i>
                </span>
                <input type="password" id="password" name="password" placeholder="Contraseña">
            </label>

            <a href="fallo500.blade.php" class="olvido">¿Olvidó su contraseña?</a>

                <a href="indexCuenta.blade.php" class="ingreso">INGRESO</a>

        <div class="pa">
            
            <p class="pa">Si no tiene cuenta por favor registrese</p>
            
            <a href="Registro.blade.php">Registrarse</a>
       
        </div>
        </form>
   </section>

   <section class="fondiu">

   </section>

   <script src="jsingreso/jsingreso.js"></script>

</body>
</html>