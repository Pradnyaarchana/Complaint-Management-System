<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
  { 
header('location:index.php');
}
else {

	 $complaintnumber=$_GET['cid'];
	 //echo "complaintnumber no is: ".$complaintnumber;
	// $messge=$_GET['remark'];
	//$mobile_no=$_POST['mno'];
	//$messge=$_POST['msg'];
//echo "messge no is: ".$messge;
	
$query1=mysqli_query($con,"SELECT * FROM `complaintremark` WHERE complaintNumber='$complaintnumber'");

   while ($row1 = mysqli_fetch_array($query1)) 
   {
   	
    $mobile_no = $row1['mob'];
    $messge = $row1['remark'];
   }


   //echo "<script>alert('SMS send successfully......');</script>";
   ?>
   



<?php
	//Authorisation details.
	$username = "pradnyabagde221@gmail.com";
	$hash = "576c1353950b81626035585a41d70f3c67443fd10b6aef25bdc2486d33affb5a";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = "$mobile_no"; // A single number or a comma-seperated list of numbers
	$message = "$messge";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	//echo "Result:".$result;
	//echo "test:".$test;
	curl_close($ch);
  $fail="failure";
  $success="success";
if(strpos($result, $fail) !== false){
    echo "<script>alert('SMS sending failed......');</script>";
}
else if(strpos($result, $success) !== false){

	
	echo "<script>alert('SMS send successfully......');</script>";
}
?>

 <script>
function goBack() 
{
  history.go(-2);
}
</script>
<button onclick="goBack()">Go Back</button>

<?php  
}
?>


