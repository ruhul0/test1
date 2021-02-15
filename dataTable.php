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

$dataNumber = 0;
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
                ?>
        });
        </script>