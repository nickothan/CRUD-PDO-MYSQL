<h1>EDITAR USUARIO</h1>

<form method="post" >
	<input type="text" value="Usuario" name="usuario" required>
	<input type="text" value="Contraseña" name="password" required>
	<input type="email" value="Email" name="email" required>
	<input type="submit" value="Actualizar">
</form>
<?php
 $editarUsuario= new MvcController();
 $editarUsuario-> editarUsuarioController();
?>