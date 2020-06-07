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
     <link href="css/css_style_chart.css" rel="stylesheet">
     
     <script src="js/jquery-3.2.0.js"></script>
          
   
    
  </head>
  <body id="body_style">
  
  <!--Included php file-->
<!----------------------->
<?php include('php_files/connection_to_database.php');
      include('php_files/functions_for_retreiving_by_id.php');
      include('php_files/chart_items_generator.php');
?>
<?php session_start(); ?>
<!---------------------->




  
  <div class="page-header">
  <h1 align="center">Your chart</h1>
  <a id="style_return_princPage_btn" href="principal_page.php" class="btn btn-default">Return to principal page</a>
</div>
  
  
  <div id="style_panel">
  <div class="panel panel-default">
      <div class="panel-body">
       <div class="row">
           <div class="col-md-8">
               <h2>Chart</h2>
           </div>
         
                   <div class="col-md-1">
                        <h2>Price</h2>
                   </div>
                   <div class="col-md-1">
                        <h2>Quantity</h2>
                   </div>
                   <div class="col-md-1">
                        <h2>Subtotal</h2>
                   </div>
                   <div class="col-md-1">
                       <h2>Delete</h2>
                   </div>
               </div>
         
      </div>

   
   
    
   <form action="php_files/uploading_chart_db.php" method="POST">
    <div>
     <?php  
       for($i = 0; $i<$_SESSION['nr_elem_chart']; $i++)
       {
               chart_items_generator($conn,$i);         
       }
      ?>
      <input type="submit" name="submit" value="Submit">;
      </div>
     </form>
    
   
      </div>
      </div>
   
   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
     
  </body>
</html>