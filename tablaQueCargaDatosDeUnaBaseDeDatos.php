<?

//Pagina que muestra una tabla (como columna nombre apellido dni y email) cargados de una base de datos


echo "<form  action='ponerNombrePagina.php' method='post'>";
echo "<h1 style = 'background-color:#1C69CD' align=center>Datos de usuario</h1>";



echo "<table  border='0' width='80%' cellspacing='0' cellpadding='0' bgcolor='#FFFFF' style='border: 1px dotted #585858;'>";

echo "<th>Nombre</th>";
echo "<th>Apellido</th>";
echo "<th>DNI</th>";
echo "<th>EMAIL</th>";

$link = mysql_connect("localhost" , "root" , "" );
$base = mysql_select_db ("nombreCarpetaBaseDeDatos");
$query1 =  "SELECT * FROM nombreTabla ORDER BY nombre";
$result1 = mysql_query ( $query1);
while($row = mysql_fetch_array($result1))
{
echo "<tr>";

echo "<td>".$row['nombre']."</td>";

echo "<td>".$row['apellido']."</td>";

echo "<td>".$row['dni']."</td>";

echo "<td>".$row['email']."</td>";
echo "</tr>";
}


echo "</div>";
echo "</form>";

?>
