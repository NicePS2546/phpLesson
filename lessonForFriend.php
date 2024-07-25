<?php
    $array1 = ['Nice',1,"simNaHee"];
    $array2 = ["name"=>"Nice","number"=>2,"friend"=>"Sim"];
    $array3 = [
        ['Nice',20,"sim"],
        ['Sim',20,"Nice"],
        ['Oat',20,"sim"],
        ['Beam',20,"sim"],
    ];
    $array4s = [
        ["name"=>"Nice","age"=>20,"friend"=>"Sim"],
        ["name"=>"Sim","age"=>20,"friend"=>"Sim"],
        ["name"=>"Oat","age"=>20,"friend"=>"Sim"],
        ["name"=>"Beam","age"=>20,"friend"=>"Sim"],
    ];
    echo $array1[0],"<br>";
    echo $array2['name'],"<br>";
    echo $array3[0][0],"<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    for($i = 0; $i < 4; $i++) { 
        echo $array4s[$i]['name'],"<br>";
    };
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    $i = 0;
    do{
        echo $array4s[$i]['name'],"<br>";
        $i++;
    }while($i < count($array4s));


    echo "<br>";
    echo "<br>";
    echo "<br>";
    
    function Calcu($x,$y){
        $result = $x + $y;
        echo $result,"<br>";

        return $x + $y;
    };
        
    $result = Calcu(5,20);
    echo $result,"<br>";
    
    
?>