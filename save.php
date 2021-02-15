<?php
    include "db.php";
    $field1 = $_POST["field1"];
    $field2 = $_POST["field2"];
    $sql = "INSERT INTO `test`( `name`, `short`) VALUES ('".$field1."','".$field2."')";
    echo $sql;
    $result = mysqli_query($conn, $sql);
?>