<?php
header('Content-Type: application/json; charset=utf-8');

$username = '';
if (isset($_POST['username'])) {
  $username = trim($_POST['username']);
}

// check is the value is abc
if ($username === 'abc') {
  echo json_encode(['status' => 'verified']);
} else {
  echo json_encode(['status' => 'error']);
}
exit;
