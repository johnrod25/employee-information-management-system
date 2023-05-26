<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print | Employee Management System</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/dist/img/sppi-logo.png" type="image/x-icon">
    <style>
        *{
    margin:0;
    padding: 0;
    box-sizing: border-box;
}
body {
    background: rgb(204,204,204); 
    font-family: Arial, Helvetica, sans-serif;
}
page {
    background: #f2f2f2;
    display: block;
    margin: 0 auto;
    margin-bottom: 0.5cm;
}
page[size="A4"] {  
    width: 21cm;
    height: auto; 

}
@media print {
    body, page {
    margin: 0;
    box-shadow: 0;
    }
}
.page-header{
    width: 100%;
    display: flex;
    justify-content: space-between;
    padding: 5px;
    border-bottom: 2px solid #000;
}
h5{
    margin: 5px;
}
.sppi-logo{
    display:flex;
    align-items:center;
    flex:1;
}
.sppi-logo img{
    margin-right:5px;
}
.sppi-text{
    font-size: 13px;
    font-weight: 500;
}
.sppi-text h3{
    font-size: 16px;
    text-transform: uppercase;
    color: rgb(232, 76, 76);
}
.emp-sheet{
    background:orange;
    color: #fff;
    text-align: center;
    padding: 5px;
}
.pic-frame{
    margin: 10px;
    width: 120px;
    height: 120px;
    background: #000;
}
.data-box{
    width: 100%;
    border: 1px solid black;
    height: auto;
    margin: 5px 0;
}
.col-12{
    display: flex;
    justify-content: space-around;
    width: 100%;
    border-bottom: 1px solid black;
    font-size: 14px;
}
.flex-box{
    display: flex;
    flex-direction: column;
    width: 100%;
    flex: 1;
    margin: 5px;
}
.flex-box .col-3{
    border: 1px solid black;
    width: 100%;
    margin: 0;
    border-bottom: none;
}
.flex-box .col-3:last-child{
    border-bottom: 1px solid black;
}
.col-3{
    width: 25%;
    margin: 5px;
    padding: 14px 5px 0;
    position: relative;
    flex: 1;

}
.col-12 .col-10{
    width: 100%;
    margin: 5px;
    padding: 14px 5px 0;
    position: relative;
}
.col-3 label, .col-10 label{
    position: absolute;
    top: 0px;
    left: 5px;
    font-size: 10px;
    text-transform: capitalize;
}
th label, td label{
    position: absolute;
    top: 3px;
    left: 5px;
    font-size: 10px;
    text-transform: capitalize;
}
.personal-data{
    padding: 10px 0;
}
table{
    width: 100%;
    margin-top: 5px;
    border: none;
    margin: 5px;
    flex: 3;
}
table, th, td{
    border: 1px solid black;
    border-collapse: collapse;
    font-size: 14px;
}
th{
    font-weight: 400;
}
th, td{
    text-align: left;
    position: relative;
    padding: 14px 5px 5px 5px;
}
.text-stylee{
    font-size: 15px;
    margin: 20px 0;
    word-spacing: 3px;
    line-height: 20px;
}
.signature{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 80px;
}
.signature .sig-text{
    border-top: 1px solid black;
    padding: 5px 40px;
    font-size: 14px;
}
.h5-text{
    margin-left: 20px;
}
.h5-text span{
    font-weight: normal;
}
    </style>
</head>
<body onload="window.print();">
    <?php if(isset($content)): ?>
        <?php foreach($content as $cnt): ?>
    <page size="A4">
        <div class="page-header">
            <div class="stactic">
                <div class="sppi-logo">
                    <img src="<?php echo base_url(); ?>assets/dist/img/sppi-logo.png" alt="Visa" width="100px" height="100px">
                    <div class="sppi-text">
                        <h3><strong>Static Power Philippines, Inc.</strong></h3>
                        <p>Unit #3D, Glory of God Bldg.,</p>
                        <p>#5 Gen. Lim St., San Antonio Village,</p>
                        <p>Pasig City 1603, Philippines</p>
                        <p>Tel. No.: +632 84773408 Fax No.: +6324772188</p>
                        <p>Website: www.static.ph</p>
                    </div>           
                </div>
                <div class="emp-sheet">
                    <h3>EMPLOYEE'S INFORMATION SHEET (EIS)</h3>
                </div>
            </div>
                <div class="pic-frame">
                    <img src="<?php echo base_url(); ?>uploads/profile-pic/<?php echo $cnt['pic'] ?>" alt="Visa" width="120px" height="120px">
                </div>  
        </div>
        <div class="personal-data">
            <h5>I. PERSONAL DATA</h5>
            <div class="data-box">
                <div class="col-12">
                    <span class="col-3"><label>Family name</label><?php echo $cnt['lastname']; ?></span>
                    <span class="col-3"><label>First name</label><?php echo $cnt['firstname']; ?></span>
                    <span class="col-3"><label>Qualifier (sr., jr., II, etc.)</label><?php echo $cnt['suffix']; ?></span>
                    <span class="col-3"><label>Middle name</label><?php echo $cnt['midname']; ?></span>
                </div>
                <div class="col-12">
                    <span class="col-10"><label>Permanent Address:</label><?php echo $cnt['permanent_address']; ?></span>
                    <span class="col-10"><label>Present Address:</label><?php echo $cnt['present_address']; ?></span>
                </div>
                <div class="col-12">
                    <span class="col-3"><label>SSS No:</label><?php echo $cnt['sss']; ?></span>
                    <span class="col-3"><label>PHILHEALTH No:</label><?php echo $cnt['philhealth']; ?></span>
                    <span class="col-3"><label>Pag IBIG No:</label><?php echo $cnt['pagibig']; ?></span>
                    <span class="col-3"><label>TIN No:</label><?php echo $cnt['tin']; ?></span>
                </div>
                <div class="col-12">
                    <span class="col-3"><label>Sex:</label><?php echo $cnt['gender']; ?></span>
                    <span class="col-3"><label>Contact Number:</label><?php echo $cnt['mobile']; ?></span>
                    <span class="col-3"><label>Birthdate(mm/dd/yyy):</label><?php echo date('M d, Y', strtotime($cnt['dob'])); ?></span>
                    <span class="col-3"><label>Birthplace:</label><?php echo $cnt['birthplace']; ?></span>
                </div>
                <div class="col-12">
                    <span class="col-3"><label>Nationality:</label><?php echo $cnt['nationality']; ?></span>
                    <span class="col-3"><label>Religion:</label><?php echo $cnt['religion']; ?></span>
                    <span class="col-3"><label>Civil Status:</label><?php echo $cnt['civil_status']; ?></span>
                    <span class="col-3">
                        <span class="col-3" style="margin-right: 40px;"><label>Height:</label><?php echo $cnt['height']; ?></span>
                        <span class="col-3"><label>Weight:</label><?php echo $cnt['weight']; ?></span>
                    </span>
                    
                </div>
                <div class="col-12">
                    <span class="col-10"><label>Email Address:</label><?php echo $cnt['email']; ?></span>
                    <span class="col-10"><label>Complete Mothers Maiden Name:</label><?php echo $cnt['maiden_name']; ?></span>
                </div>
                <div class="col-12">
                    <span class="col-10"><label>Name of Spouse:</label><?php echo $cnt['spouse_name']; ?></span>
                    <span class="col-10"><label>Spouse's Birthdate (mm/dd/yyy):</label><?php echo date('M d, Y', strtotime($cnt['spouse_date'])); ?></span>
                    <span class="col-10"><label>Spouse's Birthplace:</label><?php echo $cnt['spouse_place']; ?></span>
                </div>
                <div class="col-12">
                    <table class="tbl">
                        <tr>
                            <th colspan="1"><label>Occupation: </label> Name of Children: (Use seperate sheet if needed)</th>
                            <th>Date of Birth</th>
                        </tr>
                        <?php for($i =1; $i <=5; $i++){?>
                            <tr>
                            <td><?php echo $i.". "; ?></td>
                            <td></td>
                        </tr>
                        <?php } ?>
                        
                        <!-- <?php if(isset($workexp)): ?>
                            <?php foreach($workexp as $cnt2): ?>
                        <tr>
                            <td><?php echo $cnt2['company_name']; ?></td>
                            <td><?php echo $cnt2['company_address']; ?></td>
                            <td><?php echo $cnt2['company_telno']; ?></td>
                            <td><?php echo $cnt2['company_position']; ?></td>
                            <td><?php echo $cnt2['company_salary']; ?></td>
                            <td><?php echo date('M d, Y', strtotime($cnt2['company_date'])); ?></td>
                            <td><?php echo $cnt2['company_reason']; ?></td>
                        </tr>
                        <?php endforeach; endif; ?> -->
                        </table>
                        <div class="flex-box">
                            <span class="col-3"><label>Father's Name:</label><?php echo $cnt['father_name']; ?></span>
                            <span class="col-3"><label>Mother's Name:</label><?php echo $cnt['mother_name']; ?></span>
                            <span class="col-3"><label>Contact Person:</label>n</span>
                            <span class="col-3"><label>Address:</label>n</span>
                        </div>
                </div>
            </div>
            
            <h5>II. QUALIFICATIONS AND EDUCATIONAL BACKGROUND HIGHEST EDUCATIONAL ATTAINMENT</h5>
            <table class="data-box">
                <tr>
                    <th>Level</th>
                    <th>School/College/University</th>
                    <th>Year Graduated</th>
                    <th>Honors/Academic Awards Recieved</th>
                </tr>
                <?php if(isset($educ)): ?>
        <?php foreach($educ as $cnt1): ?>
                <tr>
                    <td>ELEMENTARY</td>
                    <td><?php echo $cnt1['elem_school']; ?></td>
                    <td><?php echo date('M d, Y', strtotime($cnt1['elem_date'])); ?></td>
                    <td><?php echo $cnt1['elem_honor']; ?></td>
                </tr>
                <tr>
                    <td>HIGH SCHOOL</td>
                    <td><?php echo $cnt1['high_school']; ?></td>
                    <td><?php echo date('M d, Y', strtotime($cnt1['high_date'])); ?></td>
                    <td><?php echo $cnt1['high_honor']; ?></td>
                </tr>
                <tr>
                    <td>COLLEGE</td>
                    <td><?php echo $cnt1['college_school']; ?></td>
                    <td><?php echo date('M d, Y', strtotime($cnt1['college_date'])); ?></td>
                    <td><?php echo $cnt1['college_honor']; ?></td>
                </tr>
                <tr>
                    <td style="text-align: center;">Degree Earned:</td>
                    <td colspan="3"><?php echo $cnt1['college_degree']; ?></td>
                </tr>
                <tr>
                    <td>GRADUATE STUDIES</td>
                    <td><?php echo $cnt1['graduate_school']; ?></td>
                    <td><?php echo date('M d, Y', strtotime($cnt1['graduate_date'])); ?></td>
                    <td><?php echo $cnt1['graduate_honor']; ?></td>
                </tr>
                <tr>
                    <td style="text-align: center;">Degree Earned:</td>
                    <td colspan="3"><?php echo $cnt1['graduate_degree']; ?></td>
                </tr>
                <tr>
                    <td>TRADE/VOCATIONAL</td>
                    <td><?php echo $cnt1['trade']; ?></td>
                    <td><?php echo date('M d, Y', strtotime($cnt1['trade_date'])); ?></td>
                    <td><?php echo $cnt1['trade_honor']; ?></td>
                </tr>
                <tr>
                    <td>Certificate/Diploma</td>
                    <td><?php echo $cnt1['cert']; ?></td>
                    <td><?php echo date('M d, Y', strtotime($cnt1['cert_date'])); ?></td>
                    <td><?php echo $cnt1['cert_honor']; ?></td>
                </tr>
            <?php endforeach; endif; ?>
            </table>

            <div style="break-after:page"></div>

            <h5>III. WORK EXPERIENCE (Use seperate sheet if necessary)</h5>
            <table class="data-box">
                <tr>
                    <th>Company Name</th>
                    <th>Address</th>
                    <th>Tel. No.:</th>
                    <th>Position/Level</th>
                    <th>Previous Salary</th>
                    <th>Inclusive Dates</th>
                    <th>Reason/s of Leaving</th>
                </tr>
                <?php if(isset($workexp)): ?>
                    <?php foreach($workexp as $cnt2): ?>
                <tr>
                    <td><?php echo $cnt2['company_name']; ?></td>
                    <td><?php echo $cnt2['company_address']; ?></td>
                    <td><?php echo $cnt2['company_telno']; ?></td>
                    <td><?php echo $cnt2['company_position']; ?></td>
                    <td><?php echo $cnt2['company_salary']; ?></td>
                    <td><?php echo date('M d, Y', strtotime($cnt2['company_date'])); ?></td>
                    <td><?php echo $cnt2['company_reason']; ?></td>
                </tr>
                <?php endforeach; endif; ?>
            </table>

            <h5>IV. SPPI RECORD</h5>
            <table class="data-box">
                <tr>
                    <td><label>Start Date at SPPI:</label><?php echo date('M d, Y', strtotime($cnt['doj'])); ?></td>
                    <td><label>SPPI ID No:</label><?php echo $cnt['empid']; ?></td>
                </tr>
                <tr>
                    <td colspan="2"><label>Current Position at SPPI:</label><?php if(isset($position)){
                            foreach($position as $pos){
                                if($pos['id']==$cnt['position']){
                                print $pos['position_name'];
                                }
                            }
                            } ?>
                    </td>
                </tr>
            </table>

            <h5 class="h5-text">SPPI PROJECT MANAGEMENT <span>(Name of Project involve under SPPI)</span> <br> (Use seperate sheet if necessary)</h5>
            <table class="data-box">
                <tr>
                    <th>Project Name</th>
                    <th>Company Name</th>
                    <th>Started Date</th>
                    <th>Date of Accomplishment</th>
                </tr>
                <?php if(isset($projectrec)): ?>
                    <?php foreach($projectrec as $cnt3): ?>
                <tr>
                    <td><?php echo $cnt3['project_name']; ?></td>
                    <td><?php echo $cnt3['company_name']; ?></td>
                    <td><?php echo date('M d, Y', strtotime($cnt3['started_date'])); ?></td>
                    <td><?php echo date('M d, Y', strtotime($cnt3['accomplish_date'])); ?></td>
                </tr>
                <?php endforeach; endif; ?>
            </table>
            <h5 class="text-stylee">I hereby certify that all information and data contained herein are true and correct to the best of my knowlegde and that any misrepresentation, falsification or willful omission herein shall establish a valid ground for my disqualification from the position I am applying for and/or dismissal from employement with the company.</h5>
            <div class="signature">
                <div class="sig-text">
                    Employee's Signature Above Printed Name
                </div>
                
            </div>
        </div>
    </page>
    <?php endforeach; endif;  ?>
</body>
</html>