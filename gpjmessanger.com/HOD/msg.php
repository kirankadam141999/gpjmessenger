<?php
include('../header.php');
?>
             <?php
         		session_start();

            if(isset($_POST['buttonsearch'])){
              session_start();
              $_SESSION['SERID']=$_POST['peoplesearch'];
              echo "<script>window.history.back();</script>"; 

            }elseif(isset($_POST['sendbutton']) && isset($_SESSION['UID'])){  
                if(isset($_POST['msgtextarea'])){
                $msg= $_POST['msgtextarea'];
              
                $mynae=$_SESSION['username'];
                $anotherid=$_SESSION['UID'];
                if($_SESSION['UID']=='Group'){
                
                  $msgin='INSERT INTO `group`(`gsenderid`, `gresiverid`, `gmessage`, `gtime`) VALUES ("'.$mynae.'","'.$anotherid.'","'.$msg.'",Now())';

                }else{
                $msgin='INSERT INTO `chatings`(`senderid`, `resiverid`, `message`, `time`) VALUES ("'.$mynae.'","'.$anotherid.'","'.$msg.'",Now())';
                }
                 if(mysqli_query($conn,$msgin)){
                  
                  echo "<script>window.history.back();</script>"; 

             }
            }
            }else{
              echo "<script>window.history.back();</script>"; 

            }
        

 ?>  