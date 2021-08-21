<?php
include('../header.php');
?>


<?php


$User_Name=$_GET['varname'];

$del='DELETE FROM `rowlogin` WHERE username="'.$User_Name.'"';        

mysqli_query($conn,$del);

header("location:../HOD/Acceptance.php");

?>