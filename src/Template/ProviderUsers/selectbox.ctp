 
<div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
             $('#selectOption').change(function(e) {
                 $('#payrollCode').val(e.target.value);
             })
        });
    </script>
    <section class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="form-group has-feedback">
                    <label></label>
                    <div class="input-group date">
                        <select name='selectOption' id='selectOption' class="form-control">
                            <option value=''>Select Option</option>
                            <option value='codeOne'>Option One</option>
                            <option value='codeTwo'>Option two</option>
                            <option value='codeThree'>Option three</option>
                            <option value='codeFour'>Option four</option>
                            <option value='codeFive'>Option five</option>
                        </select>
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <div class="input-group date">
                        <input type="text" name="payrollCode" class="form-control" id="payrollCode" readonly>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <p><?= $this->Html->link('<< Back', ['controller' => 'ProviderUsers', 'action' => 'index', $this->request->session()->read('Auth.User.id')]) ?></p>
            </div>
        </div>
    </section>
</div>
