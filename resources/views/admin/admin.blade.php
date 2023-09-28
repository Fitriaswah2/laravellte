@include('admin/header')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data Admin
            <small>Kelola User</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="#">Admin</li>
            <li class="active">User</li>
        </ol>
    </section>

    <section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h2 class="box-title">
                        <!-- <a href="" class="btn btn-success"> tambah </a> -->
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                            tambah
                        </button>
                    </h2>
   
                    <div class="boo-tools">
                        <div class="input-group input-group-sm" style="width: 150px">
                        <input type="text" name="table-search" class="from-control pull-right" placeholder = "Search">

                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>id</th>
                            <th>username</th>
                            <th>date</th>
                            <th>status</th>
                            <th>aksi</th>
                        </tr>

                        <tr>
                            <td>183</td>
                            <td>matus</td>
                            <td>16 thn</td>
                            <td> <span class="label label-success"> approved </span></td>
                            <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    </section>
</div>


<div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">tambah data</h4>
              </div>
              <div class="modal-body">
              <div class="from-group">
                <label for="exampleInputEmail">email</label>
                <input type="email" name="email" class="from-control" id="exampleInputEmail" placeholder="Enter email">
              </div>

              <div class="from-group">
                <label for="exampleInputPassword">password</label>
                <input type="password" name="password" class="from-control" id="exampleInputPassword" placeholder="Password">
              </div>

              <div class="from-group">
              <label for="exampleInputPassword1">status</label>
              <select class="form-control" name='status'>
                <option value="1">aktif</option>
                <option value="2">tidak aktif</option>

              </select>
              </div>

              <div class="from-group">
                <label for="exampleInputFile">file foto</label>
                <input type="file" name="foto" id="exampleInputFile">

                <p class="help-block">foto max. 2mb</p>
              </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Simpan</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>


@include('admin/footer');
