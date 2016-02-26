<?php
$u = $_POST["uname"];
$p = $_POST["pname"];
$gs6 = $_POST["s6"];
$i6s = $_POST["6s"];
$mg = $_POST["g"];
$b = $_POST["brick"];
$s = $_POST["ship"];

if($s=="Overnight")
{
	$sp=50;
}
else if($s=="3 day")
{
	$sp=5;
}
else
{
	$sp=0;
}

echo "Hello " . $u . "! Thank you for shopping at We Cell Phones!<br>";
echo "Your password is " . $p . "<br><br>";
echo "Here is your receipt:<br>";
echo "<table><tr>";
echo "<th></th>"; //first entry is blank
echo "<th>Quantity</th><th>Cost Per Item</th><th>Sub Total</th></tr>";
echo "<tr><th>Samsung Galaxy s6</th><td>" . $gs6 . "</td><td>$576.00</td><td>$" . 576*$gs6 . ".00</td></tr>";
echo "<tr><th>iPhone 6s</th><td>" . $i6s . "</td><td>$650.00</td><td>$" . 650*$i6s . ".00</td></tr>";
echo "<tr><th>Moto G 2015</th><td>" . $mg . "</td><td>$180.00</td><td>$" . 180*$mg . ".00</td></tr>";
echo '<tr><th>The "Brick"</th><td>' . $b . "</td><td>$20.00</td><td>$" . 20*$b . ".00</td></tr>";
echo "<tr><th>Shipping</th><td colspan='2'>" . $s . "</td><td>$" . $sp . ".00</td></tr>";
echo "<tr><th colspan='3'>Total Cost</th><th>" . 576*$gs6+650*$i6s+180*$mg+20*$b+$sp . "</td></tr>";
echo "</table>";

?>
