  <?php
        $con = mysqli_connect('localhost', 'root', '', 'coffee_shop');
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            $sql = "select * from `signup` where username = '$username' AND password = '$password'";
            $query = mysqli_query($con, $sql);

            $num = mysqli_num_rows($query);
            // echo $num;
            // if($num = 1){
            //     echo "<script> alert('you are logged in '); </script>";
            //     header('location: index.php');
            // }
            // else{
            //    echo "<script> alert('check credentials'); </script>";
            // }
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

    <title>login</title>
    <style>
        * { box-sizing:border-box; }

body {
  background: #eee;
  -webkit-font-smoothing: antialiased;
}

hgroup { 
  text-align:center;
  margin-top: 4em;
}

span {
    font-size: 0.95em;
    font-weight: 600;
    letter-spacing: 0.3em;
    line-height: 24px;
    text-transform: uppercase;
}

/*------------------------------------------------------------------
[ Login Form ]*/

.log-form {
  width: 500px;
  margin: 4em auto;
  padding: 3em 2em 2em 2em;
  background: #fafafa;
  border: 1px solid #ebebeb;
  box-shadow: rgba(0,0,0,0.14902) 0px 1px 1px 0px,rgba(0,0,0,0.09804) 0px 1px 2px 0px;
}

.group { 
  position: relative; 
  margin-bottom: 45px; 
}

.log-input {
  font-size: 18px;
  padding: 10px 10px 10px 5px;
  -webkit-appearance: none;
  display: block;
  background: #fafafa;
  color: #636363;
  width: 100%;
  border: none;
  border-radius: 0;
  border-bottom: 1px solid #757575;
}

.log-input:focus { outline: none; }

.log-form a {
    font-size: 9px;
    font-weight: 600;
    letter-spacing: 0.3em;
    line-height: 24px;
    text-transform: uppercase;
    color: #aaaaaa;
}

.left-align {
    float: left;
    text-align: left;
}

.right-align {
    float: right;
    text-align: right;
}


/*------------------------------------------------------------------
[ Button same code as contact form ]*/

.container-log-btn {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  padding-top: 50px;
}

.log-form-btn {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 20px;
  min-width: 250px;
  height: 50px;
  background-color: transparent;
  border-radius:7px;
  cursor: pointer;

  font-size: 16px;
  color: #000;
  line-height: 1.2;
  text-transform: uppercase;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
  position: relative;
  z-index: 1;
}

.log-form-btn::before {
  content: "";
  display: block;
  position: absolute;
  z-index: -1;
  width: 100%;
  height: 100%;
  top: 0;
  left: 50%;
  -webkit-transform: translateX(-50%);
  -moz-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  -o-transform: translateX(-50%);
  transform: translateX(-50%);
  border-radius: 7px;
  background-color: #9e8c7b;
  pointer-events: none;
  
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.log-form-btn:hover:before {
  background-color: #916439;
}

input[type="text"], input[type="email"], input[type="password"], textarea, select {
    background: transparent;
    border: none;
    font-family: "Montserrat";
    font-size: 12px;
    font-weight: 400;
    letter-spacing: 0.2em;
    line-height: 24px;
    height: 42px;
    padding-left: 20px;
    padding-right: 20px;
    text-transform: none;
    width: 100%;
}

input[type="checkbox"]:not(:checked) + label, input[type="checkbox"]:checked + label {
    color: #aaaaaa;
    cursor: pointer;
    font-size: 9px;
    font-weight: 600;
    letter-spacing: 0.3em;
    padding-left: 10px;
    padding-top: 6px;
    position: relative;
    text-transform: uppercase;
}


        </style>
  </head>
  <body>
      <?php  echo $num; ?>
  <nav class="navbar navbar-expand-lg " style="background-color: black;" >
                <a class="navbar-brand ml-5" href="#"><img src="images/logo.png" class="img-fluid h-25 w-50"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  
                  <ul class="navbar-nav mr-auto">
                       <li class="nav-item">
                        <a class="nav-link text-white" href="#"> <i class="fa fa-search" aria-hidden="true"></i></a>
                      </li>

                       <li class="nav-item">
                        <a class="nav-link text-white" href="#"> <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                       </li>
                  </ul>
                </div>
              </nav>

              <section>

                <hgroup>
                    <h1>Login to Cafenna</h1>
                    <p>Please enter your details to login into your account</p>
                </hgroup>
            
                <form method = "post" class = "log-form">
            
                    <div class="group log-input">
                        <input type="text" id = "username" name = "username" placeholder = "Username">
                    </div>
            
                    <div class="group log-input">
                        <input type="password" id = "password" name = "password"  placeholder = "Password">
                    </div>
            
                    <span class="check left-align">
                        <input type="checkbox" name = "remember me">
                        <label>Remember Me</label>
                    </span>
            
                    <a class = "right-align" href="#">Forgot Password</a>
            
                    <br><br>
            
                    <div class="container-log-btn">
                      <button type="submit" name = "submit" class="log-form-btn">
                        <span>Login</span>
                      </button>
                    </div>
            
                </form>
            
                
            
            </section>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
      <script>
       
          </script>
  </body>
</html>