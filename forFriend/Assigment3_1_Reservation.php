<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resevation</title>
    <style>
        .selection{
            border:1px solid black;
            border-radius:10px;
            padding:2px 5px 2px 5px;
        }
        label{
            padding-right:5px;
        }
        .padding{
            padding-left: 10px;
        }
        .form-alignment{
            display:flex;
            flex-direction:column;
            gap:10px;
            padding-bottom: 20px;
            font-size:18px;
        }
        button{
            background-color: rgb(22, 146, 247);
            border: 1px solid rgb(107, 119, 122);
            border-radius: 10px;
            padding: 5px 8px;
            transition: all 0.3s ease, background-color 0.3s ease;
        }
        button:hover{
            transform: scale(1.2);
            background-color: rgb(0, 117, 212);
            color: rgb(255, 255, 255);
        }
        input{
            border-radius:4px
        }
    </style>
</head>

    
<body>
    <?php
    
    $category = 'Standard';
    $isWeekend = false;
    $reservation_day = 5;
    $standard = 2500;
    $deluxe = 3750;
    $suite = 5500;
    $total = 0;
    $discount = 0;
    $discountDay = 0;

    if($category === 'Standard'){
        $total = $standard * $reservation_day;
    }else if($category === 'Deluxe'){
        $total = $deluxe * $reservation_day;
    }else{
        $total = $suite * $reservation_day;
    };

    if($isWeekend){
        $Discount = 0;
    }else{
        $Discount = $total * (10 / 100);
    };
    
    if($reservation_day> 3){
        $discountDay = $total * (15 / 100);
    }      
                
    $totalDiscount = $discount + $discountDay;
    $payTotal = $total - $totalDiscount;           

                
        echo "<table style='font-size:18px;'>";
        echo "<tr><td>ประเภทห้องที่จอง</td><td class='padding'>".$category."</td></tr>"; 
        echo "<tr><td>จำนวนคืนที่เข้าพัก</td><td class='padding'>".$reservation_day."</td><td>คืน</td></tr>";
        echo "<tr><td>รวมเป็นเงิน </td><td class='padding'>".$total."</td><td>บาท</td></tr>";
        if($isWeekend === false){
        echo "<tr><td>ได้รับส่วนลดในวันเข้าพักธรรมดา</td><td class='padding'>10%</td><td>เป็นเงิน</td><td class='padding'>".$discount."</td><td class='padding'>บาท</td></tr>";
        };

        if($reservation_day > 3){
            echo "<tr><td>ได้รับส่วนลดในการเข้าจองมากกว่า 3 วัน</td><td class='padding'>15%</td><td>เป็นเงิน</td><td class='padding'>".$discountDay."</td><td class='padding'>บาท</td></tr>";
        };
        if($isWeekend === false || $reservation_day > 3){
        echo "<tr><td>คงเหลือ</td><td class='padding'>".$payTotal."</td><td>บาท</td></tr>";
    }
    echo "</table>";

    


    ?>
</body>
</html>