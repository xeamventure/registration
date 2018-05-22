<!-- header include start here -->
<?php
   $this->load->view('layout/header_menu');
?>
<!-- header include end here -->

<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="row">

      <div class="col-sm-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Relatives Details</h3>
            <div class="box-tools">
              <h5 style="color:red;">Please fill all mandatory fields *</h5>
            </div>

          </div>
          <div class="box-content alerts">
          </div>
          <div class="box-body">
            <br>
            <form id="NewRegistration"  method="post" class="form-horizontal" enctype="multipart/form-data" >

              <div class="col-md-12">&nbsp;</div>
              <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="" class="col-sm-4 control-label">Hospital receipt</label>
                    <div class="col-sm-8">
                      <input class="form-control" type="file" name="hospitalRec" id="hospitalRec" accept="image/*,application/pdf,application/vnd.ms-word,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                      <div class="text-info">file formats: pdf, doc, all images type</div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="" class="col-sm-4 control-label">Date of Birth <span class="red">*</span> </label>
                    <div class="col-sm-8">
                      <input class="form-control" id="" name="date_of_birth" type="date">
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="" class="col-sm-4 control-label">Date of Information <span class="red"><span class="red">*</span></span> </label>
                    <div class="col-sm-8">
                      <input class="form-control" id="" name="date_of_info" type="date">
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="" class="col-sm-4 control-label">Birth Time<span class="red">*</span> </label>
                    <div class="col-sm-8">
                      <input class="form-control" id="BirthTime" name="BirthTime" type="time">
                    </div>
                  </div>
                </div>

              </div>

              <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="" class="col-sm-4 control-label">Gender <span class="red">*</span></label>
                    <div class="col-sm-8">
                      <select class="form-control" name="gend">
            					<option value="">-- Select Gender --</option>
            					<option value="Male">Male</option>
            					<option value="Female">Female</option>
            					<option value="Other">Other</option>
            					</select>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="" class="col-sm-4 control-label">Child First Name </label>
                    <div class="col-sm-8">
                      <input class="form-control alphabets" id="" name="chfname" type="text">
                    </div>
                  </div>
                </div>

              </div>

              <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="" class="col-sm-4 control-label">Middle Name </label>
                    <div class="col-sm-8">
                      <input class="form-control alphabets" id="" name="chmname" type="text">
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="" class="col-sm-4 control-label">Last Name </label>
                    <div class="col-sm-8">
                      <input class="form-control alphabets" id="" name="chlname" type="text">
                    </div>
                  </div>
                </div>

              </div>

              <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="" class="col-sm-4 control-label">MTC Ragistration ID</label>
                    <div class="col-sm-8">
                      <input class="form-control"  name="mtc_regno" placeholder="" type="text">
                    </div>
                  </div>
                </div>
              </div>

              <div class="clearfix"></div>
              <div class="box-footer ">
                <button type="submit" class="btn btn-primary pull-right"> Register</button>
              </div>

            </form>

          </div>
          <!-- /.box-body -->
        </div>

      </div>


    </div>

  </section>
  <!-- /.content -->
</div>


 <!-- Footer include start here -->
 <?php
    $this->load->view('layout/footer');
 ?>
 <!-- Fooetr include end here -->
