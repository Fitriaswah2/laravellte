@include('admin/header')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data Berita
            <small>Kelola Berita</small>
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
                            <th>No</th>
                            <th>Judul</th>
                            <th>Tanggal</th>
                            <th>Isi</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>

                        <tr>
                            <td><?php
                                $i = 1;
                                
                                echo $i;
                                $i++;
                            ?></td>
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
                <h4 class="modal-title">Tambah data</h4>
              </div>
              <div class="modal-body">
              <div class="from-group">
                <label for="exampleInputEmail">Judul</label>
                <input type="text" name="judul" class="form-control"placeholder="Enter Judul Berita">
              </div>
              <div class="from-group">
                <label for="exampleInputPassword">Tanggal</label>
                <input type="date" name="tanggal" class="form-control">
              </div>
              <div class="from-group">
                <label for="exampleInputPassword">Isi</label>
                <textarea name="isi" class="form-control"></textarea>
              </div>
              <div class="from-group">
                <label for="exampleInputPassword">Kategori</label>
                <input type="text" name="kategori" class="form-control">
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
