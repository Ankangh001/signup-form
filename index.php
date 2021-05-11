
<?php include 'connection.php' ?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    </head>
    <body>


    <?php 
    
    if(isset($_POST['submit'])){
       $fname =mysqli_real_escape_string($conn, $_POST['fname']);
       $lname =mysqli_real_escape_string($conn, $_POST['lname']);
       $email = mysqli_real_escape_string($conn,$_POST['email']);
       $dob = mysqli_real_escape_string($conn, $_POST['dob']);
       $gender =mysqli_real_escape_string($conn, $_POST['gender']);
       $mstatus = mysqli_real_escape_string($conn,$_POST['mstatus']);
       $postal = mysqli_real_escape_string($conn,$_POST['postal']);
       $resume= mysqli_real_escape_string($conn, $_POST['resume']);
       $address = mysqli_real_escape_string($conn, $_POST['address']);
       $Phone =mysqli_real_escape_string($conn, $_POST['phone']);
       $pass = mysqli_real_escape_string($conn, $_POST['pass']);
       $cpass = mysqli_real_escape_string($conn, $_POST['cpass']);
    //    echo $fname, $lname, $dob, $gender, $mstatus, $postal, $resume, $address, $Phone, $pass ;

    // $pass = password_hash($password, PASSWORD_BCRYPT);
    // $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

    $emailquery = "select * from form where Email = '$email'";
    $query = mysqli_query($conn, $emailquery);

    $emailcount = mysqli_num_rows($query);

    if($emailcount>0){
     echo "email already exist";

    }else{
      if($pass === $cpass){
        
        $inserquery = "INSERT INTO `form`(`First Name`, `Last Name`, `Email`, `Dob`, `Gender`, `Martial Status`, `Cv`, `Address`, `Phone`, `password`, `confirm password`) VALUES  ('$fname', '$lname', '$email', '$dob', '$gender',' $mstatus', '$postal', '$resume', '$address', '$Phone', '$pass');";
    
        $iquery = mysqli_query($conn, $inserquery);

        if ($conn){
          ?>
          <script>
          function JSalert(){
	swal("Congrats!", "Information sent to Database!", "success");
}


JSalert();
          </script>
        <?php
        } else{
          ?>
          <script>
            alert("Unable to insert Data");
          </script>
        <?php
        }


      }else{
        echo "password are not matching";
      }
    }    
  }

    ?>



    <form method="post" autocomplete="off">
  <div id="msform">
    <!-- progressbar -->
    <ul id="progressbar">
      <li class="active">Account Setup</li>
      <li>Social Profiles</li>
      <li>Personal Details</li>
    </ul>
    <!-- fieldsets -->
    <fieldset>
      <h2 class="fs-title">Create your account</h2>
      <h3 class="fs-subtitle">Personal Info</h3>
      <input type="text" name="fname" placeholder="First Name" required />
      <input type="text" name="lname" placeholder="Last Name"   required />
      <input type="email" name="email" placeholder="email id"   required />
      <input type="date" name="dob" />
    
      <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>
    <fieldset>
      <h2 class="fs-title">Create your account</h2>
      <h3 class="fs-subtitle">Personal Details</h3>
      <select  required name="gender" style="padding: 15px; border: 1px solid #ccc;  border-radius: 3px; margin-bottom: 10px; width: 100%;  box-sizing: border-box; font-family: montserrat; color: #2C3E50; font-size: 13px;" >
          <option value="" disabled selected>Select your Gender</option>
          <option>Male</option>
          <option>Female</option>
          <option>Other</option>
      </select>

      <select  required name="mstatus" style=" padding: 15px; border: 1px solid #ccc; border-radius: 3px; margin-bottom: 10px; width: 100%; box-sizing: border-box; font-family: montserrat; color: #2C3E50; font-size: 13px;" >
    <option value="" disabled selected>Select Martial Status</option>
          <option>Married</option>
          <option>Single</option>
      </select>
  
      <input   required type="number" name="postal" placeholder="Postal Code" />
      <input type="file" name="resume" placeholder="Upload Resume"  required />
      <textarea name="address" placeholder="Address"></textarea>
      <input type="button" name="previous" class="previous action-button" value="Previous" />
      <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>
    
     <fieldset>
      <h2 class="fs-title">Verification</h2>
      <h3 class="fs-subtitle">We will never let you down</h3>
     
      <input type="text" name="phone" placeholder="Phone"  required />
      <input type="password" name="pass" placeholder="Password" required  />
      <input type="password" name="cpass" placeholder="Confirm Password" required  />
      <input type="button" name="previous" class="previous action-button" value="Previous" />
      <input type="submit" name="submit" class="action-button" value="Submit" />
    </fieldset>
  </div>
</form>
        <script src="main.js"></script>
        
    </body>
</html>