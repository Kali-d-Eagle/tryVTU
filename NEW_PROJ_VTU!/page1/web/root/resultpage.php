<?php
header('Content-Type: application/json');

// Allowed CAPTCHA answers
$captchaAnswers = [
    1 => "NPC49z",
    2 => "McjvhA",
    3 => "6z5Ub7",
    4 => "AqT3d2"
];

// Get POST data
$usn = isset($_POST['lns']) ? strtoupper(trim($_POST['lns'])) : '';
$captchaCode = isset($_POST['captchacode']) ? trim($_POST['captchacode']) : '';
$captchaId = isset($_POST['captcha_id']) ? (int)$_POST['captcha_id'] : 0;

// Validate USN format
if (!preg_match('/^1SB23CS(\d{3})$/', $usn, $matches)) {
    echo json_encode(["success" => false, "message" => "Invalid USN format. Must be like: 1SB23CS045"]);
    exit;
}

$usnNumber = intval($matches[1]);
if ($usnNumber < 1 || $usnNumber > 200) {
    echo json_encode(["success" => false, "message" => "USN must be between 001 and 200."]);
    exit;
}

// Validate CAPTCHA
if (!isset($captchaAnswers[$captchaId]) || strcasecmp($captchaCode, $captchaAnswers[$captchaId]) !== 0) {
    echo json_encode(["success" => false, "message" => "Incorrect CAPTCHA."]);
    exit;
}

// Lookup student name
$studentMap = [
    1 => "A C NAMRUTHAH",
    2 => "ABHISHEK .",
    3 => "ABHISHEK ",
    4 => "ADARSH MALLAKAPPA MANDALI",
    5 => "AKASH .",
    6 => "AKSHATA NAGAPPA SHAMBEWAD",
    7 => "AMITHA SHRI G S",
    8 => "AMUTHA V",
    9 => "ANANYA R MELAGIRI",
    10 => "ANKITHA. M",
    11 => "ANUSH KANABARGI",
    12 => "ANUSHA S",
    13 => "ANUSHREE .",
    14 => "ARUN N P",
    15 => "ASHUTOSH KUMAR JHA",
    16 => "BALAJI K",
    17 => "BASAVARAJ K KUMBAR .",
    18 => "BASAVARAJA G",
    19 => "BASIREDDY TARUN KUMAR REDDY",
    20 => "BHAGYASHREE .",
    21 => "BHARGAVI L",
    22 => "DEVESH V",
    23 => "DEVIPRABA N",
    24 => "DHARSHAN D",
    25 => "DILIP M",
    26 => "DIVYADARSHINI M",
    27 => "ESHWARI B C",
    28 => "ESHWARI G",
    29 => "G SUMA G",
    30 => "GAGAN KUMAR M G",
    31 => "GOWTHAM M",
    32 => "GOWTHAMI K M",
    33 => "HARI PRASAD N",
    34 => "HARINEE DEVI V",
    35 => "HARIOM YADAV",
    36 => "HIRANMAI V",
    37 => "HRITHIK S",
    38 => "ISHWARYA R",
    39 => "JANANI M",
    40 => "JYOTHI M",
    41 => "KAGGALAKATTI SHASHIKUMAR",
    42 => "KALLURI BHANU PRASAD REDDY",
    43 => "KAVIYA M",
    44 => "KISHOR K",
    45 => "KISHOR KUMAR S",
    46 => "KONANAHALLI SHIVAKUMARGOWDA",
    47 => "KUSUMA R",
    48 => "LAKSHNA PRIYA G",
    49 => "MALLIKARJUN",
    50 => "MANASA V",
    51 => "MANJUNATH",
    52 => "MAYUR DEVUR",
    53 => "MD EHTHESHAM AAMIR",
    54 => "MIDHULA SREE J",
    55 => "MOHAMED WAAJID K",
    56 => "MOHAMMED SUFIYAN .",
    57 => "NEELA SAHEBAGOUDA RARADDI",
    58 => "NIDHARSHAN J",
    59 => "NIHAR PATEL G",
    60 => "NIKHIL K MAITI",
    61 => "NIKITA ."
];

$name = $studentMap[$usnNumber] ?? "Student";

// Success
echo json_encode([
    "success" => true,
    "roll" => $usnNumber,
    "name" => $name
]);
exit;
?>