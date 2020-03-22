<!DOCTYPE html>
<html>
	<head>
		<title>Pong Example</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
		<style>
			canvas{
				border: solid
			}
		</style>
		
	</head>
	<body>
		<div class="container">
			<div class="row text-center">
				<h1>Ping Pong (PRACTICA JS)</h1>
			</div>
			<div class="row text-center">
				<h2>
					<span class="label label-primary" >Equipo A</span>
					<label id="teamA">0</label>
					-
					<label id="teamB">0</label>
					<span class="label label-danger" >Equipo B</span>
				</h2>
			</div>
			<div class="row text-center">
				<canvas id="canvas"></canvas>
			</div>
		</div>
		<script src="js/practica.js"></script>
	</body>
</html>