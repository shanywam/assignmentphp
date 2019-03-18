<?php

$grade = 70;

if ($grade <= "90") {
    echo "A!";
} elseif ($grade <="70") {
    echo "A-";
} elseif ($grade = "60") {
    echo "B";
} elseif ($grade = "50") {
    echo "B-";
} elseif ($grade = "40") {
    echo "C";
} elseif ($grade = "30") {
    echo "C-";
} else {
    echo "D";
}
?>