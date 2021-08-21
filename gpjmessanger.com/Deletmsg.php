<?php
include('header.php');
?>
<?php

session_start();




    if(isset($_GET['group'])){

   
  
        $del='DELETE FROM `group` WHERE `gsenderid`="'.$_SESSION['username'].'" AND `gmessage`="'.$_GET['group'].'"';
    
    }else{
        $del='DELETE FROM `chatings` WHERE `senderid`="'.$_SESSION['username'].'" AND `message`="'.$_GET['self'].'"';
    
    }
    
    if(mysqli_query($conn,$del)){
                 
         echo "<script>window.history.back();</script>"; 
    
    }
    




?>