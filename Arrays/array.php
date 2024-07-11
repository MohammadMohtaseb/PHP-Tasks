<?php
echo"Q1: <br><br>";
$color = array('red', 'green', 'white'); 
function ChangeColor($array){
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $array[0] carpet, the $array[1] lawn, the $array[2] house, the leaden sky.
 The new president and his first lady. - Richard M. Nixon"."<br><br>";
}
ChangeColor($color);
echo"<br><br>";
echo"Q2: <br><br>";
function colorSort($Array){
  $color = array('green', 'red', 'white');
  echo "<ul>";
  for($i=0; $i<count($color); $i++){
  echo "<li>$color[$i]</li>";
  }
  echo "</ul>";
 }colorSort($color);

 echo"<br><br>";
echo"Q3: <br><br>";
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
  "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
   "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

   
   foreach($cities as $contry => $contry_value) {
    echo "The capital of $contry is $contry_value  ";
    echo '<br>';
  }
  echo"<br><br>";
  echo"Q4: <br><br>";
  $color = array (4 => 'white', 6 => 'green', 11=> 'red');
  echo reset($color);

  echo"<br><br>";
  echo"Q5: <br><br>";
  $nArray=array();
function Add($nArray,$addValue,$Location){
  array_splice( $nArray, $Location-1, 0, $addValue );
  print_r ($nArray); 
  echo '<br>'; 
  for($i=0; $i<count($nArray); $i++){
  echo $nArray[$i]. " ";}

};
  Add([1,2,3,4,5],"$",4);

  echo"<br><br>";
  echo"Q6: <br><br>";
  $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
  asort($fruits);
  foreach($fruits as $i => $i_value) {
  echo  $i . " = " . $i_value;
  echo "<br>";}

  echo"<br><br>";
  echo"Q7: <br><br>";
        function AvrTemp($Temp){

          $ave=array_sum($Temp)/count($Temp);
          echo "Average Temperature is : $ave <br>";
          $newArray=array_unique($Temp);
          sort($newArray);

          echo  "List of Five lowest temperatures : " ;
          for($i=0; $i<5; $i++) {
              echo $newArray[$i]. ' ';
              }echo "<br>";
          echo  "List of Five highest temperatures : ";
          for($i=count($newArray)-1; $i>(count($newArray)-6); $i--){
              echo $newArray[$i]. ' ';
            
          }echo "<br>";
      }
      AvrTemp([78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73]);

  echo"<br><br>";
  echo"Q8: <br><br>";
  function Mearg($array1,$array2){
    $MeargdArray = array_merge($array1, $array2);
    print_r($MeargdArray);

}
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
Mearg($array1,$array2);

  echo"<br><br>";
  echo"Q9: <br><br>";
      function upper($array){
        $newArray =[];
    for($i=0; $i<count($array); $i++){
        array_push($newArray,strtoupper($array[$i]));
    }
    print_r($newArray);
    }
    upper(["red","blue","white","yellow"]);
    echo"<br><br>";
    echo"Q10: <br><br>";
    function lower($array){
      $newArray =[];
  for($i=0; $i<count($array); $i++){
      array_push($newArray,strtolower($array[$i]));
  }
  print_r($newArray);
  }
  lower(["RED","BLUE", "WHITE","YELLOW"]);

  echo"<br><br>";
  echo"Q11: <br><br>";
  echo implode(",",range(200,250,4)) ;


  echo"<br><br>";
  echo"Q12: <br><br>";

    $words =  array("abcd","abc","de","hjjj","g","wer");
  $StrLengthArray = array_map('strlen',$words);
  echo "The shortest array length is : " . min($StrLengthArray);
  echo " The longest array length is : " . max($StrLengthArray);

  echo"<br><br>";
  echo"Q13: <br><br>";
  function unique($n1,$n2){
    $randomNum=range($n1,$n2);    
    shuffle($randomNum);
    for ($i=0; $i< 10; $i++)
    {
    echo $randomNum[$i]. ' ';
    }}
    unique(11,20);
    echo"<br><br>";
    echo"Q14: <br><br>";
    function lowestInteger ($Array){
      sort($Array);
      if($Array[0]==0){
          echo "The lowest number in the matrix other than the zero is : ( $Array[1] ) ";
      }else{
          echo "The lowest number in the array is : ( $Array[0] )<br><br>  ";
      }
  
  }
  lowestInteger([2, 0, 10, 12, 6]);

    echo"<br><br>";
    echo"Q15: <br><br>";
    function bubbleSortDescending(&$array) {
      $n = count($array);
      for ($i = 0; $i < $n; $i++) {
          for ($j = 0; $j < $n - 1 - $i; $j++) {
              if ($array[$j] < $array[$j + 1]) {
                  
                  $temp = $array[$j];
                  $array[$j] = $array[$j + 1];
                  $array[$j + 1] = $temp;
              }
          }
      }
  }
  
  $inputArray = [5, 3, 1, 3, 8, 7, 4, 1, 1, 3];
  bubbleSortDescending($inputArray);
  print_r($inputArray);

    echo"<br><br>";
    echo"Q16: <br><br>";

    function floorWithPrecision($number, $precision, $separator) {
      $factor = pow(10, $precision);
      $flooredNumber = floor($number * $factor) / $factor;
      return number_format($flooredNumber, $precision, $separator, '');
  }
  echo floorWithPrecision(1.155, 2, '.') . "<br>"; 
  echo floorWithPrecision(100.25781, 4, '.') . "<br>";
  echo floorWithPrecision(-2.9636, 3, '.') . " <br>";

  echo"<br><br>";
  echo"Q17: <br><br>";
    function mergeUniqueLists($list1, $list2) {
      $array1 = explode(',', $list1);
      $array2 = explode(',', $list2);
      $mergedArray = array_unique(array_merge($array1, $array2));
      return implode(', ', $mergedArray);
  }
  $list1 = "4, 5, 6, 7";
  $list2 = "4, 5, 7, 8";
  echo mergeUniqueLists($list1, $list2);

  echo"<br><br>";
  echo"Q18: <br><br>";

    function removeDuplicates($array) {
      return array_values(array_unique($array));
  }


  $inputArray = [4, 5, 6, 7, 4, 7, 8];
  $outputArray = removeDuplicates($inputArray);
  print_r($outputArray);

  echo"<br><br>";
  echo"Q19: <br><br>";
  function isSubset($array1, $array2) {
    return empty(array_diff($array2, $array1));
}
$array1 = ['a', '1', '2', '3', '4'];
$array2 = ['a', '3'];

if (isSubset($array1, $array2)) {
    echo "array2 is a subset array from array1 <br>";
} else {
    echo "array2 is not a subset array from array1 <br>";
}







?>