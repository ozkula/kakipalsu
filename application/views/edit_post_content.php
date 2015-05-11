<div class="panel panel-default">
  <div class="panel-body">
	<!--  -->
	<h4>Edit</h4>
	<br>
    <!-- Content Data -->
		<form role="form" action="<?php echo base_url(); ?>post/edit_true" method="post">
		<input type="hidden" name="post_id" value="<?php echo $show_post_data[0]['id_post']; ?>">
		    			<div class="input-group">
		    				<label>Title</label>
							<input type="text" class="form-control" name="title" size="100%" placeholder="Title" value="<?php echo $show_post_data[0]['judul']; ?>">
						</div>
						<div class="input-group">
		    				<label>Content</label>
							<textarea class="form-control" style="width: 100%;" name="content"><?php echo $show_post_data[0]['isi']; ?></textarea>
						</div>
						<br>
						<div class="form-group">
						  <label>Select Category</label>
						  <select class="form-control" name="category">
							  <?php for ($i=0; $i <count($show_category) ; $i++) { ?>
							  	<option value = "<?php echo $show_category[$i]['trig']; ?>" <?php if ($show_post_data[0]["trig"] == $show_category[$i]["trig"]):?> selected="selected" <?php endif; ?>><?php echo $show_category[$i]['kategori']; ?></option>
							  <?php } ?>
						  </select>
						</div>
						<button type="submit" class="btn btn-info btn-sm">Save</button>
					</form>	    		
	<!--  -->
  </div>
</div>