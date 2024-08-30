<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    include "php/required/links.php";
    include "php/required/header.php"

    ?>

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <header id="presentacion" class="header">
        <div class="overlay"></div>

        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="container" style="background-color:rgba(23, 37, 42, 0.7); border-color:#03a9f4; border-radius:5px;border-style:ridge;">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="carousel-caption d-none d-md-block">
                            <img src="img/yo.jpg" height="35%" width="35%" class="yo">
                            <center>
                                <h1 class="carousel-title">Mi página personal<br> en FullStack</h1>
                                <a>Me llamo Miguel Ayanz y actualmente estoy realizando mis prácticas ERASMUS de Grado Superior de Administración de Sistemas Informáticos en Red, en Varsovia, Polonia.</a><br><br>
                                <a>Mis practicas consisten en realizar un CRM, "Customer Relationship Management" (Gestión de la Relación con el Cliente), para la empresa UNICEDU, en la cual realizamos una programación web con los lenguajes HTML, CSS, PHP, JS, MYSQL...</a><br><br>
                                <button style="background-color: #6632ff;color:white;" class="btn btn-rounded"><a style="color:white ;" href="https://drive.google.com/file/d/1bp6PNBOo_j-vWfU-7v06zrcWwwhG6CBu/view?usp=sharing">CURRICULUM VITAE (ES)</a></button>&nbsp;&nbsp;
                                <button class="btn btn-light btn-rounded"><a style="color:black ;" href="https://drive.google.com/file/d/1fzbVo5mKLR00faqyKdYc1rn7AfGVrMZf/view?usp=sharing">EUROPASS (EN)</a></button>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="section" id="proyecto">

        <div class="container">

            <div class="row align-items-center mr-auto">
                <div class="col-md-4">
                    <center>
                    <h3 class="xs-font mb-0"><b>Hyper-V + Phishing de Netflix y Facebook</b></h3>
                    <h1 class="section-title" style="color:red;"><b>Proyecto final de <br>Grado Superior</b></h1>
                    <p>Mi proyecto consiste en crear una virtualización anidada de Windows Server con Hyper-V y Ubuntu Server, además de la parte importante, un phishing de la pagina de streaming de series y películas Netflix y también de la red social Facebook.</p>

                    <button style="background-color:red;" class="btn btn-light btn-rounded"><a style="color:white !important; text-decoration:none !important" href="https://drive.google.com/drive/folders/1JZwXiV-9QWrhZgxn141sfIigtMOIEU_2?usp=sharing">LINK ⮭</a></button>
                    </center>
                </div>
                <div style="height: 50%; width:50%">
                <section class="fotitos" aria-label="Gallery" style="right:-30% ;">
  <ol class="fotitos__viewport estilofotitos">
    <li id="fotitos__slide1" 
        tabindex="0"
        class="fotitos__slide estilofotitos">
      <div class="fotitos__snapper">
        <a href="#fotitos__slide4"
           class="fotitos__prev">Go to last slide</a>
        <a href="#fotitos__slide2"
           class="fotitos__next">Go to next slide</a>
      </div>
    </li>
    <li id="fotitos__slide2"
        tabindex="0"
        class="fotitos__slide estilofotitos">
      <div class="fotitos__snapper"></div>
      <a href="#fotitos__slide1"
         class="fotitos__prev">Go to previous slide</a>
      <a href="#fotitos__slide3"
         class="fotitos__next">Go to next slide</a>
    </li>
    <li id="fotitos__slide3"
        tabindex="0"
        class="fotitos__slide estilofotitos">
      <div class="fotitos__snapper"></div>
      <a href="#fotitos__slide2"
         class="fotitos__prev">Go to previous slide</a>
      <a href="#fotitos__slide4"
         class="fotitos__next">Go to next slide</a>
    </li>
    <li id="fotitos__slide4"
        tabindex="0"
        class="fotitos__slide estilofotitos">
      <div class="fotitos__snapper"></div>
      <a href="#fotitos__slide3"
         class="fotitos__prev">Go to previous slide</a>
      <a href="#fotitos__slide1"
         class="fotitos__next">Go to first slide</a>
    </li>
  </ol>
</section></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="academica">
        <div class="container">
           <center><h1 class="section-title mb-4" style="color:#6632ff;">Formación Académica:</h1></center>

            <div class="row text-center">
                <div class="col-lg-3">
                    <a href="javascript:void(0)" class="card border-0 text-dark">
                        <img class="card-img-top" src="img/cristorey.png" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                        <span class="card-body">
                            <h4 class="title mt-4" style="color:#6632ff;">GRADO SUPERIOR <br> ADMINISTRACIÓN DE SISTEMAS INFORMÁTICOS EN RED <br> (VALLADOLID)</h4>
                        </span>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="javascript:void(0)" class="card border-0 text-dark">
                        <img class="card-img-top" src="img/jesuitas.png" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                        <span class="card-body">
                            <h4 class="title mt-4" style="color:#6632ff;">GRADO MEDIO SISTEMAS MICROINFORMÁTICO Y REDES <br> (BURGOS)</h4>
                        </span>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="javascript:void(0)" class="card border-0 text-dark">
                        <img class="card-img-top" src="img/loreal.png" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                        <span class="card-body">
                            <h4 class="title mt-4" style="color:#6632ff;">PRACTICAS FP DUAL (L’OREAL)</h4>
                        </span>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="javascript:void(0)" class="card border-0 text-dark">
                        <img class="card-img-top" src="img/unicedu2.png" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                        <span class="card-body">
                            <h4 class="title mt-4" style="color:#6632ff;">PRACTICAS ERASMUS EN VARSOVIA (POLONIA)</h4>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="profesional">
        <div class="container">
           <center><h1 class="section-title mb-4" style="color:#00bf87;">Experiencia Laboral:</h1></center>

            <div class="row text-center">
                <div class="col-lg-3">
                    <a href="javascript:void(0)" class="card border-0 text-dark">
                        <img class="card-img-top" src="img/auchan.png" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                        <span class="card-body">
                            <h4 class="title mt-4" style="color:#00bf87;">REPONEDOR DE ALIMENTOS (BURGOS)</h4>
                            <h6>Jul 2020 – Sep 2020 <br> Jul 2021 – Ago 2021</h6>
                        </span>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="javascript:void(0)" class="card border-0 text-dark">
                        <img class="card-img-top" src="img/telepizza.png" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                        <span class="card-body">
                            <h4 class="title mt-4" style="color:#00bf87;">REPARTIDOR A DOMICILIO (BURGOS)</h4><br>
                            <h6>Jul 2021 – Sep 2021</h6>
                        </span>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="javascript:void(0)" class="card border-0 text-dark">
                        <img class="card-img-top" src="img/loreal.png" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                        <span class="card-body">
                            <h4 class="title mt-4" style="color:#00bf87;">PRACTICAS FP DUAL (L’OREAL)</h4><br>
                            <h6>Feb 2020 – Mar 2020</h6>
                        </span>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="javascript:void(0)" class="card border-0 text-dark">
                        <img class="card-img-top" src="img/unicedu2.png" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                        <span class="card-body">
                            <h4 class="title mt-4" style="color:#00bf87;">PRACTICAS ERASMUS EN VARSOVIA (POLONIA)</h4>
                            <h6>Mar 2022 – Jun 2022</h6>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
 
    <section class="section" id="habilidades">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <center><h1 class="section-title mb-4" style="color:#03a9f4;">Habilidades:</h1></center><br>

    <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-black w3-left-align" style="background-color:#03a9f4 !important; text-align: center!important;"><h3>Lenguajes de Programación<svg style="float:right;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
</svg></h3></button>
<div id="Demo1" class="w3-hide w3-animate-zoom">
    <br>
    <center>
 <img src="img/html.png" style="width:15%;">&nbsp;
<img src="img/css.png"  style="width:11%;">&nbsp;
<img src="img/bootstrap-logo.png"  style="width:15%;">&nbsp;
<img src="img/php.png"  style="width:15%;">&nbsp;
<img src="img/mysql.png"  style="width:15%;">
</center>
<br>
  </div>
</div>
<br>
<button onclick="myFunction('Demo2')" class="w3-button w3-block w3-black w3-left-align" style="background-color:#03a9f4 !important;text-align: center!important;"><h3>Sistemas Operativos<svg style="float:right;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
</svg></h3></button>
<div id="Demo2" class="w3-hide w3-animate-zoom">
    <br>
    <center>
 <img src="img/windows.png" style="width:20%;">&nbsp;&nbsp;&nbsp;
<img src="img/ubuntu.png"  style="width:15%;">&nbsp;&nbsp;&nbsp;
<img src="img/debian.png"  style="width:10%;">&nbsp;&nbsp;&nbsp;
<img src="img/win10.png"  style="width:15%;">
</center>
<br>
  </div>
</div>
<br>
<button onclick="myFunction('Demo3')" class="w3-button w3-block w3-black w3-left-align" style="background-color:#03a9f4 !important;text-align: center!important;"><h3>Protocolos<svg style="float:right;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
</svg></h3></button>
<div id="Demo3" class="w3-hide w3-animate-zoom">
    <br>
    <center>
 <img src="img/ip.png" style="width:15%;">&nbsp;
<img src="img/SSH.png"  style="width:11%;">&nbsp;
<img src="img/FTP.png"  style="width:15%;">&nbsp;
<img src="img/dns.png"  style="width:15%;">&nbsp;
<img src="img/samba.png"  style="width:15%;">&nbsp;
<img src="img/dhcp.png"  style="width:15%;">
<br>
</center>
  </div>
</div>
<br>
<button onclick="myFunction('Demo4')" class="w3-button w3-block w3-black w3-left-align" style="background-color:#03a9f4 !important;text-align: center!important;"><h3>Aplicaciones Web<svg style="float:right;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
</svg></h3></button>
<div id="Demo4" class="w3-hide w3-animate-zoom">
    <br>
    <center>
 <img src="img/wordpress.png" style="width:15%;">&nbsp;&nbsp;&nbsp;&nbsp;
<img src="img/moodle.png"  style="width:15%;">&nbsp;&nbsp;&nbsp;&nbsp;
<img src="img/fullstack.png"  style="width:15%;">
<br>
</center>
  </div>
</div>
<br>
<button onclick="myFunction('Demo5')" class="w3-button w3-block w3-black w3-left-align" style="background-color:#03a9f4 !important;text-align: center!important;"><h3>Aplicaciones Ofimáticas<svg style="float:right;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
</svg></h3></button>
<div id="Demo5" class="w3-hide w3-animate-zoom">
    <br>
    <center>
 <img src="img/word.png" style="width:15%;">&nbsp;&nbsp;
<img src="img/excel.png"  style="width:15%;">&nbsp;&nbsp;
<img src="img/power.png"  style="width:15%;">&nbsp;&nbsp;
<img src="img/visio.png"  style="width:15%;">&nbsp;&nbsp;
<img src="img/photoshop.png" style="width: 17%;">&nbsp;&nbsp;
<img src="img/filmora.png"  style="width:13%;">
<br>
</center>
  </div>
</div>
<script>
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>  

    </section>

    <section id="contacto" class="section pb-0">

    <div class="container">

<div class="row align-items-center mr-auto">
    <div class="col-md-4">
        <h3 class="section-title">Enlaces Interesantes:</h3>
        <p>Podréis contactarme o ver mas proyectos mios a traves de los enlaces de la derecha.</p>
    </div>
    <div class="col-sm-6 col-md-4 ml-auto">
        <div class="widget">
            <div class="icon-wrapper">
            <a href="https://github.com/mayanzgo"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
  <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
</svg></a>
            </div>
            <div class="infos-wrapper">
                <h4 class="text-primary">GITHUB</h4>
            </div>
        </div>
        <div class="widget">
            <div class="icon-wrapper">
            <a href="https://www.linkedin.com/in/miguel-ayanz-g%C3%B3mez-a62515150"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
</svg></a>
            </div>
            <div class="infos-wrapper">
                <h4 class="text-primary">LINKEDIN</h4>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="widget">
            <div class="icon-wrapper">
            <a href="https://wa.me/+34600609545"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
</svg></a>
            </div>
            <div class="infos-wrapper">
                <h4 class="text-primary">WHATSAPP</h4>
                <p>+34 600 609 545</p>
            </div>
        </div>
        <div class="widget">
            <div class="icon-wrapper">
            <a href="mailto:mayanzgo3000@gmail.com"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
</svg></a>
            </div>
            <div class="infos-wrapper">
                <h4 class="text-primary">MAIL</h4>
                <p>mayanzgo3000@gmail.com</p>
            </div>
        </div>
    </div>
</div>
</div>
<br><br>
    </section>

    <!-- core  -->
    <script src="vendors/jquery/jquery-3.4.1.js"></script>
    <script src="vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
    <script src="vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Owl carousel  -->
    <script src="vendors/owl-carousel/js/owl.carousel.js"></script>


    <!-- Ollie js -->
    <script src="js/ollie.js"></script>
    <script src="js/habilidades.js"></script>

</body>

</html>