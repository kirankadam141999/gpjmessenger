<?php
include('../header.php');
?>

<?php
 $username=$_POST['usernamevalue'];
 $password= md5( $_POST['passwordvalue']);
 
 
if(!$conn){
    die('Could not connect: '.mysqli_connect_error());
}
 $sql='SELECT `username`, `password` , `id` FROM `authorised person` WHERE username ="'.$username.'" AND post="HOD"';
 $staf='SELECT `username`, `password`, `id` FROM `authorised person` WHERE username ="'.$username.'"';
 $retval=mysqli_query($conn,$sql);
 $stafdata=mysqli_query($conn,$staf);

 if(mysqli_num_rows($retval)==0 && mysqli_num_rows($stafdata)==0){
	echo '<script>alert("Incorrct UserNmae or Password");</script>';

    echo "<script>window.history.back();</script>";

}
if(mysqli_num_rows($retval)==1){
    while($row=mysqli_fetch_assoc($retval)){
	  $us=$row['username'];
	  $ps=$row['password'];
	  if($username==$us && $password==$ps){

		session_id($username);
		session_start();
		$_SESSION['username']=$username;
		$_SESSION['id']=$row['id'];
		session_write_close();
		header("location:../HOD/HOD.php");
	  }else{
		echo '<script>alert("Incorrct UserNmae or Password");</script>';

		echo "<script>window.history.back();</script>";
	  }
	}

}else{
    while($row=mysqli_fetch_assoc($stafdata)){
	  $us=$row['username'];
	  $ps=$row['password'];
	  
	  if($username==$us && $password==$ps){
		session_id($username);
		session_start();
		$_SESSION['username']=$username;
		$_SESSION['id']=$row['id'];
		session_write_close();


		 header("location:../homePageForeer/HomePage  for  teacher.php");
	  }else{
		echo '<script>alert("Incorrct UserNmae or Password");</script>';

		echo "<script>window.history.back();</script>";
	
	
	  }
	}

}


 ?>