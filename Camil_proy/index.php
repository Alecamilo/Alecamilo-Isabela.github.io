<?php
if(isset($_GET['status'])) {
  if ($_GET['status'] == 1) {
      echo '<script>alert("registro exitoso");<script>';
  }
  if ($_GET['status'] == 2) {
    echo '<script>alert("El usuario ya existe");<script>';
  }
  if ($_GET['status'] == 3) {
    echo '<script>alert("Acceso denegado");<script>';
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="finanzas, finanaciera, personales">
    <meta name="author" content="Alejandro Camilo Orjuela Maricales">
    <meta name="description" content="Es la aplicación que podrán orden en tus finanzas personales de forma automática e inteligente. Registra tus ingresos y gastos para tener una visión clara de tu situación financiera en tiempo real. La app analiza tus hábitos de consumo y te ayuda a crear un presupuesto personalizado, identificando oportunidades de ahorro.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d0310a7c42.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/sytle.css">
    <link rel="icon" type="img/png" href="img/latido.png">
    <title>Isabela</title>
</head>
<body>
    <div class="menu-wrap">
        <input type="checkbox" class="toggler">
        <div class="hamburger"><div>
        </div></div>
        <div class="menu">
          <div>
            <div>
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#myBtn">Login</a></li>
                <li><a href="#Contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    
      <header class="showcase">
        <div class="container showcase-inner">
          <img id="ilos" src="img/latido.png"  alt="">
          <h2>Bienvenido a Isabela</h2>
          <p>Los problemas de salud deben ser registrados con el mayor nivel de especificidad posible en el momento del encuentro médico-paciente. Los problemas de salud atendidos pueden codificarse como: diagnósticos, signos o síntomas, pronóstico, temor a enfermedades, incapacidad (física o mental) o necesidades de cuidado, lesiones y problemas de salud de los seres humanos.</p>

          <!-- Trigger/Open The Modal -->
          <button id="myBtn">Acceder</button>
          <!-- The Modal -->
          <div id="myModal" class="modal">
          <!-- Modal content -->
          <div class="modal-content"> 

            <span class="close">&times;</span>
            <h1>Administrador de servicios de salud</h1>
            <div class="container" id="container">
              <div id="myBtn" class="form-container sign-up-container">
                <form action="back/registro.php" method="POST">
                  <img class="shul" src="img/Insurance.png">
                  <span>or use your email for registration</span>
                  <form>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputnombres">Nombres</label>
                        <input type="text" class="form-control" name="names" id="inputnombres" placeholder="Nombres">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputapellidos">Apellidos</label>
                        <input type="text" class="form-control" name="lastname" id="inputapellidos" placeholder="Apellidos">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputfecha_nacimiento">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" name="birth" id="inputfecha_nacimiento" >
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputcorreo">Correo</label>
                        <input type="email" class="form-control" name="email" id="inputcorreo" placeholder="Email" >
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputNumero_de_iden">Número de identificación</label>
                        <input type="text" class="form-control" name="id_person" id="inputNumero_de_iden">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Contraseña</label>
                        <input type="password" class="form-control"name="pass" id="inputPassword4" placeholder="Password" >
                      </div>
                    </div>
                    <button name="register_btn" type="submit">Register</button>
                  </form>
              </div>
              <div class="form-container sign-in-container">
                <form action="back/login.php" method="POST">
                  <img class="shul" src="img/Doctor.png">
                  <span>or use your account</span>
                  <label for="inputcorreo">Correo</label>
                  <input type="email" class="form-control"  name="email"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  <label for="inputPassword4">Contraseña</label>
                  <input type="password" class="form-control"  name="pass" id="exampleInputPassword1" placeholder="Password">
                  <a href="#">¿Olvidaste tu contraseña?</a>
                  <button name="login_btn" class="btn_login">iniciar sesión</button>
                </form>
              </div>
              <div class="overlay-container">
                <div class="overlay">
                  <div class="overlay-panel overlay-left">
                    <h1>¡Bienvenido de nuevo!</h1>
                    <p>Para mantenerse conectado con nosotros, inicie sesión con su información personal</p>
                    <button class="ghost" id="signIn">iniciar sesión</button>
                  </div>
                  <div class="overlay-panel overlay-right">
                    <h1>Nuevo registro de doctor </h1>
                    <p>Introduce tus datos personales y comienza tu viaje con nosotros.</p>
                    <button class="ghost" id="signUp">inscribirse</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>


      <section  class="structure_one">
        <div class="info_section">
            <div class="title">
                <h3>OBJETIVOS</h3>
            </div>
            <p>
              Desarrollar una aplicación para el manejo de la información de la creación de la ficha médica, reservación de citas médicas e historia clínica en el área de medicina general y especialidad  que represente así para la empresa una mayor conectividad en el hospital y un mayor benéfico económico.
            </p>
            <p>
              La historia clínica es un documento privado de carácter confidencial que únicamente puede ser conocido por terceros con previa autorización del paciente, o en los casos previstos por la ley. Es decir, solo puede acceder a la historia clínica el personal directamente implicado en la atención al paciente.
            </p>
        </div>
        <div class="illustration_section">
          <img src="img/Hospital wheelchair-rafiki.png">
        </div>
      </section>
      <section class="structure_one">
        <div class="illustration_section">
          <img src="img/Medicine.png">
        </div>
        <div class="info_section">
          <div class="title">
            <h3>JUSTIFICACIÓN</h3>
          </div>
          <p>
            Desarrollar de la necesidad que tiene el ser humano de generar nuevo conocimiento que contribuya al logro de un estado completo bienestar físico, mental y social, definición que del concepto de salud ha establecido en  el objetivo su constitución de la Organización Mundial de la Salud (OMS).
          </p>
        </div>
      </section>
      <section  class="structure_one">
        <div class="info_section">
            <div class="title">
                <h3>ANTECEDENTES</h3>
            </div>
            <p>
              Actualmente la medicina lleva un registro con información relacionada a las historias clínicas de las medicinas  sobre la salud de unas personas. Los antecedentes médicos personales pueden incluir información acerca de las alergias, las enfermadas, las cirugías, las inmunizaciones y los resultados de exámenes físicos y las pruebas.
            </p>
        </div>
        <div class="illustration_section">
          <img src="img/Hospital patient.png">
        </div>
      </section>
      <section class="structure_one">
        <div class="illustration_section">
          <img src="img/Group therapy.png">
        </div>
        <div class="info_section">
          <div class="title">
            <h3>Ámbito del sistema</h3>
          </div>
          <p>
            El aplicativo Isabela permitirá manejar las historia clínicas de manera más eficiente y ordenada teniendo como herramienta el sistema de roles que permite el manejo de la información de dependiendo del rol que se esté utilizando, esto le dará la posibilidad a los dueños de las salud humana visualizar y modificar el perfil como propietarios y ver el historial clínico que tienen las salud humana ; por su parte los medicas podrán ver, crear y modificar las historia clínicas y el administrador tendrá las funciones de roles anteriores con el complemento de inhabilitar las historias de salud humana y los usuarios que ya no sean clientes de negocio
          </p>
        </div>
      </section>
      <section  class="structure_one">
        <div class="info_section">
            <div class="title">
                <h3>Suposiciones y dependencias</h3>
            </div>
            <p>
              Existen algunos factores que podrían afectar el correcto funcionamiento del aplicativo como lo pueden ser el crecimiento rápido de la compañía ya que esto demandaría la creación de más roles dependiendo las necesidades de la medicina, además de la generación de nuevos módulos que facilitaran los nuevos componentes de la empresa.
            </p>
        </div>
        <div class="illustration_section">
          <img src="img/Doctors-bro.png">
        </div>
      </section>
      <footer class="Contact">
        <div class="logo">
          <img src="img/latido.png">
        </div>
        <div class="contain-main-footer">
          <div class="contact">
            <h4>Isablea Salud</h4>
            <address>
              Isablea Salud
              <ul>
                <li>
                  <i class="fa-solid fa-arrow-right">Linea de atención EPS Bogotá y Cundinamarca: 22991293</i>
                </li>
                <li>
                  <i class="fa-solid fa-angles-right">Linea de atención Covid y Viruela Simica: 9299199</i>
                </li>
                <li> 
                  <i class="fa-solid fa-angles-right">Linea de atención Plan Complementario y Plan Vital: 929291</i>
                </li>
                <li> 
                  <i class="fa-solid fa-angles-right">Linea Nacional: 8282103</i>
                </li>
              </ul>
            </address>
          </div>
          <div class="regulatory">
            <h4>Conoce más</h4>
            <ul>
                <li>
                  <i class="fa-solid fa-angles-right"> Isabela Salud</i>
                </li>
                <li>
                  <i class="fa-solid fa-angles-right">Centro permanencia Fusagasugá</i>
                </li>
                <li>
                  <i class="fa-solid fa-angles-right">Proveedores</i>
                </li>
                <li>
                  <i class="fa-solid fa-angles-right">Preguntas frecuentes</i>
                </li>
                <li>
                  <i class="fa-solid fa-angles-right">Revista Compensar</i>
                </li>
                <li>
                  <i class="fa-solid fa-angles-right">Trabaja con nosotros</i>
                </li>
                <li>
                  <i class="fa-solid fa-angles-right">Te escuchamos PQRS</i>
                </li>
                <li>
                  <i class="fa-solid fa-angles-right">Nuestra organización</i>
                </li>
                <li>
                  <i class="fa-solid fa-angles-right">Mapa del sitio</i>
                </li>
                <li>
                  <i class="fa-solid fa-angles-right">Servicios y atención</i>
                </li>
              </ul>
          </div>
          <div class="location">
            <h4>Ubicación</h4>
            <iframe 
              src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3976.164823900567!2d-74.0370906241406!3d4.741403741301509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sco!4v1698189405987!5m2!1ses!2sco"
              allowfullscreen="" 
              loading="lazy" 
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <div class="social-media">
              <i class="fa-brands fa-facebook-f"></i>
              <i class="fa-brands fa-youtube"></i>
              <i class="fa-brands fa-instagram"></i>
              <i class="fa-brands fa-linkedin"></i>
            </div>
          </div>
        </div>

        <div class="copy_right">
          <span>@Medicina 2023 l Sitio creado y Medicina por la Alejandro Camilo Orjuela</span>
        </div>
      </footer>


      <script src="js/script.js"></script>

</body>
</html>