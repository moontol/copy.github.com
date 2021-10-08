<?php
header("Location: index.php#nfd");
session_start();
$kode = '090803';

if (isset($_POST['submit'])) {
    if ($_POST['kode'] == $kode){

        $_SESSION["kode"] = $kode; 
        echo  header("Location: akses-admin-page.html");
    } else {
        echo  header("Location: index.php#option_");
    }
} 
 ?>

