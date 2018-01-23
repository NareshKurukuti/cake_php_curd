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
                todayHighlight: true,
                startDate: new Date()
            })
            $('#endDateField').datepicker({
                autoclose: true
            })

            $('#startDateField').attr('required', true);
            $('#endDateField').attr('required', true);
            $('#mandatoryStartDateField').show();
            $('#mandatoryEndDateField').show();
            $("#activeOption").change(function (e) {
                $('#endDateField').val('');
                $('#startDateField').val('');
                if (e.target.value == 'y') {
                    $('#startDateField').attr('required', true);
                    $('#endDateField').attr('required', true);
                    $('#mandatoryStartDateField').show();
                    $('#mandatoryEndDateField').show();
                } else if (e.target.value == 'n') {
                    $('#startDateField').attr('required', true);
                    $('#endDateField').attr('required', false);
                    $('#mandatoryStartDateField').show();
                    $('#mandatoryEndDateField').hide();
                }  
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
                <div class="form-group   has-feedback">
                    <lable>Active:</lable>
                    <select name="activeOption" class="form-control pull-right" id="activeOption">
                        <option value="y">Yes</option>
                        <option value="n">No</option>
                    </select>
                </div>
                <div class="form-group has-feedback">
                    <label>Start Date:<span style="color:red;" id="mandatoryStartDateField">*</span></label>
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="startDateField" class="form-control pull-right startDateField" id="startDateField">
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <label>End Date:<span style="color:red;" id="mandatoryEndDateField">*</span></label>
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="endDateField" class="form-control pull-right endDateField" id="endDateField">
                    </div>
                </div>
                <div class="box-footer">
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>
            </div>
            <div class="box-footer">
                <p><?= $this->Html->link('<< Back', ['controller' => 'ProviderUsers', 'action' => 'index', $this->request->session()->read('Auth.User.id')]) ?></p>
            </div>
            <?= $this->Form->end(); ?>
        </div>
    </section>
</div>
