<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Forms</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Form</li>
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
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
            <h4 class="m-b-0 text-white">Newest Achievement</h4>
        </div>
        <?php
        require("../Achievement.php");
        require("../Student.php");
        $objAchievement = new Achievement();
        $objStudent = new Student();
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
<!-- Row -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="m-b-0 text-white">New Achievement</h4>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Certificate</h4>
                            <input type="file" id="input-file-now" class="dropify" />
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row -->
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Competition Name</label>
                                    <input type="text" id="competition" class="form-control" placeholder="Enter Competition Name">
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label c  lass="control-label">Region</label>
                                    <input type="text" id="region" class="form-control form-control-danger" placeholder="Enter Place of Competition">
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label class="control-label">Achievement</label>
                                  <input type="text" id="achievement" class="form-control" placeholder="Enter Achievement">
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label class="control-label">Date</label>
                                  <input type="text" class="form-control" placeholder="Choose Date" id="mdate">
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Team Name</label>
                                    <input type="text" id="competition" class="form-control" placeholder="Enter Team Name">
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label c  lass="control-label">Prize</label>
                                    <input type="text" id="prize" class="form-control" placeholder="Enter Prize">
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!-- /row -->
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                        <button type="button" class="btn btn-inverse">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Row -->
