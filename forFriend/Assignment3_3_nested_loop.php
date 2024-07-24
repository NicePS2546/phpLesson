<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nested Loop</title>
</head>
<body>
    <?php
   
        echo "<h2 style='padding-buttom:20px;'>ผล Factorial จาก 2! ถึง 10!</h2>";
        $i = 2;
        echo "<div style='display:flex; flex-direction:column;'>";
        while($i <= 10){
            $result = 1;
            $k = [];
        for($j=1; $j <= $i; $j++){
            $k[] = $i;
            $result *= $j;
}
            $k_str = implode(' * ', $k);
            echo "$i! = $k_str &nbsp; = &nbsp; $result<br>";
            $i++;
        }    
        echo "</div>";
   
    ?>
</body>
</html>