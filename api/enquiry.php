<?php
/**
 * eShikshaHub — API Endpoint for Leads & Enquiries
 */
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Method not allowed']);
    exit;
}

$name = trim($_POST['name'] ?? $_POST['your_name'] ?? '');
$mobile = trim($_POST['phone'] ?? $_POST['mobile'] ?? $_POST['your_mobile'] ?? '');
$email = trim($_POST['email'] ?? '');
$course = trim($_POST['course'] ?? '');
$university = trim($_POST['university'] ?? '');
$message = trim($_POST['message'] ?? '');
$source = trim($_POST['source'] ?? 'General Enquiry');

// Friend's info if referral
$friend_name = trim($_POST['friend_name'] ?? '');
$friend_mobile = trim($_POST['friend_mobile'] ?? '');

if (empty($name) || empty($mobile)) {
    echo json_encode(['status' => 'error', 'message' => 'Name and Mobile number are required']);
    exit;
}

// Clean phone digits
$phoneDigits = preg_replace('/\D/', '', $mobile);
if (strlen($phoneDigits) < 10) {
    echo json_encode(['status' => 'error', 'message' => 'Please enter a valid 10-digit mobile number']);
    exit;
}

// Store lead in local storage log
$lead = [
    'timestamp' => date('Y-m-d H:i:s'),
    'name' => $name,
    'mobile' => $mobile,
    'email' => $email,
    'course' => $course,
    'university' => $university,
    'message' => $message,
    'friend_name' => $friend_name,
    'friend_mobile' => $friend_mobile,
    'source' => $source,
    'ip' => $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1'
];

$leadsFile = __DIR__ . '/leads.json';
$leads = [];
if (file_exists($leadsFile)) {
    $existing = @file_get_contents($leadsFile);
    if ($existing) $leads = json_decode($existing, true) ?: [];
}
$leads[] = $lead;
@file_put_contents($leadsFile, json_encode($leads, JSON_PRETTY_PRINT));

echo json_encode([
    'status' => 'success',
    'message' => 'We will call you shortly.',
    'lead_id' => count($leads)
]);
