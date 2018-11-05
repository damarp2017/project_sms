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
<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-header">
                <h4 class="m-b-0 text-white">Edit Achievement</h4>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Certificate</h4>
                            <input type="file" id="input-file-now" data-default-file="../assets/images/certificate/sertifikat.jpg" class="dropify" />
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
