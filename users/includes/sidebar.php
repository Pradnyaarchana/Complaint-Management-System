<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                              <?php $query=mysqli_query($con,"select fullName,userImage from user where userEmail='".$_SESSION['login']."'");
 while($row=mysqli_fetch_array($query)) 
 {
 ?> 
                  <p class="centered"><a href="profile_form.php">
<?php $userphoto=$row['userImage'];
if($userphoto==""):
?>
<a  href="update-image.php"><img src="userimages/noimage.png"  class="img-circle" width="70" height="70" >
<?php else:?>
  <img src="userimages/<?php echo htmlentities($userphoto);?>" class="img-circle" width="70" height="70">

<?php endif;?>
</a>
</p>
 
                  <h5 class="centered"><?php echo htmlentities($row['fullName']);?></h5>
                  <?php } ?>
                    
                  <li class="mt">
                      <a href="dashboard.php">
                          <i class="fa fa-dashboard"  style="color: white"></i>
                          <span><h4 style="color: white"><b>Dashboard</b></h4></span>
                      </a>
                  </li>


                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs" style="color: white"></i>
                          <span><h4 style="color: white"><b>Account Setting</b></h4></span>
                      </a>
                      <ul class="sub">
                          <li><a  href="profile.php"><h6 style="color: white"><b>Profile</b></h6></a></li>
                          <li><a  href="change-password.php"><h6 style="color: white"><b>Change Password</b></h6></a></li>
                          <li><a  href="update-image.php"><h6 style="color: white"><b>Change Photo</b></h6></a></li>
                        
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <!-- <a href="fire_complaint.php" >
                          <i class="fa fa-book"></i>
                          <span><h4><b>Lodge Complaint</b></h4></span>
                      </a> -->

                      <a href="fire_complaint.php" >
                          <i class="fa fa-book" style="color: white"></i>
                          <span><h4 style="color: white"><b>Lodge Complaint</b></h4></span>
                      </a>
                    </li>
                  </li>
                  <li class="sub-menu">
                      <a href="complaint-history.php" >
                          <i class="fa fa-tasks" style="color: white"></i>
                          <span><h4 style="color: white"><b>Complaint History</b></h4></span>
                      </a>
                      
                  </li>
                 
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>