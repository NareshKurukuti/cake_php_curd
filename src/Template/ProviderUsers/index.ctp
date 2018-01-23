<div class="">
    <section class="content-header">
        <h1>Users</h1>
        <!--        <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">Tables</a></li>
                    <li class="active">Data tables</li>
                </ol>-->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header with-border">
                        <div class="col-sm-3">

                        </div> 
<!--                        <div class="col-sm-5">
                            <div id="example1_filter" class="dataTables_filter">
                                <form method="post" id="providers_data">
                                    <center><label>
                                            Search:

                                            <input class="form-control input-sm" placeholder="Search..." aria-controls="example1" name="data[Provider][search]" type="search" style="width:100%;" value="">
                                            <button id="search-btn" class="btn btn-flat" type="submit" name="search" style="border:1px solid #d9d9d9;padding:5px 10px;margin-left:-4px;font-size:13px;margin-top:-2px;">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </label>
                                    </center>
                                </form>
                            </div>
                        </div> -->
                        <div class="col-sm-4">
                            <!--<input type="hidden" id="data_search" name="search_val" value="0">-->
                            <a class="btn btn-block btn-success btn-sm pull-left" style="color:#fff;width:120px;float:right;background-color:#3c8dbc;" href="/provider-users/add"><i class="fa fa-fw fa-plus-circle"></i> Add User </a>
                        </div>
                    </div>
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <td>Id</td>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($provider_user as $user): ?>
                                    <tr>
                                        <td><?= $user->id ?></td>
                                        <td><?= $user->name ?></td>
                                        <td>
                                            <?= $user->email ?>
                                        </td>
                                        <td>
                                            <?= $this->Html->link('Edit', ['controller' => 'ProviderUsers','action' => 'edit', $user->id]) ?>
                                            <span>|</span>
                                            <?=
                                            $this->Form->postLink(
                                                    'Delete', ['controller' => 'ProviderUsers', 'action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete user with id # {0}?', $user->id)])
                                            ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })
</script>