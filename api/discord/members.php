<?php
if (isset($_POST['count'])) {
  $count = $_POST['count'];
} else {
  echo json_encode(['status' => 'error']);
  exit();
}

if (!ctype_digit((string)$count)) {
  echo json_encode(['status' => 'error']);
  exit();
}

file_put_contents(
  '/home/vipsvips/www/jp_domain/data/discord-members.json',
  json_encode(['count' => $count])
);

echo json_encode(['status' => 'success']);
