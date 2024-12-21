<?php
// =============================
// List of your pages here
// =============================

$validCases = [
    'services' => 'services.php',
    //'contact' => 'contact.php',
];

// =============================
// Do not change anything bellow
// =============================

// Base path for the case files
$casesPath = __DIR__ . '/';

// Check if the case is valid and the corresponding file exists
if (array_key_exists($uri, $validCases) && file_exists($casesPath . $validCases[$uri])) {
    include $casesPath . $validCases[$uri];
} else {
    include $casesPath . 'default.php';
}
?>