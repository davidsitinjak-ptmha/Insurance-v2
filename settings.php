<?php 
    require 'function.php';
    require 'login-check.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Insurance APP</title>
    <!-- Floatting Label -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" >
                <!-- <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">MHD</div> -->
                <div class="fas mx-3">MHA</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-thin fa-car"></i>
                    <span>Insurance Unit</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="job-site.php">
                    <i class="fas fa-thin fa-sitemap"></i>
                    <span>Job Site</span>
                </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Action
            </div>
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="settings.php">
                    <i class="fas fa-thin fa-cogs"></i>
                    <span>Settings</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <h1 class="h3 mb-0 text-gray-800">SETTINGS</h1>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle"src="img/Company.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="settings.php" >
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <!-- <div class="card-header py-3">
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#myModal">New Insurance</a>
                        </div> -->
                        <div class="card-body">
                            <div class="faa py-3">
                            <a href="#" class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#myModal">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-plus"></i>
                                    </span>
                                    <span class="text">New User</span>
                                </a>
                            </div>
                            <div class="table-responsive">
                                <table id="dataTable"  class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $getAllLogin = mysqli_query($conn, 'SELECT * FROM login l');
                                            $i = 1;     
                                            while ($insuranceUnit = mysqli_fetch_array($getAllLogin)){
                                                $email = $insuranceUnit['email'];
                                                $idUser = $insuranceUnit['idUser'];
                                        ?>
                                                <tr>
                                                    <td><?=$i++;?></td>
                                                    <td><?=$email;?></td>

                                                    <td>
                                                        <!-- <div class="btn-group" role="group" aria-label="Basic example"> -->
                                                            <!-- <a type="button" class="btn btn-info"  href="detail.php?idInsurance=<?=$idUser?>" name= "view">
                                                                View
                                                            </a> -->
                                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#view<?=$idUser?>" disabled>
                                                                View
                                                            </button>
                                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit<?=$idUser?>">
                                                                Edit
                                                            </button>
                                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#delete<?=$idUser?>">
                                                                Delete
                                                            </button>
                                                        <!-- </div> -->
                                                    </td>
                                                </tr>
                                                
                                                
                                                <!-- Edit    Modal -->
                                                <div class="modal fade" id="edit<?=$idUser?>">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        
                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                                <div class="container">
                                                                    <h4><span class="label label-default">Update User</span></h4>
                                                                </div>
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            </div>
                                                            
                                                            <!-- Modal body -->
                                                            <form method="post">
                                                                <div class="modal-body">
                                                                   
                                                                    <div class="form-floating mb-3">
                                                                        <input type="text" name="email" placeholder="Email " class="form-control" id="floatingInput" value = "<?=$jobSiteName;?>" required>
                                                                        <label for="floatingInput">Email</label>
                                                                    </div>
                                                                   
                                                                    <input type="hidden" name="idUser" value="<?=$idUser?>" class="form-control">
                                                                    <div class="modal-footer">
                                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                                        <button type="submit" name="updateUser" class="btn btn-warning">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Delete Modal -->
                                                <div class="modal fade" id="delete<?=$idUser?>">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        
                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                            <h4 class="modal-title">Delete User</h4>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            </div>
                                                            
                                                            <!-- Modal body -->
                                                            <form method="post">
                                                                <div class="modal-body">
                                                                    <div class="form-floating mb-3">
                                                                        <span class="label label-default">Are you sure to delete User : <?=$email?>?</span>
                                                                    </div>                                                                
                                                                </div>
                                                                <input type="hidden" name="idUser" value="<?=$idUser?>" class="form-control">
                                                                <div class="modal-footer">
                                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                                    <button type="submit" name="DeleteUser" class="btn btn-danger">Delete</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->





            <!-- Footer -->
            <footer class="py-4 bg-light mt-auto bg-white">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

     <!-- Insert New Insurance Modal -->
     <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Insert New User</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <form method="post">
                    <div class="modal-body">
                        <div class="form-floating mb-3">
                            <input type="text" name="email" placeholder="Email" class="form-control" id="floatingInput" equired>
                            <label for="floatingInput">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="password" placeholder="Password" class="form-control" id="floatingInput" required>
                            <label for="floatingInput">Password</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="retypePassword" placeholder="Retype Password" class="form-control" id="floatingInput"  required>
                            <label for="floatingInput">Retype Password</label>
                            <span id='message'></span>

                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <button type="submit" name="addNewUser" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </div>








    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

    <script>
        $(document).ready( function() {
		       $('#dataTable').DataTable( {
                "bDestroy": true,
                "lengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]]
		       } );


               $("input[name='password']", "input[name='retypePassword']").on('keyup', function () {
                if ($("input[name='password']").val() == $("input[name='retypePassword']").val()) {
                    $('#message').html('Matching').css('color', 'green');
                } else 
                    $('#message').html('Not Matching').css('color', 'red');
                });


		 } );
    </script>
    
</body>

</html>