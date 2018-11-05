<?php
require("../Student.php");
require("../Achievement.php");
$objStudent = new Student();
$objAchievement = new Achievement();
$countStudent = $objStudent->count();
$countAchievement = $objAchievement->count();
 ?>
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor">Dashboard</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <!-- Column -->
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-row">
                    <a data-toggle="tooltip" data-original-title="Click for more details" href="?page=student"><div class="round round-lg align-self-center round-warning"><i class="icon-graduation"></i></div></a>
                    <div class="m-l-10 align-self-center">
                        <h3 class="m-b-0 font-light"><?php echo $countStudent; ?></h3>
                        <h5 class="text-muted m-b-0">Total Students</h5></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-row">
                  <a data-toggle="tooltip" data-original-title="Click for more details" href="?page=achievement"><div class="round round-lg align-self-center round-primary"><i class="icon-like"></i></div></a>
                    <div class="m-l-10 align-self-center">
                        <h3 class="m-b-0 font-lgiht"><?php echo $countAchievement; ?></h3>
                        <h5 class="text-muted m-b-0">Total Achievement</h5></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
<!-- Row -->
<hr>

<!-- row -->
<div class="row">
    <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
              <h4 class="m-b-0 text-white">Newest Achievement</h4>
          </div>
          <?php
          $achievements = $objAchievement->show();
          while ($rowAchievement = $achievements->fetch(PDO::FETCH_OBJ)) {
          ?>
          <div class="card-body">
              <div class="row el-element-overlay">
                  <div class="col-md-12">
                      <div class="card">
                          <div class="el-card-item">
                              <div class="el-card-avatar el-overlay-1"> <img src="<?php echo $rowAchievement->certificate; ?>" alt="user" />
                                  <div class="el-overlay">
                                      <ul class="el-info">
                                          <li><a class="btn default btn-outline image-popup-vertical-fit" href="<?php echo $rowAchievement->certificate; ?>"><i class="icon-magnifier"></i></a></li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="el-card-content">
                                <?php
                                $student = $objStudent->showByNim($rowAchievement->nim);
                                while ($rowStudent = $student->fetch(PDO::FETCH_OBJ)) {
                                ?>
                                <h1 class="box-title"><?php echo $rowStudent->name; ?></h1>
                                <?php
                                }
                                 ?>
                                <h1 class="box-title"><?php echo $rowAchievement->team_name; ?></h1>
                                <h2 class="box-title"><?php echo $rowAchievement->achievement; ?></h2>
                                <p class="box-subtitle"><?php echo $rowAchievement->competition; ?></p>
                                <p><?php echo $rowAchievement->place_of_competition; ?></p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <?php
          }
           ?>
        </div>
    </div>
</div>
<!-- End row -->
