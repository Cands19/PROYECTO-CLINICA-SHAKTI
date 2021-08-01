<!--PAGINA PRINCIPAL-->
<!DOCTYP html>
    <html>

    <head>
        <title>Clínica Shakti-Salud Familiar</title>
        <link rel="shortcut icon" href="../assets/images/loguis.png">
        <link rel="stylesheet" href="../assets/styles/pagina_principal.css">
    </head>

    <body>
        <!--LOGO DE CLINICA-->
        <div class="logo"><img src="../assets/images/bien.png"></div>

        <!--PARTE DEL NAVBAR Y BOTONES DE REDES SOCIALES -->
        <?php include('layout/menus.php')?>

        <!--imagen de fondo-->
        <div class="imagenfondo">
            <img src="../assets/images/fotosclinica/fondoprintrabajado.jpg" width="2025" height="1000">
            <br><br>
            <h1>MÉDICOS</h1>
            <br><br>

            <!--CONTENEDORES PRINCIPALES DE LOS DOCTORES-->
            <?php include('layout/contprindoct.php')?>
            <br><br><br><br><br>
            <!--PARTE DE CONTACTO 3 CAJITAS-->

            <contacto>
                <div class="cont1">
                    <div class="colum11">
                        <h1>Cita</h1>
                        <div class="row3">
                            <a href="http://wa.me/527223773631" style="clear: left; float: 
                        left; margin-bottom: 1em; margin-right:0em;" target="_blank"><img
                                    src="../assets/images/tefele.png" alt="Correo"></a>
                            <label>Cel:5551710577</label>
                        </div>
                    </div>
                </div>
                <div class="cont2">
                    <div class="colum12">
                        <h1>Escribenos</h1>
                        <div class="row4">
                            <a href="https://mail.google.com/mail/u/0/#inbox"><img src="../assets/images/correo.png"
                                    alt="Correo"></a>
                            <label>shakti@gmail.com</label>
                        </div>
                    </div>
                </div>
                <div class="cont3">
                    <div class="colum13">
                        <h1>Visitanos</h1>
                        <div class="row5">
                            <a href="https://goo.gl/maps/7NoHsnE9FPsMqhuR7"><img src="../assets/images/ubi.png"
                                    alt="Ubicación"></a>
                            <label>Av. Miguel Hidalgo Ote. 809, Barrio de San Bernardino, 50080 Toluca de Lerdo,
                                Méx.</label>
                        </div>
                    </div>
                </div>
            </contacto>
            <br><br><br><br>
            <marquee bgcolor="#006699" behavior="alternate" direction="right">
                <b>
                    <font color="#FFFFCC" size="20">UBICACIÓN DE LA CLÍNICA "SHAKTI"</font>
                </b>
            </marquee>
            <br><br><br><br>
            <div class="mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!4v1627144870559!6m8!1m7!1sa7fdu
               MHrufxzJ7p5sh7z5A!2m2!1d19.28976793558759!2d-99.66639621125667!3f186.9853956036092
               8!4f-0.694773386327384!5f0.4000000000000002" width="1750" height="850" style="border: 10px;;"
                    allowfullscreen="" loading="lazy">
                </iframe>
            </div>
            <br><br>
            <?php include('layout/formulario.php')?>
            <br>
            <?php include('layout/footer.php')?>
    </body>

    </html>