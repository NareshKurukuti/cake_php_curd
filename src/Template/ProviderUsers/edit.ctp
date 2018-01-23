<div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit User
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box box-primary">
            <!--            <div class="box-header with-border">
                            <h3 class="box-title">Quick Example</h3>
                        </div>-->
            <?= $this->Flash->render('auth'); ?>
            <?= $this->Form->create(); ?>
            <div class="box-body">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name" value="<?= $provider_user->name ?>">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" value="<?= $provider_user->email ?>">
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <input type="radio" name="gender" value="m"<?php if($provider_user->gender =='m') { echo 'checked'; } ?> >Gender
                    <input type="radio" name="gender" value="f"<?php if($provider_user->gender =='f' ) { echo 'checked'; } ?>>Female
                </div>
                <div class="form-group">
                    <label>Qualification</label>
                    <select name="qualification" class="form-control">
                        <option value="">Select Qualification</option>
                        <option value="b"<?php if($provider_user->qualification =='b') { echo 'selected'; }?>>B.Tech</option>
                        <option value="d"<?php if($provider_user->qualification =='d') { echo 'selected'; }?>>Degree</option>
                        <option value="s"<?php if($provider_user->qualification =='s') { echo 'selected'; }?>>Inter</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Date:</label>
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="birthdate" class="form-control pull-right" id="datepicker" value="<?= $provider_user->birthdate ?>">
                    </div>
                </div>
<!--                <div class="form-group">
                    <label>Date of Birth</label>
                    <input type="text" name="birthdate" class="form-control" id="exampleInputEmail1" placeholder="DD-MM-YYYY" value="<?= $provider_user->birthdate ?>">
                </div>-->
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Phone" value="<?= $provider_user->phone ?>">
                </div>
                <div class="form-group">
                    <label>City</label>
                    <div class="form-control">
                        <input type="checkbox" name="city[]" value="hyderabad"<?php 
                                                                              $cityArray = explode(',', $provider_user->city);
                                                                              for($i=0; $i<count($cityArray); $i++) {
                                                                                  if($cityArray[$i] == 'hyderabad') {
                                                                                      echo 'checked';
                                                                                  }
                                                                              }
                                                                              ?> >Hyderabad
                        <input type="checkbox" name="city[]" value="banglore"<?php 
                                                                              $cityArray = explode(',', $provider_user->city);
                                                                              for($j=0; $j<count($cityArray); $j++) {
                                                                                  if($cityArray[$j] == 'banglore') {
                                                                                      echo 'checked';
                                                                                  }
                                                                              }
                                                                              ?> >Banglore
                        <input type="checkbox" name="city[]" value="chennai"<?php 
                                                                              $cityArray = explode(',', $provider_user->city);
                                                                              for($o=0; $o<count($cityArray); $o++){
                                                                                  if($cityArray[$o] == 'chennai') {
                                                                                      echo 'checked';
                                                                                  }
                                                                              }
                                                                              ?> >Chennai
                    </div>
                </div>
                <div class="fomr-group">
                    <label>Address</label>
                    <textarea name="address" class="form-control" placeholder="Address"><?= $provider_user->address; ?></textarea>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <p><?= $this->Html->link('<< Cancel', ['controller' => 'ProviderUsers', 'action' => 'index',$this->request->session()->read('Auth.User.id')]) ?></p>
            </div>
            <?= $this->Form->end(); ?>
        </div>
    </section>
</div>
