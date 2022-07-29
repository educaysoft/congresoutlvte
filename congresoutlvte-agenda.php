<html>
  <head>
<!-- Load font awesome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="style.css">

<script type="text/javascript">


var app = {
  settings: {
    container: $('.calendar'),
    calendar: $('.front'),
    days: $('.weeks span'),
    form: $('.back'),
    input: $('.back input'),
    buttons: $('.back button')
  },

  init: function() {
    instance = this;
    settings = this.settings;
    this.bindUIActions();
  },

  swap: function(currentSide, desiredSide) {
    settings.container.toggleClass('flip');

    currentSide.fadeOut(900);
    currentSide.hide();
    desiredSide.show();

  },

  bindUIActions: function() {
    settings.days.on('click', function(){
      instance.swap(settings.calendar, settings.form);
      settings.input.focus();
    });

    settings.buttons.on('click', function(){
      instance.swap(settings.form, settings.calendar);
    });
  }
}

app.init();


</script>



  </head>

<body style="margin: 0% 10% 0% 10%; background-color: #c0c0c0;">
<?php
include("head.php");
?>
<div style="display:flex; flex-direction: column;background-color: white;">
<div style="width: 100%; margin:0px auto; padding: 10px;">


<main id="agenda" class="cd-main-content" style="margin-top:0%">
<p style="font-size: 30px; font-weight: bold; text-align: center; padding: 20px 0 40px 0; "> AGENDA</p>



<div style=" display: flex; flex-direction:row; justify-content: center; width:100%;" >
  <div  class="w3-card-4"  style="padding: 20px; background-color: gray;  color:white; border:2px solid green; width: 20%; display:flex;  justify-content: left; align-items: center;">
        <p style="line-height: 150%;"><span style="font-weight: bold;">  MIERCOLES </span><br>      
 Diciembre 1 <br>
2021</p>
  </div>
  <div style=" background-color: lightgrey; width: 80%;  display: flex;justify-content: center;align-items: center;">
    <div style=" margin: 0px 0px 0px 40px;text-align: justify;">

       <ol>
        <li> Inauguración del 1er Congreso Virtual Internacional “Pedagogía e Interculturalidad”.</li>
        <li>Conferencia inaugural (conferencista internacional).</li>  
      </ol>


<p>Trabajo en comisiones por sub temáticas.</p>
    <ol start="3">
    <li>Formación pedagógica, educación y sociedad. (Facultad de la Pedagogía).</li>
    <li>Despliegue local y perfeccionamiento empresarial desde las ciencias administrativas y económicas. (Facultad de Ciencias Administrativas y Económicas)</li>

    <li> Relatoría.</li>
</ol>

    </div>  
</div>
</div>


<div style="padding:21px;">
<hr>
</div>

<div style=" display: flex; flex-direction:row; justify-content: center; width:100%;" >
  <div  class="w3-card-4"  style="padding: 20px; background-color: gray;  color:white; border:2px solid green; width: 20%; display:flex;  justify-content: left; align-items: center;">
        <p style="line-height: 150%;"><span style="font-weight: bold;">  JUEVES </span><br>      
 Diciembre 2 <br>
2021</p>
  </div>
  <div style="background-color: lightgrey; width: 80%; display: flex;justify-content: center;align-items: center;">
    <div style=" margin: 0px 0px 0px 40px;text-align: justify;">

       <ol start="6">
        <li>Avance de sectores tecnológicos para una eficiencia energética y producción de energías limpias (Facultad de Ingenierías)</li>
        <li>Impulso agropecuario sostenible y gestión ambiental. (Facultad de Ciencias Agropecuarias).</li>  
    <li> Relatoría.</li>
      </ol>
    </div>  
</div>
</div>


<div style="padding:21px;">
<hr>
</div>

<div style=" display: flex; flex-direction:row; justify-content: center; width:100%;" >
  <div  class="w3-card-4"  style="padding: 20px; background-color: gray;  color:white; border:2px solid green; width: 20%; display:flex;  justify-content: left; align-items: center;">
        <p style="line-height: 150%;"><span style="font-weight: bold;">  VIERNES </span><br>      
 Diciembre 3 <br>
2021</p>
  </div>
  <div style="background-color: lightgrey; width: 80%; display: flex;justify-content: left;align-items: center;">
    <div style=" margin: 0px 0px 0px 40px;text-align: justify;">

       <ol start="9" >
        <li>Desarrollo, memoria social e histórica. (Facultad de Ciencias Sociales y de Servicios).  </li>
        <li>Gestión universitaria institucional desde la investigación, la docencia y la vinculación.</li>  
    <li> Relatoría.</li>
      </ol>
    
(Integración Universitaria)
       <ol start="12" >
      <li style="color: red;"> Clausura del 1er Congreso Virtual Internacional “Pedagogía e Interculturalidad”.</li>
       </ol>

</div>  
</div>
</div>




</div>

</div>
</main>

</div>

</div>




<?php

include("footer.php");
?>
