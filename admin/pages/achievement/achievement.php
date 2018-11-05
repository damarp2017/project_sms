<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <!-- <h3 class="text-themecolor m-b-0 m-t-0">Table Data table</h3> -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Achievement</li>
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
                <h4 class="card-title">Data Table Achievement</h4>
                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Team Name</th>
                                <th>Achievement</th>
                                <th>Competition</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                          require("../Student.php");
                          require("../Achievement.php");
                          $objAchievement = new Achievement();
                          $objStudent = new Student();
                          $achievements = $objAchievement->show();
                          while ($row = $achievements->fetch(PDO::FETCH_OBJ)) {
                          ?>
                          <tr>
                            <?php
                            $student = $objStudent->showByNim($row->nim);
                            while ($rowStudent = $student->fetch(PDO::FETCH_OBJ)) {
                            ?>
                            <td><?php echo $rowStudent->name; ?></td>
                            <?php
                            }
                             ?>
                            <td><?php echo $row->team_name; ?></td>
                            <td><?php echo $row->achievement; ?></td>
                            <td><?php echo $row->place_of_competition; ?></td>
                            <td><a href="?page=achievement-detail&id=<?php echo $row->id; ?>" data-toggle="tooltip" data-original-title="Click for more details">More Details</a></td>
                          </tr>
                          <?php
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
