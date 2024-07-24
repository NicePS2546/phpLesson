<?php 
    
    class Product {
        private $tax;
        private $total;
        public $rate;
        public $totalPay;

        function __construct($rate){
            $this->rate = $rate;
        }

        private function taxCal(){
            $this->tax = $this->total * ($this->rate / 100);
            $this->totalPay = $this->total + $this->tax;
        }
        
        function displayTable($style,$img,$name,$price,$amount,$tax,$total,$totalPay){
          echo "<tr><td style='padding:0px 10px; text-align:center;'><img height='100px' src='img/$img'></td><td $style>$name</td><td $style>$price</td><td $style>$amount</td><td $style>$total</td><td $style>$tax</td><td $style>$totalPay</td></tr>";
        }

        function loopTable($products){
            $style ="style='padding:0px 10px;'";
            echo "<table border='1' style='border-collapse:collapse;font-size:20px;'>";
            echo "<tr><th>รูป</th><th>ชื่อสินค้า</th><th>ราคา</th><th>จำนวน</th><th>ราคารวม</th><th>ภาษี</th><th>ราคารวมภาษี</th></tr>";
            foreach($products as $product){
                $this->total = $product['price'] * $product['qty'];
                $taxMessage;
                $payTotal;
                if($product['type'] === 'food'){
                    $this->tax = 0;  
                    $taxMessage = 'ไม่มีภาษี';
                    $payTotal = $this->total;
                }else{
                    $this->taxCal();
                    $taxMessage = $this->tax;
                    $payTotal = number_format($this->totalPay, 2);
                };
                

                $this->displayTable($style,$product['image'],$product['name'],$product['price'],$product['qty'],$taxMessage,$this->total,$payTotal);
        }
        echo "</table>";
    }
}
    $products = [
        ['name'=>'ข้าวสาร 5 กก.','type'=>'food','price'=> 249,'qty'=> 2,'image'=>'rice.jpg'],
        ['name'=>'น้ำดื่ม 1 ลิตร','type'=>'food','price'=> 13,'qty'=> 12,'image'=>'water.png'],
        ['name'=>'ขนมปัง','type'=>'food','price'=> 45,'qty'=> 5,'image'=>'bread.jpg'],
        ['name'=>'ยาสระผม','type'=>'item','price'=> 87,'qty'=> 1,'image'=>'shampoo.jpg'],
        ['name'=>'สบู่','type'=>'item','price'=> 15,'qty'=> 6 ,'image'=>'soap.webp'],
    ];

    $rate = 7;

    $product = new Product($rate);
    $displayProduct = $product->loopTable($products);

?>
