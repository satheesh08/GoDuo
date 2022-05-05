<html>

<head>
<style type="text/css">
#name{
color:white; 
font-size:xx-large;
font-weight:bold;
float:left;
margin-top: -20px;
}

#capt{
color:white; 
font-size:medium;
float:left;
margin-left:-100px;
margin-top:20px;

}

#logo-tab{
background-color:#000080; 
padding:40px;
border-radius: 75px;
}

#about{
background-color: #ffffff; 
color: black;
transition-duration: 0.4s;
padding:15px;
font-size:15px;
float:right;
border-radius:12px;
margin-left:-1200px;
margin-top:-10px;
}

#about:hover{
background-color: green;  
color: white;
}

#home{
background-color: #ffffff; 
color: black;
transition-duration: 0.4s;
padding:15px;
font-size:15px ;
margin-left:800px;
margin-top:-10px;
border-radius:12px;
}

#home:hover{
background-color: green;  
color: white;
}

#mail{
padding:10px;
margin-left:450px;
margin-top:10px;
}

#pass{
padding:10px;
margin-top:-40px;
margin-left:720px;
}

#h31{
margin-left:600px;
}

#fname{
padding:10px;
margin-left:450px;
margin-top:20px;
}

#lname{
padding:10px;
margin-top:-39px;
margin-left:73px;
}

#dob{
padding:10px;
width:150px;
margin-left:490px;
margin-top:-45px;
}

#p-dob{

margin-left:450px;
margin-top:40px;
}

#div-gender{

margin-left:450px;
margin-top:20px;
}

#age{
padding:10px;
margin-top:20px;
margin-left:450px;
}

#male{
margin-top:20px;
padding:10px;
margin-left:10px;
}

#female{
margin-top:10px;
padding:10px;
margin-left:10px;
}

#height{
padding:10px;
margin-left:450px;
margin-top:20px;
width:190px;
}

#weight{
padding:10px;
margin-left:720px;
margin-top:-40px;
width:190px;
}

#salary{
padding:10px;
margin-left:720px;
margin-top:-40px;
width:190px;
}

#caste{
padding:10px;
margin-left:720px;
margin-top:30px;
width:190px;
}
#religion{
padding:10px;
margin-left:450px;
margin-top:-50px;
width:190px;
}
#community{
padding:10px;
margin-left:450px;
margin-top:10px;
width:190px;
}
#language{
padding:10px;
margin-left:720px;
margin-top:-160px;
width:190px;
}

#complexion{
padding:10px;
margin-left:720px;
margin-top:-100px;
width:190px;
}

#city{
padding:10px;
margin-left:450px;
margin-top:20px;
width:190px;
}
#phone{
padding:10px;
margin-left:720px;
margin-top:-40px;
width:190px;
}

#link1{
padding:10px;
margin-left:450px;
margin-top:20px;
width:190px;
}
#link2{
padding:10px;
margin-left:720px;
margin-top:-40px;
width:190px;
}

#edit1{
margin-top:20px;
background-color: #ffffff; 
color: black;
transition-duration: 0.4s;
margin-left:630px;
font-size:large;
padding:15px;
border-radius:12px;
}

#edit1:hover{
background-color: green;  
color: white;
}

</style>
</head>

<body>

<?php
session_start();
// if ($_SERVER["REQUEST_METHOD"] == "POST") 
//	 if (isset($_POST['edit1'])) {  

    /*
   
   $email = $pass= $firstname= $lastname=$age=$salary=$caste=$community=$religion=$salary=
   $city=$link1=$link2=$complexion=$language=$mobileno="";
	   
   $email_Err=$password_Err=$Firstname_Err=$Lastname_Err=$Age_Err=$Salary_Err=$Caste_Err=
   $Community_Err=$Religion_Err=$City_Err=$Link1_Err=$Link2_Err=$Complexion_Err=
   $Language_err=$Mobileno_Err="";
   
   $email_new = $pass_new= $firstname_new= $lastname_new=$age_new=$salary_new=$caste_new=$community_new=
   $religion_new=$salary_new=$dob_new=
   $city_new=$link1_new=$link2_new=$complexion_new=$language_new=$mobileno_new="";
   
   // email validation
   $email=$_POST["mail"];
   if(empty($email)){  
   $email_Err="e-Mail Input Required ";  
   }
   else if(!preg_match('^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^', $email))
   {
			$email_Err="Invalid e-Mail" ;
   }
   else{
	   $email_new=$email;
   }
   
   
   
   // pass validation
   $pass=$_POST["pass"];
   if(empty($pass)){  
   $password_Err= "Password Input Required";  
   }
   else{
   $password_new=$pass;	
   }
   
   
   
   
   // first name validation
   $firstname=$_POST['fname'];
   if(empty($firstname)){
   $Firstname_Err="First Name Input Required";
   }
   else if(preg_match(" /^[A-Za-z]+$/", $firstname)){
	   $firstname_new=strtolower($firstname);	
   }
   else{
   $Firstname_Err="Enter Valid First Name";
   }
   
   
   
   // last name validation
   $lastname=$_POST['lname'];
   if(empty($lastname)){
   $LastnameErr="Last Name Input Required";
   }else if(preg_match(" /^[A-Za-z]+$/", $lastname)){
	   $lastname_new=strtolower($lastname);	
   }
   else{
   $LastnameErr="Enter Valid Last Name";
   }
   
   // dob assigning
   $dob_new=$_POST['dob'];
   
   
   // age validation
   $age=$_POST['age'];
   $age=(int)$age;
   if(empty($age)){
   $AgeErr= "Age Input Required";
   }
   else if(!(is_numeric($age) && $age >= 20 && $age <= 35)){	
	   $AgeErr= "Enter Valid Age";
   }
   else{
	   $age_new=$age;
   }
      
   
   // salary validation
   $salary=$_POST['salary'];
   $salary=(int)$salary;
   if(empty($salary)){
   $Salary_Err="Salary Input Required";
   }
   elseif(is_numeric($salary) ){
   $salary_new=$salary;
   }
   else{
   $Salary_Err= "Enter Valid Salary";
   }
   
   
   // city validation
   $city=$_POST['city'];
   if(empty($city)){
   $City_Err="City Input Required";
   }
   else if(preg_match(" /^[A-Za-z]+$/", $city)){
	   $city_new=strtolower($city);	
   }
   else{
   $City_Err="Enter Valid City";
   }
   
   
   // height validation
   $height=$_POST['height'];
   $height=(float)$height;
   if(empty($height)){
   $Height_Err="Height Input Required";
   }
   elseif(!(is_float($height) && $height >= 4.9 && $height <= 7.0)){
	   $Height_Err="Enter Valid Height in foot";
   }
   else{
		   $height_new=$height;
   }
   
   // weight validation
   $weight=$_POST['weight'];
   $weight=(float)$weight;
   if(empty($weight)){
   $Weight_Err="Weight Input Required";
   }
   else if(!(is_float($weight) && $weight >= 45.0 && $weight <= 110.0)){	
	   $Height_Err="Enter Valid Weight";
   }
   else{
	   $weight_new=$weight;
   }
   
  
   
   // language validation
   $language=$_POST['language'];
   if(empty($language)){
   $Language_Err="Language Input Required";
   }
   else if(preg_match(" /^[A-Za-z]+$/", $language)){
	   $language_new=strtolower($language);	
   }
   else{
   $Language_Err="Enter Valid Language";
   }
   
   
   
   // religion validation
   $religion=$_POST['religion'];
   if(empty($religion)){
   $Religion_Err="Religion Input Required";
   }
   else if(preg_match(" /^[A-Za-z]+$/", $religion)){
	   $religion_new=strtolower($religion);	
   }
   else{
   $Religion_Err="Enter Valid religion";
   }
   
   
   
   // caste validation
   $caste=$_POST['caste'];
   if(empty($caste)){
   $Caste_Err="Caste Input Required";
   }
   else if(preg_match(" /^[A-Za-z]+$/", $caste)){
	   $caste_new=strtolower($caste);	
   }
   else{
   $Caste_Err="Enter Valid Caste";
   }
   
   
   // comunity validation
   $community=$_POST['community'];
   if(empty($community)){
   $Community_Err="Community Input Required";
   }
   else if(preg_match(" /^[A-Za-z]+$/", $community)){
	   $community_new=strtolower($community);	
   }
   else{
   $Community_Err="Enter Valid Community";
   }
   
   
   // mobileno validation
   $mobileno=$_POST["phone"];
   if (empty($mobileno)) {  
			   $Mobileno_Err = "Mobile no is required";  
	   } else {  
			  // $mobileno = input_data($mobileno);  
			   // check if mobile no is well-formed  
			   if (!preg_match ("/^[0-9]*$/", $mobileno) && strlen ($mobileno) != 10) {  
			   $Mobileno_Err = "Only numeric value is allowed.";  
			   }  
			   else{
				   $mobileno_new=$mobileno;
	   }  
   }
   
   
   
   // url-1 validation
   $link1=$_POST['link1'];
   if (empty($link1)) {  
		   $Link1_Err = "Link Input Required";  
	   } 
	   else if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$link1)) {  
				   $Link1_Err = "Invalid URL";  
			   }
   else{
	   $link1_new=$link1;
	   }  
	   
	   
   // url-2 validation
   $link2=$_POST['link2'];
   if (empty($link2)) {  
		   $Link2_Err = "Link Input Required";  
	   } 
	   else if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$link2)) {  
				   $Link2_Err = "Invalid URL";  
			   }
   else{
	   $link2_new=$link2;
	   }  */
   


/*
function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  
*/
// }


if ($_SERVER["REQUEST_METHOD"] == "POST") 
// if(isset($_POST['edit1']))
{

  $email_Err=$password_Err=$Firstname_Err=$Lastname_Err=$Age_Err=$Salary_Err=$Caste_Err=
  $Community_Err=$Religion_Err=$City_Err=$Link1_Err=$Link2_Err=
  $Language_Err=$Mobileno_Err="";
  
   $email_new = $pass_new= $firstname_new= $lastname_new=$age_new=$salary_new=$caste_new=$community_new=
   $religion_new=$salary_new=$dob_new=
   $city_new=$link1_new=$link2_new=$complexion_new=$language_new=$mobileno_new="";
  
   $email = $pass= $firstname= $lastname=$age=$salary=$caste=$community=$religion=$salary=
   $city=$link1=$link2=$complexion=$language=$mobileno="";

  $email=$_POST['mail'];
  $pass=$_POST['pass'];
  $firstname=$_POST['fname'];  
  $lastname=$_POST['lname'];
  $link2=$_POST['link2'];
  $age=$_POST['age'];
  $salary=$_POST['salary'];
  $language=$_POST['language'];
  $city=$_POST['city'];
  $caste=$_POST['caste'];
  $height=$_POST['height'];
  $weight=$_POST['weight'];
  $religion=$_POST['religion'];
  $community=$_POST['community'];
  $mobileno=$_POST['phone'];
  $link1=$_POST['link1'];

  
    
  
  // email validation

  if(empty($email)){  
  $email_Err="e-Mail Input Required ";  
  }
  else if(!preg_match('^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^', $email))
  {
     $email_Err="Invalid e-Mail" ;
  }
  else{
    $email_new=$email;
  }
  
  
  
  // pass validation

  if(empty($pass)){  
  $password_Err= "Password Input Required";  
  }
  else{
  $password_new=$pass;	
  }
  
  
  
  
  // first name validation

  if(empty($firstname)){
  $Firstname_Err="First Name Input Required";
  }
  else if(preg_match(" /^[A-Za-z]+$/", $firstname)){
    $firstname_new=strtolower($firstname);	
  }
  else{
  $Firstname_Err="Enter Valid First Name";
  }
  
  
  
  // last name validation

  if(empty($lastname)){
  $Lastname_Err="Last Name Input Required";
  }else if(preg_match(" /^[A-Za-z]+$/", $lastname)){
    $lastname_new=strtolower($lastname);	
  }
  else{
  $Lastname_Err="Enter Valid Last Name";
  }
  
  // dob assigning
  // $dob_new=$_POST['dob'];
  
  
  // age validation
  $age=(int)$age;
  if(empty($age)){
  $Age_Err= "Age Input Required";
  }
  else if(!(is_numeric($age) && $age >= 20 && $age <= 35)){	
    $Age_Err= "Enter Valid Age";
  }
  else{
    $age_new=$age;
  }
     
  
  // salary validation

  $salary=(int)$salary;
  if(empty($salary)){
  $Salary_Err="Salary Input Required";
  }
  elseif(is_numeric($salary) ){
  $salary_new=$salary;
  }
  else{
  $Salary_Err= "Enter Valid Salary";
  }
  
  
  // city validation

  if(empty($city)){
  $City_Err="City Input Required";
  }
  else if(preg_match(" /^[A-Za-z]+$/", $city)){
    $city_new=strtolower($city);	
  }
  else{
  $City_Err="Enter Valid City";
  }
  
  
  // height validation

  $height=(float)$height;
  if(empty($height)){
  $Height_Err="Height Input Required";
  }
  elseif(!(is_float($height) && $height >= 4.9 && $height <= 7.0)){
    $Height_Err="Enter Valid Height in foot";
  }
  else{
      $height_new=$height;
  }
  
  // weight validation

  $weight=(float)$weight;
  if(empty($weight)){
  $Weight_Err="Weight Input Required";
  }
  else if(!(is_float($weight) && $weight >= 45.0 && $weight <= 110.0)){	
    $Weight_Err="Enter Valid Weight";
  }
  else{
    $weight_new=$weight;
  }
  
 
  
  // language validation
 
  if(empty($language)){
  $Language_Err="Language Input Required";
  }
  else if(preg_match(" /^[A-Za-z]+$/", $language)){
    $language_new=strtolower($language);	
  }
  else{
  $Language_Err="Enter Valid Language";
  }
  


  // religion validation

  if(empty($religion)){
  $Religion_Err="Religion Input Required";
  }
  else if(preg_match(" /^[A-Za-z]+$/", $religion)){
    $religion_new=strtolower($religion);	
  }
  else{
  $Religion_Err="Enter Valid religion";
  }
  
  
  
  // caste validation

  if(empty($caste)){
  $Caste_Err="Caste Input Required";
  }
  else if(preg_match(" /^[A-Za-z]+$/", $caste)){
    $caste_new=strtolower($caste);	
  }
  else{
  $Caste_Err="Enter Valid Caste";
  }
  
  
  // comunity validation

  if(empty($community)){
  $Community_Err="Community Input Required";
  }
  else if(preg_match(" /^[A-Za-z]+$/", $community)){
    $community_new=strtolower($community);	
  }
  else{
  $Community_Err="Enter Valid Community";
  }
  
  
  // mobileno validation
  
  if (empty($mobileno)) {  
        $Mobileno_Err = "Mobile no is required";  
    } else {  
       // $mobileno = input_data($mobileno);  
        // check if mobile no is well-formed  
        if (!preg_match ("/^[0-9]*$/", $mobileno) && strlen ($mobileno) != 10) {  
        $Mobileno_Err = "Only numeric value is allowed.";  
        }  
        else{
          $mobileno_new=$mobileno;
    }  
  }
  
  
  
  // url-1 validation

  if (empty($link1)) {  
      $Link1_Err = "Link Input Required";  
    } 
    else if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$link1)) {  
          $Link1_Err = "Invalid URL";  
        }
  else{
    $link1_new=$link1;
    }  
    
    
  // url-2 validation

  if (empty($link2)) {  
      $Link2_Err = "Link Input Required";  
    } 
    else if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$link2)) {  
          $Link2_Err = "Invalid URL";  
        }
  else{
    $link2_new=$link2;
    }  

/*
  if(!$error)*/

if(!empty($email_new)&&!empty($password_new)&&!empty($firstname_new)&&!empty($lastname_new)&&!empty($age_new)&&!empty($salary_new)&&
   !empty($caste_new)&&!empty($height_new)&&!empty($weight_new)&& !empty($community_new)&&!empty($religion_new)&&
   !empty($city_new)&&!empty($link1_new)&&
   !empty($link2_new)&&!empty($language_new)&& !empty($mobileno_new))
      {

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
 
  $mail= $email_new;
  $pass= $password_new;
  $fname=$firstname_new; 
  $lname=$lastname_new;
  $age=$age_new;
  $salary=$salary_new;
  $caste=$caste_new;
  $community=$community_new;
  $religion= $religion_new;
  $salary=$salary_new;
  $dob=$dob_new;
  $city=$city_new;
  $link1=$link1_new;
  $link2=$link2_new;
  $language=$language_new;
  $mobile=$mobileno_new;
  $user_name=$_SESSION["user_name"];
/*
    $mail=mysqli_real_escape_string($conn,$_POST['mail']);
    $pass=mysqli_real_escape_string($conn,$_POST['pass']);
    $fname=mysqli_real_escape_string($conn,$_POST['fname']);
    $lname=mysqli_real_escape_string($conn,$_POST['lname']);    
    $dob=mysqli_real_escape_string($conn,$_POST['dob']);    
    $age=mysqli_real_escape_string($conn,$_POST['age']);   
    $salary=mysqli_real_escape_string($conn,$_POST['salary']);
    $height=mysqli_real_escape_string($conn,$_POST['height']);
    $weight=mysqli_real_escape_string($conn,$_POST['weight']);
    $city=mysqli_real_escape_string($conn,$_POST['city']);
    $caste=mysqli_real_escape_string($conn,$_POST['caste']);    
    $community=mysqli_real_escape_string($conn,$_POST['community']);    
    $religion=mysqli_real_escape_string($conn,$_POST['religion']);   
    $link1=mysqli_real_escape_string($conn,$_POST['link1']);
    $link2=mysqli_real_escape_string($conn,$_POST['link2']);    
    $language=mysqli_real_escape_string($conn,$_POST['language']);   
    $phone=mysqli_real_escape_string($conn,$_POST['phone']);
    $user_name=$_SESSION["user_name"];*/
       $sql = "UPDATE user_data2 SET mail='$mail',password='$pass', firstname='$fname', lastname='$lname', # dob='$dob', 
    age='$age', 
    salary='$salary', city='$city', height='$height', weight='$weight', language='$language', religion='$religion',
     caste='$caste',
     community='$community', mobileno='$mobile', facebook='$link1', instagram='$link2' WHERE mail='$user_name'";

if(mysqli_query($conn,$sql)){
  header("Location: Search.php");// open search page here 
  exit();

} else{
  die("ERROR: Editing your profile");

}


   }
  
  }
}

?>


<body>


<div id="logo-tab">
<p id="name">GoDuo</p>
<p id="capt">You & I make a perfect "WE"</p><button type="button" id="about" onclick="aboutUs()" >About Us</button><button type="button" id="home"onclick="home()">Home</button>
<script>
function aboutUs(){
  window.location.href = "about-us.html";
}
function home(){
  window.location.href = "Login.php";
}
</script>

</div>
</br>
<h2 id="h31">Edit Profile</h2>
<form id="form-login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<input type="text" id="mail" placeholder="Mail" name="mail"></input>
<input type="password" id="pass" placeholder="Password"name="pass"></input>
<input type="text" id="fname" placeholder="First Name" name="fname"></input>
<input type="text" id="lname" placeholder="Last Name" name="lname"></input></br>
<!---<p id="p-dob"><label for="dob">DOB</label></p>
<input type="date" id="dob" min="1990-01-01" max="2000-12-01" name="dob"></input>--->
<input type="text" id="age" placeholder="Age" name="age"></input></br>
<input type="text" id="salary" placeholder="Salary Per Month" name="salary"></input></br>

<input type="text" id="height" placeholder="Height" name="height"></input></br>
<input type="text" id="weight" placeholder="Weight" name="weight"></input></br>

<input type="text" id="city" placeholder="City" name="city"></input></br>
<input type="text" style="    margin: 14px 45pc;" id="caste" name="caste" placeholder="Caste"></input></br>
<input type="text" id="religion" placeholder="Religion" name="religion"></input></br>
<input type="text" id="community" placeholder="Community" name="community"></input>
<input type="text" id="language" placeholder="Language" name="language"></input></br>
<input type="tel" id="phone" name="phone" placeholder="Mobile No">

<input type="url" id="link1" name="link1" placeholder="facebook profile" >
<input type="url" id="link2" name="link2" placeholder="instagram profile">

<input type="submit" id="edit1" value="Edit Profile" name="edit1"></button>
</form>

<div style="margin-top:-650px; margin-left:1000px;">
<br/>
<span style="color: red;"><?php if (isset($email_Err)) echo $email_Err; ?></span></br>
<br/>
<span style="color: red;"><?php if (isset($password_Err)) echo $password_Err; ?></span></br>
<br/>
<span style="color: red;"><?php if (isset($Age_Err)) echo $Age_Err; ?></span></br>
<br/>
<span style="color: red;"><?php if (isset($City_Err)) echo $City_Err; ?></span></br>
<br/>
<span style="color: red;"><?php if (isset($Salary_Err)) echo $Salary_Err; ?></span></br>
<br/>
<span style="color: red;"><?php if (isset($Height_Err)) echo $Height_Err; ?></span></br>
<br/>
<span style="color: red;"><?php if (isset($Weight_Err)) echo $Weight_Err; ?></span></br>
<br/>
<span style="color: red;"><?php if (isset($Community_Err)) echo $Community_Err; ?></span></br>
<br/>
<span style="color: red;"><?php if (isset($Religion_Err)) echo $Religion_Err; ?></span></br>
<br/>
<span style="color: red;"><?php if (isset($Caste_Err)) echo $Caste_Err; ?></span></br>
<br/>
<span style="color: red;"><?php if (isset($Mobileno_Err)) echo $Mobileno_Err; ?></span></br>
<br/>
<span style="color: red;"><?php if (isset($Firstname_Err)) echo $Firstname_Err; ?></span></br>
<br/>
<span style="color: red;"><?php if (isset($Lastname_Err)) echo $Lastname_Err; ?></span></br>
<br/>
<span style="color: red;"><?php if (isset($Link1_Err)) echo $Link1_Err; ?></span></br>
<br/>
<span style="color: red;"><?php if (isset($Link2_Err)) echo $Link2_Err; ?></span></br>
<br/>
<span style="color: red;"><?php if (isset($Language_Err)) echo $Language_Err; ?></span></br>
<br/>
<div>

</body>
</html>