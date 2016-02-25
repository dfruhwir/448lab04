<?php
echo "<table>";
echo "<tr>";
echo "<td></td>"; //first entry is blank
for($x=1; $x<=100; $x++)//each column in first row
{
	echo "<td>" . $x . "</td>"; //print 1-100
}
echo "</tr>";
for ($y=1; $y<=100; $y++)//for each row
{
	echo "<tr>";
	echo "<td>" . $y . "</td>"; //first column is row number
	for($x=1; $x<=100; $x++)//for each column
	{
		echo "<td>" . $x*$y . "</td>"; //print multiplication of row and col
	}
	echo "</tr>";
}
echo "</table>";

?>
