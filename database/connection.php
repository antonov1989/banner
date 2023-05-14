<?php

function OpenCon()
{
    $dbhost = "zc498045.mysql.tools";
    $dbuser = "zc498045_db";
    $dbpass = "kHlBrX7Y";
    $db = "zc498045_db";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
    
    return $conn;
}

function CloseCon($conn)
{
    $conn -> close();
}

?>