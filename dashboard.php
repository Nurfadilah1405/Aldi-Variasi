<!DOCTYPE html>
<html lang="en">

<?php 
    session_start();
    
    require 'dbcon.php';

?>

<?php include('ntah/header.php')?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

       <!-- side bar -->
       <?php include ('ntah/side-bar.php')?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include ('ntah/navbar.php')?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard <i class="fas fa-fw fa-tachometer-alt"></i></h1>
                </div>
                <!-- Earnings (Monthly) Card Example -->
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    
                    <div class="card-body">
                    </br>
                    </br>
                        <div style="text-align:center;">

                        <h3 class="card-text" >Welcome to the Aldi Variasi Workshop Dashboard, where every task is managed with precision. We are committed to providing a system that facilitates, ensuring maximum efficiency for operational smoothness and delivering the best quality for your customers.</h3>
                        </div>
                    </br>
                    </br>
                       
                        
                    </div>
                </div>

               
                   

                  </div>  
                </div>
                    


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            
            <?php include('ntah/footer.php') ?>
            
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

   
   <?php include('ntah/js.php')?>

</body>

</html>