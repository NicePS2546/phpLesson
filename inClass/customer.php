<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity02_01</title>
    <style>
        .padding{
            padding-left: 10px;
        }
        .form-alignment{
            padding-bottom: 20px;
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
    </style>
</head>
<body>
    <form action='customer.php' class="form-alignment" method='post'>
        <button name="member" value="member">เป็นสมาชิก</button>
        <button name="member" value="notmember">ไม่ได้เป็นสมาชิก</button>

    </form>


    <?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){//ถ้า server มีการรับข้อมูลจากฝั่ง html ด้วย method post ให้ทำโค๊ดต่อไปนี้
        $Member = $_POST['member'];//เก็บค่า variable ของตัวแปรที่ชื่อ member ใน html
        $isMember = false;
        if($Member === "member"){
            $isMember = true;
        }else{
            $isMember = false;
        }
        $rate = 7;
        class Customer{//ประกาศ Class Customer
         public $product_price;//ประกาศตัวแปรต่างๆ
         public $product_amount;
         public $isMember;
         public $total;
         public $discount;
         public $isVat; 
         public $vatTotal;
         public $payAfterDisc;
         public $payTotal;
         public $vatRate;
            function __construct($price,$amount,$isMember = false,$isVat = false,$rate){ //ฟังก์ชั่นที่ถูกเรียกใช้อัตโนมัติเมื่อเรียกใช้ Class ในกรณีนี้จะใช้เก็บค่าต่างๆที่ถูกใส่มาใน Class
                $this->product_price = $price;
                $this->product_amount = $amount;
                $this->isMember = $isMember;
                $this->total = $this->product_price * $this->product_amount;
                $this->isVat = $isVat;
                $this->vatRate = $rate;
                $this->discount = 0;
                $this->payAfterDisc = 0;

            if($this->isMember){
                $this->discount = $this->total * (5 / 100); 
                $this->payAfterDisc = $this->total - $this->discount;
            }
            
            if($this->isVat){
                if($isMember){
               $this->vatTotal =  $this->payAfterDisc * ($this->vatRate / 100);
               $this->payTotal =  $this->payAfterDisc - $this->vatTotal;
            }else{
                $this->vatTotal = $this->total * (7 / 100);
                $this->payTotal =  $this->total - $this->vatTotal;
            }

}
            }

           
            function getProductDetail(){
                return [ // return ค่าเป็น Array ที่มี key หนึ่งตัวต่อ value หนึ่งค่า
                    'product_price' => $this->product_price, //ยกตัวอย่าง key แรกคือ product_price ซึ่งจะเก็บ ราคาสินค้าเอาไว้
                    'product_amount' => $this->product_amount,
                    'total' => $this->total,
                    'memberDiscount' => $this->discount,
                    'resultDisc' => $this->payAfterDisc,
                    'vatTotal' => $this->vatTotal,
                    'payTotal' => $this->payTotal
                    
                ];
            }
            
        }
    
    $isVat = true;
    $customer = new Customer(1900,9,$isMember,$isVat,$rate);//เรียกใช้ Class หรือ Object กำหนดค่าตาม __construct function
    $productDetail = $customer->getProductDetail();//เรียกใช้ function getProductDetail ซึ่ง return ค่ามาเป็น Array key ต่อ value 
    //ในกรณีที่จะเรียกใช้ จะนำตัวแปร $productDetail['ชื่อของkeyที่ต้องการ'] ซึ่งแต่ละ key จะเก็บ value ที่เรากำหนดค่าไว้
   
    echo "<table>";
        echo "<tr><td>สินค้า ราคาต่อชิ้น</td><td class='padding'>".$productDetail['product_price']."</td><td>บาท</td></tr>"; 
        echo "<tr><td>จำนวน</td><td class='padding'>".$productDetail['product_amount']."</td><td>ชิ้น</td></tr>";
        echo "<tr><td>รวมเป็นเงิน </td><td class='padding'>".$productDetail['total']."</td><td>บาท</td></tr>";
        if($isMember || $isVat){
        if($isMember && $isVat){
        echo "<tr><td>ได้รับส่วนลดร้อยละ</td><td class='padding'>5</td><td>เป็นเงิน</td><td class='padding'>".$productDetail['memberDiscount']."</td><td class='padding'>บาท</td></tr>";
        echo "<tr><td>คงเหลือ</td><td class='padding'>".$productDetail['resultDisc']."</td><td>บาท</td></tr>"; 
        echo "<tr><td>รวมภาษีร้อยละ </td><td class='padding'>$rate</td><td>เป็นเงิน</td><td class='padding'>".$productDetail['vatTotal']."</td><td class='padding'>บาท</td></tr>";
        echo "<tr><td>คงเหลือ+vat</td><td class='padding'>".$productDetail['payTotal']."</td><td>บาท</td></tr>"; 
    }
        if($isMember === false && $isVat){
            echo "<tr><td>รวมภาษีร้อยละ </td><td class='padding'>$rate</td><td>เป็นเงิน</td><td class='padding'>".$productDetail['vatTotal']."</td><td class='padding'>บาท</td></tr>";
            echo "<tr><td>คงเหลือ+vat</td><td class='padding'>".$productDetail['payTotal']."</td><td>บาท</td></tr>"; 
        }
         
        }
    echo "</table>";

}

    
    ?>
</body>
</html>