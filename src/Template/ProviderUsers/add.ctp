<div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add New User
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box box-primary">
            <!--            <div class="box-header with-border">
                            <h3 class="box-title">Quick Example</h3>
                        </div>-->
            <?= $this->Flash->render('auth'); ?>
            <?= $this->Form->create($provider_user); ?>
            <div class="box-body">
                <div class="form-group has-feedback">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name" value="">
                </div>
                <div class="form-group has-feedback">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" value="">
                </div>
                <div class="form-group has-feedback">
                    <label>Gender</label>
                    <input type="radio" name="gender" value="m">Gender
                    <input type="radio" name="gender" value="f">Female
                </div>
                <div class="form-group has-feedback">
                    <label>Qualification</label>
                    <select name="qualification" class="form-control">
                        <option>Select Qualification</option>
                        <option value="b">B.Tech</option>
                        <option value="d">Degree</option>
                        <option value="s">Inter</option>
                    </select>
                </div>
                <div class="form-group has-feedback">
                    <label>Date:</label>
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="birthdate" class="form-control pull-right" id="datepicker">
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Phone" value="">
                </div>
                <div class="form-group has-feedback">
                    <label>City</label>
                    <div class="form-control">
                        <input type="checkbox" name="city[]" value="hyderabad" >Hyderabad
                        <input type="checkbox" name="city[]" value="banglore" >Banglore
                        <input type="checkbox" name="city[]" value="chennai" >Chennai
                    </div>
                </div>
                <div class="fomr-group has-feedback">
                    <label>Address</label>
                    <textarea name="address" class="form-control" placeholder="Address"></textarea>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <p><?= $this->Html->link('<< Cancel', ['controller' => 'ProviderUsers', 'action' => 'index', $this->request->session()->read('Auth.User.id')]) ?></p>
            </div>
            <?= $this->Form->end(); ?>
        </div>
    </section>
</div>
