<?php require 'TestBar.php';?>
<!doctype html>
<head>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js"></script>
  <script src="../bower_components/morrisjs/morris.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.min.js"></script>
  <script src="../bower_components/morrisjs/lib/example.js"></script>
  <link rel="stylesheet" href="../bower_components/morrisjs/lib/example.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.min.css">
  <link rel="stylesheet" href="../bower_components/morrisjs/morris.css">
</head>
<body>
<h1>Bar charts</h1>
<div id="davidfirst" style="height: 250px;"> </div>
<h1>Bar Aera</h1>
<div id="morris-area-chart" style="height: 250px;"> </div>
<h1>Donut</h1>
<div id="morris-donut-chart" style="height: 250px;"> </div>
<script>
    Morris.Bar({
      element: 'davidfirst',
      data: [
        <?php Imprimir1();?>
      ],
      xkey: ['x'],
      ykeys: ['y'],
      labels: ['Y']
    }).on('click', function(i, row){
      console.log(i, row);
    });

    Morris.Line({
        element: 'morris-area-chart',
        behaveLikeLine: true,
        data: [
        <?php GraficaArea();?>    
        ],
        xkey: 'period',
        ykeys: ['Alto','Bajo', 'Critico', 'Medio'],
        labels: ['Alto', 'Bajo','Critico', 'Medio'],
        xLabels: "month",
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });
    
    Morris.Donut({
        element: 'morris-donut-chart',
        data: [
        <?php GraficaDona();?>    
        ],
        resize: true
    });
</script>

<pre id="code" class="prettyprint linenums">

// Use Morris.Bar

</pre>
</body>
