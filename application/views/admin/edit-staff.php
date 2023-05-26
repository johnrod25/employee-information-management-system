  <style>
  .floatybox {
    display: inline-block;
    width: 123px;
}
form{
  box-shadow: 0 4px 8px 0 #aaaaaa;
}
.side-info-bar{
    height: 100%;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    list-style: none;
}
.side-info-bar li{
    font-size: 16px;
    text-align: center;
    padding: 5px;
    margin: 5px 0;
    width: 100%;
    box-shadow: 0 4px 8px 0 #aaaaaa;
    cursor: pointer;
}

.tab{
  display: none;
}
.steps{
    position: absolute;
    bottom: 5vh;
    left: 60%;
    transform: translate(-50%);
}
.step {
    height: 10px;
    width: 10px;
    margin: 0 2px;
    background-color: #bbbbbb;
    border: none;  
    border-radius: 50%;
    display: inline-block;
    opacity: 0.5;
}
.step.active {
    opacity: 1;
    background-color: blue;
}
.step-info.step-active {
    opacity: 1;
    background-color: #0073b7;
    color: white;
}
.step.finish {
    background-color: green;
}
#submitform{
  display:none;
}

.form-group{
    position: relative;     
}
.form-group label{
    position: absolute;
    top: -10px;
    left: 5px;
    font-size: 12px;
    padding: 0 3px;
    background-color: #fff;
    color: #000;
    font-weight: 500;
}
.form-group input{
    width: 100%;
    text-transform: capitalize;
}
#submitform, #nextBtn, #prevBtn{
  width: 70px;
  margin: 5px;
}
.table-rel{
    position:relative;

  }
  .plus-btn{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  #editExpAddRowBtn,#editProjAddRowBtn{
    width: 250px;
    height: 30px;
    border-radius: 5px;
    display: flex;
    justify-content: center;
    align-items: center;
    border: 1px solid #aaa;
    font-size: 30px;
  }
  </style>
  <head>
    <link rel="stylesheet" href="edit-staff.css?v=1.1">
  </head>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Staff Management
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Staff Management</a></li>
        <li class="active">Edit Staff</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <?php echo validation_errors('<div class="col-md-12">
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i> Failed!</h4>', '</div>
          </div>'); ?>

        <?php if($this->session->flashdata('success')): ?>
          <div class="col-md-12">
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i> Success!</h4>
                  <?php echo $this->session->flashdata('success'); ?>
            </div>
          </div>
        <?php elseif($this->session->flashdata('error')):?>
        <div class="col-md-12">
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i> Failed!</h4>
                  <?php echo $this->session->flashdata('error'); ?>
            </div>
          </div>
        <?php endif;?>

        <!-- column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Staff</h3>
            </div>
            <!-- /.box-header -->

            <?php if(isset($content)): ?>
              <?php foreach($content as $cnt): ?>
                  <!-- form start -->
                  <?php echo form_open_multipart('Staff/update');?>
                    <div class="box-body">
                      <div class="col-sm-2 h-100 border-right side-body">
                        <div class="form-group">
                          <img id="preview" src="<?php echo base_url(); ?>uploads/profile-pic/<?php echo $cnt['pic'] ?>"  width="100%" height="150px" alt="User Image">
                          <input type="file" name="filephoto" value="<?php echo base_url(); ?>uploads/profile-pic/<?php echo $cnt['pic'] ?>" class="form-control" onchange="previewImage(event);">
                        </div>                                                  

                    
                          <ul class="col-md-12 side-info-bar">
                            <li class="step-info" onclick="chooseTab(0)">Personal Data</li>
                            <li class="step-info" onclick="chooseTab(1)">Educational</li>
                            <li class="step-info " onclick="chooseTab(2)">Work Experience</li>
                            <li class="step-info " onclick="chooseTab(3)">SPPI Record</li>           
                          </ul>

                      </div>

                      <div class="col-sm-10 tab">
                        <!-- First Row -->
              <div class="col-md-3">
                  <div class="form-group">
                    <label>Family Name</label>
                    <input type="hidden" name="txtid" value="<?php echo $cnt['id'] ?>" class="form-control">
                    <input type="text" name="lname" class="form-control" placeholder="Family Name" value="<?php echo $cnt['lastname'] ?>">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="fname" class="form-control" placeholder="First Name" value="<?php echo $cnt['firstname'] ?>">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Middle Name</label>
                    <input type="text" name="midname" class="form-control" placeholder="Middle Name" value="<?php echo $cnt['midname'] ?>">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Suffix Name</label>
                    <select class="form-control" name="suffix" value="<?php echo $cnt['suffix'] ?>">
                      <option value="">Select</option>
                      <option value="Jr">Jr</option>
                      <option value="Sr">Sr</option>
                      <option value="II">II</option>
                      <option value="Jr" <?php if($cnt['suffix'] == 'Jr'){echo("selected");}?>>Jr</option>
                        <option value="Sr" <?php if($cnt['suffix'] == 'Sr'){echo("selected");}?>>Sr</option>
                        <option value="II" <?php if($cnt['suffix'] == '"II'){echo("selected");}?>>II</option>
                        <option value="III" <?php if($cnt['suffix'] == 'III'){echo("selected");}?>>III</option>
                    </select>
                  </div>
                </div>

                <!-- second row -->
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Emp Id</label>
                    <input type="text" name="empid" class="form-control" placeholder="Employee Id" value="<?php echo $cnt['empid'] ?>">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Employment Status</label>
                    <select class="form-control" name="empstatus" id="emp-status">
                      <option value="">Select</option>
                      <option value="Regular" <?php if($cnt['empstatus'] == 'Regular'){echo("selected");}?>>Regular</option>
                      <option value="Probationary" <?php if($cnt['empstatus'] == 'Probationary'){echo("selected");}?>>Probationary</option>
                      <option value="Trainee" <?php if($cnt['empstatus'] == 'Trainee'){echo("selected");}?>>Trainee</option>
                      <option value="Contractual" <?php if($cnt['empstatus'] == 'Contractual'){echo("selected");}?>>Contractual</option>
                      <option value="Project-Based" <?php if($cnt['empstatus'] == 'Project-Based'){echo("selected");}?>>Project-Based</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                        <div class="form-group">
                      <label for="position">Position</label>
                        <select class="form-control" name="position" id="position" value="<?php echo $cnt['position'];?>">
                        <?php
                            if(isset($position))
                            {
                              foreach($position as $pos)
                              {
                                if($pos['id']==$cnt['position'])
                                {
                                  print "<option value='".$pos['id']."' selected>".$pos['position_name']."</option>";
                                }
                                else{
                                  print "<option value='".$pos['id']."'>".$pos['position_name']."</option>";
                                }
                              }
                            } 
                            ?>
                            
                          </select>
                          </div>
                      </div>
                <div class="col-md-3">
                        <div class="form-group">
                          <label>Department</label>
                          <select class="form-control" name="slcdepartment">
                            <option value="">Select</option>
                            <?php
                            if(isset($department))
                            {
                              foreach($department as $cnt1)
                              {
                                if($cnt1['id']==$cnt['department_id'])
                                {
                                  print "<option value='".$cnt1['id']."' selected>".$cnt1['department_name']."</option>";
                                }
                                else{
                                  print "<option value='".$cnt1['id']."'>".$cnt1['department_name']."</option>";
                                }
                              }
                            } 
                            ?>
                          </select>
                        </div>
                      </div>

                      <!-- 3rd row -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="txtemail" class="form-control" placeholder="Email" value="<?php echo $cnt['email'] ?>">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Mobile</label>
                    <input type="text" name="txtmobile" class="form-control" placeholder="Mobile" value="<?php echo $cnt['mobile'] ?>">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Date of Joining</label>
                    <input type="date" name="txtdoj" class="form-control" placeholder="DOJ" value="<?php echo $cnt['doj'] ?>">
                  </div>
                </div>

                <!-- 4th Row -->
                <div class="col-md-3">
                  <div class="form-group">
                    <label>SSS No.</label>
                    <input type="number" name="sss" class="form-control" placeholder="SSS No." value="<?php echo $cnt['sss'] ?>">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Philhealth No.</label>
                    <input type="number" name="philhealth" class="form-control" placeholder="Philhealth No." value="<?php echo $cnt['philhealth'] ?>">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Pag IBIG No.</label>
                    <input type="number" name="pagibig" class="form-control" placeholder="Pag IBIG No." value="<?php echo $cnt['pagibig'] ?>">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>TIN No.</label>
                    <input type="number" name="tin" class="form-control" placeholder="TIN No." value="<?php echo $cnt['tin'] ?>">
                  </div>
                </div>

                <!-- 5th Row -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Permanent Address</label>
                    <input type="text" name="permanent_address" class="form-control" placeholder="Permanent Address" value="<?php echo $cnt['permanent_address'] ?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Present Address</label>
                    <input type="text" name="present_address" class="form-control" placeholder="Present Address" value="<?php echo $cnt['present_address'] ?>">
                  </div>
                </div>
                <!-- 6th Row -->
                <div class="col-md-2">
                  <div class="form-group">
                    <label>Gender</label>
                    <select class="form-control" name="slcgender">
                      <option value="">Select</option>
                      <option value="Male" <?php if($cnt['gender'] == 'Male'){echo("selected");}?>>Male</option>
                        <option value="Female" <?php if($cnt['gender'] == 'Female'){echo("selected");}?>>Female</option>
                        <option value="Others" <?php if($cnt['gender'] == '"Others'){echo("selected");}?>>Others</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label>Nationality</label>
                    <input type="text" name="nationality" class="form-control" placeholder="Nationality" value="<?php echo $cnt['nationality'] ?>">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label>Religion</label>
                    <input type="text" name="religion" class="form-control" placeholder="Religion" value="<?php echo $cnt['religion'] ?>">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Birthplace</label>
                    <input type="text" name="birthplace" class="form-control" placeholder="Birthplace" value="<?php echo $cnt['birthplace'] ?>">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Date of Birth</label>
                    <input type="date" name="txtdob" class="form-control" placeholder="DOB" value="<?php echo $cnt['dob'] ?>">
                  </div>
                </div>

                <!-- 7th Row -->
                <div class="col-md-2">
                      <div class="form-group">
                        <label>Civil Status:</label>
                        <select class="form-control" name="civilstatus">
                        <option value="Single" <?php if($cnt['civil_status'] == 'Single'){echo("selected");}?>>Single</option>
                        <option value="Married" <?php if($cnt['civil_status'] == 'Married'){echo("selected");}?>>Married</option>
                        <option value="Divorce" <?php if($cnt['civil_status'] == '"Divorce'){echo("selected");}?>>Divorced</option>
                        <option value="Widowed" <?php if($cnt['civil_status'] == 'Widowed'){echo("selected");}?>>Widowed</option>
                        </select>
                      </div>
                      </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label>Height</label>
                    <input type="text" name="height" class="form-control" placeholder="Height" value="<?php echo $cnt['height'] ?>">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label>Weight</label>
                    <input type="text" name="weight" class="form-control" placeholder="Weight" value="<?php echo $cnt['weight'] ?>">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Father's Name</label>
                    <input type="text" name="father" class="form-control" placeholder="Father's Name" value="<?php echo $cnt['father_name'] ?>">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Mother's Name</label>
                    <input type="text" name="mother" class="form-control" placeholder="Mother's Name" value="<?php echo $cnt['mother_name'] ?>">
                  </div>
                </div>

                <!-- 8th Row -->
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Mothers Maiden Name</label>
                    <input type="text" name="maiden_name" class="form-control" placeholder="Mothers Maiden Name" value="<?php echo $cnt['maiden_name'] ?>">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Spouse Name</label>
                    <input type="text" name="spouse_name" class="form-control" placeholder="Spouse Name" value="<?php echo $cnt['spouse_name'] ?>">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Spouse Birthplace</label>
                    <input type="text" name="spouse_birthplace" class="form-control" value="<?php echo $cnt['spouse_place'] ?>">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Spouse Birthdate</label>
                    <input type="date" name="spouse_date" class="form-control" value="<?php echo $cnt['spouse_date'] ?>">
                  </div>
                </div>

                      </div>
                      

            <div class="col-md-10 tab">
            <div class="table-responsive">
            <table class="table table-bordered table-striped">
            <thead>
                  <tr>
                    <th>Level</th>
                    <th>School/College/University</th>
                    <th>Year Graduated</th>
                    <th>Honors/Academic Awards Recieved</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    if(isset($educ))
                    {
                      foreach($educ as $cnt11)
                      {
                        if($cnt11['staff_id']==$cnt['id']) { ?>
                        <tr>
                    <td>Elementary</td>
                    <td class="col-md-4"><input type="text" name="elem_school" class="form-control" value="<?php echo $cnt11['elem_school'] ?>"></td>
                    <td><input type="date" name="elem_year" class="form-control" value="<?php echo $cnt11['elem_date'] ?>"></td>
                    <td><input type="text" name="elem_honor" class="form-control" value="<?php echo $cnt11['elem_honor'] ?>"></td>
                  </tr>
                  <tr>
                    <td>High School</td>
                    <td><input type="text" name="high_school" class="form-control" value="<?php echo $cnt11['high_school'] ?>"></td>
                    <td><input type="date" name="high_year" class="form-control" value="<?php echo $cnt11['high_date'] ?>"></td>
                    <td><input type="text" name="high_honor" class="form-control" value="<?php echo $cnt11['high_honor'] ?>"></td>
                  </tr>
                  <tr>
                    <td>College School</td>
                    <td><input type="text" name="college_school" class="form-control" value="<?php echo $cnt11['college_school'] ?>"></td>
                    <td><input type="date" name="college_year" class="form-control" value="<?php echo $cnt11['college_date'] ?>"></td>
                    <td><input type="text" name="college_honor" class="form-control" value="<?php echo $cnt11['college_honor'] ?>"></td>
                  </tr>
                  <tr>
                    <td>Degree Earned:</td>
                    <td colspan="3"><input type="text" name="college_degree" class="form-control" value="<?php echo $cnt11['college_degree'] ?>"></td>
                  </tr>
                  <tr>
                    <td>Graduate School</td>
                    <td><input type="text" name="graduate_school" class="form-control" value="<?php echo $cnt11['graduate_school'] ?>"></td>
                    <td><input type="date" name="graduate_year" class="form-control" value="<?php echo $cnt11['graduate_date'] ?>"></td>
                    <td><input type="text" name="graduate_honor" class="form-control" value="<?php echo $cnt11['graduate_honor'] ?>"></td>
                  </tr>
                  <tr>
                    <td>Degree Earned:</td>
                    <td colspan="3"><input type="text" name="graduate_degree" class="form-control" value="<?php echo $cnt11['graduate_degree'] ?>"></td>
                  </tr>
                  <tr>
                    <td>Trade/Vocational</td>
                    <td><input type="text" name="trade_school" class="form-control" value="<?php echo $cnt11['trade'] ?>"></td>
                    <td><input type="date" name="trade_year" class="form-control" value="<?php echo $cnt11['trade_date'] ?>"></td>
                    <td><input type="text" name="trade_honor" class="form-control" value="<?php echo $cnt11['trade_honor'] ?>"></td>
                  </tr>
                  <tr>
                    <td>Certificate/Diploma:</td>
                    <td><input type="text" name="cert_school" class="form-control" value="<?php echo $cnt11['cert'] ?>"></td>
                    <td><input type="date" name="cert_year" class="form-control" value="<?php echo $cnt11['cert_date'] ?>"></td>
                    <td><input type="text" name="cert_honor" class="form-control" value="<?php echo $cnt11['cert_honor'] ?>"></td>
                  </tr>
                        <?php }
                      }
                    } 
                    ?>
                  
            </tbody>
            </table>
            </div>
            </div>
                  
            <div class="col-md-10 tab">
            <div class="table-responsive">
            <table class="table table-bordered table-striped" id="editExpTable">
            <thead>
                  <tr>
                    <th>Company Name</th>
                    <th>Company Address</th>
                    <th>Company Tel. No.</th>
                    <th>Position/Level</th>
                    <th>Previous Salary</th>
                    <th>Inclusive Dates</th>
                    <th>Reason/s of Leaving</th>
                  </tr>
                  </thead>
                  <tbody>
                    
                    <?php
                      if(isset($workexp))
                      {
                        foreach($workexp as $exp)
                        {
                          if($exp['exp_id']==$cnt['id']) {?>
                            <tr>
                              <td>
                                <input type="hidden" name="expid[]" class="form-control" value="<?php echo $exp['id'] ?>">
                                <input type="text" name="company_name[]" class="form-control" value="<?php echo $exp['company_name'] ?>">
                              </td>
                              <td><input type="text" name="company_address[]" class="form-control" value="<?php echo $exp['company_address'] ?>"></td>
                              <td><input type="text" name="company_telno[]" class="form-control" value="<?php echo $exp['company_telno'] ?>"></td>
                              <td><input type="text" name="position_lvl[]" class="form-control" value="<?php echo $exp['company_position'] ?>"></td>
                              <td><input type="text" name="prev_salary[]" class="form-control" value="<?php echo $exp['company_salary'] ?>"></td>
                              <td><input type="date" name="inc_date[]" class="form-control" value="<?php echo $exp['company_date'] ?>"></td>
                              <td><input type="text" name="reason[]" class="form-control" value="<?php echo $exp['company_reason'] ?>"></td>
                            </tr>
                          <?php }
                        }

                      } 
                      ?>
                      
                  </tbody>
                  <tr>
                  <td colspan="7">
                    <div class="plus-btn">
                      <button type="button" id="editExpAddRowBtn">+</button>
                    </div>
                  </td>
                </tr>
            </table>
            </div>
            </div>
            
            <div class="col-md-10 tab">
              <div class="table-responsive">
                <table class="table table-bordered table-striped" id="editProjTable">
                <thead>
                  <tr>
                    <th>Project Name</th>
                    <th>Company Name</th>
                    <th>Started Date</th>
                    <th>Date of Accomplishment</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    if(isset($projectrec))
                    {
                      foreach($projectrec as $proj)
                      {
                        if($proj['project_id']==$cnt['id']) { ?>
                        <tr>
                          <td>
                            <input type="hidden" name="prjid[]" class="form-control" value="<?php echo $proj['id'] ?>">
                            <input type="text" name="project_name[]" class="form-control" value="<?php echo $proj['project_name'] ?>">
                          </td>
                          <td><input type="text" name="proj_com_name[]" class="form-control" value="<?php echo $proj['company_name'] ?>"></td>
                          <td><input type="date" name="start_date[]" class="form-control" value="<?php echo $proj['started_date'] ?>"></td>
                          <td><input type="date" name="date_accomplish[]" class="form-control" value="<?php echo $proj['accomplish_date'] ?>"></td>
                        </tr>
                        <?php }
                      }
                    } 
                    ?>
                </tbody>
                <tr>
                  <td colspan="7">
                    <div class="plus-btn">
                      <button type="button" id="editProjAddRowBtn">+</button>
                    </div>
                  </td>
                </tr>
                </table>
              </div>
            </div>

            </div>
            <!-- Circles which indicates the steps of the form: -->
            <div class="steps" style="text-align:center;margin-top:40px;">
            
            <?php for($i = 0; $i < 4; $i++) { ?>
                <span class="step" onclick="chooseTab(<?php echo $i;?>)"></span>
            <?php } ?>
            </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                    <!-- <input type="submit" class="btn btn-success pull-right" id="submitform" name="submit" value="Save" onclick="myFunction()"> -->
                    <button type="submit" class="btn btn-success pull-right" id="submitform">Update</button>
                      <button type="button" class="btn btn-success pull-right" id="nextBtn" onclick="nextPrev(1)">Next</button>
                      <button type="button" class="btn btn-success pull-right" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                      
                    </div>
                  </form>
                <?php endforeach; ?>
            <?php endif; ?>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script>
    $(document).ready(function() {
      // Add a new row to the table
      $("#editProjAddRowBtn").click(function() {
        var newRow = $("<tr>");
        newRow.append('<td><input type="text" name="edit_project_name[]" class="form-control"></td>');
        newRow.append('<td><input type="text" name="edit_proj_com_name[]" class="form-control"></td>');
        newRow.append('<td><input type="date" name="edit_start_date[]" class="form-control"></td>');
        newRow.append('<td><input type="date" name="edit_date_accomplish[]" class="form-control"></td>');
        $("#editProjTable").append(newRow);
      });

      $("#editExpAddRowBtn").click(function() {
        var newRow = $("<tr>");
        newRow.append('<td><input type="text" name="edit_company_name[]" class="form-control"></td>');
        newRow.append('<td><input type="text" name="edit_company_address[]" class="form-control"></td>');
        newRow.append('<td><input type="text" name="edit_company_telno[]" class="form-control"></td>');
        newRow.append('<td><input type="text" name="edit_position_lvl[]" class="form-control"></td>');
        newRow.append('<td><input type="text" name="edit_prev_salary[]" class="form-control"></td>');
        newRow.append('<td><input type="date" name="edit_inc_date[]" class="form-control"></td>');
        newRow.append('<td><input type="text" name="edit_reason[]" class="form-control"></td>');
        $("#editExpTable").append(newRow);
      });
    });
  </script>

  <script>
var currentTab = 0;
showTab(currentTab);
function showTab(n) {
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
    } else {
    document.getElementById("prevBtn").style.display = "inline";
    document.getElementById("nextBtn").style.display = "inline";
    document.getElementById("submitform").style.display = "none";
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").style.display = "none";
        document.getElementById("submitform").style.display = "inline";
    } else {
    document.getElementById("nextBtn").innerHTML = "Next";
    }
    fixStepIndicator(n)
}

function nextPrev(n) {
  var x = document.getElementsByClassName("tab");
  x[currentTab].style.display = "none";
  currentTab = currentTab + n;
  if (currentTab >= x.length) {
    document.getElementById("nextBtn").style.display = "none";
    document.getElementById("submitform").style.display = "block";
    showTab(currentTab-1);
    return false;
  }
  showTab(currentTab);
}
function chooseTab(n){
    var x = document.getElementsByClassName("tab");
  x[currentTab].style.display = "none";
  currentTab = n;
  if (currentTab >= x.length) {
    document.getElementById("nextBtn").style.display = "none";
    document.getElementById("submitform").style.display = "block";
    return false;
  }
  showTab(currentTab);
}
function validateForm() {
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  for (i = 0; i < y.length; i++) {
    if (y[i].value == "") {
      y[i].className += " invalid";
      valid = false;
    }
  }
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid;
}

function fixStepIndicator(n) {
var i, x = document.getElementsByClassName("step");
var y = document.getElementsByClassName("step-info");
for (i = 0; i < x.length; i++) {
x[i].className = x[i].className.replace(" active", "");
y[i].className = y[i].className.replace(" step-active", "");
}
x[n].className += " active";
y[n].className += " step-active";
}

function previewImage(event) {
    var input = event.target;
    if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
    var preview = document.getElementById("preview");
    preview.src = e.target.result;
}
reader.readAsDataURL(input.files[0]);
}
}

var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
</script>