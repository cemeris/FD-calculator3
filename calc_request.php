<?php

$output = "default text message";

if (
    array_key_exists('number-1', $_POST) &&
    array_key_exists('number-2', $_POST) &&
    array_key_exists('operator', $_POST)
) {
    $n1 = $_POST['number-1'];
    $n2 = $_POST['number-2'];
    $operator = $_POST['operator'];
    $operator_list = ['+' => null, '-' =>  null];

    if (is_numeric($n1) && is_numeric($n2) && array_key_exists($operator, $operator_list)) {

        switch ($operator) {
            case "+":
                $output = $n1 + $n2;
                break;
            case "-":
                $output = $n1 - $n2;
                break;
            default:
                $output = "unsuported operation";
        }
    }
    else {
        $output = "values are invalid";
    }

}
else {
    $output = "values are not set";
}

echo $output;