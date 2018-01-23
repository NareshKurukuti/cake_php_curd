<div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit Profile
        </h1>
        <ol class="breadcrumb">
            <li><a href="javascript:void(0)"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit Profile</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box box-primary">
            <!--            <div class="box-header with-border">
                            <h3 class="box-title">Quick Example</h3>
                        </div>-->
            <?= $this->Flash->render('auth'); ?>
            <?= $this->Form->create($provider); ?>
            <div class="box-body">
                <div class="form-group">
                    <?= $this->Form->input('fullname', ['type' => 'text', 'label' => 'FullName', 'class' => 'form-control']); ?>
<!--                    <label>Full Name</label>
                    <input type="text" name="fullname" class="form-control" id="exampleInputEmail1" placeholder="FullName" value="">
                </div>-->
                <div class="form-group">
                    <?= $this->Form->input('email', ['type' => 'email', 'label' => 'Email', 'class' => 'form-control']); ?>
<!--                    <label>Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Email" value="">-->
                </div>
                <div class="form-group">
                    <?= $this->Form->input('phone', ['type' => 'text', 'label' => 'phone', 'class' => 'form-control']); ?>
<!--                    <lable>Phone</label>
                        <input type="text" class="form-control" name="phone" placeholder="Phone" value="">-->
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <p><?= $this->Html->link('<< Cancel', ['action' => 'dashboard']) ?></p>
            </div>
            <?= $this->Form->end(); ?>
        </div>
    </section>
</div>
