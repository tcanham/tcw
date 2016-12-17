<?php
/*
* Class to connect to a database
*/

class database {
    public function __construct(){
    }
        public function connect(){
            try {
            $conn = new PDO("mysql:host=".HOST.";dbname=".NAME, USER, PASS);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        catch(PDOException $e)
            {
            echo "Connection failed: " . $e->getMessage();
            }
         return $conn;   
    } 
}