<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login-page.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../public/img/title-icon.png" type="image/png">
    <title>Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/admin-page.css">
    <link real="stylesheet" href="../public/css/card.css">
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <div class="header">
                <div class="list-item">
                     <marquee behavior="scroll" direction="left">
                        <span class="description-header">Selamat Datang Manusia</span>
                    </marquee>
                </div>
                <br><br><br><br>

                <div class="mainl">
                    <div class="list-item">
                        <a class="active" href="admin-page.php">
                            <img src="../public/img/dashboard-icon.svg"  class="icon">
                            <span class="description">Dasboard</span>
                        </a>
                    </div>

                    <div class="list-item">
                        <a href="tambah.php">
                            <img src="../public/img/tambah-icon.svg" class="icon">
                            <span class="description">Tambah</span>
                        </a>
                    </div>

                    <div class="list-item">
                        <a href="edit.php">
                            <img src="../public/img/edit-icon.svg" class="icon">
                            <span class="description">Edit</span>
                        </a>
                    </div>

                    <div class="list-item">
                        <a href="upload.php">
                            <img src="../public/img/foto-icon.svg"  class="icon">
                            <span class="description">Upload foto</span>
                        </a>
                    </div>
                    <br><br><br>

                    <div class="list-item">
                        <a href="../app/logout/action-logout.php">
                            <img src="../public/img/logout-icon.svg"  class="icon">
                            <span class="description">Log Out</span>
                        </a>
                    </div>


                </div>
            </div>

        </div>

        <div  style="width: 800px; height: 500px; justify-content: center; margin-top: 50px; margin-left: 10%;">
		   <a style="color: white; font-size:40px; padding-left: 50%;">ﷲ ﷽</a><br><br><br>
           <a style="color: white;">Apakah kamu bisa di percaya ?</a>
	    </div>

    </div>
        

</body>
</html>