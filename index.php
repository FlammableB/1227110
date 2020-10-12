<?php
// echo "Hellooooo";

// $username = "Veselin";
// echo $username;

// $age = 22;
// echo $age;

// $isTrue = true;
// echo $isTrue."<br>";

// echo "My name is $username <br>";

// $usernameArray = ["Dancho", "Kuncho"];
// echo $usernameArray[0]."<br>";
// echo $usernameArray[1]."<br>";

// $usernameAsocArray = ["username" => "4o4o","age" => 12];
// echo $usernameAsocArray["age"]."<br>";

// for ($i = 0; $i < 2; $i++)
// {
//     echo $usernameArray[$i]."<br>";
// }

// foreach ($usernameAsocArray as $key => $item)
// {
//     echo $key." ".$item."<br>";
// }

// $username = "Ham";

// if ($username == "Sam") {
//     echo "$username";
// } elseif (2>1) {
//     echo "watermalone";
// } else {
//     echo "watermalooooneee";
// }

// switch ($username) {
//     case $username == "Ham":
//     echo "Ham is good.";
//     break;
//     case $username == "Sam":
//     echo "Sam is skid.";
//     break;
//     default:
//     echo "Nothing here :)";
//     break;
// }

// function printName($username) {
//     echo $username;
// }

// printName("Ham on top");

// function isThisSam($username)
// {
//     if ($username == "Sam") {
//         echo "This is Sam and he's black.";
//     } else {
//         echo "This is not Sam.";
//     }
// }
// isThisSam("Saam");

// function login($username, $password) {
//     if ($username != "wm" || $password != "sexy") {
//         echo "Wrong username and password detected.";
//         return;
//     }
//     echo "Logged in:"
//     header("Location: index.html");
// }

// if (isset($_POST) $$ !empty($_POST)) {
//     login($_POST["usernname"], $_POST["password"]);
// }
$adminUsername = "wm";
$adminPassword = "1234";

if (isset($_POST) && !empty($_POST)) {
    if (isset($_POST["username"]) && 
        !empty($_POST["username"]) && 
        isset($_POST["password"]) && 
        !empty($_POST["password"])
        ) {
            if ($_POST["username"] === $adminUsername &&
                $_POST["password"] === $adminPassword
            ) {
                header("Location: welcome.html");
            } else {
                header("Location: index.html");
        }
    } else {
    echo "Missing data";
    }
}