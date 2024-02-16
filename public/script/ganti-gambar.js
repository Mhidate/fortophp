 // Index gambar yang sedang ditampilkan
 let currentImageIndex = 0;
    
 // Mengambil semua gambar
 const images = document.querySelectorAll('.gallery-image');

 // Sembunyikan semua gambar kecuali yang pertama
 for (let i = 1; i < images.length; i++) {
     images[i].style.display = 'none';
 }

 // Fungsi untuk mengganti gambar
 function changeImage() {
     // Sembunyikan gambar saat ini
     images[currentImageIndex].style.display = 'none';

     // Pindah ke gambar berikutnya
     currentImageIndex = (currentImageIndex + 1) % images.length;

     // Tampilkan gambar baru
     images[currentImageIndex].style.display = 'block';
 }