<?php

class Connection{
    public $host = "localhost";
    public $user = "root";
    public $password = "";
    public $db_name = "testing";
    public $conn;

    public function __construct(){
        $this->conn = mysqli_connect($this->host,$this->user,$this->password,$this->db_name);
    }
}
class Register extends Connection{
    public function registration($name,$email){

        // $dublicate = mysqli_query($this->conn, "SELECT * FROM fbgoogle WHERE email= '$email'");
        // if(mysqli_num_rows($dublicate) > 0){
        //     return 10;
        // }
            $query="INSERT INTO fbgoogle VALUES ('','$name','$email')";
            mysqli_query($this->conn, $query);
            return 1;
}
}
// class Loginn extends Connection{
//     public $id;
//     public function login($usernameemail ,$password ){
//         $result = mysqli_query($this->conn, "SELECT * FROM admin WHERE uname='$usernameemail' or email='$usernameemail'");
//         $row = mysqli_fetch_assoc($result);


//         if(mysqli_num_rows($result) > 0){
//             if($password == $row["pass"]){
//                 $this->id = $row["id"];
//                 return 1;
//             }else{
//                 return 10;
//             }
//         }
//         else{
//             return 100;
//         }
//     }
//     public function idUser(){
//         return $this->id;
//     }
// }

// class Select extends Connection{
//     public function selectUserById($id){
//         $result = mysqli_query($this->conn, "SELECT * FROM admin WHERE id=$id");
//         return mysqli_fetch_assoc($result);
//     }
// }

?>