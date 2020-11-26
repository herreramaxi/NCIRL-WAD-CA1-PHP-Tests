<!DOCTYPE html>
<html>
    <title>first page</title> 
<body>
<h1>a title2</h1>
<?php
// phpinfo();
echo "My first PHP script!";

echo "<p>Explore <strong>Africa</strong>, <br />";
  Echo "<strong>South America</strong>, <br />";
  ECHO " and <strong>Australia</strong>!</p>";

  $votingAge = 18;
  echo "Voting age in Ireland = " .$votingAge;
  define ("MINSIZE",50);
  echo "<br>";
  echo  MINSIZE;
  echo "<br>";

  $X = 10;
  $y = 10;
  $sum = $X +$y;
  echo "sum = " .$sum;
  echo "<br>";

  $sum = $X - $y;
  echo "difference = " .$sum;
  echo "<br>";

  $product = $X *$y;
  echo "Product = " .$product;
  echo "<br>";
  
  $division = $X /$y;
  echo "division = " .$division;

  $w = "welcome";
  $t = " to NCIRL in 2020";
  echo $w .$t;

  echo "<br>";
  $price = 3.95;
$tax_rate = 0.08;
$tax_amount = $price * $tax_rate;
$total_cost = $price + $tax_amount;
$username = 'james';
$domain = '@example.com';
$email_address = $username . $domain;
print 'The tax is ' . $tax_amount;
print "<br>"; // this prints a line break
print 'The total cost is '.$total_cost;
print "<br>"; // this prints a line break
print $email_address;

echo "<br>";
$cars = array("car1", "car2", "car3", 1, 3.14);
var_dump($cars);
echo "<br>";
echo "count= ".count($cars) ;
echo "<br>";
echo "element= ".$cars[0];
echo "<br>";
$count= 100;
++$count;
$currentCount = ++$count;
echo "count: ". $count . " <br>";
echo "currentCount: ". $currentCount . " <br>";

$count = 100;
echo "count : ".$count."<br>";
$currcount = $count++;
echo "count : ".$count."<br>";
echo "currcount: ".$currcount;

echo "<br>";
$BlackjackPlayer1 = 21;
($BlackjackPlayer1 <= 21) ? $Result = "Player 1 is still in the game. " : $Result = "Player 1 is out of the action.";
echo "<p>", $Result, "</p>";
echo "<br>";
if ($BlackjackPlayer1 <= 21)
echo " Player 1 is still in the game. ";
else
echo " Player 1 is out of the action. ";
echo "<br>";

// $age = 17;
// $meal = 'breakfast';
// $dessert = 'souffle';
// if (($age >= 13) && ($age < 65))
// {
//     echo "You are too old for a kid's discount <br> and too young for the senior's discount.";
// }

// if (($meal == 'breakfast') || ($dessert == 'souffle')){
// print "Time to eat some eggs.";
// }

?> 


<!-- <script>
<?php 
echo 'alert("dasdsadsa");'
?>
</script> --> 
</body>
</html>
