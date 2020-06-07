

<?php
    
 
  $conn = mysqli_connect('127.0.0.1:3307','root','Cacatmaro97','site_db');

if(!$conn)
{
    die("Connection failed:".mysqli_connect_error());
}






   
function retreive_name($id, $dbName,$conn)
{
    $sql =str_replace("%db%",$dbName, str_replace("%id%",$id, "SELECT nume FROM %db% WHERE id=%id%"));
    

    
    $result = mysqli_query($conn,$sql);
     
     while($row= $result->fetch_assoc())
     {
         echo $row['nume'];
     }
     
}

function retreive_price($id,$dbName,$conn)
{
    $sql =str_replace("%db%",$dbName, str_replace("%id%",$id, "SELECT pret FROM %db% WHERE id=%id%"));
    

    
    $result = mysqli_query($conn,$sql);
     
     while($row= $result->fetch_assoc())
     {
         echo $row['pret']."$";
     }
}

function retreive_imgpath($id,$dbName,$conn)
{
    $sql =str_replace("%db%",$dbName, str_replace("%id%",$id, "SELECT nume_imagine FROM %db% WHERE id=%id%"));
    

    
    $result = mysqli_query($conn,$sql);
     
     while($row= $result->fetch_assoc())
     {
         echo $row['nume_imagine'];
     }
}
    
    
function retreive_quantity($id, $dbName,$conn)
{
    $sql =str_replace("%db%",$dbName, str_replace("%id%",$id, "SELECT cantitate FROM %db% WHERE id=%id%"));
    

    
    $result = mysqli_query($conn,$sql);
     
     while($row= $result->fetch_assoc())
     {
         echo $row['cantitate'];
     }
     
}

    
function retreive_description($id, $dbName,$conn)
{
    $sql =str_replace("%db%",$dbName, str_replace("%id%",$id, "SELECT descriere FROM %db% WHERE id=%id%"));
    

    
    $result = mysqli_query($conn,$sql);
     
     while($row= $result->fetch_assoc())
     {
         echo $row['descriere'];
     }
     
}





    

?>
