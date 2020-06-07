<?

$conn = mysqli_connect("127.0.0.1:3307","root","Cacatmaro97","site_db");

if(!$conn)
{
    die("Connection failed:".mysqli_connect_error());
}

?>