<style>
    /* current input value background color */
    .ui-datepicker-current-day
    {
        background: #83C948 !important
    }
    /* today's background color */
    .ui-datepicker-today 
    {
        background: #83C948 !important
    }
</style>
<div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#startDateField").change(function () {
                $('#endDateField').val('');
                $('#endDateField').datepicker('setStartDate', truncateDate(new Date()));
            });

            function truncateDate() {
                var currentDate = new Date($("#startDateField").val());
                var nextDate = new Date(currentDate);
                nextDate.setDate(currentDate.getDate() + 1);
                nextDate.toLocaleDateString();

                return nextDate;
            }
            $('#startDateField').datepicker({
                autoclose: true,
                todayHighlight: true
            })
            $('#endDateField').datepicker({
                autoclose: true
            })

            $("#endDateField").change(function () {
                var f = new Date();
                var presentDate = (f.getMonth() + 1) + '/' + f.getDate() + '/' + f.getFullYear()
                if (($('#endDateField').val()) < presentDate) {
                    $('#effectiveOption').val('n');
                } else {
                    $('#effectiveOption').val('y');
                }
//                if ($("#endDateField").val() == '') {
//                    $('#effectiveOption').val('');
//                } else {
//                    
//                }
            });
        });
    </script>
    <section class="content-header">
        <h1>
            Days Calculations
        </h1>
    </section>
    <section class="content">
        <div class="box box-primary">
            <?= $this->Flash->render('auth'); ?>
            <?= $this->Form->create(); ?>
            <div class="box-body">
                <div class="form-group has-feedback">
                    <label>Start Date:</label>
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="startDateField" class="form-control pull-right startDateField" id="startDateField">
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <label>End Date:</label>
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="endDateField" class="form-control pull-right endDateField" id="endDateField">
                    </div>
                </div>
                <div class="form-group   has-feedback">
                    <lable>Effective option:</lable>
                    <select name="effectiveOption" class="form-control pull-right" id="effectiveOption">
                        <option value="y">Yes</option>
                        <option value="n">No</option>
                    </select>
                </div>
                <!--                <div class="box-footer">
                                    <button  class="btn btn-primary" onclick="totalDaysCount()">Total Days</button>
                                </div>-->
            </div>
            <div class="box-footer">
                <p><?= $this->Html->link('<< Back', ['controller' => 'ProviderUsers', 'action' => 'index', $this->request->session()->read('Auth.User.id')]) ?></p>
            </div>
            <?= $this->Form->end(); ?>
        </div>
    </section>
</div>
