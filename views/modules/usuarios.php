<h1>USUARIOS</h1>
	<table border="1">
		<thead>
			<tr>
				<th>Usuario</th>
				<th>Contraseña</th>
				<th>Email</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php
	 $ingreso = new MvcController();
	 $ingreso-> vistaUsuariosController();

	 if(isset($_GET["action"])){
		 if($_GET["action"]=="fallo"){
			 echo "fallo al ingresar";
		 }
	 }
	?>
		</tbody>
	</table>

	