<?php

// $x = 15;
// if ($x % 2 == 0) {
//     echo "x is an even number";
// } else {
//     echo "x is an odd number";
// }

$Marks = 80;
if ($Marks >= 80) {
    echo "You got an A+";
} elseif ($Marks >= 70) {
    echo "You got an A";
} elseif ($Marks >= 60) {
    echo "You got an A-";
} elseif ($Marks >= 50) {
    echo "You got an B";
} elseif ($Marks >= 40) {
    echo "You got an C";
} else {
    echo "Fail";
}
?>

<br>

<?php

for ($i = 0; $i  < 50; $i++) {
    echo $i . "<br>";
}


// Prime Number
$Value = 7;
for ($i = 2; $i < $Value; $i++) {
    if ($Value % $i == 0) {
        echo "Not Prime";
        break;
    } 
}


?>