<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>
<body>
    <form action='Assignment3_2_fact_loop.php' style='padding-bottom:20px;' method='post'>
    <label for='numb'>โปรดใส่จำนวน fact</label>
    <input name='numberFact' id='numb'>
    <button type='submit'>ยืนยัน</button>
    </form>
        <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $number = $_POST['numberFact'];
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

            if($number !== ''){
            displayFact($number);
        }else{
            echo "<h2 style='padding-top:30px'>โปรดใส้ข้อมูล</h2>";
        }
        }

            
        ?>
</body>
</html>