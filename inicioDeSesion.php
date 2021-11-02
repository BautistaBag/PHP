<?
echo "<div class='contenedor'>";
echo "<h1>Login</h1>";
echo "<form id='forma' 	name='forma' method = 'POST'";
	echo "<div class='elemento'>";
		echo "<label for = 'usuario'>Usuario</label>";
		echo "<input type='text' id='usuario' name='usuario' required='true'/></div>";

	echo "<div class='elemento'>";
		echo "<label for = 'password'>Password</label>";
		echo "<input type='password' id='password' name='password' required='true'/></div>";
	echo "<div class='elemento'>";
		echo"<input type='submit' value='enviar'/></div>";
		
echo "</form>";
		
?>
