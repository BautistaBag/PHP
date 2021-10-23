<?
include("estilos.php");
echo "<form  action='bauFormulario.php' method='get'>";

//FORMULARIO DATOS PERSONALES CONECTADO A UNA BASE DE DATOS


echo "<form>";
echo "<fieldset>";
echo "<legend style='text-align:center'>Datos Personales </legend>";
echo "<table>";
echo "<label for='idPersona' >Id Persona: </label>";
echo "<input type ='text' id='idPersona' name='idPersona' readonly='true' value='100' disable='true'/><br>";

echo "<br>";


echo "<label for ='nombre'>Nombre: </label>";
//el input de la linea 18 en placeholder es un mensaje q aparece en el cuadro de texto para orientar o facilitar q poner en el texto al usuario; required= true hace que sea obligatorio completar el campo(en este caso, campo nombre)
echo "<input type='text' id='nombre' name = 'nombre'  required='true'/><br>";
echo "<br>";
echo "<label for ='nombre'>Apellido: </label>";
echo "<input type='text' id='apellido' name = 'apellido'   required='true'/><br>";

echo "<br>";

echo "<label for ='sexo'>Sexo: </label><br>";
echo "<input type='radio' id='sexo' name='sexo' value = 'hombre'/>";  
echo "<label for='sexo'>Hombre</label>"; 
echo "<input type='radio' id='sexo' name='sexo' value = 'mujer'/>";  
echo "<label for='sexo'>Mujer</label>";

echo "<br>";

echo "<br>";

echo "<label for='idioma'>Idioma: </label><br>";
echo "<br>";

echo "<label for='idioma'>Español</label>";
echo "<input type='checkbox'  name='idioma1' value='español'/>";
echo "<br>";
echo "<label for='idioma'>Ingles</label>";
echo "<input type='checkbox'' name='idioma2' value='ingles'/>";
echo "<br>";
echo "<label for='idioma'>Italiano</label>";
echo "<input type='checkbox' name='idioma3' value='italiano'/>";
echo "<br>";
echo "<label for='idioma'>Aleman</label>";
echo "<input type='checkbox'  name='idioma4' value='aleman'/>";

echo "<br>";
echo "<br>";

echo "<label for='deporte' >Deporte: </label>";


echo "<select name='deporte'>";

echo "<option>Seleccione un deporte</option>";

echo "<option>Futbol</option>";

echo "<option>Críquet</option>";

echo "<option>Básquetbol</option>";

echo "<option>Hockey</option>";

echo "<option>Tenis</option>";

echo "</select>";

echo "<br>";
echo "<br>";
echo "<label for='comentario'>Comentario: </label>";
echo "<br>";
echo "<textarea name = 'comentario' rows='2' cols='30'></textarea>";
echo "<br>";
echo "<br>";


echo "<table>";


echo "<input type='submit' value='Enviar'/>";
//el input de abajo me envia lo q tenga en el campo nombre, sin validar de que este lleno o no dicho campo
echo "<input type='submit' name = 'submit' formnovalidate='formnovalidate' value='Enviar sin validar'/>";


echo "<input type='reset' value='Restablecer'>";

echo "</fieldset>";
echo "</form>";



//conecto con el servidor local
$link = mysql_connect("localhost" , "root" , "" );
//me posiciono en el nombre de la tabla
$base = mysql_select_db ("tmp");
$query = "SELECT apellido FROM bauFormulario WHERE (apellido = '$apellido') AND (nombre = '$nombre')   LIMIT 1";
$result = mysql_query ($query);
$varios_apellidos = mysql_num_rows($result);

//VERIFICO SI SE INGRESÓ MAS DE UN IDIOMA, DE SER ASÍ CONCATENO TODOS LOS IDIOMAS QUE HALLA MARCADO

if ($idioma1 <> ""){$idioma = $idioma."|".$idioma1;};
if ($idioma2 <> ""){$idioma = $idioma."|".$idioma2;};
if ($idioma3 <> ""){$idioma = $idioma."|".$idioma3;};
if ($idioma4 <> ""){$idioma = $idioma."|".$idioma4;};

//VERIFICO QUE EL CAMPO APELLIDO NO ESTÉ VACIO

if($varios_apellidos == 0){

//INSERTO LOS DATOS EN LA BASE DE DATOS

	$link = mysql_connect("localhost" , "root" , "" );
	$base = mysql_select_db ("tmp");
	$query2 = "INSERT INTO bauFormulario  (nombre,apellido,sexo,idioma,deporte,comentario) VALUES ('$nombre','$apellido','$sexo','$idioma','$deporte','$comentario')";
	$result2 = mysql_query ($query2);
};

//echo $query2;

?>
