<?php
  if (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) {
    ini_set('display_errors', 1);
    define('URL', 'http://localhost:8888/vips-web');
  } else {
    ini_set('display_errors', 0);
    define('URL', 'https://www.vipstarcoin.jp');
  }

  if ($lang == 'ja' || $lang == 'vip') {
    $news_data = '/data/news.txt';
  } else {
    $news_data = '/data/news_en.txt';
  }
  $news_csv = new SplFileObject(__DIR__ . $news_data, 'r');
  $news_csv->setFlags(SplFileObject::READ_CSV);

  $news_list = [];
  $i = 0;
  foreach ($news_csv as $row) {
    $i++;
    if ($i > 12) break;
    if ($row === [null]) continue;
    $news_list[] = $row;
  }

  $discord_members_data = '/data/discord-members.json';
  $discord_members_json = file_get_contents(__DIR__ . $discord_members_data);
  $discord_members_array = json_decode($discord_members_json, true);
  $discord_members_count = $discord_members_array['count'];
?>
