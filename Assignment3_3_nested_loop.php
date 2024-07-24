<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nested Loop</title>
</head>
<body>
    <?php
    class NestFact{
    function displayFact($number){
        $result = 1;
        $step = [];
        for($i=1; $i <= $number; $i++){
            $step[] = $i;
            $result *= $i;
           
        }
        $steps_str = implode(' * ', $step);
        echo "<span style='font-size:18px;'>$number! = $steps_str &nbsp; = &nbsp; $result </span><br>";
        }

    function nested_loop(){
        echo "<h2 style='padding-buttom:20px;'>ผล Factorial จาก 2! ถึง 10!</h2>";
        $i = 2;
        echo "<div style='display:flex; flex-direction:column;'>";
        while($i <= 10){
            $this->displayFact($i);
            $i++;
        }    
        echo "</div>";
    }
    

}

$fact = new NestFact();
    $display = $fact->nested_loop();
    ?>
</body>
</html>