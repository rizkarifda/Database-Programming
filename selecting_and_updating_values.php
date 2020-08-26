<?php 

$host = 'localhost';
$user = 'root';
$pass = 'bismillah';
$database = 'rizka';
$conn = mysqli_connect($host, $user, $pass, $database);
if(!$conn) {
    die('Koneksi database gagal: ');
}else{
     echo 'berhasil';
}

    $sql = "SELECT status FROM manarulslot_kodebooking WHERE status = 'available' ";
    $query = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($query);
    echo "<br> jumlah = $count<br> ";

    $jumlah = "UPDATE jumlah_slot_manarul SET Kosong = $count";
    if($query = mysqli_query($conn, $jumlah)){
        echo "berhasil masuk<br>";
    } else{
        echo "error";
    }

    $anyar = 30 - $count;
    echo "$anyar";
    $jumlah1 = "UPDATE jumlah_slot_manarul SET Terisi = $anyar";
    if($query = mysqli_query($conn, $jumlah1)){
        echo "<br>berhasil masuk";
    } else{
        echo "error";
    }
?>

