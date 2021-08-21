<?php
include('../header.php');
?>
<html>
    <head>
        <title>
            GPJ Messenger 
        </title>
        <?php   
        session_start();
        
        if(isset($_GET['uname'])){
            $unm=$_GET['uname'];
        }
        if(isset($_GET['notfixuname'])){
            $unmunfix=$_GET['notfixuname'];
        }

        if(isset($unm)){
            $q="SELECT * FROM `authorised person` WHERE  username='$unm'";

        }else{
            $q="SELECT * FROM `rowlogin` WHERE  username='$unmunfix'";
 
        }

      
        $result=mysqli_query($conn,$q);
        while($row=mysqli_fetch_assoc($result))
        {   
            
            $fname=$row['firstname'];
            $mname=$row['midelname'];
            $lname=$row['lastname'];
            $cno=$row['contactnumber'];
            $eid=$row['emailid'];
            $unm=$row['username'];
            $address=$row['addrass'];
        }
    ?>
        <script>

            document.addEventListener("contextmenu",function(e){
                e.preventDefault();
            },false);

        function loddDataOFPerson(fnm=<?php echo json_encode($fname); ?>,mnm=<?php echo json_encode($mname); ?>,lnm=<?php echo json_encode($lname); ?>,cno=<?php echo json_encode($cno); ?>,eid=<?php echo json_encode($eid); ?>,username=<?php echo json_encode($unm); ?>,address=<?php echo json_encode($address); ?>){
            var unamef=fnm;
            var unamem=mnm;
            var unamel=lnm;
            var unamecon=cno;
            var unameemailid=eid;
            var unameUserName=username;
            var unameAddress=address;




            document.getElementById('First_Name').innerHTML=unamef; 
            document.getElementById('mname').innerHTML=unamem;
            document.getElementById('lname').innerHTML=unamel;
            document.getElementById('connumber').innerHTML=unamecon;
            document.getElementById('em').innerHTML=unameemailid;
            document.getElementById('USname').innerHTML=unameUserName;
            document.getElementById('adds').innerHTML=unameAddress;
                        
        }
               
        function buttonevent(){

                loddDataOFPerson();
              
                document.getElementById('Close').onmousemove=function(){
                this.style.background="green";
                this.style.color="white";
                }
    
                document.getElementById('Close').onmouseout=function(){
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
    margin-top: -2vw;
    margin-left: 25vw;
    padding-right: 3vw;
    padding-bottom: 5vw;
    width: 50vw;
   
    background-color: rgb(40, 15, 180);
    border-radius: 1vw;
    
}
#logintext{ 
    font-size: 3vw; 
    margin-left: 17.90vw;
    padding-top: 9vw;
    text-shadow: 0.50vw 0.50vw 0.50vw #000000;

}
#humanlogo{
    width: 10vw;
    margin-left: 20vw;
    margin-top: -18vw;
    border-radius: 1vw;

}
#username{
    width: 20vw;
    padding-top: 1vw;
}
#firstname{
    font-size: 2vw;
    margin-top: -2vw;
    margin-left: 5vw;
}
#First_Name{
    font-size: 2vw;
    margin-top: -3.50vw;
    margin-left: 18vw;

}
#midelname{
    font-size: 2vw;
    margin-top: 0vw;
    margin-left: 5vw;
}
#Midel_name{
    font-size: 1.20vw;
    margin-top: -3vw;
    margin-left: 19vw;
}
#lastname{
    font-size: 2vw;
    margin-top: 0vw;
    margin-left: 5vw;
}
#Last_Name{
    font-size: 1.20vw;
    margin-top: -3.50vw;
    margin-left: 19vw;
}
#contactnumber{
    font-size: 2vw;
    margin-top: 0vw;
    margin-left: 5vw;
}
#contac-tnumber{
    width: 7vw;
    font-size: 1.20vw;
    margin-top: -4.50vw;
    margin-left: 23vw;
}
#email{
    font-size: 2vw;
    margin-top: 1vw;
    margin-left: 5vw;
}
#Emailid{
    width: 25vw;
    font-size: 1.20vw;
    margin-top: -5vw;
    margin-left: 17vw;
}
#UserName{
    
    font-size: 2vw;
    margin-top: -1vw;
    margin-left: 5vw;
}
#User_Name{
   
    font-size: 1.20vw;
    margin-top: -5vw;
    margin-left: 23vw;
}

#addrassuser{
    font-size: 2vw;
    margin-top: 1vw;
    margin-left: 5vw;
}
#Close{
    font-size: 2vw;
    margin-top: 3vw;
    margin-left: 38vw;
    
    
}
#mname{
    font-size: 2vw;
    margin-top: -3.90vw;
    margin-left: 18vw;
}
#lname{
    font-size: 2vw;
    margin-top: -4.20vw;
    margin-left: 18vw;

}
#connumber{
    font-size: 2vw;
    margin-top: -4.90vw;
    margin-left: 22.20vw;
}
#em{
    font-size: 2vw;
    margin-top: -5.60vw;
    margin-left: 15.50vw;
}
#USname{
    
    font-size: 2vw;
    margin-top: -5.60vw;
    margin-left: 17.70vw;
}
#adds{
    font-size: 2vw;
    margin-top: -6.80vw;
    margin-left: 17.70vw;
}
#adds{
    font-size: 2vw;
    margin-top: -6.80vw;
    margin-left: 17.70vw; 
}
            
            </style>
        <form action="" method="POST">

            
            

                 <!-- bellow two images is of GPJ and MSBTE on login page -->
                 <img id="logomsbte" src="../images/msbte.png" class="img-responsive" alt="Responsive image">
                 <img id="logogpj" src="../images/gpjlogo.png">
 
             <h2 id="gpjtext">Government Polytechnic, jalgoan</h2>
             <h4 id="cotext">Computer Department Messenger </h4>
        
            <div id="sign-in-page">
                <h4 id="logintext">User Profile </h4>
                <img id="humanlogo" src="../images/humanlogo.png"><br>
               
                <h1 id="firstname">First Name :-</h1>
                <h1 id="First_Name"> </h1>
                
                <h2 id="midelname">Middle Name :-</h1>
                <h1 id="mname"> </h1>

               
                <h3 id="lastname">Last Name :-</h3>
                <h1 id="lname"> </h1>


                <h4 id="contactnumber">Contact Number :-</h4>
                <h1 id="connumber"> </h1>


                <h5 id="email">Email ID :-</h5>
                <h1 id="em"> </h1>

               
                <h5 id="UserName">User Name :-</h5>
                <h1 id="USname"> </h1>



                <h6 id="addrassuser">Address :-</h6>
                <h1 id="adds"> </h1>

                
               
                <input type="button"  id="Close" value="Close" onclick="window.history.back()">
             


                
 
            </div>
        </form>

    </body>
</html>