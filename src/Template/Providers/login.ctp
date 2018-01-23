<!DOCTYPE html>
<html>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="javascript:void(0)"><b>Provider</b>Login</a>
            </div>
            <div class="login-box-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <?= $this->Form->create(); ?>
                    <div class="form-group has-feedback">
                        <?= $this->Form->input('email', array('placeholder'=> 'Email')); ?>
                    </div>
                    <div class="form-group has-feedback">
                        <?= $this->Form->input('password', array('placeholder'=> 'Password')); ?>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-xs-4">
                            <!--<button type="submit" class="btn btn-primary btn-block btn-flat"></button>-->
                            <?= $this->Form->button(__('Login'));  ?>
                        </div>
                        <!-- /.col -->
                    </div>
                <?= $this->Form->end(); ?>
                <a href="javascript:void(0)" class="text-center"><?= $this->Html->link('Register a new Provider', ['action' => 'registration']) ?></a><br>
                                            <a href="javascript:void(0)" class="text-center"><?= $this->Html->link('Forgot Password', ['controller' => 'Providers', 'action' => 'forgotPassword']) ?></a>
            </div>
        </div>
        <!-- /.login-box -->
        <!-- jQuery 3 
        <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
         Bootstrap 3.3.7 
        <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
         iCheck 
        <script src="../../plugins/iCheck/icheck.min.js"></script>
        <script>
          $(function () {
            $('input').iCheck({
              checkboxClass: 'icheckbox_square-blue',
              radioClass: 'iradio_square-blue',
              increaseArea: '20%' // optional
            });
          });
        </script>-->
    </body>
</html>
