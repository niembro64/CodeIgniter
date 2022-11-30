<!-- <h2><?php echo $title; ?></h2> -->

<?php foreach ($news as $news_item) : ?>
  <div class="article-preview">
    <h3><?php echo $news_item['id'] . " " . $news_item['title']; ?></h3>
    <p><?php echo $news_item['text']; ?></p>
    <div class="buttons">
      <a class='btn view' href="<?php echo site_url('news/router_view_one_by_slug/' . $news_item['slug']); ?>">View <?php echo $news_item['id'] ?></a>
      <a class='btn delete' href="<?php echo site_url('news/router_delete_one_id/' . $news_item['id']); ?>">Delete By ID <?php echo $news_item['id'] ?></a>
      <a class='btn delete' href="<?php echo site_url('news/router_delete_one_slug/' . $news_item['slug']); ?>">Delete By Slug <?php echo $news_item['id'] ?></a>
      <a class='btn update' href="<?php echo site_url('news/router_update_one_by_slug/' . $news_item['slug']); ?>">Update <?php echo $news_item['id'] ?></a>
    </div>
  </div>
  <br>
  <br>
<?php endforeach; ?>