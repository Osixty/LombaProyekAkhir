<?php
    include './koneksi.php';

    $id = $_GET['formulir'];

    $sql = "DELETE FROM formulir WHERE id= '$id' ";

    if($conn->query($sql)===TRUE){
        header('location:tampil.php');
        
    }
    else{
        echo "Error :" .$sql. "<br>" . $conn->error;
    }

    $conn->close();



?>