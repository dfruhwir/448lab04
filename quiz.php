<?php

$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];

$total=0;
if($q1 == "Barack Obama")
{
	$total+=1;
}
if($q2 == "Denzel Valentine")
{
	$total+=1;
}
if($q3 == "20")
{
	$total+=1;
}
if($q4 == "Exynos 7420")
{
	$total+=1;
}
if($q5 == "1500 ft")
{
	$total+=1;
}

echo "Question 1: Who is the current U.S. president?<br>You answered: " . $q1 . "<br>Correct answer: Barack Obama<br><br>";
echo "Question 2: Who is <b>NOT</b> currently on the KU basketball team?<br>You answered: " . $q2 . "<br>Correct answer: Denzel Valentine<br><br>";
echo "Question 3: What is (1-3i)*(2+6i)?<br>You answered: " . $q3 . "<br>Correct answer: 20<br><br>";
echo "Question 4: What processor is in the Samsung Galaxy s6?<br>You answered: " . $q4 . "<br>Correct answer: Exynos 7420<br><br>";
echo "Question 5: After free-falling for 12 sec, a person will reach their terminal velocity  of 120 mph. What distance fallen does it take to reach that point?<br>You answered: " . $q5 . "<br>Correct answer: 1500 ft<br><br>";

echo "Total correct answers: " . $total . "<br>";
echo "Percent correct: " . $total/5*100 . "%";
?>
