<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<script type="text/javascript">
		function VerCodigo()
		{
			var fondo = document.getElementById('fondo');
			var caja = document.getElementById('codigo'); 

			fondo.addEventListener('change', function(){
				
				caja.value = fondo.value
			})
		}
	</script>
</head>
<body>
	
	<select name="fondo" id="fondo" onchange="VerCodigo()">
		<option value="1">Fondo Expedientes Penales</option>
		<option value="2">Fondo Expedientes Civiles</option>
		<option value="3">Fondo Expedientes Familiares</option>
	</select>

	<input type="text" name="codigo" id="codigo">
	<button type="button" id="btn1">ver codigo</button>

</body>
</html>