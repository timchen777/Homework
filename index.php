<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "Tim";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
if(!isset($_COOKIE[$cookie_name])) {
echo "Cookie named '" . $cookie_name . "' is not set!";
?>
<html>
<title>BMI</title> 
<body>
<h1> BMI calculator</h1>
<form method="POST" action="HW1V6.php">
Name:
<input type="text" name="user_name" required ><br>
Height:
<input type="number" name="height" required>
  <select name="unitHeight">
    <option value="centimeter">centimeters</option>
    <option value="inche">inches</option>
  </select><br>
Weight:
<input type="number" name="weight" required>
  <select name="unitWeight">
    <option value="kilogram">kilograms</option>
    <option value="pound">pounds</option>
  </select><br><br>    
<input type="submit" value="Calculate">
</form>
</body>
</html>
<?php
} else {
echo "Cookie '" . $cookie_name . "' is set!<br>";
echo "Value is: " . $_COOKIE[$cookie_name]."<br>";    
setcookie($cookie_name, "", time()-3600, "/"); //delete cookie
echo $_POST['height']."<br>";
echo $_POST['unitHeight']."<br>";
echo $_POST['weight']."<br>";    
echo $_POST['unitWeight']."<br>";
if ($_POST['unitHeight']=='centimeter')
    $heigtInCentimeter=$_POST['height'];
else //i inch=2.54 centimeters
    $heigtInCentimeter=$_POST['height']*2.54;
if ($_POST['unitWeight']=='kilogram')
    $weigtInKilogram=$_POST['weight'];
else // 1 pound=0.453592 kilograms
    $weigtInKilogram=$_POST['weight']*0.453592;

//$bmi=($_POST['height']/(($_POST['weight'])*($_POST['weight'])))*703;  
$bmi=($heigtInCentimeter/($weigtInKilogram * $weigtInKilogram))*703;  
$bmi=round($bmi,1);    
echo "Hi".$_POST['user_name'].", your BMI is ",$bmi."<br>";  
?>
<html>
<body>
<br>BMI=(Height/(Weight*Weight))*703
<p style="color:green">normal weight (BMI between 18.5 & 24.9)</p>
<p style="color:red">underweight (BMI less than 18.5)<br>
overweight (BMI between 25.0 & 29.9)<br>
obese (BMI 30.0 and above)</p>
</body>
</html>
<?php
}
?>
