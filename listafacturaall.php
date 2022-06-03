<?php
  include('conecxiondb.php');
  $array = array();

  if($resultset = getSQLResulset("SELECT * FROM ctrl_ventas")){
        while($row = $resultset->fetch_array(MYSQLI_NUM)){
            
            $e = array();
            $e['id_ventas']= $row[3];
            $e['Nombre_producto']= $row[5];
            $e['Cantidad']= $row[6];
            $e['Precio']= $row[7];
            $e['Precio_total']= $row[8];
            array_push($array,$e);
        }
        echo json_encode($array);
  }
?>