// Menemukan elemen yang diperlukan
const carouselInner = document.querySelector('.carousel-inner');
const carouselItems = document.querySelectorAll('.carousel-item');
const carouselPrev = document.querySelector('.carousel-control-prev');
const carouselNext = document.querySelector('.carousel-control-next');

let currentIndex = 0;
const carouselInterval = 3000; // Interval untuk transisi otomatis
let autoSlide; // Variable untuk menyimpan interval otomatis

// Fungsi untuk memperbarui carousel sesuai dengan indeks aktif
function updateCarousel() {
  // Menghapus kelas 'active' dari semua item
  carouselItems.forEach(item => item.classList.remove('active'));
  
  // Menambahkan kelas 'active' pada item saat ini
  carouselItems[currentIndex].classList.add('active');
}

// Fungsi untuk mengatur transisi otomatis
function startAutoSlide() {
  // Hentikan interval sebelumnya untuk mencegah penumpukan
  clearInterval(autoSlide);
  // Tetapkan interval baru
  autoSlide = setInterval(() => {
    currentIndex = (currentIndex + 1) % carouselItems.length;
    updateCarousel();
  }, carouselInterval);
}

// Event listener untuk tombol "sebelumnya"
carouselPrev.addEventListener('click', (event) => {
  event.preventDefault(); // Mencegah perilaku default dari anchor tag
  
  // Mengurangi indeks untuk item sebelumnya, dan loop ke item terakhir jika sudah di item pertama
  currentIndex = (currentIndex - 1 + carouselItems.length) % carouselItems.length;
  
  updateCarousel(); // Memperbarui carousel
  startAutoSlide(); // Reset interval otomatis ketika ada interaksi manual
});

// Event listener untuk tombol "selanjutnya"
carouselNext.addEventListener('click', (event) => {
  event.preventDefault(); // Mencegah perilaku default dari anchor tag
  
  // Menambahkan indeks untuk item berikutnya, dan loop ke item pertama jika sudah di item terakhir
  currentIndex = (currentIndex + 1) % carouselItems.length;
  
  updateCarousel(); // Memperbarui carousel
  startAutoSlide(); // Reset interval otomatis ketika ada interaksi manual
});

$(document).ready(function() {
  updateCarousel(); // Pastikan carousel dimulai dengan item pertama
  startAutoSlide(); // Mulai interval otomatis
  
  $('.carousel-caption').hover(
    function() {
      $(this).addClass('show');
    },
    function() {
      $(this).removeClass('show');
    }
  );
});



$(document).ready(function() {
  $('.carousel').carousel({
    interval: false, // Disable automatic sliding
  });

  $('.carousel-control-prev').click(function() {
    $('.carousel').carousel('prev');
  });

  $('.carousel-control-next').click(function() {
    $('.carousel').carousel('next');
  });
});