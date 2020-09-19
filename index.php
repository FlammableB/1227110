<?php
echo "Hellooooo";

$username = "Veselin";
echo $username;

$age = 22;
echo $age;

$isTrue = true;
echo $isTrue."<br>";

echo "My name is $username <br>";

$usernameArray = ["Dancho", "Kuncho"];
echo $usernameArray[0]."<br>";
echo $usernameArray[1]."<br>";

$usernameAsocArray = ["username" => "4o4o","age" => 12];
echo $usernameAsocArray["age"]."<br>";

for ($i = 0; $i < 2; $i++)
{
    echo $usernameArray[$i]."<br>";
}

foreach ($usernameAsocArray as $key => $item)
{
    echo $key." ".$item."<br>";
}