<!DOCTYPE HTML> 
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body> 

<?php
// define variables and set to empty values
$nameErr = $guidErr = $groupErr = $groupnameErr = "";
$name = $guid = $group = $groupname = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed"; 
     }
   }
   
   if (empty($_POST["guid"])) {
     $nameErr = "GUID is required";
   } else {
     $name = test_input($_POST["guid"]);
     // check if GUID only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z1-0 ]*$/",$guid)) {
       $nameErr = "Only letters, Numbers and white space allowed"; 
     }
   }
   if (empty($_POST["group"])) {
     $nameErr = "Group is required";
   } else {
     $name = test_input($_POST["group"]);
     // check if group only contains letters and whitespace
     if (!preg_match("/^[1-0]*$/",$group)) {
       $nameErr = "Only numbers allowed"; 
     }
   }
      if (empty($_POST["groupname"])) {
     $nameErr = "Group is required";
   } else {
     $name = test_input($_POST["groupname"]);
     // check if group only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$groupname)) {
       $nameErr = "Only letters and white space allowed"; 
     }
   }

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<h2>DAYZ Epoch Reserve Slot Submission form</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   Name: <input type="text" name="name" value="<?php echo $name;?>">
   <span class="error">* <?php echo $nameErr;?></span>
   <br><br>
   GUID: <input type="text" name="guid" value="<?php echo $guid;?>">
   <span class="error">* <?php echo $guidErr;?></span>
   <br><br>
   Group: <input type="text" name="group" value="<?php echo $group;?>">
   <span class="error">*<?php echo $groupErr;?></span>
   <br><br>
   Group Name: <input type="text" name="groupname" value="<?php echo $groupname;?>">
   <span class="error">*<?php echo $groupnameErr;?></span>
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
</form>



</body>
</html>