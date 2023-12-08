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
    
                    <div class="container mt-4" >
                        <?php include('message.php')?>
                        <form action="" method="POST">
                            <div class="input-group mb-3">
                                <input type="text" name="tcari" value="<?php if(isset($_GET['search'])){echo $_GET['search']; }?>" class="form-control">
                                <button type="submit" name="bcari" class="btn btn-primary"><i class="fas fa-fw fa-search"></i></button>
                                <button type="submit" name="breset" class="btn btn-danger"><b>X</b></button>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-header">
                                    <h4>Data Sparepart
                                        <a href="sparepart-create.php" class="btn btn-primary float-end"><i class="fas fa-fw fa-plus"></i></a>
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bondered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Barang</th>
                                                <th>Stok</th>
                                                <th>Harga</th>
                                                <th>Aksi</th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $no = 1;

                                            if (isset($_POST['tcari'])) {
                                                $keyword = $_POST['tcari'];
                                                $query = "SELECT * FROM tb_sparepart WHERE nama_barang LIKE '%$keyword%' OR stok LIKE '%$keyword%' ORDER BY id_sparepart DESC";
                                            } else {
                                                $query = "SELECT * FROM tb_sparepart";
                                            }

                                            $tampil = mysqli_query($con, $query);

                                            while ($tb_sparepart = mysqli_fetch_array($tampil)):
                                        ?>
                                                        <tr>
                                                            
                                                            <td><?= $no++ ?></td>
                                                            <td><?= $tb_sparepart['nama_barang']; ?></td>
                                                            <td><?= $tb_sparepart['stok']; ?></td>
                                                            <td><?= $tb_sparepart['harga']; ?></td>
                                                            
                                                            
                                                            <td>
                                                                    
                                                                   
                                                                    <a href="sparepart-edit.php?id=<?= $tb_sparepart['id_sparepart']; ?>" class="btn btn-success btn-sm"><i class="fas fa-fw fa-pen"></i></a>
                                                                    <form action="sparepart-code.php" method="POST" class="d-inline">
                                                                        <button type="submit" name="delete-sparepart" value="<?= $tb_sparepart['id_sparepart'];?>"class="btn btn-danger btn-sm"><i class="fas fa-fw fa-trash"></i></button>
                                                                    </form>    
                                                            </td>
                                                        </tr>
                                            <?php endwhile; ?>
                                        </tbody>

                                    </table>
                                    
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