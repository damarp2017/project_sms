<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <!-- <h3 class="text-themecolor m-b-0 m-t-0">Table Data table</h3> -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">User</li>
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
                <h4 class="card-title">Data Table User</h4>
                <!-- <h6 class="card-subtitle">Data table user</h6> -->
                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>NIM</th>
                            <th>Name</th>
                            <th>Sex</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>City</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          require("../Student.php");
                          require("../Address.php");
                          $objStudent = new Student();
                          $objAddress = new Address();
                          $students = $objStudent->show();
                          while ($row = $students->fetch(PDO::FETCH_OBJ)){
                            $addresses = $objAddress->showByNim($row->nim);
                            while ($addressRow = $addresses->fetch(PDO::FETCH_OBJ)) {

                          ?>
                          <tr>
                            <td><?php echo $row->nim; ?></td>
                            <td><a href="?page=student-profile&nim=<?php echo $row->nim; ?>" data-toggle="tooltip" data-original-title="Click for more details"><?php echo $row->name; ?></a></td>
                            <td><?php echo $row->sex; ?></td>
                            <td><?php echo $row->phone; ?></td>
                            <td><?php echo $row->email; ?></td>
                            <td><?php echo $addressRow->city; ?></td>
                            <td>
                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                            </td>
                          </tr>
                        <?php
                            }
                          }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<!-- ============================================================== -->
