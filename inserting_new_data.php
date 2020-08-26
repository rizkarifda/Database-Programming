<?php

if ($_SERVER['REQUEST_METHOD']=='POST'){

    $nama = $_POST['nama'];
    $nohp = $_POST['nohp'];
    $email = $_POST['email'];

    require_once 'connect.php';

    $sql = "INSERT INTO member_regist (nama, nohp, email) VALUES ('$nama', '$nohp', '$email');";

    if ( mysqli_query($conn, $sql) ) {
        $result["success"] = "1";
        $result["message"] = "success";

        echo json_encode($result);
        mysqli_close($conn);

    } else {
        
        $result["success"] = "0";
        $result["message"] = "error";

        echo json_encode($result);
        mysqli_close($conn);
    }
}