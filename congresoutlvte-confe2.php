<?php
include("head0.php");
?>





<?php
include("head.php");
?>

<div style="display:flex;flex-direction: column; background-color: white;">
<div style="width: 80%; margin:0px auto;">


<main id="agenda" class="cd-main-content" style="margin-top:0%">
<div style=" display: flex; flex-direction:row; justify-content: center; width:100%;" >

  <div style="width:50%">
<p style="font-size: 30px; font-weight: bold; text-align: center; padding: 20px 0 40px 0; "> PONENTES </p>

  </div>

  <div style="width:50%">
    <p style="font-size: 30px; font-weight: bold; text-align: center; padding: 20px 0 40px 0; "> PONENTES </p>
  </div>

</div>

<?php
$estilo1='display: flex; flex-direction:row; justify-content: center; width:100%; margin-bottom: 10vh;'; 
$estilo2='border: 2px solid green; border-radius: 50%; width: 30%; display:flex; justify-content: center; align-items: center;';
$estilo3='margin-left: 20px; margin-right: 10px; width: 60%; display: flex;justify-content: center;align-items: center;';

$cI=array(
array(
"foto"=>"HerediaSalgadoMario.png",
"ponencia"=>"Técnicas de aprovechamiento de residuos en la agroindustria de Ecuador: conversión termoquímica.",
"bandera"=>"BanderaPortugal.png",
"conferencista"=>"PhD. Mario Heredia Salgado.",
"coautor1"=>"",
"coautor2"=>"",
"coautor3"=>"",
"universidad"=>"Universidad de Aveiro.",
"biografia"=> array("link"=>"congresoutlvte-biografia1.php#", "icono"=>"images/biografia.png"),
"video"=> array("link"=>"", "icono"=>"images/novideo.png"),
"diapositiva"=> array("link"=>"", "icono"=>"images/nodiapositiva.png")),

array(
"foto"=>"RomeroBonillaHugo.png",
"ponencia"=>"Bioingenieria, Biomateriales, Biomedicina y Bioeconomía.",
"bandera"=>"BanderaPeru.png",
"conferencista"=>"PhD. Hugo Romero Bonilla.",
"coautor1"=>"",
"coautor2"=>"",
"coautor3"=>"",
"universidad"=>"Universidad  San Ignacio de Loyola - Peru.",
"video"=> array("link"=>"", "icono"=>"images/novideo.png"),
"diapositiva"=> array("link"=>"", "icono"=>"images/nodiapositiva.png")),


array(
"foto"=>"MamaniQuispeJose.png",
"ponencia"=>"Aplicaciones electroquímicas en el tratamiento de aguas residuales mineras.",
"bandera"=>"BanderaPeru.png",
"conferencista"=>"Ing. Jose Mamani Quispe MSc.",
"coautor1"=>"",
"coautor2"=>"",
"coautor3"=>"",
"universidad"=>"Universidad Nacional del Altiplano de Puno - Peru.",
"video"=> array("link"=>"", "icono"=>"images/novideo.png"),
"diapositiva"=> array("link"=>"#", "icono"=>"images/nodiapositiva.png")),



array(
"foto"=>"MontesDeOcaYorberth.png",
"ponencia"=>"El arte de La Investigación en Ingeniería y los Objetivos de Desarrollo Sostenible.",
"bandera"=>"BanderaVenezuela.png",
"conferencista"=>"PhD. Yorberth Montes De Oca.",
"coautor1"=>"",
"coautor2"=>"",
"coautor3"=>"",
"universidad"=>"Universidad de Zulia - Venezuela.",
"video"=> array("link"=>"", "icono"=>"images/novideo.png"),
"diapositiva"=> array("link"=>"", "icono"=>"images/nodiapositiva.png")),


array(
"foto"=>"MendozaDominguezPatricio.jpg",
"ponencia"=>"Aplicaciones en la virtualización y los nuevos entornos de trabajo.",
"bandera"=>"BanderaEcuador.png",
"conferencista"=>"Ing. Patricio Mendoza Dominguez, MSc.",
"coautor1"=>"",
"coautor2"=>"",
"coautor3"=>"",
"universidad"=>"Universidad Técnica Luis Vargas Torres - Ecuador.",
"video"=> array("link"=>"", "icono"=>"images/novideo.png"),
"diapositiva"=> array("link"=>"", "icono"=>"images/nodiapositiva.png")),


array(
"foto"=>"AnguloGuerreroRonny.jpg",
"ponencia"=>"Control de factor de potencia en una red fotovoltaica en la parroquia Vuelta Larga Esmeraldas - Ecuador.",
"bandera"=>"BanderaEcuador.png",
"conferencista"=>"Ing. Ronny Joel Angulo Guerrero MSc.",
"coautor1"=>"",
"coautor2"=>"",
"coautor3"=>"",
"universidad"=>"Universidad Técnica Luis Vargas Torres - Ecuador.",
"video"=> array("link"=>"", "icono"=>"images/novideo.png"),
"diapositiva"=> array("link"=>"#", "icono"=>"images/nodiapositiva.png")),


array(
"foto"=>"MoreiraCarlos.jpg",
"ponencia"=>"Tratamiento térmicos de biomasa residuales para la producción de biocombustible.",
"bandera"=>"BanderaEcuador.png",
"conferencista"=>"Ing. Carlos Moreira, MSc.",
"coautor1"=>".",
"coautor2"=>"",
"coautor3"=>"",
"universidad"=>"Universidad Técnica de Manabi.",
"video"=> array("link"=>"", "icono"=>"images/novideo.png"),
"diapositiva"=> array("link"=>"#", "icono"=>"images/nodiapositiva.png")),



array(
"foto"=>"SolanoGutierrezGerardo.jpg",
"ponencia"=>"Demostración del sistema de difusión de mensajes masivos.",
"bandera"=>"BanderaEcuador.png",
"conferencista"=>"Ing. Gerardo Solano Gutiérrez, Mtr.",
"coautor1"=>"",
"coautor2"=>"",
"coautor3"=>"",
"universidad"=>"",
"video"=> array("link"=>"", "icono"=>"images/novideo.png"),
"diapositiva"=> array("link"=>"#", "icono"=>"images/nodiapositiva.png")),






array(
"foto"=>"RuedaGorki.jpg",
"ponencia"=>"Identificación de causa raiz de fallas en la fluxería del caldero de una central termoeléctrica.",
"bandera"=>"BanderaEcuador.png",
"conferencista"=>"Ing. Gorki Ivan Rueda M.Sc.",
"coautor1"=>"",
"coautor2"=>"",
"coautor3"=>"",
"universidad"=>"Universidad Técnica Luis Vargas Torres de Esmeraldas - Ecuador.",
"video"=> array("link"=>"", "icono"=>"images/novideo.png"),
"diapositiva"=> array("link"=>"", "icono"=>"images/nodiapositiva.png")),


 
array(
"foto"=>"AmadorRodriguezBelen.jpg",
"ponencia"=>"Diálogo epistémico entre Ingeniería Eléctrica y Educación Básica: la interdisciplinariedad sobre cuatro ejes interseccionados.",
"bandera"=>"BanderaEcuador.png",
"conferencista"=>"Dra. Belén Amador Rodríguez, PhD.",
"coautor1"=>"",
"coautor2"=>"",
"coautor3"=>"",
"universidad"=>"Universidad Técnica Luis Vargas Torres del Esmeraldas - Ecuador.",
"video"=> array("link"=>"", "icono"=>"images/novideo.png"),
"diapositiva"=> array("link"=>"#", "icono"=>"images/nodiapositiva.png")),


array(
"foto"=>"PillajoHugo.jpg",
"ponencia"=>"Análisis sísmico experimental de la conexión metálica viga de sección reducida-columna compuesta.",
"bandera"=>"BanderaEcuador.png",
"conferencista"=>"Ing. Hugo Pillajo Quijia MSc.",
"coautor1"=>"",
"coautor2"=>"",
"coautor3"=>"",
"universidad"=>"Universidad Técnica Luis Vargas Torres de Esmeraldas - Ecuador.",
"video"=> array("link"=>"", "icono"=>"images/novideo.png"),
"diapositiva"=> array("link"=>"", "icono"=>"images/nodiapositiva.png")),






array(
"foto"=>"LainesAlvarezYolanda.jpg",
"ponencia"=>"Constitución de las empresas del Ecuador y la relación con la firma electrónica 2021.",
"bandera"=>"BanderaEcuador.png",
"conferencista"=>"Ing. Yolanda Maria Laines Alvarez MSc.",
"coautor1"=>"",
"coautor2"=>"",
"coautor3"=>"",
"universidad"=>"Universidad Técnica de Machala.",
"video"=> array("link"=>"", "icono"=>"images/novideo.png"),
"diapositiva"=> array("link"=>"#", "icono"=>"images/nodiapositiva.png")),


array(
"foto"=>"RivasTufinoAlfonso.jpg",
"ponencia"=>"El estado del control de los riesgos y la materialización del daño en los oleoductos, poliductos y gasoductos.",
"bandera"=>"BanderaEcuador.png",
"conferencista"=>"Dr. Alfonso Eduardo Rivas Tufiño, PH.",
"coautor1"=>"",
"coautor2"=>"",
"coautor3"=>"",
"universidad"=>"Universidad Técnica Luis Vargas Torres de Esmeradlas - Ecuador.",
"video"=> array("link"=>"", "icono"=>"images/novideo.png"),
"diapositiva"=> array("link"=>"#", "icono"=>"images/nodiapositiva.png")),


/*
array(
"foto"=>"DespaigneNegretOmayra.png",
"ponencia"=>"La neuroeducación y la optimización del aprendizaje de la lengua extranjera en la primera infancia.",
"bandera"=>"BanderaCuba.png",
"conferencista"=>"PhD. Omayda Despaigne Negret.",
"coautor1"=>"Lic. Roxana Perea Romero.",
"coautor2"=>"Lic. Miguel Angel Martinez Arías.",
"coautor3"=>"",
"universidad"=>"Universidad de Oriente - Cuba.",
"video"=> array("link"=>"", "icono"=>"images/novideo.png"),
"diapositiva"=> array("link"=>"#", "icono"=>"images/nodiapositiva.png")),


array(
"foto"=>"LopezDinzaLuisaGisel.png",
"ponencia"=>"SOS! Vamos a fomentar una cultura ambientalista en los esccolares primarios..",
"bandera"=>"BanderaCuba.png",
"conferencista"=>"Lic. Luisa Gisel López Dinza.",
"coautor1"=>"",
"coautor2"=>"",
"coautor3"=>"",
"universidad"=>"Universidad de Oriente - Cuba.",
"video"=> array("link"=>"#", "icono"=>"images/novideo.png"),
"diapositiva"=> array("link"=>"https://docs.google.com/presentation/d/1vt6-xQF1hoTAFuIdlfHCabzYrx44r490/edit?usp=sharing&ouid=109171764524505005810&rtpof=true&sd=true", "icono"=>"images/diapositiva.png")),




array(
"foto"=>"MartinezAguileraCynthia.png",
"ponencia"=>"Alternativa terapéutica para la atención a escolares con frenillo lingual corto sustentada en la terapia miofuncional.",
"bandera"=>"BanderaCuba.png",
"conferencista"=>"Lic. Cynthia Martínez Aguilera.",
"coautor1"=>"",
"coautor2"=>"",
"coautor3"=>"",
"universidad"=>"Universidad de Oriente - Cuba.",
"video"=> array("link"=>"", "icono"=>"images/novideo.png"),
"diapositiva"=> array("link"=>"", "icono"=>"images/nodiapositiva.png")),




array(
"foto"=>"ChinchayVillareyesSusanaSoledad.png",
"ponencia"=>"Rutas turísticas del valle del Chira región Piura-Peru.",
"bandera"=>"BanderaMexico.png",
"conferencista"=>"PhD. Susana Soledad Chinchay Villareyes.",
"coautor1"=>"",
"coautor2"=>"",
"coautor3"=>"",
"universidad"=>"",
"video"=> array("link"=>"#", "icono"=>"images/novideo.png"),
"diapositiva"=> array("link"=>"", "icono"=>"images/nodiapositiva.png")),



array(
"foto"=>"FuentesSanchezMaizie.png",
"ponencia"=>"La estimulación del ritmo de movimiento en la clase de educación física.",
"bandera"=>"BanderaCuba.png",
"conferencista"=>"PhD. Maizie Fuentes Sánchez.",
"coautor1"=>"Lic. Eddys Enrrique Maturell Rigondeuax",
"coautor2"=>"",
"coautor3"=>"",
"universidad"=>"Universidad de Oriente - Cuba.",
"video"=> array("link"=>"", "icono"=>"images/novideo.png"),
"diapositiva"=> array("link"=>"", "icono"=>"images/nodiapositiva.png")),




array(
"foto"=>"HinojosaSalazarCarlosAlberto.png",
"ponencia"=>"Universidad, responsabilidad social en tiempo de la Covid-19.",
"bandera"=>"BanderaMexico.png",
"conferencista"=>"PhD. Carlos Alberto Hinojosa Salazar.",
"coautor1"=>"",
"coautor2"=>"",
"coautor3"=>"",
"universidad"=>"Universidad Nacional Toribio Rodriguez de Mendoza de Amazonas - Perú.",
"video"=> array("link"=>"#", "icono"=>"images/novideo.png"),
"diapositiva"=> array("link"=>"", "icono"=>"images/nodiapositiva.png")),




array(
"foto"=>"EstradaEsquivelAnaLuisa.png",
"ponencia"=>"Redes de cooperación inter-institucional e nacionales, una oportunidad para educación, ciencia y cultura.",
"bandera"=>"BanderaMexico.png",
"conferencista"=>"PhD. Ana Luisa Estrada Esquivel.",
"coautor1"=>"",
"coautor2"=>"",
"coautor3"=>"",
"universidad"=>"Universidad Autónoma de Nayarit - México.",
"video"=> array("link"=>"#", "icono"=>"images/novideo.png"),
"diapositiva"=> array("link"=>"005810&rtpof=true&sd=true", "icono"=>"images/diapositiva.png")),





array(
"foto"=>"MarinAriasOlga.png",
"ponencia"=>"El aprendizaje musical en las escuelas vocacionales de arte: una mirada a sus antecedentes históricos.",
"bandera"=>"BanderaCuba.png",
"conferencista"=>"PhD. Olga Marín Arias.",
"coautor1"=>"PhD. Yanet Expósito Marín.",
"coautor2"=>"",
"coautor3"=>"",
"universidad"=>"Universidad de Oriente - Cuba.",
"video"=> array("link"=>"#", "icono"=>"images/novideo.png"),
"diapositiva"=> array("link"=>"#", "icono"=>"images/nodiapositiva.png")),





array(
"foto"=>"MontesDeOcaRojasYorberth.png",
"ponencia"=>"Conferencia de cierre primer congreso internacional virtual Pedagogía e Interculturalidad.",
"bandera"=>"BanderaVenezuela.png",
"conferencista"=>"PhD. Yorberth Montes de Oca Rojas.",
"coautor1"=>"",
"coautor2"=>"",
"coautor3"=>"",
"universidad"=>"Universidad del Zulia - Venezuela.",
"video"=> array("link"=>"#", "icono"=>"images/novideo.png"),
"diapositiva"=> array("link"=>"#", "icono"=>"images/nodiapositiva.png")),


 */


);



















$cN=array(
array(
"foto"=>"RamirezMarquezMartin.png",
"ponencia"=>"Diseño de tanque para almacenamiento de hidrógeno basado en Mg/MgH2.",
"bandera"=>"BanderaEcuador.png",
"conferencista"=>"Ing. Martin Ramirez Marquez, MSc.",
"coautor1"=>"",
"coautor2"=>"",
"coautor3"=>"",
"universidad"=>"Universidad Técnica Luis Vargas Torres.","video"=> array("link"=>"", "icono"=>"images/novideo.png"),
"diapositiva"=> array("link"=>"", "icono"=>"images/nodiapositiva.png")),


array(
"foto"=>"MontanoRoldanLenin.png",
"ponencia"=>"Energia renovables.",
"bandera"=>"BanderaEcuador.png",
"conferencista"=>"Ing. Lenin Montaño Roldan MSc.",
"coautor1"=>"",
"coautor2"=>"",
"coautor3"=>"", 
"universidad"=>"Universidad Técnica Luis Vargas Torres.",
"video"=> array("link"=>"", "icono"=>"images/novideo.png"),
"diapositiva"=> array("link"=>"", "icono"=>"images/nodiapositiva.png")
),


array(
"foto"=>"PerezMoreiraDamian.png",
"ponencia"=>"Monitoreo con un sistema de sensores in-situ de parámetros físico-químicos de efluentes hospitalarios.",
"bandera"=>"BanderaEcuador.png",
"conferencista"=>"MSc. Damian Perez Moreira.",
"coautor1"=>"",
"coautor2"=>"",
"coautor3"=>"",
"universidad"=>"Universidad Técnica Luis Vargas Torres.","video"=> array("link"=>"", "icono"=>"images/novideo.png"),
"diapositiva"=> array("link"=>"", "icono"=>"images/nodiapositiva.png")),


array(
"foto"=>"SolanoCuevaNatali.jpg",
"ponencia"=>"Carnosol un compuesto  con capacidades benéficas para la salud.",
"bandera"=>"BanderaEcuador.png",
"conferencista"=>"MSc. Natalí Elizabeth Solano Cueva.",
"coautor1"=>".",
"coautor2"=>"",
"coautor3"=>"",
"universidad"=>"Universidad Técnica Particular de Loja.","video"=> array("link"=>"", "icono"=>"images/novideo.png"),
"diapositiva"=> array("link"=>"", "icono"=>"images/nodiapositiva.png")),



array(
"foto"=>"MedinaJean.jpg",
"ponencia"=>"Desarrollo y análisis de harina a base de picudo negro capturado en palmáriun para la elaboración de snacks con alto valor nutricional.",
"bandera"=>"BanderaEcuador.png",
"conferencista"=>"Ing. Jean Paúl Medina, MSc.",
"coautor1"=>"",
"coautor2"=>"",
"coautor3"=>"",
"universidad"=>"Universidad Técnica Luis Vargas Torres.","video"=> array("link"=>"https://youtu.be/NyXRdzkL9xI ", "icono"=>"images/video.png"),
"diapositiva"=> array("link"=>"", "icono"=>"images/nodiapositiva.png")),


array(
"foto"=>"QuispeMeraAlex.jpg",
"ponencia"=>"Políticas y estrategias frente al cambio climático en el Ecuador: el camino hacia la gobernanza climática.",
"bandera"=>"BanderaEcuador.png",
"conferencista"=>"Ing. Álex Gabriel Quispe Mera, MSc.",
"coautor1"=>"",
"coautor2"=>"",
"coautor3"=>"",
"universidad"=>"Universidad Técnica Luis Vargas Torres.","video"=> array("link"=>"", "icono"=>"images/video.png"),
"diapositiva"=> array("link"=>"", "icono"=>"images/diapositiva.png")),



array(
"foto"=>"VillaAchupallasMercedes.jpg",
"ponencia"=>"Aguas arriba aguas abajo.",
"bandera"=>"BanderaEcuador.png",
"conferencista"=>"Ing. Mercedes Villa Achupallas, MSc.",
"coautor1"=>".",
"coautor2"=>"",
"coautor3"=>"",
"universidad"=>"Universidad Técnica Luis Vargas Torres.","video"=> array("link"=>"", "icono"=>"images/novideo.png"),
"diapositiva"=> array("link"=>"", "icono"=>"images/nodiapositiva.png")),


array(
"foto"=>"MarquezCarlos.jpg",
"ponencia"=>"Determinación de viscosidad cinemática para productos opacos.",
"bandera"=>"BanderaEcuador.png",
"conferencista"=>"Carlos Marquez.",
"coautor1"=>"",
"coautor2"=>"",
"coautor3"=>"",
"universidad"=>"Universidad Técnica Luis Vargas Torres.","video"=> array("link"=>"", "icono"=>"images/novideo.png"),
"diapositiva"=> array("link"=>"", "icono"=>"images/nodiapositiva.png")),



array(
"foto"=>"BaqueroSamaniegoSteven.jpg",
"ponencia"=>"Análisis de las estrategias competitivas internacionales y la identidad corporativa universitaria: caso Universidad  Técnica de Machala.",
"bandera"=>"BanderaEcuador.png",
"conferencista"=>"Est. Baquero Samaniego Steven.",
"coautor1"=>"",
"coautor2"=>"",
"coautor3"=>"",
"universidad"=>"Universidad Técnica de Machala -Ecuador.","video"=> array("link"=>"https://www.canva.com/design/DAEwrymdoq4/ejyZl5BlHOzCx5FE-nXeUQ/watch?utm_content=DAEwrymdoq4&utm_campaign=designshare&utm_medium=link&utm_source=publishsharelink", "icono"=>"images/novideo.png"),
"diapositiva"=> array("link"=>"#", "icono"=>"images/nodiapositiva.png")),


array(
"foto"=>"HurtadoPortocarreroDiego.jpg",
"ponencia"=>"Propuesta de diseño ingenieril para construcción de un hidrodestilador, en condiciones eco-sustentable para la obtención de aceites asenciales.",
"bandera"=>"BanderaEcuador.png",
"conferencista"=>"Est. Diego Hurtado Portocarrero.",
"coautor1"=>"",
"coautor2"=>"",
"coautor3"=>"",
"universidad"=>"Universidad Técnica Luis Vargas Torres.","video"=> array("link"=>"", "icono"=>"images/novideo.png"),
"diapositiva"=> array("link"=>"#", "icono"=>"images/nodiapositiva.png")),


array(
"foto"=>"ToalaFabian.jpg",
"ponencia"=>"Estudio prospectivo sobre el interés del estudiantado en temas de domótica, microcontroladores y programación.",
"bandera"=>"BanderaEcuador.png",
"conferencista"=>"Est. Fabián Arturo Toala.",
"coautor1"=>"",
"coautor2"=>"",
"coautor3"=>"",
"universidad"=>"Universidad Técnica Luis Vargas Torres de Esmeraldas - Ecuador.",
"video"=> array("link"=>"", "icono"=>"images/novideo.png"),
"diapositiva"=> array("link"=>"#", "icono"=>"images/nodiapositiva.png")),





array(
"foto"=>"OchoaGonzalezFranklin.jpg",
"ponencia"=>"Análisis y predicción de las precipitaciones con inteligencia artificial en Esmeraldas - Ecuador.",
"bandera"=>"BanderaEcuador.png",
"conferencista"=>"Ing. Franklin Ochoa González, MSc.",
"coautor1"=>".",
"coautor2"=>"",
"coautor3"=>"",
"universidad"=>"Universidad Técnica Luis Vargas Torres.","video"=> array("link"=>"", "icono"=>"images/novideo.png"),
"diapositiva"=> array("link"=>"#", "icono"=>"images/nodiapositiva.png")),




array(
"foto"=>"FrancisQuindeStalin.jpg",
"ponencia"=>"Herramientas para trabajo colaborativo en Fundamentos de programación: GitHub caso de estudio.",
"bandera"=>"BanderaEcuador.png",
"conferencista"=>"Ing. Stalin Francis Quinde, MSc.",
"coautor1"=>"",
"coautor2"=>"",
"coautor3"=>"",
"universidad"=>"Universidad Técnica Luis Vargas Torres.","video"=> array("link"=>"", "icono"=>"images/novideo.png"),
"diapositiva"=> array("link"=>"#", "icono"=>"images/nodiapositiva.png")),


/*

array(
"foto"=>"SimonRicardoFranciscoAngel.png",
"ponencia"=>"Contribución a la soberanía y seguridad alimentaria del Ecuador.",
"bandera"=>"BanderaEcuador.png",
"conferencista"=>"PhD. Francisco Angel Simón Ricardo.",
"coautor1"=>"MSc. Leonel Aldana Naranjo.",
"coautor2"=>"MSc. Evelyn Perea Rodríguez.",
"coautor3"=>"",
"universidad"=>"Universidad Técnica Luis Vargas Torres.","video"=> array("link"=>"", "icono"=>"images/novideo.png"),
"diapositiva"=> array("link"=>"https://docs.google.com/presentation/d/1lRobYbZqX-DLIByGss0aFB_gK6ux1j-3/edit?usp=sharing&ouid=109171764524505005810&rtpof=true&sd=true", "icono"=>"images/diapositiva.png")),


array(
"foto"=>"ArroyoPreciadoGabyAdelaida.png",
"ponencia"=>"Percepción en docentes y estudiantes de la carrera educación básica sobre el modelo educativo.",
"bandera"=>"BanderaEcuador.png",
"conferencista"=>"MSc. Gaby Adelaida Arroyo Preciado.",
"coautor1"=>"MSc. Celia Verónica Batalla Benavides.",
"coautor2"=>"",
"coautor3"=>"",
"universidad"=>"Universidad Técnica Luis Vargas Torres.","video"=> array("link"=>"", "icono"=>"images/novideo.png"),
"diapositiva"=> array("link"=>"https://docs.google.com/presentation/d/1iWI9mdtf2BKkO6Xjm2bQd95OtI7pR-Od/edit?usp=sharing&ouid=109171764524505005810&rtpof=true&sd=true", "icono"=>"images/diapositiva.png")),



array(
"foto"=>"ChilaOrtizHernan.png",
"ponencia"=>"Estudio comparativo de modelos pedagógicos aplicados a docentes en formación de la educación inicial.",
"bandera"=>"BanderaEcuador.png",
"conferencista"=>"MSc. Hernán Chila Ortiz.",
"coautor1"=>"MSc. Isabel Verónica Clavijo Robinson.",
"coautor2"=>"MSc. Ana Bedoya Gutierres",
"coautor3"=>"",
"universidad"=>"Universidad Técnica Luis Vargas Torres.","video"=> array("link"=>"https://www.canva.com/design/DAEwyI6fggo/2lx2HEgKIImr29EVbgvKaQ/watch?utm_content=DAEwyI6fggo&utm_campaign=designshare&utm_medium=link&utm_source=publishsharelink", "icono"=>"images/video.png"),
"diapositiva"=> array("link"=>"https://docs.google.com/presentation/d/1pDknj0J9AzktU77DQazfzHXbXRGa1DrY/edit?usp=sharing&ouid=109171764524505005810&rtpof=true&sd=true", "icono"=>"images/diapositiva.png")),


array(
"foto"=>"LujanoMezaPatriciaMargarita.png",
"ponencia"=>"Procesos metodológicos para la formación de guías naturales en la reserva Mache-Chindul, Esmeraldas-Ecuador.",
"bandera"=>"BanderaEcuador.png",
"conferencista"=>"MSc. Patricia Margarita Lujano Meza.",
"coautor1"=>"MSc. Wendy Narcisa Santos Marquez..",
"coautor2"=>"Ing. Luis Estupiñan Rodriguez.",
"coautor3"=>"Lic.  María Paula Villa Lujano.",
"universidad"=>"Universidad Técnica Luis Vargas Torres.","video"=> array("link"=>"", "icono"=>"images/novideo.png"),
"diapositiva"=> array("link"=>"https://docs.google.com/presentation/d/1UlXprI2VKeJ8tqg2bnHtSkI6gBjksBGQ/edit?usp=sharing&ouid=109171764524505005810&rtpof=true&sd=true", "icono"=>"images/diapositiva.png")),

array(
"foto"=>"ValverdeMedinaJennyMargarita.png",
"ponencia"=>"Salud, cultura y entretenimiento: énfasis en la calidad educativa integral.",
"bandera"=>"BanderaEcuador.png",
"conferencista"=>"MSc. Jenny Margarita Valverde Medina.",
"coautor1"=>"",
"coautor2"=>"",
"coautor3"=>"",
"universidad"=>"Universidad Técnica Luis Vargas Torres.","video"=> array("link"=>"https://www.youtube.com/watch?v=Pd6UkZMCmeA&list=PLe-FpXijp6_oWnRjKNc9ekdDIltItzmPn&index=14", "icono"=>"images/video.png"),
"diapositiva"=> array("link"=>"#", "icono"=>"images/nodiapositiva.png")),

array(
"foto"=>"CruelSiguenzaJoseph.png",
"ponencia"=>"Vinculación comunitaria desde la  Ingeniería Química. Un caso de estudio. Calidad de agua en la parroquia la Libertad de Timbre, Esmeraldas.",
"bandera"=>"BanderaEcuador.png",
"conferencista"=>"MSc. Joseph Cruel Siguenza.",
"coautor1"=>"MSc. Carla Bernal Villavicencio.",
"coautor2"=>"Ing. Juan Taporante Morales.",
"coautor3"=>"",
"universidad"=>"Universidad Técnica Luis Vargas Torres.","video"=> array("link"=>"https://youtu.be/z_REFDeoS-o", "icono"=>"images/video.png"),
"diapositiva"=> array("link"=>"#", "icono"=>"images/nodiapositiva.png")),





array(
"foto"=>"HurtadoToral.png",
"ponencia"=>"Interculturalidad en la educación de infantes en el Ecuador desde la perspectiva juridica hacia la pedagogía.",
"bandera"=>"BanderaEcuador.png",
"conferencista"=>"MSc. Carmen Karina Hurtado Toral.",
"coautor1"=>"MSc. Santos Geovanny Mina Bone.",
"coautor2"=>"",
"coautor3"=>"",
"universidad"=>"Universidad Técnica Luis Vargas Torres.","video"=> array("link"=>"#", "icono"=>"images/novideo.png"),
"diapositiva"=> array("link"=>"#", "icono"=>"images/nodiapositiva.png")),


array(
"foto"=>"BatallaBenavidesCeliaVerónica.png",
"ponencia"=>"Tiempos de pandemia y sus efectos en estudiantes universitarios de educación inicial al pasar de la educación presencial a la educación en línea.",
"bandera"=>"BanderaEcuador.png",
"conferencista"=>"MSc. Celia Verónica Batalla Benavides.",
"coautor1"=>"MSc. Gaby Adelaida Arroyo Preciado.",
"coautor2"=>"",
"coautor3"=>"",
"universidad"=>"Universidad Técnica Luis Vargas Torres.","video"=> array("link"=>"https://www.canva.com/design/DAEwxiszzro/IRNTQ_g49PbvRL7MvwxZpA/watch?utm_content=DAEwxiszzro&utm_campaign=designshare&utm_medium=link&utm_source=publishsharelink", "icono"=>"images/video.png"),
"diapositiva"=> array("link"=>"#", "icono"=>"images/diapositiva.png")),


array(
"foto"=>"ClavijoRobinsonIsabelVeronica.png",
"ponencia"=>"Aplicación de modelo pedagógico con enfasis en géneros musicales afroesmeraldeños subnivel inicial II. Unidad educativa Alfaro Quiñonez George.",
"bandera"=>"BanderaEcuador.png",
"conferencista"=>"MSc. Isabel Verónica Clavijo Robinson.",
"coautor1"=>"MSc. Hernan Chila Ortiz.",
"coautor2"=>"MSc. Jéssica Márquez Ramírez.",
"coautor3"=>"",
"universidad"=>"Universidad Técnica Luis Vargas Torres.","video"=> array("link"=>"https://www.canva.com/design/DAEwx270VMQ/SeMrkewiis1goHRfcpZ_LQ/watch?utm_content=DAEwx270VMQ&utm_campaign=designshare&utm_medium=link&utm_source=publishsharelink", "icono"=>"images/video.png"),
"diapositiva"=> array("link"=>"#", "icono"=>"images/nodiapositiva.png")),



array(
"foto"=>"ArroyoQuinonezVictorManuel.png",
"ponencia"=>"Contaminación de la cuenca baja del rio Esmeraldas por procesos de extracción de aceite de palma..",
"bandera"=>"BanderaEcuador.png",
"conferencista"=>"Ing. Victor Manuel Arroyo Quiñonez.",
"coautor1"=>"",
"coautor2"=>"",
"coautor3"=>"",
"universidad"=>"Universidad Técnica Luis Vargas Torres.","video"=> array("link"=>"#", "icono"=>"images/novideo.png"),
"diapositiva"=> array("link"=>"https://docs.google.com/presentation/d/1lKXa4aeuX8AYrFo3FhFRPf7I4FswLAL_/edit?usp=sharing&ouid=109171764524505005810&rtpof=true&sd=true", "icono"=>"images/diapositiva.png")),




 */







);









$max1=count($cI);
$max2=count($cN);

$max=$max1;
if($max2>$max)
{
$max=$max2;
}



$max=13;

for($i=0;$i<$max; $i++)
{

//OTROS PONENTES
  
if(isset($cI[$i]))  
{
  $foto1= $cI[$i]["foto"];
$ponencia1= $cI[$i]["ponencia"];
$bandera1=$cI[$i]["bandera"];
$conferencista1=$cI[$i]["conferencista"];
$coautor11=$cI[$i]["coautor1"];
$coautor12=$cI[$i]["coautor2"];
$coautor13=$cI[$i]["coautor3"];
$universidad1=$cI[$i]["universidad"];
$video1= $cI[$i]["video"]; 
$biografia1= $cI[$i]["biografia"]; 
$diapositiva1= $cI[$i]["diapositiva"]; 
}else{
  $foto1= "mujer.png";
$ponencia1= " ";
$bandera1="BanderaNo.png";
$conferencista1=" ";
$coautor11=" ";
$coautor12=" ";
$coautor13=" ";
$universidad1=" ";
$video1= array("link"=>"#","icono"=>"images/novideo.png"); 
$diapositiva1= array("link"=>"#","icono"=>"images/nodiapositiva.png"); 
}



if(isset($cN[$i]))  
{

$foto2= $cN[$i]["foto"];
$ponencia2= $cN[$i]["ponencia"];
$bandera2=$cN[$i]["bandera"];
$conferencista2=$cN[$i]["conferencista"];
$coautor21=$cN[$i]["coautor1"];
$coautor22=$cN[$i]["coautor2"];
$coautor23=$cN[$i]["coautor3"];
$universidad2=$cN[$i]["universidad"];
$video2= $cN[$i]["video"]; 
$diapositiva2= $cN[$i]["diapositiva"]; 
}else{
  $foto2= "mujer.png";
$ponencia2= " ";
$bandera2="BanderaNo.png";
$conferencista2=" ";
$coautor21=" ";
$coautor22=" ";
$coautor23=" ";
$universidad2=" ";
$video2= array("link"=>"#","icono"=>"images/novideo.png"); 
$diapositiva2= array("link"=>"#","icono"=>"images/nodiapositiva.png"); 
}







echo "<div style='".$estilo1."' >";

echo "<div class='img-contenedor w3-card-4' style='".$estilo2."'>";
echo "<img src='images/Conferencistas/". $foto1."' width='100%' height='100%' style='border-radius:50px;'>";
echo "<img src='images/".$bandera1."'  style='width:5%; position: absolute; margin-top: 8%;'>" ;
echo "</div>"; 
echo "<div style='".$estilo3."' >";
echo "<div style=' margin: auto;text-align: left;' >";
echo "<p style='font-size: 15px; margin:10px 0 10px 0; line-height: 20px;' >".$ponencia1."</p>";
echo "<p style='line-height: 20px;'> <br><span style='font-weight:bold ; '>".$conferencista1."</span><br><span style='font-weight:nomal ;'>".$coautor11."</span><br><span style='font-weight:nomal ;'>".$coautor12."</span><br><span style='font-weight:nomal ;color:blue; text-shadow: 1px 1px 2px green;'>".$universidad1."</span></p>"; 
echo "<a href='".$biografia1["link"]."'> <img src='".$biografia1["icono"]."' style='width:10%;'></a>"; 
echo "<a href='".$diapositiva1["link"]."'> <img src='".$diapositiva1["icono"]."' style='width:10%;'></a>"; 
echo "<a href='".$video1["link"]."'> <img src='".$video1["icono"]."' style='width:10%;'></a>"; 
echo "</div>";
echo "</div>";


echo "<div class='img-contenedor w3-card-4' style='".$estilo2."'>";
echo "<img src='images/Conferencistas/". $foto2."' width='100%' height='100%' style='border-radius:50px;'>";
echo "<img src='images/".$bandera2."'  style='width:5%; position: absolute; margin-top: 8%;'>" ;
echo "</div>"; 
echo "<div style='".$estilo3."'>";
echo "<div style=' margin: auto;text-align: left;' >";
echo "<p style='font-size: 15px; margin:10px 0 10px 0; line-height: 20px;' >".$ponencia2."</p>";
echo "<p style='line-height: 20px; '> <br><span style='font-weight:bold; '>".$conferencista2."</span><br><span style='font-weight:nomal ;'>".$coautor21."</span><br><span style='font-weight:nomal ;'>".$coautor22."</span><br><span style='font-weight:nomal ;'>".$coautor23."</span><br><span style='font-weight:nomal ; color:green; text-shadow: 1px 1px 2px green;'>".$universidad2."</span></p>"; 
echo "<a href='".$diapositiva2["link"]."'> <img src='".$diapositiva2["icono"]."' style='width:10%;'></a>"; 
echo "<a href='".$video2["link"]."'> <img src='".$video2["icono"]."' style='width:10%;'></a>"; 
echo "</div>";
echo "</div>";


echo "</div>";






}




?>























</main>
</div>






<?php

include("footer.php");
?>
</div>
