
<?php
session_start();
include('include/config.php');



if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{

if(isset($_POST['submit']))
{
	

	$name=$_POST['name'];
	$id_num=$_POST['id_num'];
	$department=$_POST['department'];
	$gender=$_POST['gender'];
	$id=intval($_GET['id']);
	$EncryptPassword = md5("HD".$id_num);
	
$sql=mysqli_query($con,"update hod set hodName='$name',id_num='$id_num',hodDept='$department',gender='$gender',hod_pass='$EncryptPassword' where id='$id'");
$_SESSION['msg']="HOD Updated !!";


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin| HOD</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>
<?php include('include/header.php');?>

	<div class="wrapper">
		<div class="container">
			<div class="row">
<?php include('include/sidebar.php');?>				
			<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>HOD</h3>
							</div>
							<div class="module-body">

									<?php if(isset($_POST['submit']))
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Well done!</strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>
<br />

									

<form class="form-horizontal row-fluid" name="HOD" method="post" >

<?php
$id=intval($_GET['id']);
$query=mysqli_query($con,"select * from hod where id='$id'");
while($row=mysqli_fetch_array($query))
{
?>
									
<div class="control-group">
<label class="control-label" for="basicinput">Name</label>
<div class="controls">
<input type="text" placeholder="Enter HOD Name" value="<?php echo  htmlentities($row['hodName']);?>" name="name" class="span8 tip" required>
</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">Identification Number</label>
<div class="controls"> 
<input type="text"  name="id_num" value="<?php echo  htmlentities($row['id_num']);?>" class="span8 tip" required>
											</div>
										</div>

<div class="control-group">
	<label class="control-label" for="basicinput">Department</label>
	
	<div class="controls">
	<!-- <select name="category" class="span8 tip" required>	
	<option value="<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($catname=$row['categoryName']);?></option>
	<?
	// php $ret=mysqli_query($con,"select * from category");
	// while($result=mysqli_fetch_array($ret))
	// {
	// 	$cat=$result['categoryName'];
	// if($catname=$cat)
	// {
	// continue;
	// }
	// else{
	?>
	<option value="<?php echo $result['id'];?>">
		<?php echo $result['categoryName'];?></option>
	<?php 
//} 
//}
?>
</select> -->
 <!-- <select name="department" class="span8 tip" required>
	<option value="<?php echo htmlentities($row['hodDept']);?>"> -->
	<!-- 
</option>
		<option value="Information Technology">Information Technology</option>
		<option value="Mechanical">Mechanical</option>
		<option value="Computer">Computer</option>
		<option value="Electronic and Telecommunication">Electronic and Telecommunication</option>
		<option value="Civil">Civil</option>
	</select> -->
	<input type="text"  name="department" value="<?php echo  htmlentities($row['hodDept']);?>" class="span8 tip" readonly>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Gender</label>
<div class="controls">
<!-- <input type="text" placeholder="Enter ID"  name="subcategory" value="<?php echo  htmlentities($row['subcategory']);?>" class="span8 tip" required> -->
     
	    <input type="radio" name="gender" value="Male" <?php if($row['gender']=="Male"){ echo "checked";}?>/> Male 
 	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    <input type="radio" name="gender" value="Female" <?php if($row['gender']=="Female"){ echo "checked";}?>/> Female

</div>
</div>
<?php } ?>	

	<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn">Update</button>
											</div>
										</div>
									</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

<?php include('include/footer.php');?>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="scripts/datatables/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
</body>
<?php } ?>