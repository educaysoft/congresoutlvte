
<?php
include("head0.php");
?>


<?php
include("head.php");
?>


<div style="width: 100%; margin:0px auto; padding: 10px;background-color: white;">


<main id="agenda" class="cd-main-content" style="margin-top:0%">
<p style="font-size: 30px; font-weight: bold; text-align: center; padding: 20px 0 40px 0; "> DETALLES DEL EVENTO</p>
<div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">Visión del Evento</h1>
      <p class="lead my-3">Promover el desarrollo de la investigación multidisciplinaria en ciencias ingenieriles,y su aplicación en diferentes contextos en aras del desarrollo técnico-ingenieril eco-sustentable.</p>
      <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
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

