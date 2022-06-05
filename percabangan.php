<?php
$ukuranbaju = $_POST['ukuranbaju'];


if ($ukuranbaju > 100) {
    $grade = "XXXXXL";
} elseif ($ukuranbaju > 90) {
    $grade = "XXXXL";
} elseif ($ukuranbaju > 80) {
    $grade = "XXXL";
} elseif ($ukuranbaju > 70) {
    $grade = "XXL";
} elseif ($ukuranbaju > 60) {
    $grade = "XL";
} elseif ($ukuranbaju > 50) {
    $grade = "L";
} elseif ($ukuranbaju > 40) {
    $grade = "M";
} elseif ($ukuranbaju > 30) {
    $grade = "S";
} elseif ($ukuranbaju > 20) {
    $grade = "XS";
} else {
    $grade = "XXS";
}
echo "size baju yang cocok untukmu = $grade ";