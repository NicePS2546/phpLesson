<?php 
    $cars = [
        ['name'=>'Wave','price'=> 55200,'image'=>'Wave.jpg'],
        ['name'=>'Forza','price'=> 179000,'image'=>'Forza.webp'],
        ['name'=>'Click','price'=> 69900,'image'=>'Click.jpg'],
        ['name'=>'ADV','price'=> 188900,'image'=>'ADV.jpg'],
        ['name'=>'PCX','price'=> 93900,'image'=>'PCX.jpg'],
        ['name'=>'Scoopy','price'=> 49900,'image'=>'Scoopy.jpg'],
        ['name'=>'Giorno','price'=> 61900,'image'=>'Giorno.jpg'],
        ['name'=>'Monkey','price'=> 129900,'image'=>'Monkey.jpg'],
        ['name'=>'LEAD','price'=> 58500,'image'=>'LEAD.jpg'],
    ];

    class Car{
        public $downPayment;
        public $installPrice;
        public $priceAfterDown;
        

        private function loopCarTable($style,$img,$name,$price,$downPayment,$installPrice){
            echo "<tr><td style='padding:0px 10px; text-align:center;'><img height='100px' src='imgCar/$img'></td><td $style>$name</td><td $style>$price</td><td $style>$downPayment</td><td $style>$installPrice</td></tr>";
        }
        function display($cars){
            $style ="style='padding:0px 10px;'";
            echo "<table border='1' style='border-collapse:collapse;font-size:20px;'>";
            echo "<tr><th>รูป</th><th>ชื่อรุ่น</th><th>ราคา</th><th>ราคาดาวน์ 30%</th><th>ราคาผ่อนชำระ 12 เดือน</th></tr>";
         foreach($cars as $car){
            $this->downPayment = $car['price'] * (30/100);
            $this->priceAfterDown = $car['price'] - $this->downPayment;
            $this->installPrice = ($this->priceAfterDown / 12);
            $this->loopCarTable($style,$car['image'],$car['name'],$car['price'],$this->downPayment,number_format($this->installPrice, 2)); 
        }
            echo "</table>";
        }

    }
    $car = new Car();
    
    $car->display($cars);

?>