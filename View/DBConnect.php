<?php

function OpenCon()
{
    $dbsettings = getSettings();
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "makelaar";
    $conn = new mysqli($dbsettings[0], $dbsettings[1], $dbsettings[2], $dbsettings[3]) or die("Connect failed: %s\n" . $conn->error);
//    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);
//    echo '<script type="text/javascript">alert("Database connected to database:' . $db . '")</script>';
    return $conn;
}

function CloseCon($conn)
{
    $conn->close();
}

function getSettings()
{
    return array('localhost', 'root', '', 'makelaar');
}

?>