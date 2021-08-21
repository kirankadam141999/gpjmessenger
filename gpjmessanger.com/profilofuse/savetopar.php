<?php
include('../header.php');
?>
<?php

 
session_start();
$id=$_SESSION['id'];

$fname=$_POST['First_Name'];
$mname=$_POST['Midel_name'];
$lname=$_POST['Last_Name'];
$conumber=$_POST['contac-tnumber'];
$Emailid=$_POST['Emailid'];
$User_Name=$_POST['User_Name'];
$Addrass=$_POST['Addrass'];





$unname='SELECT  `username` FROM `authorised person` WHERE username = "'.$User_Name.'"';

$userdat=mysqli_query($conn,$unname);
echo mysqli_num_rows($userdat);
if(mysqli_num_rows($userdat)!=1 || mysqli_num_rows($userdat)==1 ){
    
   
             
                     
                     if(!$conn){
                       die('Could not connect :'.mysqli_connect_error());
                         }
        
                        // $sql='UPDATE `authorised person`(`firstname`, `midelname`, `lastname`, `contactnumber`, `emailid`, `username`, `addrass`, ) VALUES ("'.$fname.'","'.$mname.'","'.$lname.'","'.$conumber.'","'.$Emailid.'","'.$User_Name.'","'.$Addrass.'")';
                       
                         $sql='UPDATE `authorised person` SET `firstname`="'.$fname.'",`midelname`="'.$mname.'",`lastname`="'.$lname.'",`contactnumber`="'.$conumber.'",`emailid`="'.$Emailid.'",`username`="'.$User_Name.'",`addrass`="'.$Addrass.'" WHERE id="'.$id.'"';
                      if(mysqli_query($conn,$sql)){
                        session_destroy(); 
                        echo "<script>window.close();</script>";
                        header('location:../loginfolder/logout.php'); 

                         }
                         mysqli_close($conn);
                               
        
                         
}else{
    echo '<script>alert("please Enter unique UserName");</script>';
    // echo "<script>window.history.back();</script>";
  }
?>