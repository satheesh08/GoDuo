<html>
<head>
<style type="text/css">
#name{
color:white; 
font-size:xx-large;
font-weight:bold;
float:left;
margin-top: 0px;
}

#capt{
color:white; 
font-size:medium;
float:left;
margin-left:-100px;
margin-top:5px;

}

#logo-tab{
background-color:#000080; 
padding:40px;
border-radius: 75px;
}

#about{
background-color: #ffffff; 
color: black;
padding:15px;
font-size:15px; 
float:right;
margin-left:1100px;
margin-top:-70px;
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


#delete{
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

#delete:hover{
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
session_start();
//if ($_SERVER["REQUEST_METHOD"] == "POST") {  
// if (isset($_POST['login'])) {  

    /*
    $email=$_POST['user-inp'];
    $pass=$_POST['pass-inp'];

$emailErr=$passwordErr="";
$email_new=$password_new="";
$login_Err="";

// email validation

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
$pass=$_POST['pass-inp'];
if(empty($pass)){  
$passwordErr= "Password Input Required";  
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
}  */

//}

if(isset($_POST['login']))
{

    $email=$_POST['user-inp'];
    $pass=$_POST['pass-inp'];

$emailErr=$passwordErr="";
$email_new=$password_new="";
$login_Err="";

// email validation

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
$pass=$_POST['pass-inp'];
if(empty($pass)){  
$passwordErr= "Password Input Required";  
}
else{
$password_new=$pass;	
}



$host = "localhost";
$user = "root";
$pass = "";
$db_name = "goduo";


   //Creating a connection
   $conn = mysqli_connect($host, $user, $pass, $db_name);
   if(!$conn){
        echo"error";
   }
   else{

    // $userA=mysqli_real_escape_string($conn,$_POST['user-inp']);
    // $passA=mysqli_real_escape_string($conn,$_POST['pass-inp']);
    $userA= $email_new; // $_POST['user-inp'];
    $passA= $password_new; //$_POST['pass-inp'];
    $sql = "SELECT * FROM user_data2 WHERE mail='$userA' AND password='$passA'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['mail'] === $userA && $row['password'] === $passA) {
            //  $_SESSION['user_name'] = $row['mail'];
            header("Location: Search.php");
            exit();
        }else{
            header("Location: Login.php");
            exit();
        }
    }
    mysqli_close($conn);
}
}

if(isset($_POST['edit']))
{

    $email=$_POST['user-inp'];
    $pass=$_POST['pass-inp'];

$emailErr=$passwordErr="";
$email_new=$password_new="";
$login_Err="";

// email validation

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
$pass=$_POST['pass-inp'];
if(empty($pass)){  
$passwordErr= "Password Input Required";  
}
else{
$password_new=$pass;	
}



$host = "localhost";
$user = "root";
$pass = "";
$db_name = "goduo";


   //Creating a connection
   $conn = mysqli_connect($host, $user, $pass, $db_name);
   if(!$conn){
        echo"error";
   }
   else{

     $userA=$email_new;// mysqli_real_escape_string($conn,$_POST['user-inp']);
    $passA=$password_new; //mysqli_real_escape_string($conn,$_POST['pass-inp']);
    $sql = "SELECT * FROM user_data2 WHERE mail='$userA' AND password='$passA'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['mail'] === $userA && $row['password'] === $passA) {
            // session_start();
            $_SESSION["user_name"] = $userA;
            header("Location: Edit.php");
            exit();
        }else{
            header("Location: Login.php");
            exit();
        }
    }
// Close connection
mysqli_close($conn);
}

}

if(isset($_POST['delete']))
{

    $email=$_POST['user-inp'];
    $pass=$_POST['pass-inp'];

$emailErr=$passwordErr="";
$email_new=$password_new="";
$login_Err="";

// email validation

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
$pass=$_POST['pass-inp'];
if(empty($pass)){  
$passwordErr= "Password Input Required";  
}
else{
$password_new=$pass;	
}



$host = "localhost";
$user = "root";
$pass = "";
$db_name = "goduo";


   //Creating a connection
   $conn = mysqli_connect($host, $user, $pass, $db_name);
   if(!$conn){
        echo"error";
   }
   else{

     $userA=$email_new;// mysqli_real_escape_string($conn,$_POST['user-inp']);
    $passA=$password_new; //mysqli_real_escape_string($conn,$_POST['pass-inp']);
    $sql = "SELECT * FROM user_data2 WHERE mail='$userA' AND password='$passA'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['mail'] === $userA && $row['password'] === $passA) {
            // session_start();
            $sql2="DELETE FROM user_data2 WHERE mail='$userA'";
            mysqli_query($conn, $sql2);

            header("Location: Login.php");
            exit();
        }else{
            header("Location: Search.php");
            exit();
        }
    }
// Close connection
mysqli_close($conn);
}

}



if(isset($_POST['acc_create']))
{
header("Location: New_User.php");
}

?>

<div id="logo-tab">
<p id="name">GoDuo</p><br/><br/>
<p id="capt">You & I make a perfect "WE"</p><button type="submit" id="about" onclick="aboutus()" >About Us</button>
<script>
    function aboutus(){
        window.location.href = "about-us.html";
    }

</script>
</div>
</br>





<p id="info1">Log into GoDuo</p>
<form id="form-login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<input type="text" id="user-inp" name="user-inp" placeholder="Mail" ></input>
<span style="color: red;"><?php if ( isset($emailErr)) echo $emailErr; ?></span></br>
<input type="password" id="pass-inp" name="pass-inp" placeholder="Password" ></input>
<spans style="color: red;"><?php if (  isset($passwordErr)) echo $passwordErr; ?></span></br>

<input type="submit" value="Log In" id="login" name="login">
<input type="submit" value="Edit Profile" id="edit" name="edit">
<input type="submit" id="delete" name="delete" value="Delete Account"></input>
<!---<button type="button" id="login" >Log In</button>
<button type="button" id="edit" >Edit Profile</button>--->
</br>
</br>
<p id="info2">or</p>
<!---<hr id="hr1"><p id="info2">or</p></hr><hr id="hr2"></hr>--->
<!---<input type="button" value="Create New Account" id="create" name="create">-->
<input type="submit" id="acc_create" name="acc_create" value="Create New Account"></input>
</form>


</body>
</html>