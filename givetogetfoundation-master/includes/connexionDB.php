<?php
        $serverName = "localhost";
        $userName = "root";
        $password = "";
        $dbName = "givetogetfoundation";
        
        //create connection
        $connexiondb = mysqli_connect($serverName, $userName, $password,$dbName) or 
        die ('Unable to connect. Check your connection parameters.<br>'. mysqli_connect_error());

        //select a database
        mysqli_select_db($connexiondb,$dbName) or die( mysqli_error($connexiondb) );

?>
