<?php
function OpenCon()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "db_hotel";
    $mysqli = mysqli_connect($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $mysqli->error);

    return $mysqli;
}

function CloseCon($conn)
{
    $conn->close();
}

function read() {
    $mysqli = OpenCon();
    $result = mysqli_query($mysqli, "SELECT * FROM tbl_kamar ORDER BY id DESC");
    // return  mysqli_fetch_array($result);
    return  $result;
}
