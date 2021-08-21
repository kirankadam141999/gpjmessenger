
<?php
include('../header.php');
?>





<?php
session_start();

            if($_SESSION['UID']=='Group'){

                $red="SELECT * FROM `group` WHERE 1";
                $reddata=mysqli_query($conn,$red);
                if(mysqli_num_rows($reddata)){
                    while($row=mysqli_fetch_assoc($reddata)){
                        $sendmsg=$row['gsenderid'];
                        $resivmsg=$row['gresiverid'];
                        $msg=$row['gmessage'];
                        $time=$row['gtime'];
                        
                  
                    ?>
                   <?php
                 if($_SESSION['username']==$sendmsg){
                   ?>
                    <div id="chatmas" style='width: 15vw; font-size: 1.20vw;float: right;margin-top: 1vw;background-color: rgb(157, 253, 149);  border-radius: 2vw; padding-top: 1vw;   padding-left: 1vw; padding-bottom: 1vw; padding-right: 1vw; word-wrap: break-word;'>
                    <!-- <label id="KK"><?php echo $msg ?></label> -->
                    <a  href="../Deletmsg.php?group=<?php echo $msg; ?>" style=" text-decoration: none;" id="nameOFcontery"><?php echo $msg;  ?></a>
                    
    
                </div>
                <div id="chatmas" style="width: 15vw; font-size: 1.20vw;float: right;  border-radius: 2vw;  padding-left: 2vw; padding-bottom: 1vw; padding-top: -3vw;  word-wrap: break-word;">
                <label id="KK"><?php echo $time;  ?></label>

                </div>
         <?php
                 }else{
                     ?>

                <div id="chatmas" style="width: 15vw; font-size: 1.20vw;float: left; border-radius: 2vw;   padding-right: 1vw;  padding-left: 1vw; padding-top: 1vw; word-wrap: break-word; ">
                    <label id="KK"><?php echo $sendmsg;  ?></label>
      
                </div>

                  <div id="chatmas2" style='width: 15vw; font-size: 1.20vw;float: left;margin-top: 0vw;background-color: rgb(206, 206, 211);  border-radius: 2vw; padding-top: 1vw;  padding-right: 1vw;  padding-left: 1vw; padding-bottom: 1vw; word-wrap: break-word; '>
                    <label id="KK2"><?php echo $msg;  ?></label>
    
    
                </div>
                <div id="chatmas3" style="width: 15vw; font-size: 1.20vw;float: left; border-radius: 2vw;   padding-right: 1vw;  padding-left: 1vw; padding-bottom: 1vw; word-wrap: break-word; ">
                    <label id="KK3"><?php echo $time;  ?></label>
      
                </div>
                
                <?php
                }
                    }
                }



            }else{
            $red="SELECT * FROM `chatings` WHERE 1";
            $reddata=mysqli_query($conn,$red);
            if(mysqli_num_rows($reddata)){
                while($row=mysqli_fetch_assoc($reddata)){
                    $sendmsg=$row['senderid'];
                    $resivmsg=$row['resiverid'];
                    $msg=$row['message'];
                    $time=$row['time'];
              
                ?>
               <?php
             if($_SESSION['username']==$sendmsg && $_SESSION['UID']==$resivmsg){
               ?>
                <div id="chatmas" style='width: 15vw; font-size: 1.20vw;float: right;margin-top: 1vw;background-color: rgb(157, 253, 149);  border-radius: 2vw; padding-top: 1vw;   padding-left: 1vw; padding-bottom: 1vw; padding-right: 1vw; word-wrap: break-word;'>
                <!-- <label id="KK"><?php echo $msg ?></label> -->
                <a  href="../Deletmsg.php?self=<?php echo $msg;?>" style=" text-decoration: none;" id="nameOFcontery"><?php echo $msg;  ?></a>


            </div>
            <div id="chatmas" style="width: 15vw; font-size: 1.20vw;float: right;  border-radius: 2vw;  padding-left: 2vw; padding-bottom: 1vw; padding-top: -3vw;  word-wrap: break-word;">
                <label id="KK"><?php echo $time;  ?></label>
  
            </div>
     <?php
             }
             if($_SESSION['UID']==$sendmsg && $_SESSION['username']==$resivmsg){
                 ?>
              <div id="chatmas" style='width: 15vw; font-size: 1.20vw;float: left;margin-top: 1vw;background-color: rgb(206, 206, 211);  border-radius: 2vw; padding-top: 1vw;  padding-right: 1vw;  padding-left: 1vw; padding-bottom: 1vw; word-wrap: break-word; '>
                <label id="KK"><?php echo $msg;  ?></label>


            </div>
            <div id="chatmas" style="width: 15vw; font-size: 1.20vw;float: left; border-radius: 2vw;   padding-right: 1vw;  padding-left: 1vw; padding-bottom: 1vw; word-wrap: break-word; ">
                <label id="KK"><?php echo $time;  ?></label>
  
            </div>
            
            <?php
            }
                }
            }
        }
     ?>
