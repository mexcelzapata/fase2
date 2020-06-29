<?php include_once("header.php")?>
<center>
<h1>LOGIN PARA VENDEDORES</h1>
<form action='redirect.php' method='POST'>
Ingrese su nombre de usuario
<input type='text' name='usuario' value='NULL'/>
Ingrese su contraseña
<input type='password' name='contraseña' value='NULL'/>
<input type='submit' value='ingresar'/>
</form>
<br>
<h2> registrate</h2>
<form action='registro.php' method='POST'>
Ingrese un nombre de usuario
<input type='text' name='usuario' value='NULL'/>
Ingrese una contraseña
<input type='password' name='contraseña' value='NULL'/>
<input type='submit' value='ingresar'/>
</form>
<?php include_once("footer.php")?>
