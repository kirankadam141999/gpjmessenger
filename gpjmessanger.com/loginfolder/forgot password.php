<?php
include('../header.php');
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
            
             function Toggle(){
                var temp=document.getElementById('passWord');

                if(temp.type==="password"){
                    temp.type="text";
                }
                else{
                    temp.type="password"
                }
            }
            function Toggle2(){
                var temp=document.getElementById('renewpassWord');

                if(temp.type==="password"){
                    temp.type="text";
                }
                else{
                    temp.type="password"
                }
            }

        function valid(){
            location.href="forgotupdate.php";
        }
        function buttonevent(){

            document.getElementById('Cancel').onmousemove=function(){
                this.style.background="red";
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
        <style>
            body{
                    width: 90vw;
                    height: 50vw;
                    color: #fff;
                    background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB);
                    background-size: 400vw 400vw;
                    position: relative;
                    animation: change 10s ease-in-out infinite;
                }
                @keyframes change{
                    0%{
                        background-position: 0 50%;
                    }
                    50%{
                        background-position: 100% 50%;
                    }
                    100%{
                        background-position: 0 50%;
                    }
                }




                #logomsbte{
                    width: 8.50%;
                margin-left: 4%;
                margin-top: 3%;
                background-color: rgb(247, 239, 239);
                border-radius: 50%;
                box-shadow: 0.50vw 0.50vw 0.50vw #0c0b0b;
                
                }
                /* code of gpj logo  */
                #logogpj{
                width: 8%;
                margin-left: 2%;
                margin-top: 3%;
                background-color: rgb(247, 239, 239);
                border-radius: 10%;
                box-shadow: 0.50vw 0.50vw 0.50vw #0c0b0b;
                
                }
                #gpjtext{
                    font-size: 4vw; 
                    margin-left: 25vw;
                    margin-top:  -8vw;
                    resize: both;
                
                    text-shadow: 0.50vw 0.50vw 0.50vw #0c0b0b;
                    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                
                }
                #cotext{
                    font-size: 3.40vw; 
                    margin-left: 25vw;
                    margin-top: -3vw;
                    resize: both;
                    text-shadow: 0.50vw 0.50vw 0.50vw #0c0b0b;
                    font-style: italic;
                    font-family: 'Times New Roman', Times, serif;
                
                }

                #sign-in-page{
                    margin-top: 6vw;
                    margin-left: 26vw;
                    width: 47vw;
                    height: 29vw;
                    background-color: rgb(40, 15, 180);
                    border-radius: 1vw;
                    box-shadow: 0.50vw 0.50vw 0.50vw #0c0b0b;
                    
                }
                #humanlogo{
                    width: 7vw;
                    margin-left: 18vw;
                    margin-top: -2vw;
                    border-radius: 1vw;
                }
                #oldpssword{
                    font-size: 2vw;
                    margin-left: 2vw;
                    margin-top: 2vw;
                }
                #unamechack{
                    font-size: 2vw;
                    margin-left: 2vw;
                    margin-top: 0vw;
                }

                #passWord{
                    margin-left: 22vw;
                    margin-top: -3.30vw;
                    font-size: 1.30vw;
                }
                #newpassWord{
                    margin-left: 21.70vw;
                    margin-top: -3vw;
                    font-size: 1.30vw;

                }
                #usernamefield{
                    margin-left: 18.70vw;
                    margin-top: -3vw;
                    font-size: 1.30vw;
                }
                #Save{
                    font-size: 2vw;
                    margin-top: -2.60vw;
                    margin-left: 39vw;
                }
                #chackboxshow{
                    margin-top: -2.40vw;
                    margin-left: 37vw;
                                           
                 }
                 #newchackboxshow{
                    margin-top: -2.40vw;
                    margin-left: 41vw;
                     
                 }
                 #showtext{
                     font-size: 1.50vw;
                     margin-left: 38vw;
                     margin-top: -3vw;
                 }
                 #newshowtext{
                    font-size: 1.50vw;
                     margin-left: 42vw;
                     margin-top: -3vw;
                 }
                 #repssword{
                    font-size: 2vw;
                    margin-top: -0vw;
                    margin-left: 2vw;
                 }
                 #renewpassWord{
                    font-size: 1.30vw;
                    margin-left: 24.50vw;   
                    margin-top: -3vw;
                 }
                 #Cancel{
                    font-size: 1.90vw;
                    margin-top: 1vw;
                    margin-left: 30vw;
                 }
                
        </style>

        <form action="forgotupdate.php" method="POST">
                 <!-- bellow two images is of GPJ and MSBTE on login page -->
                 <img id="logomsbte" src="../images/msbte.png" class="img-responsive" alt="Responsive image">
                 <img id="logogpj" src="../images/gpjlogo.png">
 
             <h2 id="gpjtext">Government Polytechnic, jalgoan</h2>
             <h4 id="cotext">Computer Department Messenger </h4>
        
            <div id="sign-in-page">
                <img id="humanlogo" src="../images/humanlogo.png"><br>
                <h1 id="oldpssword">Enter Password hint :-</h1>
                <input type="text" id="passWord" name="passWord" placeholder="Enter Password Hint" required="required"> 
                
                <h1 id="unamechack">Enter User Name:-</h1>
                <input type="text" id="usernamefield" name="usernamefield" placeholder="User Name" required="required"> 
               
                <h1 id="repssword">Enter new Password :-</h1>
                <input type="password" id="newpassWord" name="newpassWord" placeholder="Enter Password" required="required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"> <br> 

                <h1 id="repssword">Re-Enter new Password :-</h1>
                <input type="password" id="renewpassWord" name="renewpassWord" placeholder="Enter Password" required="required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"> <br> 
                <input type="checkbox" id="newchackboxshow" onclick="Toggle2()" ><br> <h1 id="newshowtext">Show</h1>

                <input type="button"  id="Cancel" value="Cancle" onclick="alert('For close Page Press Ok'),window.history.back()">
                <input type="submit"  id="Save" name="Save" value="Save" >
             


                
               <!-- window.history.back() -->
            </div>
        </form>

    </body>
</html>