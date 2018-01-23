<div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Change Password
        </h1>
        <ol class="breadcrumb">
            <li><a href="javascript:void(0)"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Change Password</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="box box-primary">
            <?= $this->Flash->render('auth'); ?>
            <?= $this->Form->create($provider); ?>
            <div class="box-body">
                <div class="form-group has-feedback">
                    <!--<label>Old Password</label>-->
                    <?= $this->Form->input('old_password', ['type' => 'password', 'label' => 'Old Password', 'class' => 'form-control']); ?>
                </div>
                <div class="form-group has-feedback">
<!--                    <label>Password</label>-->
                    <?= $this->Form->input('password1', ['type' => 'password', 'label' => 'Password', 'class' => 'form-control']); ?>
                </div>
                <div class="form-group has-feedback">
<!--                    <label>Repeat Password</label>-->
                    <?= $this->Form->input('password2', ['type' => 'password', 'label' => 'Repeat Password', 'class' => 'form-control']); ?>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <p><?= $this->Html->link('<< Back', ['action' => 'dashboard']) ?></p>
            </div>
            <?= $this->Form->end(); ?>
        </div>
    </section>
</div>