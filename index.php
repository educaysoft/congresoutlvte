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


<style>

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
  </style>
</style>



</head>
<body style="margin: 0% 10% 0% 10%; background-color: #c0c0c0;">


<?php
include_once("head.php");
?>

<div style="  display:flex;flex-direction: column; background-color: white;">
<?php
include_once("carrusel.php");
?>

<?php
include_once("ponencia-principal.php");
?>


<?php
include_once("inblue.php");
?>


<?php
include_once("body.php");
?>


<?php
include_once("saludo.php");
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


</body>



</html>
