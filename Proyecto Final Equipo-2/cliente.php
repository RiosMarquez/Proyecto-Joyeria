<?php include("header.php")?>
<html>
<link rel="stylesheet" type="text/css" href="estilo.css">

<body>
	<div class="container">
		<form action="#" method="post">
			<table >
				<tr>
					<td>Nombre completo </td>
					<td><input type="text" name="nombre"></td>
				</tr>
				<tr>
					<td>Fecha de nacimiento</td>
					<td> <input type="text" name="fecha_nac"></td>
				</tr>
				<tr>
					<td>Num. Telefono</td>
					<td> <input type="text" name="telefono"></td>
				</tr>
				<tr>
					<td>Direccion</td>
					<td><input type="text" name="direccion"></td>
				</tr>
				<tr>
					<td>Correo</td>
					<td><input type="text" name="Correo"></td>
				</tr>
				<tr>
					<td>Contraseña</td>
					<td><input type="password" name="contraseña"></td>
				</tr>
				<tr>
					<td> Tipo de compra </td>
					<td> <select name="caso">
								<option>Mayoreo</option>
								<option>Menudeo</option>
						</select>
					</td>
				</tr>
			</table>
		</form>		
	</div>
	<?php include("footer.php")?>
</body>
</html>

