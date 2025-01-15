<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        // Si le nombre est un multiple de 3 et de 5
        echo "FizzBuzz<br>";
    } elseif ($i % 3 == 0) {
        // Si le nombre est un multiple de 3
        echo "Fizz<br>";
    } elseif ($i % 5 == 0) {
        // Si le nombre est un multiple de 5
        echo "Buzz<br>";
    } else {
        // Si le nombre n'est ni un multiple de 3 ni de 5
        echo "$i<br>";
    }
}
?>
