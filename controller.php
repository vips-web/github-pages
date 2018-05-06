<?php
  if (strpos($_SERVER['HTTP_HOST'], 'www.vipstarcoin.jp') !== false) {
    ini_set('display_errors', 0);
    define('URL', 'https://www.vipstarcoin.jp');
  } else {
    ini_set('display_errors', 1);
    define('URL', 'http://localhost:8888/vips-web');
  }

  $csv = new SplFileObject(__DIR__ . '/data/news.txt', 'r');
  $csv->setFlags(SplFileObject::READ_CSV);

  $news_list = [];
  $i = 0;
  foreach ($csv as $row) {
    $i++;
    if ($i > 12) break;
    if ($row === [null]) continue;
    $news_list[] = $row;
  }
?>
