<?php
    $n=3;

    $dataNumber = 0;
?>
<style>
    table,tr, th, td {
    border: 1px solid black;
    }
</style>

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


<style>
body {
	font-family: 'Varela Round', sans-serif;
}
.modal-confirm {		
	color: #434e65;
	width: 525px;
}
.modal-confirm .modal-content {
	padding: 20px;
	font-size: 16px;
	border: none;
}
.modal-confirm .modal-header {
	background: #FE5A0E;
	border-bottom: none;   
	position: relative;
	text-align: center;
	margin: -20px -20px 0;
	padding: 35px;
}
.modal-confirm h4 {
	text-align: center;
	font-size: 36px;
	margin: 10px 0;
}
.modal-confirm .form-control, .modal-confirm .btn {
	min-height: 40px;
}
.modal-confirm .close {
	position: absolute;
	top: 15px;
	right: 15px;
	color: #fff;
	text-shadow: none;
	opacity: 0.5;
}
.modal-confirm .close:hover {
	opacity: 0.8;
}
.modal-confirm .icon-box {
	color: #fff;		
	width: 95px;
	height: 95px;
	display: inline-block;
	border-radius: 50%;
	z-index: 9;
	border: 5px solid #fff;
	padding: 15px;
	text-align: center;
}
.modal-confirm .icon-box i {
	font-size: 64px;
	margin: -4px 0 0 -4px;
}
.modal-confirm.modal-dialog {
	margin-top: 80px;
}
.modal-confirm .btn, .modal-confirm .btn:active {
	color: #fff;
	border-radius: 4px;
	background: #dab26d !important;
	text-decoration: none;
	transition: all 0.4s;
	line-height: normal;
	border-radius: 30px;
	margin-top: 10px;
	padding: 6px 20px;
	border: none;
}
.modal-confirm .btn:hover, .modal-confirm .btn:focus {
	background: #eda645 !important;
	outline: none;
}
.modal-confirm .btn span {
	margin: 1px 3px 0;
	float: left;
}
.modal-confirm .btn i {
	margin-left: 1px;
	font-size: 20px;
	float: right;
}
.trigger-btn {
	display: inline-block;
	margin: 100px auto;
}
.form-control{
    width: 50%;
}
.list-group-item{
    width: 15%;
}
</style>
<div class="jumbotron">
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <form>
                <input  class="form-control"  id="field1" type="text" disabled>Choose from table</input> <br><br>
                <input  class="form-control"  id="field2" type="text" >Short form</input>
            </form>
            <button id="save" class="btn btn-primary">Save</button>
            <button id="update" class="btn btn-primary">Update</button>
            <button id="delete" class="btn btn-primary">Delete</button>
            <button id="reset" class="btn btn-primary">Reset</button>
        </div>
        <div class="col-md-6 col-sm-6">
            
            <h1>Choose Value to enter data</h1>
            <ul class="list-group">
                <?php
                 $i=0;
                 while(1){ ?>
                <li class="list-group-item"><p id="test<?php echo $i;?>" value="test<?php echo $i;?>">test<?php echo $i;?></p></li>
                <?php $i++; 
                    if($i>$n){
                        break;
                    }
                } ?>
                </ul>
        </div>
    </div>
</div>

<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header justify-content-center">
				<div class="icon-box">
					<i class="material-icons">&#xE876;</i>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body text-center">
				<h4>Great!</h4>	
				<p>Data Saved Successfully.</p>
                <button class="rqa-form" data-dismiss="modal" style=" width:50%;  background: #FE5A0E; border: none; color: white;font-family:'Poppins';font-size:16px;font-weight:600;line-height:44px;"><span>Keep Browsing</span> <i class="fa fa-arrow-right"></i></button>
                <!-- <form class="rqa-form"> -->
                 <!-- <button class="" data-dismiss="modal" style="  background: #FE5A0E; border: none; color: white;"><span>Keep Browsing</span> <i class="fa fa-arrow-right"></button>
			 -->
                </form>
				</div>
		</div>
	</div>
</div> 
<div id="saveModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header justify-content-center">
				<div class="icon-box">
					<i class="material-icons">&#xE876;</i>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body text-center">
				<h4>Great!</h4>	
				<p>Data Saved Successfully.</p>
                <button class="rqa-form" data-dismiss="modal" style=" width:50%;  background: #FE5A0E; border: none; color: white;font-family:'Poppins';font-size:16px;font-weight:600;line-height:44px;"><span>Keep Browsing</span> <i class="fa fa-arrow-right"></i></button>
                <!-- <form class="rqa-form"> -->
                 <!-- <button class="" data-dismiss="modal" style="  background: #FE5A0E; border: none; color: white;"><span>Keep Browsing</span> <i class="fa fa-arrow-right"></button>
			 -->
                </form>
				</div>
		</div>
	</div>
</div> 
<div id="updateModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header justify-content-center">
				<div class="icon-box">
					<i class="material-icons">&#xE876;</i>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body text-center">
				<h4>Great!</h4>	
				<p>Data Updated Successfully.</p>
                <button class="rqa-form" data-dismiss="modal" style=" width:50%;  background: #FE5A0E; border: none; color: white;font-family:'Poppins';font-size:16px;font-weight:600;line-height:44px;"><span>Keep Browsing</span> <i class="fa fa-arrow-right"></i></button>
                <!-- <form class="rqa-form"> -->
                 <!-- <button class="" data-dismiss="modal" style="  background: #FE5A0E; border: none; color: white;"><span>Keep Browsing</span> <i class="fa fa-arrow-right"></button>
			 -->
                </form>
				</div>
		</div>
	</div>
</div> 
<div id="deleteModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header justify-content-center">
				<div class="icon-box">
					<i class="material-icons">&#xE876;</i>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body text-center">
				<h4>Great!</h4>	
				<p>Data Deleted Successfully.</p>
                <button class="rqa-form" data-dismiss="modal" style=" width:50%;  background: #FE5A0E; border: none; color: white;font-family:'Poppins';font-size:16px;font-weight:600;line-height:44px;"><span>Keep Browsing</span> <i class="fa fa-arrow-right"></i></button>
                <!-- <form class="rqa-form"> -->
                 <!-- <button class="" data-dismiss="modal" style="  background: #FE5A0E; border: none; color: white;"><span>Keep Browsing</span> <i class="fa fa-arrow-right"></button>
			 -->
                </form>
				</div>
		</div>
	</div>
</div> 


<div class="container">
    <table id="tableData"  class="table">
        <tr>
                <td>
                    <b>ID</b>
                </td>
                <td>
                    <b>Name</b>
                </td>
                <td>
                    <b>Short Name</b>
                </td>
        </tr>
        <?php 
            $sql = "SELECT * FROM `test1` WHERE 1";
            $data = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($data)){ 
                //echo $dataNumber;
        ?>
            <tr id="trData">
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
                        $('#tableData').html(result);
                        //alert(result);
                        $('#saveModal').modal('show');
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
                        $('#tableData').html(result);
                        //alert(result);
                        $('#updateModal').modal('show');
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
                        $('#tableData').html(result);
                        //alert(result);
                        $('#deleteModal').modal('show');
                    }
                });
            
            });
            $( "#reset" ).click(function() {
                document.getElementById("field1").value = "";
                document.getElementById("field2").value = "";
            });
            
        });
</script>