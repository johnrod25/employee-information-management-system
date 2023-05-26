<?php 
include_once("sidebar.php");
include_once("connections/connection.php");
if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['role']) && $_SESSION['role'] == "admin"){
    header("Location: login.php");
}
$conn = connection();
if(isset($_GET['ID'])){
    $id = $_GET['ID'];
}else{
    $id = $_SESSION['id'];
}
$sql = "SELECT * FROM users WHERE id='$id' ";
$users = $conn->query($sql) or die ($conn->error);
$row = $users->fetch_assoc();

if(isset($_POST['submit'])){
    $empid = $_POST['empid'];
    $fname = $_POST['firstname'];
    $mname = $_POST['middlename'];
    $lname = $_POST['lastname'];
    $position = $_POST['position'];
    $department = $_POST['department'];
    $empstatus = $_POST['empstatus'];
    $datehired = $_POST['datehired'];
    $civil = $_POST['civilstatus'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $birthplace = $_POST['birthplace'];
    $birthdate = $_POST['birthdate'];
    $gender = $_POST['gender'];
    $bloodtype = $_POST['bloodtype'];
    $religion = $_POST['religion'];
    $permanentaddress = $_POST['permanentaddress'];
    $presentaddress = $_POST['presentaddress'];
    $allowance = $_POST['allowance'];
    $image = 'images/'.$_FILES['image']['name'];
    $sss = $_POST['sss'];
    $philhealth = $_POST['philhealth'];
    $tin = $_POST['tin'];
    $pagibig = $_POST['pagibig'];
    $salary = $_POST['salary'];
    $contact_person = $_POST['contact-person'];
    $contact_number = $_POST['contact-number'];
    $father_name = $_POST['father-name'];
    $mother_name = $_POST['mother-name'];
    $spouse_name = $_POST['spouse-name'];
    $spouse_date = $_POST['spouse-birthday'];

    $sql ="UPDATE `users` SET `empid`='$empid',`firstname`='$fname',`middlename`='$mname',`lastname`='$lname',`position`='$position',`department`='$department',`emp_status`='$empstatus',`date_hired`='$datehired',`civil_status`='$civil',`email`='$email',`contact`='$contact',`birth_place`='$birthplace',`birth_date`='$birthdate',`gender`='$gender',`blood_type`='$bloodtype',`religion`='$religion',`sss`='$sss',`philhealth`='$philhealth',`tin`='$tin',`pagibig`='$pagibig',`salary`='$salary',`allowance`='$allowance',`contact_person`='$contact_person',`contact_number`='$contact_number',`permanent_address`='$permanentaddress',`present_address`='$presentaddress',`father_name`='$father_name',`mother_name`='$mother_name',`spouse_name`='$spouse_name',`spouse_date`='$spouse_date',`image`='$image' WHERE id=$id";
    $conn->query($sql) or die ($conn->error);
    mysqli_close($conn);
    header("Location: db.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <link rel="stylesheet" href="css/edit.css">
</head>
<body>
<!-- <div class="alert success" id="myPopup">
    <span class="closebtn" >&times;</span>  
    <strong>Success!</strong> Indicates a successful or positive action.
    </div> -->
    <?php include("connections/functions.php"); ?>
    <form action="" id="regForm" method="post" enctype="multipart/form-data">
        <div class="side-info">                       
        <div class="image-box">
		        <img id="preview" src="<?php echo $row['image'];?>" onerror="this.src='images/user.png';">
                <input type="file" name="image" id="image" value="<?php echo $row['image'];?>" onchange="previewImage(event);">
            </div>
            <div class="side-info-bar">
                <ul>
                    <li class="step-info" onclick="chooseTab(0)">Personal</li>
                    <li class="step-info" onclick="chooseTab(1)">Benefits </li>
                    <li class="step-info" onclick="chooseTab(2)">Other Info</li>
                    
                    <!-- <li class="step-info" onclick="chooseTab(3)">Employment</li>
                    <li class="step-info" onclick="chooseTab(4)">Violations</li> -->                  
                </ul>
            </div>
        </div>
        <div class="main-info">
            <div class="personal-info tab">
                <h3>Personal Information</h3>
                <div class="labels">
                <label>Employee Id:</label>
                <input type="text" name="empid" value="<?php echo $row['empid'];?>" id="empid">
                </div>
            
            <div class="labels">
                <label for="position">Employment Status:</label>
            <select name="empstatus" id="emp-status" value="<?php echo $row['emp_status'];?>">
                <option <?php if($row['emp_status'] == 'Regular'){echo("selected");}?> value="Regular">Regular</option>
                <option value="Probationary" <?php if($row['emp_status'] == 'Probationary'){echo("selected");}?>>Probationary</option>
                <option value="Trainee" <?php if($row['emp_status'] == 'Trainee'){echo("selected");}?>>Trainee</option>
                <option value="Contractual">Contractual</option>
                <option value="Project-Based">Project-Based</option>
            </select>
            </div>
            <div class="labels">
                <label for="">Civil Status:</label>
            <select name="civilstatus">
                <option value="Single" <?php if($row['civil_status'] == 'Single'){echo("selected");}?>>Single</option>
                <option value="Married" <?php if($row['civil_status'] == 'Married'){echo("selected");}?>>Married</option>
                <option value="Divorce" <?php if($row['civil_status'] == '"Divorce'){echo("selected");}?>>Divorced</option>
                <option value="Widowed" <?php if($row['civil_status'] == 'Widowed'){echo("selected");}?>>Widowed</option>
            </select>
            </div>
            <div class="labels">
                <label>Last Name:</label>
                <input type="text" name="lastname" placeholder="Lastname" value="<?php echo $row['lastname'];?>">
            </div>
            <div class="labels">
                <label>First Name:</label>
                <input type="text" name="firstname" placeholder="Firstname" value="<?php echo $row['firstname'];?>">
            </div>
            <div class="labels">
                <label>Middle Name:</label>
                <input type="text" name="middlename" placeholder="Midlename" value="<?php echo $row['middlename'];?>">
            </div>
            
            <div class="labels">
                <label for="position">Position:</label>
            <select name="position" id="position" value="<?php echo $row['position'];?>">
                <option value="Software Engineer" <?php if($row['position'] == 'Software Engineer'){echo("selected");}?>>Software Engineer</option>
                <option value="Web Developer" <?php if($row['position'] == 'Web Developer'){echo("selected");}?>>Web Developer</option>
                <option value="Network Engineer" <?php if($row['position'] == 'Network Engineer'){echo("selected");}?>>Network Engineer</option>
                <option value="IT Support" <?php if($row['position'] == 'IT Support'){echo("selected");}?>>IT Support</option>
            </select>
            </div>
            <div class="labels">
                <label for="department">Department:</label>
                <select name="department" id="department">
                <?php
                    $conn = connection();
                    $query = "SELECT * FROM `departments`";
                    $query_run = mysqli_query($conn, $query);
                    if(mysqli_num_rows($query_run) > 0) {
                        foreach($query_run as $rows){	?>
                    <option value="<?php echo $rows['department_name'];?>"><?php echo $rows['department_name'];?></option>
                    <?php }
                        } ?>
                </select>
            </div>
            <div class="labels">
            <label for="date-hired">Date hired:</label>
            <input type="date" name="datehired" value="<?php echo $row['date_hired'];?>">
            </div>
            <div class="long-label">
                <label>Email:</label>
                <input type="text" name="email" placeholder="Email Address" value="<?php echo $row['email'];?>">
            </div>
            <div class="labels">
                <label>Contact:</label>
                <input type="text" name="contact" placeholder="Contact number" value="<?php echo $row['contact'];?>">
            </div>
            <div class="long-label">
                <label>Birth Place:</label>
                <input type="text" name="birthplace" placeholder="Birth place" value="<?php echo $row['birth_place'];?>">
            </div>           
            <div class="labels">
                <label for="date-hired">Birth date:</label>
                <input type="date" name="birthdate" value="<?php echo $row['birth_date'];?>">
            </div>
            <div class="labels">
                <label for="gender">Gender</label>
                <select name="gender">
                <option value="Male" <?php if($row['gender'] == 'Male'){echo("selected");}?>>Male</option>
                <option value="Female" <?php if($row['gender'] == 'Female'){echo("selected");}?>>Female</option>
            </select>
            </div>
            <div class="labels">
                <label for="bloodtype">Blood type</label>
                <select name="bloodtype">
                <option value="A positive (A+)" <?php if($row['blood_type'] == 'A positive (A+)'){echo("selected");}?>>A positive (A+)</option>
                <option value="A negative (A-)" <?php if($row['blood_type'] == 'A negative (A-)'){echo("selected");}?>>A negative (A-)</option>
                <option value="B positive (B+)" <?php if($row['blood_type'] == 'B positive (B+)'){echo("selected");}?>>B positive (B+)</option>
                <option value="B negative (B-)" <?php if($row['blood_type'] == 'B negative (B-)'){echo("selected");}?>>B negative (B-)</option>
                <option value="AB positive (AB+)" <?php if($row['blood_type'] == 'AB positive (AB+)'){echo("selected");}?>>AB positive (AB+)</option>
                <option value="AB negative (AB-)" <?php if($row['blood_type'] == 'AB negative (AB-)'){echo("selected");}?>>AB negative (AB-)</option>
                <option value="O positive (O+)" <?php if($row['blood_type'] == 'O positive (O+)'){echo("selected");}?>>O positive (O+)</option>
                <option value="O negative (O-)" <?php if($row['blood_type'] == 'O negative (O-)'){echo("selected");}?>>O negative (O-)</option>
            </select>
            </div>
            <div class="labels">
                <label for="gender">Religion:</label>
                <input type="text" name="religion" placeholder="Religion" value="<?php echo $row['religion'];?>">
            </div>
            </div>
            
            <div class="benefits-info tab">
            <h3>Benefits Information</h3>
            <div class="labels">
                <label>SSS:</label>
                <input type="text" name="sss" placeholder="SSS" value="<?php echo $row['sss'];?>">
            </div>
            <div class="labels">
                <label>Phil Health:</label>
                <input type="text" name="philhealth" placeholder="Philhealth" value="<?php echo $row['philhealth'];?>">
            </div>
            <div class="labels">
                <label>Pagibig:</label>
                <input type="text" name="pagibig" placeholder="Pag Ibig" value="<?php echo $row['pagibig'];?>">
            </div>
            <div class="labels">
                <label>TIN:</label>
                <input type="text" name="tin" placeholder="TIN" value="<?php echo $row['tin'];?>">
            </div>
            <div class="labels">
                <label>Salary:</label>
                <input type="text" name="salary" placeholder="Salary monthly" value="<?php echo $row['salary'];?>">
            </div>
            <div class="labels">
                <label>Allowance:</label>
                <input type="text" name="allowance" placeholder="Allowance" value="<?php echo $row['allowance'];?>">
            </div>
            <div class="labels">
                <label>Contact Person:</label>
                <input type="text" name="contact-person" placeholder="Contact person" value="<?php echo $row['contact_person'];?>">
            </div>
            <div class="labels">
                <label>Contact Number:</label>
                <input type="text" name="contact-number" placeholder="Contact number" value="<?php echo $row['contact_number'];?>">
            </div>
            </div>

            <div class="benefits-info tab">
            <h3>Other Information</h3>
            <div class="labels">
                <label>Present Address:</label>
                <input type="text" name="presentaddress" placeholder="Present Address" value="<?php echo $row['present_address'];?>">
            </div>
            <div class="labels">
                <label>Permanent Address:</label>
                <input type="text" name="permanentaddress" placeholder="Permanent Address" value="<?php echo $row['permanent_address'];?>">
            </div>
            <div class="labels">
                <label>Father Name:</label>
                <input type="text" name="father-name" placeholder="Father's Name" value="<?php echo $row['father_name'];?>">
            </div>
            <div class="labels">
                <label>Mother Name:</label>
                <input type="text" name="mother-name" placeholder="Mother's Name" value="<?php echo $row['mother_name'];?>">
            </div>
            <div class="labels">
                <label>Spouse Name:</label>
                <input type="text" name="spouse-name" placeholder="Spouse Name" value="<?php echo $row['spouse_name'];?>">
            </div>
            <div class="labels">
                <label for="b-day">Spouse Birth date:</label>
                <input type="date" name="spouse-birthday" value="<?php echo $row['spouse_date'];?>">
            </div>
            </div>

            <div style="overflow:auto;">
            <div class="submit" style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                <input type="submit" id="submitform" name="submit" value="Save" onclick="myFunction()">
            </div>
            </div>
            <!-- Circles which indicates the steps of the form: -->
            <div class="steps" style="text-align:center;margin-top:40px;">
            
            <?php for($i = 0; $i < 3; $i++) { ?>
                <span class="step" onclick="chooseTab(<?php echo $i;?>)"></span>
            <?php } ?>
            </div>
        </div>
        
    </form>

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
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Save";
    } else {
    document.getElementById("nextBtn").innerHTML = "Next";
    }
    fixStepIndicator(n)
}

function nextPrev(n) {
  var x = document.getElementsByClassName("tab");
  if (n == 1 && !validateForm()) return false;
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
  if (n == 1 && !validateForm()) return false;
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

// When the user clicks on div, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.style.visibility="visible";
}
</script>
</body>
</html>