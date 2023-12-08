<?php 
session_start();
require 'dbcon.php';

if(isset($_POST['delete-sparepart']))
{
    $tb_sparepart_id = mysqli_real_escape_string($con, $_POST['delete-sparepart']);

    $query = "DELETE FROM tb_sparepart WHERE id_sparepart='$tb_sparepart_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        
        header("Location: dt-sparepart.php");
        exit(0);
    }
    else
    {
        
        header("Location: dt-sparepart.php");
        exit(0);
    }
}

if (isset($_POST['update-sparepart'])) {
    $tb_sparepart_id = mysqli_real_escape_string($con, $_POST['id_sparepart']);
    $nama_barang = mysqli_real_escape_string($con, $_POST['nama_barang']);
    $stok = mysqli_real_escape_string($con, $_POST['stok']);
    $harga = mysqli_real_escape_string($con, $_POST['harga']);

    $query = "UPDATE tb_sparepart SET 
                nama_barang='$nama_barang',
                stok='$stok',
                harga='$harga',
            WHERE id='$tb_sparepart_id'";

    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        
        header("Location: dt-sparepart.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Pelanggan gagal diupdate";
        header("Location: dt-sparepart.php");
        exit(0);
    }
}



if(isset($_POST['save-sparepart']))
{
    $nama_barang = mysqli_real_escape_string($con, $_POST['nama_barang']);
    $stok = mysqli_real_escape_string($con, $_POST['stok']);
    $harga = mysqli_real_escape_string($con, $_POST['harga']);

    $query = "INSERT INTO tb_sparepart (nama_barang, stok, harga) VALUES
    ('$nama_barang', '$stok', '$harga')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        
        header("Location: dt-sparepart.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Pelanggan not created";
        header("Location: dt-sparepart.php");
        exit(0); 
    }
}

?>