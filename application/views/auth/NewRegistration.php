<!-- header include start here -->
<?php
   $this->load->view('layout/header');
?>
<!-- header include end here -->

<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="row">

      <div class="col-sm-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Citizen Registration</h3>
            <div class="box-tools">
              <h5 style="color:red;">Please fill all mandatory fields *</h5>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="<?php echo $class ?>"><?php echo $message ?></div>
          </div>
          <div class="box-body">

            <?php
             $hidden = array('Roll' => 'user', 'IsActive' => '1','CreatedDate' => date('d M y'));
             echo form_open('',['class'=>'form-horizontal'],$hidden) ?>

              <div class="col-md-12">
                <div class="col-md-4">
                  <div class="form-group">
                    <div class="col-sm-12">
                      <label for="">Purpose <span class="red">*</span></label>
                      <?php
                        $options = array(
                          ''=> 'Select Purpose',
                          'education'=> 'Education',
                          'job'=> 'Job'
                        );
                       echo form_dropdown('Purpose', $options, set_value('Purpose'),"class='form-control'") ?>
                      <?php echo form_error('Purpose'); ?>
                    </div>
                  </div>
                </div>

              </div>

              <div class="col-md-12">
                <div class="col-md-4">
                  <div class="form-group">
                    <div class="col-sm-12">
                      <label for="FirstName">First Name <span class="red">*</span></label>
                      <?php echo form_input(['name'=>'FirstName','class'=>'form-control','value'=>set_value('FirstName')]) ?>
                      <?php echo form_error('FirstName'); ?>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <div class="col-sm-12">
                      <label for="MiddleName">Middle Name</label>
                      <?php echo form_input(['name'=>'MiddleName','class'=>'form-control','value'=>set_value('MiddleName')]) ?>
                      <?php echo form_error('MiddleName'); ?>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <div class="col-sm-12">
                      <label for="LastName">Last Name <span class="red">*</span></label>
                      <?php echo form_input(['name'=>'LastName','class'=>'form-control','value'=>set_value('LastName')]) ?>
                      <?php echo form_error('LastName'); ?>
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-md-12">
                <div class="col-md-4">
                  <div class="form-group">
                    <div class="col-sm-12">
                      <label for="Gender">Gender <span class="red">*</span></label>
                      <?php
                        $gender = array(
                          ''=> 'Select Gender',
                          'Male'=> 'Male',
                          'Female'=> 'Female',
                          'Other'=> 'Other'
                        );
                       echo form_dropdown('Gender', $gender, set_value('Gender'),"class='form-control'") ?>
                      <?php echo form_error('Gender'); ?>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <div class="col-sm-12">
                      <label for="DateOfBirth">Date of Birth <span class="red">*</span></label>
                      <?php echo form_input(['name'=>'DateOfBirth','type'=>'date','class'=>'form-control','value'=>set_value('DateOfBirth')]) ?>
                      <?php echo form_error('DateOfBirth'); ?>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <div class="col-sm-12">
                      <label for="UID">UID (Aadhar Number) <span class="red">*</span></label>
                      <?php echo form_input(['name'=>'UID','class'=>'form-control','value'=>set_value('UID')]) ?>
                      <?php echo form_error('UID'); ?>
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-md-12">
                <div class="col-md-4">
                  <div class="form-group">
                    <div class="col-sm-12">
                      <label for="MobileNo">Mobile No <span class="red">*</span></label>
                      <?php echo form_input(['name'=>'MobileNo','class'=>'form-control','value'=>set_value('MobileNo')]) ?>
                      <?php echo form_error('MobileNo'); ?>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <div class="col-sm-12">
                      <label for="AlternateMobileNo">Alternate Mobile No</label>
                      <?php echo form_input(['name'=>'AlternateMobileNo','class'=>'form-control','value'=>set_value('AlternateMobileNo')]) ?>
                      <?php echo form_error('AlternateMobileNo'); ?>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <div class="col-sm-12">
                      <label for="EmailID">Email-ID <span class="red">*</span></label>
                      <?php echo form_input(['name'=>'EmailID','class'=>'form-control','value'=>set_value('EmailID')]) ?>
                      <?php echo form_error('EmailID'); ?>
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-md-12">
                <div class="col-md-4">
                  <div class="form-group">
                    <div class="col-sm-12">
                      <label for="MotherFirstName ">Mother's First Name <span class="red">*</span></label>
                      <?php echo form_input(['name'=>'MotherFirstName','class'=>'form-control','value'=>set_value('MotherFirstName')]) ?>
                      <?php echo form_error('MotherFirstName'); ?>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <div class="col-sm-12">
                      <label for="MotherMiddleName">Mother's Middle Name</label>
                      <?php echo form_input(['name'=>'MotherMiddleName','class'=>'form-control','value'=>set_value('MotherMiddleName')]) ?>
                      <?php echo form_error('MotherMiddleName'); ?>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <div class="col-sm-12">
                      <label for="CastCertificateNo">Cast Certificate No <span class="red">*</span></label>
                      <?php echo form_input(['name'=>'CastCertificateNo','class'=>'form-control','value'=>set_value('CastCertificateNo')]) ?>
                      <?php echo form_error('CastCertificateNo'); ?>
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-md-12">
                <div class="col-md-4">
                  <div class="form-group">
                    <div class="col-sm-12">
                      <label for="UserName">User Name <span class="red">*</span></label>
                      <?php echo form_input(['name'=>'UserName','class'=>'form-control','value'=>set_value('UserName')]) ?>
                      <?php echo form_error('UserName'); ?>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <div class="col-sm-12">
                      <label for="Password">Password <span class="red">*</span></label>
                      <?php echo form_password(['name'=>'Password','class'=>'form-control','value'=>set_value('Password')]) ?>
                      <?php echo form_error('Password'); ?>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <div class="col-sm-12">
                      <label for="ConfirmPassword">Confirm Password <span class="red">*</span></label>
                      <?php echo form_password(['name'=>'ConfirmPassword','class'=>'form-control','value'=>set_value('ConfirmPassword')]) ?>
                      <?php echo form_error('ConfirmPassword'); ?>
                    </div>
                  </div>
                </div>

              </div>

              <div class="clearfix"></div>
              <div class="box-footer ">
                <button type="submit" class="btn btn-primary pull-right"> Register</button>
              </div>

            <?= form_close() ?>

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
