<?php
    include "db.php";
    $count = 0;
    $field1 = $_POST["field1"];
    $field2 = $_POST["field2"];
    /*
    $sqlCheck = "SELECT * FROM `test1` WHERE `name` = '".$field1."'";
    echo $sqlCheck;
    $resultCheck = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($resultCheck)){
        if($row["name"]){
            $count++;
        }
        echo $row["name"];
    }
    if($count==0){
        */
        $sql = "INSERT INTO `test1`( `name`, `short`) VALUES ('".$field1."','".$field2."')";
        //echo $sql;
        $result = mysqli_query($conn, $sql);
        //echo $field1." Saved. Reload to get data in table.";
    /* } */
    include "dataTable.php";
?>