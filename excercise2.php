<?php



function excercise2($var){
require_once('data1.php');

$mystr = json_encode($my_a_team);
$array1 = json_decode($mystr);
    
$theStr = json_encode($my_b_team);
$array2 = json_decode($theStr);
    
$anStr = json_encode($my_c_team);
$array3 = json_decode($anStr);
       
    
foreach($array1 as $arr){
    // echo(gettype($arr->members));
    $member = $arr->members;
    $dispNames = $arr ->displayName;
    // echo $dispNames;
    if(gettype($member) =='array'){
        $memberStr = json_encode($member);        
        $memberArr = json_decode($memberStr);
        foreach($memberArr as $mArr){
            $name = $mArr->displayName;
            if($name == $var ){
                echo $dispNames;
            }
            echo("<br>");
        }

    }
    
}

foreach($array2 as $arr){
    // echo(gettype($arr->members));
    $member = $arr->members;
    $dispNames = $arr ->displayName;
    // echo $dispNames;
    if(gettype($member) =='array'){
        $memberStr = json_encode($member);        
        $memberArr = json_decode($memberStr);
        foreach($memberArr as $mArr){
            $name = $mArr->displayName;
            if($name == $var ){
                echo $dispNames;
            }
        }

    }
    
}

foreach($array3 as $arr){
    // echo(gettype($arr->members));
    $member = $arr->members;
    $dispNames = $arr ->displayName;
    // echo $dispNames;
    if(gettype($member) =='array'){
        $memberStr = json_encode($member);        
        $memberArr = json_decode($memberStr);
        foreach($memberArr as $mArr){
            $name = $mArr->displayName;
            if($name == $var ){
                // echo $dispNames;
            }
            echo("<br>");
        }

    }
}

foreach($array1 as $arr){
    // echo(gettype($arr->members));
    $member = $arr->members;
    $dispNames = $arr ->displayName;
    // echo $dispNames;
    if(gettype($member) =='array'){
        $memberStr = json_encode($member);        
        $memberArr = json_decode($memberStr);
        foreach($memberArr as $mArr){
            $name = $mArr->displayName;
            if($name == $var ){
                echo "The C-Team";
            }
            echo("<br>");
        }

    }
}

}

$var = "Alice";
excercise2($var);
?>