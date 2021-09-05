<?php
      //  $signuptrue = FALSE;
      //  $signupfail = FALSE;
      $con = mysqli_connect('localhost', 'root', '', 'coffee_shop');
      if(isset($_POST['signin'])){
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
           else if(mysqli_num_rows($uu) > 0 ){
               $errors['u'] = "username already exist";
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
                  echo '<script> alert("you are signed in"); </script>';
             }
             else{
                 
             }
         }
         else{
          echo  '<script> alert("you are failed to signin "); </script>';
         }
      }

  ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>caffee coffy day .com</title>
  </head>
  <body> 
             
           <?php include 'partials/header.php'; ?>

          <!-- signup modal -->
         
  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="background-color: black;">
        <div class="modal-header">
          <h5 class="modal-title text-white" id="staticBackdropLabel">Sign up to cafena</h5>
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action ="index.php" method="POST" class="">
                 <div class="form-group">
                    <label for="exampleInputtext1" class="text-white">Username</label>
                    <input type="text" class="form-control" id="exampleInputtext1" placeholder="username" name="username" required>
                    <p class="text-danger"><?php if(isset($errors['u']))  echo $errors['u']; ?></p>
                 </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="text-white">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter email" required> 
                 
                  <p class="text-danger"><?php if(isset($errors['e']))  echo $errors['e']; ?></p>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" class="text-white">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1"  name = "password" placeholder="Enter password" required>
                  <p class="text-danger"><?php if(isset($errors['p']))  echo $errors['p']; ?></p>
                </div>
               
                <button type="submit" class="btn btn-danger" name = "signin">Sign up</button>
              </form>
        </div>
        <div class="modal-footer">
          <p class="text-white m-auto"> Already have an account? <a href="login.php" class="text-primary">login</a></p>
        </div>
      </div>
    </div>
  </div>
          <!-- signup modal end -->
         <!-- home section -->
              <section  id="home" class="home mt-n5">
                         <div class="container">
                              <div class="row">
                                   <div class="col-md-6 col-sm-12 my-5 py-5">
                                       <h1 class="text-white font-weight-bold">FRESH COFFEE IN THE MORNING</h1>
                                       <p class="text-white my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi deleniti tenetur odio, laudantium ex dolorem consequuntur quo dolor quae animi!.</p>
                                       <button type="submit" class="text-white btn" style="background-color: #d3ad7f;">Get it now</button>
                                   </div>
                                   <div class="col-md-6 col-sm-12">
                                       
                                </div>
                              </div>
                         </div>
              </section>
         <!-- homne sections end -->
            
            <!-- About section  -->
                 <section id="about" class="about py-4" style="background-color: black;">
                        <h1 class="text-center font-weight-bold py-4"><span style="color: #d3ad7f;">ABOUT</span> US</h1>
                         <div class="container my-4">
                              <div class="row">
                                   <div class="col-md-6 col-sm-12">
                                        <img src="images/about-img.jpeg" class="img-fluid ">
                                   </div>
                                   <div class="col-md-6 col-sm-12  ml-n3" style="background-color: rgba(247, 235, 235, 0.103);">
                                          <h2 class="text-white mt-5"> what make this coffee special?</h2>
                                          <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et minus vel vero, quaerat pariatur, reprehenderit suscipit dolores debitis quas eius delectus veniam nostrum reiciendis quisquam dignissimos ratione cupiditate consequatur ab?</p>

                                          <p class="text-light"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, blanditiis.</p>
                                          <button type="submit" class="text-white btn" style="background-color: #d3ad7f;">Learn now</button>
                                </div>
                              </div>
                         </div>
                 </section>
              <!-- section -->
              <!-- menu -->
              <section id="menu" class="menu py-4" style="background-color: black;">
                  <h1 class="text-center font-weight-bold py-4 text-white">OUR <span style="color: #d3ad7f;">MENU</span></h1>
                       <div class="container">
                           <div class="row">
                                <div class="col-md-4 col-sm-12 mb-2 text-center">
                                      <div class="card changecolor" style="width: 20rem; border: 1px solid rgba(255, 255, 255, 0.075);">
                                          <div class="card-body">
                                                <img src="images/menu-1.png" class="img-fluid h-25 w-25">
                                                <p class=" font-weight-bold">Tasty and healthy</p>
                                                   <div class="d-flex flex-row justify-content-center">
                                                         <h6 class=" font-weight-bold">$15.99</h6>
                                                          <p class=" font-weight-bold mx-2" style="text-decoration: line-through; font-size: 12px;"> $20.99</p>
                                                   </div>
                                                   <button type="submit" id = "btn-1" class="btn" style="background-color: #d3ad7f;">Learn now</button>
                                          </div>
                                      </div>
                                </div>
                                <div class="col-md-4 col-sm-12  text-center mb-2">
                                    <div class="card changecolor" style=" width: 20rem; border: 1px solid rgba(255, 255, 255, 0.075);">
                                        <div class="card-body">
                                              <img src="images/menu-1.png" class="img-fluid  h-25 w-25">
                                              <p class=" font-weight-bold">Tasty and healthy</p>
                                                 <div class="d-flex flex-row justify-content-center">
                                                       <h6 class=" font-weight-bold">$15.99</h6>
                                                        <p class=" font-weight-bold mx-2" style="text-decoration: line-through; font-size: 12px;"> $20.99</p>
                                                 </div>
                                                 <button type="submit" class=" btn" style="background-color: #d3ad7f;">Learn now</button>
                                        </div>
                                    </div>
                              </div>

                              <div class="col-md-4 col-sm-12  text-center mb-2">
                                <div class="card changecolor" style=" width: 20rem; border: 1px solid rgba(255, 255, 255, 0.075);">
                                    <div class="card-body">
                                          <img src="images/menu-1.png" class="img-fluid  h-25 w-25">
                                          <p class= "font-weight-bold">Tasty and healthy</p>
                                             <div class="d-flex flex-row justify-content-center">
                                                   <h6 class=" font-weight-bold">$15.99</h6>
                                                    <p class=" font-weight-bold mx-2" style="text-decoration: line-through; font-size: 12px;"> $20.99</p>
                                             </div>
                                             <button type="submit" class=" btn" style="background-color: #d3ad7f;">Learn now</button>
                                    </div>
                                </div>
                          </div>

                          <div class="col-md-4 col-sm-12  text-center mb-2">
                            <div class="card changecolor" style="width: 20rem; border: 1px solid rgba(255, 255, 255, 0.075);">
                                <div class="card-body">
                                      <img src="images/menu-1.png" class="img-fluid  h-25 w-25">
                                      <p class=" font-weight-bold">Tasty and healthy</p>
                                         <div class="d-flex flex-row justify-content-center">
                                               <h6 class=" font-weight-bold">$15.99</h6>
                                                <p class=" font-weight-bold mx-2" style="text-decoration: line-through; font-size: 12px;"> $20.99</p>
                                         </div>
                                         <button type="submit" class=" btn" style="background-color: #d3ad7f;">Learn now</button>
                                </div>
                            </div>
                      </div>

                      <div class="col-md-4 col-sm-12  text-center mb-2">
                        <div class="card changecolor" style=" width: 20rem; border: 1px solid rgba(255, 255, 255, 0.075);">
                            <div class="card-body">
                                  <img src="images/menu-1.png" class="img-fluid  h-25 w-25">
                                  <p class=" font-weight-bold">Tasty and healthy</p>
                                     <div class="d-flex flex-row justify-content-center">
                                           <h6 class=" font-weight-bold">$15.99</h6>
                                            <p class=" font-weight-bold mx-2" style="text-decoration: line-through; font-size: 12px;"> $20.99</p>
                                     </div>
                                     <button type="submit" class=" btn" style="background-color: #d3ad7f;">Learn now</button>
                            </div>
                        </div>
                  </div>

                  <div class="col-md-4 col-sm-12  text-center mb-2">
                    <div class="card changecolor" style=" width: 20rem; border: 1px solid rgba(255, 255, 255, 0.075);">
                        <div class="card-body">
                              <img src="images/menu-1.png" class="img-fluid  h-25 w-25">
                              <p class=" font-weight-bold">Tasty and healthy</p>
                                 <div class="d-flex flex-row justify-content-center">
                                       <h6 class=" font-weight-bold">$15.99</h6>
                                        <p class=" font-weight-bold mx-2" style="text-decoration: line-through; font-size: 12px;"> $20.99</p>
                                 </div>
                                 <button type="submit" class="text-white btn" style="background-color: #d3ad7f;">Learn now</button>
                        </div>
                    </div>
              </div>

            
                           </div>
                       </div>
                  </section>
                  <!-- menu ends -->
                  <!-- products section -->
                  <section id="menu" class="menu py-4" style="background-color: black;">
                    <h1 class="text-center font-weight-bold py-4 text-white">LATEST <span style="color: #d3ad7f;">PRODUCTS</span></h1>
                          <div class="container">
                                <div class="row">
                                     <div class="col-md-4 col-sm-12">
                                          <div class="card text-center text-white" style=" background-color: black; width:  20rem; border: 1px solid rgba(255, 255, 255, 0.137);">
                                                <div class="card-body">
                                                      <div class="d-flex flex-row justify-content-center mb-2">
                                                        <i class="fa fa-shopping-cart iconcolor" aria-hidden="true" style="padding: 10px; border: 1px solid rgba(255, 255, 255, 0.144); background-color: blanchedalmond;"></i>
                                                        <i class="fa fa-heart  iconcolor mx-1" aria-hidden="true"  style="padding: 10px; border: 1px solid rgba(255, 255, 255, 0.144);"></i></i>
                                                        <i class="fa fa-eye  iconcolor" aria-hidden="true"  style="padding: 10px; border: 1px solid rgba(255, 255, 255, 0.144);"></i></i>
                                                      </div>
                                                      <img src="images/product-1.png" class="img-fluid">
                                                      <p class="text-center font-weight-bold">Fresh coffee</p>
                                                      <div class="d-flex flex-row justify-content-center mb-1">
                                                        <i class="fa fa-star " aria-hidden="true" style="color: #d3ad7f;"></i>
                                                        <i class="fa fa-star " aria-hidden="true" style="color: #d3ad7f;"></i>
                                                        <i class="fa fa-star " aria-hidden="true" style="color: #d3ad7f;"></i>
                                                        <i class="fa fa-star " aria-hidden="true" style="color: #d3ad7f;"></i>
                                                        <i class="fa fa-star-half-o " aria-hidden="true" style="color: #d3ad7f;"></i>
                                                      </div>
                                                      <div class="d-flex flex-row justify-content-center">
                                                        <h6 class=" font-weight-bold">$15.99</h6>
                                                         <p class=" font-weight-bold mx-2" style="text-decoration: line-through; font-size: 12px;"> $20.99</p>
                                                  </div>
                                                </div>
                                          </div>
                                     </div>
                                     
                                     <div class="col-md-4 col-sm-12">
                                        <div class="card text-center text-white" style=" background-color: black; width: 20rem; border: 1px solid rgba(255, 255, 255, 0.137);">
                                              <div class="card-body">
                                                    <div class="d-flex flex-row justify-content-center mb-2">
                                                      <i class="fa fa-shopping-cart  iconcolor" aria-hidden="true" style="padding: 10px; border: 1px solid rgba(255, 255, 255, 0.144);"></i>
                                                      <i class="fa fa-heart mx-1  iconcolor" aria-hidden="true"  style="padding: 10px; border: 1px solid rgba(255, 255, 255, 0.144);"></i></i>
                                                      <i class="fa fa-eye  iconcolor" aria-hidden="true"  style="padding: 10px; border: 1px solid rgba(255, 255, 255, 0.144);"></i></i>
                                                    </div>
                                                    <img src="images/product-2.png" class="img-fluid">
                                                    <p class="text-center font-weight-bold">Fresh coffee</p>
                                                    <div class="d-flex flex-row justify-content-center mb-1">
                                                      <i class="fa fa-star " aria-hidden="true" style="color: #d3ad7f;"></i>
                                                      <i class="fa fa-star  " aria-hidden="true" style="color: #d3ad7f;"></i>
                                                      <i class="fa fa-star  " aria-hidden="true" style="color: #d3ad7f;"></i>
                                                      <i class="fa fa-star  " aria-hidden="true" style="color: #d3ad7f;"></i>
                                                      <i class="fa fa-star-half-o  " aria-hidden="true" style="color: #d3ad7f;"></i>
                                                    </div>
                                                    <div class="d-flex flex-row justify-content-center">
                                                      <h6 class=" font-weight-bold">$15.99</h6>
                                                       <p class=" font-weight-bold mx-2" style="text-decoration: line-through; font-size: 12px;"> $20.99</p>
                                                </div>
                                              </div>
                                        </div>
                                   </div>


                                   <div class="col-md-4 col-sm-12">
                                    <div class="card text-center text-white" style=" background-color: black; width: 20rem; border: 1px solid rgba(255, 255, 255, 0.137);">
                                          <div class="card-body">
                                                <div class="d-flex flex-row justify-content-center mb-2">
                                                  <i class="fa fa-shopping-cart  iconcolor" aria-hidden="true" style="padding: 10px; border: 1px solid rgba(255, 255, 255, 0.144);"></i>
                                                  <i class="fa fa-heart mx-1  iconcolor" aria-hidden="true"  style="padding: 10px; border: 1px solid rgba(255, 255, 255, 0.144);"></i></i>
                                                  <i class="fa fa-eye  iconcolor" aria-hidden="true"  style="padding: 10px; border: 1px solid rgba(255, 255, 255, 0.144);"></i></i>
                                                </div>
                                                <img src="images/product-3.png" class="img-fluid">
                                                <p class="text-center font-weight-bold">Fresh coffee</p>
                                                <div class="d-flex flex-row justify-content-center mb-1">
                                                  <i class="fa fa-star  " aria-hidden="true" style="color: #d3ad7f;"></i>
                                                  <i class="fa fa-star " aria-hidden="true" style="color: #d3ad7f;"></i>
                                                  <i class="fa fa-star  " aria-hidden="true" style="color: #d3ad7f;"></i>
                                                  <i class="fa fa-star  " aria-hidden="true" style="color: #d3ad7f;"></i>
                                                  <i class="fa fa-star-half-o  " aria-hidden="true" style="color: #d3ad7f;"></i>
                                                </div>
                                                <div class="d-flex flex-row justify-content-center">
                                                  <h6 class=" font-weight-bold">$15.99</h6>
                                                   <p class=" font-weight-bold mx-2" style="text-decoration: line-through; font-size: 12px;"> $20.99</p>
                                            </div>
                                          </div>
                                    </div>
                               </div>

                                </div>
                          </div>
                    </section>
                  <!-- product section ends -->

                  <!-- reviews -->
                  <section id="review" class="review py-4" style="background-color: black;">
                    <h1 class="text-center font-weight-bold py-4 text-white">CUSTOMER'S <span style="color: #d3ad7f;">REVIEW</span></h1>
                        <div class="container">
                             <div class="row">
                                   <div class="col-md-4 col-sm-12">
                                         <div class="card text-center" style=" background-color: black; width: 20rem; border: 1px solid rgba(255, 255, 255, 0.233);">
                                             <div class="card-body">
                                                   <img src="images/quote-img.png" class="img-fluid h-25 w-25 mb-2">
                                                   <p class="text-white"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. In eius nulla perferendis itaque neque ipsum veritatis nemo velit natus, necessitatibus debitis praesentium hic odit ipsa tempora at, qui, fugiat quam.</p>
                                                   <img src="images/pic-1.png" class="img-fluid h-25 w-25" style="border-radius: 35px;">
                                                   <p class="font-weight-bold" style="color: white;">John Deo</p>
                                                   <div class="d-flex flex-row justify-content-center mb-1">
                                                    <i class="fa fa-star" aria-hidden="true" style="color: #d3ad7f;"></i>
                                                    <i class="fa fa-star" aria-hidden="true" style="color: #d3ad7f;"></i>
                                                    <i class="fa fa-star" aria-hidden="true" style="color: #d3ad7f;"></i>
                                                    <i class="fa fa-star" aria-hidden="true" style="color: #d3ad7f;"></i>
                                                    <i class="fa fa-star-half-o  " aria-hidden="true" style="color: #d3ad7f;"></i>
                                                  </div>
                                             </div>
                                         </div>
                                   </div>
                                   <div class="col-md-4 col-sm-12">
                                    <div class="card text-center" style=" background-color: black; width: 20rem; border: 1px solid rgba(255, 255, 255, 0.233);">
                                        <div class="card-body">
                                              <img src="images/quote-img.png" class="img-fluid h-25 w-25">
                                              <p class="text-white"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. In eius nulla perferendis itaque neque ipsum veritatis nemo velit natus, necessitatibus debitis praesentium hic odit ipsa tempora at, qui, fugiat quam.</p>
                                              <img src="images/pic-1.png" class="img-fluid h-25 w-25 mb-2"  style="border-radius: 35px;">
                                              <p class="font-weight-bold" style="color: white;">John Deo</p>
                                              <div class="d-flex flex-row justify-content-center mb-1">
                                               <i class="fa fa-star" aria-hidden="true" style="color: #d3ad7f;"></i>
                                               <i class="fa fa-star" aria-hidden="true" style="color: #d3ad7f;"></i>
                                               <i class="fa fa-star" aria-hidden="true" style="color: #d3ad7f;"></i>
                                               <i class="fa fa-star" aria-hidden="true" style="color: #d3ad7f;"></i>
                                               <i class="fa fa-star-half-o  " aria-hidden="true" style="color: #d3ad7f;"></i>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="card text-center" style=" background-color: black; width: 20rem; border: 1px solid rgba(255, 255, 255, 0.233);">
                                        <div class="card-body">
                                              <img src="images/quote-img.png" class="img-fluid h-25 w-25 mb-2">
                                              <p class="text-white"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. In eius nulla perferendis itaque neque ipsum veritatis nemo velit natus, necessitatibus debitis praesentium hic odit ipsa tempora at, qui, fugiat quam.</p>
                                              <img src="images/pic-1.png" class="img-fluid h-25 w-25"  style="border-radius: 35px;">
                                              <p class="font-weight-bold" style="color: white;">John Deo</p>
                                              <div class="d-flex flex-row justify-content-center mb-1">
                                               <i class="fa fa-star" aria-hidden="true" style="color: #d3ad7f;"></i>
                                               <i class="fa fa-star" aria-hidden="true" style="color: #d3ad7f;"></i>
                                               <i class="fa fa-star" aria-hidden="true" style="color: #d3ad7f;"></i>
                                               <i class="fa fa-star" aria-hidden="true" style="color: #d3ad7f;"></i>
                                               <i class="fa fa-star-half-o  " aria-hidden="true" style="color: #d3ad7f;"></i>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                             </div>
                        </div>
                  </section>
                  <!-- reviews section ends -->
                     
                  <!-- contact us -->
                  <section id="review" class="review py-4" style="background-color: black;">
                    <h1 class="text-center font-weight-bold py-4 text-white">CONTACT <span style="color: #d3ad7f;">US</span></h1>
                      <div class="container">
                            <div class="row">
                                 <div class="col-md-6 col-sm-12">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.386622279953!2d77.1616851144076!3d28.648140190126558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d02eed75d50c7%3A0xfdebdf164b750349!2sSHADIPUR%20METRO!5e0!3m2!1sen!2sin!4v1629743848381!5m2!1sen!2sin" width="569" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                 </div>
                                 <div class="col-md-6 col-sm-12">
                                      <div class="card bg-dark" style="background-color: rgba(71, 68, 68, 0.377);">
                                          <div class="card-body">
                                               <h2 class="text-white text-center"> GET IN TOUCH</h2>
                                               <form>
                                               <div class="inputWithIcon">
  <input type="text" placeholder="Your name" class="bg-dark">
  <i class="fa fa-user fa-lg fa-fw mt-1 ml-2" aria-hidden="true"></i>
</div>

<div class="inputWithIcon">
  <input type="text" placeholder="Email"  class="bg-dark">
  <i class="fa fa-envelope fa-lg fa-fw  mt-1 ml-1" aria-hidden="true"></i>
</div>

<div class="inputWithIcon mb-3">
  <input type="text" placeholder="Phone Number"  class="bg-dark">
  <i class="fa fa-phone fa-lg fa-fw  mt-1 ml-1" aria-hidden="true"></i>
</div>

                                                  <div class="text-center">
                                                    <button type="submit" class="text-white btn " style="background-color: #d3ad7f;">Contact now</button>
                                                  </div>
                                                 
                                              </form>
                                          </div>
                                      </div>
                                </div>
                            </div>
                      </div>
                    </section>
                        
                
                     <!-- contact us ends -->
                     <!-- blogs -->
                       <!-- reviews -->
                  <section id="blog" class="blog py-4" style="background-color: black;">
                    <h1 class="text-center font-weight-bold py-4 text-white">OUR <span style="color: #d3ad7f;">BLOGS</span></h1>
                      <div class="container">
                            <div class="row"> 
                                 <div class="col-md-4 col-sm-12"> 
                                 <div class="card" style="width: 20rem; overflow: hidden;">
  <img src="images/blog-1.jpeg" class="card-img-top img-1" alt="...">
  <div class="card-body" style="background-color: black;">
    <h5 class="card-title font-weight-bold text-white">Tasty and refreshing coffee</h5>
    <p class="card-text" style="color:#d3ad7f ;">By admin/ 1st may, 2021</p>
    <p class="text-white"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore, </p>
    <a href="#" class="btn " style="background-color: #d3ad7f;">Read more</a>
  </div>
</div>
                                 </div>
                                 <div class="col-md-4 col-sm-12"> 
                                 <div class="card" style="width: 20rem;  overflow: hidden;">
  <img src="images/blog-2.jpeg" class="card-img-top img-1" alt="...">
  <div class="card-body"  style="background-color: black;">
    <h5 class="card-title font-weight-bold text-white">Tasty and refreshing coffee</h5>
    <p class="card-text"  style="color:#d3ad7f ;">By admin/ 1st may, 2021</p>
    <p class="text-white"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inci.</p>
    <a href="#" class="btn " style="background-color: #d3ad7f;">Read more</a>
  </div>
</div>
                                     </div>
                                     <div class="col-md-4 col-sm-12"> 
                                     <div class="card" style="width: 20rem;  overflow: hidden;">
  <img src="images/blog-3.jpeg" class="card-img-top img-1" alt="...">
  <div class="card-body"  style="background-color: black;">
    <h5 class="card-title font-weight-bold text-white">Tasty and refreshing coffee</h5>
    <p class="card-text"  style="color:#d3ad7f ;">By admin/ 1st may, 2021</p>
    <p class="text-white"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Natu</p>
    <a href="#" class="btn " style="background-color: #d3ad7f;">Read more</a>
  </div>
</div>
                                     </div>
                            </div>
                      </div>
                  </section>
        
                  <!-- footer -->

                  <footer id = "footer" class="footer " style="background-color: black;">
                        <div class="container">
                             <div class="row">
                                 <div class="col-12 my-3">
                                  <div class="d-flex flex-row justify-content-center align-items-center my-4">
                                    <i class="fa fa-facebook icon-2 mx-1" aria-hidden="true"></i>
                                    <i class="fa fa-instagram icon-2 mx-1" aria-hidden="true"></i>
                                    <i class="fa fa-twitter icon-2 mx-1" aria-hidden="true"></i>
                                    <i class="fa fa-linkedin icon-2 mx-1" aria-hidden="true"></i>
                                    <i class="fa fa-pinterest icon-2 mx-1" aria-hidden="true"></i>
                                    </div>
                                     
                                    <div class="text-center">
                                    <button class="btn text-white" style="border: 1px solid rgba(255, 255, 255, 0.356);">Home</button>
                                    <button class="btn text-white" style="border: 1px solid rgba(255, 255, 255, 0.356);"> About</button>
                                    <button class="btn text-white" style="border: 1px solid rgba(255, 255, 255, 0.356);"> Menu</button>
                                    <button class="btn text-white" style="border: 1px solid rgba(255, 255, 255, 0.356);"> Products</button>
                                    <button class="btn text-white" style="border: 1px solid rgba(255, 255, 255, 0.356);"> Review</button>
                                    <button class="btn text-white" style="border: 1px solid rgba(255, 255, 255, 0.356);"> Contact</button>
                                    <button class="btn text-white mr-5" style="border: 1px solid rgba(255, 255, 255, 0.356);">Blogs</button>
                                     </div>

                                     <p class = "text-white text-center my-4"> Created By <span style="color: #d3ad7f;">Mr web designer</span>| All rights reserved</p>
                                  </div>
                             </div>
                        </div>
                  </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
 
  </body>
</html>