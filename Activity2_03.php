<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form{
            display:flex;
            flex-direction: column;
            gap:5px;
            width:200px;
        }
        input{
            width: 200px;
        }
        button{
            width: 100px;
            margin: auto;
        }
        label{
            margin:auto;
        }
    </style>
</head>
<body>
    <form action='Activity2_03.php' class="form" method='post'>
        <label for="score">ใส่คะแนน</label>
        <input name="score" id="score">
            <button type="submit">คำนวณผลเกรด</button>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $score = $_POST['score'];
    class Grade{
        public $score;
        public $result;

        function __construct($score){
            $this->score = $score;
            $result = "";
            switch($score){
                case $score < 50 :
                    $result = "E";
                    break;
                case $score < 55 :
                    $result = "D";
                    break;
                case $score < 60 :
                    $result = "D+";
                    break;
                case $score < 65 :
                    $result = "C";
                    break;
                case $score < 70 :
                    $result = "C+";
                    break;
                case $score < 75 :
                    $result = "B";
                    break;
                case $score < 80 :
                    $result = "B+";
                    break;
                case $score >= 80 :
                     $result = "A";
                     break;
                default:
                $result = "E";
                break;
            }
            $this->result = $result;
        }
        function getResult(){
            return $this->result;
        }
    }
    
    $grade = new Grade($score);
    $result = $grade->getResult();
    
    echo "<h2>เกรดที่ได้ : $result</h2>";
    
    
}
echo "<h4>ที่ใช้ Switch case เพราะ มีการตัดสินใจเหตุการณ์มากกว่า 3 เหตุการณ์ Switch case เลยเหมาะกับ Code นี้แต่หากอยากกำหนด expression ให้ชัดเจนและมีความยืดหยุ่นของโค๊ดควรใช้ if else</h4>"
    ?>
</body>
</html>