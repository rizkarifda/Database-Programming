<?php
$host = 'localhost';
$user = 'root';
$pass = 'bismillah';
$database = 'rizka';
$conn = mysqli_connect($host, $user, $pass, $database);
if(!$conn) {
    die('Koneksi database gagal: ');
}else{
     echo 'berhasil<br>';
}

$query = "SELECT * FROM drivers_data INNER JOIN drivers_slot ON drivers_data.id = drivers_slot.id";
$sql = mysqli_query($conn, $query);
while($data = mysqli_fetch_array($sql)) {
    $nama = $data['nama'];
    $nohp = $data['nohp'];
    $email = $data['email'];
    $status = $data['status'];
    $plat = $data['plat'];
    $durasi = $data['durasi'];
    $jarak = $data['jarak'];
    $cost = $data['cost'];
    $slot = $data['slot'];
    $kode_booking = $data['kode_booking'];
    $timedate = $data['timedate'];

    $sql1 = "INSERT INTO rekap_drivers (nama, nohp, email, status, plat, durasi, jarak, cost, 
                slot, kode_booking, timedate) VALUES ('$nama', '$nohp', '$email', '$status', 
                '$plat', '$durasi', '$jarak', '$cost', '$slot', '$kode_booking', '$timedate');";
}
if ( mysqli_query($conn, $sql1) ) {
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

?>