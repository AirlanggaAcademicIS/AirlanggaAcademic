        <div class="col-md-6">
          <!-- /.box -->
          <!-- general form elements disabled -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Input Kategori Capaian Program Studi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form">
                <!-- text input -->
                <div class="form-group">
                  <label>Nama Kategori</label>
                  <input type="text" class="form-control" placeholder="">
                </div>
              </form>
              <button type="button" class="btn btn-primary" style="float:right;" data-toggle="modal" data-target="#myModal">Tambah</button>
            </div>
            <!-- /.box-body -->
          </div>
        </div>

        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Daftar Kategori Capaian Prodi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table">
                <tbody><tr>
                  <th style="width: 10px">No</th>
                  <th>Nama Kategori Capaian Prodi</th>
                  <th style="width: 40px"></th>
                  <th style="width: 40px"></th>
                </tr>
                <tr>
                  <td>1.</td>
                  <td>Nama Kategori</td>
                  <td><button type="button" class="btn btn-block btn-success btn-xs">Edit</button></td>
                  <td><button type="button" class="btn btn-block btn-danger btn-xs">Delete</button></td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Nama Kategori</td>
                  <td><button type="button" class="btn btn-block btn-success btn-xs">Edit</button></td>
                  <td><button type="button" class="btn btn-block btn-danger btn-xs">Delete</button></td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>Nama Kategori</td>
                  <td><button type="button" class="btn btn-block btn-success btn-xs">Edit</button></td>
                  <td><button type="button" class="btn btn-block btn-danger btn-xs">Delete</button></td>
                </tr>
                <tr>
                  <td>4.</td>
                  <td>Nama Kategori</td>
                  <td><button type="button" class="btn btn-block btn-success btn-xs">Edit</button></td>
                  <td><button type="button" class="btn btn-block btn-danger btn-xs">Delete</button></td>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body" style="text-align: center;">
        <p>Kategori capaian program studi berhasil ditambah.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>