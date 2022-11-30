<?php echo validation_errors(); ?>
<?php echo form_open('news/router_create'); ?>
<div class="article-preview">
  <label for="title">Title:</label>
  <input type="text" name="title" /><br />
  <label for="text">Text:</label>
  <textarea name="text"></textarea><br />
  <input class='btn update' type="submit" name="submit" value="Add" />
  </form>
</div>