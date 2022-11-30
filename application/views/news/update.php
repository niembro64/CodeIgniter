<?php echo validation_errors(); ?>
<?php echo form_open('news/update/' . $news_item['id']); ?>
<div class="article-preview">

  <label for="title">Title:</label>
  <input type="text" name="title" value="<?php echo $news_item['title']; ?>" /><br />
  <label for="text">Text:</label>
  <textarea name="text"><?php echo $news_item['text']; ?></textarea><br />
  <input class='btn update' type="submit" name="submit" value="Update" />
  </form>
</div>