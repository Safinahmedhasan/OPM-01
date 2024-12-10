<?php
// 1. Number Classifier
echo "Enter a number: ";
$input = trim(fgets(STDIN));

if (!is_numeric($input)) {
    echo "Please enter a valid number!";
    exit;
}

$number = floatval($input);

if ($number > 0) {
    echo "The number {$number} is positive.";
} elseif ($number < 0) {
    echo "The number {$number} is negative.";
} else {
    echo "The number is zero.";
}



// 2. Basic Authentication System
define('CORRECT_USERNAME', 'admin');
define('CORRECT_PASSWORD', 'secret123');


echo "=== Login System ===\n";
echo "Enter username: ";
$input_username = trim(fgets(STDIN));

echo "Enter password: ";
$input_password = trim(fgets(STDIN));

if ($input_username === CORRECT_USERNAME && $input_password === CORRECT_PASSWORD) {
    echo "\nLogin Successful!\n";
    echo "Welcome, " . CORRECT_USERNAME . "!\n";
} else {
    echo "\nLogin Failed!\n";
    
    if ($input_username !== CORRECT_USERNAME) {
        echo "Invalid username.\n";
    }
    if ($input_password !== CORRECT_PASSWORD) {
        echo "Invalid password.\n";
    }
}


// 3. Simple Electricity Bill Calculator
echo "Enter electricity units: ";
$units = trim(fgets(STDIN));


if ($units <= 100) {
    $bill = $units * 5;    
} elseif ($units <= 200) {
    $bill = $units * 10;   
} else {
    $bill = $units * 15;   
}

// Show result
echo "Total Bill: $" . $bill;


// 4. Temperature Converter
echo "Temperature Converter\n";
echo "1. Celsius to Fahrenheit\n";
echo "2. Fahrenheit to Celsius\n";
echo "Choose option (1 or 2): ";


$choice = trim(fgets(STDIN));


echo "Enter temperature: ";
$temp = trim(fgets(STDIN));


if (!is_numeric($temp)) {
    echo "Please enter a valid number!";
    exit;
}


switch ($choice) {
    case '1':
        $result = ($temp * 9/5) + 32;
        echo "$temp°C = $result°F";
        break;
        
    case '2':
        $result = ($temp - 32) * 5/9;
        echo "$temp°F = $result°C";
        break;
        
    default:
        echo "Invalid choice! Please select 1 or 2";
}

?>