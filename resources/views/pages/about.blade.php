@extends('layouts.app')

@section('title', 'Albert Einstein | About')

@section('content')

<!-- About Section -->
<section id="about" class="about section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>About</h2>
      <p>Albert Einstein adalah seorang fisikawan teoretis kelahiran Jerman yang dikenal sebagai pencetus Teori Relativitas, yang mengubah pemahaman manusia tentang ruang dan waktu. Salah satu kontribusinya yang paling terkenal adalah persamaan E = mc², yang menjelaskan hubungan antara energi dan massa serta menjadi dasar bagi pengembangan energi nuklir. Selain meraih Hadiah Nobel Fisika pada tahun 1921 atas penelitiannya tentang efek fotolistrik, Einstein juga aktif dalam isu-isu sosial dan perdamaian dunia. Pemikirannya yang revolusioner tidak hanya mempengaruhi ilmu fisika tetapi juga berbagai bidang teknologi modern, termasuk GPS dan komputasi kuantum. Warisan ilmiahnya terus menjadi inspirasi bagi banyak ilmuwan hingga saat ini.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4 justify-content-center">
        <div class="col-lg-4">
          <img src="assets/img/albert.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 content">
          <h2>Theoretical Physicist &amp; Nobel Laureate.</h2>
          <p class="fst-italic py-3">
            "Imagination is more important than knowledge. For knowledge is limited, whereas imagination encircles the world."
          </p>
          <div class="row">
            <div class="col-lg-6">
                <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Nama Lengkap:</strong> <span>Albert Einstein</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Ttg Lahir:</strong> <span>Ulm, Jerman, 14 Maret 1879</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Tempat, Tanggal Wafat:</strong> <span>Princeton, AS, 18 April 1955</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Kebangsaan:</strong> <span>Jerman, Swiss, Amerika Serikat</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Pendidikan:</strong> <span>ETH Zurich (Sarjana), Universitas Zurich (PhD)</span></li>
                </ul>
            </div>
            <div class="col-lg-6">
                <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Profesi:</strong> <span>Fisikawan Teoretis, Peneliti, Dosen, Penulis</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Penghargaan:</strong> <span>Hadiah Nobel Fisika (1921), Medali Copley (1925)</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Kontribusi:</strong> <span>Teori Relativitas, E=mc², Efek Fotolistrik</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Hobi:</strong> <span>Musik (biola), Filsafat, Perdamaian Dunia</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Kutipan Terkenal:</strong> <span>"Imagination is more important than knowledge."</span></li>
                </ul>
            </div>
        </div>
        
          <p class="py-3">
            Selain dikenal sebagai ilmuwan jenius, Albert Einstein juga merupakan seorang filsuf dan humanis yang peduli terhadap kemanusiaan. 
          </p>
        </div>
      </div>

    </div>


  </section><!-- /Stats Section -->
 <!-- Scroll Top -->
 <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


@endsection
