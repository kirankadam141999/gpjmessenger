<?php
include('../header.php');
?>

<html>
    <head>
        
        <title>
            GPJ Messenger 
        </title>
        <link rel="stylesheet" type="text/css" href="Sign-in.css">
        <script>
               document.addEventListener("contextmenu",function(e){
                e.preventDefault();
            },false);
            
        function buttonevent(){

         document.getElementById('Signinbutton').onmousemove=function(){
                this.style.background="darkblue";
                this.style.color="white";
                }
    
                document.getElementById('Signinbutton').onmouseout=function(){
                    this.style.background="white";
                    this.style.color="black";
                }
                document.getElementById('Chack').onmousemove=function(){
                this.style.background="green";
                this.style.color="white";
                }
    
                document.getElementById('Chack').onmouseout=function(){
                    this.style.background="white";
                    this.style.color="black";
                }
                
            }
            function Toggle(){
                var temp=document.getElementById('Pass_World');
                if(temp.type==="password"){
                    temp.type="text";
                }
                else{
                    temp.type="password"
                }
            }
            
        </script>

    </head>
    <body onload="buttonevent()">
        <form action="adddata.php" method="POST">
                 <!-- bellow two images is of GPJ and MSBTE on login page -->
                 <img id="logomsbte" src="../images/msbte.png" class="img-responsive" alt="Responsive image">
                 <img id="logogpj" src="../images/gpjlogo.png">
 
             <h2 id="gpjtext">Government Polytechnic, jalgoan</h2>
             <h4 id="cotext">Computer Department Messenger </h4>
        
            <div id="sign-in-page">
                <h4 id="logintext">Sign-in </h4>
                <img id="humanlogo" src="../images/humanlogo.png"><br>
               
                <h1 id="firstname">First Name :-</h1>
                <input type="text" name="First_Name" id="First_Name"required>
                
                <h2 id="midelname">Middle Name :-</h1>
                <input type="text" name="Midel_name" id="Midel_name"required>
               
                <h3 id="lastname">Last Name :-</h3>
                <input type="text" name="Last_Name" id="Last_Name"required>

                <h3 id="genderlebel">Gender :-</h3>
                <input type="radio" name="gen" id="mail" value="mail" name="gender"><h3  id="mailText" >Male</h3>
                <input type="radio"  name="gen" id="femail" value="femail" name="gender"><h3 id="femailText" >Female</h3>


                 <h4 id="contactnumber">Contact Number :-</h4>
                <input type="text" name="contac-tnumber" id="contac-tnumber"required><br>

                <h5 id="email">Email ID :-</h5>
                <input type="text" name="Emailid" id="Emailid"required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br>
               
                <h5 id="UserName">User Name :-</h5>
                <input type="text" name="User_Name" id="User_Name"required>


                <h6 id="addrassuser">Address :-</h6>
                <textarea id="Addrass" name="Addrass" title="write your whole addrass"></textarea><br>
                
                <h5 id="Password">Enter Password :-</h5>
                <input type="password"  name="Pass_World" id="Pass_World"required placeholder="Enter Password" required="required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                <input type="checkbox" id="chackboxshow" onclick="Toggle()" > <h6 id="showpasswordmsg">Show </h6><br><br>
               
                <h5 id="Passwordre">Conform Password :-</h5>
                <input type="password" name="Pass_WorldRe" id="Pass_WorldRe" required placeholder="Enter Password" required="required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"><br>



                <h5 id="hint">Enter your password hint:-</h5>
                <input type="text" name="passwoedhint" id="texthient" title="Enter your hint for forgotPassword in feacture"><br> 
                
                <input type="submit"  id="Chack" value="Check"  />
               
                <input type="submit"  id="Signinbutton" value="Sign-in"/> 

                
 
            </div>
        </form>

    </body>
</html>