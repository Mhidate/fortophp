<?php
include 'config/db.php';


        if (isset($_POST["submit"])) {
            $nama_file = $_FILES["file"]["name"];
            $tipe_file = $_FILES["file"]["type"];
            $ukuran_file = $_FILES["file"]["size"];
            $lokasi_file = $_FILES["file"]["tmp_name"];

            // Direktori tempat menyimpan file yang diunggah
            $target_dir = "uploads/";

            // Generate nama unik untuk file yang diunggah
            $nama_unik = uniqid() . "_" . $nama_file;
            $target_file = $target_dir . $nama_unik;

            // Pindahkan file yang diunggah ke direktori tujuan
            if (move_uploaded_file($lokasi_file, $target_file)) {
                // Menyimpan data file ke database
                $sql = "INSERT INTO Foto (nama_file, tipe_file, ukuran_file, lokasi_file) VALUES ('$nama_file', '$tipe_file', '$ukuran_file', '$target_file')";
                if (mysqli_query($db, $sql)) {
                    header("Location: routes/upload.php?status=sukses");
                exit();
                } else {
                    header("Location: routes/upload.php?status=gagal");
                exit();
                    echo "Error: " . $sql . "<br>" . mysqli_error($db);
                }
            } else {
                echo "Maaf, terjadi kesalahan saat mengunggah file.";
            }
        }else{
            echo "";
        }

mysqli_close($db);
?>