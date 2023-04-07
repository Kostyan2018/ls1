<?php

//task1
//generate two random integer variables
$one = rand(2, 50);
$two = rand(2, 50);
//show variables
var_dump($one , $two);
echo '<hr>';

//task2
//arithmetic
echo $one + $two;
echo "<br>" . $one - $two;
echo "<br>" . $one * $two;
echo "<br>" . $one / $two;
echo "<br>" . $one % $two;
echo "<br>";
//increment and decrement
echo "<br>" . $one++;
echo "<br>" . $one;
echo "<br>" . $two--;
echo "<br>" . $two;
echo '<hr>';

//task3
//show work of isset() function
var_dump(isset($one));
echo "<br>";
var_dump(isset($two));
echo "<br>";
var_dump(isset($three));
echo '<hr>';

//task4
//show work of strlen() function
$look = '"We’re releasing an API for accessing new AI models developed by OpenAI."';
echo strlen($look);
echo '<hr>';

