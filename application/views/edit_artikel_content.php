<div class="panel panel-default">
  <div class="panel-body">
	<!--  -->
	<h4>Edit</h4>
	<br>
    <!-- Content Data -->
		<form role="form" action="<?php echo base_url(); ?>article/edit_true" method="post">
		<input type="hidden" name="post_id" value="<?php echo $show_article_data[0]['id_artikel']; ?>">
		    			<div class="input-group">
		    				<label>Title</label>
							<input type="text" class="form-control" name="title" size="100%" placeholder="Title" value="<?php echo $show_article_data[0]['judul']; ?>">
						</div>
						<div class="input-group">
		    				<label>Content</label>
							<textarea class="form-control" style="width: 100%;" name="content"><?php echo $show_article_data[0]['isi']; ?></textarea>
						</div>
						<br>
						<button type="submit" class="btn btn-info btn-sm">Save</button>
					</form>	    		
	<!--  -->
  </div>
</div>