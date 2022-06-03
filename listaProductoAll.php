<?php
include('conecxiondb.php');
$array = array();
if($resultset=getSQLResulSet("SELECT * from productos")){
    while($row = $resultset->fetch_array(MYSQLI_NUM)){
        $p = array();
        $p['Nombre_producto'] = $row[3];
        $p['Imagen'] = $row[4];
        $p['Descripcion'] = $row[5];
        $p['Cantidad'] = $row[6];
        $p['Precio'] = $row[7];
        array_push($array,$p);
    }
    echo json_encode($array);
}
?>