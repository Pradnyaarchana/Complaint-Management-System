<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{

if(isset($_POST['submit']))
{
$uid=$_SESSION['id'];
echo "Uid".$uid;

$query1=mysqli_query($con,"SELECT category FROM `user` WHERE id='$uid'");

   while ($row1 = mysqli_fetch_array($query1)) 
   {
    $u_category = $row1['category'];
   

   }
   echo "cat:   ".$u_category;

$category=$_POST['category'];
echo "string".$category;
if($category == 'Admin')
{
$hod="";
}
else
{
  $hod=$_POST['hod'];
}

$noc=$_POST['noc'];
$complaintdetials=$_POST['complaindetails'];
$compfile=$_FILES["compfile"]["name"];


//complaintNumber userId  category hod noc complaintDetails  complaintFile regDate status  lastUpdationDate

move_uploaded_file($_FILES["compfile"]["tmp_name"],"complaintdocs/".$_FILES["compfile"]["name"]);
// $query=mysqli_query($con,"insert into tblcomplaints(userId,category,subcategory,complaintType,state,noc,complaintDetails,complaintFile) values('$uid','$category','$subcat','$complaintype','$state','$noc','$complaintdetials','$compfile')");

$query=mysqli_query($con,"insert into complaints(userId,category,user_cat, hod,noc,complaintDetails,complaintFile) values('$uid','$category','$u_category','$hod','$noc','$complaintdetials','$compfile')");

// code for show complaint number
$sql=mysqli_query($con,"select complaintNumber from complaints  order by complaintNumber desc limit 1");
while($row=mysqli_fetch_array($sql))
{
 $cmpn=$row['complaintNumber'];
}
$complainno=$cmpn;
echo '<script> alert("Your complain has been successfully filled and your complaintno is  "+"'.$complainno.'")</script>';
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>AGR | User Register Complaint</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-daterangepicker/daterangepicker.css" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <script>
function gethod(val) {
  //alert('val');
<?php   echo "string";?>
  $.ajax({
  type: "POST",
  url: "gethodname.php",
  data:'catid='+val,
  success: function(data){
    $("#hodname").html(data);
    
  }
  });
  }
  </script>



<SCRIPT>  
  function show_hod(select_item) {
      
    if (select_item == "Admin") 
    {
          hod.style.visibility='hidden';
          hod.style.display='none';
      Form.fileURL.focus();
    } 

    else
      if(select_item=="HOD")
      {

         hod.style.visibility='visible';
         hod.style.display='block';
         Form.fileURL.focus();
      }
    
  } 
</SCRIPT>  

<script>
function gethod(val) {
  //alert('val');
<?php echo "hello"?>
  $.ajax({
  type: "POST",
  url: "gethodname.php",
  data:'catid='+val,
  success: function(data){
    $("#subcategory").html(data);
    
  }
  });
  }
  </script>

  
  </head>

  <body>

  <section id="container" >
     <?php include("includes/header.php");?>
      <?php include("includes/sidebar.php");?>
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Register Complaint</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	

                      <?php if($successmsg)
                      {?>
                      <div class="alert alert-success alert-dismissable">
                       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <b>Well done!</b> <?php echo htmlentities($successmsg);?></div>
                      <?php }?>

   <?php if($errormsg)
                      {?>
                      <div class="alert alert-danger alert-dismissable">
 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <b>Oh snap!</b> </b> <?php echo htmlentities($errormsg);?></div>
                      <?php }?>

                      <form class="form-horizontal style-form" method="post" name="complaint" enctype="multipart/form-data" >

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label" style=" margin-left: 10px;">Send To :</label>
<div class="col-sm-4">

<select name="category" onchange="java_script_:show_hod(this.options[this.selectedIndex].value)" required="required" class="form-control" id="categoryselector" >
    <option value="HOD">HOD</option>
    <option value="Admin">Admin</option>
  </select>
 
</select>
 </div>


<!-- <div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Select Department</label>
<div class="col-sm-4">
<select name="category" id="category" class="form-control" onChange="gethod(this.value);" required="">
<option value="">Select Deparment</option>
<?php $sql=mysqli_query($con,"select hodDept from hod ");
while ($rw=mysqli_fetch_array($sql)) {
  ?>
  <option value="<?php echo htmlentities($rw['id']);?>"><?php echo htmlentities($rw['hodDept']);?></option>
<?php
}
?>
</select>
 </div> -->


<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label" style="width: auto;">Department</label>
<div class="col-sm-4">
<select name="hod" id="hod" class="form-control" onChange="gethod(this.value);" >
<option value="">Select HOD</option>
<?php $sql=mysqli_query($con,"select hodDept,hodName from hod ");
while ($rw=mysqli_fetch_array($sql)) {
  ?>
   
  <option value="<?php echo htmlentities($rw['hodDept']);echo(  '-');echo htmlentities($rw['hodName']);?>"><?php echo htmlentities($rw['hodDept']);echo(  '-');echo htmlentities($rw['hodName']);?></option>
<?php
}
?>
</select>
 <!-- </div>
<label class="col-sm-2 col-sm-2 control-label">Sub Category </label>
 <div class="col-sm-4">
<select name="subcategory" id="subcategory" class="form-control" >
<option value="">Select Subcategory</option>
</select>
</div>
 </div> -->



 


<!-- <label class="col-sm-2 col-sm-2 control-label">Sub Category </label>
 <div class="col-sm-4">
<select name="subcategory" id="subcategory" class="form-control" >
<option value="">Select Subcategory</option>
</select>
</div> -->
 </div>




<!-- <div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Complaint Type</label>
<div class="col-sm-4">
<select name="complaintype" class="form-control" required="">
                <option value=" Complaint"> Complaint</option>
                  <option value="General Query">General Query</option>
                </select> 
</div> -->

<!-- <label class="col-sm-2 col-sm-2 control-label">State</label>
<div class="col-sm-4">
<select name="state" required="required" class="form-control">
<option value="">Select State</option>
<?php $sql=mysqli_query($con,"select stateName from state ");
while ($rw=mysqli_fetch_array($sql)) {
  ?>
  <option value="<?php echo htmlentities($rw['stateName']);?>"><?php echo htmlentities($rw['stateName']);?></option>
<?php
}
?>

</select>
</div> -->
</div>


<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label" style=" margin-left: 20px; width: auto;">Subject&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
<div class="col-sm-4">
<input type="text" name="noc" required="required" value="" required="" class="form-control">
</div>

</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label" style=" margin-left: 10px;">&nbsp&nbsp&nbsp&nbspComplaint Details <br>&nbsp&nbsp&nbsp&nbsp(max 2000 words) </label>
<div class="col-sm-6">
<textarea  name="complaindetails" required="required" cols="10" rows="10" class="form-control" maxlength="2000"></textarea>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label" style=" margin-left: 10px;">&nbsp&nbsp&nbsp&nbspComplaint Related <br>&nbsp&nbsp&nbsp&nbsp&nbspDoc&nbsp&nbsp(if any) </label>
<div class="col-sm-6">
<input type="file" name="compfile" class="form-control" value="">
</div>
</div>



                          <div class="form-group">
                           <div class="col-sm-10" style="padding-left:25% ">
<button type="submit" name="submit" class="btn btn-primary">Submit</button>
</div>
</div>

                          </form>
                          </div>
                          </div>
                          </div>
                          
          	
          	
		</section>
      </section>
    <?php include("includes/footer.php");?>
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>

	<!--custom switch-->
	<script src="assets/js/bootstrap-switch.js"></script>
	
	<!--custom tagsinput-->
	<script src="assets/js/jquery.tagsinput.js"></script>
	
	<!--custom checkbox & radio-->
	
	<script type="text/javascript" src="assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/date.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<script type="text/javascript" src="assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
	
	
	<script src="assets/js/form-component.js"></script>    
    
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
<?php } ?>
