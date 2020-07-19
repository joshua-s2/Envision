<?php 
$con = mysqli_connect("us-cdbr-east-02.cleardb.com","b445b8e057847e","21b1fdc2","heroku_e1558f1ceb2e989");
if (!$con){
    $msg ="could not  connect to the database. <br/>";
    $msg.= "Error Number:". mysqli_connect_errno();
    $msg.="Error:". mysqli_connect_error();
    die($msg);
}
echo "Suceesfully added";
?>
