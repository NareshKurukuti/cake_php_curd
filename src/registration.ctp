<!DOCTYPE html>
<html>
    <body class="hold-transition register-page">
        <div class="register-box">
            <div class="register-logo">
                <a href="javascript:void(0)"><b>Provider</b>Registration</a>
            </div>
            <div class="register-box-body">
                <p class="login-box-msg">Register a new Provider</p>
                <?= $this->Flash->render('auth'); ?>
                <?= $this->Form->create(); ?>
                <div class="form-group has-feedback">
                    <?= $this->Form->input('fullname', array('placeholder' => 'FullName', 'label' => '')) ?>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <?= $this->Form->input('email', array('placeholder'=> 'Email','label' => '')); ?>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <?= $this->Form->input('password', array('placeholder'=> 'Password','label' => '')); ?>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <?= $this->Form->input('confirmPassword', array('type' => 'password','placeholder'=> 'Confirm Password','label' => '')); ?>
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <?= $this->Form->input('phone', array('placeholder'=> 'Phone','label' => '')); ?>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                    </div>
                </div>
                <!--</form>-->
                <?= $this->Form->end(); ?>
                <a href="javascript:void(0)" class="text-center"><?= $this->Html->link('I already have a provider', ['action' => 'login']) ?></a>
            </div>
        </div>
        <!-- /.register-box -->

        <!-- jQuery 3 -->
        <!--<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
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
