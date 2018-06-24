<?php
echo <<< ETO
******************************************************************************</br>
Reverse String using loop and Function</br>
******************************************************************************</br>
ETO;


$string = 'My name is praful mali';
$revers = '';
$revers_loop = '';
$revers_while = '';
//with Str Function
echo strrev($string);
//end of Str Function

echo "<br>";

// While Loop
$i = 0;
while (!empty($string[$i])) {
    $revers_while = $string[$i].$revers_while;
    $i++;
}
echo $revers_while; // ilam lufarp si eman yM
//End of While Loop

echo "<br>";

//For Loop
for ($i=strlen($string)-1; $i >= 0 ; $i--) {
    $revers_loop .=  $string[$i]; // ilam lufarp si eman yM
}
echo $revers_loop;
//End of For Loop


echo <<< ETO
</br></br></br>
*******************************************************************************</br>
Palidrome String Using Loop and Function </br>
*******************************************************************************</br>
ETO;
$string = 'NITIN';
$revers = '';

//Predefine function
 //$revers = strrev($string); // with function

//for Loop
for ($i=strlen($string)-1; $i >= 0 ; $i--) {
       $revers .= $string[$i];
}

//While loop
$i=0;
while (!empty($string[$i])) {
    $revers .= $string[$i];
    $i++;
}



if($revers == $string){
  echo "Palin Drome String";
}else{
  echo "Not Palin Drome String";
}


echo <<< ETO
</br></br></br>
*****************************************************************************</br>
First Word Capital String Using Loop and Function </br>
******************************************************************************</br>
ETO;

$str= 'my name is praful mali';

//With function
echo ucwords($str);

echo "<br";

// For Loop
$str_arr = explode(' ', $str);
foreach($str_arr as $row)
{
  $first_char = strtoupper(substr($row,0,1));
  echo $first_char.substr($row,1).'&nbsp';
}



echo <<< ETO
</br></br></br>
*****************************************************************************</br>
Word Reverse in String Using Loop and Function </br>
******************************************************************************</br>
ETO;

$str = 'this is my first intervie in banglaore';
$str_arr = explode(' ' , $str);
$final_reveres = '';
foreach ($str_arr as $row) {
  $i= 0;
  $revers= '';
  while(!empty($row[$i])){
      $revers = $row[$i].$revers;
      $i++;
  }
   $final_reveres .=$revers .' ';
}

echo "<br>";
echo $final_reveres;

// with function
$function_with_revers = '';
foreach ($str_arr as $row) {
  $function_with_revers .= strrev($row).' ';
}

echo "<br>";
echo $function_with_revers;


echo <<< ETO
</br></br></br>
*****************************************************************************</br>
program to tOGGLE each word in string Using Loop and Function </br>
******************************************************************************</br>
ETO;

$str = 'this is my first intervie in banglaore';
$str_arr = explode(' ' , $str);
$final_str = '';
foreach ($str_arr as $row) {
    $str_frist = substr($row, 0 , 1);
    $str_secode = substr($row,1);
    $final_str .= strtolower($str_frist).strtoupper($str_secode).' ';
}
echo $final_str;//tHIS iS mY fIRST iNTERVIE iN bANGLAORE



echo <<< ETO
</br></br></br>
*****************************************************************************</br>
program to tOGGLE each word Revers in string Using Loop and Function </br>
******************************************************************************</br>
ETO;


$str = 'this is my first intervie in banglaore';
$str_arr = explode(' ' , $str);
$final_reveres = '';
foreach ($str_arr as $row) {
  $i= 0;
  $revers= '';
  while(!empty($row[$i])){
      $revers = $row[$i].$revers;
      $i++;
  }
  $str_frist = substr($revers, 0 , 1);
  $str_secode = substr($revers,1);
  $final_str = strtolower($str_frist).strtoupper($str_secode).' ';
  $final_reveres .=$final_str .' ';
}
echo $final_reveres;//sIHT sI yM tSRIF eIVRETNI nI eROALGNAB


echo <<< ETO
</br></br></br>
*****************************************************************************</br>
Program to check whether two Strings are anagram or not </br>
******************************************************************************</br>
ETO;
$str_1 = 'argentino';
$str_2 = 'ignorante';
if(count_chars($str_1,1) == count_chars($str_2,1)){
    echo  "This two strings are anagram";
}else{
  echo "This two strings are not anagram";
}


echo <<< ETO
</br></br></br>
*****************************************************************************</br>
Program to check Dublicate character count using function </br>
******************************************************************************</br>
ETO;
$str_1 = 'I love my Country';
$str_2 = 'I love india';
$dublicate = array_count_values(array_merge(str_split($str_1),str_split($str_2)));
print_r($dublicate);




echo <<< ETO
</br></br></br>
*****************************************************************************</br>
swap two string variables without using third or temp variable </br>
******************************************************************************</br>
ETO;


$one= 'love';
$two = 'I am ';

echo 'Befor One : ' . $one ."</br>";
echo 'Befor Two : ' . $two ."</br>";


$one = $one .' '. $two ;
$two = substr($one,0,strlen($two));
$one = substr($one,strlen($two));


echo 'After One : ' . $one ."</br>";
echo 'After Two : ' . $two ."</br>";



echo <<< ETO
</br></br></br>
*****************************************************************************</br>
Find duplicate words in a string </br>
******************************************************************************</br>
ETO;

error_reporting(0);
$str = "This is my first string And This is my first project in lallabi And string project";
$str = trim($str);
$str = ereg_replace('[[:space:]]+',' ',$str);

$str_array = explode(' ' , $str);
foreach ($str_array as $word) {
    $single_word[strtolower($word)]++;
}
foreach ($single_word as $key => $value) {

    if($value >= 2){
       $duplicat[$key]= $value;
    }
}
print_r($duplicat); //Array ( [this] => 2 [is] => 2 [my] => 2 [first] => 2 [string] => 2 [and] => 2 [project] => 2 )



echo <<< ETO
</br></br></br>
*****************************************************************************</br>
Find duplicate character in a string </br>
******************************************************************************</br>
ETO;
$str = "This is my first string And This is my first project in lallabi And string project";
$str = trim($str);

$str_array = str_split($str);
foreach ($str_array as $w) {
    $rep[strtolower($w)]++;
}
ksort($rep);
print_r($rep);
//Array ( [ ] => 15 [a] => 4 [b] => 1 [c] => 2 [d] => 2 [e] => 2 [f] => 2 [g] => 2 [h] => 2 [i] => 10 [j] => 2 [l] => 3 [m] => 2 [n] => 5 [o] => 2 [p] => 2 [r] => 6 [s] => 8 [t] => 8 [y] => 2 )


echo <<< ETO
</br></br></br>
*****************************************************************************</br>
Find duplicate character remove  in a string </br>
******************************************************************************</br>
ETO;
$str = 'Hello worrd';
$str = implode(' ' , str_split($str));
$str_array = explode(" " , $str);

$j = strtolower($str_array[0]);
$k = '';

for($i=1; $i<= count($str_array);$i++){

    if(strtolower($j) != strtolower($str_array[$i])){
        $k .= $j .' ';
    }
    $j = $str_array[$i];
}
echo $k; //  h e l o w o r d



echo <<< ETO
</br></br></br>
*****************************************************************************</br>
Find Occurrence character in a string </br>
******************************************************************************</br>
ETO;
$str = "Welcome to Php Development";
$find = 'P';
$count = 0 ;

for ($i=0; $i <= strlen($str) ; $i++) {
    if(strtolower(substr($str,$i,1)) == strtolower($find)){
        $count++;
    }
}
echo ' " '.$find . '" values Occurrance is '. $count. ' Times';
