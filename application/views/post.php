<!DOCTYPE html>
<html>
  <head>
    <?php $this->load->view('global/head'); ?>
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      <?php $this->load->view('global/headermenu'); ?>
      <?php $this->load->view('global/sidebar'); ?>
      <div class="content-wrapper">
        <section class="content-header">
          <h1>
            Post
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Post</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
        <?php //$this->load->view('content/post_all_view') ?>
        <?php $this->load->view('content/post_input_view') ?>
        </section>
      </div>
    </div>
      <?php $this->load->view('global/footer'); ?>
      <script type="text/javascript">
      $(function () {
        $(".textarea").wysihtml5();
        $('#postTable').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    
      </script>
  </body>
</html>