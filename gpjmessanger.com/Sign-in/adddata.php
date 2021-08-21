<?php
include('../header.php');
?>

<?php
$fname=$_POST['First_Name'];
$mname=$_POST['Midel_name'];
$lname=$_POST['Last_Name'];
$gen=$_POST['gen'];
$conumber=$_POST['contac-tnumber'];
$Emailid=$_POST['Emailid'];
$User_Name=$_POST['User_Name'];
$Addrass=$_POST['Addrass'];
$Pass_World=$_POST['Pass_World'];
$Pass_WorldRe=$_POST['Pass_WorldRe'];
$passwoedhint=$_POST['passwoedhint'];
$post="staf";



$unname='SELECT  `username` FROM `rowlogin` WHERE username = "'.$User_Name.'"';
$perdata='SELECT  `username` FROM `authorised person` WHERE username = "'.$User_Name.'"';

$userdat=mysqli_query($conn,$unname);
$perfixdata=mysqli_query($conn,$perdata);

if(mysqli_num_rows($userdat)==0 && mysqli_num_rows($perfixdata)==0){
    
       
              if($Pass_World===$Pass_WorldRe){
                     $passenter= md5($Pass_World);
                     
                     
                     if(!$conn){
                       die('Could not connect :'.mysqli_connect_error());
                         }
        
                       $sql='INSERT INTO `rowlogin`(`firstname`, `midelname`, `lastname`, `gender`, `contactnumber`, `emailid`, `username`, `addrass`, `password`, `passwordhint`, `post`) VALUES ("'.$fname.'","'.$mname.'","'.$lname.'","'.$gen.'","'.$conumber.'","'.$Emailid.'","'.$User_Name.'","'.$Addrass.'","'.$passenter.'","'.$passwoedhint.'","'.$post.'")';
        
                      if(mysqli_query($conn,$sql)){
                          
                          header("location:../loginfolder/login.php");
                         }
        
                               mysqli_close($conn);
        
                           }else{
                                echo '<script>alert("please crect password");</script>';
                                echo "<script>window.history.back();</script>";
                                }          
}else{
    echo '<script>alert("please Enter unique UserName");</script>';
    echo "<script>window.history.back();</script>";
    }




?>