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
</style>
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
                    <label>Last Name</label>
                    <input type="text" name="lname" class="form-control" placeholder="Last Name" value="<?php echo $cnt['lastname'] ?>">
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
                    <label for="position">Position</label>
                        <select class="form-control" name="position" id="position" value="<?php echo $cnt['position'];?>">
                            <option value="Software Engineer" <?php if($cnt['position'] == 'Software Engineer'){echo("selected");}?>>Software Engineer</option>
                            <option value="Web Developer" <?php if($cnt['position'] == 'Web Developer'){echo("selected");}?>>Web Developer</option>
                            <option value="Network Engineer" <?php if($cnt['position'] == 'Network Engineer'){echo("selected");}?>>Network Engineer</option>
                            <option value="IT Support" <?php if($cnt['position'] == 'IT Support'){echo("selected");}?>>IT Support</option>
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

                    <div class="col-md-3">
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

                    <div class="col-md-3">
                        <div class="form-group">
                        <label>Gender</label>
                        <select class="form-control" name="slcgender">
                            <option value="">Select</option>
                            <?php
                            if($cnt['gender']=='Male')
                            {
                            print '<option value="Male" selected>Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Others">Others</option>';
                            }
                            elseif($cnt['gender']=='Femle')
                            {
                            print '<option value="Male">Male</option>
                                    <option value="Female" selected>Female</option>
                                    <option value="Others">Others</option>';
                            }
                            elseif($cnt['gender']=='Others')
                            {
                            print '<option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Others" selected>Others</option>';
                            }
                            else{
                            print '<option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>';
                            }
                            ?>
                        </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="txtemail" value="<?php echo $cnt['email'] ?>" class="form-control" placeholder="Email" readonly>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Mobile</label>
                        <input type="text" name="txtmobile" value="<?php echo $cnt['mobile'] ?>" class="form-control" placeholder="Mobile" readonly>
                        </div>
                    </div>

                    <!-- <div class="col-md-6">
                        <div class="form-group">
                        <label>Photo</label>
                        <input type="file" name="filephoto" value="<?php echo base_url(); ?>uploads/profile-pic/<?php echo $cnt['pic'] ?>" class="form-control">
                        </div>
                    </div> -->

                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Date of Birth</label>
                        <input type="date" name="txtdob" value="<?php echo $cnt['dob'] ?>" class="form-control" placeholder="DOB">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Date of Joining</label>
                        <input type="date" name="txtdoj" value="<?php echo $cnt['doj'] ?>" class="form-control" placeholder="DOJ">
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>City</label>
                        <input type="text" name="txtcity" value="<?php echo $cnt['city'] ?>" class="form-control" placeholder="City">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                        <label>State</label>
                        <input type="text" name="txtstate" value="<?php echo $cnt['state'] ?>" class="form-control" placeholder="State">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Country</label>
                        <select class="form-control" name="slccountry">
                            <option value="">Select</option>
                            <?php
                            if(isset($country))
                            {
                                foreach ($country as $cnt1)
                                {
                                if($cnt1['country_name']==$cnt['country'])
                                {
                                    print "<option value='".$cnt1['country_name']."' selected>".$cnt1['country_name']."</option>";
                                }
                                else{
                                    print "<option value='".$cnt1['country_name']."'>".$cnt1['country_name']."</option>";
                                }
                                
                                }
                            }
                            ?>
                        </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control" name="txtaddress"><?php echo $cnt['address'] ?></textarea>
                        </div>
                    </div>

                    

                    </div>
                    <div class="tab">Tab2
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control" name="txtaddress"><?php echo $cnt['address'] ?></textarea>
                        </div>
                    </div>
                    
                    </div>
                    <div class="tab">Tab3</div>
                    <div class="tab">Tab4</div>
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
                    <button type="submit" class="btn btn-success pull-right" id="submitform">Submit</button>
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