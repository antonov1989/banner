<?php

include './database/connection.php';
include './classes/user.php';

$conn = OpenCon();
//Connected Successfully

$user = new User();

$userIP = $user->getIpAddress();
$userAgent = $user->getUserAgent();
$url = ltrim($_GET['path'] ?? '', '/');

$response = [
    'success' => true,
    'result' => '',
];

if (!$userIP || !$userAgent || !$url) {
    $response['success'] = false;
    echo json_encode($response); exit;
}

$sql = "INSERT INTO statistic (ip_address, user_agent, view_date, page_url, views_count)
  VALUES (
    '" . $userIP . "',
    '" . $userAgent . "',
    NOW(),
    '" . $url . "',
    1
  )
  ON DUPLICATE KEY UPDATE views_count=views_count + 1, view_date=VALUES(view_date)";

$result = $conn->query($sql);

CloseCon($conn);

$response['result'] = './img/b1.jpg';
echo json_encode($response); exit;