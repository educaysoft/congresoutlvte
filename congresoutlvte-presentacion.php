
<?php
include("head0.php");
?>


<?php
include("head.php");
?>


<div style="width: 100%; margin:0px auto; padding: 10px;background-color: white;">


<main  class="container" >
<p style="font-size: 30px; font-weight: bold; text-align: center; padding: 20px 0 40px 0; "> DETALLES DEL EVENTO</p>



      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="mb-0">Visión del Evento</h3>
          <p class="card-text mb-auto">Promover el desarrollo de la investigación multidisciplinaria en ciencias ingenieriles, y su aplicación en diferentes contextos en aras del desarrollo técnico-ingenieril eco-sustentable.</p>
        </div>
        
      </div>



<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="mb-0">Misión del evento</h3>
          <p class="card-text mb-auto">Fortalecimiento de la vinculación y relaciones entre la Academia, Gobierno, Comunidad Científica UTLVTE, Instituciones, Grupos de Investigación y la Empresa Pública y Privada.</p>
        </div>
        
      </div>




</main>

</div>
<?php

include("footer.php");
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

