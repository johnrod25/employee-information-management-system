  <style>
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
  </style>
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
        <li class="active">Add Staff</li>
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
          <div class="col-md-12 ">
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
              <h3 class="box-title">Add Staff</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo form_open_multipart('Staff/insert');?>
              <div class="box-body">
              <div class="col-md-12">
                <p><b>I. Personal Data</b></p>
              </div>
              <!-- First Row -->
              <div class="col-md-3">
                  <div class="form-group">
                    <label>Family Name</label>
                    <input type="text" name="lname" class="form-control" placeholder="Family Name">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="fname" class="form-control" placeholder="First Name">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Middle Name</label>
                    <input type="text" name="midname" class="form-control" placeholder="Middle Name">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Suffix Name</label>
                    <select class="form-control" name="suffix">
                      <option value="">Select</option>
                      <option value="Jr">Jr</option>
                      <option value="Sr">Sr</option>
                      <option value="II">II</option>
                    </select>
                  </div>
                </div>

                <!-- second row -->
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Emp Id</label>
                    <input type="text" name="empid" class="form-control" placeholder="Employee Id">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Employment Status</label>
                    <select class="form-control" name="empstatus" id="emp-status">
                    <option value="">Select</option>
                      <option value="Regular">Regular</option>
                      <option value="Probationary">Probationary</option>
                      <option value="Trainee">Trainee</option>
                      <option value="Contractual">Contractual</option>
                      <option value="Project-Based">Project-Based</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Position</label>
                    <select class="form-control" name="position">
                      <option value="">Select</option>
                      <?php
                      if(isset($position)){
                        foreach($position as $pos){
                          print "<option value='".$pos['id']."'>".$pos['position_name']."</option>";
                        }
                      } ?>
                      <!-- <option value="Software Engineer">Software Engineer</option>
                      <option value="Web Developer">Web Developer</option>
                      <option value="IT Support">IT Support</option> -->
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Department</label>
                    <select class="form-control" name="slcdepartment">
                      <option value="">Select</option>
                      <?php
                      if(isset($department)){
                        foreach($department as $cnt){
                          print "<option value='".$cnt['id']."'>".$cnt['department_name']."</option>";
                        }
                      } ?>
                    </select>
                  </div>
                </div>
                
                <!-- 3rd row -->
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="txtemail" class="form-control" placeholder="Email">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Mobile</label>
                    <input type="text" name="txtmobile" class="form-control" placeholder="Mobile">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Photo</label>
                    <input type="file" name="filephoto" class="form-control">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Date of Joining</label>
                    <input type="date" name="txtdoj" class="form-control" placeholder="DOJ">
                  </div>
                </div>

                <!-- 4th Row -->
                <div class="col-md-3">
                  <div class="form-group">
                    <label>SSS No.</label>
                    <input type="number" name="sss" class="form-control" placeholder="SSS No.">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Philhealth No.</label>
                    <input type="number" name="philhealth" class="form-control" placeholder="Philhealth No.">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Pag IBIG No.</label>
                    <input type="number" name="pagibig" class="form-control" placeholder="Pag IBIG No.">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>TIN No.</label>
                    <input type="number" name="tin" class="form-control" placeholder="TIN No.">
                  </div>
                </div>

                <!-- 5th Row -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Permanent Address</label>
                    <input type="text" name="permanent_address" class="form-control" placeholder="Permanent Address">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Present Address</label>
                    <input type="text" name="present_address" class="form-control" placeholder="Present Address">
                  </div>
                </div>
                <!-- 6th Row -->
                <div class="col-md-2">
                  <div class="form-group">
                    <label>Gender</label>
                    <select class="form-control" name="slcgender">
                      <option value="">Select</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="Others">Others</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label>Nationality</label>
                    <input type="text" name="nationality" class="form-control" placeholder="Nationality">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label>Religion</label>
                    <input type="text" name="religion" class="form-control" placeholder="Religion">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Birthplace</label>
                    <input type="text" name="birthplace" class="form-control" placeholder="Birthplace">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Date of Birth</label>
                    <input type="date" name="txtdob" class="form-control" placeholder="DOB">
                  </div>
                </div>

                <!-- 7th Row -->
                <div class="col-md-2">
                  <div class="form-group">
                    <label>Civil Status</label>
                    <select class="form-control" name="civilstatus" id="position">
                    <option value="">Select</option>
                      <option value="Single">Single</option>
                      <option value="Married">Married</option>
                      <option value="Divorce">Divorced</option>
                      <option value="Widowed">Widowed</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label>Height</label>
                    <input type="text" name="height" class="form-control" placeholder="Height">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label>Weight</label>
                    <input type="text" name="weight" class="form-control" placeholder="Weight">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Father's Name</label>
                    <input type="text" name="father" class="form-control" placeholder="Father's Name">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Mother's Name</label>
                    <input type="text" name="mother" class="form-control" placeholder="Mother's Name">
                  </div>
                </div>

                <!-- 8th Row -->
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Mothers Maiden Name</label>
                    <input type="text" name="maiden_name" class="form-control" placeholder="Mothers Maiden Name">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Spouse Name</label>
                    <input type="text" name="spouse_name" class="form-control" placeholder="Spouse Name">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Spouse Birthplace</label>
                    <input type="text" name="spouse_birthplace" class="form-control">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Spouse Birthdate</label>
                    <input type="date" name="spouse_date" class="form-control">
                  </div>
                </div>

                <!-- II. Qualifications and Educational Background Highest Educational Attainment -->
                <div class="col-md-12">
                <p><b>II. Qualifications and Educational Background Highest Educational Attainment</b></p>
              </div>

            <div class="box-body">
            <div class="col-md-12">
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
                  <tr>
                    <td>Elementary</td>
                    <td class="col-md-4"><input type="text" name="elem_school" class="form-control"></td>
                    <td><input type="date" name="elem_year" class="form-control"></td>
                    <td><input type="text" name="elem_honor" class="form-control"></td>
                  </tr>
                  <tr>
                    <td>High School</td>
                    <td><input type="text" name="high_school" class="form-control"></td>
                    <td><input type="date" name="high_year" class="form-control"></td>
                    <td><input type="text" name="high_honor" class="form-control"></td>
                  </tr>
                  <tr>
                    <td>College</td>
                    <td><input type="text" name="college_school" class="form-control"></td>
                    <td><input type="date" name="college_year" class="form-control"></td>
                    <td><input type="text" name="college_honor" class="form-control"></td>
                  </tr>
                  <tr>
                    <td style="text-align:center;">Degree Earned:</td>
                    <td colspan="3"><input type="text" name="college_degree" class="form-control"></td>
                  </tr>
                  <tr>
                    <td>Graduate Studies</td>
                    <td><input type="text" name="graduate_school" class="form-control"></td>
                    <td><input type="date" name="graduate_year" class="form-control"></td>
                    <td><input type="text" name="graduate_honor" class="form-control"></td>
                  </tr>
                  <tr>
                    <td style="text-align:center;">Degree Earned:</td>
                    <td colspan="3"><input type="text" name="graduate_degree" class="form-control"></td>
                  </tr>
                  <tr>
                    <td>Trade/Vocational</td>
                    <td><input type="text" name="trade_school" class="form-control"></td>
                    <td><input type="date" name="trade_year" class="form-control"></td>
                    <td><input type="text" name="trade_honor" class="form-control"></td>
                  </tr>
                  <tr>
                    <td>Certificate/Diploma:</td>
                    <td><input type="text" name="cert_school" class="form-control"></td>
                    <td><input type="date" name="cert_year" class="form-control"></td>
                    <td><input type="text" name="cert_honor" class="form-control"></td>
                  </tr>
            </tbody>
            </table>
            </div>
            </div>
            </div>

            <!-- III. Work Experience -->
            <div class="col-md-12">
                <p><b>III. Work Experience</b></p>
              </div>
              <div class="box-body">
            <div class="col-md-12">
            <div class="table-responsive">
            <table class="table table-bordered table-striped" id="expItemTable">
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
                    <tr>
                      <td><input type="text" name="company_name[]" class="form-control"></td>
                      <td><input type="text" name="company_address[]" class="form-control"></td>
                      <td><input type="text" name="company_telno[]" class="form-control"></td>
                      <td><input type="text" name="position_lvl[]" class="form-control"></td>
                      <td><input type="text" name="prev_salary[]" class="form-control"></td>
                      <td><input type="date" name="inc_date[]" class="form-control"></td>
                      <td><input type="text" name="reason[]" class="form-control"></td>
                    </tr>
                    
                  </tbody>
                  <tr>
                      <td colspan="7">
                      <div class="plus-btn">
                    <button type="button" id="expAddRowBtn">+</button>
                    <!-- <button type="submit" id="submitBtn">Submit</button> -->
                  </div>
                      </td>
                    </tr>
            </table>
            </div>
            </div>
            </div>
<style>
  .table-rel{
    position:relative;

  }
  .plus-btn{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  #expAddRowBtn,#projAddRowBtn{
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
            <!-- IV. SPPI Management -->
            <div class="col-md-12">
                <p><b>IV. SPPI Project Management</b></p>
              </div>
            <div class="box-body">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-bordered table-striped table-rel" id="projItemTable">
                <thead>
                  <tr>
                    <th>Project Name</th>
                    <th>Company Name</th>
                    <th>Started Date</th>
                    <th>Date of Accomplishment</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <td><input type="text" name="project_names[]" class="form-control"></td>
                    <td><input type="text" name="proj_com_names[]" class="form-control"></td>
                    <td><input type="date" name="start_dates[]" class="form-control"></td>
                    <td><input type="date" name="date_accomplishs[]" class="form-control"></td>
                  </tr>
                  
                </tbody>
                <tr>
                  <td colspan="7">
                    <div class="plus-btn">
                      <button type="button" id="projAddRowBtn">+</button>
                    </div>
                  </td>
                </tr>
                </table>
              </div>
            </div>
            </div>
                    
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-success pull-right">Submit</button>
              </div>
            </form>
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
      $("#projAddRowBtn").click(function() {
        var newRow = $("<tr>");
        newRow.append('<td><input type="text" name="project_names[]" class="form-control"></td>');
        newRow.append('<td><input type="text" name="proj_com_names[]" class="form-control"></td>');
        newRow.append('<td><input type="date" name="start_dates[]" class="form-control"></td>');
        newRow.append('<td><input type="date" name="date_accomplishs[]" class="form-control"></td>');
        $("#projItemTable").append(newRow);
      });

      $("#expAddRowBtn").click(function() {
        var newRow = $("<tr>");
        newRow.append('<td><input type="text" name="company_name[]" class="form-control"></td>');
        newRow.append('<td><input type="text" name="company_address[]" class="form-control"></td>');
        newRow.append('<td><input type="text" name="company_telno[]" class="form-control"></td>');
        newRow.append('<td><input type="text" name="position_lvl[]" class="form-control"></td>');
        newRow.append('<td><input type="text" name="prev_salary[]" class="form-control"></td>');
        newRow.append('<td><input type="date" name="inc_date[]" class="form-control"></td>');
        newRow.append('<td><input type="text" name="reason[]" class="form-control"></td>');
        $("#expItemTable").append(newRow);
      });

      // Submit the form data to the PHP script
      $("#itemForm").submit(function(event) {
        event.preventDefault(); // Prevent the form from submitting normally

        var form = $(this);
        var url = form.attr("action");

        $.ajax({
          type: "POST",
          url: url, // Replace with the actual path to your PHP script
          data: form.serialize(),
          success: function(response) {
            alert("Items successfully inserted into the database!");
            // Reset the form and remove added rows
            form.trigger("reset");
            $("#itemTable tr:not(:first)").remove();
          }
        });
      });
    });
  </script>