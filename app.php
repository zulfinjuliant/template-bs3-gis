<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Web App GIS</title>
	
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="assets/css/boot.css">
	<link rel="stylesheet" type="text/css" href="assets/css/plus.css">
</head>
<body>
	<div id="main" style="margin-top:80px;">
		<?php include "partials/mainmenu.php";?>
		<?php include "partials/windowmap.php";?>
	</div>

	<!-- js -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>

	<!-- highchart -->
	<script src="http://code.highcharts.com/highcharts.js"></script>
	<script src="http://code.highcharts.com/modules/exporting.js"></script>
	<script src="http://highslide-software.github.io/export-csv/export-csv.js"></script>
	<script src="https://rawgithub.com/highslide-software/draggable-legend/master/draggable-legend.js"></script>

	<!-- google api -->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	<script src="https://www.google.com/jsapi"></script>

	<!-- kostum control js -->
	<script src="assets/js/control.js"></script>
</body>
</html>