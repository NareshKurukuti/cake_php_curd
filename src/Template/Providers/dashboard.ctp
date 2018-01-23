<div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small><?= $this->request->session()->read('Auth.User.fullname') ?></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>150</h3>

                        <p>Users</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users" aria-hidden="true"></i>
                    </div>
                    <a href="javascript:void(0)" class="small-box-footer">
                        <?= $this->Html->link('More info ', ['controller' => 'ProviderUsers', 'action' => 'index', $this->request->session()->read('Auth.User.id')]); ?>
                        <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <!-- ./col -->
            <!--            <div class="col-lg-3 col-xs-6">
                             small box 
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>53<sup style="font-size: 20px">%</sup></h3>
            
                                    <p>Bounce Rate</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>-->
            <!-- ./col -->
            <!--            <div class="col-lg-3 col-xs-6">
                             small box 
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>44</h3>
            
                                    <p>User Registrations</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>-->
            <!-- ./col -->
            <!--            <div class="col-lg-3 col-xs-6">
                             small box 
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>65</h3>
            
                                    <p>Unique Visitors</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>-->
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
    </section>
    <!-- /.content -->
</div>