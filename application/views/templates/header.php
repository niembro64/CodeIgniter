<html>

<head>

  <?php echo '<title>News : ' . $title . '</title>' ?>
</head>

<body>

  <h1>News : <?php echo $title; ?></h1>

  <p><a href="<?php echo site_url('news'); ?>">View All News Items</a></p>
  <p><a href="<?php echo site_url('news/create'); ?>">Create News Item</a></p>