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
                    <body>
                        <div class="container mt-5">
                            <?php include('message.php'); ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Detail Data Pelanggan
                                            <i class="fas fa-fw fa-exclamation"></i> 
                                            </h4>
                                        </div>
                                        <div class="card-body">
                                            <?php 
                                            if(isset($_GET['id']))
                                            {
                                                $tb_pelanggan_id = mysqli_real_escape_string($con, $_GET['id']);
                                                $query = "SELECT * FROM tb_pelanggan WHERE id='$tb_pelanggan_id'";
                                                $query_run = mysqli_query($con, $query);

                                                if(mysqli_num_rows($query_run) > 0)
                                                {
                                                    $tb_pelanggan = mysqli_fetch_array($query_run);
                                                    ?>
                                            <form action="code.php" method="POST">

                                                <div class="mb-3">
                                                    <label>Nama Pelanggan</label>     
                                                </div>
                                                <p class="form-control">
                                                    <?= $tb_pelanggan['nama_pelanggan'];?>
                                                </p>

                                                <div class="mb-3">
                                                    <label>Alamat Pelanggan</label>
                                                </div>
                                                <p class="form-control">
                                                    <?= $tb_pelanggan['alamat_pelanggan'];?>
                                                </p>

                                                <div class="mb-3">
                                                    <label>Pelanggan Phone</label>
                                                </div>
                                                <p class="form-control">
                                                    <?= $tb_pelanggan['no_telp_pelanggan'];?>
                                                </p>
                                                

                                                <div class="mb-3">
                                                    <label>No Kendaraan</label>
                                                </div>
                                                <p class="form-control">
                                                    <?= $tb_pelanggan['kd_kendaraan'];?>
                                                </p>

                                                <div class="mb-3">
                                                    <label>Warna Kendaraan</label>
                                                </div>
                                                <p class="form-control">
                                                    <?= $tb_pelanggan['warna_kendaraan'];?>
                                                </p>

                                                <div class="mb-3">
                                                    <label>Nama Kendaraan</label>
                                                </div>
                                                <p class="form-control">
                                                    <?= $tb_pelanggan['nama_kendaraan'];?>
                                                </p>

                                                <div class="mb-3">
                                                    <label>Pelayanan</label>
                                                </div>
                                                <p class="form-control">
                                                    <?= $tb_pelanggan['pelayanan'];?>
                                                </p>

                                                <div class="mb-3">
                                                    <label>Biaya Pelayanan</label>
                                                </div>
                                                <p class="form-control">
                                                    <?= $tb_pelanggan['biaya_pelayanan'];?>
                                                </p>

                                                <div class="mb-3">
                                                    <label>Penggunaan Sparepart</label>
                                                </div>
                                                <p class="form-control">
                                                    <?= $tb_pelanggan['penggunaan_sparepart'];?>
                                                </p>

                                                <div class="mb-3">
                                                    <label>Biaya Sparepart</label>
                                                </div>
                                                <p class="form-control">
                                                    <?= $tb_pelanggan['biaya_sparepart'];?>
                                                </p>

                                                <div class="mb-3">
                                                    <label>Status</label>
                                                </div>
                                                <p class="form-control">
                                                    <?= $tb_pelanggan['status'];?>
                                                </p>

                                                <div class="mb-3">
                                                    <label>Total Biaya</label>
                                                </div>
                                                <p class="form-control">
                                                    <?= $tb_pelanggan['total_biaya'];?>
                                                </p>

                                                <div class="mb-3">
                                                    <label>Mekanik</label>
                                                </div>
                                                <p class="form-control">
                                                    <?= $tb_pelanggan['mekanik'];?>
                                                </p>
                                            
                                            </form>
                                            <div>
                                            <a href="dt-pelanggan.php" class="btn btn-danger float-end"><i class="fas fa-fw fa-backward"></i></a>
                                            </div>
                                            <?php
                                                }
                                                else
                                                {
                                                    echo "<h4>No such id Found</h4>";
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

                        
                    </body>
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
</html>