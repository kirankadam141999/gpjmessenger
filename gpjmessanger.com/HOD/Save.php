<?php
include('../header.php');
?>


<?php
$User_Name=$_GET['varname'];
$unname='select * from rowlogin where username="'.$User_Name.'"';
if(!$conn){
    die('Could not connect: '.mysqli_connect_error());
}
$retval=mysqli_query($conn,$unname);
if(mysqli_num_rows($retval)>0){
    while($row=mysqli_fetch_assoc($retval)){
        echo "<pre>";
        print_r($row);
    
        $fname =$row ['firstname'];
        $mname =$row ['midelname'];
        $lname =$row ['lastname'];
        $gen =$row ['gender'];
        $conumber =$row ['contactnumber'];
        $Emailid =$row ['emailid'];
        $User_Name =$row ['username'];
        $Addrass =$row ['addrass'];
        $passenter =$row ['password'];
        $passwoedhint =$row ['passwordhint'];
        $post =$row ['post'];
    }
}
$ins='INSERT INTO `authorised person`(`firstname`, `midelname`, `lastname`, `gender`, `contactnumber`, `emailid`, `username`, `addrass`, `password`, `passwordhint`, `post`) VALUES ("'.$fname.'","'.$mname.'","'.$lname.'","'.$gen.'","'.$conumber.'","'.$Emailid.'","'.$User_Name.'","'.$Addrass.'","'.$passenter.'","'.$passwoedhint.'","'.$post.'")';
$del='DELETE FROM `rowlogin` WHERE username="'.$User_Name.'"';        
                      if(mysqli_query($conn,$ins)){
                          
                          mysqli_query($conn,$del);
                           header("location:../HOD/Acceptance.php");
                         }
                         mysqli_close($conn);
?>