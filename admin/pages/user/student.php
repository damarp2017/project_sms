<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <!-- <h3 class="text-themecolor m-b-0 m-t-0">Table Data table</h3> -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">User Student</li>
        </ol>
    </div>
</div>
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
                <h4 class="card-title">Data User Student</h4>
                <!-- <h6 class="card-subtitle">Data table user</h6> -->
                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>NIM</th>
                            <th>Fullname</th>
                            <th>Username</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          require("../Student.php");
                          $student  = new Student();
                          $data     = $student->show();
                          $no = 1;
                          while ($row = $data->fetch(PDO::FETCH_OBJ)) {
                          ?>
                          <tr>
                            <td><?php echo $no; ?></td>
                            <td><img src="<?php echo $row->image; ?>" alt="" style="height: 100px; width: auto;"></td>
                            <td><?php echo $row->nim; ?></td>
                            <td><?php echo $row->name; ?></td>
                            <td><?php echo $row->username; ?></td>
                            <td class="text-nowrap">
                              <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-warning m-r-15"></i> </a>
                              <a href="#" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close text-danger"></i> </a>
                            </td>
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
