<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
    <title>Document</title>
</head>
<body>
<div class="container">
<h1>Php Logical Statement</h1>
    <table class="table table-info">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Answers</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Q 1</th>
      
<?php
//1- Write php script to calculate Electricity bill
//Rule
//● For first 50 units – Rs. 2.50/unit
//● For next 100 units – Rs. 5.00/unit
//● For next 100 units – Rs. 6.20/unit
//● For units above 250 – Rs. 7.50/unit

function UnitsCalculate($x){
    $cal=0;
if($x>=1 && $x<=50 ){
    $cal=$x*2.50;
   echo " <td>".$cal."</td>";
}
elseif($x>=51&&$x<=149)
{
    $cal=$x*5.00;
    echo " <td>".$cal."</td>";
}
elseif($x>=150&&$x<=249)
{
    $cal=$x*6.20;
    echo " <td>".$cal."</td>";
}
elseif($x>=250)
{
    $cal=$x*7.20;
    echo " <td>".$cal."</td>";
}
}
UnitsCalculate(251);
?>
    </tr>
    <tr>
      <th scope="row">Q 2</th>
      
<?php

// 2- Write php script to make a calculator
// Operations:
// ● Addition
// ● Subtraction
// ● Multiplication
// ● Division
function Calculator($num1,$num2,$x){
$calculeter=1;

if($x == "+"){
$calculeter=$num1+$num2;
echo "<td>".$calculeter."</td>";
}
elseif($x == "-"){
$calculeter=$num1-$num2;
echo "<td>".$calculeter."</td>";
}
elseif($x == "*"){
$calculeter=$num1*$num2;
echo "<td>".$calculeter."</td>";
}
elseif($x == "/"){
$calculeter=$num1/$num2;
echo "<td>".$calculeter."</td>";
}
}
Calculator(5,3,"*");

?>
    </tr>
    <tr>
      <th scope="row">Q 3</th>
      <?php
// 3-Write php script to check if a person is eligible to vote
// Rule
// ● Minimum age required for voting is 18.
// ● You can use PHP Functions.
// ● You can use Decision Making Statements.

function Vote($age){
    if($age >= 18){
    echo "<td> Can is eligible to vote </td>";
}
else{
    echo "<td> Can't is eligible to vote </td>";
}
}
Vote(18);
?>

    </tr>
      <tr>
      <th scope="row">Q 4</th>
     <?php
// 4-Write php script to check whether a number is positive,
// negative or zero
// Rule
// ● You can use if else conditions.
// ● You should use appropriate PHP Operators.
// ● Also check if it is not a numeric value.
function numberPositive($x){
    if($x>0){
         echo "<td> Number is Positive </td>";
    }
    elseif($x<0)
    {
        echo "<td> Number is Negative  </td>";
    }

    elseif($x==0) {
         echo "<td> Number is Zero </td> ";
    }
    else{
       echo"<td> Not a Numeric Value </td>"; 
    }
}
numberPositive(6);

?>
    </tr>
  </tbody>
</table>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>


