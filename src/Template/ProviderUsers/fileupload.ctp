<div>
    <script>
        function upload() {
            var fileInfo = document.getElementById("fileUpload").files[0];
            alert('uploaded successfully');
//            console.log('fileInfo', fileInfo);
        }
    </script>
    <section class="content-header">
        <h1>
            Days Calculations
        </h1>
    </section>
    <section class="content">
        <div class="box box-primary">
            <form name="first" enctype=multipart/form-data method="post">
            <div class="box-body">
                <div class="form-group has-feedback">
                    <label>File :</label>
                    <div class="input-group date">
                        <input type="file" name="fileUpload" class="form-control pull-right" id="fileUpload" >
                    </div>
                </div>
                <div class="box-footer">
                    <button type="button" class="btn btn-primary" onclick="upload()">File Upload</button>
                </div>
            </div>
            <div class="box-footer">
                <p><?= $this->Html->link('<< Back', ['controller' => 'ProviderUsers', 'action' => 'index', $this->request->session()->read('Auth.User.id')]) ?></p>
            </div>
            </form>
        </div>
    </section>
</div>
