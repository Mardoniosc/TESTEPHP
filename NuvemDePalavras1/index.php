<?php ?>
<!DOCTYPE html>
<html>
  <head>
    <title>TagCanvas example</title>
    <!-- [if lt IE 9]><script type="text/javascript" src="tagcanvas.min.js"></script><![endif] -->
    <script src="../NuvemDePalavras1/tagcanvas.min.js" type="text/javascript"></script>
    
    <script type="text/javascript">
      window.onload = function() {
        try {
          TagCanvas.Start('myCanvas','tags',{
            textColour: '#ff0000',
            outlineColour: '#ff00ff',
            reverse: true,
            depth: 0.8,
            maxSpeed: 0.05
          });
        } catch(e) {
          document.getElementById('myCanvasContainer').style.display = 'none';
        }
      };
    </script>
  </head>
  <body>
    <h1>Tag Nuvens de palavras</h1>
    <div id="myCanvasContainer">
      <canvas width="300" height="300" id="myCanvas">
        <p>Anything in here will be replaced on browsers that support the canvas element</p>
      </canvas>
    </div>
    <div id="tags">
      <ul>
        <li><a href="http://www.google.com" target="_blank">Google</a></li>
        <li><a href="/fish">Fish</a></li>
        <li><a href="/chips">Chips</a></li>
        <li><a href="/chips">Chips</a></li>
        <li><a href="/chips">Chips</a></li>
        <li><a href="/chips">Chips</a></li>
        <li><a href="/chips">Mardonio</a></li>
        <li><a href="/chips">Mardonio</a></li>
        <li><a href="/chips">Mardonio</a></li>
        <li><a href="/chips">Mardonio</a></li>
        <li><a href="/chips">Mardonio</a></li>
        <li><a href="/salt">Salt</a></li>
        <li><a href="/salt">Salt</a></li>
        <li><a href="/salt">Salt</a></li>
        <li><a href="/salt">Salt</a></li>
        <li><a href="/salt">Salt</a></li>
        <li><a href="/salt">Salt</a></li>
        <li><a href="/salt">Salt</a></li>
        <li><a href="/salt">Salt</a></li>
        <li><a href="/salt">Salt</a></li>
        <li><a href="/salt">Salt</a></li>
        <li><a href="/salt">Salt</a></li>
        <li><a href="/vinegar">Vinegar</a></li>
      </ul>
    </div>
  </body>
</html>
<?php ?>