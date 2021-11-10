$accion = "Responder mensaje";
//$textoaccion = $textomail;

$para = "7-1069";

//el idmsj es para verificar si es el primer mensaje(valor 0) o varios mensajes(valor = n)
if ( $idmsg <> "" ){
include("conexion-rendi.php");
//busco el ultimo mensaje que se enviaron
$query1 =  "SELECT * FROM msg WHERE id = '$idmsg' OR nro = '$idmsg' ORDER BY id DESC LIMIT 1  " ;
$result1 = mysql_query ( $query1) ;
while($row = mysql_fetch_array($result1))
{$para = $row["gestor"];
$para2 = $row["para"];
}
;};
//si el emisor del mensaje es distinto al gestor de la cuenta(osea, si no se está enviando a la misma persona) se inserta el mensaje en la base de datos
if($para <> $idgestor){
include("conexion-rendi.php");
$query44 = "INSERT INTO msg ( nro, obs, adj, gestor, para, fecha, leido, asunto  ) VALUES ( '$idmsg', '$textomail', '', '$idgestor', '$para', '".date("c")."', '1','$asunto'   ); ";
$result44 = mysql_query ( $query44);	
}else{
//si NO son distintos(sería el caso en el que el emisor quiere enviar varios mensajes al mismo receptor) por lo tanto cargo los datos en la bd para ese caso
	include("conexion-rendi.php");
$query44 = "INSERT INTO msg ( nro, obs, adj, gestor, para, fecha, leido, asunto  ) VALUES ( '$idmsg', '$textomail', '', '$idgestor', '$para2', '".date("c")."', '1','$asunto'   ); ";
$result44 = mysql_query ( $query44);
	
};



include("conexion-rendi.php");
$query1 =  "SELECT * FROM msg ORDER BY id DESC LIMIT 1  " ;
$result1 = mysql_query ( $query1) ;
while($row = mysql_fetch_array($result1))
{$idnp = $row["id"];}

if ( $adj_name <> "" ){

$info = new SplFileInfo($adj_name);
$exte = $info->getExtension();	
	
if (copy ($adj,"uploads/rendi_".$idnp.".".$exte)){print ("aaa");}else{print ("bb");}

$adj_name = "uploads/rendi_".$idnp.".".$exte;

include("conexion-rendi.php");
$query44 = " UPDATE msg SET adj = '$adj_name' WHERE id = '".$idnp."' ";
$result44 = mysql_query ( $query44);

;};

$accion = "Responder mensaje";
//$textoaccion = $textomail;
include("conexion-rendi.php");
$query44 = "INSERT INTO acciones_as ( nro, accion, texto, fecha, gestor ) VALUES ( '$idnp', '$accion', '$textomail' , '".date("c")."', '$idgestor' ); ";
$result44 = mysql_query ( $query44);


echo "<script>";
echo "window.open( 'msg-b.php' , '_top' )";
echo "</script>";
