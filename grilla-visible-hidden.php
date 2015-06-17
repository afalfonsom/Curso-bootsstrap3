<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Grilla visible y oculto</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	
	<div class="container">
		
		<div class="row">
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 well">
				Contenido 1
			</div>

			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 well">
				Contenido 2
			</div>

			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 visible-lg well">
				Contenido 3 es visible despúes de 1200px
			</div>
		</div>

		<div class="row">
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 well">
				Contenido 1
			</div>

			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 well">
				Contenido 2
			</div>

			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 hidden-lg well">
				Contenido 3 es visible despúes de 1200px
			</div>
		</div>
	</div>

	<script type="js/jquery-1.11.2.min"></script>
	<script type="js/bootstrap"></script>
</body>
</html>