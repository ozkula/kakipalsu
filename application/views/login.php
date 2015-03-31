<!DOCTYPE html>
<html>
  <head>
    <?php $this->load->view('global/head'); ?>
  </head>
  <body class="skin-blue">
    <div class="login-box">
      <div class="login-logo">
        <a href=""><b>Woolha</b>Backend</a>
      </div>
      <div class="login-box-body">
        <form action="" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Username"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">    
             
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>
      </div>
    </div>
      <?php $this->load->view('global/footer'); ?>
  </body>
</html>