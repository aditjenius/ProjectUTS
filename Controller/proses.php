<?php
include "../Model/data.php";
$db = new data();
$aksi = $_GET ['aksi'];
if($aksi=="insert_user"){
    $nama = $_POST['name'];
    $password = $_POST['password'];
$db -> insert_user($nama, $password);
header('location:../view/menu.php');
}
else if($aksi == "login"){
    foreach($db->viewuser() as $a){
        if($a['nama']==$_POST['name'] && $a['password']==$_POST['password']){
            header('location:../view/menu.php');
            break;
        }else if($_POST['name']=="admin" && $_POST['password']=="admin"){
            header('location:../view/admin/admin.php');
        } else {
            header('location:../view/login.php');
        }

    }
}
else if($aksi=="regis"){
    $nama = $_POST['name'];
    $password = $_POST['password'];
$db -> insert_user($id, $nama, $password);
header('location:../index.php');
}

else if($aksi == "loginapi"){
    header('location:../view/menu.php');
}

else if($aksi == "order"){
    $id = $_POST['id'];
    $nama = $_POST['name'];
    $alamat = $_POST['address'];
    $bubuk = $_POST['powder'];
    $db -> insert_kopi($id, $nama, $alamat, $bubuk);
    header('location:../view/waiting.php');
}

else if ($aksi == "delete_user"){
    $id = $_GET['id'];
    $db-> delete_user ($id);
    header('location:../view/admin/admin.php');
}

else if ($aksi == "delete_order"){
    $id = $_GET['id'];
    $db-> delete_order ($id);
    header('location:../view/admin/admin.php');
}

else if($aksi == "update_user"){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $db->update_user($id, $nama, $password);
    header('location:../view/admin/admin.php');
}

else if($aksi == "update_order"){
    $id = $_POST['id'];
    $nama = $_POST['name'];
    $alamat = $_POST['address'];
    $bubuk = $_POST['powder'];
    $db->update_order($id, $nama, $alamat, $bubuk);
    header('location:../view/admin/admin.php');
}
?>