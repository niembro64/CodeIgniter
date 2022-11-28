<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>

<label for="title">News Title:</label>
<input type="text" name="title" /><br />

<label for="text">What Happened:</label>
<textarea name="text"></textarea><br />

<input type="submit" name="submit" value="Add" />

</form>