<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>
<body>
        <?php
        $number = 5;
            $result = 1;
            $j = [];
        for($i=1; $i <= $number; $i++){
            $j[] = $i;
            $result *= $i;
}
            $j_str = implode(' * ', $j);
            echo "$number! = $j_str &nbsp; = &nbsp; $result<br>";
                    
        ?>
</body>
</html>