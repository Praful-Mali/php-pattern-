<?php

print_r(explode('www', 'D:/Projects/job.com/www/www/path/source', 2));exit;
print_r(preg_split('/www/', 'D:/Projects/job.com/www/www/path/source', 2));exit;

$str = "without using Update query update recored in database";

echo substr($str,strpos($str,"using")+strlen('using'));
echo"<br><br>";


echo strstr($str,"update");
echo"<br><br>";

echo substr($str,10);
echo"<br><br>";

exit;


print_r(array_fill(5,6,'BMW'));

echo"<br><br>";exit;

$arr1 = array('jj'=>'1',5=>'2',6=>'3');
$arr2 = array('one','two','three');
print_r(array_reverse($arr1));exit;


$arr1 = array('1','2','3');
$arr2 = array('one','two','three');
print_r(array_merge($arr1,$arr2));exit;

$a[0] ="";
$a[1] ="22";
$a[2] ="33";
$a['fsdfdf'] ="22";
$a[5] ="99";

print_r(array_unique($a));

exit;

function test_odd($var)
{
return($var & 1);
}

$a1=array(2,3,4);
print_r(array_filter($a1,"test_odd"));

exit;
$arr1 = array('1','2','3');
$arr2 = array('one','two','three');
print_r(array_combine($arr1,$arr2));exit;
print_r(count_chars("anagram", 1));echo"<br>";
print_r(count_chars("nagaram", 1));exit;



function reverse_integer($n)
{
	echo "<br>";
    $reverse = 0;
    while ($n > 0)
      {
        print_r($reverse = $reverse * 10);echo" - ";
        print_r($reverse = $reverse + $n % 10);echo" - ";
        print_r($n = (int)($n/10));echo" - ";
		echo "<br>";
      }
     return $reverse;
}   
print_r(reverse_integer(1234)."\n");
//print_r(reverse_integer(23)."\n");


exit;




function add_digits($num)
{
      if ( $num > 0)
      {
      return ($num - 1) % 9 + 1;
      }
      else
      {
          return 0;
      }
}

print_r(add_digits(48)."\n");
print_r(add_digits(59)."\n");

exit;




function missing_number($num_list)
{
 // construct a new array
$new_arr = range(min($num_list),max($num_list));                                                    
// use array_diff to find the missing elements 
return array_diff($new_arr, $num_list);

}
print_r(missing_number(array(9,2,3,1,6,7,8)));
print_r(missing_number(array(10,11,12,14,15,16,17)));

exit;
$str = "without using Update query update recored in database";

echo substr($str,strpos($str,"using")+strlen('using'));
echo"<br><br>";


echo strstr($str,"update");
echo"<br><br>";

echo substr($str,10);
echo"<br><br>";

exit;

exit;






$a[0] ="";
$a[1] ="22";
$a[2] ="33";
$a['fsdfdf'] ="22";
$a[5] ="99";

print_r(array_change_key_case($a,CASE_UPPER));

echo"<br><br>";

print_r(array_count_values($a));

echo"<br><br>";


print_r(array_reverse($a));

echo"<br><br>";

print_r(array_rand($a));

echo"<br><br>";

print_r(array_fill(5,6,'BMW'));

echo"<br><br>";


$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
print_r(array_chunk($cars,2));

echo"<br><br>";

$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");

$c=array_combine($fname,$age);
print_r($c);


exit;



/*
$num = 10;
$n = $num;
for ($i=1; $i <= $num  ; $i++) {
    for ($j=$num-$i; $j >=1 ; $j--) {
      echo "&nbsp ";
    }

    for ($j=1; $j <= ($i*2)-1 ; $j++) {
      echo "* &nbsp";
    }
    echo " <br>";
}


          *
        * * *
      * * * * *
    * * * * * * *
  * * * * * * * * *

*/

/*

//Chasse Game Pattern

echo " <table style='border: 1px solid black'>";
for ($row=1; $row <= 8 ; $row++) {

  echo "<tr>";
  for ($col=1; $col <= 8 ; $col++) {
    $total=$row+$col;
      if($total  % 2 == 0){
        echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
      }else{
        echo "<td height=30px width=30px bgcolor=#000000></td>";
      }
  }
  echo "</tr>";
}
echo "</table>";


*/

/*
echo "<table border =\"1\" style='border-collapse: collapse'>";
for ($row=1; $row <= 10 ; $row++) {
    echo " <tr>";
    for ($col=1; $col <= 10 ; $col++) {
      $p = $row * $col;
      echo "<td>$row * $col =  $p</td>";
    }
    echo "</tr>";
}

echo "</table>";


1 * 1 = 1	1 * 2 = 2	1 * 3 = 3	1 * 4 = 4	1 * 5 = 5	1 * 6 = 6	1 * 7 = 7	1 * 8 = 8	1 * 9 = 9	1 * 10 = 10
2 * 1 = 2	2 * 2 = 4	2 * 3 = 6	2 * 4 = 8	2 * 5 = 10	2 * 6 = 12	2 * 7 = 14	2 * 8 = 16	2 * 9 = 18	2 * 10 = 20
3 * 1 = 3	3 * 2 = 6	3 * 3 = 9	3 * 4 = 12	3 * 5 = 15	3 * 6 = 18	3 * 7 = 21	3 * 8 = 24	3 * 9 = 27	3 * 10 = 30
4 * 1 = 4	4 * 2 = 8	4 * 3 = 12	4 * 4 = 16	4 * 5 = 20	4 * 6 = 24	4 * 7 = 28	4 * 8 = 32	4 * 9 = 36	4 * 10 = 40
5 * 1 = 5	5 * 2 = 10	5 * 3 = 15	5 * 4 = 20	5 * 5 = 25	5 * 6 = 30	5 * 7 = 35	5 * 8 = 40	5 * 9 = 45	5 * 10 = 50
6 * 1 = 6	6 * 2 = 12	6 * 3 = 18	6 * 4 = 24	6 * 5 = 30	6 * 6 = 36	6 * 7 = 42	6 * 8 = 48	6 * 9 = 54	6 * 10 = 60
7 * 1 = 7	7 * 2 = 14	7 * 3 = 21	7 * 4 = 28	7 * 5 = 35	7 * 6 = 42	7 * 7 = 49	7 * 8 = 56	7 * 9 = 63	7 * 10 = 70
8 * 1 = 8	8 * 2 = 16	8 * 3 = 24	8 * 4 = 32	8 * 5 = 40	8 * 6 = 48	8 * 7 = 56	8 * 8 = 64	8 * 9 = 72	8 * 10 = 80
9 * 1 = 9	9 * 2 = 18	9 * 3 = 27	9 * 4 = 36	9 * 5 = 45	9 * 6 = 54	9 * 7 = 63	9 * 8 = 72	9 * 9 = 81	9 * 10 = 90
10 * 1 = 10	10 * 2 = 20	10 * 3 = 30	10 * 4 = 40	10 * 5 = 50	10 * 6 = 60	10 * 7 = 70	10 * 8 = 80	10 * 9 = 90	10 * 10 = 100



*/
/*
Table For Digit 1*1 =2
echo "<table border =\"1\" style='border-collapse: collapse'>";
for ($row=1; $row <= 10 ; $row++) {
    echo " <tr>";
    for ($col=1; $col <= 10 ; $col++) {
      $p = $row * $col;
      echo "<td>$p</td>";
    }
    echo "</tr>";
}

echo "</table>";


1	2	3	4	5	6	7	8	9	10
2	4	6	8	10	12	14	16	18	20
3	6	9	12	15	18	21	24	27	30
4	8	12	16	20	24	28	32	36	40
5	10	15	20	25	30	35	40	45	50
6	12	18	24	30	36	42	48	54	60
7	14	21	28	35	42	49	56	63	70
8	16	24	32	40	48	56	64	72	80
9	18	27	36	45	54	63	72	81	90
10	20	30	40	50	60	70	80	90	100

*/


/*
$num = 5;
$n= $num;

for ($i=0; $i <= $num ; $i++) {

    for ($j=0; $j <= $n ; $j++) {
          echo "&nbsp &nbsp";
    }
    $n--;
    for ($p=1; $p <= $i ; $p++) {
        echo "$i &nbsp";
    }
    echo " <br>";
}

for ($k=$num-1; $k >=1 ; $k--) {

    for ($l=0; $l <= $num-$k ; $l++) {
          echo "&nbsp &nbsp";
    }
    for ($m=$k; $m >= 1 ; $m--) {
        echo "$k &nbsp";
    }
    echo " <br>";
}




                1
              2   2
            3   3   3
          4   4   4   4
        5   5   5   5   5
      6   6   6   6   6   6
    7   7   7   7   7   7   7
  8   8   8   8   8   8   8   8
9   9   9   9   9   9   9   9   9
  8   8   8   8   8   8   8   8
    7   7   7   7   7   7   7
      6   6   6   6   6   6
        5   5   5   5   5
          4   4   4   4
            3   3   3
              2   2
                1
*/

/*

$num = 9;
$n = $num;

for ($i=$num; $i >= 1; $i--) {

    for ($k=$i; $k >= 1  ; $k--) {
        echo "$i &nbsp";
    }

    echo " <br>";

}



9   9   9   9   9   9   9   9   9
  8   8   8   8   8   8   8   8
    7   7   7   7   7   7   7
      6   6   6   6   6   6
        5   5   5   5   5
          4   4   4   4
            3   3   3
              2   2
                1
*/

/*
$num = 5;
$k = 1;
for ($i=0; $i <= $num ; $i++) {
  for ($j=1; $j <=$i ; $j++) {
      echo "$k &nbsp";
      $k++;
  }
  echo " <br>";
}




1
2  3
4  5  6
7  8  9 10
11 12 13 14 15


*/
/*
$num = 5;
for ($i=1; $i <= $num ; $i++) {
    for ($j=0; $j <=$num-$i  ; $j++) {
        echo "$num &nbsp";
    }
    echo "<br>";
}
for ($k=1; $k <= $num ; $k++) {
  for ($l=1; $l <= $k ; $l++) {
      echo "$num &nbsp";
  }
  echo "<br>";
}




5 5 5 5 5
5 5 5 5
5 5 5
5 5
5
5
5 5
5 5 5
5 5 5 5
5 5 5 5 5


*/
/*
$num = 5 ;
$n = $num;
for($i=1 ; $i <= $num ; $i++ ){

    for ($j=1; $j<=$n-1 ; $j++) {
        echo "&nbsp&nbsp";
    }
    $n--;
    for ($p=1; $p <= $i ; $p++) {
        echo $p.'&nbsp&nbsp';
    }
    echo "<br>";
}

        1
      2   2
    3   3   3
  4   4   4   4
5   5   5   5   5





$num = 6;

for($i=0; $i<=$num;$i++){
    for ($j=1; $j <=$num-$i ; $j++) {
        echo "* &nbsp";
    }
	for(){
		
	}
    echo "<br>";
}

/*
1 2 3 4 5 6
1 2 3 4 5
1 2 3 4
1 2 3
1 2
1

*/

/*

$num = 6;
for($i=1; $i <= $num ;$i++){
  for ($j=1; $j <=$i ; $j++) {
      echo "$j &nbsp";
  }
  echo "<br>";
}


1
1 2
1 2 3
1 2 3 4
1 2 3 4 5
1 2 3 4 5 6
*/
