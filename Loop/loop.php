<?php 
  echo"Q1: <br><br>";
  for ($i = 1; $i <= 10; $i++) {
    if ($i == 10) {
        echo $i;
    } else {
        echo $i . "-";
    }
}
echo"<br><br>";
echo"Q2: <br><br>";
$total = 0;
for ($i = 0; $i <= 30; $i++) {
    $total += $i;
}
echo $total;

echo"<br><br>";
echo"Q3: <br><br>"; 
    $Alpha="A";
    for ($i=0; $i < 5; $i++) { 
        for ($x=4; $x >=0; $x--) { 
            if ($x <= $i) {
                echo  $Alpha."&nbsp;&nbsp; ";
            }else{
                echo "A"."&nbsp;&nbsp; ";
            }
        }
        echo "<br>";
        $Alpha++;
    }

echo '<br><br>';

echo"<br><br>";
echo"Q4: <br><br>";

for ($i=0; $i < 5; $i++) { 
  for ($x=4; $x >=0; $x--) { 
      if ($x <= $i) {
          echo  (1+$i)."&nbsp;&nbsp; ";
      }else{
          echo "1"."&nbsp;&nbsp; ";
      }
  }
  echo "<br>";
}

echo"<br><br>";
echo"Q5: <br><br>";
for($i=1; $i<6; $i++){
  for($x=1; $x<6; $x++){
      if($x==$i){
      echo $i. "&nbsp;&nbsp; ";}else{
          echo '0'. "&nbsp;&nbsp; ";
      }
  }
  echo '<br>';
  }

echo"<br><br>";
echo"Q6: <br><br>";
$number = 5; 
$factorial = 1;

for ($i = 1; $i <= $number; $i++) {
    $factorial *= $i;
}

echo $factorial;

echo"<br><br>";
echo"Q7: <br><br>";
$n = 10; 
$fibonacci = [0, 1];

for ($i = 2; $i < $n; $i++) {
    $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
}

echo implode(", ", $fibonacci);

echo"<br><br>";
echo"Q8: <br><br>";
$text = "Orange Coding Academy"; 
$count = 0;

for ($i = 0; $i < strlen($text); $i++) {
    if (strtolower($text[$i]) == 'c') {
        $count++;
    }
}

echo $count;

echo"<br><br>";

?>



<?php 
echo"<br><br>";
echo"Q9: <br><br>";
echo '<table border="solid" cellpadding="3px" cellspacing="0px" >';

for($i=1;$i<7;$i++){

echo "<tr>";

for ($x=1;$x<6;$x++)
  {echo "<td >$i * $x = ".$i*$x."</td>";}

  echo "</tr>";
  }

  echo '</table>';

?>

<?php 

echo"<br><br>";
echo"Q10: <br><br>";
for ($i = 1; $i <= 50; $i++) {
  if ($i % 3 == 0 && $i % 5 == 0) {
      echo "FizzBuzz ";
  } elseif ($i % 3 == 0) {
      echo "Fizz ";
  } elseif ($i % 5 == 0) {
      echo "Buzz ";
  } else {
      echo $i . " ";
  }
}


echo"<br><br>";
echo"Q11: <br><br>";
$sum=0;
for($i=0; $i<5; $i++)
{
for($x=0; $x<=$i; $x++)
{
$sum++; 
echo  $sum." ";
}
echo '<br>';
}
echo"<br><br>";
echo"Q12: <br><br>";
$letters = range('A', 'E'); 
$maxRows = 5; 

echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A&nbsp;A <br>";
for ($i = 2; $i <= $maxRows; $i++) {

    for ($j = $maxRows - $i; $j > 0; $j--) {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;"; 
    }

    for ($j = 0; $j < $i; $j++) {
        echo $letters[$j] . "&nbsp;&nbsp;&nbsp;&nbsp;"; 
    }
    echo "<br>";
}

for ($i = $maxRows - 1; $i > 1; $i--) {

    for ($j = $maxRows - $i; $j > 0; $j--) {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;"; 
    }

    for ($j = 0; $j < $i; $j++) {
        echo $letters[$j] . "&nbsp;&nbsp;&nbsp;&nbsp;"; 
    }
    echo "<br>";
}

?>

<?php
echo "<br><br>";
echo"Q1: <br><br>";
function isPrime($number) {
    if ($number <= 1) {
        return "$number is not a prime number";
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return "$number is not a prime number";
        }
    }
    return "$number is a prime number";
}

$number = 3;
echo isPrime($number);

echo "<br><br>";
echo"Q2: <br><br>";

function reveseString($str){
  return strrev($str);
}
$input = "remove";
echo reveseString($input);

echo "<br><br>";
echo"Q3: <br><br>";
function isAllLowerCase($str){
  if(ctype_lower($str)){
    return "Your String is Ok";
  }else{
    return "Your String is not Ok";
  }
}
$input = "remove";
echo isAllLowerCase($input);

echo "<br><br>";
echo"Q4: <br><br>";
function swap(&$x,&$y){
  $temp = $x;
  $x = $y;
  $y = $temp;
}
$x = 12;
$y=10;
swap($x,$y); 
echo"x=$x y=$y";
echo "<br><br>";
echo"Q5: <br><br>";
function swap2(&$x,&$y){
  $temp = $x;
  $x = $y;
  $y = $temp;
}
$x = 12;
$y=10;
swap2($x,$y); 
echo"x=$x y=$y";
echo "<br><br>";
echo"Q6: <br><br>";

function isArmstrong($number) {
  $sum = 0;
  $temp = $number;
  $numDigits = strlen((string)$number);

  while ($temp != 0) {
      $remainder = $temp % 10;
      $sum += pow($remainder, $numDigits);
      $temp = (int)($temp / 10);
  }

  if ($sum == $number) {
      return "$number is Armstrong Number";
  } else {
      return "$number is not Armstrong Number";
  }
}


$number = 407;
echo isArmstrong($number);
echo "<br><br>";
echo"Q7: <br><br>";

function isPalindrome($str) {
  $cleanedStr = preg_replace('/[^A-Za-z0-9]/', '', strtolower($str));
  if ($cleanedStr == strrev($cleanedStr)) {
      return "Yes it is a palindrome";
  } else {
      return "No it is not a palindrome";
  }
}


$input = "Eva, can I see bees in a cave?";
echo isPalindrome($input); 

echo "<br><br>";
echo"Q8: <br><br>";

    $example = [1, 2, 5, 4, 4, 8];
    $hashMap = [];
    for ($i = 0 ; $i < count($example) ; $i++) {
        if (!in_array($example[$i], $hashMap)) {
            $hashMap[] = $example[$i];
        }
    }
    echo "$"."array1 = ". "(" . implode(", ", $hashMap) . ");" ;
?>