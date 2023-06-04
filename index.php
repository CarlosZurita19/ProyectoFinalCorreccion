<?php include('db.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styleLogin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Iniciar Sesion</title>
</head>

<header>

</header>

<body>
    <!--PARTE PARA REGISTRARSE-->
    <div class="container-form sign-up">
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido a<p class="logo1">Pelis<span claass ="logo2">Media</span></p></h2>
                <p>Si ya tienes una cuenta por favor inicia sesion aqui</p>
                <button class="sign-up-btn">Iniciar Sesion</button>
            </div>
        </div>
        <form class="formulario" action="db.php" method="post">
            <h2 class="create-account">Crear una cuenta</h2>
            <div class="iconos">
                <div class="border-icon">
                    <i class='bx bxl-instagram'></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-linkedin' ></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-facebook-circle' ></i>
                </div>
            </div>
            <p class="cuenta-gratis">Crear una cuenta gratis</p>
            <input name="nameReg" type="text" placeholder="Nombre">
            <input name="emailReg" type="email" placeholder="Email">
            <input name="passwordReg" type="password" placeholder="Contraseña">
            <input name="buttonReg" type="button" value="Registrarse">
        </form>
    </div>

   <!--PARTE PARA LOGUEARSE--> 
    <div class="container-form sign-in">
        
        <form class="formulario" action="db.php" method="post">
            <h2 class="create-account">Iniciar Sesion</h2>
            <div class="iconos">
                <div class="border-icon">
                    <i class='bx bxl-instagram'></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-linkedin' ></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-facebook-circle' ></i>
                </div>
            </div>
            <p class="cuenta-gratis">¿Aun no tienes una cuenta?</p>
            <input name="emaiLog" type="email" placeholder="Email">
            <input name="passwordLog" type="password" placeholder="Contraseña">
            <input name="buttonLog" type="button" value="Iniciar Sesion">
        </form>
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido de nuevo</h2>
                <p>Si aun no tienes una cuenta por favor registrese aqui</p>
                <button class="sign-in-btn">Registrarse</button>
            </div>
        </div>
    </div>
    <script src="scriptLogin.js"></script>
  
</body>
<<<<<<< HEAD:index.php

</html>    
=======
</html>
>>>>>>> 14e89bc0fac0b312c2dae81d7a00f6c8f6479a13:indexLogin.html
