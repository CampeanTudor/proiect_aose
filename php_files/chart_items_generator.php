
        <?php
          
        
        function chart_items_generator($conn, $i)
        {
            
            $_SESSION['nr_elem_to_be_deleted'] = $i;
            
            
     echo'<div class="panel-footer"><div class="row">
           <div class="col-md-8">
               <h2>';  retreive_name($_SESSION['id_elem_chart'][$i],"produse",$conn);echo'</h2>
           </div>
         
                   <div class="col-md-1">
                        <h2>'; retreive_price($_SESSION['id_elem_chart'][$i],"produse",$conn); echo'</h2>
                   </div>
                   <div class="col-md-1">
                        <input id="style_input" name="prod_id_'.$_SESSION['id_elem_chart'][$i].'" type="number" min="0" max="';retreive_quantity($_SESSION['id_elem_chart'][$i],"produse",$conn);echo'">
                        
                        <input type="hidden" name="';echo $_SESSION['id_elem_chart'][$i];echo'" value="';echo $_SESSION['id_elem_chart'][$i]  ;echo'">
                   </div>
                   <div class="col-md-1">
                        <h2>'; retreive_price($_SESSION['id_elem_chart'][$i],"produse",$conn); echo'</h2>
                   </div>
                   <div class="col-md-1">
                        
                       <h2><a href="php_files/delete_elem_chart.php"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></h2>
                    
                   </div>
               </div>
               </div> ';
               
        }
        
        ?>
    
