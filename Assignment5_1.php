<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div style='padding-bottom: 50px'>
<?php
    $textSize = 'style=font-size:20px';
    $employees = [
        ['id'=>'101', 'name'=>'อภิวัฒน์ งามดี', 'department'=>'การตลาด', 'salary'=> 25800, 'phone'=>'0814578452','img'=>'maleFace.webp'],
        ['id'=>'102', 'name'=>'สมชาย แสนดี', 'department'=>'การเงิน', 'salary'=> 30000, 'phone'=>'0896547895','img'=>'maleFace.webp'],
        ['id'=>'103', 'name'=>'มนัส วงษ์ษา', 'department'=>'ทรัพยากรบุคคล', 'salary'=> 27500, 'phone'=>'0801234567','img'=>'womenFace.jpg'],
        ['id'=>'104', 'name'=>'วิทยา นาคเกษม', 'department'=>'ขาย', 'salary'=> 26000, 'phone'=>'0819876543','img'=>'womenFace.jpg'],
        ['id'=>'105', 'name'=>'กิตติศักดิ์ วรปรานี', 'department'=>'IT', 'salary'=> 32000, 'phone'=>'0823456789','img'=>'maleFace.webp'],
        ['id'=>'106', 'name'=>'พิชิต ก่อการดี', 'department'=>'วิศวกรรม', 'salary'=> 28000, 'phone'=>'0834567890','img'=>'maleFace.webp'],
        ['id'=>'107', 'name'=>'สุพรรณ สุวรรณดี', 'department'=>'บัญชี', 'salary'=> 27000, 'phone'=>'0845678901','img'=>'womenFace.jpg'],
        ['id'=>'108', 'name'=>'นภา วงศ์แก้ว', 'department'=>'ฝ่ายผลิต', 'salary'=> 25500, 'phone'=>'0856789012','img'=>'womenFace.jpg'],
        ['id'=>'109', 'name'=>'ธีระศักดิ์ ทองงาม', 'department'=>'การตลาด', 'salary'=> 29000, 'phone'=>'0867890123','img'=>'maleFace.webp'],
        ['id'=>'110', 'name'=>'ประเสริฐ สมบูรณ์', 'department'=>'ฝ่ายวิจัย', 'salary'=> 31000, 'phone'=>'0878901234','img'=>'maleFace.webp'],
        ['id'=>'111', 'name'=>'สุดใจ ดวงดี', 'department'=>'ฝ่ายบริการลูกค้า', 'salary'=> 24000, 'phone'=>'0889012345','img'=>'womenFace.jpg']
    ];


    echo "<table border='1' style='border-collapse:collapse; padding-bottom: 25px;'>";
    echo "<tr>
         <th>รูปพนักงาน</th>
         <th>รหัสพนักงาน</th>
         <th>ชื่อนามสกุลพนักงาน</th>
         <th>แผนก</th>
         <th>เงินเดือน</th>
         <th>หมายเลขโทรศัพท์</th>
    </tr>";
    
    $salarySum = 0;
    
    foreach($employees as $employee){
     $salarySum += $employee['salary'];
         echo "<tr style='text-align:center;'>
             <td><img src='img/".$employee['img']."' width='100px' height = '80px'></td>
             <td>{$employee['id']}</td>
             <td>{$employee['name']}</td>
             <td>{$employee['department']}</td>
             <td>{$employee['salary']}</td>
             <td>{$employee['phone']}</td>
         </tr>";
    };
    $result = $salarySum / count($employees);

    echo "<tr>
         <td colspan = '5' $textSize>เงินเดือนเฉลี่ย</td>
         <td $textSize>$result</td>
    </tr>";
     
    echo "</table>";
    
?>
</div>
</body>
</html>
