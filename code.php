<?php 
session_start();
require 'dbcon.php';

if(isset($_POST['delete-pelanggan']))
{
    $tb_pelanggan_id = mysqli_real_escape_string($con, $_POST['delete-pelanggan']);

    $query = "DELETE FROM tb_pelanggan WHERE id='$tb_pelanggan_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        
        header("Location: dt-pelanggan.php");
        exit(0);
    }
    else
    {
        
        header("Location: dt-pelanggan.php");
        exit(0);
    }
}

if (isset($_POST['update-pelanggan'])) {
    $tb_pelanggan_id = mysqli_real_escape_string($con, $_POST['id']);
    $nama_pelanggan = mysqli_real_escape_string($con, $_POST['nama_pelanggan']);
    $alamat_pelanggan = mysqli_real_escape_string($con, $_POST['alamat_pelanggan']);
    $phone_pelanggan = mysqli_real_escape_string($con, $_POST['no_telp_pelanggan']);
    $kd_kendaraan = mysqli_real_escape_string($con, $_POST['kd_kendaraan']);
    $warna_kendaraan = mysqli_real_escape_string($con, $_POST['warna_kendaraan']);
    $nama_kendaraan = mysqli_real_escape_string($con, $_POST['nama_kendaraan']);
    $pelayanan = mysqli_real_escape_string($con, $_POST['pelayanan']);
    $biaya_pelayanan = mysqli_real_escape_string($con, $_POST['biaya_pelayanan']);
    $penggunaan_sparepart = mysqli_real_escape_string($con, $_POST['penggunaan_sparepart']);
    $biaya_sparepart = mysqli_real_escape_string($con, $_POST['biaya_sparepart']);
    $status = mysqli_real_escape_string($con, $_POST['status']);
    $total_biaya = mysqli_real_escape_string($con, $_POST['total_biaya']);
    $mekanik = mysqli_real_escape_string($con, $_POST['mekanik']);

    $query = "UPDATE tb_pelanggan SET 
                nama_pelanggan='$nama_pelanggan',
                alamat_pelanggan='$alamat_pelanggan',
                no_telp_pelanggan='$phone_pelanggan',
                kd_kendaraan='$kd_kendaraan',
                warna_kendaraan='$warna_kendaraan',
                nama_kendaraan='$nama_kendaraan',
                pelayanan='$pelayanan',
                biaya_pelayanan='$biaya_pelayanan',
                penggunaan_sparepart='$penggunaan_sparepart',
                biaya_sparepart='$biaya_sparepart',
                status='$status',
                total_biaya='$total_biaya',
                mekanik='$mekanik'
            WHERE id='$tb_pelanggan_id'";

    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        
        header("Location: dt-pelanggan.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Pelanggan gagal diupdate";
        header("Location: dt-pelanggan.php");
        exit(0);
    }
}



if(isset($_POST['save-pelanggan']))
{
    $nama_pelanggan = mysqli_real_escape_string($con, $_POST['nama_pelanggan']);
    $alamat_pelanggan = mysqli_real_escape_string($con, $_POST['alamat_pelanggan']);
    $phone_pelanggan = mysqli_real_escape_string($con, $_POST['no_telp_pelanggan']);
    $kd_kendaraan = mysqli_real_escape_string($con, $_POST['kd_kendaraan']);
    $warna_kendaraan = mysqli_real_escape_string($con, $_POST['warna_kendaraan']);
    $nama_kendaraan = mysqli_real_escape_string($con, $_POST['nama_kendaraan']);
    $pelayanan = mysqli_real_escape_string($con, $_POST['pelayanan']);
    $biaya_pelayanan = mysqli_real_escape_string($con, $_POST['biaya_pelayanan']);
    $sparepart = mysqli_real_escape_string($con, $_POST['penggunaan_sparepart']);
    $biaya_sparepart = mysqli_real_escape_string($con, $_POST['biaya_sparepart']);
    $status = mysqli_real_escape_string($con, $_POST['status']);
    $total_biaya = mysqli_real_escape_string($con, $_POST['total_biaya']);
    $mekanik = mysqli_real_escape_string($con, $_POST['mekanik']);

    $query = "INSERT INTO tb_pelanggan (nama_pelanggan, alamat_pelanggan, no_telp_pelanggan, kd_kendaraan, warna_kendaraan, nama_kendaraan, pelayanan, biaya_pelayanan, penggunaan_sparepart, biaya_sparepart, status, total_biaya, mekanik) VALUES
    ('$nama_pelanggan', '$alamat_pelanggan', '$phone_pelanggan', '$kd_kendaraan', '$warna_kendaraan', '$nama_kendaraan', '$pelayanan', '$biaya_pelayanan','$sparepart','$biaya_sparepart','$status','$total_biaya','$mekanik')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        
        header("Location: dt-pelanggan.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Pelanggan not created";
        header("Location: dt-pelanggan.php");
        exit(0); 
    }
}

?>