@extends('layouts.app')

@section('content')

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Portfolio</h2>
          <p>Albert Einstein tidak hanya dikenal dengan Teori Relativitas, tetapi juga dengan kontribusi penting lainnya dalam mekanika kuantum, kosmologi, teknologi nuklir, serta inovasi di bidang lain. Beberapa konsepnya bahkan baru terbukti secara eksperimental dalam beberapa dekade terakhir!</p>
        </div><!-- End Section Title -->
  
        <div class="container">
  
          <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script> 
            <script>
                $(document).ready(function() {
                  // Inisialisasi Isotope
                  var $grid = $('.isotope-container').isotope({
                    itemSelector: '.isotope-item',
                    layoutMode: 'masonry',
                    masonry: {
                      columnWidth: '.isotope-item'
                    }
                  });
                
                  // Filter items on button click
                  $('.isotope-filters').on('click', 'li', function() {
                    var filterValue = $(this).attr('data-filter');
                    $grid.isotope({ filter: filterValue });
                    
                    // Update active class
                    $('.isotope-filters li').removeClass('filter-active');
                    $(this).addClass('filter-active');
                  });
                });
                </script>
                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
              <li data-filter="*" class="filter-active">1</li>
              <li data-filter=".filter-app">2</li>
              <li data-filter=".filter-product">3</li>
              <li data-filter=".filter-branding">4</li>
            </ul><!-- End Portfolio Filters -->
  
            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                <img src="assets/img/2.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Bose Einstein statistics</h4>
                  <p>Teori ini berlaku untuk partikel yang tidak dapat dibedakan, seperti foton atau atom helium-4</p>
                  <a href="assets/img/2.jpeg" title="Bose Einstein statistics" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="https://id.wikipedia.org/wiki/Statistik_Bose%E2%80%93Einstein" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                <img src="assets/img/1.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Gerak Brown (Brownian motion)</h4>
                  <p>Pergerakan acak partikel mikroskopis yang terlarut dalam cairan atau gas</p>
                  <a href="assets/img/1.png" title="Gerak Brown (Brownian motion)" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="https://id.wikipedia.org/wiki/Gerak_Brown" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                <img src="assets/img/3.webp" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Gelombang Gravitasi</h4>
                  <p>elombang ini mengangkut energi dalam bentuk radiasi gravitasi</p>
                  <a href="assets/img/3.webp" title="Gelombang Gravitasi" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="https://kumparan.com/kumparantech/apa-itu-gelombang-gravitasi" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                <img src="assets/img/4.webp" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Solar Radiation Spectrum</h4>
                  <p>The solar radiation spectrum is the range of wavelengths of electromagnetic energy emitted by the sun</p>
                  <a href="assets/img/4.webp" title="Solar Radiation Spectrum" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="https://sunwindsolar.com/blog/solar-radiation-spectrum/" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                <img src="assets/img/5.webp" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Persamaan Medan Einstein</h4>
                  <p>Salah satu solusi persamaan medan Einstein adalah solusi Schwarzschild, yang diberikan oleh fisikawan Jerman Karl Schwarzschild</p>
                  <a href="assets/img/assets/img/5.webp" title="Persamaan Medan Einstein" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="https://id.wikipedia.org/wiki/Persamaan_medan_Einstein" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                <img src="assets/img/6.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Kosefisien Reaksi</h4>
                  <p>Koefisien reaksi berfungsi untuk menyetarakan jumlah atom sebelum dan sesudah reaksi</p>
                  <a href="assets/img/assets/img/6.jpeg" title="Kosefisien Reaksi" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="https://kumparan.com/kabar-harian/arti-koefisien-reaksi-dalam-persamaan-kimia-1xKfY9FgObX" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                <img src="assets/img/7.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Efek Fotolistrik</h4>
                  <p>Efek fotolistrik adalah gejala terlepasnya elektron pada permukaan logam karena menyerap radiasi gelombang elektromagnetik</p>
                  <a href="assets/img/7.jpg" title="Efek Fotolistrik" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="https://www.quipper.com/id/blog/mapel/fisika/efek-fotolistrik/" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                <img src="assets/img/8.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Teori Relativitas Umum</h4>
                  <p>Teori fisika yang menjelaskan bagaimana gravitasi memengaruhi ruang dan waktu</p>
                  <a href="assets/img/8.jpg" title="Teori Relativitas Umum" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="https://id.wikipedia.org/wiki/Relativitas_umum" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
  
            </div><!-- End Portfolio Container -->
  
          </div>
  
        </div>
  
      </section><!-- /Portfolio Section -->
  
      <!-- Testimonials Section -->
      <section id="testimonials" class="testimonials section">
  
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Tokoh Penting Lainnya</h2>
          <p>Ada banyak tokoh penting dalam sejarah yang memiliki kontribusi sebesar Albert Einstein dalam berbagai bidang. Berikut beberapa di antaranya:</p>
        </div><!-- End Section Title -->
  
        <div class="container" data-aos="fade-up" data-aos-delay="100">
  
          <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                }
              }
            </script>
            <div class="swiper-wrapper">
  
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="row gy-4 justify-content-center">
                    <div class="col-lg-6">
                      <div class="testimonial-content">
                        <p>
                          <i class="bi bi-quote quote-icon-left"></i>
                          <span>"If I have seen further, it is by standing on the shoulders of giants."
                            (Jika saya dapat melihat lebih jauh, itu karena saya berdiri di atas bahu para raksasa.)</span>
                          <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <h3>Isaac Newton (1643–1727)</h3>
                        <h4>Menemukan hukum gravitasi dan mengembangkan kalkulus.</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2 text-center">
                      <img src="assets/img/isaac.webp" class="img-fluid testimonial-img" alt="">
                    </div>
                  </div>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="row gy-4 justify-content-center">
                    <div class="col-lg-6">
                      <div class="testimonial-content">
                        <p>
                          <i class="bi bi-quote quote-icon-left"></i>
                          <span>"The present is theirs; the future, for which I really worked, is mine."
                            (Masa kini adalah milik mereka; masa depan, yang benar-benar saya kerjakan, adalah milik saya.)</span>
                          <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <h3>Nikola Tesla (1856–1943)</h3>
                        <h4>Pionir listrik arus bolak-balik (AC) dan teknologi radio.</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2 text-center">
                      <img src="assets/img/nikola.jpeg" class="img-fluid testimonial-img" alt="">
                    </div>
                  </div>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="row gy-4 justify-content-center">
                    <div class="col-lg-6">
                      <div class="testimonial-content">
                        <p>
                          <i class="bi bi-quote quote-icon-left"></i>
                          <span>"Genius is one percent inspiration and ninety-nine percent perspiration."
                            (Kejeniusan adalah satu persen inspirasi dan sembilan puluh sembilan persen kerja keras.)</span>
                          <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <h3>Thomas Edison (1847–1931)</h3>
                        <h4>Penemu bola lampu dan phonograph.</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2 text-center">
                      <img src="assets/img/thomas.webp" class="img-fluid testimonial-img" alt="">
                    </div>
                  </div>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="row gy-4 justify-content-center">
                    <div class="col-lg-6">
                      <div class="testimonial-content">
                        <p>
                          <i class="bi bi-quote quote-icon-left"></i>
                          <span>"However difficult life may seem, there is always something you can do and succeed at."
                            (Bagaimanapun sulitnya hidup, selalu ada sesuatu yang bisa kamu lakukan dan berhasil di dalamnya.)</span>
                          <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <h3>Stephen Hawking (1942–2018)</h3>
                        <h4>Mengembangkan teori tentang lubang hitam dan kosmologi kuantum.</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2 text-center">
                      <img src="assets/img/hawking.webp"class="img-fluid testimonial-img" alt="">
                    </div>
                  </div>
                </div>
              </div><!-- End testimonial item -->
  
            </div>
            <div class="swiper-pagination"></div>
          </div>
  
        </div>
  
      </section><!-- /Testimonials Section -->
@endsection