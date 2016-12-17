<?php
/*
* Model to get membership details from the database
*/

class Members extends Database{
    public function __construct(){
       
    }
    public function get_members(){
        $conn =  $this->connect();
        $sql = 'SELECT * FROM info';
        $stmt = $conn->query($sql); 
        $data =$stmt->fetchall();
       return $data;
    }
    
  public function get_member($id){
        $conn =  $this->connect();
        $sql = 'SELECT * FROM info WHERE id='.$id;
        $stmt = $conn->query($sql); 
        $data =$stmt->fetchall();
       return $data;
    }
    
    
}