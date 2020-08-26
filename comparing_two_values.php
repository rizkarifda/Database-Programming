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
    $sql = "SELECT MAX(cost) FROM drivers_data WHERE timedate IN (SELECT timedate 
                FROM drivers_data GROUP BY timedate HAVING COUNT(*) > 1);";
    $result = mysqli_query($conn, $sql);
    $array = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $string = implode(" ",$array);

    echo "$string<br>";

    $updatecost = "DELETE FROM drivers_data WHERE cost = '$string'";
    if($query = mysqli_query($conn, $updatecost)){
        echo "success<br>";
    } else{
        echo "error";
    }
?>
