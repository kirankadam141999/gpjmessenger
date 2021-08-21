<?php
include('../header.php');
?>



<html>
    <title>
        GPJ Messenger
    </title>
    <head>
        <?php
        session_start();
         ?>
        <script>
            var bouttoncount=0;

            document.addEventListener("contextmenu",function(e){
                e.preventDefault();
            },false);


            function loodpost(){
                var name_of_persion;
                name_of_persion=document.getElementById('bynamesearch').value;
                alert(name_of_persion);

            }
            function addpost(databasePostValue){
                const backdiv=document.getElementById('postcontant');
                const postdiv=document.getElementById('divpost');
            
               
                const textdiv=document.getElementById('divtext');


                const view=document.getElementById(buttoncount);
                

              
                
               
               /* view.onclick=function(){
                    var idh1=this.id;

                    // alert('you prassed view  '+idh1);
                     var valueofdiv=document.getElementById('lebalid'+this.id).textContent;
                    //  alert('you prassed view   '+valueofdiv);
                    location.href="../Delet Update NewPost/view post.php";
                }*/
                
                lebel_of_div.appendChild(textcontant);
                view.appendChild(vitext);

                textdiv.appendChild(lebel_of_div);
                postdiv.appendChild(textdiv);
                postdiv.appendChild(postdiv);
                backdiv.appendChild(postdiv);
                document.body.appendChild(backdiv);


                bouttoncount++;
                }

            }
            /*function sendvalue(){

                var bynamevalue=document.getElementById('textofpost').value;
                var bydatevalue=document.getElementById('date').value;
               // alert(bynamevalue+'    '+bydatevalue);

                document.getElementById('textofpost').value="";
                document.getElementById('date').value="";

                addpost(bynamevalue);
                loodpost(bynamevalue,bydatevalue);
                
            }*/
            function onview(){
               
            }
            

        </script>
    </head>
    <body onload="addpost()">
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
                                ::-webkit-scrollbar{
                                    display: none;
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

                                #searchdiv{
                                    width: 29vw;
                                    height: 10vw;
                                    margin-left: 1vw;
                                    background-color: yellowgreen;
                                    border-radius: 1vw;
                                    box-shadow: 0.50vw 0.50vw 0.50vw #0c0b0b;

                                }

                                #postcontant{
                                    margin-top: -14.50vw;
                                    margin-left: 30vw;
                                    width: 65vw;
                                    height: 40vw;
                                    border-radius: 1vw;
                                    overflow-y: scroll;
                                    /* background-color: violet; */
                                    
                                }
                                
                             
                               #Acceptance{
                                   margin-top: 2vw;
                                   margin-left: 9vw;
                                   font-size: 2.80vw;
                                   font-style: italic;
                                   text-shadow: 0.50vw 0.50vw 0.50vw #0c0b0b;

                               }
                              
                                #textofpost{
                                    margin-left: 2vw;
                                    margin-top: -1.50vw;
                                    font-size: 1.50vw;
                                    height: 6vw;
                                }
                               
                               #byname{
                                   font-size: 2vw;
                                   padding-top: 1vw;
                                   padding-left: 1vw;
                                   color: rgb(3, 3, 100);
                               }
                               #bynamesearch{
                                   margin-top: -2.80vw;
                                   margin-left: 13vw;
                                   font-size: 1vw;
                               }
        
                                #searchbutton{
                                   font-size: 1.70vw;
                                    margin-top: -2.50vw;
                                    margin-left: 19.50vw;
                                }
                                #backButton{
                                    font-size: 1.70vw;
                                    margin-top: 1vw;
                                    margin-left: 3vw;
                                  
                                }
       </style>

            <form action="" method="POST">
                <img id="logomsbte" src="../images/msbte.png" class="img-responsive" alt="Responsive image">
                <img id="logogpj" src="../images/gpjlogo.png">
            <h2 id="gpjtext">Government Polytechnic, jalgoan</h2>
            <h4 id="cotext">Computer Department Messenger </h4>
            <h1 id="Acceptance">User Detail :-</h1>
    <div id="searchdiv">
                <h1 id="byname">User Name :-</h1>
                <input type="text" name="bynamesearch" id="bynamesearch">
                <input type="button" id="backbutton" value="Back" onclick="window.history.back()"><br>
                <input type="submit" id="searchbutton" name="searchbutton" value="Search">
            </div>
           
                
            <div id="postcontant" class="hidscroll">
    <?php 
        if(isset($_POST['searchbutton'])){        
        if(isset($_POST['bynamesearch'])){
            $q="SELECT * FROM `authorised person` WHERE  username  LIKE '%".$_POST['bynamesearch']."%'";
        }      
        }
        else{
            $q="SELECT * FROM `authorised person` WHERE 1";
        }
                    
        $result=mysqli_query($conn,$q);
        while($rows=mysqli_fetch_assoc($result))
        {
            
            $uname=$rows['username'];
         
            ?>
            <div id="divpost" style="box-shadow: 0.50vw 0.50vw 0.50vw #0c0b0b;width: 60vw;height: 8vw; font-size: 1.20vw;background-color: rgb(157, 253, 149);  border-radius: 2vw; padding-top: 2vw; margin-top: 2vw;  margin-left: 1.50vw;   padding-bottom: 1vw; padding-right: 1vw; word-wrap: break-word;" > 
            <div id="divtext" style="width: 39vw;height: 9.99vw; font-size: 1.20vw;background-color: rgb(157, 253, 149);   border-radius: 2vw;  margin-top: -2vw; padding-bottom: 1vw; padding-right: 1vw;padding-left: 1vw; word-wrap: break-word; overflow-y: scroll;">
            <h1 id="<script>'lebalid'+bouttoncount; </script>" style="font-size: 2.70vw; margin-left: 0vw;margin-top: 1vw;font-style: italic;font-family: 'Times New Roman', Times, serif;color:rgb(7, 13, 83);"><?php echo $uname?><h1>
            
        </div>
        <input type="button" id="<script> buttoncount </script>" name="viewdata" style="font-size: 1.30vw;margin-left: 45vw;margin-top: -7vw;width: 10vw;  font-style: oblique;" onclick="window.location='userDetial.php?uname=<?php echo $uname?>'" value="View"/>
        </div>
        <?php } ?></div>
            
            </form>
    </body>
</html>