<body>
    

<?php
 $color = ['white', 'green', 'red', 'blue', 'black'];
 
 echo "The memory of that scene for me is like a frame of film forever frozen at that
 moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The
 new president and his first lady. - Richard M. Nixon"
 ;
 
 echo "<br>"."**********************************"."<br>";
 
 $color1 = ['white', 'green', 'red'];
//  print_r($color1);
 sort($color1);
 
 for($x=0; $x < count($color1); $x++){

     echo "<li>".$color1[$x]."</li>";

    }
    
    echo "<br>"."**********************************"."<br>";

    
$cities= [ "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=>
"Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" =>
"Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
"Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
"Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United
Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech
Republic"=>"Prague", "Estonia"=>"Tallinn", "Hungary"=>"Budapest"] ;
    
foreach($cities as $key => $val){
    echo "The capital of $key is $val"."<br/>";
}

echo "<br>"."**********************************"."<br>";

$x = [1, 2, 3, 4, 5];

array_pop($x);
print_r($x);

$y = [1, 2, 3, 4, 5];
array_splice($y,3, 1);
echo "<br/>";
print_r($y);

echo "<br>"."**********************************"."<br>";


function colores($new){
    $color2 = array(4 => 'white', 6 => 'green', 11=> 'red');
    array_push($color2, $new);
    print_r($color2);
}
colores("yellow");
echo "<br>"."**********************************"."<br>";

$people = ["Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"];

arsort($people);

foreach($people as $name=> $name_value){

  echo "Key => " . $name . " Value =>". $name_value . "<br/>"; 
}
echo "<br>"."**********************************"."<br>";

// $people = ["Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"];

asort($people);

foreach($people as $name=> $name_value){

  echo "Key => " . $name . " Value =>". $name_value . "<br/>"; 
}

echo "<br>"."**********************************"."<br>";

krsort($people);

foreach($people as $name=> $name_value){

    echo "Key => " . $name . " Value =>". $name_value . "<br/>"; 
  }

  echo "<br>"."**********************************"."<br>";
// echo "<br>"."**********************************"."<br>";

ksort($people);

foreach($people as $name=> $name_value){

    echo "Key => " . $name . " Value =>". $name_value . "<br/>"; 
  }

  echo "<br>"."**********************************"."<br>";

  $recordedTemp =  "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,
  73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";
  
  $tempArr = explode(",",$recordedTemp);
  $arrLength = count($tempArr);
  $tempSum = 0;

  foreach($tempArr as $x){
      $tempSum += $x;
  }

  $tempAvg = $tempSum / $arrLength ;
  sort($tempArr);

  for($i=0; $i < 5 ; $i++){
      echo $tempArr[$i]."<br/>";
  }
echo "<hr/>";
  for($i= $arrLength-5; $i < $arrLength; $i ++){
      echo $tempArr[$i]."<br/>";
  } 
  
  echo "<br>"."**********************************"."<br>";

    $array1 = array(array(70,40), array(25, 45));
    $array2 = array("example", "com");
    function mergeArrays($x, $y)
    {
    $temp = array(); 
    $temp[] = $x;
     if(is_scalar($y))
    {
    $temp[] = $y;
    }
    else
    {
    foreach($y as $k => $v)
    {
    $temp[] = $v;
    }
    }
    return $temp;
    }
    
    print_r(array_map('mergeArrays',$array2, $array1));

    echo "<br>"."**********************************"."<br>";

    $color3= array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

    $color3 = array_flip($color3);

    $color3 = array_change_key_case($color3, CASE_UPPER);
    print_r($color3);
    echo "<br/>";
    $color3 = array_change_key_case($color3, CASE_LOWER);
    print_r($color3);

    echo "<br>"."**********************************"."<br>";

    echo implode(",",range(200,250,4));

    echo "<br>"."**********************************"."<br>";

    $sampleArray = ["asdas","asdasd","ewgergregf","reknmgerlk"];
    $sample1 = array_map( "strlen", $sampleArray);
    echo min($sample1)."<br>";
    echo max($sample1)."<br>";

    echo "<br>"."**********************************"."<br>";

    // $key = max( array_keys( $example) );
    echo "<br>"."**********************************"."<br>";

    $nestedArray = array(array(1,2,3), 
                        array(1,2,3),
                        array(1,2,3));



$x = array(1,2,3,"Hala",10.25);

foreach($x as $k=>$row){
	//if(is_array($row)){}
	//if(gettype($row) == 'array'){}
	if(is_array($row)){
		foreach ($row as $key => $value) {
			echo $key." ".$value."<br>";
		}
	}else{
		echo $k." ".$row."<br>";
	}
}
echo "<br>"."**********************************"."<br>";


$multi = array(
    array(1,"anas","IT"),
    array(2,"jinan","Kitchen"),
    array(3,"heba","sales"),
    array(4,"ahmad","HR")
);

$id    = array();
$names = array();
$dept  = array();

    ?>
    </body>
