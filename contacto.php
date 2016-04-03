<!DOCTYPE html>
<html lang="en">
<head>
<title>Car Repair | Locations</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.7.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<!--[if lt IE 9]>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/html5.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>
<div class="bg">
  <header>
    <div class="main wrap">
      <h1><a href="index.php"><img src="images/logo.png" alt=""></a></h1>
      <p><span>(011) 4624-2292 <br>(011) 1559524845</span>phoenixysalguero@yahoo.com.ar</p>
    </div>
    <nav>
      <!-- <ul class="menu">
        <li><a href="index.html" class="home"><img src="images/home.jpg" alt=""></a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="maintenance.html">Maintenance</a></li>
        <li><a href="repair.html">Repair</a></li>
        <li><a href="price-list.html">Price List</a></li>
        <li class="current"><a href="locations.html">Locations</a></li>
      </ul> -->
      <ul class="menu">
        <li><a href="index.php" class="home"><img src="images/home.jpg" alt=""></a></li>
        <li><a href="quienes_somos.php">Quienes Somos</a></li>
        <li><a href="novedades.php">Novedades</a></li>
        <li><a href="equipamiento.php">Equipamiento</a></li>
        <li><a href="servicios.php">Servicios</a></li>
        <li class="current"><a href="#">Contacto</a></li>
      </ul>
      <div class="clear"></div>
    </nav>
  </header>
  <section id="content">
    <div class="sub-page">
      <div class="sub-page-left box-9">
        <h2>Contáctenos</h2>
        <form id="form" method="post" action="#">
          <fieldset>
            <label>
              <input type="text" value="Nombre" onBlur="if(this.value=='') this.value='Name'" onFocus="if(this.value =='Nombre' ) this.value=''">
            </label>
            <label>
              <input type="text" value="Email" onBlur="if(this.value=='') this.value='Email'" onFocus="if(this.value =='Email' ) this.value=''">
            </label>
            <label>
              <input type="text" value="Teléfono" onBlur="if(this.value=='') this.value='Teléfono'" onFocus="if(this.value =='Teléfono' ) this.value=''">
            </label>
            <label>
              <textarea onBlur="if(this.value==''){this.value='MENSAJE'}" onFocus="if(this.value=='MENSAJE'){this.value=''}">MENSAJE</textarea>
            </label>
            <div class="btns"><a href="contacto.php" class="button">Cancelar</a><a href="#" class="button" onClick="document.getElementById('form').submit()">Enviar</a></div>
          </fieldset>
        </form>
      </div>
      <div class="sub-page-right">
        <h2>Encuéntranos</h2>
        <div class="map">
          <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
        </div>
        <dl class="adr">
          <dt>Dirección:  <br>
            Localidad:</dt>
          <dd><span>Teléfono:</span>(011) 4624-2292</dd>
          <dd><span>Celular:</span>(011) 1559524845</dd>
          <dd><!-- <span>E-mail:</span> --><a href="#" class="link">phoenixysalguero@yahoo.com.ar</a></dd>
        </dl>
      </div>
    </div>
  </section>
  <footer>Salguero & Fénix &copy; 2016 | <a href="#">Privacy Policy</a> | Design by: <a href="http://www.templatemonster.com/">TemplateMonster.com</a></footer>
</div>
</body>
</html>