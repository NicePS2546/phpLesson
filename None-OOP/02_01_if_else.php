<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php 
            $isMember = true;
            $amount = 6;
            $price = 1600;
            $total = $amount * $price;
            $member_discount = 0;
            if($isMember){
                $member_discount = $total * (5/100);
            };
            $result_price = $total - $member_discount;

            
            echo "<table>";
        echo "<tr><td>สินค้า ราคาต่อชิ้น</td><td style='padding-left:10px'>".$price."</td><td>บาท</td></tr>"; 
        echo "<tr><td>จำนวน</td><td style='padding-left:10px'>".$amount."</td><td>ชิ้น</td></tr>";
        echo "<tr><td>รวมเป็นเงิน </td><td style='padding-left:10px'>".$total."</td><td>บาท</td></tr>";
        if($isMember === true){
        echo "<tr><td>ได้รับส่วนลดร้อยละ</td><td style='padding-left:10px'>5</td><td>เป็นเงิน</td><td style='padding-left:10px'>".$member_discount."</td><td style='padding-left:10px'>บาท</td></tr>";
        echo "<tr><td>คงเหลือ</td><td style='padding-left:10px'>".$result_price."</td><td>บาท</td></tr>";
    }
        
    echo "</table>";

        ?>
</body>
</html>