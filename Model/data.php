<?php
class data {
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $db = "project";

    function __construct(){
        $this->con= mysqli_connect($this->host,$this->username,$this->password,$this->db);
        mysqli_select_db($this->con,$this->db);
    }

    function insert_user($id, $name, $password){
        mysqli_query($this->con, "insert into admin values ('$id','$name','$password')");
    }

    function viewuser(){
        $query = mysqli_query($this->con,"SELECT * FROM admin");
        while($row = mysqli_fetch_array($query)){
            $see[] = $row;

        }
        return $see;
    }

    function vieworder(){
        $query = mysqli_query($this->con,"SELECT * FROM user");
        while($row = mysqli_fetch_array($query)){
            $see[] = $row;

        }
        return $see;
    }

    function insert_kopi($id, $nama, $alamat, $email){
        mysqli_query($this->con, "insert into pesan values ('$id','$nama', '$alamat','$email')");
    }

    function delete_user($no){
        mysqli_query($this->con, "DELETE FROM admin WHERE no = '$no'");
    }

    function delete_order($no){
        mysqli_query($this->con, "DELETE FROM user WHERE no = '$no'");
    }

    function add_user($no){
        $query = mysqli_query($this->con,"SELECT * FROM user WHERE no = '$no'");
        while($row = mysqli_fetch_array($query)){
            $see[] = $row;

        }
        return $see;
    }

    function add_order($no){
        $query = mysqli_query($this->con,"SELECT * FROM user WHERE no = '$no'");
        while($row = mysqli_fetch_array($query)){
            $see[] = $row;

        }
        return $see;
    }

    function update_user($no, $nama, $password){
        mysqli_query($this->con, "UPDATE user SET id='$id', nama='$nama', password='$password' WHERE no = '$no'");
    }

    function update_order($no, $nama, $email, $berat, $alamat){
        mysqli_query($this->con, "UPDATE user SET id='$id', nama='$nama', email='$email', berat='$berat', alamat='$alamat' WHERE no = '$no'");
    }
}
?>