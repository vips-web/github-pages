<?php $lang = 'en'; ?>
<?php require_once('../controller.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php require_once('../common/head.php'); ?>
    <meta property="og:url" content="<?php echo URL; ?>/en/">
    <meta name="keywords" content="VIPSTAR,VIPSTARCOIN,VIPS,VIP">
    <meta name="description"
          content="VIPSTARCOIN (VIPS) is a cryptocurrency originated from a community called 'VIP' in 5channel, the largest Japanese textboards.">
    <meta property="og:description"
          content="VIPSTARCOIN (VIPS) is a cryptocurrency originated from a community called 'VIP' in 5channel, the largest Japanese textboards.">
  </head>
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <?php require_once('../common/header.php'); ?>
    <?php require_once('../common/nav.php'); ?>
    <?php require_once('./about.php'); ?>
    <?php require_once('../common/feature.php'); ?>
    <?php require_once('./roadmap.php'); ?>
    <?php require_once('./holding.php'); ?>
    <?php require_once('../common/wallet.php'); ?>
    <?php require_once('../common/tool.php'); ?>
    <?php require_once('../common/exchange.php'); ?>
    <?php require_once('../common/news.php'); ?>
    <?php require_once('../common/partner.php'); ?>
    <?php require_once('../common/community.php'); ?>
    <?php require_once('../common/team.php'); ?>
    <?php require_once('../common/contact.php'); ?>
    <?php require_once('../common/footer.php'); ?>
    <?php require_once('../common/script.php'); ?>
  </body>
</html>
