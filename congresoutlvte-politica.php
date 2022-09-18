
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
        <h1 class="fw-light">Políticas de privacidad </h1>
	<p class="lead text-justify"> La presente Política de Privacidad establece los términos en que la Universidad Técnica Luis Vargas Torres usa y protege la información que es proporcinada por sus usuarios al momento de utilizar su sitio web. Esta institución esta comprometida con la seguridad de los datos de sus usuarios. Cuando le pedimos llenar los campos de información personal con la cual usted pueda ser identificado, lo hacemos asegurando que sólo se empleará de acuerdo con los términos de este documento. Sin embargo, esta Política de Privacidad puede cambiar con el tiempo o ser actualizada por lo que recomendamos y enfatizamos revisar continuamente esta página para asegurarse que está de acuerdo con dichos cambios.</p>

<p class="font-weight-bold">Control de su información personal.</p>


<p class="lead text-justify">En cualquier momento usted puede restringir la recopilación o el uso de la información personal que es proporcionada a nuestro sitio web. Cada vez que se le solicite rellenar un formulario, como el de alta de usuario, puede marcar o desmarcar la opción de recibir información por correo electrónico. En caso de que haya marcado la opción de recibir boletín o publicidad usted puede cancelarla en cualquier momento.</p>




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

