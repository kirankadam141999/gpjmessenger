<?php
include('../header.php');
?>

<?php
    $passhint = $_POST['passWord'];
    $unm = $_POST['usernamefield'];
    $npass = md5($_POST['newpassWord']);
    $rpass = md5($_POST['renewpassWord']);
    if(isset($_POST['Save'])){
    if($npass==$rpass){
        $q="SELECT  `username`, `password`, `passwordhint` FROM `authorised person` WHERE username='$unm'and password='$npass' and passwordhint='$passhint'";
        
        if(mysqli_query($conn,$q)){
        
               
            $sql="UPDATE `authorised person` SET `password`='$npass' where username='$unm'";
            if(mysqli_query($conn,$sql)){
                header('Location: login.html');
            }
            else{
                echo "did not updated";
            }
          
        }
        else{
            echo "Enter correct details";
        } 
        
    }
    else{
        echo "password mismatch";
    }
}
else{
    echo "did not set";
}
?>