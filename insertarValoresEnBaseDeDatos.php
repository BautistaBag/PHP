 <?
echo "<form action=formulario_bauti.php name=frm method=post>";
echo "<input type=hidden name=ingresar value='$ingresar'>";
echo "<input type=hidden name=id value='$id'>";

//INSERTAR VALORES A UNA TABLA DE LA BASE DE DATOS

//conecto con el servidor local
$link = mysql_connect("localhost" , "root" , "" );
//me posiciono en el nombre de la tabla
$base = mysql_select_db ("nombreDeLaBaseDeDatos");
//verifico q no se repita el dni dos veces, asi no permito q se registren repetidos
$query122 = "SELECT * FROM nombreDeLaTabla WHERE (dni = '$dni') LIMIT 1";
$result122 = mysql_query ($query122);
$ya_esta_inscripto = mysql_num_rows($result122);
//si no esta repetido el dni...

if ($ya_esta_inscripto == 0){
	if(($nombre <>"") or  ($apellido <>"") ){
//agrego los datos cargados a la tabla formulario_prueba
$link = mysql_connect("localhost" , "root" , "" );
$base = mysql_select_db ("nombreDeLaBaseDeDatos");
$query2 =  "INSERT INTO nombreDeLaTabla  (nombre,apellido,dni,email,telefono,localidad,cod_postal,provincia) VALUES ('$nombre','$apellido','$dni','$email','$telefono','$localidad','$cod_postal','$prov')";
$result2 = mysql_query ( $query2);

;}else {
"campos ingresados vacios";
};
;};
$link = mysql_connect("localhost" , "root" , "" );
$base = mysql_select_db ("nombreDeLaBaseDeDatos");
$query22 =  "SELECT * FROM nombreDeLaTabla WHERE id = '$id' LIMIT 1";
$result22 = mysql_query ( $query22);
while($row = mysql_fetch_array($result22))
{
	//creamos una variable nombre que tome el valor q tiene en la posicion nombre del arreglo row. Lo mismo con las demas variables
	$nombre = $row["nombre"];
	$apellido = $row["apellido"];
	$dni = $row["dni"];
	$email = $row["email"];
	$telefono = $row["telefono"];
	$localidad = $row["localidad"];
	$cod_postal = $row["cod_postal"];
	$prov = $row["prov"];
}	


 ?>
 <table border="0" width="80%" cellspacing="0" cellpadding="0" bgcolor="#FFFFF" style='border: 1px dotted #585858;'>
				<tr>
					<td>
					<blockquote>
					<p align=center><br><font face="Verdana" size="2"><b>Datos personales</b></font></p>
					
					<table>	
					<tr><td><font face="Verdana" size="2">Nombre:</td><td><input type="text" name="nombre" value='<?echo $nombre;?>' id="a1" style="width:500;"  autofocus onkeyup="saltar(event,'a2')"></td></tr>
					<tr><td><font face="Verdana" size="2">Apellido:</td><td><input type="text" name="apellido" value='<?echo $apellido;?>' id="a2" style="width:500;"  autofocus onkeyup="saltar(event,'a3')"></td></tr>
					<tr><td><font face="Verdana" size="2">DNI:</td><td><input type="text" name="dni" value='<?echo $dni;?>' id="a3" style="width:500;"  autofocus onkeyup="saltar(event,'a4')"></td></tr>
					<tr><td><font face="Verdana" size="2">E-mail:</td><td><input type="text" name="email" value='<?echo $email;?>' id="a4" style="width:500;"  autofocus onkeyup="saltar(event,'a5')"></td></tr>
					<tr><td><font face="Verdana" size="2">Telefono:</td><td><input type="text" name="telefono" value='<?echo $telefono;?>' id="a5" style="width:500;"  autofocus onkeyup="saltar(event,'a6')"></td></tr>
					
					<tr><td><font face="Verdana" size="2">Localidad:</td><td><input type="text" name="localidad" value='<?echo $localidad;?>' id="a6" style="width:500;"  autofocus onkeyup="saltar(event,'a7')"></td></tr>
					<tr><td><font face="Verdana" size="2">Cod. Postal:</td><td><input type="text" name="cod_postal" value='<?echo $cod_postal;?>' id="a7" style="width:500;"  autofocus onkeyup="saltar(event,'a8')"></td></tr>
					<tr><td><font face="Verdana" size="2">Provincia:</td><td>
<!--					A PARTIR DE ACA, HASTA LA LINE 86 ES COMO SE CONECTA Y SE HACE UN LISTADO DE OPCIONES PARA PROVINCIA(CONECTADO A LA BASE DE DATOS)-->
					<select name="prov" id='a8'>
					<?
$link = mysql_connect("localhost" , "root" , "" );
$base = mysql_select_db ("nombreDeOtraBaseDeDatos");
$query = "SELECT nombre FROM nombreDeLaTabla ORDER BY 'nombre'";
$result1 = mysql_query ($query);

while($row3 = mysql_fetch_array($result1))
{
//	PRIMERO LE ASIGNO EL VALOR QUE TIENE EN LA POSICION NOMBRE DEL ARREGLO ROW3
	echo "<option value='".$row3["nombre"]."'>".$row3["nombre"]." </option>";
}
	?>
<!--					hago el boton cargar-->
					</select>
					</td></tr>
					<tr><td colspan="2" align=center><input type="button" value="Cargar Datos" onclick="ingresame()"></td></tr>
					</tr>
					
						</table>	
						
						
						

<script>
function ingresame(){

document.frm.ingresar.value = '1';
document.frm.submit();

}

</script>
