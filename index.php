<?php

//echo "Hello PHP 8";
//print "Hello php 8";

//
////02323 ,#2
////$user_name assign username.
//$user_name = 'Jon Doe';
//
////double or float
//$amount = 20.00;
//
////int
//
//$amount = 20;
//
//var_dump($amount);
//
////echo $user_name;
//var_dump($user_name);
//echo "<br/>";
//
////boolean
//$isActive = true;
//
//$amount = '100';

//if ($isActive) {
//    echo "User is active. <br/>";
//} else {
//    echo "User is not active.";
//}
//
////numeric array
//
///*
// *
// * fsdfjslkdfs
// *
// * fdafsldf
// *
// * */
//
//$user_list = array('Sohel', 'jon doe', 'sumon selim', 'shuvo');
//
//
////for ($i = 0; $i <= 3; $i++) {
////    echo $user_list[$i] .'<br/>';
////}
////$i = 0;
////while ($i < 3) {
////    echo $user_list[$i] . '<br/>';
////    $i++;
////}
//
//
//$user_list = [
//    [
//        'profile' => 'url',
//        'name' => 'Jon doe',
//        'email' => 'jon@gmail.com'
//    ],
//    [
//        'profile' => 'url',
//        'name' => 'Jon doe',
//        'email' => 'jon@gmail.com'
//    ],
//    [
//        'profile' => 'url',
//        'name' => 'Jon doe',
//        'email' => 'jon@gmail.com'
//    ]
//];
//
//echo $user_list[0]['profile'];
//
//
//foreach ($user_list as $user) {
//
//
//}
//
//echo "<pre>";
//print_r($user_list);
//var_dump($user_list);
//
//echo "</pre>";
////arithmetic operator
//
////+ -, *, /
//
//$total = 10;
//
//$first_name = 'Jon';
//
//$first_name .= ' Doe';
//
//echo $first_name;
//
//$total += 5;
//
//echo $total;
//$first_name = 'Hello';
//
//$last_name = 'Hell1';
//
//$full_name = $first_name . $last_name;
//echo $full_name;
$i = 0;

echo $i--;
echo $i;

$role = 'writer';

$num1 = 10;
$num2 = '10';

var_dump($num1 === $num2);

echo "<br/>";
function sayHi(string $name)
{

    echo "$name Hi<br/>";
}

sayHi(42342);


function cal(int $num1, int $num2)
{
    echo $num2 + $num2;
}

cal(10, 10);

function checkRole(string $role): string
{
    if ($role == 'admin') {
        return 'admin';
    } elseif ($role == 'writer') {
        return 'writer';
    } else {
        echo 'Unauthorized';
    }
}

$aflsdl = checkRole($role);

var_dump($aflsdl);