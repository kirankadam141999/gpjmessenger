<?php
include('../header.php');
?>
<?php
         session_start();
         $ptname=$_GET['ptname'];
         if(isset($_POST['savebutton'])){
          $sql="Delete from posts where title='$ptname'";
          if(mysqli_query($conn,$sql)){
              header('Location: View_all_post.php');
          }
          else{
              echo "did not updated";
          }
         }
          $conn->close();
?>