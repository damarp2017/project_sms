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
<?php

  require("../Student.php");
  require("../Achievement.php");
  require("../Address.php");

  $objStudent     = new Student();
  $objAchievement = new Achievement();
  $objAddress     = new Address();

  $nim      = $_GET['nim'];

  $students = $objStudent->showByNim($nim);

  while ($row = $students->fetch(PDO::FETCH_OBJ)) {
?>
<!-- Row -->
<div class="row">
    <!-- Column -->
    <div class="col-lg-4 col-xlg-3 col-md-5">
        <div class="card">
          <div class="card-body">
              <center class="m-t-30"> <img src="<?php echo $row->image; ?>" class="img-thumbnail  " width="150" height="auto" />
                  <h4 class="card-title m-t-10"><?php echo $row->name; ?></h4>
                  <h6 class="card-subtitle"><?php echo $row->sex; ?></h6>
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
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Setting</a> </li>
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
                        <h4 class="font-medium m-t-30">Achievement</h4>
                        <hr>
                        <?php
                        $achievements = $objAchievement->showByNim($nim);
                        while ($rowAchievement = $achievements->fetch(PDO::FETCH_OBJ)) {
                        ?>
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
                <div class="tab-pane" id="settings" role="tabpanel">
                    <div class="card-body">
                        <form class="form-horizontal form-material">
                          <!-- Row -->
                          <div class="row">
                              <div class="col-lg-12">
                                      <div class="card-body">
                                          <form action="#">
                                              <div class="form-body">
                                                  <h3 class="card-title">Person Info</h3>
                                                  <hr>
                                                  <div class="row p-t-20">
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                          <label class="control-label">NIM</label>
                                                          <input type="text" id="nim" class="form-control" value="<?php echo $row->nim; ?>" placeholder="<?php echo $row->nim; ?>">
                                                          <!-- <small class="form-control-feedback"> This is inline help </small> -->
                                                        </div>
                                                      </div>
                                                      <!--/span-->
                                                      <div class="col-md-6">
                                                        <div class="form-group has-danger">
                                                          <label class="control-label">Name</label>
                                                          <input type="text" id="name" class="form-control" placeholder="<?php echo $row->name; ?>" value="<?php echo $row->name; ?>">
                                                          <!-- <small class="form-control-feedback"> This field has error. </small> -->
                                                        </div>
                                                      </div>
                                                      <!--/span-->
                                                  </div>
                                                  <!--/row-->
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                      <div class="form-group has-success">
                                                        <label class="control-label">Sex</label>
                                                        <select class="form-control custom-select" name="sex">
                                                          <option <?php if($row->sex == "Male"){ echo "selected";} ?> value="Male">Male</option>
                                                          <option <?php if($row->sex == "Female"){ echo "selected";} ?> value="Female">Female</option>
                                                        </select>
                                                        <small class="form-control-feedback"> Select your gender </small>
                                                      </div>
                                                    </div>
                                                    <!--/span-->
                                                    <div class="col-md-6">
                                                      <div class="form-group">
                                                        <label class="control-label">Date of Birth</label>
                                                        <input type="date" class="form-control" value="<?php echo $row->date_of_birth; ?>" placeholder="dd/mm/yyyy">
                                                      </div>
                                                    </div>
                                                    <!--/span-->
                                                  </div>
                                                  <!--/row-->
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                      <div class="form-group has-danger">
                                                        <label class="control-label">Place of Birth</label>
                                                        <input type="text" id="name" class="form-control" placeholder="<?php echo $row->place_of_birth; ?>" value="<?php echo $row->place_of_birth; ?>">
                                                        <!-- <small class="form-control-feedback"> This field has error. </small> -->
                                                      </div>
                                                    </div>
                                                    <!--/span-->
                                                    <div class="col-md-6">
                                                      <div class="form-group has-success">
                                                        <label class="control-label">Blood Type</label>
                                                        <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                                          <option <?php if($row->blood_type == "O"){ echo "selected";} ?> value="Category 1">O</option>
                                                          <option <?php if($row->blood_type == "A"){ echo "selected";} ?> value="Category 2">A</option>
                                                          <option <?php if($row->blood_type == "B"){ echo "selected";} ?> value="Category 3">B</option>
                                                          <option <?php if($row->blood_type == "AB"){ echo "selected";} ?> value="Category 4">AB</option>
                                                        </select>
                                                        <small class="form-control-feedback"> Select your blood type </small>
                                                      </div>
                                                    </div>
                                                    <!--/span-->
                                                  </div>
                                                  <!--/row-->
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                      <div class="form-group has-success">
                                                        <label class="control-label">Email</label>
                                                        <input type="email" id="email" class="form-control" placeholder="<?php echo $row->email; ?>" value="<?php echo $row->email; ?>">
                                                        <!-- <small class="form-control-feedback"> This field has error. </small> -->
                                                      </div>
                                                    </div>
                                                    <!--/span-->
                                                    <div class="col-md-6">
                                                      <div class="form-group has-success">
                                                        <label class="control-label">Religion</label>
                                                        <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                                          <option <?php if($row->religion == "Islam"){ echo "selected";} ?> value="Category 1">Islam</option>
                                                          <option <?php if($row->religion == "Kristen"){ echo "selected";} ?> value="Category 2">Kristen</option>
                                                          <option <?php if($row->religion == "Protestan"){ echo "selected";} ?> value="Category 3">Protestan</option>
                                                          <option <?php if($row->religion == "Budha"){ echo "selected";} ?> value="Category 4">Budha</option>
                                                          <option <?php if($row->religion == "Hindu"){ echo "selected";} ?> value="Category 5">Hindu</option>
                                                        </select>
                                                        <small class="form-control-feedback"> Select your religion </small>
                                                      </div>
                                                    </div>
                                                    <!--/span-->
                                                  </div>
                                                  <!--/row-->
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                          <label class="control-label">Phone</label>
                                                          <input type="text" id="phone" class="form-control" value="<?php echo $row->phone; ?>" placeholder="<?php echo $row->phone; ?>">
                                                          <!-- <small class="form-control-feedback"> This is inline help </small> -->
                                                        </div>
                                                      </div>
                                                      <!--/span-->
                                                      <div class="col-md-6">
                                                        <div class="form-group has-success">
                                                          <label class="control-label">Facebook</label>
                                                          <input type="text" id="facebook" class="form-control" value="<?php echo $row->facebook; ?>" placeholder="<?php echo $row->facebook; ?>">
                                                          <!-- <small class="form-control-feedback"> This field has error. </small> -->
                                                        </div>
                                                      </div>
                                                      <!--/span-->
                                                  </div>
                                                  <!--/row-->
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                          <label class="control-label">Instagram</label>
                                                          <input type="text" id="instagram" class="form-control" value="<?php echo $row->instagram; ?>" placeholder="<?php echo $row->instagram; ?>">
                                                          <!-- <small class="form-control-feedback"> This is inline help </small> -->
                                                        </div>
                                                      </div>
                                                      <!--/span-->
                                                  </div>
                                                  <!--/row-->
                                                  <?php
                                                  $addresses = $objAddress->showByNim($nim);
                                                  while ($rowAddress = $addresses->fetch(PDO::FETCH_OBJ)) {
                                                  ?>
                                                  <h3 class="box-title m-t-40">Address</h3>
                                                  <hr>
                                                  <div class="row">
                                                      <div class="col-md-12 ">
                                                          <div class="form-group">
                                                              <label>Street</label>
                                                              <input type="text" value="<?php echo $rowAddress->street; ?>" placeholder="<?php echo $rowAddress->street; ?>" class="form-control">
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="row">
                                                      <div class="col-md-4">
                                                          <div class="form-group">
                                                              <label>RT</label>
                                                              <input type="text" value="<?php echo $rowAddress->rt; ?>" placeholder="<?php echo $rowAddress->rt; ?>" class="form-control">
                                                          </div>
                                                      </div>
                                                      <!--/span-->
                                                      <div class="col-md-4">
                                                          <div class="form-group">
                                                              <label>RW</label>
                                                              <input type="text" value="<?php echo $rowAddress->rw; ?>" placeholder="<?php echo $rowAddress->rw; ?>" class="form-control">
                                                          </div>
                                                      </div>
                                                      <!--/span-->
                                                      <div class="col-md-4">
                                                          <div class="form-group">
                                                              <label>Post Code</label>
                                                              <input type="text" value="<?php echo $rowAddress->post_code; ?>" placeholder="<?php echo $rowAddress->post_code; ?>" class="form-control">
                                                          </div>
                                                      </div>
                                                      <!--/span-->
                                                  </div>
                                                  <!--/row-->
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="form-group">
                                                              <label>Village</label>
                                                              <input type="text" value="<?php echo $rowAddress->village; ?>" placeholder="<?php echo $rowAddress->village; ?>" class="form-control">
                                                          </div>
                                                      </div>
                                                      <!--/span-->
                                                      <div class="col-md-6">
                                                          <div class="form-group">
                                                              <label>Subdistrict</label>
                                                              <input type="text" value="<?php echo $rowAddress->subdistrict; ?>" placeholder="<?php echo $rowAddress->subdistrict; ?>" class="form-control">
                                                          </div>
                                                      </div>
                                                      <!--/span-->
                                                  </div>
                                                  <!--/row-->
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="form-group">
                                                              <label>City</label>
                                                              <input type="text" value="<?php echo $rowAddress->city; ?>" placeholder="<?php echo $rowAddress->city; ?>" class="form-control">
                                                          </div>
                                                      </div>
                                                      <!--/span-->
                                                      <div class="col-md-6">
                                                          <div class="form-group">
                                                              <label>Province</label>
                                                              <input type="text" value="<?php echo $rowAddress->province; ?>" placeholder="<?php echo $rowAddress->province; ?>" class="form-control">
                                                          </div>
                                                      </div>
                                                      <!--/span-->
                                                  </div>
                                                  <!--/row-->
                                                  <?php
                                                  }
                                                   ?>
                                              </div>
                                              <div class="form-actions">
                                                  <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                                  <button type="button" class="btn btn-inverse">Cancel</button>
                                              </div>
                                          </form>
                                      </div>
                              </div>
                          </div>
                          <!-- Row -->
                        </form>
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
