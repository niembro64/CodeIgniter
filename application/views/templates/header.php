<html>

<head>
  <?php echo '<title>News : ' . $title . '</title>' ?>
  <?php echo link_tag('assets/css/style.css'); ?>
</head>

<body>

  <p><a href="<?php echo site_url('news'); ?>">View All News Items</a></p>
  <p><a href="<?php echo site_url('news/create'); ?>">Create News Item</a></p>
  <h1>News : <?php echo $title; ?></h1>