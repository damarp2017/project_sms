<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Detail</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Achievement Detail</li>
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
require("../Achievement.php");
require("../Student.php");

$id             = $_GET['id'];

$objAchievement = new Achievement();
$objStudent     = new Student();

$achievement    = $objAchievement->showById($id);

while ($row = $achievement->fetch(PDO::FETCH_OBJ)) {
?>
<!-- Row -->
<div class="row">
    <!-- Column -->
    <div class="col-md-12">
        <div class="card">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs profile-tab" role="tablist">
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">Achievement Detail</a> </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="profile" role="tabpanel">
                    <div class="card-body">
                        <div class="row el-element-overlay">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1"> <img src="<?php echo $row->certificate; ?>" alt="user" />
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a class="btn default btn-outline image-popup-vertical-fit" href="<?php echo $row->certificate; ?>"><i class="icon-magnifier"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="el-card-content">
                                          <h2 class="box-title"><?php echo $row->achievement; ?></h2>
                                          <p class="box-subtitle"><?php echo $row->competition; ?></p>
                                          <p><?php echo $row->place_of_competition; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-xs-6 b-r"> <strong>Name</strong>
                                <br>
                                <?php
                                $student = $objStudent->showByNim($row->nim);
                                while ($rowStudent = $student->fetch(PDO::FETCH_OBJ)) {
                                ?>
                                <p class="text-muted"><?php echo $rowStudent->name; ?></p>
                                <?php
                                }
                                 ?>
                            </div>
                            <div class="col-md-4 col-xs-6 b-r"> <strong>Team Name</strong>
                                <br>
                                <p class="text-muted"><?php echo $row->team_name; ?></p>
                            </div>
                            <div class="col-md-4 col-xs-6 b-r"> <strong>Competition Name</strong>
                                <br>
                                <p class="text-muted"><?php echo $row->competition; ?></p>
                            </div>
                            <div class="col-md-4 col-xs-6 b-r"> <strong>Region</strong>
                                <br>
                                <p class="text-muted"><?php echo $row->place_of_competition; ?></p>
                            </div>
                            <div class="col-md-4 col-xs-6 b-r"> <strong>Date</strong>
                                <br>
                                <p class="text-muted"><?php echo $row->date_of_competition; ?></p>
                            </div>
                            <div class="col-md-4 col-xs-6 br"> <strong>Prize</strong>
                                <br>
                                <p class="text-muted">Rp. <?php echo $row->prize; ?></p>
                            </div>
                        </div>
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
