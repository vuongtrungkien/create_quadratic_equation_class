<?php
include "QuadraticEquation.php";

$problem = new QuadraticEquation(1, 2, 3);

if ($problem->getDiscriminant() > 0) {
    echo "The equation has two roots  " . $problem->getRoot1() . " and " . $problem->getRoot2();
} else if ($problem->getDiscriminant() == 0) {
    echo "The equation has one roots  " . $problem->getRoot1();
} else {
   echo "The equation has no roots";
}