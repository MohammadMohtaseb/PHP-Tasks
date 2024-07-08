<?php 
  echo "Q1: <br> <br>";

  $UpperCase = "orange coding academy <br>";
  $LowerCase = "ORANGE CODING ACADEMY <br>";

  echo"a. ". strtoupper($UpperCase);
  echo "b. ". strtolower($LowerCase);
  echo "c. ". ucfirst($UpperCase);
  echo "d. " . lcfirst($LowerCase);



  echo "<br> <br>";
  echo "Q2: <br> <br>";

  $Time = "085119";
  echo rtrim(chunk_split($Time,2,":"),":");

  echo  "<br> <br>";
  echo "Q3: <br> <br>";
  $Str = "I am a full stack developer at orange coding academy";
  if(strpos($Str,"orange")!==false){
    echo "Word Found!";
  } else {
    echo "Word Not Found!";
  }

  echo "<br> <br>";
  echo"Q4: <br> <br>";
  $file_name = "www.orange.com/index.php";
  echo basename($file_name);

  echo "<br> <br>";
  echo "Q5: <br> <br>";
  $email = "info@orange.com";
  echo(strstr($email,'@',true));
  echo '<br> <br>';

  echo'Q:6 <br> <br>';
  $email = 'info@orange.com';
  echo (substr($email,-3));
  echo '<br><br>';
  echo'Q7: <br> <br>';

  $password = "1234567890ABCDEFGHIJKLMNOPabcdesghijklmnop";
  echo substr(str_shuffle($password),0,42);
  echo "<br><br>";

  echo "Q8: <br><br>";

  $str1 = "That new traniee is so genius";
  $replace_str = "Our";

  $firstWord = strstr($str1," ",false);
  echo "<br>".$replace_str. $firstWord;
  echo "<br> <br>";
  echo "Q9: <br> <br>";
  $string1 = "dragonball";
  $string2 = "dragonboll";
  $position = strspn($string1 ^ $string2,"\0");
  printf('First difference at postion %d: "%s" vs "%s"', $position,$string1[$position],$string2[$position]);
  echo '<br> <br>';
  echo'Q10: <br> <br>';

  $string3 = 'Twinkle twinkle, little star.';
  $Array = explode(' ',$string3);
  echo var_dump($Array);
  echo '<br> <br>';
  echo 'Q11: <br><br>';
  $char = 'A';
  echo ++$char;
  echo  '<br><br>';
  echo 'Q12: <br><br>';
  $fox = 'The brown fox';
  $addFox = 'quick ';
  $positionA = 4;
  echo 'a. '.substr_replace($fox, $addFox, $positionA,0);
  echo '<br>  b. '. strstr($fox," ",true);
  echo "<br> <br>";
  echo "Q13: <br><br>";
  $number = 0000657022.24;
  echo str_replace(0,"",$number);

  echo '<br> <br>';
  echo 'Q14: <br> <br>';
  $fox2 = 'The quick brown fox jumps over the lazy dog';
  $strRemove = 'fox';
  echo str_replace($strRemove, "",$fox2);

  echo '<br><br>';
  echo "Q15: <br><br>";
  $strfox3 = 'The quick brown fox jumps----over the lazy dog---';
  echo str_replace('-','',$strfox3);
  echo '<br>'. trim ($strfox3,'-');

  echo '<br><br>';
  echo 'Q16: <br> <br>';
  $strSpicail = '\"\1+2/3*2:2-3/4*3';
  echo preg_replace("/[^0-9]/",'0',$strSpicail);

  echo '<br><br>';
  echo 'Q17: <br><br>';
$stringFox4 = 'The quick brown fox jumps over the lazy dog';
$words = str_word_count($stringFox4, 1);

$newString='';
for ($i=0;$i<5;$i++){
    $newString=$newString. " ". $words[$i];
};
echo $newString;

echo '<br> <br>';
echo 'Q18: <br><br>';
$num2 = '2,543.12';
echo str_replace(",",'', $num2);

echo '<br> <br>';
echo 'Q19: <br><br>';

$char2='a';
$alpha = 'a';
for($i=0;$i<26;$i++){
  $alpha=$alpha .' '. ++$char2;
};
echo $alpha;


echo '<br> <br>';
echo 'Q1: <br><br>';

function leapYear($year){
  if((0== $year%4)){echo "$year : This year is a leap year <br><br>";}
  else{echo "$year : This year is not a leap year <br><br>";}
}
leapYear(1996);

echo '<br><br>';
echo 'Q2: <br><br>';
function checkSeason($temperature) {
  if ($temperature < 20) {
      return "It is wintertime!";
  } else {
      return "It is summertime!";
  }
}

echo checkSeason(27);

echo '<br> <br>';
echo 'Q3: <br><br>';
function sumOrTriple($firstInteger, $secondInteger) {
  if ($firstInteger == $secondInteger) {
      return ($firstInteger + $secondInteger) * 3;
  } else {
      return $firstInteger + $secondInteger;
  }
}

echo sumOrTriple(2, 2);

echo '<br> <br>';
echo 'Q4: <br><br>';
function checkSum($firstInteger, $secondInteger) {
  $sum = $firstInteger + $secondInteger;
  if ($sum == 30) {
      return $sum;
  } else {
      return false;
  }
}
echo checkSum(10, 10);
echo '<br> <br>';
echo 'Q5: <br><br>';
function isMultipleOfThree($number) {
  if ($number % 3 == 0) {
      return 'true';
  } else {
      return 'false';
  }
}
echo isMultipleOfThree(20);
echo '<br> <br>';
echo 'Q6: <br><br>';
function isInRange($number) {
  if ($number >= 20 && $number <= 50) {
      return 'true';
  } else {
      return 'false';
  }
}
echo isInRange(50);
echo '<br> <br>';
echo 'Q7: <br><br>';
function findLargest($a, $b, $c) {
  return max($a, $b, $c);
}
echo findLargest(1, 5, 9);
echo '<br> <br>';
echo 'Q8: <br><br>';
function calculateElectricityBill($units) {
  $bill = 0;
  if ($units <= 50) {
      $bill = $units * 2.50;
  } elseif ($units <= 150) {
      $bill = 50 * 2.50 + ($units - 50) * 5.00;
  } elseif ($units <= 250) {
      $bill = 50 * 2.50 + 100 * 5.00 + ($units - 150) * 6.20;
  } else {
      $bill = 50 * 2.50 + 100 * 5.00 + 100 * 6.20 + ($units - 250) * 7.50;
  }
  return $bill;
}
echo calculateElectricityBill(300);
echo '<br> <br>';
echo 'Q9: <br><br>';
function calculator($num1, $num2, $operation) {
  switch($operation) {
      case 'addition':
          return $num1 + $num2;
      case 'subtraction':
          return $num1 - $num2;
      case 'multiplication':
          return $num1 * $num2;
      case 'division':
          if ($num2 == 0) {
              return 'Division by zero error';
          } else {
              return $num1 / $num2;
          }
      default:
          return 'Invalid operation';
  }
}
echo calculator(10, 5, 'addition');
echo '<br> <br>';
echo 'Q10: <br><br>';
function isEligibleToVote($age) {
  if ($age >= 18) {
      return 'is eligible to vote';
  } else {
      return 'is no eligible to vote';
  }
}
echo isEligibleToVote(15);
echo '<br> <br>';
echo 'Q11: <br><br>';
function checkNumber($number) {
  if ($number > 0) {
      return 'Positive';
  } elseif ($number < 0) {
      return 'Negative';
  } else {
      return 'Zero';
  }
}
echo checkNumber(-60);
echo '<br> <br>';
echo 'Q12: <br><br>';
function calculateGrade($scores) {
  $average = array_sum($scores) / count($scores);

  if ($average >= 90) {
      return 'A';
  } elseif ($average >= 80) {
      return 'B';
  } elseif ($average >= 70) {
      return 'C';
  } elseif ($average >= 60) {
      return 'D';
  } else {
      return 'F';
  }
}
$scores = [60, 86, 95, 63, 55, 74, 79, 62, 50];
echo calculateGrade($scores);
?>