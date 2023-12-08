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
                                            <h4>Edit data Sparepart
                                                <i class="fas fa-fw fa-pen"></i>
                                            </h4>
                                        </div>
                                        <div class="card-body">
                                            <?php
                                            if(isset($_GET['id_sparepart']))
                                            {
                                                $tb_sparepart_id = mysqli_real_escape_string($con, $_GET['id_sparepart']);
                                                $query = "SELECT * FROM tb_sparepart WHERE id_sparepart='$tb_sparepart_id'";
                                                $query_run = mysqli_query($con, $query);

                                                if(mysqli_num_rows($query_run) > 0)
                                                {
                                                    $tb_sparepart = mysqli_fetch_array($query_run);
                                                    ?>
                                                    <form action="sparepart_code.php" method="POST">

                                                        <input type="hidden" name="id_sparepart" value="<?= $tb_sparepart['id_sparepart'] ?>">
                                                        <div class="mb-3">
                                                            <label>Nama Barang</label>
                                                            <input type="text" name="nama_barang" value="<?= $tb_sparepart['nama_barang'];?>" class="form-control">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label>Stok</label>
                                                            <input type="text" name="stok" value="<?= $tb_sparepart['stok'];?>" class="form-control">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label>Harga</label>
                                                            <input type="text" name="harga" value="<?= $tb_sparepart['harga'];?>" class="form-control">
                                                        </div>

                                                        <div class="mb-3">
                                                            <button type="submit" name="update-sparepart" class="btn btn-primary"><i class="fas fa-fw fa-save"></i> Update</button>
                                                            <a href="dt-sparepart.php" class="btn btn-danger float-end"><i class="fas fa-fw fa-backward"></i></a>
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
