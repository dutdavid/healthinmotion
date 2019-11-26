<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Upload Report</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.php">Upload Report</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
   
    <ul class="navbar-nav ml-auto ml-md-0">
     
     
     <li class="nav-item dropdown no-arrow">
       <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fas fa-user-circle fa-fw"></i>
       </a>
       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
       <?php
                                if($_SESSION["username"]) {
                                ?>
                                 <?php echo $_SESSION["username"]; ?><a class="dropdown-item" href="logout.php"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                 <?php
                                  }else echo "<h1></h1>";
                                      ?>
         
       </div>
     </li>
   </ul>

 </nav>

  <div id="wrapper">

   <!-- Sidebar -->
   <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Diagnostics</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          
          <a class="dropdown-item" href="view_report.php">view report</a>
          <a class="dropdown-item active" href="upload.php">Upload Report</a>
        </div>
        </li>
     
     <li class="nav-item">
       <a class="nav-link" href="users.php">
         <i class="fas fa-fw fa-table"></i>
         <span>Doctors/Users</span></a>
     </li>
   </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Upload Report</li>
        </ol>

      </div>
      <!-- /.container-fluid -->

      <div class="container-fluid">

<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="card">

    <div class="card-body wizard-content">
        <h4 class="card-title">Upload Diagnostics</h4>
        <h6 class="card-subtitle"></h6>
        <form action="db_holder.php" method = "POST">
            <div>
                <h3></h3>
                <section>
                         <div class="form-group">
    
      
    <label for="patient_Fn">Patient First Name*</label>
    <input type="text" class="form-control" id="patient_Fn" placeholder="Enter First Name" name="patient_Fn" required />
    </div>
    <label for="patient_Ln">Patient Last Name*</label>
    <input type="text" class="form-control" id="patient_Ln" placeholder="Enter Last Name" name="patient_Ln" required />
    </div>

    <div class="form-group">

     </div>
    <div class="form-group">
   <label for="text">Upload Patient Report*</label>
    <input type="file" class="form-control" id="duration" placeholder="Enter Duration Monthly/annually" name="duration" required />
    </div>


    <div class="border-top">
     <div class="card-body">
            
     <button  type="submit" name ="upload" class="btn btn-success">Upload</button></div>


                </section>
               
            </div>
        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

</body>

</html>
