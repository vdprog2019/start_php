

<?php
/*$one = 5;
$two = 6;
$three = 'hello';
echo $one + $two;
$var = (int)$three;

echo  $var + $one;

*/





$p = $_POST["plus"];
switch ($p) {
    case '+':
        echo $_POST["first"] + $_POST["second"];
        break;
    case '-';
        echo $_POST["first"] - $_POST["second"];
        break;
    case '*':
        echo $_POST["first"] * $_POST["second"];
        break;
    case '/':
        echo $_POST["first"] / $_POST["second"];
        break;
    case '>':
        if ($_POST["first"] > $_POST["second"]){
            echo "первое больше";
        }if ($_POST["second"] > $_POST["first"]){
            echo "второе больше";
        }
        break;
    case '<':
        if ($_POST["first"] < $_POST["second"]){
            echo "первое меньше";
        }if ($_POST["second"] < $_POST["first"]){
            echo "второе меньше";
        }
        break;
}


