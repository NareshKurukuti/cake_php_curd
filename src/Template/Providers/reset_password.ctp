<!DOCTYPE html>
<html>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="javascript:void(0)"><b>Reset</b>Password</a>
            </div>
            <div class="login-box-body">
                <?= $this->Form->create($provider); ?>
                <div class="form-group has-feedback">
                    <?= $this->Form->input('new_password', array('type' => 'password', 'placeholder' => 'New Password')); ?>
                </div>
                <div class="form-group has-feedback">
                    <?= $this->Form->input('confirm_password', array('type' => 'password', 'placeholder' => 'Confirm Password')); ?>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <?= $this->Form->button(__('Submit')); ?>
                    </div>
                </div>
                <?= $this->Form->end(); ?>
                <a href="javascript:void(0)" class="text-center"><?= $this->Html->link('I already have a provider', ['action' => 'login']) ?></a>
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
