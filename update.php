<?php
    include "db.php";
    $count = 0;
    $field1 = $_POST["field1"];
    $field2 = $_POST["field2"];
    /*
    $sqlCheck = "SELECT * FROM `test` WHERE `name` = '".$field1."'";
    $resultCheck = mysqli_query($conn, $sql);
    while(mysqli_fetch_assoc($resultCheck)){
        $count++;
    }
    if($count==0){
        */
        $sql = "UPDATE `test1` SET `short`='".$field2."' WHERE name = '".$field1."'";
        $result = mysqli_query($conn, $sql);
        include "dataTable.php";
        //echo $field1." Updated";
    /* } */
?>