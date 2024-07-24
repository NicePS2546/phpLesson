<?php 
    
    $products = [
        ['name'=>'ข้าวสาร 5 กก.','type'=>'food','price'=> 249,'qty'=> 2,'image'=>'rice.jpg'],
        ['name'=>'น้ำดื่ม 1 ลิตร','type'=>'food','price'=> 13,'qty'=> 12,'image'=>'water.png'],
        ['name'=>'ขนมปัง','type'=>'food','price'=> 45,'qty'=> 5,'image'=>'bread.jpg'],
        ['name'=>'ยาสระผม','type'=>'item','price'=> 87,'qty'=> 1,'image'=>'shampoo.jpg'],
        ['name'=>'สบู่','type'=>'item','price'=> 15,'qty'=> 6 ,'image'=>'soap.webp'],
    ];

      $rate = 7;  
       
            $style ="style='padding:0px 10px;'";
            echo "<table border='1' style='border-collapse:collapse;font-size:20px;'>";
            echo "<tr><th>รูป</th><th>ชื่อสินค้า</th><th>ราคา</th><th>จำนวน</th><th>ราคารวม</th><th>ภาษี</th><th>ราคารวมภาษี</th></tr>";
            foreach($products as $product){
                $total = $product['price'] * $product['qty'];
                $taxMessage;
                $payTotal;
                if($product['type'] === 'food'){
                    $tax = 0;
                    $totalPaid = $total;
                }else{
                    $tax = $total * ($rate / 100);
                    $payTotal = $total + $tax;
                    $taxMessage = $tax;
                    $totalPaid = number_format($payTotal, 2);
                };
                

                echo "<tr><td ><img height='100px' src='img/",$product['image'],"'></td><td>",$product['name'],"</td><td>",$product['price'],"</td><td>",$product['qty'],"</td><td>$total</td><td>$tax</td><td>$totalPaid</td></tr>";
        
    }
        echo "</table>";
   

    

?>
