<?php
    $n=3;
    $i=0;
    while(1){
        $_POST["test".$i];
        if(isset($_POST["test".$i])){
            echo $_POST["test".$i];
        }

        if($i>$n){
            break;
        }
        $i++;
    }
?>