<?php
    function OpenCon()
    {
        $dbhost = "107.180.1.16";
        $dbuser = "group8";
        $dbpass = "!!Cis440";
        $db = "test";

        $connection = new mysqli($dbhost,$dbuser,$dbpass,$db) or die("Connect failed: %s\n". $connection -> error);

        return $connection;
    }
    
    function CloseCon($connection)
    {
        $connection -> close();
    }
?>