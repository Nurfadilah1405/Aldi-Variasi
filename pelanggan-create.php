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
 
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                
                    <div class="card-header">
                        <h4>Add Data Pelanggan <i class="fas fa-fw fa-plus"></i></h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                            <div class="mb-3">
                                <label>Nama Pelanggan</label>
                                <input type="text" name="nama_pelanggan" class="form-control">     
                            </div>

                            <div class="mb-3">
                                <label>Alamat Pelanggan</label>
                                <input type="text" name="alamat_pelanggan"class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Pelanggan Phone</label>
                                <input type="text" name="no_telp_pelanggan"class="form-control">

                            </div>

                            <div class="mb-3">
                                <label>No Kendaraan</label>
                                <input type="text" name="kd_kendaraan"class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Warna Kendaraan</label>
                                <input type="text" name="warna_kendaraan"class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Nama Kendaraan</label>
                                <input type="text" name="nama_kendaraan"class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Pelayanan</label>
                                <input type="text" name="pelayanan"class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Biaya Pelayanan</label>
                                <input type="text" name="biaya_pelayanan"class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Penggunaan Sparepart</label>
                                <input type="text" name="penggunaan_sparepart"class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Biaya Sparepart</label>
                                <input type="text" name="biaya_sparepart"class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Status</label>
                                <input type="text" name="status"class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Total Biaya</label>
                                <input type="text" name="total_biaya"class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Mekanik</label>
                                <input type="text" name="mekanik"class="form-control">
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="save-pelanggan" class="btn btn-primary"><i class="fas fa-fw fa-save"></i></button>
                                <a href="dt-pelanggan.php" class="btn btn-danger float-end"><i class="fas fa-fw fa-backward"></i></a>
                            </div>
                            <div>
                            
                            </div>
                        
                        </form>
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