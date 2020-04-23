<?php

include "DivideByZeroException.php";
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $numerator = $_REQUEST['tuso'];
    $denominator = $_REQUEST['mauso'];
}

try {
    $variable = divide($numerator, $denominator);
    echo $variable;
} catch (DivideByZeroException $e) {
    echo 'Co loi xay ra' . $e;
}
function divide($numerator, $denominator)
{
    if ($denominator == 0) {
        throw new DivideByZeroException();
    }
    return $numerator / $denominator;
}
?>