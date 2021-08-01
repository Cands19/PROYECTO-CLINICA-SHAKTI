 <!--PARTE DEL FORMULARIO-->
 <div class="gif"> <img src="../assets/images/fotosclinica/clinic.gif" width="800px" height="960px"> </div>
 <div class="main">
     <!--MAIN-container-->
     <div class="formulario">
         <h2 style="color: rgb(245, 239, 239);">AGENDA TU CITA</h2>
         <form action="mail.php" enctype="multipart/form-data" method="post" name="formulario_html5" autocomplete="off">
             <label for="nombre">Nombre</label></br>
             <input type="text" name="nombre" id="nombre" class="cajas"></br>

             <label for="nombre">Apellidos</label></br>
             <input type="text" name="nombre" id="nombre" class="cajas"></br>

             <label for="email">Correo electronico</label></br>
             <input type="email" name="email" id="email" class="cajas"></br>

             <label for="web-site">Web Site</label></br>
             <input type="url" name="web-site" id="web-site" class="cajas"> </br>

             <label for="telefono">Teléfono</label></br>
             <input type="number" name="telefono" id="telefono" class="cajas"></br>

             <label for="llegada">Fecha y hora de cita</label></br>
             <input type="datetime-local" id="llegada" name="fecha-hora-llegada" class="cajas">
             </br>


             <input type="submit" value="enviar" name="submit" class="btn">

         </form>
     </div>
 </div>
 <br><br><br><br>