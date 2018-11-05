<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <!-- <h3 class="text-themecolor m-b-0 m-t-0">Table Data table</h3> -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">User Administator</li>
        </ol>
    </div>
    <div class="col-md-7 col-4 align-self-center">
        <div class="d-flex m-t-10 justify-content-end">
            <div class="">
                <a href="?page=dashboard" class="btn btn-info btn-circle" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i> </a>
            </div>
        </div>
    </div>
</div>
<!-- sample modal content -->
<div id="addModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
              <!-- Row -->
              <div class="row">
                  <div class="col-lg-12">
                      <div class="card card-outline-info">
                          <!-- <div class="card-header">
                              <h4 class="m-b-0 text-white">Other Sample form</h4>
                          </div> -->
                          <div class="card-body">
                              <form action="pages/user/admin/insert.php" method="post">
                                  <div class="form-body">
                                      <div class="card">
                                          <div class="card-body">
                                              <h4 class="card-title">Image</h4>
                                              <input name="image" required type="file" id="input-file-now" class="dropify" />
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label class="control-label">Name</label>
                                                  <input type="text" required name="name" class="form-control" placeholder="Name">
                                              </div>
                                          </div>
                                          <!--/span-->
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label class="control-label">Email</label>
                                                  <input type="email" required name="email" class="form-control" placeholder="Email">
                                              </div>
                                          </div>
                                          <!--/span-->
                                      </div>
                                      <!--/row-->
                                      <div class="row">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label class="control-label">Username</label>
                                                  <input type="text" required name="username" class="form-control" placeholder="Username">
                                              </div>
                                          </div>
                                          <!--/span-->
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label class="control-label">Password</label>
                                                  <input type="password" required name="password" class="form-control" placeholder="password">
                                              </div>
                                          </div>
                                          <!--/span-->
                                      </div>
                                      <!--/row-->
                                  </div>
                                  <div class="form-actions">
                                      <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- Row -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data User Administator</h4>
                <!-- <h6 class="card-subtitle">Data table user</h6> -->
                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Fullname</th>
                            <th>Username</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          require("../Admin.php");
                          $objAdmin  = new Admin();
                          $admins   = $objAdmin->show();
                          $no = 1;
                          while ($row = $admins->fetch(PDO::FETCH_OBJ)) {
                          ?>
                          <tr>
                            <td><?php echo $no; ?></td>
                            <td><img src="<?php echo $row->image; ?>" alt=""style="height: 120px; width: auto;"></td>
                            <td><?php echo $row->name; ?></td>
                            <td><?php echo $row->username; ?></td>
                            <td class="text-nowrap">
                              <a class="btn btn-warning btn-circle" data-toggle="modal" data-target="#editModal<?php echo $row->id; ?>"> <i class="fa fa-pencil text-white"></i> </a>
                              <a class="btn btn-danger btn-circle" data-toggle="modal" data-target="#deleteModal<?php echo $row->id; ?>"> <i class="fa fa-close text-white"></i> </a>
                            </td>
                            <!-- sample modal content -->
                            <div id="editModal<?php echo $row->id; ?>" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myLargeModalLabel">Form Edit User Administator</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                          <!-- Row -->
                                          <div class="row">
                                              <div class="col-lg-12">
                                                  <div class="card card-outline-info">
                                                      <div class="card-body">
                                                        <?php
                                                        $admin = $objAdmin->showById($row->id);
                                                        while ($rowAdmin = $admin->fetch(PDO::FETCH_OBJ)) {
                                                        ?>
                                                        <form action="pages/user/admin/update.php?id=<?php echo $row->id; ?>" method="post" enctype="multipart/form-data">
                                                            <div class="form-body">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">Image</h4>
                                                                        <input type="file" required id="input-file-now" name="image" class="dropify" data-default-file="<?php echo $rowAdmin->image; ?>"/>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Name</label>
                                                                            <input type="text" required name="name" class="form-control" value="<?php echo $rowAdmin->name; ?>" placeholder="<?php echo $rowAdmin->name; ?>">
                                                                        </div>
                                                                    </div>
                                                                    <!--/span-->
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Email</label>
                                                                            <input type="email" required name="email" class="form-control" value="<?php echo $rowAdmin->email; ?>" placeholder="<?php echo $rowAdmin->email; ?>">
                                                                        </div>
                                                                    </div>
                                                                    <!--/span-->
                                                                </div>
                                                                <!--/row-->
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Username</label>
                                                                            <input type="text" required name="username" class="form-control" value="<?php echo $rowAdmin->username; ?>" placeholder="<?php echo $rowAdmin->username; ?>">
                                                                        </div>
                                                                    </div>
                                                                    <!--/span-->
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Password</label>
                                                                            <input type="password" required name="password" class="form-control" value="<?php echo $rowAdmin->password; ?>" placeholder="<?php echo $rowAdmin->password; ?>">
                                                                        </div>
                                                                    </div>
                                                                    <!--/span-->
                                                                </div>
                                                                <!--/row-->
                                                            </div>
                                                            <div class="form-actions">
                                                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                                            </div>
                                                        </form>
                                                        <?php
                                                        }
                                                         ?>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <!-- Row -->
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                            <!-- sample modal content -->
                            <div id="deleteModal<?php echo $row->id; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h5 class="modal-title text-danger">WARNING!!!</h5>
                                        </div>
                                        <div class="modal-body">
                                          <form action="pages/user/admin/delete.php?id=<?php echo $row->id; ?>" method="post" enctype="multipart/form-data">
                                              <h4 class="text-danger">Are you sure to delete this record?</h4>
                                              <div class="form-actions m-t-20">
                                                  <button type="submit" class="btn btn-danger"> <i class="fa fa-close"></i> Delete</button>
                                              </div>
                                          </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.modal -->
                          </tr>
                          <?php
                          $no++;
                          }
                          ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
