<?php

  require("../Achievement.php");
  require("../Student.php");

  $objAchievement = new Achievement();
  $objStudent = new Student();

 ?>

<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Students Achievement</h3>
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
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
