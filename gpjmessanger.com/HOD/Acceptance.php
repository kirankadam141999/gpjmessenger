<?php
include('../header.php');
?>

<html>
    <title>
        GPJ Messenger
    </title>
    <head>
        
    </head>
    <body>
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
                                #postcontant{
                                    margin-top: -2vw;
                                    margin-left: 18vw;
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
                               
                                

        
                                #searchbutton{
                                   font-size: 1.70vw;
                                    margin-top: 3vw;
                                    margin-left: 13.40vw;
                                }
       </style>

            <form action="" method="POST">
                <img id="logomsbte" src="../images/msbte.png" class="img-responsive" alt="Responsive image">
                <img id="logogpj" src="../images/gpjlogo.png">
            <h2 id="gpjtext">Government Polytechnic, jalgoan</h2>
            <h4 id="cotext">Computer Department Messenger </h4>
            <h1 id="Acceptance">Acceptance :-</h1><br>
            <div id="postcontant" class="hidscroll">
            
<?php


    if(!$conn){
        die('Could not connect: '.mysqli_connect_error());
    }
    $sql='SELECT`username`FROM `rowlogin` WHERE 1';

    $retval=mysqli_query($conn,$sql);
    if(mysqli_num_rows($retval)>0){
        while($row=mysqli_fetch_assoc($retval)){
          
            xy($row['username']);

           
            
        }
    }
    function xy($x){
        
        
    ?>  
    
         <div name="<?php echo $x; ?>" style="float: left; box-shadow: 0.50vw 0.50vw 0.50vw rgb(8, 7, 7); width: 60vw; border-radius: 2vw; word-wrap: break-word;   background-color: rgb(245, 124, 38); color: white; padding-left: 2vw;padding-bottom: 1vw;padding-top: 1vw; margin-top: 2vw;">
         
         <div name="back" class="noscroll" style="overflow-y: scroll; float: left; background-color: black;  width: 30vw; border-radius: 2vw; word-wrap: break-word;   background-color: rgb(245, 124, 38); color: white; padding-left: 1vw;padding-bottom: 0vw;">

            <a  href="../profilofuse/userDetial.php?notfixuname=<?php echo $x?>" id="nameOFcontery"style=" text-decoration: none; color: white; font-size: 3vw; margin-left:1vw; margin-padding:1vw; "><?php echo $x;  ?></a>
            
        </div> 
        <a  href="Save.php?varname=<?php echo $x?>" id="nameOFcontery"style=" text-decoration: none; color: rgb(28, 6, 128); font-size: 3vw; margin-left:9vw; margin-padding:1vw; ">Save</a>
            <a  href="Delet.php?varname=<?php echo $x?>" id="nameOFcontery"style=" text-decoration: none; color: rgb(7, 1, 36); font-size: 3vw; margin-left:1vw; margin-padding:1vw; ">Delete</a>

        </div> 
    
    <?php
         
    }

    ?>
    
    </div>
            
       
            </form>
    </body>
</html>