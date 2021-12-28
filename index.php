<?php
function factorial($nonNegativeInteger)
{
    if ($nonNegativeInteger === 1)
        return 1;
    else
        return $nonNegativeInteger * factorial($nonNegativeInteger - 1);
}

print_r(factorial(4));




function reverse($string)
{
    return strrev($string);
}
echo "<br>";
print_r(strrev('hello'));



function insertIntoArray($item, $array, $index)
{

    $array[$index] = $item;
    return $array;
}
echo "<br>";
print_r(insertIntoArray('apple', ['banana', 'orange'], 2));




function naturalOrdering($array)
{
    sort($array, SORT_NATURAL);
    return $array;
}
echo "<br>";
$numbers = [1, 20, 3, 2];
print_r(naturalOrdering($numbers));



function largestNumber($num1, $num2, $num3)
{
    $array = [$num2, $num3];
    $largest = $num1;
    for ($index = 0; $index < 2; $index++) {
        if ($largest < $array[$index])
            $largest = $array[$index];
    }

    return $largest;
}
echo "<br>";
print_r(largestNumber(1, 20, 3));


function isLeap($year)
{
    echo " ";
    // || year % 100 !== 0 || year % 400 === 0)
    if ($year % 4 !== 0)
        return "false";
    else if ($year % 100 !== 0)
        return "true";
    else if ($year % 400 !== 0)
        return "false";
    else return "true";
};

echo "<br>";
print_r(isLeap(2000)); // => true
print_r(isLeap(1603)); // => false
print_r(isLeap(2004)); // => true
print_r(isLeap(2021)); // => false




function sumOfIntegers($num1, $num2)
{
    $sum = 0;
    for ($counter = $num1; $counter <= $num2; $counter++) {
        $sum += $counter;
    }

    return $sum;
}
echo "<br>";
print_r(sumOfIntegers(0, 30));


function firstWord($sentence)
{

    $sentence = explode(" ", $sentence);
    return  $sentence[0];
}
echo "<br>";
print_r(firstWord('hello world'));



function printLetters()
{
    for ($x = ord('a'); $x <= ord('z'); $x++) {
        echo chr($x);
        echo " ";
    }
}
echo "<br>";
printLetters();
