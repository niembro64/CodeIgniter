<!-- <h2><?php echo $title; ?></h2> -->

<?php foreach ($news as $news_item) : ?>

  <h3><?php echo $news_item['id'] . " " . $news_item['title']; ?></h3>
  <?php echo $news_item['text']; ?>
  <div class="main">
  </div>
  <p><a href="<?php echo site_url('news/' . $news_item['slug']); ?>">View article</a></p>

<?php endforeach; ?>