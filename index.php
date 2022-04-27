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

    <title>Insurance</title>
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
                <div class="fas mx-3">MHD</div>
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
                    <i class="fas fa-fw fa-table"></i>
                    <span>Insurance Unit</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="job-site.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Job Site</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Action
            </div>
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    <span>Logout</span></a>
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
                    <h1 class="h3 mb-0 text-gray-800">UNIT INSURANCE</h1>

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
                                <a class="dropdown-item" href="#" disable>
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
                                <a href="#" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#myModal">New Insurance</a>
                                <a href="report-insurance.php" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm">Generate Report</a>
                            </div>
                            <div class="table-responsive">
                                <table id="dataTable"  class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Job site</th>
                                            <th>Unit Type</th>
                                            <!-- <th>Chassis</th> -->
                                            <!-- <th>Engine</th> -->
                                            <th>Years</th>
                                            <!-- <th>Door No</th> -->
                                            <th>Ins/Un-Ins</th>
                                            <!-- <th>Polis No</th> -->
                                            <!-- <th>Currency type</th> -->
                                            <!-- <th>Sum Insured</th> -->
                                            <!-- <th>Rate</th> -->
                                            <th>Periode</th>
                                            <!-- <th>Amount</th> -->
                                            <!-- <th>Comments</th> -->
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $getAllInsuranceUnit = mysqli_query($conn, 'SELECT * FROM insuranceUnit i, JobSite j WHERE i.idJobSite = j.idJobSite');
                                            $i = 1;
                                            while ($insuranceUnit = mysqli_fetch_array($getAllInsuranceUnit)){
                                                $idInsurance = $insuranceUnit['idInsurance'];
                                                $jobSiteName = $insuranceUnit['jobSiteName'];
                                                $unitType = $insuranceUnit['unitType'];
                                                $chassis = $insuranceUnit['chassis'];
                                                $engine = $insuranceUnit['engine'];
                                                $years = $insuranceUnit['years'];
                                                $doorNo = $insuranceUnit['doorNo'];
                                                $insOrUnIns = $insuranceUnit['insOrUnIns'];
                                                $pilisNo = $insuranceUnit['pilisNo'];
                                                $currency = $insuranceUnit['currency'];
                                                $sumInsured = $insuranceUnit['sumInsured'];
                                                $rate = $insuranceUnit['rate'];
                                                $periode = $insuranceUnit['periode'];
                                                $amount = $insuranceUnit['amount'];
                                                $comments = $insuranceUnit['comments'];
                                                $idJobSite = $insuranceUnit['idJobSite'];
                                        ?>
                                                <tr>
                                                    <td><?=$i++;?></td>
                                                    <td><?=$jobSiteName;?></td>
                                                    <td><?=$unitType;?></td>
                                                    <!-- <td><?=$chassis;?></td> -->
                                                    <!-- <td><?=$engine;?></td> -->
                                                    <td><?=$years;?></td>
                                                    <!-- <td><?=$doorNo;?></td> -->
                                                    <td><?=$insOrUnIns;?></td>
                                                    <!-- <td><?=$pilisNo;?></td> -->
                                                    <!-- <td><?=$currency;?></td> -->
                                                    <!-- <td><?=$sumInsured;?></td> -->
                                                    <!-- <td><?=$rate;?></td> -->
                                                    <td><?=$periode;?></td>
                                                    <!-- <td><?=$amount;?></td> -->
                                                    <!-- <td><?=$comments;?></td> -->

                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <!-- <a type="button" class="btn btn-info"  href="detail.php?idInsurance=<?=$idInsurance?>" name= "view">
                                                                View
                                                            </a> -->
                                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#view<?=$idInsurance?>">
                                                                View
                                                            </button>
                                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit<?=$idInsurance?>">
                                                                Edit
                                                            </button>
                                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#delete<?=$idInsurance?>">
                                                                Delete
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                

                                                <!-- View Modal -->
                                                <div class="modal fade" id="view<?=$idInsurance?>">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        
                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                            <h4 class="modal-title">Details Insuracne</h4>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            </div>
                                                            
                                                            <!-- Modal body -->
                                                            <form method="post">                                                     
                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <ul class="list-unstyled mb-0">
                                                                                    <li>Unit Type</li>
                                                                                    <li>Chassis</li>
                                                                                    <li>Engine</li>
                                                                                    <li>Years</li>
                                                                                    <li>Door No</li>
                                                                                    <li>Ins/Un-Ins</li>
                                                                                    <li>Polis No</li>
                                                                                    <li>Currency type</li>
                                                                                    <li>Sum Insured</li>
                                                                                    <li>Rate</li>
                                                                                    <li>Periode</li>
                                                                                    <li>Amount</li>
                                                                                    <li>Comments</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="col-sm-7">
                                                                                <ul class="list-unstyled mb-0">
                                                                                    <li><a herf="#!"> : <?=$unitType;?></a></li>
                                                                                    <li><a herf="#!"> : <?=$chassis;?></a></li>
                                                                                    <li><a herf="#!"> : <?=$engine;?></a></li>
                                                                                    <li><a herf="#!"> : <?=$years;?></a></li>
                                                                                    <li><a herf="#!"> : <?=$doorNo;?></a></li>
                                                                                    <li><a herf="#!"> : <?=$insOrUnIns;?></a></li>
                                                                                    <li><a herf="#!"> : <?=$pilisNo;?></a></li>
                                                                                    <li><a herf="#!"> : <?=$currency;?></a></li>
                                                                                    <li><a herf="#!"> : <?=$sumInsured;?></a></li>
                                                                                    <li><a herf="#!"> : <?=$rate;?></a></li>
                                                                                    <li><a herf="#!"> : <?=$periode;?></a></li>
                                                                                    <li><a herf="#!"> : <?=$amount;?></a></li>
                                                                                    <li><a herf="#!"> : <?=$comments;?></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                                    </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <!-- Edit    Modal -->
                                                <div class="modal fade" id="edit<?=$idInsurance?>">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        
                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                                <div class="container">
                                                                    <h4><span class="label label-default">Update Insurance</span></h4>
                                                                    <h6>Site : <span class="label label-default"><?=$jobSiteName;?></span></h6>
                                                                    <h6>Unit Type : <span class="label label-default"><?=$unitType;?></span></h6>
                                                                </div>
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            </div>
                                                            
                                                            <!-- Modal body -->
                                                            <form method="post">
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <div class="form-floating mb-3">
                                                                            <select style="display:none" name="jobSite" class="form-control custom-select mr-sm-2" id="inlineFormCustomSelect">
                                                                                <option value="<?=$idJobSite;?>"><?=$jobSiteName;?></option> 
                                                                                <?php
                                                                                    $getJobSite = mysqli_query($conn, "SELECT * FROM JobSite") or die("Could not search!");
                                                                                    while($jobSiteArray = mysqli_fetch_array($getJobSite)){
                                                                                        $idJobSite2 = $jobSiteArray['idJobSite'];
                                                                                        $jobSiteName = $jobSiteArray['jobSiteName'];
                                                                                        if($idJobSite2 != $idJobSite){
                                                                                            ?>
                                                                                                <option value="<?=$idJobSite2;?>"><?=$jobSiteName;?></option> 
                                                                                            <?php
                                                                                        }
                                                                                    } 
                                                                                ?>
                                                                            </select>
                                                                            <!-- <label for="floatingInput">Job Site</label> -->
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="form-floating mb-3">
                                                                        <input type="hidden" name="unitType" placeholder="Unit Type" class="form-control" id="floatingInput" value = "<?=$unitType;?>" required>
                                                                        <!-- <label for="floatingInput">Unit Type</label> -->
                                                                    </div>
                                                                    <div class="form-floating mb-3">
                                                                        <input type="hidden" name="chassis" placeholder="Chassis" class="form-control" id="floatingInput" value = "<?=$chassis;?>" required>
                                                                        <!-- <label for="floatingInput">Chassis</label> -->
                                                                    </div>
                                                                    <div class="form-row">
                                                                        <div class="form-floating col-md-5">
                                                                            <input type="hidden" name="engine" placeholder="Engine" class="form-control" id="floatingInput" value = "<?=$engine;?>" required>
                                                                            <!-- <label for="floatingInput">Engine</label> -->
                                                                        </div>
                                                                        <div class="form-floating col-md-4">
                                                                            <input type="hidden" name="doorNo" placeholder="Door No" class="form-control" id="floatingInput" value = "<?=$doorNo;?>" required>
                                                                            <!-- <label for="floatingInput">Door No</label> -->
                                                                        </div>
                                                                        <div class="form-floating col-md-3">
                                                                            <input type="hidden" name="years" placeholder="Year" id="datepicker" class="form-control"  value = "<?=$years;?>" required>
                                                                            <!-- <label class="control-label" for="datepicker">Year</label> -->
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-floating mb-3">
                                                                        <div class="form-row">
                                                                            <div class="form-floating col-md-4">
                                                                                <select name="insOrUnIns" class="form-control custom-select mr-sm-2" id="inlineFormCustomSelect" required>
                                                                                    <?php if($insOrUnIns == "unInsurance"){ ?>
                                                                                        <option value="insurance" >Insurance</option>
                                                                                        <option value="unInsurance" Selected>UnInsurance</option>   
                                                                                    <?php }else{ ?>                                  
                                                                                        <option value="insurance" Selected>Insurance</option> 
                                                                                        <option value="unInsurance">UnInsurance</option> 
                                                                                    <?php } ?> 

                                                                                </select>
                                                                                <label for="inlineFormCustomSelect">ins or UnIns</label>
                                                                            </div>
                                                                            <div class="form-floating col-md-8">
                                                                                <input type="text" name="pilisNo" placeholder="Polis No" class="form-control" id="floatingInput" value = "<?=$pilisNo;?>" required>
                                                                                <label for="floatingInput">Polis No</label>
                                                                            </div>
                                                                        </div>                                                                                                                       
                                                                    </div>
                                                                    <div class="form-floating mb-3">
                                                                        <div class="form-row">
                                                                            <div class="form-floating col-md-3">
                                                                                <select name="currency" class="form-control custom-select mr-sm-2" id="inlineFormCustomSelect" required>
                                                                                    <?php if($currency == "usd"){ ?>
                                                                                        <option value="rp" >Rp</option>
                                                                                        <option value="usd" Selected>USD</option>   
                                                                                    <?php }else{ ?>
                                                                                        <option value="rp" Selected>Rp</option>
                                                                                        <option value="usd">USD</option>  
                                                                                    <?php } ?>
                                                                                </select>
                                                                                <label for="inlineFormCustomSelect">Currency</label>
                                                                            </div>
                                                                            <div class="form-floating col-md-5">
                                                                                <input type="text" name="sumInsured" placeholder="Sum Insured" class="form-control" id="floatingInput" value = "<?=$sumInsured;?>" required>
                                                                                <label for="floatingInput">Sum Insured</label>
                                                                            </div>
                                                                            <div class="form-floating col-md-4">
                                                                                <input type="text" name="rate" placeholder="Rate" class="form-control" id="floatingInput" value = "<?=$rate;?>" required>
                                                                                <label for="floatingInput">Rate</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-floating mb-3">
                                                                        <div class="form-row">
                                                                            <div class="form-floating col-md-7">
                                                                                <input type="text" name="periode" placeholder="Periode" class="form-control" id="floatingInput" value = "<?=$periode;?>" required>
                                                                                <label for="floatingInput">Periode</label>
                                                                            </div>
                                                                            <div class="form-floating col-md-5">
                                                                                <input type="text" name="amount" placeholder="Amount" class="form-control" id="floatingInput" value = "<?=$amount;?>" required>
                                                                                <label for="floatingInput">Amount</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-floating mb-3">
                                                                        <div class="form-floating">
                                                                            <textarea class="form-control" name="comments" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 80px"><?=$comments;?></textarea>
                                                                            <label for="floatingTextarea2">Comments</label>
                                                                        </div>
                                                                    </div>
                                                                    <input type="hidden" name="idInsurance" value="<?=$idInsurance?>" class="form-control">
                                                                    <div class="modal-footer">
                                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                                        <button type="submit" name="updateInsurance" class="btn btn-warning">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Delete Modal -->
                                                <div class="modal fade" id="delete<?=$idInsurance?>">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        
                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                            <h4 class="modal-title">Delete Insuracne</h4>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            </div>
                                                            
                                                            <!-- Modal body -->
                                                            <form method="post">
                                                                <div class="modal-body">
                                                                    <div class="container">                                   
                                                                        <h4><span class="label label-default">Are you sure to delete </span></h4>
                                                                        <h6>Site : <span class="label label-default"><?=$jobSiteName;?></span></h6>
                                                                        <h6>Unit Type : <span class="label label-default"><?=$unitType;?></span></h6>
                                                                    </div>                                                                 <div class="form-floating mb-3">
                                                                    <input type="hidden" name="idInsurance" value="<?=$idInsurance?>" class="form-control">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                                    <button type="submit" name="DeleteInsurance" class="btn btn-danger">Delete</button>
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
                    <h4 class="modal-title">Insert New Insurance</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <form method="post">
                    <div class="modal-body">
                        <div class="form-floating mb-3">
                            <select name="jobSite" class="form-control custom-select mr-sm-2" id="inlineFormCustomSelect floatingInput" placeholder="Unit Type" required>
                                <?php
                                    $getJobSite = mysqli_query($conn, "SELECT * FROM JobSite");
                                    while($jobSiteArray = mysqli_fetch_array($getJobSite)){
                                        $idJobSite = $jobSiteArray['idJobSite'];
                                        $jobSiteName = $jobSiteArray['jobSiteName'];
                                        ?>
                                            <option value="<?=$idJobSite;?>"><?=$jobSiteName;?></option> 
                                        <?php
                                    } 
                                ?>
                            </select>
                            <label for="floatingInput">Job Site</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="unitType" placeholder="Unit Type" class="form-control" id="floatingInput" required>
                            <label for="floatingInput">Unit Type</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="chassis" placeholder="Chassis" class="form-control" id="floatingInput" required>
                            <label for="floatingInput">Chassis</label>
                        </div>
                        <div class="form-floating mb-3">
                            <div class="form-row">
                                <div class="form-floating col-md-5">
                                    <input type="text" name="engine" placeholder="Engine" class="form-control" id="floatingInput" required>
                                    <label for="floatingInput">Engine</label>
                                </div>
                                <div class="form-floating col-md-4">
                                    <input type="text" name="doorNo" placeholder="Door No" class="form-control" id="floatingInput" required>
                                    <label for="floatingInput">Door No</label>
                                </div>
                                <div class="form-floating col-md-3">
                                    <input type="text" name="years" placeholder="Year" id="datepicker" class="form-control" required>
                                    <label class="control-label" for="datepicker">Year</label>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="form-floating mb-3">
                            <div class="form-row">
                                <div class="form-floating col-md-4">
                                    <select name="insOrUnIns" class="form-control custom-select mr-sm-2" id="inlineFormCustomSelect" required>
                                        <option value="insurance" Selected>Insurance</option> 
                                        <option value="unInsurance">UnInsurance</option> 
                                    </select>
                                    <label for="inlineFormCustomSelect">ins or UnIns</label>
                                </div>
                                <div class="form-floating col-md-8">
                                    <input type="text" name="pilisNo" placeholder="Polis No" class="form-control" id="floatingInput" required>
                                    <label for="floatingInput">Polis No</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <div class="form-row">
                                <div class="form-floating col-md-3">
                                    <select name="currency" class="form-control custom-select mr-sm-2" id="inlineFormCustomSelect" required>
                                        <option value="rp" Selected>Rp</option> 
                                        <option value="usd">USD</option> 
                                    </select>
                                    <label for="inlineFormCustomSelect">Currency</label>
                                </div>
                                <div class="form-floating col-md-5">
                                    <input type="text" name="sumInsured" placeholder="Sum Insured" class="form-control" id="floatingInput" required>
                                    <label for="floatingInput">Sum Insured</label>
                                </div>
                                <div class="form-floating col-md-4">
                                    <input type="text" name="rate" placeholder="Rate" class="form-control" id="floatingInput" data-sb-validations="required" >
                                    <label for="floatingInput">Rate</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-floating mb-3">
                            <div class="form-row">
                                <div class="form-floating col-md-7">
                                    <input type="text" name="periode" placeholder="Periode" class="form-control" id="floatingInput" data-sb-validations="required" >
                                    <label for="floatingInput">Periode</label>
                                    <div class="invalid-feedback" data-sb-feedback="floatingInput:required">A phone number is required.</div>
                                </div>
                                <div class="form-floating col-md-5">
                                    <input type="text" name="amount" placeholder="Amount" class="form-control" id="floatingInput" data-sb-validations="required" >
                                    <label for="floatingInput">Amount</label>
                                    <div class="invalid-feedback" data-sb-feedback="floatingInput:required">A phone number is required.</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" name="comments" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 80px"></textarea>
                                <label for="floatingTextarea2">Comments</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <button type="submit" name="addNewInsurance" class="btn btn-primary">Submit</button>
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
		 } );
    </script>
    
</body>

</html>