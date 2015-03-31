<div class="box">
  <table class="table table-bordered table-hover dataTable" id="postTable">
    <thead>
      <tr>
        <td>No</td>
        <td>Judul</td>
        <td>Kategori</td>
        <td>Action</td>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1; for ($i=0; $i <count($allpost) ; $i++) { ?>
        <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $allpost[$i]['judul']; ?></td>
          <td><?php echo $allpost[$i]['kategori']; ?></td>
          <td>
            <a href="<?php echo base_url(); ?>post/edit/<?php echo $allpost[$i]['id_post'];?>" class="btn btn-block btn-primary btn-flat">Edit</a>
            <a href="<?php echo base_url(); ?>post/delete/<?php echo $allpost[$i]['id_post'];?>" class="btn btn-block btn-danger btn-xs">Delete</a>
          </td>
        </tr>
      <?php $no++;} ?>
    </tbody>
  </table>
</div>