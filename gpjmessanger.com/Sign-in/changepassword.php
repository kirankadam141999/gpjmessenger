<?php
include('../header.php');
?>

<?php
    session_start();
    $mynm=$_SESSION['username'];
    $opass = md5($_POST['oldpassword']);
    $npass = md5($_POST['newpassWord']);
    $rpass = md5($_POST['renewpassWord']);
    if(isset($_POST['Save'])){
    if($npass==$rpass){
        $q="SELECT  `username`, `password` FROM `authorised person` WHERE `username`='$mynm'";
        $result=mysqli_query($conn,$q);
        if(mysqli_query($conn,$q)){
            $sql="UPDATE `authorised person` SET `password`='$npass' where username='$mynm'";
            if(mysqli_query($conn,$sql)){
                session_destroy(); 
                        echo "<script>window.close();</script>";
                        header('location:../loginfolder/logout.php'); 
            }
            
        }
        
    }else{
		echo '<script>alert("Incorrct Password");</script>';

		echo "<script>window.history.back();</script>";
	  }
   
}

?>