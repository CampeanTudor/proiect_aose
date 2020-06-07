<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/css_style_principal.css">
    <link rel="stylesheet" type="text/css" href="css/css_style_prodPage.css">
      <script src="js/jquery-3.2.0.js"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   
   <!--Included php file-->
<!----------------------->
<?php  include('php_files/functions_for_retreiving_by_id.php'); ?>
<?php session_start();
     ?>
<!---------------------->

   
   
   
    
<!--    jumbotron-->
    <div class="jumbotron" id="style_jumbotron">
    <div class="row">
  <div class="col-md-8">
    <h1><?php  retreive_name($_SESSION['trans_id'],"produse",$conn); ?></h1>
  </div>

   
  <div class="col-md-4">
  <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Login<span class="glyphicon glyphicon-user" aria-hidden="true"></span> <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
               
                <li>
                    
                    
                   <form action="php_files/login.php" method="post">
                       <div class="form-group">
                           <h4 class="text-center">Email</h4>
                           <input type = email  class = "form-control" placeholder="Add Email" name="loginEmail">
                       </div>
                       <div class="form-group">
                           <h4 class="text-center">Password</h4>
                            <input type = password  class = "form-control" placeholder="Add Password" name="loginPwd">
                       </div>
                       
                       
                      <div class="text-center">
                       <input type="submit" class="btn btn-default" value="Submit">
                       </div>
                   </form>
                <hr>
                   
                </li>
                
                <li>
                    <div class="well well-sm " align="center">Don't have an account?&nbsp;&nbsp;<a class="btn btn-default" href="http://localhost/proiect-db/new_account.php?" role="button">Click here</a></div>
                </li>
              </ul>
            </li>
  
      </ul>
    
</div>
      </div>  
      </div>
   
<!--    thumbnail-->
<div class="row">
  <div class=" col-md-6">
    <a href="#" class="thumbnail"  id="style_thumbnail">
      <img src="<?php  retreive_imgpath($_SESSION['trans_id'],"produse",$conn); ?>" alt="...">
      <p></p>
    </a>
  </div>
  <div class=" col-md-6">
    <div  class="thumbnail" id="thumbnail_text_arrange" >
      <div>
          <h2>Price: <?php  retreive_price($_SESSION['trans_id'],"produse",$conn); ?></h2>
         <h2>Available: <?php  retreive_quantity($_SESSION['trans_id'],"produse",$conn); ?></h2>
         <form id="add_to_chart" action="php_files/transition_prodPage_chartPage.php" method="post">
  <div class="form-group" >
    
      <a href="javascript:{}"  class="btn btn-lg" id="btn_style"  class="thumbnail" onclick="document.getElementById('add_to_chart').submit();" >Add to chart</a>
  </div>
          </form>
        <div class="jumbotron">
  <h2 id="style_description">Description:</h2>
  <p id="paragraph_description_style"><?php retreive_description($_SESSION['trans_id'],"produse",$conn); ?></p>
</div>
          
      </div>
      </div>
  </div>
  
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>