<?php
//bai 1
$arrs = [2,5,6,9,2,5,6,12,5];
$sum = array_sum($arrs);
echo "Tổng các phần tử = 2+5+6+9+2+5+6+12+5 = " . $sum . "<br>";
$product = array_product($arrs);
echo "Tích các phần tử = 2*5*6*9*2*5*6*12*5 = " . $product . "<br>";
$subtract = $arrs[0];
for ($i = 1; $i < count($arrs); $i++){
    $subtract -= $arrs[$i];
}
echo "Hiệu các phần tử = 2-5-6-9-2-5-6-12-5 = " . $subtract . "<br>";
$divide = $arrs[0];
for ($i = 1; $i < count($arrs); $i++){
    if($arrs[$i] != 0){
        $divide /= $arrs[$i];
    } else{
        echo "Không có phép chia cho 0";
        break;
    }  
}
echo "Thương các phần tử = 2/5/6/9/2/5/6/12/5 = " . $divide. "<br>";
?>

<?php
//bai 2
$arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
$names = ['Anh', 'Sơn', 'Thắng', 'tôi'];
$result = '';
foreach ($arrs as $key => $color) {
    $result .= "Màu $color là màu yêu thích của $names[$key]";
    if ($key < count($arrs) - 1) {
        $result .= ', ';
    } else {
        $result .= '.';
    }
}
echo $result;
?>

<?php
//bai 3
$arrs = ['PHP', 'HTML', 'CSS', 'JS'];
echo '<table border="1">';
echo '<tr><th>Tên khóa học</th></tr>';
foreach ($arrs as $subject) {
    echo '<tr><td>' . $subject . '</td></tr>';
}
echo '</table>';
?>

<?php
//bai 4
$arrs = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => 
"Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => 
"Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", 
"Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", 
"Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United 
Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech 
Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => 
"Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw");
foreach ($arrs as $country => $capital){
    echo "Thủ đô của " . $country . " là " . $capital . "<br>" ;
}
?>

<?php
// bai 5
$a = [
    'a' => ['b' => 0,'c' => 1],
    'b' => ['e' => 2,'o' => ['b' => 3 ]]
   ]; 
$valueB = $a['b']['o']['b'];
echo "Gía trị b = " . $valueB . "<br>" ;
$valueC = $a['a']['c'];
echo "Gía trị c = " . $valueC . "<br>" ;
$infoA = $a['a'];
print_r($infoA);
echo "<br>";
?>

<?php
//bai 6
$keys = array(
    "field1" => "first",
    "field2" => "second",
    "field3" => "third"
);
$values = array(
    "field1value" => "dinosaur",
    "field2value" => "pig",
    "field3value" => "platypus"
);
$keysAndValues = array();
foreach ($keys as $key => $value) {
    $keysAndValues[$value] = $values[$key . 'value'];
}
print_r($keysAndValues);
echo "<br>";
?>

<?php
//bai7
$array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];
foreach ($array as $number) {
    if($number >= 100 && $number <= 200 && $number %5 == 0) {
        echo $number . "<br>";
    }
}
?>



