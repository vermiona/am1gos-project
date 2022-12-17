<?php

if (!empty($_POST['required'])) {
    include "connect.php";

    // siswa
    $nama = $_POST['nama'];
    $nis =  $_POST['nik'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    
    $alamat = $_POST['alamat'];
    $tinggal_bersama = $_POST['tinggal_bersama'];
    $anakke = $_POST['anakke'];
    $agama = $_POST['agama'];
    $kewarganegaraan = $_POST['kewarganegaraan'];

    // ayah
    $nama_ayah = $_POST['nama_ayah'];
    $nik_ayah = $_POST['nik_ayah'];
    $tahun_lahir_ayah = $_POST['tahun_lahir_ayah'];
    $pendidikan_ayah = $_POST['pendidikan_ayah'];
    $pekerjaan_ayah = $_POST['pekerjaan_ayah'];

    // ibu
    $nama_ibu = $_POST['nama_ibu'];
    $nik_ibu = $_POST['nik_ibu'];
    $tahun_lahir_ibu = $_POST['tahun_lahir_ibu'];
    $pendidikan_ibu = $_POST['pendidikan_ibu'];
    $pekerjaan_ibu = $_POST['pekerjaan_ibu'];

    // periodik
    $tinggi_badan = $_POST['tinggi_badan'];
    $berat_badan = $_POST['berat_badan'];
    $jarak_tempuh = $_POST['jarak_tempuh'];
    $jumlah_saudara = $_POST['jumlah_saudara'];

    // register
    $jenis_pendaftaran = $_POST['jenis_pendaftaran'];

    // akun
    $username = $nis;
    $password = md5($username);

    $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT nis FROM siswa WHERE nis='$nis'"));
    if (empty($user['nis'])) {
        $daftar_user = mysqli_query($conn, "INSERT INTO users (`username`, `password`, `level`) VALUES ('$username', '$password', 1);");
        if($daftar_user) {
            $user_id = mysqli_fetch_row(mysqli_query($conn, "SELECT id FROM users WHERE username='$username'"))[0];
            echo $user_id;
            
            $daftar_siswa = mysqli_query(
                $conn,
                "INSERT INTO `siswa`(`nis`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `tempat_lahir`, `jenis_pendaftaran`, `jumlah_saudara`, `jarak_tempuh`, `berat_badan`, 
                `tinggi_badan`, `pekerjaan_ibu`, `pendidikan_ibu`, `tahun_lahir_ibu`, `nik_ibu`, `nama_ibu`, `pekerjaan_ayah`, `pendidikan_ayah`, `tahun_lahir_ayah`, `nik_ayah`, 
                `nama_ayah`, `kewarganegaraan`, `agama`, `anak_ke`, `tinggal_bersama`, `alamat`, `user_id`) 
                VALUES 
                (
                    '$nis', '$nama', '$jenis_kelamin', '$tanggal_lahir', '$tempat_lahir', '$jenis_pendaftaran', '$jumlah_saudara', '$jarak_tempuh', '$berat_badan', '$tinggi_badan',
                    '$pekerjaan_ibu', '$pendidikan_ibu', '$tahun_lahir_ibu', '$nik_ibu', '$nama_ibu', '$pekerjaan_ayah', '$pendidikan_ayah', '$tahun_lahir_ayah', '$nik_ayah',
                    '$nama_ayah', '$kewarganegaraan', '$agama', '$anakke', '$tinggal_bersama', '$alamat', '$user_id'
                )"
            );
            
            if ($daftar_siswa) {
                echo "<script>alert('Proses Pendaftaran Berhasil. Gunakan Nis Untuk Username dan Password ketika Login')</script>";
            } else {
                echo "<script>alert('Proses Pendaftaran Error')</script>";
            }
        } else {
            echo "<script>alert('Proses Pendaftaran Error')</script>";
        }

    } else {
        echo "<script>alert('Nis Sudah Terdaftar')</script>";
    }
} else {
    echo "<script>alert('Tolong Masukkan Data Pada Folmulir Yang Sudah Disediakan')</script>";
}

echo "<script>window.location.href = '../formulir'</script>";