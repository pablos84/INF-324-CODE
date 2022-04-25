<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<li> <a href="../">FCPN</a></li>
<li> <a class="elegido">Nuevo</a></li>
<li> <a href="<?= base_url() ?>index.php/personas">Estudiante</a></li>
</ul>
</nav>
<div id="contenedor">
	<div id="contenedorcentrado">
		<div id="login">
			<form method="POST" action="<?= base_url() ?>index.php/personas/registrarg">
				<tr>CI</tr>
				<input type="number" name="CI" placeholder="Cedula de Identidad solo números">
				<tr>NOMBRE COMPLETO</tr>
				<input type="text" name="Nombre_completo" placeholder="Nombre completo">
				<tr>FECHA DE NACIMIENTO</tr>
				<input type="date" name="Fecha_de_nacimiento" placeholder="Fecha_de_nacimiento">
				<tr>DEPARTAMENTO</tr>
				<select name="departamento" placeholder="Departamento" required>
					<option value="01">La Paz</option>
					<option value="02">Oruro</option>
					<option value="03">Potosí</option>
					<option value="04">Cochabamba</option>
					<option value="05">Santa Cruz</option>
					<option value="06">Chuquisaca</option>
					<option value="07">Pando</option>
					<option value="08">Beni</option>
					<option value="09">Tarija</option>
				</select>
				<button type="submit" name="guardar">REGISTRAR</button>
			</form>
		</div>
		<div id="derecho" class="titulo"> Verifica tus datos </div>
	</div>
</div>
</body>

</html>