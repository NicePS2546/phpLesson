<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nested Loop</title>
    <style>
        table {
            border-collapse: collapse;
            font-size: 18px;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
        }
       
    </style>
</head>
<body>
    <?php 
    $number = 12;

    function nested_loop($formula){
        echo "<h2 style='padding-buttom:20px;'>สูตรคูณแม่ 2-12</h2>";
        echo "<div style='display:flex; gap:20px;'>";
        $i=2;
        while($i <= $formula){
            echo "<table>";
            echo "<tr><th colspan='3'>สูตรคูณแม่ $i</th></tr>";
            for($j = 1;$j <= 12; $j++){
                $result = $i * $j;
                
               echo "<tr><td>$i x $j</td><td>=</td><td>$result</td></tr>";
               
            }
            echo "</table>";
            $i++;
        }   
        echo "<div>" ;
        
    }

    nested_loop($number)
    ?>
</body>
</html>