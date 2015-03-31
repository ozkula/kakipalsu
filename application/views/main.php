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
        <?php $this->load->view('content/main_content') ?>
      </div>
    </div>
      <?php $this->load->view('global/footer'); ?>
  </body>
</html>