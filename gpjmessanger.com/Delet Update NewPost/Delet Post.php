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
        $ptname=$_GET['ptname'];

        $q="select * from posts where title='$ptname'";
        $result=mysqli_query($conn,$q);
        $row=mysqli_fetch_array($result);
        $_SESSION['title']=$row['title'];
        $title=$_SESSION['title'];
        ?>
    </head>
    <body onload="looddata()">
        <style>
                             body{
                                 
                                 width: 90vw;
                                 height: 50vw;
                                 color: #fff;
                                 background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB);
                                 background-size: 400vw 400vw;
                                 position: relative;
                                 animation: change 10s ease-in-out infinite;
                                 
                             }  ::-webkit-scrollbar{
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
                                #pdfpost{
                                            margin-top: 0vw;
                                            margin-left: 5vw;
                                            width: 39vw;
                                            height: 45vw;
                                            background-color: rgb(170, 167, 156);
                                            box-shadow: 0.50vw 0.50vw 0.50vw rgb(53, 51, 51);
                                        }
                                        #infoofpost{
                                            margin-top: -2vw;
                                            margin-left: 50vw;
                                            margin-bottom: 3vw;
                                            width: 39vw;
                                            height: 10vw;
                                            background: linear-gradient(-49deg, rgb(26, 1, 252), rgb(248, 248, 250));
                                            box-shadow: 0.50vw 0.50vw 0.50vw #0c0b0b;
                                            overflow: auto;
                                            scroll-margin: 0.20vw;
                                            padding-left: 1vw;
                                            padding-top: 1vw;
                                            padding-bottom: 1vw;
                                            padding-right: 1vw;
                                            position: absolute;  


                                        }
                                        #postditel{
                                            margin-top: 0vw;
                                            font-size: 3vw;
                                            word-wrap: break-word;
                                            color: darkblue;
                                            
                                        }
                                        #posttitel{
                                            margin-top: -52vw;
                                            margin-left: 50vw;
                                            font-size: 3vw;
                                            word-wrap: break-word;
                                            color: darkblue;
                                            font-style: italic;
                                        }
                                        #posttext{
                                            margin-top: -11vw;
                                            margin-left: 50vw;
                                            font-size: 2.20vw;
                                            width: 41vw;
                                            height: 10vw;
                                            box-shadow: 0.50vw 0.50vw 0.50vw #0c0b0b;


                                        }
                                        #posttexttitle{
                                            margin-top: 14vw;
                                            margin-left: 50vw;
                                            font-size: 2.90vw;
                                            width: 41vw;
                                            height: 10vw;
                                            color: darkblue;
                                            font-style: italic;
                                        }
                                        #savebutton{
                                            width: 7.50vw;
                                            height: 3vw;
                                            margin-left: 69.50vw;
                                            margin-top: -14.20vw;
                                            font-size: 1.30vw;
                                        }
                                        #pdfpostbutton{
                                            width: 20vw;
                                            margin-left: 72.50vw;
                                            margin-top: -13.60vw;
                                            font-size: 1.30vw;
                                        }
                                        #choosefile{
                                            margin-top: 1vw;
                                            margin-left: 50vw;
                                            font-size: 2.90vw;
                                            width: 41vw;
                                            height: 10vw;
                                            color: darkblue;
                                            font-style: italic;
                                        }
                                        #savetext{
                                            margin-top: 5vw;
                                            margin-left: 50vw;
                                            font-size: 2.90vw;
                                            width: 41vw;
                                            height: 10vw;
                                            color: darkblue;
                                            font-style: italic;
                                        }
                                        #txtpost{
                                           padding-top: 20vw;
                                           padding-left: 8vw;

                                        }
                                        #date_and_time{
                                            width: 22vw;
                                            height: 13vw;
                                            background-color: darkblue;
                                            margin-left: 69.20vw;
                                            margin-top: 12vw;
                                            box-shadow: 0.50vw 0.50vw 0.50vw #0c0b0b;
                                            word-wrap: break-word;
                                            overflow-y: scroll;


                                        }
                                        #dateofpost{
                                                margin-top: 1vw;
                                                padding-top: 2vw;
                                                padding-left: 1.20vw;
                                                font-size: 1.30vw;
                                                font-style: italic;
                                                color: rgb(233, 234, 241);
                                            }
                                        #valuefromdata{
                                            font-size: 1.50vw;
                                            padding-left: 2vw;
                                            
                                        }
                                        #dateofpost1{  margin-top: 1vw;
                                                padding-top: -1vw;
                                                padding-left: 1.20vw;
                                                font-size: 1.30vw;
                                                font-style: italic;
                                                color: rgb(233, 234, 241);
                                            }
                                            #valuefrombatabyname{
                                                font-size: 1.50vw;
                                                  padding-left: 9vw;
                                                  margin-top: -2.60vw;
                                            }
                                       

        
        </style>
        <form action="deletemypost.php?ptname=<?php echo $ptname?>" method="POST">
            <img id="logomsbte" src="../images/msbte.png" class="img-responsive" alt="Responsive image">
                <img id="logogpj" src="../images/gpjlogo.png">

            <h2 id="gpjtext">Government Polytechnic, jalgoan</h2>
            <h4 id="cotext">Computer Department Messenger </h4>
            
            <div id="pdfpost">
                <!-- <h1 id="txtpost">Choose Post For Uplod</h1> -->
                <embed id="pdfdoc" 
                src="<?php echo $row['postpdf'];?>"
                    type="application/pdf"
                    id="pdfDocument"
                    width="100%"
                    height="100%">                                                          
                </embed>
                
            </div><br><br><br><br><br>
            <h2 id="posttitel">Circular Title :-</h2>
                <div id="infoofpost" class="hidescroll_postdetil">   
                    <h5 id="postditel" name="postditel"><?php echo $row['title']; ?></h5>      
                </div>
                <div id="date_and_time">
                    <h2 id="dateofpost">Date / Time of Circular :-</h2><h3 id="valuefromdata"><?php echo $row['timedate'];?></h3>
                    <h2 id="dateofpost1">Circular By :-</h2><h3 id="valuefrombatabyname"><?php echo $row['Uname']; ?></h3>
        
                </div>
                <h5 id="savetext">Save Circular :-</h5>   
               <input type="submit" name="savebutton" id="savebutton" value="Delete">
        </form>
        <script>

            document.addEventListener("contextmenu",function(e){
                e.preventDefault();
            },false);

            function looddata(){
                
                document.getElementById('valuefrombata').innerHTML=dateofpost;
                document.getElementById('valuefrombatabyname').innerHTML=nameofpersion;
            }
            function delet_Post(){
                var post_titel=document.getElementById('postditel').textContent;
                alert("Prass ok to Delet Circular");
                window.history.back();
            }
              
           
 
         </script>
    </body>
</html>
