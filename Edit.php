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
background-color: #ffffff; 
color: black;
transition-duration: 0.4s;
padding:15px;
font-size:20px 
float:right;
border-radius:12px;
margin-left:1100px;
margin-top:25px;
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
font-size:20px 
float:right;
margin-left:65px;
margin-top:-50px;
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
margin-left:720px;
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
margin-top:-39px;
margin-left:720px;
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
margin-left:450px;
margin-top:30px;
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
margin-left:600px;
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
margin-top:-280px;
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
	$agree = input_data($_POST["agree"]);  
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
	$Link2_new=$link2;
    }  



/*
function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  
*/







<div id="logo-tab">
<p id="name">GoDuo</p><button type="button" id="about" >About Us</button>
<button type="button" id="home"  >Home</button>
</div>
</br>
<h2 id="h31">Edit Profile</h2>
<input type="text" id="mail" placeholder="User Name"></input>
<input type="password" id="pass" placeholder="Password"></input>
<input type="text" id="fname" placeholder="First Name"></input>
<input type="text" id="lname" placeholder="Last Name"></input></br>
<p id="p-dob"><label for="dob">DOB</label></p>
<input type="date" id="dob" min="1990-01-01" max="2000-12-01"></input>
<input type="text" id="age" placeholder="Age"></input></br>
<input type="text" id="salary" placeholder="Salary Per Month"></input></br>

<input type="text" id="height" placeholder="Height"></input></br>
<input type="text" id="weight" placeholder="Weight"></input></br>

<input type="text" id="city" placeholder="City"></input></br>
<input type="text" style="    margin: 14px 45pc;" id="caste" placeholder="Caste"></input></br>
<input type="text" id="religion" placeholder="Religion"></input></br>
<input type="text" id="community" placeholder="Community"></input>
<input type="text" id="language" placeholder="Language"></input></br>
<input type="tel" id="phone" name="phone" placeholder="123-4567-890" pattern="[0-9]{3}-[0-9]{4}-[0-9]{3}">

<input type="url" id="link1" name="link2" placeholder="facebook profile">
<input type="url" id="link2" name="link1" placeholder="instagram profile">

<button type="button" id="edit1" >Edit Profile</button>

</body>
</html>