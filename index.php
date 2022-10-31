<?php
echo "Москалик Василь Ігорович СП-41 (31.10.2022)<br>";
echo '<form action="" method="post">
    <input type="text" name="roomInput" placeholder="Введіть номер квартири" >
    <input type="submit" value="Перевірити">
</form>';

$roomNumber=$_POST["roomInput"];
$arrOneRoom=array(1,2,3,4,16,17);
$arrTwoRoom=array(5,7,9,12,13);
$arrThreeRoom=array(6,8,10,14,15);
$arrFourRoom=array(11,18,19,20);
$key=null;
if(in_array($roomNumber,$arrOneRoom)){
    $key=1;
}else if (in_array($roomNumber,$arrTwoRoom)){
    $key=2;
}else if (in_array($roomNumber,$arrThreeRoom)){
    $key=3;
}else if (in_array($roomNumber,$arrFourRoom)){
    $key=4;
}


switch ($key){
    case 1:
        echo "Це однокімнатна квартира (класичний запис switch)";
        break;
    case 2:
        echo "Це двокімнатна квартира (класичний запис switch)";
        break;
    case 3:
        echo "Це трикімнатна квартира (класичний запис switch)";
        break;
    case 4:
        echo "Це чотирьохкімнатна квартира (класичний запис switch)";
        break;
    default:
        echo "Цього номера немає в списку (класичний запис switch)";
}
echo "<br>";
switch ($key):
    case 1:
        echo "Це однокімнатна квартира (альтернативний запис switch)";
        break;
    case 2:
        echo "Це двокімнатна квартира (альтернативний запис switch)";
        break;
    case 3:
        echo "Це трикімнатна квартира (альтернативний запис switch)";
        break;
    case 4:
        echo "Це чотирьохкімнатна квартира (альтернативний запис switch)";
        break;
    default:
        echo "Цього номера немає в списку (альтернативний запис switch)";
        endswitch;

?>




