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
                                            <h4>Edit data Pelanggan
                                                <i class="fas fa-fw fa-pen"></i>
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

                                                        <input type="hidden" name="id" value="<?= $tb_pelanggan['id'] ?>">
                                                        <div class="mb-3">
                                                            <label>Nama Pelanggan</label>
                                                            <input type="text" name="nama_pelanggan" value="<?= $tb_pelanggan['nama_pelanggan'];?>" class="form-control">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label>Alamat Pelanggan</label>
                                                            <input type="text" name="alamat_pelanggan" value="<?= $tb_pelanggan['alamat_pelanggan'];?>" class="form-control">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label>Pelanggan Phone</label>
                                                            <input type="text" name="no_telp_pelanggan" value="<?= $tb_pelanggan['no_telp_pelanggan'];?>" class="form-control">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label>No Kendaraan</label>
                                                            <input type="text" name="kd_kendaraan" value="<?= $tb_pelanggan['kd_kendaraan'];?>" class="form-control">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label>Warna Kendaraan</label>
                                                            <input type="text" name="warna_kendaraan" value="<?= $tb_pelanggan['warna_kendaraan'];?>" class="form-control">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label>Nama Kendaraan</label>
                                                            <input type="text" name="nama_kendaraan" value="<?= $tb_pelanggan['nama_kendaraan'];?>" class="form-control">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label>Pelayanan</label>
                                                            <input type="text" name="pelayanan" value="<?= $tb_pelanggan['pelayanan'];?>" class="form-control">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label>Biaya Pelayanan</label>
                                                            <input type="text" name="biaya_pelayanan" value="<?= $tb_pelanggan['biaya_pelayanan'];?>" class="form-control">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label>Penggunaan Sparepart</label>
                                                            <input type="text" name="penggunaan_sparepart" value="<?= $tb_pelanggan['penggunaan_sparepart'];?>" class="form-control">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label>Biaya Sparepart</label>
                                                            <input type="text" name="biaya_sparepart" value="<?= $tb_pelanggan['biaya_sparepart'];?>" class="form-control">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label>Status</label>
                                                            <input type="text" name="status" value="<?= $tb_pelanggan['status'];?>" class="form-control">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label>Total Biaya</label>
                                                            <input type="text" name="total_biaya" value="<?= $tb_pelanggan['total_biaya'];?>" class="form-control">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label>Mekanik</label>
                                                            <input type="text" name="mekanik" value="<?= $tb_pelanggan['mekanik'];?>" class="form-control">
                                                        </div>

                                                        <div class="mb-3">
                                                            <button type="submit" name="update-pelanggan" class="btn btn-primary"><i class="fas fa-fw fa-save"></i> Update</button>
                                                            <a href="dt-pelanggan.php" class="btn btn-danger float-end"><i class="fas fa-fw fa-backward"></i></a>
                                                        </div>

                                                    </form>
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
