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
margin-left:0px;
margin-top:-15px;

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
font-size:10px;
float:right;
margin-left:1100px;
margin-top:-55px;
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
font-size:10px; 
margin-left:960px;
border-radius:12px;
margin-top:-5px;
width: 80px;
}

#home:hover{
background-color: green;  
color: white;
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
height: 50px;
border-radius:12px;
}


#search:hover{
background-color: green;  
color: white;
}

#select1{
padding:10px;
width:190px;
}

#main{
margin-left:700px;
margin-top: -40px;
}

#profile-queries{
float:left;
}

#matched{
  margin-bottom:10px;
  margin-top: 10px;
  clear: right;
  margin-left: 250px;
}





</style>
</head>

<?php

// if ($_SERVER["REQUEST_METHOD"] == "POST") {  
if (isset($_POST['search'])) {  
   
   $age=$salary=$caste=$community=$religion=$salary=$gender=
   $city=$complexion=$language="";
	   
   $Age_Err=$Salary_Err=$Caste_Err=
   $Community_Err=$Religion_Err=$Gender_Err=$City_Err=$Complexion_Err=
   $Language_err="";
   
   $age_new=$salary_new=$caste_new=$community_new=
   $religion_new=$salary_new=$gender_new=
   $city_new=$complexion_new=$language_new="";

// age validation
$age=$_POST['age'];
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

// radio button validation

if (!isset($_POST['gender'])){  
	$Gender_Err = "Select Your Gender";  
} else {  
  // $gender=$_POST['gender'];
  $gender_new = $_POST['gender'];
  // $gender_new=$gender;
//	$gender_new = input_data($_POST["gender"]);  
}  


// salary validation
$salary=$_POST['salary'];
$salary=(int)$salary;
if(empty($salary)){
$Salary_Err="Salary Input Required";
}
else if(is_numeric($salary) ){
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
else if(!(is_float($height) && $height >= 4.9 && $height <= 7.0)){
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
	$Weight_Err="Enter Valid Weight";
}
else{
	$weight_new=$weight;
}

// color complexion validation

if (!isset($complexion)){  
	$Complexion_Err = "Select Your Complexion";  
} else {  
  $complexion_new=$_POST['complexion'];
	//$complexion_new = input_data($_POST['complexion']);  
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

// }

// if(isset($_POST['search']))
// {
/*
  if(isset( $age_new)&&isset($salary_new)&&isset($caste_new)&&isset($height_new)&&isset($weight_new)&& 
  isset($community_new)&&isset($religion_new)&&isset($gender_new)&&isset($city_new)&&isset($complexion_new)&&isset($language_new))
    {

$host = "localhost";
$username  = "root";
$passwd = "";
$dbname = "goduo";

//Creating a connection
$conn = mysqli_connect($host, $username, $passwd, $dbname);
if(!$conn){
	 echo"error";
}
else{

  $age=$age_new;
  $salary=$salary_new;
  $caste= $caste_new;
  $community=$community_new;
  $religion=$religion_new;
  $salary=$salary_new;
  $gender=$gender_new;
  $height=$height_new;
  $weight=$weight_new;
  $city=$city_new;
  $complexion=$complexion_new;
  $language=$language_new;


/*
    $gender=$gender_new;
    $age=mysqli_real_escape_string($conn,$_POST['age']);   
    $salary=mysqli_real_escape_string($conn,$_POST['salary']);
    $height=mysqli_real_escape_string($conn,$_POST['height']);
    $weight=mysqli_real_escape_string($conn,$_POST['weight']);
    $city=mysqli_real_escape_string($conn,$_POST['city']);
    $caste=mysqli_real_escape_string($conn,$_POST['caste']);    
    $community=mysqli_real_escape_string($conn,$_POST['community']);    
    $religion=mysqli_real_escape_string($conn,$_POST['religion']);   
    $language=mysqli_real_escape_string($conn,$_POST['language']);   
	$complexion=mysqli_real_escape_string($conn,$_POST['complexion']);

$query = "SELECT firstname,lastname,dob,mobileno,facebook,instagram FROM user_data WHERE  age='$age' 
#AND gender='$gender_new' AND salary='$salary_new' AND height='$height_new' AND weight='$weight_new' AND city='$city_new' AND caste='$caste_new' AND
#			community='$community_new' AND religion='$religion_new' AND language='$language_new' AND complexion='$complexion_new'";

$run=mysqli_query($conn, $query);
if($run){
 while($row = $run->fetch_array())
{?>
<span style="margin-left: 500px; margin-top:100px;" ><?php echo $row['firstname'];?> </span><br>
<span style="margin-left: 500px;margin-top:100px;"><?php echo $row['lastname'];?> </span><br>
<span style="margin-left: 500px;margin-top:100px;"><?php echo $row['dob']; ?> </span><br>
<span style="margin-left: 500px;margin-top:100px;"><?php echo $row['facebook'];?> </span><br>
<span style="margin-left: 500px;margin-top:100px;"><?php echo $row['instagram'];?></span><br>
<span style="margin-left: 500px;margin-top:100px;"><?php echo $row['mobileno'];?></span><br>
<?php
}
} 
else{
 echo "ERROR: No Profiles Found";
}
// Close connection
mysqli_close($conn);
}

}*/

}
?>


<body>

<div id="logo-tab">
<p id="name">GoDuo</p><button type="button" id="about" onclick="aboutUs()" >About Us</button>
<p id="capt">You & I make a perfect "WE"</p><button type="button" id="home" onclick="home()">Home</button>
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


<div id="profile-queries" style="border-color: blue; border-width:2px; height:850px;border-style:inset;">
<p> Your Search</p>
<p style="color:red;">Gender:</p><span><?php if (isset($gender_new)) echo $gender_new; ?></span>
<p style="color:red;">Age:</p><span><?php if (isset($age_new)) echo $age_new; ?></span>
<p style="color:red;">Salary:</p><span><?php if (isset($salary_new)) echo $salary_new; ?></span>
<p style="color:red;">Caste:</p><span><?php if (isset($caste_new)) echo $caste_new; ?></span>
<p style="color:red;">Community:</p><span><?php if (isset($community_new)) echo $community_new; ?></span>
<p style="color:red;">City:</p><span><?php if (isset($city_new)) echo $city_new; ?></span>
<p style="color:red;">Religion:</p><span><?php if (isset($religion_new)) echo $religion_new; ?></span>
<p style="color:red;">Complexion:</p><span><?php if (isset($complexion_new)) echo $complexion_new; ?></span>
<p style="color:red;">Height:</p><span><?php if (isset($height_new)) echo $height_new; ?></span>
<p style="color:red;">Weight:</p><span><?php if (isset($weight_new)) echo $weight_new; ?></span>
<p style="color:red;">Langauge:</p><span><?php if (isset($language_new)) echo $language_new; ?></span></br>
</div>
<div style="margin-left: 350px; margin-top:10px;">
<p id="q1" style="margin-left: -50px;">Matching Profiles</p>
</div>
  




<div id="main">
<h2 id="h31">Search</h2>
<form id="form-login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<p id="p-gender">Gender</p>
<div id="radios">
<input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label>
<input type="radio" id="female" name="gender" value="female" >
<label for="female">Female</label>
<input type="radio" id="other" name="gender" value="other" >
<label for="female">Others</label>
<span style="color: red;"><?php if (isset($Gender_Err)) echo $Gender_Err; ?></span></br>
</div>
</br>
<input type="text" id="age" placeholder="Age" name="age" ></input>
<span style="color: red;"><?php if (isset($Age_Err)) echo $Age_Err; ?></span></br>
</br>
<input type="text" id="salary" placeholder="Salary Per Month" name="salary" ></input>
<span style="color: red;"><?php if (isset($Salary_Err)) echo $Salary_Err; ?></span></br>
</br>
<p id="p-complex"><label> Color Complexion </label></p>  
<select id="select1" name="complexion">  
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
<span style="color: red;"><?php if (isset($Complexion_Err)) echo $Complexion_Err; ?></span></br>
</br>
</br>
<input type="text" id="height" placeholder="Height" name="height" ></input>
<span style="color: red;"><?php if (isset($Height_Err)) echo $Height_Err; ?></span></br>
</br>
<input type="text" id="weight" placeholder="Weight" name="weight" ></input>
<span style="color: red;"><?php if (isset($Weight_Err)) echo $Weight_Err; ?></span></br>
</br>
<input type="text" id="city" placeholder="City" name="city" ></input>
<span style="color: red;"><?php if (isset($City_Err)) echo $City_Err; ?></span></br><br/>
<input type="text" id="caste" placeholder="Caste" name="caste" ></input>
<span style="color: red;"><?php if (isset($Caste_Err)) echo $Caste_Err; ?></span></br><br/>
<input type="text" id="religion" placeholder="Religion" name="religion" ></input>
<span style="color: red;"><?php if (isset($Religion_Err)) echo $Religion_Err; ?></span></br<br/><br/><br/>
<input type="text" id="community" placeholder="Community" name="community" ></input>
<span style="color: red;"><?php if (isset($Community_Err)) echo $Community_Err; ?></span></br><br/>



<input type="text" id="language" placeholder="Language" name="language" ></input>
<span style="color: red;"><?php if (isset($Language_Err)) echo $Language_Err; ?></span></br><br/>

<input type="submit" id="search" value="Search" name="search"></input>
</form>
</div>


<?php
if(!empty($age_new)&&!empty($salary_new)&&!empty($caste_new)&&!empty($height_new)&&!empty($weight_new)&& 
!empty($community_new)&&!empty($religion_new)&&!empty($gender_new)&&!empty($city_new)&&!empty($complexion_new)&&!empty($language_new))
    {

$host = "localhost";
$username  = "root";
$passwd = "";
$dbname = "goduo";

//Creating a connection
$conn = mysqli_connect($host, $username, $passwd, $dbname);
if(!$conn){
	 echo"error";
}
else{

  $age=$age_new;
  $salary=$salary_new;
  $caste= $caste_new;
  $community=$community_new;
  $religion=$religion_new;
  $salary=$salary_new;
  $gender=$gender_new;
  $height=$height_new;
  $weight=$weight_new;
  $city=$city_new;
  $complexion=$complexion_new;
  $language=$language_new;


/*
    $gender=$gender_new;
    $age=mysqli_real_escape_string($conn,$_POST['age']);   
    $salary=mysqli_real_escape_string($conn,$_POST['salary']);
    $height=mysqli_real_escape_string($conn,$_POST['height']);
    $weight=mysqli_real_escape_string($conn,$_POST['weight']);
    $city=mysqli_real_escape_string($conn,$_POST['city']);
    $caste=mysqli_real_escape_string($conn,$_POST['caste']);    
    $community=mysqli_real_escape_string($conn,$_POST['community']);    
    $religion=mysqli_real_escape_string($conn,$_POST['religion']);   
    $language=mysqli_real_escape_string($conn,$_POST['language']);   
	$complexion=mysqli_real_escape_string($conn,$_POST['complexion']);*/

$query = "SELECT firstname,lastname,dob,mobileno,facebook,instagram FROM user_data2 WHERE  age='$age' AND gender='$gender' AND salary='$salary' 
# AND height='$height' AND weight='$weight' 
AND city='$city' AND caste='$caste' AND community='$community' AND religion='$religion' AND language='$language' AND complexion='$complexion'";

$run=mysqli_query($conn, $query);
if($run){
 while($row = $run->fetch_array())
{?>
<div id="matched">

<span style="margin-left: 0px; margin-top:150px;" ><?php echo $row['firstname'];?>&nbsp;
<?php echo $row['lastname'];?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['dob']; ?> </span><br>
<?php print "<a  href= ".$row['facebook']." >Facebook link</a>"?>&nbsp;&nbsp;&nbsp;&nbsp;
<?php print "<a  href= ".$row['instagram']." >Instagram link</a>"?>&nbsp;&nbsp;&nbsp;&nbsp;
<?php print "<a href=tel:" .$row['mobileno']. ">Give a Call</a>"?></span><br><br><br>
  </div>

<?php
}
// <a href="tel:123-456-7890p123">CLICK TO CALL</a>
// "<a href=tel:" .$row['mobileno']. ">Give a Call</a>"
} 
else{?>
  <span style="margin-left: 100px; margin-top:150px;" ><?php echo "ERROR: No Profiles Found"?> </span><br>
<?php
}
// Close connection
mysqli_close($conn);
}
//print "<a href= ".$link." >Link</a>";
}
?>



</body></html>