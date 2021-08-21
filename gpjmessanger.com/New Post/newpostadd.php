<?php
include('../header.php');
?>
<?php
    session_start();
    $mynm=$_SESSION['username'];
 
    $pt= $_POST['posttitle'];
   
   
    $pname=$_FILES['pdfpostbutton']['name'];
    $tmp_name=$_FILES['pdfpostbutton']['tmp_name'];
    $ext=pathinfo($_FILES["pdfpostbutton"]["name"],PATHINFO_EXTENSION);
    $basename=$mynm.'___'.$pt.'___'.$pname;
    $uplodsDIR='..\letters\/'.$basename;
    $svetpdb="../\letters\/".$basename;

    $dest=$uplodsDIR.basename($_FILES['pdfpostbutton']['tmp_name']);
    $local = "../letters/";
    
    
    if(move_uploaded_file($tmp_name,$uplodsDIR)){
        //$post.src='$setpdb';
        
        $sqlselect='SELECT * FROM `latast_posts` WHERE 1';


        if(($result=mysqli_query($conn,$sqlselect))){

            while($row=mysqli_fetch_array($result))
            {
                $postedby=$row['Uname'];
                $posttitle=$row['titel'];
                $postedon=$row['timedate'];
                $post=$row['postpdf'];
                
                // echo $postedby;
                // echo $posttitle;
                // echo $postedon;
                // echo $post;
            }        
            
            $sqlinsert= 'INSERT INTO `posts`( `Uname`, `title`, `timedate`, `postpdf`)  values ("'.$postedby.'","'.$posttitle.'","'.$postedon.'","'.$post.'")';

            if((mysqli_query($conn,$sqlinsert))){

        
                $sqldeletold='DELETE FROM `latast_posts` WHERE 1';

                if((mysqli_query($conn,$sqldeletold))){
        
                    $sqlnewleter=  'INSERT INTO `latast_posts`(`Uname`, `titel`, `timedate`, `postpdf`) values ("'.$mynm.'","'.$pt.'",Now(),"'.$svetpdb.'")';

                    if((mysqli_query($conn,$sqlnewleter))){
                        //$sql = 'INSERT INTO `latast_posts`(`Uname`, `title`, `timedate`, `postpdf`) values ("'.$mynm.'","'.$pt.'",Now(),"'.$svetpdb.'")';
                        
                            echo "<script>window.history.back();</script>";
                        
                        
                        }else{
                            echo "notsent";
                    }
                }
            }
            
           

         



        }
        
    }
?>