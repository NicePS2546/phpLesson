<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $score = 70;
        $grade = '';
        if($score >= 80){
            $grade = 'A';
        }else if( $score >= 75 && $score < 80 ){
            $grade = 'B+';
        }else if( $score >= 70 && $score < 75){
            $grade = 'B';
        }else if( $score >= 65 && $score < 70){
            $grade = 'C+';
        }else if($score >= 60 && $score < 65){
            $grade = 'C';
        }else if( $score >= 55 && $score < 60){
            $grade = 'D+';
        }else if($score >= 50 && $score < 55){
            $grade = 'D';
        }else{
            $grade = 'E';
        };

        echo "<h3>เกรดที่นักศึกษาได้ $grade</h3>";
    ?>
</body>
</html>