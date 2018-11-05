<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Profile</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Profile</li>
        </ol>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- Row -->
<?php

$nim = $_GET['nim'];

require("../Student.php");
require("../Address.php");
require("../Achievement.php");

$objStudent = new Student();
$objAddress = new Address();
$objAchievement = new Achievement();

$student = $objStudent->showByNim($nim);
while ($row = $student->fetch(PDO::FETCH_OBJ)) {
?>
<div class="row">
    <!-- Column -->
    <div class="col-lg-4 col-xlg-3 col-md-5">
        <div class="card">
            <div class="card-body">
                <center class="m-t-30"> <img src="<?php echo $row->image; ?>" class="img-thumbnail" width="150" />
                    <h4 class="card-title m-t-10"><?php echo $row->name; ?></h4>
                    <h6 class="card-subtitle"><?php echo $row->sex;?></h6>
                    <h6 class="card-subtitle"><?php echo $row->nim; ?></h6>
                    <hr>
                </center>
            </div>
            <div class="card-body">
              <small class="text-muted">Email address </small><h6><?php echo $row->email; ?></h6>
              <small class="text-muted p-t-30 db">Phone</small><h6><?php echo $row->phone; ?></h6>
              <?php
              $address = $objAddress->showByNim($row->nim);
              while ($rowAddress = $address->fetch(PDO::FETCH_OBJ)) {
              ?>
              <small class="text-muted p-t-30 db">Address</small>
              <h6>Jalan: <?php echo $rowAddress->street; ?></h6>
              <h6>RT/RW: <?php echo $rowAddress->rt . "/" . $rowAddress->rw; ?></h6>
              <h6>Kelurahan: <?php echo $rowAddress->village; ?></h6>
              <h6>Kec: <?php echo $rowAddress->subdistrict; ?></h6>
              <h6>Keb/Kota: <?php echo $rowAddress->city; ?></h6>
              <?php
              }
               ?>
              <br/>
              <button class="btn btn-circle btn-secondary"><i class="fa fa-facebook"></i></button>
              <button class="btn btn-circle btn-secondary"><i class="fa fa-instagram"></i></button>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="card">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs profile-tab" role="tablist">
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">Profile</a> </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="profile" role="tabpanel">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-xs-12 b-r"> <strong>Full Name</strong>
                                <br>
                                <p class="text-muted"><?php echo $row->name; ?></p>
                            </div>
                            <div class="col-md-4 col-xs-12 b-r"> <strong>Mobile</strong>
                                <br>
                                <p class="text-muted"><?php echo $row->phone; ?></p>
                            </div>
                            <div class="col-md-4 col-xs-12 b-r"> <strong>Email</strong>
                                <br>
                                <p class="text-muted"><?php echo $row->email; ?></p>
                            </div>
                        </div>
                        <hr>
                        <p class="m-t-10">Place of birth : <?php echo $row->place_of_birth; ?></p>
                        <p>Date of birth : <?php echo $row->date_of_birth; ?></p>
                        <p>Religion : <?php echo $row->religion; ?></p>
                        <p>Blood Type : <?php echo $row->blood_type; ?></p>
                        <hr>
                        <?php
                        $achievements = $objAchievement->showByNim($row->nim);
                        while ($rowAchievement = $achievements->fetch(PDO::FETCH_OBJ)) {
                        ?>
                        <h4 class="font-medium m-t-30">Achievement</h4>
                        <hr>
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
                                          <h2 class="box-title"><?php echo $rowAchievement->achievement; ?></h2>
                                          <p class="box-subtitle"><?php echo $rowAchievement->competition; ?></p>
                                          <p><?php echo $rowAchievement->place_of_competition; ?></p>
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
        </div>
    </div>
    <!-- Column -->
</div>
<!-- Row -->

<?php
}
 ?>
<!-- ============================================================== -->
<!-- End PAge Content -->
