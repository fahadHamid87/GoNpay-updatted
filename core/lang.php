<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
    header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
    exit;
}

$lang = $_SESSION['lang'] ?? 'en';
$language = $lang;

if($lang === 'en') {
    $language = 'English';
} else if ($lang === 'lt') {
    $language = 'Lithuanian';
} else if ($lang === 'ee') {
    $language = 'Estonian';
} else if ($lang === 'lv') {
    $language = 'Latvian';
}

$basePath = __DIR__ . '/../'; // project root
$translations = json_decode(file_get_contents("$basePath/lang/$lang.json"), true);
$en = json_decode(file_get_contents("$basePath/lang/en.json"), true);

function t($key) {
    global $translations, $en;
    return $translations[$key] ?? $en[$key] ?? $key;
}

$flags = [
    'en' => 'gb',
    'lt' => 'lt',
    'lv' => 'lv',
    'ee' => 'ee'
];
$currentFlag = $flags[$lang] ?? 'gb';