<style>
.td-data{
    width: 100px;
    display:flex; 
    justify-content:space-evenly; 
    align-items: center;
}
.td-a{
    display:flex; 
    justify-content:center; 
    align-items:center;
    padding:5px;
}
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
    Positions
    </h1>
    <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Positions</a></li>
    <li class="active">Manage Positions</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">

    <?php if($this->session->flashdata('success')): ?>
        <div id="notification">

        
        <div class="col-md-12" >
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
    </div>
    <div class="col-xs-12">
        <div class="box box-info">
        <div class="box-header">
            <h3 class="box-title">Manage Positions</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Position Name</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php 
                if(isset($position)):
                $i=1; 
                foreach($position as $pos): 
            ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $pos['position_name']; ?></td>
                    <td class="td-data">  
                        <a data-toggle="tooltip" title="Edit" class="td-a" href="<?php echo base_url(); ?>edit-position/<?php echo $pos['id']; ?>" class="btn btn-warning mr-3"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg></a>
                        <a data-toggle="tooltip" title="Delete" style="color: red;" class="td-a" class="btn btn-danger " href="#" onclick="javascript:confirmclick(<?php echo $pos['id'];?>)"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                    </svg></a>
                        </td>
                    <!-- <td>
                    <a href="<?php echo base_url(); ?>edit-position/<?php echo $pos['id']; ?>" class="btn btn-warning">Edit</a>
                    <a href="#" onclick="javascript:confirmclick(<?php echo $pos['id'];?>)" class="btn btn-danger">Delete</a>
                    </td> -->
                </tr>
                <?php 
                $i++;
                endforeach;
                endif; 
                ?>
            
            </tbody>
            </table>
        </div>
        <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
    function showNotification() {
        var notification = document.getElementById("notification");
        notification.style.display = "block";
        setTimeout(function() {
            notification.style.display = "none";
        }, 5000); // Hide the notification after 5 seconds
    }
</script>
<script>
$(document).ready(function () {
$('#example').DataTable();
});
function confirmclick(id) {
var answer = confirm ('This action cannot be undone. Are you sure you want to delete it?');
if (answer) {
    location.href="<?php echo base_url(); ?>delete-position/"+id;
}
}
</script>