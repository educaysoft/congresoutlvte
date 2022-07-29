<div id="fsaludo" style="  border-top: 2px solid green; background-color:gray;   width: 100%; margin:0px auto; margin-bottom: 100px; padding-bottom: 140px; display: flex; flex-direction:column ; ">
<div  style=" color:white; padding: 10px; height: 500px;">

<iframe id="MyVideo" src="https://www.youtube.com/embed/2u7BmM9Fv-8?autoplay=1&mute=1&controls=0&loop=1&playlist=2u7BmM9Fv-8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen   style="border: 0; width: 100%; height: 100%"></iframe>



<div class="content" >
  <h1>inBlue Editorial</h1>
  <p>Es una empresa de servicios para revisión, edición, publicación, venta de libros digitales, publicación de artículos y revisión de pares.</p>

</div>



</div>
</div>



<script>


// +++ Create functions that post either play or pause +++
// Match the protocol of the of the parent's page
var theProtocol = location.protocol,
  theURL = theProtocol + "//players.brightcove.net",
  // Get a reference to the iframe element
  iframeTag = document.querySelector("iframe"),
  // Retrieve window object needed for postMessage
  win = iframeTag.contentWindow;
console.log('theURL:', theURL);
console.log('win:', win);

function playVideo() {
  // Post message passing 'playVideo' as the data
  win.postMessage("playVideo", theURL);
}

function pauseVideo() {
  // Post message passing 'pauseVideo' as the data
  win.postMessage("pauseVideo", theURL);
}
</script>

