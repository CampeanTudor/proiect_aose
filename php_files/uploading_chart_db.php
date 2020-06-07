<?php
session_start();

function add_quantity($quantity,$conn)
{

  $sql = "INSERT INTO comenzi(cantitateComandata) VALUES ('$quantity')";
  $result = mysqli_query($conn,$sql);
    
}



function retreive_id_by_quantity($quantity,$conn)
{
    $sql = "SELECT idComanda FROM comenzi WHERE 	cantitateComandata
 = ". $quantity;
    
    
    $result = mysqli_query($conn,$sql);
    
    $row= $result->fetch_assoc();
    echo $row['idComanda'];
         return $row['idComanda'];
     
}


function add_in_legatura($idComanda,$idUser,$idProd,$conn)
{
    $sql = "INSERT INTO legatura(idComanda,idUser,idProdus) VALUES('$idComanda','$idUser','$idProd')";
    $result = mysqli_query($conn,$sql);
}







?>


<?php


    
    $conn =mysqli_connect("localhost:3307","root","Cacatmaro97","site_db");

if(!$conn)
{
    die("Connection failed:".mysqli_connect_error());
}



for($i=0; $i<$_SESSION['nr_elem_chart']; $i++)
{
    $_SESSION['quantity_elem_in_comenzi'][$i] = $_POST['prod_id_'.$_SESSION['id_elem_chart'][$i]];

    $_SESSION['id_product_commanded'][$i] = $_POST[$_SESSION['id_elem_chart'][$i]];
    
    //intro the commands and the quantity in comenzi
//--------------------------------
    add_quantity( $_SESSION['quantity_elem_in_comenzi'][$i],$conn);
//---------------------------------
    
    
    //select the id of the commands
//------------------------------
     $idQuantity= retreive_id_by_quantity($_SESSION['quantity_elem_in_comenzi'][$i],$conn);
//------------------------------
    
    
    //intro in legatura table
    //-----------------------------------
      add_in_legatura($idQuantity,$_SESSION['user'],$_SESSION['id_product_commanded'][$i],$conn);
    //-----------------------------------
    
    
    
}

header('Location:../principal_page.php');

//select the id of the commands
//------------------------------



//------------------------------

?>