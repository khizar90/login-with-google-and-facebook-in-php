<?php

class Database{
   private $servername = "localhost";
   private $username = "root";
   private $password = "";
   private $dbname = "form";
    private $conn= false;
    private $mysqli= "";
    private $result= array();
    public function __construct(){
        if(!$this->conn){
            $this->mysqli = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
            $this->conn = true;
            if($this->mysqli->connect_error){
                array_push($this->result, $this->mysqli->connect_error);
                return false;
            }
        }else{
            return true;
        }
    }
    public function insert($table,$params=array()){
        if($this->tableexist($table)){
            $table_columns = implode(', ', array_keys($params));
            $table_value = implode("', '", $params);
  
            $sql = "INSERT INTO $table ($table_columns) VALUES ('$table_value')";
            if($this->mysqli->query($sql)){
                array_push($this->result, $this->mysqli->insert_id);
                return true; 
            }else{
                array_push($this->result, $this->mysqli->error);
                return false; 
            }
  
        }else{
            return false; 
        }
    }
    private function tableexist($table){
        $sql= "SHOW TABLES FROM  $this->dbname LIKE  '$table'";
        $tableInDb = $this->mysqli->query($sql);
        if($tableInDb){
            if($tableInDb->num_rows == 1){
                return true;
            
            }else{
                array_push($this->result,$table."does not exist");
                return false;

            }
        }
    }
    public function update($table,$params=array(),$where = null){
        
          if($this->tableexist($table)){
         
          $args = array();
          foreach ($params as $key => $value) {
            $args[] = "$key = '$value'"; 
          }
    
          $sql = "UPDATE $table SET " . implode(', ', $args);
          if($where != null){
            $sql .= " WHERE $where";
          }
         
          if($this->mysqli->query($sql)){
            array_push($this->result, $this->mysqli->affected_rows);
            return true; 
          }else{
            array_push($this->result, $this->mysqli->error);
            return false; 
          }
        }else{
          return false; 
        }
      }
      public function delete($table,$where = null){
       
          if($this->tableexist($table)){
          $sql = "DELETE FROM $table";  
          if($where != null){
            $sql .= " WHERE $where";
          }
          
          if($this->mysqli->query($sql)){
            array_push($this->result, $this->mysqli->affected_rows);
            return true; 
          }else{
            array_push($this->result, $this->mysqli->error);
            return false; 
          }
          
        }else{
          return false; 
        }
      }
    public function getResult(){
        $var= $this->result;
        $this->result= array();
        return $var;
    }
    public function __destruct(){
        if($this->conn){
            if($this->mysqli->close()){
                $this->conn = false;
                return true;
            }
        }else{
            return false;
    }
    }
}
?>