<?php
include("head0.php");
?>



<?php
include("head.php");
?>


<div style="width: 100%; margin:0px auto; padding: 10px;background-color: white;">

<main id="agenda" class="cd-main-content" style="margin-top:0%">
<p style="font-size: 30px; font-weight: bold; text-align: center; padding: 20px 0 40px 0; "> COMITECOMITESlass="album py-5 bg-light">
    <div class="container">

<div class="row py-lg-5 text-center container">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Comisión organizadora</h1>
      </div>
    </div>


      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img src="http://www.congresoutlvte.org/faci/images/comite/CruelSiguenzaJoseph.png">

            <div class="card-body">
              <p class="card-text"><strong>Joseph Cruel</strong>  <br> Comisión organizadora</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                   <button  onclick="location.href='https://utelvt.edu.ec/sitioweb/index.php/rector'"    type="button" class="btn btn-sm btn-outline-secondary">BIBLIOGRAFÍA</button>
                  <button  onclick="location.href='https://www.youtube.com/watch?v=-2gqhIER5Uo'" type="button" class="btn btn-sm btn-outline-secondary">VÍDEO</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="http://www.congresoutlvte.org/faci/images/Vicerectora2.jpg">

            <div class="card-body">
              <p class="card-text"><b>Elizabeth Canchingre</b><br>Vice-rectora Académica UTLVTE.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">BIBLIOGRAFÍA</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">VÍDEO</button>
                </div>
             <!---   <small class="text-muted">9 mins</small>  -->
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="http://www.congresoutlvte.org/faci/images/Decano.png">

            <div class="card-body">
              <p class="card-text"><strong>Lenin Montaño</strong> <br> Decano FACI-UTLVTE.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">BIBLIOGRAFÍA</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">VÍDEO</button>
                </div>
             <!---   <small class="text-muted">9 mins</small>  -->
              </div>
            </div>
          </div>
        </div>

	<div class="col">
          <div class="card shadow-sm">
            <img src="http://www.congresoutlvte.org/faci/images/Vicerector2.jpg">

            <div class="card-body">
              <p class="card-text"><strong>Manuel Quiñonez</strong> <br> Vicerrector de investigación.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">BIBLIOGRAFÍA</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">VÍDEO</button>
                </div>
             <!---   <small class="text-muted">9 mins</small>  -->
              </div>
            </div>
          </div>
        </div>



	<div class="col">
          <div class="card shadow-sm">
            <img src="http://www.congresoutlvte.org/faci/images/Coordinador.jpg">

            <div class="card-body">
              <p class="card-text"><strong>Franklin Ochoa</strong> <br> Coordinador del Evento.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">BIBLIOGRAFÍA</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">VÍDEO</button>
                </div>
             <!---   <small class="text-muted">9 mins</small>  -->
              </div>
            </div>
          </div>
        </div>



      </div>
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

