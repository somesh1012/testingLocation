

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <style>
          #input-1{
              position: absolute;
              top: 100px;
              right: 20px;
              display: none;
          }
     </style>
    <title></title>
  </head>
  <body>
          <section class="m-0 p-0" style="background-color: black; border-bottom: 1px solid rgba(126, 120, 120, 0.267);"> 
            <div class="container">
                <nav class="navbar navbar-expand-lg " style="background-color: black;" >
                    <a class="navbar-brand py-3" href="#"><img src="images/logo.png" class="img-fluid h-25 w-50"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav m-auto py-3">
                        <li class="nav-item active">
                          <a class="nav-link text-white" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="#">About</a>
                        </li>
                        <li class="nav-item ">
                          <a class="nav-link text-white" href="#" >
                              Menu
                          </a>
                          
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="#">Products</a>
                        </li>
                  
                        <li class="nav-item">
                          <a class="nav-link text-white" href="#">Review </a>
                        </li>
                  
                        <li class="nav-item">
                          <a class="nav-link text-white" href="#">Contacts </a>
                        </li>
                          
                        <li class="nav-item">
                          <a class="nav-link text-primary" href="#"  data-toggle="modal" data-target="#staticBackdrop">LOGIN|SIGNUP </a>
                        </li>
                  
                  
                      </ul>
                      
                      <ul class="navbar-nav">
                           <li class="nav-item">
                            <a class="nav-link text-white" href="#"> <i class="fa fa-search"  id ="toggle" aria-hidden="true"></i></a>
                          </li>
                          
    
                           <li class="nav-item">
                            <a class="nav-link text-white" href="#"> <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                           </li>
                      </ul>
                    </div>
                  </nav>
                    
                 
            </div>
        </section>
             
           <form>
               <div class="form-group w-25 " id="input-1">
                   <input type="search" class="form-control m-0 p-0" style="max-width: 300px !important;" placeholder="search here">
               </div>
           </form>
        
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script>
          $(document).ready(function(){
                  $('#toggle').click(function(){
                         $('#input-1').toggle();
                  });
          });
      </script>
  </body>
</html>