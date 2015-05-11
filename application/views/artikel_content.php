<div class="panel panel-default">
  <div class="panel-body">
	<!-- Input Post -->
	<button class="btn btn-info" type="button" data-toggle="collapse" data-target="#inputCollapse" aria-expanded="false" aria-controls="inputCollapse">
	   <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
	</button>
	<br>
	<div class="collapse" id="inputCollapse">
	  <div class="well">
	    	<div class="cointainer">
	    			<form role="form" action="<?php echo base_url(); ?>post/add_new" method="post">
		    			<div class="input-group">
		    				<label>Title</label>
							<input type="text" class="form-control" name="title" size="100%" placeholder="Title">
						</div>
						<div class="input-group">
		    				<label>Content</label>
							<textarea class="form-control" name="content" style="width: 100%;" ></textarea>
						</div>
						<br>
						<div class="input-group">
		    				<label>Gambar</label>
							<input type="file" class="form-control" name="userfile[]" size="100%" placeholder="Title">
						</div>
						<button type="submit" class="btn btn-info btn-sm">Save</button>
					</form>	    		
	    	</div>
	  </div>
	</div>
	<!--  -->
	<br>
    <!-- Content Data -->
		<table class="table table-striped table-hover table-responsive">
			<thead>
				<tr>
					<th>No</th>
				  	<th>Judul</th>
				  	<th>Action</th>
				</tr>
		  	</thead>
		  	<tbody>
		  	<?php $no=1; for ($i=0; $i <count($show_article_data) ; $i++) { ?>
		  		<tr>
		  			<td><?php echo $no ?></td>
				  	<td><?php echo $show_article_data[$i]['judul']; ?></td>
				  	<td>
				  		<a href="<?php echo site_url("article/edit/". $show_article_data[$i]["id_artikel"]); ?>" class="btn btn-default btn-sm glyphicon glyphicon-pencil" role="button"></a>
				  		<a href="<?php echo site_url("article/delete/". $show_article_data[$i]["id_artikel"]); ?>" class="btn btn-default btn-sm glyphicon glyphicon-trash" role="button"></a>
				  	</td>
			  	</tr>
		  	<?php $no++;} ?>
		  	</tbody>
		</table>
	<!--  -->
  </div>
</div>