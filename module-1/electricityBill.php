<?php
echo "Enter units:";
$unit = (int) readline();
if($unit <= 100){
    $bill = $unit * 5;
}else if($unit <= 200){
    $bill = 100 * 5 + ($unit - 100) * 10;
}else {
    $bill = 100 * 5 + 100 * 10 + ($unit - 200) * 15;
}
echo "Total bill: $bill";


?>