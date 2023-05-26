<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
    Reciept
    <small>#00<?php echo rand(1000,100)?></small>
    </h1>
    <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Salary Management</a></li>
    <li class="active">Reciept</li>
    </ol>
</section>

<?php 
    if(isset($content)):
    $i=1; 
    foreach($content as $cnt): 
?>
<style>
.stactic{
    display:flex;
    justify-content: space-between;
    align-items:center;
    text-transform: uppercase;
    margin: 0;
}
.sppi-logo{
    display:flex;
    align-items:center;
    flex:1;
}
.sppi-logo img{
    margin:5px;
}
.net-pay{
    width: 100%;
    background: black;
    color: white;
    display:flex;
    align-items:center;
    justify-content: center;
    flex:1;
}
.pull-center{
    text-align: center;
}
</style>
<!-- Main content -->
<section class="invoice" id="invoice">
    <!-- title row -->
    <div class="row">
    <div class="col-xs-12 page-header stactic">
        <div class="sppi-logo">
            <img src="<?php echo base_url(); ?>assets/dist/img/sppi-logo.png" alt="Visa" width="50px" height="50px">
            <div class="sppi-text">
                <h4><strong>Static Power Philippines, Inc.<br> Payment Advice Slip</strong></h4>
            </div>           
        </div>
        <div class="net-pay">
            <h2>Net Pay = PHP <?php echo number_format($cnt['total']); ?>.00</h2>
        </div>
        
    </div>
    <!-- /.col -->
    </div>
    <!-- Table row -->
    <div class="row">
    <div class="col-xs-12 table-responsive">
        <table class="table">
        <tbody>
        <tr>
            <td>Name: </td>
            <td> <?php echo $cnt['firstname']." ".$cnt['midname']." ".$cnt['lastname']; if($cnt['suffix']!=""){print ", ".$cnt['suffix'];} ?></td>
            <td>Daily Rate: </td>
            <td><small class="pull-right"> ₱ <?php echo number_format($cnt['basic_salary']); ?></small></td>
        </tr>
        <tr>
            <td>Department: </td>
            <td><?php echo $cnt['department_name']; ?></td>
            <td>Salary Date: </td>
            <td><small class="pull-right"><?php echo date('M d, Y'); ?></small></td>
        </tr>
        <tr>
            <td>Position: </td>
            <td><?php echo $cnt['position_name']; ?></td>
            <td>Cut-Off: </td>
            <td><small class="pull-right"></small></td>
        </tr>
        </tbody>
        </table>
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->


    <!-- Table row -->
    <div class="row">
    <div class="col-xs-12 table-responsive">
        <table class="table">
        <thead>
        <tr>
            <th class="pull-center" colspan="2">INCOME</th>
            <th class="pull-center" colspan="2">DEDUCTION</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>REGULAR:</td>
            <td>₱ <?php echo number_format($cnt['basic_salary']); ?></td>
            <td>WITH TAX: </td>
            <td class="pull-right"></td>
        </tr>
        <tr>
            <td>OVERTIME: </td>
            <td>₱ <?php echo number_format($cnt['allowance']); ?></td>
            <td>SSS LOAN: </td>
            <td></td>
        </tr>
        <tr>
            <td>REST DAY O.T.: </td>
            <td></td>
            <td>CASH ADVANCE:</td>
            <td><small class="pull-right"></small></td>
        </tr>
        <tr>
            <td><strong>TOTAL INCOME:</strong></td>
            <td>₱ <?php echo number_format($cnt['total']); ?></td>
            <td><strong>TOTAL DEDUCTION:</strong></td>
            <td><small class="pull-right"></small></td>
        </tr>
        </tbody>
        </table>
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->

</section>
<!-- /.content -->
<section class="content-header">
    <!-- this row will not appear when printing -->
    <div class="row no-print">
    <div class="col-xs-12">
        <!-- <a href="<?php echo base_url(); ?>print-invoice/<?php echo $cnt['id']; ?>" target="_blank" class="btn btn-info"><i class="fa fa-print"></i> Print</a> -->
        <!-- <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment
        </button> -->
        <button type="button" id="cmd" class="btn btn-success pull-right" style="margin-right: 50px;">
        <i class="fa fa-download"></i> Generate PDF
        </button>
    </div>
</section>
<?php 
    $i++;
    endforeach;
    endif; 
?>

<div class="clearfix"></div>
</div>
<!-- /.content-wrapper -->



<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>
<script>
$(document).ready(function() {
    var doc = new jsPDF("l", "pt", "letter");
    $('#cmd').click(function () {
    let doc = new jsPDF('p','pt','a4');
    doc.addHTML($('#invoice'),function() {
        doc.save('sppi-reciept.pdf');
    }); 
    });
});
</script>