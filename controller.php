<?php
  define('URL', 'https://www.vipstarcoin.jp');

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
