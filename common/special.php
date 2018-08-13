<?php 
  $special_url = URL . '/lp/gamescom/';
  if ($lang != 'ja' && $lang != 'vip') {
    $special_url .= 'en/';
  }
?>

<div style="text-align: center; margin-top: 100px;">
  <a href="<?php echo $special_url; ?>" 
     class="btn btn-warning btn-lg" 
     style="width: 250px; height: 60px; padding: 14px 16px; font-size: 22px; font-weight: bold; background-color: #ffc000; border-color: #ffc000;">
    IAB@gamescom&nbsp;&nbsp;<i class="fas fa-angle-right"></i>
  </a>
</div>
