<?php
header("Content-Type: application/json");
require_once "../login/connect.php";

$name    = isset($_POST["name"]) ? trim($_POST["name"]) : "";
$email   = isset($_POST["email"]) ? trim($_POST["email"]) : "";
$subject = isset($_POST["subject"]) ? trim($_POST["subject"]) : "";
$message = isset($_POST["message"]) ? trim($_POST["message"]) : "";

if ($name === "" || $email === "" || $subject === "" || $message === "") {
    echo json_encode(["success" => false, "message" => "All fields are required."]);
    exit;
}

$messages = json_load('contact_messages.json');

$messages[] = [
    "name"       => $name,
    "email"      => $email,
    "subject"    => $subject,
    "message"    => $message,
    "created_at" => date('Y-m-d H:i:s')
];

json_save('contact_messages.json', $messages);

echo json_encode(["success" => true, "message" => "Message sent successfully."]);
exit;
?>
