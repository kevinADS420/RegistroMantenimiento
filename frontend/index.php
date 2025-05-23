<!DOCTYPE html>
<html>
<head>
    <title>Registro de Mantenimiento UGCA</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body id="vanta-fondo">

    <?php include "./header.php"; ?> 

    <section class="containerHome">
        <div id="particles-js" class="continerRegistro">
        <h1>Bienvenido al Sistema de Mantenimiento UGC</h1>
            <div class="Logo">
                <img class="imgLogo" src="../images/Logo.webp" alt="">
            </div>
            <div class="container_button_Registro">
                <div class="Conaiter_inpust">
                   <input class="inputs" type="text" placeholder="Usuario">
                   <input class="inputs" type="text"  placeholder="Contraseña">
                </div>
                <div class="ContainerButton">
                   <button class="inicioSeccion">Iniciar sesion</button>
                   <button class="inicioSeccion"> <a href="../frontend/paginas/Registro.php"> Registrate </a></button>
                </div>
            </div>
        </div>
    </section>


    <script src="js/app.js"></script>
    <script src="js/Fondos/Fondoregistro.js"></script>
</body>
</html>
