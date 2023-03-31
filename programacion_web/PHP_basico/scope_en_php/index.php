<?php

$outside_variable = "Esto es una variable global uno";

function my_function() 
{
    global $outside_variable;
    echo $outside_variable;
}
my_function();

$outside_variable = "Esto es una variable global";

function my_function_two() 
{
    echo $GLOBALS["outside_variable"];
}

echo "<br>";

my_function_two(); 