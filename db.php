<?php
$serverName = "localhost";
    $connectionInfo = array( 'Database'=>'chat', 'UID'=>'Jenn', 'PWD'=>'contraseña');
    $cnx = sqlsrv_connect($serverName, $connectionInfo);
    date_default_timezone_set('America/Mexico_City');


function formatearfecha($fecha){
    return date('g:i a', strtotime($fecha));
}


?>