<!doctype html>
<head>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js"></script>
  <script src="../morris.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.min.js"></script>
  <script src="lib/example.js"></script>
  <link rel="stylesheet" href="lib/example.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.min.css">
  <link rel="stylesheet" href="../morris.css">
</head>
<body>
<h1>Bar charts</h1>
<div id="graph"></div>
<pre id="code" class="prettyprint linenums">

// Use Morris.Bar
<script>
Morris.Bar({
  element: 'graph',

  data: [
    {x: 'Backup ', y: 1},
    {x: 'Instalacion ', y: 1},
    {x: 'Modificacion Fa', y: 1},
    {x: 'Reclamo ', y: 10},
  ],
  xkey: 'x',
  ykeys: ['y', 'z', 'a'],
  labels: ['Y', 'Z', 'A']
}).on('click', function(i, row){
  console.log(i, row);
});
</script>
</pre>
</body>
