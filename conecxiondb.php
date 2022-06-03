<?php
    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PASS','');
    define('DB_NAME','mercaaqui');
     
    
    header('Content-type: text/html;charset-utf-8');
    
    function ejecutarSQLComand($comando){

        $mysqi =  mysqli_connect(BD_HOST, DB_USER, DB_PASS, DB_NAME) or die('unable to connecrt to db');
        mysqli_set_charset($mysqli,'utf8');
        
        if($mysqli->connect_error){
            printf("Connect failed: %s\n".$mysqli->connect_error);
            exit();
        }
        if($mysqli->multi_query($comando)){
            if($resultset = $mysqli->store_result()){
                while ($row = $resultset->fetch_array(MYSQLI_BOTH)){

                }
                $resultset->free();
            }
        }
        $mysqli->close();
    }

function getSQLResulSet($comando){
    $mysqli = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die('unable to connecrt to db');
    mysqli_set_charset($mysqli,'utf8');
    if($mysqli->connect_error){
        printf("Connect failed: %s\n".$mysqli->connect_error);
        exit();
    }
    if ($mysqli->multi_query($comando)) {
        return $mysqli->store_result();
    }
    $mysqli->close();
}
