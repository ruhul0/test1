<?php
    include "db.php";
    $field1 = $_POST["field1"];
    $field2 = $_POST["field2"];
    $sql = "DELETE FROM `test` WHERE `name`='".$field1."'";
    $result = mysqli_query($conn, $sql);
?>