<?php include("config/db.php");?>
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="../public/img/title-icon.png" type="image/png">
	<title>Muhammad Hidayatullah</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="public/css/index.css">
	<link rel="stylesheet" href="public/css/formmail.css">
	
</head>

<body>
	<header></header>
	
	<main>
		<section>
		<?php
			$folder_upload = 'uploads/';

			// Membaca isi folder
			$files = scandir($folder_upload);

			// Menghapus . dan .. dari hasil pembacaan folder
			$files = array_diff($files, array('.', '..'));
			?>

			<!-- Tampilkan gambar -->
			<div id="image-container">
				<?php foreach ($files as $file): ?>
					<?php
					// Mendapatkan path lengkap file
					$file_path = $folder_upload . $file;

					// Mendapatkan jenis file
					$file_type = mime_content_type($file_path);

					// Jika jenis file adalah gambar
					if (strpos($file_type, 'image') !== false) {
						echo '<img src="' . $file_path . '" alt="' . $file . '" class="gallery-image" width="300" height="400">';
					}
					?>
				<?php endforeach; ?>
				</div>
						<!-- // $query = "SELECT * FROM foto";
						// $result = mysqli_query($db, $query);

						
						// while ($row = mysqli_fetch_assoc($result)) {
						// 	echo '<img src="' . $row['lokasi_file'] . '" width="300" height="400" alt="' . $row['nama_file'] . '">';
						// } -->
			

			<p></p>
			<button class="button" onclick="changeImage()">Ganti Gambar</button>
	
		</section>
		<section>
			<br><br><br>
			<h2>Dalam dunia teknologi informasi, belajar adalah proses yang berkelanjutan.</h2>
		</section>
		<section></section>

		<div class="batas">
			<h3>Aplikasi yang pernah Saya buat</h3>
		</div>
		
	<?php

		$query = "SELECT * FROM post ";
		$result = mysqli_query($db, $query);

		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
						echo '<section>';
						echo '<div class="deskripsi">';
						echo '<p style="color: #d56906;">' . $row['title'] . '</p>';
						echo '<p>' . $row['desk'] . '</p>';
						echo '<a style="color:aliceblue; margin:2%;" href='. $row['link'] .'  target="_blank">Link app</a>';
						echo '</div>';
						echo '</section>';
			     } 
			} else {
				echo '<p>Tidak ada data yang ditemukan.</p>';
			}


		mysqli_close($db);
	?>
		<section></section>
	</main>
     <br>

	<div class="container" id="myForm">
		<label>Alamat email kami</label>
		<div class="row">
		  <div class="col-25">
			<input type="text" value="ayot427@gmail.com" id="myInput"></input>
		  </div>
		</div>
		<div class="row>">
			<button type="button" class="btn" onclick="myFunction()">Copy alamat email</button>
		</div>
		<div class="row>">
			<button type="button" class="close" onclick="closeForm()">Close</button>
		</div>
	</div>
	<br><br><br>
	
	<footer>
		<a href="https://www.linkedin.com/in/muhammad-hidayatullah-81a2a61bb/" target="_blank"><img src="public/img/linkedin.png" width="30" height="30" class="icon"></a>
        <a href="https://t.me/Yout_0" target="_blank" ><img src="public/img/telegram.png" width="30" height="30" class="icon"></a>
		<a href="https://github.com/Mhidate" target="_blank"><img src="public/img/github.png" width="30" height="30" class="icon"></a>
        <a onclick="openForm()"><img src="public/img/email.png" width="30" height="30" class="icon"></a>
		<!-- <p>&copy; 2023 - Portofolio Saya</p> -->
	</footer>
</body>
<script src="public/script/index.js"></script>
<script src="public/script/ganti-gambar.js">
   
</script>
</html>
