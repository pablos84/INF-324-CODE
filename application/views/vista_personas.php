<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<li> <a href="../">FCPN</a></li>
<li> <a href="<?= base_url() ?>index.php/personas/registrar">Nuevo</a></li>
<li> <a class="elegido">Estudiante</a></li>
</ul>
</nav>

<table>
	<tr>
		<td>CI</td>
		<td>NOMBRE COMPLETO</td>
		<td>FECHA DE NACIMIENTO</td>
		<td>DEPARTAMENTO</td>
		<td>OPERACIONES</td>
	</tr>
	<?php

	foreach ($filas as $fila) {
		echo "<tr>";
		echo "<td>$fila->CI</td>";
		echo "<td>$fila->Nombre_completo</td>";
		echo "<td>$fila->Fecha_de_nacimiento</td>";
		echo "<td>$fila->departamento</td>";
		echo "<td>";
		echo "<a href='personas/editar?id=" . $fila->id . "'>Editar</a>";
		echo "<a> </a>";
		echo "<a href='personas/eliminar?id=" . $fila->id . "'>Eliminar</a>";
		echo "</td>";
		echo "</tr>";
	}
	?>
</table>
</body>

</html>