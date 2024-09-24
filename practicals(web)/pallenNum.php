<?php
function isPalindrome($number) {
    $reversedNumber = strrev($number);
    return $number == $reversedNumber;
}

// Define the number you want to check
$numberToCheck = 12321;

// Check if the number is a palindrome
if (isPalindrome($numberToCheck)) {
    echo "$numberToCheck is a palindrome.";
} else {
    echo "$numberToCheck is not a palindrome.";
}
?>