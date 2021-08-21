
<?php
include('../header.php');
?>


<?php
    session_start();
    $mynm=$_SESSION['username'];
    
    $notice=$_POST['posttext'];
       
		if(mysqli_connect_error())
		{
			die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
		}
		
		else
		{
            $sql = 'INSERT INTO `shortnotice`(`notice`, `uname`, `timedate`) values ("'.$notice.'","'.$mynm.'",Now())';
            //$result = $conn->query($sql);
			if((mysqli_query($conn,$sql)))
            {
                if($mynm=='ItsMeHOD'){
                   header('Location: ../HOD/HOD.php');}
                else{
                    header('Location: ../homePageForeer/HomePage  for  teacher.php');}
                }
            
            else{
                echo "notsent";
            }
        }
    
?>