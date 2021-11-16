<?php
    include './koneksi.php';

    $first = $_POST ['first'];
    $last = $_POST ['last'];
    $nisn = $_POST['nisn'];
    $sekolah = $_POST['sekolah'];
    $email = $_POST ['email'];
    $pilihan = $_POST ['pilihan'];

    // echo $first.'<br>';
    // echo $last. '<br>';
    // echo $nisn. '<br>';
    // echo $sekolah. '<br>';
    // echo $email. '<br>';
    // echo $pilihan. '<br>';

    $sql = "INSERT INTO formulir(first_name, last_name, asal_sekolah, nisn, email, lomba) VALUES ('$first', '$last', '$sekolah', '$nisn', '$email', '$pilihan')";
    if($conn->query($sql) === TRUE){
        // echo "Anda terdaftar";
       header('location:terdaftar.php');
    }else{echo "Error:" . $sql . "<br>" . $conn->error;}
    $conn->close();

?>