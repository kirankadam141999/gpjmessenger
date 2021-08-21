<html>
    <head><title>
        GPJ Messenger
    </title>
    <?php
        session_start();
        $mynm=$_SESSION['username'];
    ?>
    </head>
    <body onload="loodDataFromDataBase()">
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
                                            width: 5.50vw;
                                            height: 2vw;
                                            margin-left: 70.50vw;
                                            margin-top: -14vw;
                                            font-size: 1.30vw;
                                        }
                                        #pdfpostbutton{
                                            width: 20vw;
                                            margin-left: 76.50vw;
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
                                            margin-top: -10vw;
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
                                       

        
        </style>
        <form action="newpostadd.php" method="POST" enctype="multipart/form-data">
            <img id="logomsbte" src="../images/msbte.png" class="img-responsive" alt="Responsive image">
                <img id="logogpj" src="../images/gpjlogo.png">

            <h2 id="gpjtext">Government Polytechnic, jalgoan</h2>
            <h4 id="cotext">Computer Department Messenger </h4>
            
            <div id="pdfpost">
                <embed id="pdfdoc" 
                
                    type="application/pdf"
                    id="pdfDocument"
                    width="100%"
                    height="100%">                                                          
                </embed>
                
            </div><br><br><br><br><br>
            <h2 id="posttitel">Circular Title :-</h2>
                <div id="infoofpost" class="hidescroll_postdetil">   
                    <h5 id="postditel">Circular Detail</h5>      
                </div>
                <h5 id="posttexttitle">The Circular detail :-</h5>      
                <textarea id="posttext" name="posttitle" required></textarea><br>
               
                <h5 id="choosefile">The Circular detail :-</h5>      
               
                <input type="file" id="pdfpostbutton" accept="application/pdf" name="pdfpostbutton" >
              
                <h5 id="savetext">Save Circular :-</h5>      
                <input type="submit"  id="savebutton" name="savebutton" value="Save" onclick="saveData()">
        </form>
        <script>
     
         var valuetodiv;
         var settime


         document.addEventListener("contextmenu",function(e){
                e.preventDefault();
            },false);
            
            function loodDataFromDataBase(titel_of_post,actualPost){
                var actualPost='';
                var titel_of_post='';
                // actualPost="../practical 4.3.pdf";
                //  titel_of_post='kiran';
                 if(titel_of_post!=''&& actualPost!=''){

                document.getElementById('pdfdoc').src=actualPost;
                document.getElementById('postditel').innerHTML=titel_of_post;

                }
            }

         posttext.onkeypress=function(){
           settime=setInterval(function(){
                valuetodiv=document.getElementById('posttext').value;
                
              document.getElementById('postditel').innerHTML=valuetodiv;
            
            
             
            }, 1000);
         }
         
             
                  
             function saveData(){
                text_of_post=document.getElementById('posttext').value;
                confirm('Prass ok to Save Data');
                location.href="newpostadd.php";
                

             }      
             
           
           
            const pdfpostbutton=document.getElementById("pdfpostbutton");
            pdfpostbutton.addEventListener("change",function(){
                const file=this.files[0];
                
                if(file){
                   
                    const reader=new FileReader();
                    reader.addEventListener("load",function(){
                    pdfdoc.setAttribute('src',this.result);
                    });
                    
                        reader.readAsDataURL(file);
                }else{
                    pdfdoc.setAttribute("src","");
                }
                
            });
 
         </script>
    </body>
</html>
