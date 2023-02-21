
<!DOCTYPE html>
<html>
<body>
<?php

$fname=$lname=$gender=$dob=$bday=$email="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = test_input($_POST["fname"]);
  $lname = test_input($_POST["lname"]);
  $gender = test_input($_POST["gender"]);
  
 $dob = test_input($_POST["dob"]);
  $bday = test_input($_POST["bday"]);
  $email = test_input($_POST["email"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
   <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<label for="fname">First Name:</label><br>
     <input type="text" id="fname" placeholder="First Name" name="fname"><br><br>

  <label for="lname">Last Name:</label><br>
   <input type="text" id="lname" placeholder="Last Name" name="lname"><br><br>

   <label for="gender">Gender:</label>
   <input type="radio" id="male" name="gender:" value="Male">
<label for="male">Male</label>

   <input type="radio" id="female" name="gender:" value="Female">
<label for="female">Female</label>
<br><br>
   <label for="dob">Date of birth:</label>
   <input type="date" id="dob" name="dob"><br><br>


   <label for="bday">Nationality:</label>
   <select id="bday" name="bday">
   <option value="malaysia">Malaysia</option>
   <option value="dubai">Dubai</option>
   <option value="bangladesh">Bangladesh</option>
   <option value="india">India</option></select>
  <br><br>

  <label for="email">Email</label>
   <input type="varchar" id="email" name="email" >

<br><br>

<input type="submit" value="Submit"><br>
 

</form>

<?php
echo "<h2>Your Input:</h2>";
echo $lname;
echo "<br>";
echo $fname;
echo "<br>";
echo $gender;
echo "<br>";

echo $dob;
echo "<br>";
echo $bday;
echo "<br>";

echo $email;
?>
</body>
</html>