<?php
    function OpenCon()
    {
        $dbhost = "hostname";
        $dbuser = "Admin";
        $dbpass = "Password";
        $db = "database_placeholder";
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

        return $conn;
    }
?>
