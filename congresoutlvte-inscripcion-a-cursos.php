
<?php
include("head0.php");
?>

<?php
include("head.php");
?>
<div style="width: 100%; margin:0px auto; padding: 10px;background-color: white;">


<main id="agenda" class="cd-main-content" style="margin-top:0%">

<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
	<h1 class="fw-light">Inscripción a cursos </h1>
<h3> Inscripción como profesional </h3>
        <p class="text-justify">Los cursos pre-congreso son dictados por conferensistas internacionales de gran prestigio, para inscribirte solo deben llenar el siguiente formulario,  y adjuntar tu recibo de pago con un valor de $25, para información adicionar sobre los cursos puedes enviar un mensaje al correo  <a href="mailto:grupo.investigacion.faci@utelvt.edu.ec">grupo.investigacion.faci@utelvt.edu.ec</a> </p>
        <p>
          <a href=" https://docs.google.com/forms/d/e/1FAIpQLSdhljELClt8TYWDNovtIRamJXMZLYsBM_SKGr1eAfWX_TrqOw/viewform?usp=sf_link" class="btn btn-primary my-2">Inscipción como profesional</a>
        </p>








      </div>
    </div>
  </section>








</main>

</div>

<?php
include_once("footer.php");
?>

</div>


<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.js"
></script>

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





</html>

</body>

