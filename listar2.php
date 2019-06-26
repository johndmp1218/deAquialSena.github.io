<?php 
require_once "conexion_mysql.php";
$query="SELECT *FROM t_rutas";
$r=mysqli_query($con,$query) or trigger_error("Error:".mysqli_error($con));


echo "	<table border='1'>"; 
echo "<br/>";
	echo "<br/>";
	echo "<tr>";
	


while($datos =mysqli_fetch_array($r)){

	echo "<tr>";
	echo "<th>EMPRESA </th>";
	echo "<td>".$datos['RUT_NOMBRE']."</td>";
	echo "<tr>";
	echo "<th>RUTA</th>";
	echo "<td>".$datos['RUT_DESCRIPCION']."</td>";
	
	echo "<tr>";
	echo "<td>
</td>";
	echo "<td>
	<a href='".$datos['RUT_NOMBRE'].".html?id=".$datos['RUT_ID']."'>VER RUTA</a></td>";
	echo "<tr>";
	echo "<td><br/></td>";
	echo "<td><br/></td>";
	echo "<tr>";



}
echo"</table>";

?>