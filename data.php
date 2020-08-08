<?php
header('Content-Type: applic         lation/json');
$Conexion = mysqli_connect("localhost", "root", "", "BaseDatos");

if (mysqli_connect_errno($Conexion)) {
    echo "Failed to connect to DataBase: " . mysqli_connect_error();
} else {
    /*$data_points = array();
    $result = mysqli_query($con, "SELECT * FROM plot_values"); 
    while ($row = mysqli_fetch_array($result)) {
        $point = array("valorx" => $row['x'], "valory" => $row['y']);
        array_push($data_points, $point);
    }
    echo json_encode($data_points);
    $temperaturaAireAcom= $_POST['temperaturaAireAcom'];
    $temperaturaAmb= $_POST['temperaturaAmb'];*/

    mysqli_select_db($Conexion, "BaseDatos");
    mysqli_query($Conexion, "SET NAME 'utf8'");
    $Temperatura_Amb = $_POST['TemperaturaAireAcom'];
	$Temperatura_AireAcom = $_POST['TemperaturaAmb'];

	mysqli_query($Conexion, "INSERT INTO 'tabla' ('temperaturaAireAcom', 'temperaturaAmb', 'fecha') VALUES ('$Temperatura_Amb', '$Temperatura_AireAcom', CURRENT_TIMESTAMP)");
	echo "Datos ingresados satisfactoriamente.";
	mysqli_close($Conexion);

}
?>