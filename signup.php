 
  <?php
      $con = mysqli_connect('localhost', 'root', '', 'coffee_shop');
      if(isset($_POST['submit'])){
           $username = $_POST['username'];
           $email = $_POST['email'];
           $password = $_POST['password'];
           
           $errors  = array();
           
           $u = "SELECT username from `signup` where username =  '$username'";
           $uu = mysqli_query($con, $u);

           $e = "SELECT email from `signup` where email = '$email'";
           $ee = mysqli_query($con, $e);
           

           if(empty($username)){
               $errors['u'] = "username requires";
           }
           elseif(mysqli_num_rows($uu) > 0 ){
               $error['u'] = "username already exist";
           }
            
           if(empty($email)){
            $errors['e'] = "email requires";
            }
            else if(mysqli_num_rows($ee) > 0 ){
                $errors['e'] = "email already exist";
            }
          

        if(empty($password)){
            $errors['p'] = "password requires";
         }
        

         if(count($errors) == 0){
             $hash = password_hash($password, PASSWORD_DEFAULT);
             $query = "INSERT INTO `signup`( `username`, `email`, `password`, `time`) VALUES ('$username','$email','$hash', current_timestamp())";
             $result =  mysqli_query($con, $query);
             if($result){
                 echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                 <strong>succesfully </strong> you are successfully signed up.
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
               </div>';
             }
         }
      }

  ?>