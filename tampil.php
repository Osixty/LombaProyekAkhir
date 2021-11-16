<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Daftar lomba</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.css" rel="stylesheet">

    </head>
        
    <body class="bg-gradient-primary">
        <?php
            include './koneksi.php';
            $sql = "SELECT * FROM formulir";
            $result = $conn->query($sql);
            while($row = $result->fetch_array()){
                echo 
                "<br>
                <div class='container'>
                        <div class='card' style='width: 100%;'>
                            <ul class='list-group list-group-flush'>
                                <li class='list-group-item'><h6>nama siswa :</h6>  $row[1]&nbsp;$row[2] </li>                                <li class='list-group-item'><h6>asal sekolah :</h6> $row[3]</li>
                                <li class='list-group-item'><h6>nisn:</h6> $row[4]</li>
                                <li class='list-group-item'><h6>email :</h6>$row[5]</li>
                                <li class='list-group-item'><h6>lomba :</h6>$row[6]</li>
                                <li class='list-group-item'><h6><a href='register.php' class='btn btn-warning btn-sm'>Daftar Lagi</a> &nbsp&nbsp&nbsp <a href='hapus.php?formulir=$row[0]' class='btn btn-warning btn-sm'>Hapus</a></li>
                            </ul>
                        </div>    
                </div>  
                ";
            }
        ?>

    </body>

</html>