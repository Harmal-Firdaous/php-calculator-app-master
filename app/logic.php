<?php 

$number01 = $_POST["numb01"];
$number02 = $_POST["numb02"];
$result = ''; 

if (isset($_POST["addition"])) {
    $result = $number01 + $number02;
}
elseif (isset($_POST["subtraction"])) {
    $result = $number01 - $number02;
}
elseif (isset($_POST["multiplication"])) {
    $result = $number01 * $number02;
}
elseif (isset($_POST["division"])) {
    $result = $number01 / $number02;
}




