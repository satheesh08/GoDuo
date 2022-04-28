
<html>
<head>
<style type="text/css">
#name{
color:white; 
font-size:xx-large;
font-weight:bold;
float:left;
}

#logo-tab{
background-color:#000080; 
padding:20px;
}

#about{
transition-duration: 0.4s;
background-color: #ffffff; 
color: black;
padding:15px;
font-size:20px; 
float:right;
margin-left:1100px;
margin-top:25px;
border-radius:12px;
}

#about:hover{
background-color: green;  color: white;
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
margin-left:720px;
}

#dob{
padding:10px;
width:150px;
margin-left:495px;
margin-top:-50px;
}

#p-dob{

margin-left:450px;
margin-top:40px;
}

#p-gender{

margin-left:450px;
margin-top:20px;
}

#age{
padding:10px;
margin-top:-50px;
margin-left:720px;
}

#male{
padding:10px;
}

#female{
padding:10px;
}

#other{
padding:10px;
}

#radios{
margin-top:-35px;
margin-left:510px;
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
margin-left:450px;
margin-top:10px;
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
margin-left:730px;
margin:-190px 540pt;
width:190px;
}
#phone{
padding:10px;
margin-left:720px;
margin-top:100px;
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


#new_user{
margin-top:20px;
background-color: #ffffff; 
color: black;
transition-duration: 0.4s;
margin-left:630px;
font-size:large;
padding:15px;
border-radius:12px;
}

#new_user:hover{
background-color: green;  color: white;
}
#select1{
padding:10px;
margin-left:450px;
margin-top:0px;
width:190px;
}
#p-complex{
margin-left:450px;
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




// first name validation
$firstname=$_POST['firstname'];
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
$lastname=$_POST['lastname'];
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
if(empty($age)){
$AgeErr= "Age Input Required";
}
else if(!(is_numeric($age) && $age >= 20 && $age <= 35)){	
	$AgeErr= "Enter Valid Age";
}
else{
	$age_new=$age;
}

// radio button validation
if (!isset($_POST['radios'])){  
	$genderErr = "Select Your Gender";  
} else {  
	$gender_new = input_data($_POST["agree"]);  
}  


// salary validation
$salary=$_POST['salary'];
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
$City+_Err="City Input Required";
}
else if(preg_match(" /^[A-Za-z]+$/", $city)){
	$city_new=strtolower($city);	
}
else{
$City_Err="Enter Valid City";
}


// height validation
$height=$_POST['height'];
if(empty($height)){
$HeightErr="Height Input Required";
}
elseif(!(is_float($height) && $height >= 4.9 && $height <= 7.0)){
	$HeightErr="Enter Valid Height in foot";
}
else{
		$height_new=$height;
}

// weight validation
$weight=$_POST['weight'];
if(empty($weight)){
$WeightErr="Weight Input Required";
}
else if(!(is_float($weight) && $weight >= 45 && $weight <= 110)){	
	$HeightErr="Enter Valid Weight";
}
else{
	$weight_new=$weight;
}

// color complexion validation
if (!isset($_POST['select'])){  
	$Complexion_Err = "Select Your Complexion";  
} else {  
	complexion_new = input_data($_POST['color']);  
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
if (empty($_POST["mobileno"])) {  
            $Mobileno_Err = "Mobile no is required";  
    } else {  
            $mobileno = input_data($_POST["mobileno"]);  
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
if (empty(link1)) {  
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

$sql = "INSERT INTO `user_data` (`mail`, `password`, `firstname`, `lastname`, `dob`, `age`, `gender`, `salary`, `city`, `height`, `weight`, `complexion`, `language`, `religion`, `caste`, `community`, `mobileno`, `facebook`, `instagram`) 
VALUES ('');";
if(mysqli_query($link, $sql)){
    
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
<p id="name">GoDuo</p><button type="button" id="about" >About Us</button>
</div>
</br>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<input type="text" id="mail" placeholder="User Name"></input></br>
<input type="password" id="pass" placeholder="Password"></input></br>
<input type="text" id="fname" placeholder="First Name"></input></br>
<input type="text" id="lname" placeholder="Last Name"></input></br>
<p id="p-dob"><label for="dob">DOB</label></p>
<input type="date" id="dob" min="1990-01-01" max="2000-12-01"></input></br>
<input type="text" id="age" placeholder="Age"></input></br>
<p id="p-gender">Gender</p>
<div id="radios">
<input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label>
<input type="radio" id="female" name="gender" value="female">
<label for="other">Others</label>
</div>
</br>
<input type="text" id="salary" placeholder="Salary Per Month"></input></br>

<input type="text" id="height" placeholder="Height"></input></br>
<input type="text" id="weight" placeholder="Weight"></input></br>


<p id="p-complex"><label> Color Complexion </label></p>  
<select id="select1">  
<option value = "light"> Light  
</option>  
<option value = "fair"> Fair   
</option>  
<option value = "medium"> Medium  
</option>  
<option value = "brown"> Brown  
</option>  
<option value = "dark"> Dark 
</option>  
</select>  

<input type="text" id="city" placeholder="City"></input></br>
<input type="text" id="caste" style="margin: 14px 45pc;" placeholder="Caste"></input></br>
<input type="text" id="religion" placeholder="Religion"></input></br>
<input type="text" id="community" placeholder="Community"></input></br>
<input type="text" id="language" placeholder="Language"></input></br>
<input type="tel" id="phone" style="margin:-40px 45pc; " name="phone" placeholder="123-4567-890" "pattern="[0-9]{3}-[0-9]{4}-[0-9]{3}">

<input type="url" id="link1" name="link2" placeholder="Facebook Profile">

<input type="url" id="link2" name="link1" placeholder="Instagram Profile">


<button type="button" id="new_user" >Create</button>
</body>
</html>
