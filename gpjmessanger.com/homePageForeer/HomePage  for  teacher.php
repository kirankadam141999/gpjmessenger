<?php
include('../header.php');
?>
<?php 

session_start();
// echo $_SESSION['username'];
if(isset($_GET['varname'])){
    $UID=$_GET['varname'];
    $_SESSION['UID']=$UID;


}else{
    $UID="";
    $_SESSION['UID']=$UID;

}
if(!isset($_SESSION['username']) && !isset($_SESSION['id']))
{
    echo $_SESSION['username'];

    echo "<script>alert('You are not valid user to access this page, please login');window.location='../loginfolder/login.php';</script>";

}
?>

<html>
    <title>
        GPJ Messenger
    </title>
    <head>
        <?php
        
        $q="select * from shortnotice";
        $result=mysqli_query($conn,$q);
        while($row=mysqli_fetch_array($result))
        {
            $notice=$row['notice'];
            continue;
        }
        $q="select * from latast_posts";
        $result=mysqli_query($conn,$q);
        while($row=mysqli_fetch_array($result))
        {
            $postedby=$row['Uname'];
            $posttitle=$row['titel'];
            $postedon=$row['timedate'];
            $post=$row['postpdf'];
            continue;
        }
        ?>
        <link rel="stylesheet" type="text/css" href="HomePage For Techer.css">
      
        <script>
          
           

            document.addEventListener("contextmenu",function(e){
                e.preventDefault();
            },false);
            

           

             function retrive_from_Database(){

                    document.getElementById("msgtextarea").inerHTML="";       
                    document.getElementById("peoplesearch").value="";       
                    
                    document.getElementById('msgtextarea').ondblclick=function(){
                    document.getElementById("msgtextarea").value="";       

                }
                settime=setInterval(function(){
                var scrollb=document.getElementById('chatmasg');
                scrollb.scrollTop=scrollb.scrollHeight;
                 
                clearInterval(settime);
                     },10);

                   
                 note();
                pdfsarve();
                  
                 postDetial();
          
        setInterval("call()",500);
       
             }

            
           
          
             

             
        
        
            // Function for sliding the div menu
            function openNav(){
                document.getElementById("mySidenav").style.width="250px";

            }
            function closeNav(){
                document.getElementById("mySidenav").style.width="0px";

            }
            
           
           
            //function for postDitel to text for post
            function postDetial(postText=<?php echo json_encode($posttitle); ?>,dateofpodt=<?php echo json_encode($postedon); ?>,peopleofname=<?php echo json_encode($postedby); ?>){
                if(/\S/.test(postText)){
                    document.getElementById('postditel').innerHTML=postText;
                    document.getElementById('valuefrombata').innerHTML=dateofpodt;
                    document.getElementById('valueofpop').innerHTML=peopleofname;
                }
                     infoofpost.onmouseover=function(){
                       
                       document.getElementById('info_of_dateuser').style.visibility="visible";

                        }
                        infoofpost.onmouseout=function(){
                       
                       document.getElementById('info_of_dateuser').style.visibility="hidden";

                        }
                        info_of_dateuser.onmouseover=function(){
                       
                       document.getElementById('info_of_dateuser').style="position: unset; visibility:visible;";
                        }
                        info_of_dateuser.onmouseout=function(){
                       
                       document.getElementById('info_of_dateuser').style="position: relative; visibility:hidden;";
                        }

            }

             //this function for slide note 
             function note(textmsg=<?php echo json_encode($notice); ?>){   

                if(/\S/.test(textmsg)){
                document.getElementById('notetext').innerHTML=textmsg;
                document.getElementById('slidenote').style.visibility="visible";
                } 
                        slidenote.onmouseover=function(){
                       
                       document.getElementById('slidenote').style="position: unset; visibility:visible;";
                        }
                        slidenote.onmouseout=function(){
                       
                       document.getElementById('slidenote').style="position: relative;visibility:visible;";
                        }
            }

            function pdfsarve(pdfcontant=<?php echo json_encode($post); ?>){
                document.getElementById('pdfdoc').src=pdfcontant;
            }
            
        </script>     
    </head>
    <body onload="retrive_from_Database()">
        <form action="../HOD/msg.php" method="POST">
            <div id="slidenote" class="hidescroll_note">
                <label id="notetext"></label>
            </div>
    
                <img id="gpjlogo" src="../images/gpjlogo.png">
                <h1 id="nameofmassenger">GPJ : CO - Messenger</h1>

         
                <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)"class="closebtn" onclick="closeNav()">&times;</a>
                <a href="../profilofuse/Profile of User.php"> Profile</a>
                    <a href="../New Post/New Post.php">New Circular</a>
                    <a href="../homePageForeer/view post for techer.php">View All Circular</a>
                    <a href="../profilofuse/All User.php">User</a>
                    <a href="../Sign-in/Change password.php">Change Password</a>
                    <a href="../New Post/Short Notic.php">Notice</a>
                    <a href="../loginfolder/logout.php">Log-Out</a>


            </div>
          
        <div id="backofmenu">
            <span class="bas" style="font-size: 3vw; margin-top: -50px; cursor: pointer;" onclick="openNav()">&#9776; </span>
        </div>

        
        <div id="pdfpost">
            <embed id="pdfdoc" 
                type="application/pdf"
                id="pdfDocument"
                width="100%"
                height="100%">
            </embed>
        </div>
        <div id="info_of_dateuser" class="scrollhidepost">
            <h2 id="dateofpost">Date / Time of Circular :-</h2><h3 id="valuefrombata"></h3>
            <h2 id="dateofpost">Post By :-</h2><h3 id="valueofpop"></h3>

        </div>                                                      
        <div>
            <div id="infoofpost" class="hidescroll_postdetil">   
                <h5 id="postditel">The post detial</h5>      
            </div><br>  
          
        </div>
        
        <div id="backgroundofchat" >
            <div id="headsearch">
                <h2 id="gpjmessanger">GPJ Messenger</h2>
            </div>
                
                <div id="searchbar">
                    <div   class="maillogodiv" id="ccc" style="margin-top: 0vw;">
                       
                    <?php
                            if($_SESSION['UID']!="Group"){
                           $popp='SELECT `username`,`gender` FROM `authorised person` WHERE username ="'.$_SESSION['UID'].'"';
                           $retvall=mysqli_query($conn,$popp);
                           if(mysqli_num_rows($retvall)){
                               $roww=mysqli_fetch_assoc($retvall);
                               $gnn=$roww['gender'];    
                               $uss=$roww['username'];
                           
                               if($gnn=='mail'){
                                   $src="../images/humanlogo.png";
                               }else{
                                   $src="../images/femaillogo.png";
                               }
                            ?>
                               
                               <img id="humancontantlogo" src="<?php echo $src; ?>">
                               <h4 id="nameofpersion"><?php echo $uss; ?></h4>
                           <?php
                           }
                        }else{
                           
                            ?>
                                <h4 id="nameofpersion1">Group</h4> 

                            <?php
                        }
                           ?>
                              
       
                           </div>

                </div>
                <div id="chatmasg">
                    
         



            <?php
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

                  <div id="chatmas" style='width: 15vw; font-size: 1.20vw;float: left;margin-top: 0vw;background-color: rgb(206, 206, 211);  border-radius: 2vw; padding-top: 1vw;  padding-right: 1vw;  padding-left: 1vw; padding-bottom: 1vw; word-wrap: break-word; '>
                    <label id="KK"><?php echo $msg;  ?></label>
    
    
                </div>
                <div id="chatmas" style="width: 15vw; font-size: 1.20vw;float: left; border-radius: 2vw;   padding-right: 1vw;  padding-left: 1vw; padding-bottom: 1vw; word-wrap: break-word; ">
                    <label id="KK"><?php echo $time;  ?></label>
      
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





             </div>
             <script type="text/javascript" src="../jquery.js"></script>
            <script type="text/javascript">
                    $(document).ready(function() {
                            setInterval(function () {
                         $('#chatmasg').load('../HOD/runtimeHOD.php');
                        
                          document.getElementById("chatmasg").scrollTop +=100;

                       
               
                    }, 3000);
                    });
            </script>
 
             <div id="botuamtextfild">
                <input type="text" name="peoplesearch" id="peoplesearch"/>
                <input type="submit" id="buttonsearch" name="buttonsearch" value="Search" />

                <textarea id="msgtextarea" name="msgtextarea" class="hidescroll_massage" rows="3" cols="30"></textarea><br>
                <input id="sendbutton" name="sendbutton" type="submit" value="Send"  />
            </div>

                     <div id="contantpeople" class="pophidescroll">
                     <div id='chatt' style="width: 19vw;  margin-top: 1vw;  background-color: rgb(25, 1, 161); float: left;  border-radius: 2vw; word-wrap: break-word; padding-top: 1vw;padding-bottom: 1vw;  padding-left: 0.50vw;padding-right: 0.50vw;">
        
                        <a  href="HomePage  for  teacher.php?varname=Group" id="nameOFcontery"style=" text-decoration: none; color: white; font-size: 2vw; margin-left:6vw; ">Group</a>
                        </div>

                     <?php
                    if(isset($_SESSION['SERID']) &&  $_SESSION['SERID']!="All"){
                        $pop="SELECT `username`,`gender` FROM `authorised person` WHERE username  LIKE '%".$_SESSION['SERID']."%' AND username!='".$_SESSION['username']."'";
                                                                                                
                    }else{
                        $pop='SELECT `username`,`gender` FROM `authorised person` WHERE username!="'.$_SESSION['username'].'"';

                    } 
                    $retval=mysqli_query($conn,$pop);
                    if(mysqli_num_rows($retval)){
                        while($row=mysqli_fetch_assoc($retval)){
                        $gn=$row['gender'];    
                        $us=$row['username'];
                          fun($us,$gn);
                        }
                    }
                    function fun($x,$i){
                        if($i=='femail'){
                            $path='../images/femaillogo.png';
                            $sty="width: 4vw;height: 4.30vw; float: left; padding-left: 1vw; margin-top: -1.50vw;";
                        }else{
                            $path="../images/humanlogo.png";
                            $sty="width: 5vw;height: 4.50vw; float: left;margin-top: -1.50vw;";
                        }    

                    ?>
                    
                        <div id='chat' style="width: 19vw;  margin-top: 1vw;  background-color: rgb(25, 1, 161); float: left;  border-radius: 2vw; word-wrap: break-word; padding-top: 2vw;padding-bottom: 1vw;  padding-left: 0.50vw;padding-right: 0.50vw;">
                        <img id="genderlogo" src="<?php echo $path?>" style="<?php echo $sty?>">
                        <a  href="HomePage  for  teacher.php?varname=<?php echo $x?>" id="nameOFcontery"style=" text-decoration: none; color: white; font-size: 2vw; margin-left:1vw;padding-top:5vw; "><?php echo $x;  ?></a>

                        </div>

                   
                     <?php
                     }
                     ?>
                     </div>
            </div>
        </form>
    </body>
</html>