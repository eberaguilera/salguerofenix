<!DOCTYPE html>
<html lang="en">
<head>
<title>Car Repair</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.7.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.4.1.js"></script>
<script>
$(document).ready(function () {
    $('.slider')._TMS({
        show: 0,
        pauseOnHover: true,
        prevBu: '.prev',
        nextBu: '.next',
        playBu: false,
        duration: 500,
        preset: 'fade',
        pagination: true, //'.pagination',true,'<ul></ul>'
        pagNums: false,
        slideshow: 8000,
        numStatus: false,
        banners: 'fromBottom', // fromLeft, fromRight, fromTop, fromBottom
        waitBannerAnimation: false,
        progressBar: false
    })
})
$(function () {
    if ($(window).width() <= 1066) {
        $("#slider .prev").css("left", "55px")
        $("#slider .next").css("right", "55px")
    }
})
</script>
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
    <!--
      <ul class="menu">
        <li class="current"><a href="index.html" class="home"><img src="images/home.jpg" alt=""></a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="maintenance.html">Maintenance</a></li>
        <li><a href="repair.html">Repair</a></li>
        <li><a href="price-list.html">Price List</a></li>
        <li><a href="locations.html">Locations</a></li>
      </ul>
    -->
      <ul class="menu">
        <li class="current"><a href="#" class="home"><img src="images/home.jpg" alt=""></a></li>
        <li><a href="quienes_somos.php">Quienes Somos</a></li>
        <li><a href="novedades.php">Novedades</a></li>
        <li><a href="equipamiento.php">Equipamiento</a></li>
        <li><a href="servicios.php">Servicios</a></li>
        <!--  <ul>
            <li><a href="">Submenu1</a></li>
            <li><a href="">Submenu2</a></li>
            <li><a href="">Submenu3</a></li>
            <li><a href="">Submenu4</a>
              <ul>
                <li><a href="">Submenu1</a></li>
                <li><a href="">Submenu2</a></li>
                <li><a href="">Submenu3</a></li>
                <li><a href="">Submenu4</a></li>
              </ul>
            </li>
          </ul> 
        -->
        <li><a href="contacto.php">Contacto</a></li>
      </ul>
      <div class="clear"></div>
    </nav>
  </header>
  <div id="slider">
    <div class="slider-block">
      <div class="slider">
        <ul class="items">
          <li><img src="images/slide-1.jpg" alt="">
            <div class="banner">
              <div><span>Ford</span><strong>Сiriure dolor nhendrerit</strong>
                <p>Nam liber tempor cum soluta nobis eleifenoption congue nigfif аil imperdiet doming id quod mazim placerat facer. Lorjem ipsum dolor sit amet, consecer adipiscing elit.</p>
                <a href="#" class="button">Read More</a></div>
            </div>
          </li>
          <li><img src="images/slide-2.jpg" alt="">
            <div class="banner">
              <div><span>Maserati GT</span><strong>Vulputate velit esse</strong>
                <p>sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis.</p>
                <a href="#" class="button">Read More</a></div>
            </div>
          </li>
          <li><img src="images/slide-3.jpg" alt="">
            <div class="banner">
              <div><span>Honda HSC</span><strong>Molestie consequat vel</strong>
                <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit.</p>
                <a href="#" class="button">Read More</a></div>
            </div>
          </li>
        </ul>
      </div>
      <a href="#" class="prev"></a> <a href="#" class="next"></a> </div>
  </div>
  <section id="content">
    <div class="block-1 box-1">
      <div> <img src="images/page1-img1.jpg" alt="">
        <p class="text-1">Schedule <strong>Services</strong></p>
        <p class="upper"><a href="#" class="link">Click here</a> for more info about this free website templates  by TemplateMonster.com.</p>
        <a href="#" class="button">Read More</a> </div>
      <div> <img src="images/page1-img2.jpg" alt="">
        <p class="text-1">Preventive <strong>Maintenance</strong></p>
        <p class="upper">This website template is optimized for 1280X1024 screen res. It is also XHTML & CSS valid.</p>
        <a href="#" class="button">Read More</a> </div>
      <div> <img src="images/page1-img3.jpg" alt="">
        <p class="text-1">Repair <strong>Services</strong></p>
        <p class="upper">The PSD source files of this template are available for free for the registered members.</p>
        <a href="#" class="button">Read More</a> </div>
      <div class="last"> <img src="images/page1-img4.jpg" alt="">
        <p class="text-1">Tire & Wheel <strong>Services</strong></p>
        <p class="upper">Feel free to get this free web template created  by Template Monster Team!</p>
        <a href="#" class="button">Read More</a> </div>
    </div>
    <div class="block-2 wrap pad-2">
      <div class="box-2">
        <h2 class="clr-1">Reviews</h2>
        <div class="comments">
          <div> “Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.”
            <div class="comments-corner"></div>
          </div>
          <a href="#">dolor hendrerit</a> </div>
        <div class="comments">
          <div> “vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit.”
            <div class="comments-corner"></div>
          </div>
          <a href="#">vulputate velit</a> </div>
      </div>
      <div class="box-3">
        <h2 class="clr-1">Our Services</h2>
        <div class="wrap">
          <ul class="list-1">
            <li><a href="#">Consetetur sadipscing</a></li>
            <li><a href="#">elitr sed diam nonumy</a></li>
            <li><a href="#">tempor invidunt utabore</a></li>
            <li><a href="#">et dolore magna aliquyam</a></li>
            <li><a href="#">erat sed diam voluptua</a></li>
            <li><a href="#">At vero eos et accusam et</a></li>
          </ul>
          <ul class="list-1 last">
            <li><a href="#">Takimata sanctus est</a></li>
            <li><a href="#">Lorem ipsum dolor sit amet</a></li>
            <li><a href="#">Ipsum dolor sit amet</a></li>
            <li><a href="#">consetetur sadipscing </a></li>
            <li><a href="#">sed diam nonumy eirmod</a></li>
            <li><a href="#">tempor invidunt ut labore</a></li>
          </ul>
        </div>
        <a href="#" class="button-2">Read More</a> </div>
    </div>
  </section>
  <footer>Salguero & Fénix &copy; 2016 | <a href="#">Privacy Policy</a> | Design by: <a href="http://www.templatemonster.com/">TemplateMonster.com</a></footer>
</div>
</body>
</html>