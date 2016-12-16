<?php
try {
    $serverName = "HUNGNV-PC";
    $uid = "sa";
    $pwd = "vanhung";
    $database = "test";
    $conn = new PDO("sqlsrv:server=$serverName;database=$database", $uid, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (Exception $e) {
    echo $e->getMessage();
}





