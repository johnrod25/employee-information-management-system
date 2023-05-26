<style>
  .boxx{
    padding: 0;
    border-radius: 10px;
    box-shadow: 0 4px 8px 0 #aaaaaa;
    z-index: 0;
  }
  .welcome-header{
    padding: 20px 20px;
    margin:10px 0 20px 0;
    border-radius: 10px;
    box-shadow: 0 4px 8px 0 #aaaaaa;
    background: lightgreen;
  }
  .welcome-header h1{
    font-size: 3.5rem;
    text-transform: capitalize;
    font-weight: 800;
    padding:0;

}
.welcome-header h3{
    font-size: 2.5rem;
    padding:0;
    margin-bottom:-10px;
}
</style>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
    <div class="welcome-header bg-info">
            <h3>Welcome Back</h3>
            <h1><?php echo $this->session->staffname; ?></h1>
            <p>We hope you had a great day off. Here's your employee information dashboard where you can manage your personal information, payroll details, and more.</p>
        </div>
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-primary boxx">
            <div class="inner">
              <h3><?php 
              if(isset($department))
              {
                echo sizeof($department);
              }
              else{
                echo 0;
              }
              ?></h3>

              <p>Departments</p>
            </div>
            <div class="icon">
              <i class="ionicons ion-social-buffer"></i>
            </div>
            <a href="<?php echo base_url(); ?>manage-department" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-maroon boxx">
            <div class="inner">
              <h3><?php 
              if(isset($staff))
              {
                echo sizeof($staff);
              }
              else{
                echo 0;
              }
              ?></h3>

              <p>Staff</p>
            </div>
            <div class="icon">
              <i class="ionicons ion-android-contacts"></i>
            </div>
            <a href="<?php echo base_url(); ?>manage-staff" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red boxx">
            <div class="inner">
              <h3><?php 
              if(isset($leave))
              {
                echo sizeof($leave);
              }
              else{
                echo 0;
              }
              ?></h3>

              <p>Leave Requests</p>
            </div>
            <div class="icon">
              <i class="ionicons ion-log-out"></i>
            </div>
            <a href="<?php echo base_url(); ?>approve-leave" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green boxx">
            <div class="inner">
              <h3>₱<?php 
              if(isset($salary))
              {
                foreach ($salary as $s) {
                  echo number_format($s['total']);
                }                
              }
              else{
                echo 0;
              } ?></h3>

              <p>Salary Paid</p>
            </div>
            <div class="icon">
              <i class="ionicons ion-social-usd"></i>
            </div>
            <a href="<?php echo base_url(); ?>manage-salary" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
