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

<?php
//bai 8
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
$minLength = PHP_INT_MAX;
$maxLength = 0; 
$minString = '';
$maxString = '';
foreach ($array as $string) {
    $length = strlen($string);
    if ($length < $minLength) {
        $minLength = $length;
        $minString = $string;
    }
    if ($length > $maxLength) {
        $maxLength = $length;
        $maxString = $string;
    }
}
echo "Chuỗi lớn nhất là $maxString, độ dài = $maxLength" . "<br>";
echo "Chuỗi nhỏ nhất là $minString, độ dài = $minLength" . "<br>";
?>

<?php
//bai 9
$arrs = ['1', 'B', 'C', 'E'];
$result = array_map('strtolower', $arrs);
print_r($result);
echo "<br>";

$arrs = ['a', 0, null, false];
$result = array_map(function($item) {
    if (is_string($item)) {
        return strtolower($item);
    }
    return $item;
}, $arrs);
print_r($result);
echo "<br>";
?>

<?php
//bai 10
$arrs = ['1', 'b', 'c', 'd'];
$result = array_map('strtoupper', $arrs);
print_r($result);
echo "<br>";

$arrs = ['a', 0, null, false];
$result = array_map(function($item) {
    if (is_string($item)) {
        return strtoupper($item);
    }
    return $item;
}, $arrs);
print_r($result);
echo "<br>";
?>

<?php
//bai 11
$array = array(1, 2, 3, 4, 5);
unset ($array[3]);
print_r($array);
echo "<br>";
?>

<?php
//bai 12
$numbers = [
    'key1' => 12, 
    'key2' => 30, 
    'key3' => 4, 
    'key4' => -123, 
    'key5' => 1234, 
    'key6' => -12565, 
];
$firstElement = reset($numbers);
$lastElement = end($numbers);
echo "Phần tử đầu tiên: " . $firstElement . "<br/>";
echo "Phần tử cuối cùng: " . $lastElement . "<br/>";

$maxNumber = max($numbers);
$minNumber = min($numbers);
$sum = array_sum($numbers);
echo "Số lớn nhất: " . $maxNumber . "<br>";
echo "Số nhỏ nhất: " . $minNumber . "<br>";
echo "Tổng các giá trị: " . $sum . "<br>";

sort($numbers);
echo "Sắp xếp tăng dần các giá trị:";
print_r($numbers);
echo "<br>";
rsort($numbers);
echo "Sắp xếp giảm dần các giá trị:";
print_r($numbers);
echo "<br>";

ksort($numbers);
echo "Sắp xếp tăng dần các key:";
print_r($numbers);
echo "<br>";
krsort($numbers);
echo "Sắp xếp giảm dần các key:";
print_r($numbers);
echo "<br>";
?>

<?php
//bai 13
$numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 
65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
$sum = array_sum($numbers);
$count = count($numbers);
$average = $sum / $count;
echo "Giá trị trung bình của mảng là: " . $average . "<br>";

echo "Các số lớn hơn giá trị trung bình là: ";
foreach ($numbers as $number) {
    if ($number > $average) {
        echo $number . " ";
    }
}
echo "<br>";

echo "Các số nhỏ hơn hoặc bằng giá trị trung bình là: ";
foreach ($numbers as $number) {
    if ($number <= $average) {
        echo $number . " ";
    }
}
echo "<br>";
?>

<?php
//bai 14
$array1 = [
    [77, 87],
    [23, 45]
   ];
$array2 = [
    'giá trị 1', 'giá trị 2'
   ];
$result = [];
foreach ($array1 as $index => $subArray) {
    $result[$index] = array_merge([$array2[$index]], $subArray);
}
print_r($result);
?>
