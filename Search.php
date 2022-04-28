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
margin-left:1100px;
margin-top:25px;
border-radius:12px;
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
border-radius:12px;
margin-top:-50px;
}

#home:hover{
background-color: green;  
color: white;
}


#h31{
}

#p-dob{

}

#div-gender{

}

#age{
padding:10px;
}

#male{
padding:10px;
}

#female{
padding:10px;
}

#height{
padding:10px;
width:190px;
}

#weight{
padding:10px;
width:190px;
}

#salary{
padding:10px;
width:190px;
}

#caste{
padding:10px;
width:190px;
}
#religion{
padding:10px;
width:190px;
}
#community{
padding:10px;
width:190px;
}
#language{
padding:10px;
width:190px;
}

#complexion{
padding:10px;
width:190px;
}

#city{
padding:10px;
width:190px;
}

#search{
margin-top:20px;
margin-left:50px;
font-size:large;
padding:15px;
border-radius:12px;
}


#radios{
}

#search:hover{
background-color: green;  
color: white;
}

#select1{
padding:10px;
width:190px;
}
#p-complex{
}

#main{
float:right;
}

#hj{
float:left;
}

</style>
</head>

<?php

if (isset($_POST['create'])) {  

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

$query = "SELECT age religion FROM DuoApp WHERE age='$q3' and religion='$q4'";
$run=mysqli_query($link, $query)
if($run){
    while($row = $run->fetch_array()):

	echo $row['age'] $row['religion']  $row['salary'] $row['complexion'];
} 
else{
    echo "ERROR: No Profiles Found";
}
 // Close connection
mysqli_close($link);
}



?>










<body>

<div id="logo-tab">
<p id="name">GoDuo</p><button type="button" id="about" >About Us</button>
<button type="button" id="home"  >Home</button>
</div>

</br>


<p id="hj">

</p>


<div id="main">
<h2 id="h31">Search</h2>
<p id="p-gender">Gender</p>
<div id="radios">
<input type="radio" id="male" name="gender" value="male" required>
<label for="male">Male</label>
<input type="radio" id="female" name="gender" value="female" >
<label for="female">Female</label>
<input type="radio" id="other" name="gender" value="other" >
<label for="female">Others</label>
</div>
</br>
<input type="text" id="age" placeholder="Age" required></input></br>
</br>
<input type="text" id="salary" placeholder="Salary Per Month" required></input></br>
</br>
<p id="p-complex"><label> Color Complexion </label></p>  
<select id="select1" required>  
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
</br>
</br>
<input type="text" id="height" placeholder="Height" required></input></br>
</br>
<input type="text" id="weight" placeholder="Weight" required></input></br>
</br>
<input type="text" id="city" placeholder="City" required></input></br></br>
<input type="text" id="caste" placeholder="Caste" required></input></br></br>
<input type="text" id="religion" placeholder="Religion" required></input></br></br>
<input type="text" id="community" placeholder="Community" required></input></br></br>
<input type="text" id="language" placeholder="Language" required></input></br></br>

<button type="button" id="search" >Search</button>
</div>
</body>
</html>