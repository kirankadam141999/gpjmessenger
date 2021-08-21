<?php
include('../header.php');
?>
<?php
session_start();
$mynm=$_SESSION['username'];

    if(isset($_POST['savebutton']) && isset($_POST['pdfpostbutton'])){
        
        $id=$_POST['id'];
        $title=$_POST['posttext'];
        
        $pname=$_FILES['pdfpostbutton']['name'];
        $tmp_name=$_FILES['pdfpostbutton']['tmp_name'];
        $ext=pathinfo($_FILES["pdfpostbutton"]["name"],PATHINFO_EXTENSION);
        
        $basename=$mynm.'___'.$title.'___'.$pname;
        $uplodsDIR='..\letters\/'.$basename;
        $svetpdb="../\letters\/".$basename;
        
        $dest=$uplodsDIR.basename($_FILES['pdfpostbutton']['tmp_name']);
        if(move_uploaded_file($tmp_name,$uplodsDIR)){
            
            $sql="UPDATE posts SET `title`='$title',`timedate`=NOW(),`postpdf`='$svetpdb' where id='$id'";
            if(mysqli_query($conn,$sql)){
                header('Location: ../Delet Update NewPost/View_all_Post.php');
            }
            else{
                echo "did not updated";
            }
        }
    }
    else{
        echo"didnot updated";
    }
    ?>