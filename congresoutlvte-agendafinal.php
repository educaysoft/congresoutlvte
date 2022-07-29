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
<p style="font-size: 30px; font-weight: bold; text-align: center; padding: 20px 0 40px 0; "> AGENDA FINAL</p>


<div style="width: 100%;padding:10px;" > <center><a href="Agenda/AgendaFinal.pdf"><button class="button-33" role="button">Desargar</button></a>
</center></div>
<div style=" display: flex; flex-direction:row; justify-content: center; width:100%;" >

<object width="600%" height="1000" type="application/pdf" data="Agenda/AgendaFinal.pdf?#zoom=85&scrollbar=0&toolbar=0&navpanes=0">
    <p>Insert your error message here, if the PDF cannot be displayed.</p>
</object>


  
</div>















</main>

</div>

</div>




<?php

include("footer.php");
?>
