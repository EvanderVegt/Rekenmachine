<?php

$a = $_GET["getal1"];
$b = $_GET["getal2"];
$c = $_GET["operator"];


echo"<strong>" . $a . " " . $c . " " . $b . "</strong>";
echo "<br><br>";


switch ($c) {
    case "-":
        echo "Het resultaat is: " . "<strong>" . ($a - $b) . "</strong>";
        break;
    case "+":
        echo "Het resultaat is: " . "<strong>" . ($a + $b) . "</strong>";
        break;
    case "*":
        echo "Het resultaat is: " . "<strong>" . ($a * $b) . "</strong>";
        break;
    case "/":
        echo "Het resultaat is: " . "<strong>" . ($a / $b) . "</strong>";
        break;
    default:
        if ($c != "-" || "+" || "*" || "/")
            ;
        echo"Je kunt kiezen uit + - * /";
}
?>