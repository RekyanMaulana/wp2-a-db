<?php
$conn_string = "host=john.db.elephantsql.com port=5432 " . 
    "dbname=meprglly user=meprglly " .
    "password=pH3FLKrtfwhJt7kGHVD5EB403uMkPnQm";
$conn = pg_connect($conn_string);

if($conn) {
    echo "Koneksi DB Tersambung";
} else {
    echo "Koneksi DB GAGAL";
}
?>