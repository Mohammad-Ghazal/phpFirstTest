<?php
function factorial ($nonNegativeInteger)
{
    if($nonNegativeInteger === 1)
    return 1;
    else
    return $nonNegativeInteger*factorial($nonNegativeInteger-1);
}

echo factorial(4);
?>