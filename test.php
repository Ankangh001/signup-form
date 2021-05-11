$pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

    $emailquery = "select * from form where Email = '$email'";
    $query = mysqli_query($conn, $emailquery);

    $emailcount = mysqli_num_rows($query);

    if($emailcount>0){
     echo "email already exist";

    }else{
      if($password === $cpassword){
        $inserquery = "insert into form (First Name, Last Name, Email, Dob, Gender, Martial Status, Cv, Address, Phone, password, confirm password)
        values ('$fname', '$lname', '$email', '$dob', '$gender',' $mstatus', '$postal', '$resume', '$address', '$Phone', '$pass');";
    
        $iquery = mysqli_query($conn, $inserquery);

        if ($conn){
          ?>
          <script>
            alert("succesfully inserted");
          </script>
        <?php
        } else{
          ?>
          <script>
            alert("not inseerted");
          </script>
        <?php
        }


      }else{
        echo "password are not matching";
      }
    }    
  }
