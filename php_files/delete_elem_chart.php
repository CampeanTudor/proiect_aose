
<html>

    <body>
       <?php 

            session_start();
        
        $_SESSION['not_in_chart'] = $_SESSION['nr_elem_to_be_deleted'];
        echo "the index of the elem to be deleted:".$_SESSION['not_in_chart']."<br>";
        
        echo "Before deleting: ";
        foreach($_SESSION['id_elem_chart'] as $value)
            echo $value."  ";
       
        echo "<br>";
        
        
        unset($_SESSION['id_elem_chart'][ $_SESSION['not_in_chart']]);
        
        echo "After deleting: ";
        foreach($_SESSION['id_elem_chart'] as $value)
            echo $value;
        
        
        $interm = array_values($_SESSION['id_elem_chart']);
        echo "After rearanging: ";
        foreach($interm as $value)
            echo $value;
        
        $_SESSION['id_elem_chart'] = array();
        $_SESSION['id_elem_chart'] = $interm;
        $_SESSION['nr_elem_chart']--; 
        
        
         echo "<br>";
         foreach($_SESSION['id_elem_chart'] as $value)
            echo $value;
        
        header('Location:../chart_page.php');
        ?>
    </body>

</html>


