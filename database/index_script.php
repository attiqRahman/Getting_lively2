<?php
echo "<h2>PHP is Fun!</h2>";



    function OpenCon(){
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "91221";
        $db = "example";
        $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
        
        
        return $conn;
    }
    
    function CloseCon($conn){
        
    }
   
?>

