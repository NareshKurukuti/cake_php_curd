<div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        
        function totalDaysCount() {
            var startDate = new Date(document.getElementById("datepickerStart").value);
            var endDate = new Date(document.getElementById("datepickerEnd").value);
//            alert(endDate);

            // Set time to midday to avoid dalight saving and browser quirks
            startDate.setHours(12, 0, 0, 0);
            endDate.setHours(12, 0, 0, 0);

            var totalDays = Math.round((endDate - startDate) / 8.64e7);

            var wholeWeeks = totalDays / 7 | 0;

            var businessDays = wholeWeeks * 5;

            // If not even number of weeks, calc remaining weekend days
            if (totalDays % 7) {
                startDate.setDate(startDate.getDate() + wholeWeeks * 7);

                while (startDate < endDate) {
                    startDate.setDate(startDate.getDate() + 1);

                    // If day isn't a Sunday or Saturday, add to business days
                    if (startDate.getDay() != 0 && startDate.getDay() != 6) {
                        ++businessDays;
                    }
                }
            }
//            return days;
//            alert("Total Working Days:" + businessDays);
           document.getElementById('totalDays').value = businessDays;
        }
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
                        <input type="text" name="startDate" class="form-control pull-right startDate" id="datepickerStart">
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <label>End Date:</label>
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="endDate" class="form-control pull-right endDate" onchange="totalDaysCount()" id="datepickerEnd">
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <label>Total Days(excluding weekends):</label>
                    <div class="input-group date">
                        <input type="text" name="totalDays" class="form-control pull-right totalDays" id="totalDays">
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <p><?= $this->Html->link('<< Back', ['controller' => 'ProviderUsers', 'action' => 'index', $this->request->session()->read('Auth.User.id')]) ?></p>
            </div>
            <?= $this->Form->end(); ?>
        </div>
    </section>
</div>
