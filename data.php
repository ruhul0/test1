<?php
    $n=3;

    $dataNumber = 0;
?>
<style>
    p, table,tr, th, td {
    border: 1px solid black;
    }
</style>
<div class="jumbotron">
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form>
                <input id="field1" type="text" disabled>Choose from table</input> <br><br>
                <input id="field2" type="text" >Short form</input>
            </form>
            <button id="save" class="btn btn-primary">Save</button>
            <button id="update" class="btn btn-primary">Update</button>
            <button id="delete" class="btn btn-primary">Delete</button>
            <button id="reset" class="btn btn-primary">Reset</button>
        </div>
        <div class="col-md-6">
                <?php
                 $i=0;
                 while(1){ ?>
                <p id="test<?php echo $i;?>" value="test<?php echo $i;?>">test<?php echo $i;?></p>
                <?php $i++; 
                    if($i>$n){
                        break;
                    }
                } ?>
        </div>
    </div>
</div>
<div class="container">
    <table id="tableData">
        <tr>
                <td>
                    ID
                </td>
                <td>
                    Name
                </td>
                <td>
                    Short Name
                </td>
        </tr>
        <?php 
            $sql = "SELECT * FROM `test1` WHERE 1";
            $data = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($data)){ 
                //echo $dataNumber;
        ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td id="name<?php echo $dataNumber; ?>" ><?php echo $row["name"]; ?></td>
                <td id="short<?php echo $dataNumber; ?>" ><?php echo $row["short"]; ?></td>
            </tr>
        <?php $dataNumber++;} ?>
    </table>
</div>
<script>
        $(document).ready( function () {
            <?php
                $j=0;
                while($j<=$dataNumber){ ?>

                $( "#name<?php echo $j;?>" ).click(function() {
                    document.getElementById("field1").value = document.getElementById("name<?php echo $j;?>").innerHTML;
                    document.getElementById("field2").value = document.getElementById("short<?php echo $j;?>").innerHTML;
                    document.getElementById("save").disabled = true;
                    document.getElementById("reset").disabled = true;
                    document.getElementById("update").disabled = false;
                    document.getElementById("delete").disabled = false;

                });
                $( "#short<?php echo $j;?>" ).click(function() {
                    document.getElementById("field1").value = document.getElementById("name<?php echo $j;?>").innerHTML;
                    document.getElementById("field2").value = document.getElementById("short<?php echo $j;?>").innerHTML;
                    document.getElementById("save").disabled = true;
                    document.getElementById("reset").disabled = true;
                    document.getElementById("update").disabled = false;
                    document.getElementById("delete").disabled = false;
                });
                <?php
                    $j++;
                }
                $i=0;
                while(1){
            ?>
            
            $( "#test<?php echo $i;?>" ).click(function() {
                var test<?php echo $i;?> = document.getElementById("test<?php echo $i;?>").innerHTML;
                //alert(test<?php echo $i;?>);
                document.getElementById("field1").value = test<?php echo $i;?>;
                document.getElementById("field2").value = "";
                $.ajax({
                    url:"getData.php",
                    type: "POST",
                    data:{
                        test<?php echo $i;?>:test<?php echo $i;?>
                    },
                    success: function(result){
                        $('#tableData').html(result);
                        //alert(result);
                    }
                });
                    document.getElementById("save").disabled = false;
                    document.getElementById("reset").disabled = false;
                    document.getElementById("update").disabled = true;
                    document.getElementById("delete").disabled = true;
            });
            
            <?php $i++; 
                    if($i>$n){
                        break;
                    }
                } ?>
            $( "#save" ).click(function() {
                var field1 = document.getElementById("field1").value;
                var field2 = document.getElementById("field2").value;
                $.ajax({
                    url:"save.php",
                    type: "POST",
                    data:{
                        field1:field1,
                        field2:field2
                    },
                    success: function(result){
                        $('#tableData').html(result)
                        alert(result);
                    }
                });
            });
            $( "#update" ).click(function() {
                var field1 = document.getElementById("field1").value;
                var field2 = document.getElementById("field2").value;
                $.ajax({
                    url:"update.php",
                    type: "POST",
                    data:{
                        field1:field1,
                        field2:field2
                    },
                    success: function(result){
                        $('#tableData').html(result)
                        alert(result);
                    }
                });
            
            });
            $( "#delete" ).click(function() {
                var field1 = document.getElementById("field1").value;
                var field2 = document.getElementById("field2").value;
                $.ajax({
                    url:"delete.php",
                    type: "POST",
                    data:{
                        field1:field1,
                        field2:field2
                    },
                    success: function(result){
                        $('#tableData').html(result)
                        alert(result);
                    }
                });
            
            });
            $( "#reset" ).click(function() {
                document.getElementById("field1").value = "";
                document.getElementById("field2").value = "";
            });
            
        });
</script>