
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Invoice
        <small>#00<?php echo rand(1000,100)?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Salary Management</a></li>
        <li class="active">Invoice</li>
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
                <h4><strong>Static Power Philippines, Inc.<br> Payment Invoice</strong></h4>
            </div>           
        </div>
        <small class="pull-right">Date: <?php echo date('M d, Y'); ?></small>
    </div>
    <!-- /.col -->
        <!-- <div class="col-xs-12">
          <h2 class="page-header">
            Employee Management System
            <small class="pull-right">Date: <?php echo date('d-m-Y'); ?></small>
          </h2>
        </div> -->
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          From
          <address>
            <strong>Static Power Philippines, Inc.</strong><br>
            San Antonio, Pasig City<br>
            Website: www.static.ph<br>
            Email: static.ph@gmail.com
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          To
          <address>
            <?php $fullname = $cnt['firstname']." ".$cnt['midname']." ".$cnt['lastname']; if($cnt['suffix']!=""){print ", ".$cnt['suffix'];}; ?>
            <strong><?php echo $fullname; ?></strong><br>
            <?php echo $cnt['permanent_address']; ?><br>
            Phone: <?php echo $cnt['mobile']; ?><br>
            Email: <?php echo $cnt['email']; ?>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>Invoice #00<?php echo $cnt['id']; ?></b><br>
          <br>
          <b>Paid On:</b> <?php echo date('M d, Y', strtotime($cnt['added_on'])); ?>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>#</th>
              <th>Basic Salary</th>
              <th>Allowance</th>
              <th>Subtotal</th>
            </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>₱ <?php echo $cnt['basic_salary']; ?></td>
                <td>₱ <?php echo $cnt['allowance']; ?></td>
                <td>₱ <?php echo $cnt['total']; ?></td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
          <p class="lead">Payment Methods:</p>
          <img src="<?php echo base_url(); ?>assets/dist/img/credit/visa.png" alt="Visa">
          <img src="<?php echo base_url(); ?>assets/dist/img/credit/mastercard.png" alt="Mastercard">
          <img src="<?php echo base_url(); ?>assets/dist/img/credit/paypal2.png" alt="Paypal">

          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
          Dear <?php echo $fullname; ?>, Our Company has just processed your payments. Your payment has been deposited electronically in your account on <?php echo date('d-m-Y', strtotime($cnt['added_on'])); ?>
          </p>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <p class="lead">Salary Info</p>

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">Subtotal:</th>
                <td>₱ <?php echo $cnt['total']; ?></td>
              </tr>
              <tr>
                <th>Tax (0%)</th>
                <td>₱ 0</td>
              </tr>
              <tr>
                <th>Total:</th>
                <td>₱ <?php echo $cnt['total']; ?></td>
              </tr>
            </table>
          </div>
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
          <!-- <a href="<?php echo base_url(); ?>print-invoice/<?php echo $cnt['id']; ?>" target="_blank" class="btn btn-info" style="margin: 0 0 20px 10px;"><i class="fa fa-print"></i> Print</a> -->
          <!-- <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment
          </button> -->
          <button type="button" id="cmd" class="btn btn-success pull-right" style="margin: 0 10px 20px 0;">
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
            doc.save('sppi-invoice.pdf');
        }); 
      });
  });
  </script>