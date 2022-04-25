<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<li> <a href="../">FCPN</a></li>
<li> <a href="<?= base_url() ?>index.php/personas/registrar">Nuevo</a></li>
<li> <a class="elegido">Estudiante</a></li>
</ul>
</nav>

<?php
foreach ($filas as $fila) { ?>
	<div id="contenedor">
		<div id="contenedorcentrado">
			<div id="login">
				<form method="GET" action="<?= base_url() ?>index.php/personas/editarg">
				<a >cedua de </a>	
				<input type="text" name="id" value="<?php echo $fila->id; ?>">
					<input type="text" name="CI" value="<?php echo $fila->CI; ?>">
					<input type="text" name="Nombre_completo" value="<?php echo $fila->Nombre_completo; ?>">
					<input type="date" name="Fecha_de_nacimiento" value="<?php echo $fila->Fecha_de_nacimiento; ?>">
					<input type=" text" name="departamento" value="<?php echo $fila->departamento; ?>">
					<button type="submit" name="guardar">GUARDAR</button>
				</form>
			</div>
			<div id="derecho" class="titulo"> Verifica tus datos </div>
		</div>
	</div>
<?php } ?>

</body>

</html>