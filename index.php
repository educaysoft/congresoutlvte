<html>
<head>

	<title> II JORNADA CIENTIFICA</title>
	<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<meta name="description" content="1er Congreso Internacional Virtual Pedagogía e Interculturalidad realizado en la Universidad Técnica Luis Vargas Torres" />
	<meta property="og:locale" content="es_EC" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Congreso Internacional Virtual Pedagogía e Interculturalidad" />
	<meta property="og:description" content="1er Congreso Internacional Virtual Pedagogía e Interculturalidad realizado en la Universidad Técnica Luis Vargas Torres." />
	<meta property="og:url" content="https://www.congresoute.edu/" />
	<meta property="og:site_name" content="FACULTAD DE INGENIERÍAS" />
	<meta property="article:modified_time" content="2021-12-14T21:51:01+00:00" />
	<meta property="og:image" content="https://congresoutlvte.org/faci/images/logo.png" />
	<meta property="og:image:width" content="800" />
	<meta property="og:image:height" content="600" />
	<!-- / Yoast SEO plugin. -->


<meta name="author" content="Stalin Francis" />

<meta name="copyright" content="educaysoft" />

<meta name="description" content="1er congreso insternacional de interculturalidad " />
<meta name="keywords" content="utlvte  contreso  Esmeraldas Ecuador"/>
<!-- Load font awesome icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="style.css">

<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css"
  rel="stylesheet"
/>


<link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">







<!-- Load font awesome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link href='https://fonts.googleapis.com/css?family=Raleway:400,800,300' rel='stylesheet' type='text/css'>



<style>

    /* Default height for small devices */
    #intro-example {
      height: 400px;
    }

    /* Height for devices larger than 992px */
    @media (max-width: 768px) {
      #intro-example {
        height: 600px;
      }
    }



      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

</style>




<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>





    <link href="navbar.css" rel="stylesheet">

</head>
<body style="margin: 0% 10% 0% 10%; background-color: #c0c0c0;">


<?php
include_once("head.php");
?>

<div style="border:4px red solid;  display:flex;flex-direction: column; background-color: white;">
<?php
//include_once("carrusel.php");
?>


<?php
include_once("congresoutlvte-resumen.php");
?>

<?php
//include_once("ponencia-principal.php");
?>


<?php
//include_once("inblue.php");
?>


<?php
include_once("congresoutlvte-comites.php");
?>



<?php
include_once("congresoutlvte-album.php");
?>


<?php
//include_once("saludo.php");
?>


<?php
include_once("footer.php");
?>

</div>


<script type="text/javascript">

$(".submenu").click(function(){
  $(this).children("ul").slideToggle();
})

$("ul").click(function(ev){
  ev.stopPropagation();
})


function cargarVideo(url){
	document.getElementById('slider').src=url;
}


</script>
    <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>


</body>



</html>
