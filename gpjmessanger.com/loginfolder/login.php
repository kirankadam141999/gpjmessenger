<?php
include('../header.php');
?>


<!DOCTYPE html>
<html lang="en"> 
    <head>
         <title>
            GPJ Messenger
        </title>
        
        <link rel="stylesheet" href="styleslogin.css">
         
    </head>
    <!-- This is code for background color effect in body tag refference css body for css editing -->
     <body onload="buttonevent()">
        
        <form action="loginchack.php" method="POST">
            <!-- bellow two images is of GPJ and MSBTE on login page -->
                <img id="logomsbte" src="../images/msbte.png" class="img-responsive" alt="Responsive image">
                <img id="logogpj" src="../images/gpjlogo.png">

            <h2 id="gpjtext">Government Polytechnic, jalgoan</h2>
            <h4 id="cotext">Computer Department Messenger </h4><br>
            <h1 id="logintext">LOGIN</h1>
                
            <!-- this is code for login window includes username and the password -->
                <div id="loginbackground"  >    
                    <img id="humanlogo" src="../images/humanlogo.png"><br>
                    <h3 id="usernametext">UserName :-</h3><br>
              
                    <input type="text" name="usernamevalue" id="usernamevalue" placeholder="Enter UserName" required>  
                    <h5 id="passwordtext">Password :-</h5><br>

                    <input type="password" name="passwordvalue" id="passwordvalue" placeholder="Enter Password" required="required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">  
                    <input type="checkbox" id="chackboxshow" onclick="Toggle()" > <h6 id="showpasswordmsg">Show </h6><br>
                    <input type="submit"  id="loginbutton" value="Log-in" onclick="looddata()"/>
                    <input type="submit"  id="signinbutton" value="Sign-in" onclick="lodsignin()"/><br><br><br>
                    <a id="forgpass" href="../loginfolder/forgot password.php">Forgot Password</a>


                </div><br><br><br><br>
        </form>
        
        <script>
            
            document.addEventListener("contextmenu",function(e){
                e.preventDefault();
            },false);


            function looddata(){
                var pass=document.getElementById('passwordvalue').value;
                var uname=document.getElementById('usernamevalue').value;
                // alert(pass);
                // alert(uname);
            }


            function buttonevent(){
                //this is code for submit button having hovor event
                document.getElementById('loginbutton').onmousemove=function(){
                this.style.background="darkblue";
                this.style.color="white";
                }
    
                document.getElementById('loginbutton').onmouseout=function(){
                    this.style.background="white";
                    this.style.color="black";
                }
                document.getElementById('signinbutton').onmousemove=function(){
                this.style.background="green";
                this.style.color="white";
                }
    
                document.getElementById('signinbutton').onmouseout=function(){
                    this.style.background="white";
                    this.style.color="black";
                }
                
            }
            function lodsignin(){
                location.href="../Sign-in/Sign-in.php";
            }
            //this is the toggle event on radio button to show or hide the password
            function Toggle(){
                var temp=document.getElementById('passwordvalue');
                if(temp.type==="password"){
                    temp.type="text";
                }
                else{
                    temp.type="password"
                }
            }
            </script>
    </body>
</html>