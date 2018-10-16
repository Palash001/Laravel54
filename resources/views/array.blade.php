<html>

<body>

<?php

echo "<h3> Array BAsic </h3> "; 

$a = array("DOG","cat","horse");

print_r($a);

?>
<br/>

<br/>

<?php  

echo "<h3> Array Change Key Case </h3> "; 

$a = array("a"=>"Apple","b"=>"ball","c"=>"cat");

print_r(array_change_key_case($a,CASE_UPPER));

?>

<br/>

<br/>

<?php

echo "<h3> Array Chhunk</h3> "; 

$a = array("A"=>"APPle","B"=>"Ball","C"=>"CAT","D"=>"DOG");

print_r(array_chunk($a,3));

?>

<br/>

<br/>

<?php

echo "<h3> Array Combine </h3> "; 

$a = array("A","B","C","D");

$b = array("E","F","G","H");

print_r(array_combine($a,$b));

?>

<br/>

<br/>


<?php

echo "<h3> Array Count Valuse </h3> "; 

$a = array("APPLE","BALL","CAT","Ant","APPLE","Ant");

print_r(array_count_values($a));


?>

<br/>

<br/>

<?php

echo "<h3> Array Difference </h3> "; 

$a1 = array("a"=>"red","b"=>"blue","c"=>"cyan","d"=>"green");

$b1 = array("e"=>"red","f"=>"blue","g"=>"cyan");

print_r(array_diff($a1,$b1));

?>

<br/>

<br/>

<?php

echo "<h3> Array Diff Association </h3> "; 

$a1 = array(0=>"Apollo",1=>"Mars",2=>"Catte","3"=>"Drew");

$b1 = array(4=>"Apollo",5=>"Mars",6=>"BLue",7=>"Yellow");

$c1 = array(8=>"Apollo",9=>"Mars",10=>"Blue");

print_r(array_diff_assoc($a1,$b1,$c1));

?>

<br/>

<br/>

<?php

echo "<h3> Array Diff KEy </h3> "; 

$a1 = array("a"=>"apple","b"=>"ball","c"=>"cat");

$b1 = array("a"=>"apple","b"=>"ball","c"=>"cyan","d"=>"dog");

print_r(array_diff_key($a1,$b1));

?>

<br/>

<br/>

<?php


function myFunction($a,$b)

{

	if($a===$b)
	
	{
	
		return 0;
		
	}
	
	return $a>$b ? 1: -1;
	
}

$a1 =array("a"=>"red","b"=>"ball","c"=>"cat");

$a2 = array("d"=>"purple","a"=>"red","b"=>"ball");

$a3 = array("e"=>"eagle","a"=>"red","b"=>"ball");

print_r(array_diff_uassoc($a1,$a2,$a3,"myFunction"));

?>


<br/>

<br/>

<?php

function myFunc($a,$b)

{

	if($a===$b)
	
	{
	
		return 0;
		
	}
	
	return ($a > $b) ? 1 :-1;
	
}

$a1 = array("a"=>"apple","b"=>"ball","c"=>"cyan");

$b1 = array("d"=>"purple","e"=>"eagle","f"=>"fork");

$c1 = array("g"=>"green","h"=>"horse","i"=>"indigo");

print_r(array_diff_ukey($a1,$b1,$c1,"myFunc"));

?>

<br/>

<br/>

<?php

echo "<h3> Array Fill </h3> "; 

$a = array_fill(2,3,"DOF");

$b = array_fill(0,4,"red");

print_r($a);

echo "<br>";

print_r($b);

?>


<br/>

<br/>

<?php



echo "<h3> Array Fill Keys </h3>";

$keys = array("a","b","c");

$a1 = array_fill_keys($keys,"red");

print_r($a1);

?>

<br/>

<br/>

<?php

echo "<h3> Array Filter </h3> "; 

function myF($v)

{

	if($v==="DOg")
	
	{
	
		return true;
		
	}
	
	return false;
	
}

$a = array(0=>"Tiger",1=>"DOg","2"=>"Horse");

print_r(array_filter($a,"myF"));

?>

<br/>

<br/>

<?php

echo "<h3> Array Filter</h3> "; 

function mF($v)

{

	return ($v & 1);
	
}

$a1 = array(2,3,7);

print_r(array_filter($a1,"mF"));

?>

<br/>

<br/>

<?php

echo "<h3> Array Flip </h3> "; 

$a = array("a"=>"Ant","b"=>"Bat","c"=>"Cattle");

print_r(array_flip($a));

?>

<br/>

<br/>

<?php

echo "<h3> Array Intersect </h3> "; 

$a1 = array("a"=>"ant","b"=>"ball","c"=>"cat");

$a2 = array ("a"=>"apple","b"=>"ball","c"=>"cat");

print_r(array_intersect($a1,$a2));

?>

<br/>

<br/>

<?php

echo "<h3> Array Intersect Assoc </h3> "; 

$a1 = array("a"=>"apple","b"=>"bat","c"=>"cat");

$a2 = array("a"=>"ap","b"=>"bat","c"=>"cattle");

print_r(array_intersect_assoc($a1,$a2));

?>

<br/>

<br/>

<?php

echo "<h3> Array Intersect Key </h3> "; 

$a1 = array("a"=>"Alu","b"=>"bed","c"=>"car");

$a2 = array("a"=>"aoi","b"=>"bar","c"=>"cage");

$a3 = array("a"=>"ajo","b"=>"bft","c"=>"cah");

print_r(array_intersect_key($a1,$a2,$a3));

?>

<br/>

<br/>

<?php

echo "<h3> Array Intersect  UAssociation </h3> "; 

function mR($a,$b)

{

	if($a===$b)
	
	{
	
		return 0;
		
	}
	
	else
	
	{
	
	
	return ($a>$b)? 1: -1;
	
	
	}
	
	
}



$a1 = array("a"=>"api","b"=>"bag","c"=>"cafe");

$a2 = array("a"=>"aui","b"=>"vast","c"=>"cafe");

print_r(array_intersect_uassoc($a1,$a2,"mR"));

?>

<br/>

<br/>

<?php

echo "<h3> Array Intersect UKey </h3> "; 


function mT($a,$b)

{

	if($a===$b)
	
	{
	
		return 0;
		
	}
	
	
	
	return ($a>$b)? 1 :-1;
	
}

$a1 = array("a"=>"ass","b"=>"bar","c"=>"cab");

$a2 = array("a"=>"almond","b"=>"bahf","c"=>"af");

print_r(array_intersect_ukey($a1,$a2,"mT"));


?>

<br/>

<br/>

<?php

echo "<h3> Array  Key Exists</h3> "; 

$a = array("Volvo"=>"MC3","BMW"=>"MX2");

if(array_key_exists("Volvo",$a))

{

	echo "Key exists";
	
}

else

{

	echo "Key does not exist";
	
}

?>


<br/>

<br/>

<?php

echo "<h2> Array Keys </h2>";

$a1 = array(0=>10,1=>30,2=>40,3=>"10");

print_r(array_keys($a1,40));

?>

<br/>

<br/>

<?php

echo "<h2> Array Keys </h2>";

$a1 = array(0=>50,1=>80,2=>90,3=>"100");

print_r(array_keys($a1,"100",false));

?>

<br/>

<br/>

<?php

echo "<h2> Array Map </h2>";

function aMap($num)

{

	return ($num * $num);
	
}

$a = array(0=>1,1=>10,2=>20);

print_r(array_map("aMap",$a));

?>

<br/>

<br/>

<?php

echo "<h3> Array Map Second type </h3>";

function aUser($v)

{

	if($v==="Cat")
	
	{
	
		return "Fido";
		
	}
	
	return $v;
	
}

$b = array(0=>"Apis",1=>"Cat",2=>"fat");

print_r(array_map("aUser",$b));

?>


<br/>

<br/>

<?php

 echo "<h3> Array Map third type </h3>";

function fu($v1,$v2)

{

	if($v1===$v2)
	
	{
	
		return "same";
		
	}
	
	return "different";
	
	
}

$a1 = array(0=>"Ant",1=>"Twin",2=>"Leo");

$a2 = array(0=>"Apple",1=>"Twin",2=>"Leoperd");

print_r(array_map("fu",$a1,$a2));

?>

<br/>

<br/>

<?php

 echo "<h3> Array Map Fourth type</h3>";

function uPc($v)

{

	$v = strtoupper($v);
	
	return $v;
	
}

$a1 = array("Animal"=>"Crocodile","Type"=>"Vertebrate");

print_r(array_map("uPc",$a1));

?>

<br/>

<br/>

<?php

echo "<h3> Array Map Fifth type</h3>";

$a1  = array("Apes","Tiger","Cat");

$a2 = array("Rat","Bat","Eagle");

print_r(array_map(null,$a1,$a2));

?>

<br/>
<br/>


<?php

echo "<h3> Array Merge </h3>";

$a1 = array(0=>"Won",1=>"Wol",2=>"Woi");

$a2 = array(3=>"Foq",4=>"Foh",5=>"Fob");

print_r(array_merge($a1,$a2));

?>
<br/><br>

<?php

echo "<h3> Arra Merge Recursive </h3>";

$b1 = array(0=>"Ver",1=>"Vet",2=>"Vel");

$b2 = array(3=>"Ste",4=>"Stg",5=>"kol");

print_r(array_merge_recursive($b1,$b2));

?>
<br/> <br/>

<?php

echo "<h3> Array MultiSort </h3>";

$t1 = array("Cat","Tiger","Zebra");

$t2 = array("Frog","Girraf","Rhino");

array_multisort($t1,$t2);

print_r($t1);

print_r($t2);

?>

<br/>

<br/>

<?php

echo "<h3> Array Sorting With Parameter </h3>";

$p1 = array("Pog","Qlk","Bnm");

$p2 = array("Bpr","Hpe","Cgfj");

array_multisort($p1,SORT_ASC,$p2,SORT_DESC);

print_r($p1);

print_r($p2);

?>

<br/>

<br/>

<?php

echo "<h3> Array ,Sorting Order, Sorting Type ,Array Two, Array Three </h3>";

$d1 = array(23,50,199);

$d2 = array(40,70,80);

$num = array_merge($d1,$d2);

array_multisort($num,SORT_DESC,SORT_NUMERIC);

print_r($num);

?>

<br/>

<br/>

<?php

echo "<h3> Array Pad </h3>";

$k = array("Green","Yellow");

print_r(array_pad($k,5,"Red"));

?>

<br/>

<br/>

<?php

echo "<h3> Array Pad Second Type</h3>";

$k1 = array("magento","cyan");

print_r(array_pad($k1,-3,"Yellow"));

?>

<br/>

<br/>

<?php

echo "<h3> Array Pop Function </h3>";

$r1 = array(0=>"red",1=>"Yellow",2=>"Green");

array_pop($r1);

print_r($r1);

?>

<br/>

<br/>

<?php

echo "<h3> Array Product Function </h3>";

$r2 = array(13,50,56);

array_product($r2);

print_r($r2);

?>

<br/>

<br/>

<?php

echo "<h3> Array Push </h3>";

$y1 = array("red","yellow");

array_push($y1,"blue","black");

print_r($y1);

?>

<br/>

<br/>

<?php

echo "<h3> Array Random Key </h3>";

$b1 = array("red","green","fog","black");

$random_keys  = array_rand($b1,3);

echo $b1[$random_keys[0]] . "<br>";

echo $b1[$random_keys[1]]. "<br>";

echo $b1[$random_keys[2]];

?>


<br/>

<br/>

<?php

echo "<h3> Array Random Function 2nd Type</h3>";

$b2 = array("a"=>"pol","b"=>"rth","c"=>"sds");

print_r(array_rand($b2,2));

?>

<br/>

<br/>

<?php

echo "<h3> Array Reduce Fucntion </h3>";

function mFu($v1,$v2)

{

	return $v1. "-" .$v2;
	
}

$r = array("Dog","Cat","Horse");

print_r(array_reduce($r,"mFu",5));

?>

<br/>

<br/>



<?php

echo "<h3> Array Reduce Function Second Type </h3>";

function mFone($v1,$v2)

{

	return $v1+$v2;
	
}

$l = array(10,30,40);

print_r(array_reduce($l,"mFone"));

?>

<br/>

<br/>

<?php

echo "<h3> Array Replace </h3>";

$a1 = array("apple","orange","cat");

$a2 = array("donkey","tiger");

print_r(array_replace($a1,$a2));

?>
<br/>

<br/>

<?php

echo "<h3> Array Replace Second Type </h3>";

$a1 = array("a"=>"ant","b"=>"bat","Iron");

$a2 = array("a"=>"andrew","vold","c"=>"cattle");

print_r(array_replace($a1,$a2));

?>

<br/>

<br/>

<?php

echo "<h3> Array Replace Third Type </h3>";

$r1 = array("a"=>"red","green");

$r2 = array("a"=>"black","b"=>"bold");

print_r(array_replace($r1,$r2));

?>

<br/>

<br/>

<?php

echo "<h3> Array Replace Fourth Type </h3>";

$t1 = array("red","green");

$t2 = array("orange","black");

$t3 = array("cyan","yellow");

print_r(array_replace($t1,$t2,$t3));

?>

<br/>

<br/>

<?php

echo "<h3> Array Replace Fifth Type </h3>";

$e1 = array("red","violet","yellow","black");

$e2 = array(0=>"orange",3=>"cyan");

print_r(array_replace($e1,$e2));

?>

<br/>

<br/>

<?php

echo "<h3> Array Replace Recursive </h3>";

$y1 = array("a"=>array("yellow"),"b"=>array("black","cat"),);

$y2 = array("a"=>array("orange"),"b"=>array("panther"),);

print_r(array_replace_recursive($y1,$y2));

?>

<br/>

<br/>

<?php

echo "<h3> Array Replace Recursive Multiple Array </h3>";

$s1 = array("a"=>array("red"),"b"=>array("yellow","black"),);

$s2 = array("a"=>array("green"),"b"=>array("cyan"),);

$s3 = array("a"=>array("magento"),"b"=>array("white"),);

print_r(array_replace_recursive($s1,$s2,$s3));

?>

<br/>

<br/>

<?php

echo "<h3> Array Replace Recursive Diff betwwen replcae and Replace Recursive</h3>";

$i1 = array("a"=>array("green"),"b"=>array("black","cyan"),);

$i2 = array ("a"=>array("black"),"b"=>array("yellow"),);

$result1 = array_replace($i1,$i2);

print_r($result1);

echo "<br/>";

$result2 = array_replace($i1,$i2);

print_r($result2);

?> 

<br/>

<br/>

<?php

echo "<h3> Array Reversed and Preserved Array </h3>";

$w1 = array("Volvo","Xc12","34rt",array("Boy","Git","Lab"));

$reverse = array_reverse($w1);

$Preserve = array_reverse($w1,true);

print_r($w1);

echo "<br/>";

echo "<br/>";

print_r($reverse);

echo "<br/>";

echo "<br/>";

print_r($Preserve);

?>

<br/>

<br/>

<?php

echo "<h3> Array Search Function </h3>";

$p1 = array(0=>"Apple",1=>"Orange",2=>"Mango");

print_r(array_search("Orange",$p1,true));

?>

<br/>

<br/>

<?php

echo "<h3> Array Shift Method </h3>";

$p2 = array(0=>"Ant", 1=>"Papaya", 2=>"Orange");

echo array_shift($p2). "<br/>";

print_r($p2);

?>

<br/>

<br/>

<?php

echo "<h3> Array Slice Function </h3>";

$r1 = array("red","green","blue","black");

print_r(array_slice($r1,1,3));

?>

<br/>

<br/>

<?php

echo "<h3> Array SLice Second Type Function -2 means cat is -1 and black is -2</h3>";

$t1 = array("red","blue","black","cat");

print_r(array_slice($t1,-3,2));

?>

<br/>

<br/>

<?php

echo "<h3> Array Preserve Parameter Set true </h3>";

$f1= array("cyan","black","cat","tiger");

print_r(array_slice($f1,1,2,true));

echo "<br/>";

$f1= array("cyan","black","cat","tiger");

print_r(array_slice($f1,1,2,false));

?>

<br/>

<br/>

<?php

echo "<h3> Array SLice with Both String and Integer Keys </h3>";

$a1 = array("a"=>"Ant","b"=>"Ball","c"=>"Cat");

print_r(array_slice($a1,1,2));

echo "<br/>";

$a1 = array("0"=>"Acq","1"=>"Fable","2"=>"Orchid");

print_r(array_slice($a1,1,2));

?>

<br/>

<br/>

<?php

echo "<h3> Array Splice ,Replace and Remove</h3>";

$u1 = array("a"=>"red","b"=>"Cat","c"=>"cattle","d"=>"Duck");

$u2 = array("a"=>"Purple","b"=>"Cyan");

array_splice($u1,1,3,$u2);

print_r($u1);

?>

<br/>

<br/>

<?php

echo "<h3>Array Splice Length Parameter Set to Zero </h3>";

$p1 = array("0"=>"Ant","1"=>"Dot");

$p2 = array("0"=>"Apple","1"=>"Cat");

array_splice($p1,1,0,$p2);

print_r($p1);

?>

<br/>

<br/>

<?php

echo "<h3>Array Splice  </h3>";

$u1 = array("a"=>"red","b"=>"Cat","c"=>"cattle","d"=>"Duck");

$u2 = array("a"=>"Purple","b"=>"Cyan");

print_r(array_splice($u1,2,3,$u2));

?>

<br/>

<br/>

<?php

echo "<h3> Array Sum Function </h3>";

$r1 = array("a"=>40,"b"=>53,"c"=>70);

print_r(array_sum($r1));

?>

<br/>

<br/>

<?php

echo "<h3> Array U Difference </h3>";

function mRP($a,$b)

{

	if($a===$b)
	
	{
	
		return 0;
		
	}

	
		return ($a>$b) ? 1 : -1;
		
}

$a1 = array("a"=>"Violet","b"=>"yellow","black");

$a2 = array("A"=>"purple","b"=>"Blue","black");

$a3 = array("a"=>"Apple","b"=>"Blade");

$result = array_udiff($a1,$a2,$a3,"mRP");

print_r($result);

?>

<br/>

<br/>

<?php

echo "<h3> Array UDifference and Associaction </h3>";

function mTT($a,$b)

{

	if($a===$b)
	
	{
	
		return 0;
		
	}
	
	return ($a>$b)?1:-1;
	
}



$k1 = array("a"=>"Ant","b"=>"Bat","c"=>"Cattle");

$k2 = array("a"=>"Anter","b"=>"Bat","c"=>"cab");

$res = array_udiff_assoc($k1,$k2,"mTT");

print_r($res);

?>

<br/>

<br/>

<?php

echo "<h3> Array Udiff and UAssoc </h3>";

function myFunc_key($a,$b)

{

	if($a===$b)
	
	{
	
		return 0;
		
	}
	
	return ($a>$b)?1:-1;
	
}

function myFunc_values($a,$b)

{

	if($a===$b)
	
	{
	
		return 0;
		
	}
	
	return($a>$b)?1:-1;
	
}

$o1 = array("a"=>"Anl","b"=>"Ball","c"=>"Cap");

$o2 = array("a"=>"Alphabet","b"=>"Ball","c"=>"Cap");

$rest = array_udiff_uassoc($o1,$o2,"myFunc_Key","myFunc_values");

print_r($rest);

?>

<br/>

<br/>

<?php

echo "<h3> Arrays Uintersect Assoc </h3>";

function fT($a,$b)

{

	if($a==$b)
	
	{
	
		return 0;
		
	}
	
	return ($a>$b)?1:-1;
	
}

$d1 = array("a"=>"red","b"=>"green","c"=>"yellow","blue");

$d2 = array("A"=>"red","b"=>"GREEN","yellow","black");

$d3 = array("a"=>"green","b"=>"red","yellow","black");


$rat = array_uintersect($d1,$d2,$d3,"fT");

print_r($rat);

?>

<br/>

<br/>

<?php

echo "<h3> Array Uintersect Assoc </h3>";

function mNO($a,$b)

{

	if($a===$b)
	
	{
	
		return 0;
		
	}
	
	return ($a>$b)?1:-1;
	
}


$w1 = array("a"=>"apple","b"=>"Ban","c"=>"Cat");

$w2 = array("a"=>"App","b"=>"Ban","c"=>"Caf");

$resp = array_uintersect_assoc($w1,$w2,"mNO");

print_r($resp);

?>

<br/>

<br/>

<?php

echo "<h3> Array Uintersect U assoc </h3>";

function mH_Keys($a,$b)

{

	if($a===$b)
	
	{
	
		return 0;
		
	}
	
	return ($a>$b)?1:-1;
	

}

function mH_Values($a,$b)


{

	if($a===$b)
	
	{
	
		return 0;
		
	}
	
	return ($a>$b)?1:-1;

}

$h1 = array("a"=>"Aplet","b"=>"Ander","c"=>"Caplan");

$h2 = array("a"=>"Apl","b"=>"Ander","c"=>"Cab");

$rad = array_uintersect_uassoc($h1,$h2,"mH_Keys","mH_Values");

print_r($rad);

?>

<br/>

<br/>

<?php

echo "<h3> Array Unique </h3>";

$f1 = array("a"=>"black","b"=>"Batman","c"=>"black");

print_r(array_unique($f1));

?>

<br/>

<br/>

<?php

echo "<h3> Array Unshift </h3>";

$f2 = array("a"=>"red","b"=>"Bag","c"=>"cat");

array_unshift($f2,"Blue");

print_r($f2);

?>

<br/>

<br/>

<?php

echo "<h3> Array Unshift Second Type </h3>";

$f3 = array("a"=>"Abril","b"=>"Bah","c"=>"cyan");

print_r(array_unshift($f3,"Black"));


?>

<br/>

<br/>

<?php

echo "<h3> Array Values Function </h3>";

$a = array("Name"=>"Peter","Age"=>30,"Address"=>"NY");

print_r(array_values($a));

?>

<br/>

<br/>

<?php

echo "<h3> Array Walk function </h3>";

function mFunction($value,$key)

{

	echo "The key $key has the value $value <br>";
	
}

$b = array("a"=>"Ant","b"=>"ball","c"=>"Cat");

print_r(array_walk($b,"mFunction"));

?>

<br/>

<br/>

<?php

echo "<h3> Array Walk with Parameter </h3>";

function mG($value,$key,$p)

{

	echo "$key $p $value <br/>";
	
}

$c = array("a"=>"Apple","b"=>"Ball","c"=>"Cab");

array_walk($c,"mG","has the value");

?>

<br/>

<br/>

<?php

echo "<h3> Array walk change an array elements value </h3>";

function mTl(&$value,$key)

{

	$value = "Yellow";
	
}

$b = array("a"=>"red","b"=>"Bat","c"=>"Cang");

array_walk($b,"mTl");

print_r($b);

?>

<br/>

<br/>

<?php

echo "<h3> Array walk Recursive </h3>";

function mP($value,$key)

{

	echo "The $key key has the value $value <br/>";
	
}

$s1 = array("a"=>"red","b"=>"blue","c"=>"cyan");

$s2 = array($s1,"1"=>"yellow","2"=>"Magento");

array_walk_recursive($s2,"mP");

?>
<br/>

<br/>

<?php

echo "<h3> Array Arsort function descnding order </h3>";

$age = array("Peter"=>"40","Mert"=>"50", "Nob"=>"60");

arsort($age);

foreach($age as $x=>$x_value)

{

	echo "key = ".$x . ",value= ".$x_value;
	
	echo "<br/>";
	
}

?>

<br/>

<br/>

<?php

echo "<h3> Array ASort func for ascending order </h3>";

$age1 = array("Pal"=>"70","BHk"=>"80","NOP"=>"100");

asort($age1);

foreach($age1 as $y=>$y_value)

{

	echo "key=".$y . ",value=".$y_value;
	
	echo "<br/>";
}


?>

<br/>

<br/>

<?php 

echo "<h3> Array Compact function creat array from variable and value </h3>";

$firstname = "Peter";

$lastname = "Deer";

$age = "50";

$result = compact("firstname","lastname","age");

print_r($result);

?>

<br/>

<br/>

<?php

echo "<h3> Array Compact second type </h3>";

$firstname = "Platinti";

$lastname = "opera";

$location ="NYC";

$age = "9920";

$name = array("firstname","lastname");

$result = compact($name,"location","age");

print_r($result);

?>


</body>

</html>