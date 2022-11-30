<!-- <h2><?php echo $title; ?></h2> -->

<?php foreach ($news as $news_item) : ?>

  <h3><?php echo $news_item['id'] . " " . $news_item['title']; ?></h3>
  <?php echo $news_item['text']; ?>
  <br>
  <br>
  
  <a href="<?php echo site_url('news/' . $news_item['slug']); ?>"><button>View <?php echo $news_item['id'] ?></button></a>
  <a href="<?php echo site_url('news/delete/' . $news_item['id']); ?>"><button>Delete <?php echo $news_item['id'] ?></button></a>
  <a href="<?php echo site_url('news/update/' . $news_item['slug']); ?>"><button>Update <?php echo $news_item['id'] ?></button></a>
  <br>
  <br>
  
<?php endforeach; ?>