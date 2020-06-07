<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The HTML5 Herald</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

 

  <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/css_style_principal.css">
         <script src="js/jquery-3.2.0.js"></script>
          
          
          <script>


            function replaceWord(theWord)
            {
                clearBackground();
               // we get all the spans
                 $(".product-title").each(function(){
                     if($(this).text().toLocaleLowerCase().indexOf(theWord.toLocaleLowerCase()) != -1)
                         {
                             var theParent= $(this).parent().parent().parent();
                            var theId = theParent.attr('id');
                             theParent.css("background-color","grey");
                             console.log(theId);
                             $(location).attr('href', "#" + theId);
                         }
                 })

            }
              
            function clearBackground()
              {
                  $(".product-title").parent().parent().parent().each(function(){
                     $(this).css("background-color", "");
                  })
              }
              
              
              function clearWord(theWord)
        {
            // the initial word
            console.log("the initial word: " + theWord);
            // we remove the symbols
            theWord = theWord.replace(/[.!<>,]/,"");
            // the new word
            console.log("cleaned word: " + theWord);
            return theWord;
            
        }


            function wordHandler(theWord)
            {
                // we display the word
                console.log("selected word: " + theWord);
                theWord = clearWord(theWord);
                // we replace bold al the occurances
                replaceWord(theWord);

            }


            $(document).ready(
                function()
                {
                    $("#search-button").click(function(){
                        var searchText = $("#search-text").val();
                        console.log(searchText);
                        wordHandler(searchText);
                    })
            

                  });

          </script>
          
          <script>
             $(function () {
              $('[data-toggle="popover"]').popover();
            })
            
    
    </script>

   
</head>

<body>

<!--Included php file-->
<!----------------------->
<?php  include('php_files/functions_for_retreiving_by_id.php'); ?>
<?php session_start(); 
  //session_destroy(); ?>
<!---------------------->

<!-- for the search tag-->


 <!-- Starts navbar-->
 
 <nav id = "nav-nomargin"class="navbar navbar-default">
  <div class="container-fluid  navbar-cust">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">CS<span class="glyphicon glyphicon-knight" aria-hidden="true"></span></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
      
          <div class="navbar-form navbar-left" action="#" method="post">
            <div class="form-group">
              <input id="search-text" type="text" class="form-control" placeholder="Search" name="game_to_search">
            </div>
            <button id="search-button" class="btn btn-default">Submit</button>
          </div>
           
            <li class="dropdown dropdown-cust">
              <a href="#" class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="#id-boardgame">Board games</a></li>
                <li><a href="#id-puzzle">Puzzle</a></li>
                <li><a href="#id-comic">Comic Books</a></li>
                <li role="separator" class="divider"></li>
             </ul>
           </li>
    </ul>
     
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
                          <a href="php_files/destroy_session.php" class="text-center"><h4>Logout</h4></a>
                       
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
       
       
        <li><?php 
            
           
            if(isset($_SESSION['user']))
                    {
                       echo'<a href="chart_page.php"> Shopping Cart<span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>';
                    }
                    else
                    {
                        echo '<button type="button" id="style_btn_popover" class="btn btn-default"  data-container="body" data-toggle="popover" data-placement="bottom" data-content="Must login first!"> Shopping Cart<span class="glyphicon glyphicon-user" aria-hidden="true"></span> </button>';

                    }

            
            ?></li>
        
        
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
 
  <!-- Ends navbar-->
  
  
  <!-- float-->

   
       <div >            
           <div id="wrapper">
            <div  id="gallery">
               <img src="image1.jpg" alt="David"
               style = "width: 100%; opacity: 0;">
            </div>
           </div>
       </div>    
       
       <div id="cust-panel" class="panel panel-default">
  <div class="panel-heading"><h3>Categories</h3></div>
  <ul class="list-group">
  <li class="list-group-item">
   <a href="#id-boardgame" > <h4>Boared Games</h4></a>
  </li>
  <li class="list-group-item">
   <a href="#id-puzzle"><h4>Puzzle</h4></a>
  </li>
   <li class="list-group-item">
   <a href="#id-comic" class=text-default><h4>Comic Books</h4></a>
  </li>
  </ul>
</div>
 
      <div class= "clearfix"></div>
    
  
  <!-- the games -->

 
    
   <div class=" well"><h3>All categories</h3></div>
    <!-- the board games-->  
     
     <div id="game-resize">
     <br><br>
      <h4 id="id-boardgame">Boared Games</h4>
       <br>       
        
<!--        Activity-->
          <div class="row">
  <form id="my_form_activity" id="activity"  class="col-md-3" action="php_files/start_session_prod_page.php" method="post" >
   <input type="hidden" name="id" value="1">
    <a href="javascript:{}" class="thumbnail" onclick="document.getElementById('my_form_activity').submit();" >
        <img src="<?php  retreive_imgpath(1,"produse",$conn); ?>" alt="..."></a>
         <div class="caption" align = "center">
          <h3><div class = "product-title">  
          <?php retreive_name(1,"produse",$conn); ?>  
          </div> <small><?php  retreive_price(1,"produse",$conn); ?></small></h3>
        </div>

  </form>
  
<!--  Colonistii-->
  <form id="my_form_catan" id="colonostii" class="col-md-3" action="php_files/start_session_prod_page.php" method="post">
   <input type="hidden" name="id" value="2">
    <a href="javascript:{}" class="thumbnail" onclick="document.getElementById('my_form_catan').submit();">
        <img src="imagini_produse/catan_opt.jpg" alt="..."></a>
         <div class="caption" align = "center">
           <h3><div class = "product-title">
          <?php retreive_name(2,"produse",$conn); ?>
          </div> <small><?php  retreive_price(2,"produse",$conn); ?></small></h3>
        </div>
  </form>
  
  
<!--  Monopoly-->
  <form id="my_form_monopoly" id="monopoly" class="col-md-3" action="php_files/start_session_prod_page.php" method="post">
    <input type="hidden" name="id" value="3">
    <a href="javascript:{}" class="thumbnail" onclick="document.getElementById('my_form_monopoly').submit();">
        <img src="imagini_produse/monopoly_opt.jpg" alt="..."></a>
         <div class="caption" align="center">
          <h3><div class = "product-title">
          <?php retreive_name(3,"produse",$conn); ?>
           </div><small>20$</small></h3>
        </div>
  </form>
  
  
  
<!--  Carcassone-->
  <form id="my_form_carcassone" id="carcassonne" class="col-md-3" action="php_files/start_session_prod_page.php" method="post">
   <input type="hidden" name="id" value="4">
    <a href="javascript:{}" class="thumbnail" onclick="document.getElementById('my_form_carcassone').submit();">
        <img src="imagini_produse/carcassone_opt.png" alt="..."></a>
         <div class="caption">
          <h3><div class = "product-title">
          <?php  retreive_name(4,"produse",$conn); ?>
          </div><small>23$</small></h3>
        </div>
        </form>
  </div>
 

      
      <!-- puzzles -->
      <br><br>
      <h4 id="id-puzzle">Puzzle</h4>
       <br>   
           
<!--        Clementoni-Panorama Disney Dinner 1000 pieces-->
          <div class="row">
              <form  id="my_form_disney_dinner" id="disney-dinner" class="col-md-4" action="php_files/start_session_prod_page.php" method="post">
                <input type="hidden" name="id" value="5">
                <a href="javascript:{}" class="thumbnail" onclick="document.getElementById('my_form_disney_dinner').submit();">
                    <img src="imagini_produse/puzzle/puzzle1opt.jpg" alt="..."></a>
                     <div class="caption" align = "center">
                         <h3><div class = "product-title"><?php  retreive_name(5,"produse",$conn); ?></div><small>24$</small></h3>
                    </div>   
              </form>



            <!--  Clementoni-Panorama Country Side 1000 pieces-->
               <form  id="my_form_country_side" id="disney-dinner" class="col-md-4" action="php_files/start_session_prod_page.php" method="post">
                <input type="hidden" name="id" value="6">
               <a href="javascript:{}" class="thumbnail" onclick="document.getElementById('my_form_country_side').submit();">
                    <img src="imagini_produse/puzzle/puzzle2opt.jpg" alt="..."></a>
                     <div class="caption" align = "center">
                         <h3><div class = "product-title"><?php  retreive_name(6,"produse",$conn); ?></div><small> 23$</small></h3>
                    </div>
              </form>



            <!--  Clementoni-Disney Concert 1000 pieces-->
              <form  id="my_form_disney_concert" id="disney-dinner" class="col-md-4" action="php_files/start_session_prod_page.php" method="post">
               <input type="hidden" name="id" value="7">
                 <a href="javascript:{}" class="thumbnail" onclick="document.getElementById('my_form_disney_concert').submit();">
                    <img src="imagini_produse/puzzle/puzzle3opt.jpg" alt="..."></a>
                     <div class="caption" align="center">
                         <h3><div class = "product-title"><?php  retreive_name(7,"produse",$conn); ?></div> <small>23$</small></h3>
                    </div>
              </form>
        </div>
 
      <!-- comics-->     
    
          <br><br>
      <h4 id="id-comic">Comic Books</h4>
       <br>       
        
          <div class="row">
<!--  DC Comics-The New 52 nr1        -->
  <form  id="my_form_new52_nr1" id="disney-dinner" class="col-md-2" action="php_files/start_session_prod_page.php" method="post">
   <input type="hidden" name="id" value="8">
     <a href="javascript:{}" class="thumbnail" onclick="document.getElementById('my_form_new52_nr1').submit();">
        <img src="imagini_produse/comics/comic1opt.png" alt="..."></a>
         <div class="caption" align = "center">
             <h3><div class = "product-title"><?php  retreive_name(8,"produse",$conn); ?></div> <small>10$</small></h3>
        </div>
  </form>
  
  

<!-- DC Comics-The Flash 100 Page Spectacular -->
  <form  id="my_form_flash_spectacular" id="disney-dinner" class="col-md-2" action="php_files/start_session_prod_page.php" method="post">
   <input type="hidden" name="id" value="9">
     <a href="javascript:{}" class="thumbnail" onclick="document.getElementById('my_form_flash_spectacular').submit();">
        <img src="imagini_produse/comics/comic2opt.jpg" alt="..."></a>
         <div class="caption" align = "center">
             <h3><div class = "product-title"><?php  retreive_name(9,"produse",$conn); ?></div> <small> 40$</small></h3>
        </div>
  </form>
  
  
  
<!-- DC Comics-Suicide Squad -->
  <form  id="my_form_suicide_squad" id="disney-dinner" class="col-md-2" action="php_files/start_session_prod_page.php" method="post">
   <input type="hidden" name="id" value="10">
    <a href="javascript:{}" class="thumbnail" onclick="document.getElementById('my_form_suicide_squad').submit();">
        <img src="imagini_produse/comics/comic3opt.jpg" alt="..."></a>
         <div class="caption" align="center">
             <h3><div class = "product-title"><?php  retreive_name(10,"produse",$conn); ?></div> <small>43$</small></h3>
        </div>
  </form>
  
  
  
<!-- DC Comics-The Flash The Scarlet Speeder -->
  <form  id="my_form_flash_speeder" id="disney-dinner" class="col-md-2" action="php_files/start_session_prod_page.php" method="post">
   <input type="hidden" name="id" value="11">
        <a href="javascript:{}" class="thumbnail" onclick="document.getElementById('my_form_flash_speeder').submit();">
        <img src="imagini_produse/comics/comic5opt.jpg" alt="..."></a>
         <div class="caption">
             <h3><div class = "product-title"><?php  retreive_name(11,"produse",$conn); ?></div><small> 46$ </small></h3>
        </div>
        </form>
        
        
        
<!--   DC Comics-Coloring Book     -->
    <form  id="my_form_coloring_book" id="disney-dinner" class="col-md-2" action="php_files/start_session_prod_page.php" method="post">
   <input type="hidden" name="id" value="12">
        <a href="javascript:{}" class="thumbnail" onclick="document.getElementById('my_form_coloring_book').submit();">
        <img src="imagini_produse/comics/comic4opt.jpg" alt="..."></a>
         <div class="caption">
             <h3>
                 <div class = "product-title">
                     <?php  retreive_name(12,"produse",$conn); ?>
                 </div>
                 <small> 
                      42$
                </small>
             </h3>
        </div>
    </form>
    
    
    
 <!--  DC Comics-The Art of Modern MythMaking  -->
    <form  id="my_form_modern_mythmaking" id="disney-dinner" class="col-md-2" action="php_files/start_session_prod_page.php" method="post">
   <input type="hidden" name="id" value="13">
     <a href="javascript:{}" class="thumbnail" onclick="document.getElementById('my_form_modern_mythmaking').submit();">
    <img src="imagini_produse/comics/comic6opt.jpg" alt="..."></a>
     <div class="caption">
         <h3><div class = "product-title"><?php  retreive_name(13,"produse",$conn); ?></div> <small> 39$</small></h3>
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