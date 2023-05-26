<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Employee Management System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

</head>
<body >
<!-- onload="window.print();" -->
<div class="wrapper">
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
.sppi-logo p{
  font-size: 12px;
}
</style>
    <!-- Main content -->
    <section class="invoice" id="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="page-header">
            <div class="sppi-logo">
              <img src="<?php echo base_url(); ?>assets/dist/img/sppi-logo.png" alt="Visa" width="100px" height="100px">
              <div class="sppi-text">
                  <h4><strong>Static Power Philippines, Inc.</strong></h4>
                  <p>sdfgh</p>
                  <p>werty</p>
                  <p>jhtgr</p>
                  <p>uktyrter</p>
                  <p>yurtyet</p>
              </div>           
            </div>
          </div>
        </div>
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
            Email: admin@static.com
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          To
          <address>
            <strong><?php echo $cnt['firstname']." ".$cnt['midname']." ".$cnt['lastname']; if($cnt['suffix']!=""){print ", ".$cnt['suffix'];} ?></strong><br>
            <?php echo $cnt['permanent_address']; ?><br>
            Phone: <?php echo $cnt['mobile']; ?><br>
            Email: <?php echo $cnt['email']; ?>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>Invoice #00<?php echo $cnt['id']; ?></b><br>
          <br>
          <b>Paid On:</b> <?php echo date('d-m-Y', strtotime($cnt['added_on'])); ?>
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
          <!-- <img src="<?php echo base_url(); ?>assets/dist/img/credit/american-express.png" alt="American Express"> -->
          <img src="<?php echo base_url(); ?>assets/dist/img/credit/paypal2.png" alt="Paypal">

          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
            Dear <?php echo $cnt['staff_name']; ?>, Our Company has just processed your payments. Your payment has been deposited electronically in your account on <?php echo $cnt['added_on']; ?> <br> Regards OMS
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
    <?php 
      $i++;
      endforeach;
      endif; 
    ?>
</div>


<!-- ./wrapper -->
</body>
</html>
