<html>
<head>
<style type="text/css">
#name{
color:white; 
font-size:xx-large;
font-weight:bold;
float:left;
}

#capt{
color:white; 
font-size:medium;
float:left;
margin-left:-100px;
margin-top:35px;
30px;
}

#logo-tab{
background-color:#000080; 
padding:10px;

}

#about{
background-color: #ffffff; 
color: black;
padding:15px;
font-size:20px 
float:right;
margin-left:1100px;
margin-top:25px;
transition-duration: 0.4s;
border-radius:12px;
}

#about:hover{
background-color: green;  
color: white;
}

#info1{
margin-left:575px;
margin-top:12px;
font-size:20px;
font-size:x-large;
}

#user-inp{
margin-left:480px;
margin-top:15px;
height:40px;
width:400px;
}

#pass-inp{
margin-left:480px;
margin-top:15px;
height:40px;
width:400px;
}

#login{
margin-left:480px;
margin-top:15px;
height:40px;
width:400px;
transition-duration: 0.4s;
color:white;
font-size:18px;
border-radius:12px;
background-color: #ffffff; 
color: black;
}

#login:hover{
background-color: green;  color: white;
}

#edit{
margin-left:480px;
margin-top:15px;
height:40px;
width:400px;
transition-duration: 0.4s;
background-color: #ffffff; 
color: black;
font-size:18px;
border-radius:12px;
}

#edit:hover{
background-color: green;  color: white;
}


#hr1{ margin-top:30px; float:left; width:645px; size:60px;}
#hr2{ margin-top:-27px; float:right; width:680px; size:60px}

#info2{
font-size:large;
margin-left:650px;
}

#acc_create{
margin-top:20px;
background-color: #ffffff; 
color: black;
margin-left:560px;
font-size:large;
padding:15px;
transition-duration: 0.4s;
border-radius:12px;
}

#acc_create:hover{
background-color: green;  color: white;
}

#forgot{
margin-top:30px;
text-decoration:none;
font-size:medium;
margin-left:600px;
}

#forgot:hover{
color:red;
}


</style>

</head>
<body>


<?php

if (isset($_POST['create'])) {  

// email validation
$email=$_POST["email"];
if(empty($email)){  
$emailErr="e-Mail Input Required ";  
}
else if(!preg_match('^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^', $email))
{
         $emailErr="Invalid e-Mail" ;
}
else{
	$email_new=$email;
}



// pass validation
$pass=$_POST["pass"];
if(empty($pass)){  
$paawordErr= "Password Input Required";  
}
else{
$password_new=$pass;	
}






/*
function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  
*/

}

$host = "localhost";
$user = "root";
$pass = "";
$db_name = "GoDuo";
$con = new mysqli($host, $user, $pass, $db_name);



if (! $error){
/* Attempt MySQL server connection. Assuming
you are running MySQL server with default
setting (user 'root' with no password) */

$link = mysqli_connect("localhost","root", "", "GoDuo_app");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. ". mysqli_connect_error());
}
  
// Escape user inputs for security

  
// Attempt insert query execution

$sql = "SELECT * FROM GoDuo WHERE mail='$email_new' AND password='$password_new'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['mail'] === $email_new && $row['password'] === $password_new) {
                echo "Logged in!";
                $_SESSION['user_name'] = $row['mail'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: search.php");
                exit();
            }else{
                header("Location: index.php?error=Incorect User name or password");
                exit();
            }
        }if(mysqli_query($link, $sql)){
    
	  header("Location: search.php");// open search page here 
	  exit();
	
} else{
    echo "ERROR: Creating your profile";
	
}
 // Close connection
mysqli_close($link);
}


?>

















<div id="logo-tab">
<p id="name">GoDuo</p><br/><br/>
<p id="capt">You & I make a perfect "WE"</p><button type="button" id="about" >About Us</button>
</div>
</br>



<form id="form-login" action="">

<p id="info1" ">Log into GoDuo</p>
<input type="text" id="user-inp" placeholder="G-Mail" required></input>
<input type="password" id="pass-inp" placeholder="Password" required></input>
<button type="button" id="login" >Log In</button>
<button type="button" id="edit" >Edit Profile</button>
</br>
</br>
<p id="info2">or</p>
<!---<hr id="hr1"><p id="info2">or</p></hr><hr id="hr2"></hr>--->
<button type="button" id="acc_create" >Create New Account </button>
</form>
</body>
</html>