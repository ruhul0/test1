<?php
    include "db.php";
    $field1 = $_POST["field1"];
    $field2 = $_POST["field2"];
    $sql = "UPDATE `test` SET `short`='".$field2."' WHERE '".$field1."'";
    $result = mysqli_query($conn, $sql);
?>