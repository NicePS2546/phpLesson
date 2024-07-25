<?php 
       Class ExampleFunction{
        function gradeCheck($name,$score){
            $grade = '';
            if ($score >= 80){
                $grade = 'A';
            }else if($score > 75){
                $grade = 'B+';
            }else if($score >= 70){
                $grade = 'B';
            }else if($score >= 65){
                $grade = 'C+';
            }else if($score >= 60){
                $grade = 'C';
            }else if($score >= 55){
                $grade = 'D+';
            }else if($score >= 50){
                $grade = 'D';
            }else{
                $grade = 'E';
            }
            echo " $name คะแนน $score ได้เกรด $grade<br>";
            return $grade;
        }   
        function factorial($number){
            $result = 1;
            $step = [];
            for($i=1; $i <= $number; $i++){
                $step[] = $i;
                $result *= $i;
               
            }
            $steps_str = implode(' * ', $step);
            echo "<span style='font-size:18px;'>$number! = $steps_str &nbsp; = &nbsp; $result </span><br>";
            }
       }
       $function = new ExampleFunction();

       $grade = $function->gradeCheck("Nice",79);
       $grade = $function->gradeCheck("Sim",54);
       $grade = $function->gradeCheck("Oat",69);
       $grade = $function->gradeCheck("Beam",80);
       $grade = $function->gradeCheck("Fuse",82);

       echo "<br>";
       echo "<br>";
       echo "<br>";
       echo "<br>";
       
       $function->factorial(7);
       $function->factorial(8);
       $function->factorial(5);
       $function->factorial(9);
       ?>