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

            function loodData(notdetial){
                alert(notdetial);
            }

            

        function valid(){
            var data=document.getElementById('posttext').value;
            loodData(data); 
             
        }


        function buttonevent(){
            
            posttext.onkeypress=function(){
          var settime=setInterval(function(){
              var  valuetodiv=document.getElementById('posttext').value;
                
              document.getElementById('postditel').innerHTML=valuetodiv;
            
            
             
            }, 1000);
         }

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


               
                        ::-webkit-scrollbar{
                                    display: none;
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
                #postditel{
                    margin-top: 0vw;
                    font-size: 3vw;
                    word-wrap: break-word;
                    color: darkblue;                     
                }
                                        

                #sign-in-page{
                    margin-top: -1vw;
                    margin-left: 26vw;
                    width: 47vw;
                    height: 15vw;
                    background: linear-gradient(-49deg, rgb(26, 1, 252), rgb(248, 248, 250));
                    border-radius: 1vw;
                    box-shadow: 0.50vw 0.50vw 0.50vw #0c0b0b;
                    overflow-y: scroll ;
                    padding-left: 1vw;
                    padding-right: 1vw;
                    
                }
                
                
                #Save{
                    font-size: 2vw;
                    margin-top: -5vw;
                    margin-left: 87vw;
                }
                 #Cancel{
                    font-size: 1.90vw;
                    margin-top: -5vw;
                    margin-left: 78vw;
                 }
                 #noticid{
                     margin-left: 20vw;
                     margin-top: -2vw;
                     font-size: 3vw;
                     font-style: italic;
                     color: darkblue;
                 }
                 #posttext{
                     margin-top: 2vw;
                     margin-left: 26vw;
                    font-size: 2.20vw;
                    width: 48.50vw;
                    height: 10vw;
                    box-shadow: 0.50vw 0.50vw 0.50vw #0c0b0b;
                    padding-left: 1vw;
                    padding-right: 1vw;
                 }
                
        </style>

        <form action="savenot.php" method="POST">
                 <!-- bellow two images is of GPJ and MSBTE on login page -->
                 <img id="logomsbte" src="../images/msbte.png" class="img-responsive" alt="Responsive image">
                 <img id="logogpj" src="../images/gpjlogo.png">
 
             <h2 id="gpjtext">Government Polytechnic, jalgoan</h2>
             <h4 id="cotext">Computer Department Messenger </h4>
            <h1 id="noticid">Notice Title :-</h1>
            <div id="sign-in-page" class="scrollid">
                <h5 id="postditel"></h5>      
            </div><br>
            <textarea id="posttext" name="posttext" required></textarea><br>

            <input type="button"  id="Cancel" value="Cancel" onclick="alert('For close Page Press Ok'),window.history.back()"><br>
            <input type="submit"  id="Save" value="Save" onclick="valid()">
         
        </form>

    </body>
</html>