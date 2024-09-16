<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );


if(isset($_POST['submit']))
{
  
$fname=$_POST['fullname'];
 
$useremail=$_POST['useremail'];
 
$contactno=$_POST['contactno'];
 
$address=$_POST['address'];
 
$genderradio=$_POST['genderradio'];
 

 $date_ex= $_POST['date_ex'];
  
 

$category=$_POST['Category'];

if($category=='student')
{
  $prnnumber=$_POST['stdprnnumber'];
   
}
else if($category=='staff')
{
  $prnnumber=$_POST['staffprnnumber'];
   
}
else if($category=='other')
{ 
  $prnnumber=$_POST['otherprnnumber'];
   
}

$Department=$_POST['Department'];
 
$pincode=$_POST['pincode'];
 
 $rollno=$_POST['rollno'];

/*echo ("".$fname."userEmail     ".$useremail."contactno    ".$contactno."address     ".$address."genderradio     ".$genderradio."date_ex    ".$date_ex."category   ".$category."prnnumber    ".$prnnumber."Department   ".$Department."pincode   ".$pincode." ");
*/
 
//echo ("".$fname."userEmail     ".$useremail."contactno     ".$rollno."rollno    ".$contactno."address     ".$address."genderradio     ".$genderradio."date_ex    ".$date_ex."category   ".$category."prnnumber    ".$prnnumber."Department   ".$Department."pincode   ".$pincode." ");



$query=mysqli_query($con,"update user set fullName='$fname',userEmail='$useremail',contactNo='$contactno',rollNo='$rollno',address='$address',gender='$genderradio',dob='$date_ex',category='$category', prn_no='$prnnumber', department='$Department' where userEmail='".$_SESSION['login']."'");

// update user set fullName='Dipak Prabhu Kandare',userEmail='dipak1@gmail.com',contactNo='8788267746',address='nashik',gender='male',dob='1993-12-13',category='staff', prn_no='787878', department='IT', pincode='422007' where userEmail='dipak1@gmail.com'

// $query=mysqli_query($con,"update user set fullName='$fname',userEmail='$useremail',contactNo='$contactno' where userEmail='".$_SESSION['login']."'");
 



if($query)
{
$successmsg="Profile has been Created Successfully !!";
 
}
else
{
$errormsg="Profile not updated !!";

}
 
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

    <title>AGR | User Change Password</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-daterangepicker/daterangepicker.css" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">

 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

 <!--  <script>
  $(function() {
    $( "#date_ex" ).datepicker();
  });
  </script> -->

  <script>

$(function () {
      $("#date_ex").datepicker({ dateFormat: "yy-mm-dd", changeMonth: true, changeYear: true });
        });
  </script>

<style>
.ui-datepicker {
  width: 17em;
  padding: .2em .2em 0;
  display: none;
    background:#2F99B4;  
}
.ui-datepicker .ui-datepicker-title {
  margin: 0 2.3em;
  line-height: 1.8em;
  text-align: center;
    color:black;
    background:#2F99B4;  
}
.ui-datepicker table {
  width: 100%;
  font-size: .7em;
  border-collapse: collapse;
    font-family:verdana;
  margin: 0 0 .4em;
    color:#000000;
    background:#9EEFEE;    
}
/*This is date TD */
.ui-datepicker td {

  border: 0;
  padding: 1px;

    
}
.ui-datepicker td span,
.ui-datepicker td a {
  display: block;
  padding: .8em;
  text-align: right;
  text-decoration: underline;
}
</style>



<SCRIPT>  
  function show_category(select_item) {
      if (select_item == "student") {
          student.style.visibility='visible';
          student.style.display='block';

          staff.style.visibility='hidden';
          staff.style.display='none';

          other.style.visibility='hidden';
          other.style.display='none';
      Form.fileURL.focus();
    }
    else 
    if (select_item == "staff") 
    {
          staff.style.visibility='visible';
          staff.style.display='block';

          student.style.visibility='hidden';
          student.style.display='none';

          other.style.visibility='hidden';
          other.style.display='none';
      Form.fileURL.focus();
    } 
    else 
    if (select_item == "other")
     {
          other.style.visibility='visible';
          other.style.display='block';  

          staff.style.visibility='hidden';
          staff.style.display='none';

          student.style.visibility='hidden';
          student.style.display='none';
      Form.fileURL.focus();
    } 
    else if (select_item == " ")
    {
          other.style.visibility='hidden';
          other.style.display='none';  

          staff.style.visibility='hidden';
          staff.style.display='none';

          student.style.visibility='hidden';
          student.style.display='none';
    }
  } 
</SCRIPT>  





  </head>

  <body>

  <section id="container" >
     <?php include("includes/header.php");?>
      <?php include("includes/sidebar.php");?>
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Profile info</h3>
          	
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
<!-- ===================== -->
   <?php if($errormsg)
                      {?>
                      <div class="alert alert-danger alert-dismissable">
 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <b>Oh snap!</b> </b> <?php echo htmlentities($errormsg);?></div>
                      <?php }?>
 <?php $query=mysqli_query($con,"select * from user where userEmail='".$_SESSION['login']."'");
 while($row=mysqli_fetch_array($query)) 
 {
    ?>                     

     <h4 class="mb"><i class="fa fa-user"></i>&nbsp;&nbsp;<?php echo htmlentities($row['fullName']);?>'s Profile</h4>
    <h5><b>Last Updated at :</b>&nbsp;&nbsp;<?php echo htmlentities($row['updationDate']);?></h5>
                      <form class="form-horizontal style-form" method="post" name="profile" >

    <div class="form-group">
   <label class="col-sm-2 col-sm-2 control-label">Name</label>
   <div class="col-sm-4">
    <input type="text" name="fullname" required="required" value="<?php echo htmlentities($row['fullName']);?>" class="form-control" >
    </div>
    <label class="col-sm-2 col-sm-2 control-label">Email </label>
    <div class="col-sm-4">
      <input type="email" name="useremail" required="required" value="<?php echo htmlentities($row['userEmail']);?>" class="form-control" readonly>
     </div>
   </div>


    <div class="form-group">
   <label class="col-sm-2 col-sm-2 control-label">Contact</label>
   <div class="col-sm-4">
    <input type="text" name="contactno" required="required" value="<?php echo htmlentities($row['contactNo']);?>" class="form-control">
   </div>
   <label class="col-sm-2 col-sm-2 control-label">Address </label>
    <div class="col-sm-4">
      <textarea  name="address" required="required" class="form-control"><?php echo htmlentities($row['address']);?></textarea>
    </div>
   </div>




<div class="form-group">
  <label class="col-sm-2 col-sm-2 control-label">Gender</label>
    <div class="col-sm-4">
      <div class="radio">
       
       
        
        <label><input type="radio" name="genderradio"  <?php if($row['gender']=="Male"){ echo "checked";}?> value="Male">Male</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <label><input type="radio" name="genderradio"  <?php if($row['gender']=="Female"){ echo "checked";}?> value="Female">Female</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <label><input type="radio" name="genderradio"  <?php if($row['gender']=="Other"){ echo "checked";}?> value="Other">Other</label>
      </div>
    </div>
  <label class="col-sm-2 col-sm-2 control-label">DOB</label>
    <div class="col-sm-4">
        <i class="fa fa-calendar fa-lg"></i>&nbsp&nbsp&nbsp&nbsp<input type="text" name="date_ex" id="date_ex" value="<?php echo htmlentities($row['dob']);?>">
    </div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Select Category</label>
<div class="col-sm-4">
<select name="Category" onchange="java_script_:show_category(this.options[this.selectedIndex].value)" required="required" class="form-control" id="categoryselector" >
  <option value="<?php echo htmlentities($row['category']);?>" > <?php echo htmlentities($row['category']);?> </option>

  <option value="student">Student</option>
  <option value="staff">Staff</option>
  <option value="parent">Parent</option>
  <option value="other">Other</option>  
 </select>

<br>


<div id="student" class="category" style="display:none">
   <!-- <div><label >Enter PRN Number</label></div>
  <br>
  <div><input type="text" name="stdprnnumber" value="<?php echo htmlentities($row['prn_no']);?>" ></div>
   -->
</div>
<div id="staff" class="category" style="display:none">
   <div><label >Enter Staff Registration Number</label></div>
  <br>
  <div><input type="text" name="staffprnnumber" value="<?php echo htmlentities($row['prn_no']);?>"></div>
</div>
<div id="other" class="category" style="display:none">
  <div><label >Enter Registration Number</label></div>
  <br>
  <div><input type="text" name="otherprnnumber" value="<?php echo htmlentities($row['prn_no']);?>" ></div>
  
</div>
</div>




<label class="col-sm-2 col-sm-2 control-label">Select Department</label>
<div class="col-sm-4">

<select name="Department" required="required" class="form-control" id="departmentselector" >
  <option value="<?php echo htmlentities($row['department']);?>" ><?php echo htmlentities($row['department']);?></option>
  <option value="Computer Technology">Computer Technology</option>
		<option value="Information Technology">Information Technology</option>
		<option value="Mechanical Engineering ">Mechanical Engineering</option>
		<option value="Mechanical Engineering II">Mechanical Engineering II</option>
		<option value="Civil Engineering ">Civil Engineering</option>
		<option value="Civil Engineering II">Civil Engineering II</option>
		<option value="Electronic and Telecommunication">Electronic and Telecommunication</option>
		<option value="Electronic and Telecommunication II">Electronic and Telecommunication II</option>
		<option value="Electrical">Electrical</option>
		<option value="Polymer Engineering">Polymer Engineering</option>
		<option value="Mechatronics">Mechatronics</option>		
		<option value="Automobile">Automobile</option>
    <option value="Dress Designing & Garment manufacturing">Dress Designing & Garment manufacturing</option>
    <option value="Automobile">Interior Design & Decoration</option>
 
</select>

</div>
</div>








<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Reg Date </label>
<div class="col-sm-4">
<input type="text" name="regdate" required="required" value="<?php echo htmlentities($row['regDate']);?>" class="form-control" readonly>
 </div>
 <div class="form-group">
   <label class="col-sm-2 col-sm-2 control-label">Roll No</label>
   <div class="col-sm-4">
    <input type="text" name="rollno" required="required" value="<?php echo htmlentities($row['rollNo']);?>" class="form-control">
   </div>
</div>


<!-- <div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">User Photo</label>
<div class="col-sm-4">
<?php $userphoto=$row['userImage'];
if($userphoto==""):
?>
<img src="userimages/noimage.png" width="256" height="256" >
<a href="update-image.php">Change Photo</a>
<?php else:?>
	  <img src="userimages/<?php echo htmlentities($userphoto);?>" width="256" height="256">
	<a href="update-image.php">Change Photo</a>
<?php endif;?>
</div>

</div> -->

<?php } ?>

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
   <?php 

  } 

?>
