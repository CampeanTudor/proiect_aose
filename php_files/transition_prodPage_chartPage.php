<html>
  <?php session_start(); ?>
    <body>
        
        <?php
       
        //the intro in session of the id that will be put in the chart     !!session is a vector with all the elemtns in the chart
        //the incrementation of the index that will keep track of the elements in the chart
        
        if(!isset($_SESSION['index_id_elem_chart'] ))
        {
             $_SESSION['index_id_elem_chart'] = 0;     //for atribuing the correct position only in this page
            $_SESSION['nr_elem_chart'] = 1;            // total nr of elem in the chart
            
        }
        else
        {
            $_SESSION['index_id_elem_chart']++;
            $_SESSION['nr_elem_chart']++;
        }
       
        
        
        $_SESSION['id_elem_chart'][$_SESSION['index_id_elem_chart']] = $_SESSION['trans_id'];
      
        
        foreach( $_SESSION['id_elem_chart'] as $value)
        {
            echo $value. "        ";
        }
        header('Location:../principal_page.php');
        ?>
    </body>
</html>