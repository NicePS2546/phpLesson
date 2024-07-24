<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>
<body>
    
        <?php
   
        
        $number = 7;
                    $result = 1;
                    $step = [];
                    for($i=1; $i <= $number; $i++){
                        $step[] = $i;
                        $result *= $i;
                    };
                    $steps_str = implode(' * ', $step);
                    echo "<span style='font-size:18px;'>$number! = $steps_str &nbsp; = &nbsp; $result </span><br>";
                    

           
        
        

            
        ?>
</body>
</html>