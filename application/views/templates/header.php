<html>

<head>
  <?php echo '<title>News : ' . $title . '</title>' ?>
  <?php echo link_tag('assets/css/style.css'); ?>
</head>

<body>
  <div class="header">
    <div class="buttons">
      <a class='btn view' href="<?php echo site_url('news'); ?>">View All News Items</a>
      <a class="btn update" href="<?php echo site_url('news/router_create'); ?>">Create News Item</a>
    </div>
  </div>
  <h1>News : <?php echo $title; ?></h1>