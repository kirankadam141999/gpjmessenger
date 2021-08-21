<?php
include('../header.php');
?>

<?php


session_start();
$id=$_SESSION['id'];
if(!isset($_SESSION['id']))
{
    echo $_SESSION['username'];

    echo "<script>alert('You are not valid user to access this page, please login');window.location='../loginfolder/login.php';</script>";

} 
?>

<html>
    <head>
    
        <title>
            GPJ Messenger 
        </title>
        <link rel="stylesheet" type="text/css" href="ProffileOfUser.css">
        <script>

            document.addEventListener("contextmenu",function(e){
                e.preventDefault();
            },false);

               
        function buttonevent(){

     
            document.getElementById('Cancel').onmousemove=function(){
                this.style.background="Red";
                this.style.color="white";
                }
    
                document.getElementById('Cancel').onmouseout=function(){
                    this.style.background="white";
                    this.style.color="black";
                }
                document.getElementById('Save').onmousemove=function(){
                this.style.background="green";
                this.style.color="white";
                }
    
                document.getElementById('Save').onmouseout=function(){
                    this.style.background="white";
                    this.style.color="black";
                }
                
            }
            
        </script>

    </head>
    <body onload="buttonevent()">
   
        <form action="savetopar.php" method="POST">

        <?php
             $sql='SELECT * FROM `authorised person` WHERE id="'.$id.'"';
             $retval=mysqli_query($conn,$sql);
             if(mysqli_num_rows($retval)==1){
                $row=mysqli_fetch_assoc($retval);
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
            ?>
            
        

                 <!-- bellow two images is of GPJ and MSBTE on login page -->
                 <img id="logomsbte" src="../images/msbte.png" class="img-responsive" alt="Responsive image">
                 <img id="logogpj" src="../images/gpjlogo.png">
 
             <h2 id="gpjtext">Government Polytechnic, jalgoan</h2>
             <h4 id="cotext">Computer Department Messenger </h4>
        
            <div id="sign-in-page">
                <h4 id="logintext">Up-Date Profil</h4>
                <img id="humanlogo" src="../images/humanlogo.png"><br>
               
                <h1 id="firstname">First Name :-</h1>
                <input type="text" value='<?php echo $fname;  ?>' name="First_Name" id="First_Name"required>
                
                <h2 id="midelname">Middle Name :-</h1>
                <input type="text" value="<?php echo $mname;?>" name="Midel_name" id="Midel_name"required>
               
                <h3 id="lastname">Last Name :-</h3>
                <input type="text" value="<?php echo $lname;?>" name="Last_Name" id="Last_Name"required>

                <h4 id="contactnumber">Contact Number :-</h4>
                <input type="text" value="<?php echo $conumber;?>" name="contac-tnumber" id="contac-tnumber"required><br>

                <h5 id="email">Email ID :-</h5>
                <input type="text" value="<?php echo $Emailid;?>" name="Emailid" id="Emailid"required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br>
               
                <h5 id="UserName">User Name :-</h5>
                <input type="text"value="<?php echo $User_Name;?>" name="User_Name" id="User_Name"required>


                <h6 id="addrassuser">Address :-</h6>
                <textarea id="Addrass" name="Addrass" title="write your whole addrass"><?php echo $Addrass; ?></textarea><br><br><br>
                
                <input type="button"  id="Cancel" value="Cancle" onclick="alert('For close Page! Press Ok'),window.history.back()">
                <input type="submit"  id="Save" value="Save" >
             


                
 
            </div><br><br>
        </form>

    </body>
</html>