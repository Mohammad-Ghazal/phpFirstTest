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



