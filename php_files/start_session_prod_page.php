<?php session_start(); ?>
   <html>
    <body>
        
        <?php 
        echo "ce mai faci";
      //the initialisation of the index vector that keeps track of the products in the chart and of the array of id's
        //------------------------------------------------
       
            if(!isset($_SESSION['id_elem_chart']))
            {
                $_SESSION['id_elem_chart'] = array();
                $_SESSION['quantity_elem_in_comenzi'] = array();
                $_SESSION['id_product_commanded'] = array();
            }
            
        
        //------------------------------------------------
        
        
        
    //the initialisation of the var that keeps track of the id-s that won't be put in the chart
        if(!isset($_SESSION['not_in_chart']))
        {
            $_SESSION['not_in_chart'] = -1;
        }
        
        
        
        
        $_SESSION['trans_id'] = $_POST['id'];
        
        header('Location:../prodPage.php');
        ?>
    </body>
</html>