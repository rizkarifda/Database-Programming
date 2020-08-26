<?php 

$host = 'localhost';
$user = 'root';
$pass = 'bismillah';
$database = 'rizka';
$conn = mysqli_connect($host, $user, $pass, $database);
if(!$conn) {
    die('Koneksi database gagal: ');
}else{
     
}
    $sql = "SELECT DISTINCT slot FROM manarulslot_kodebooking 
            WHERE status = 'available' ORDER BY id";
    $result = mysqli_query($conn, $sql);

    $array = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $string = implode(" ",$array);

    echo "$string";
?>

