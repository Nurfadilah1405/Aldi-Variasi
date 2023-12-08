<!doctype html>
<html lang="en">

<?php 
    session_start();
    require 'dbcon.php';
?>

<?php include('ntah/header.php')?>
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
                <h4>Pelanggan Details</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pelanggan</th>
                            <th>Kode Kendaraan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;

                        if (isset($_POST['tcari'])) {
                            $keyword = $_POST['tcari'];
                            $query = "SELECT * FROM tb_pelanggan WHERE kd_kendaraan LIKE '%$keyword%' OR nama_pelanggan LIKE '%$keyword%' ORDER BY id DESC";
                        } else {
                            $query = "SELECT * FROM tb_pelanggan";
                        }

                        $tampil = mysqli_query($con, $query);

                        while ($tb_pelanggan = mysqli_fetch_array($tampil)):
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $tb_pelanggan['nama_pelanggan']; ?></td>
                                <td><?= $tb_pelanggan['kd_kendaraan']; ?></td>
                                <td><?= $tb_pelanggan['status']; ?></td>
                                <td>
                                    <a href="Pelanggan-view2.php?id=<?= $tb_pelanggan['id']; ?>" class="btn btn-info btn-sm"><i class="fas fa-fw fa-exclamation"></i></a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
                <div class="mb-3">
                <a href="index.php" class="btn btn-danger float-end"><i class="fas fa-fw fa-home"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
