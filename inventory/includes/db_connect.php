<?php
include_once 'psl-config.php';   // As functions.php is not included
//$link = new mysqli(HOST, USER, PASSWORD, DATABASE);
$link = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
//$mysqli = new mysqli(localhost, barcode_inv, upselib_1965, barcode_inv);

//mysql_connect(HOST,USER,PASSWORD);
//mysql_select_db(DATABASE);

//$link = new mysqli(localhost, barcode_inv, upselib_1965, barcode_inv);

//if(mysqli_connect_errno()){
//            printf("Connect failed: %s", mysqli_connect_error());
//            exit();
//        }

?>
