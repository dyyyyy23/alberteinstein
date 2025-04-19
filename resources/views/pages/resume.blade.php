@extends('layouts.app')

@section('title', 'Albert Einstein | Resume')

@section('content')

 <!-- Resume Section -->
 <section id="resume" class="resume section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Resume</h2>
      <p>Albert Einstein adalah seorang fisikawan teoretis yang mengubah dunia dengan Teori Relativitas dan kontribusi dalam fisika kuantum, kosmologi, serta mekanika statistik. Ia memenangkan Hadiah Nobel Fisika pada tahun 1921 atas karyanya tentang efek fotolistrik.</p>
    </div><!-- End Section Title -->
  
    <div class="container">
  
      <div class="row">
  
        <!-- Left Column: Summary & Education -->
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <h3 class="resume-title">Summary</h3>
  
          <div class="resume-item pb-0">
            <h4>Albert Einstein</h4>
            <p><em>Fisikawan teoretis visioner yang dikenal dengan Teori Relativitas dan kontribusinya dalam mekanika kuantum serta fisika modern.</em></p>
            <ul>
              <li>Ulm, Kerajaan Württemberg, Kekaisaran Jerman</li>
              <li>Website: www.einstein-legacy.com</li>
            </ul>
          </div><!-- End Resume Item -->
  
          <h3 class="resume-title">Education</h3>
          <div class="resume-item">
            <h4>Ph.D. in Physics</h4>
            <h5>1905</h5>
            <p><em>University of Zurich, Swiss</em></p>
            <p>Menyelesaikan disertasi tentang penentuan ukuran molekul yang menjadi dasar awal bagi pengembangannya dalam teori fisika modern.</p>
          </div><!-- End Resume Item -->
  
          <div class="resume-item">
            <h4>Bachelor in Physics & Mathematics</h4>
            <h5>1896 - 1900</h5>
            <p><em>Swiss Federal Polytechnic, Zurich</em></p>
            <p>Mempelajari matematika dan fisika yang menjadi fondasi untuk pengembangan teori relativitas dan mekanika kuantum.</p>
          </div><!-- End Resume Item -->
  
        </div><!-- End Left Column -->
  
        <!-- Right Column: Professional Experience -->
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <h3 class="resume-title">Professional Experience</h3>
  
          <div class="resume-item">
            <h4>Patent Examiner, Swiss Patent Office</h4>
            <h5>1902 - 1909</h5>
            <p><em>Bern, Swiss</em></p>
            <ul>
              <li>Menganalisis inovasi teknis yang kelak menginspirasi pengembangan Teori Relativitas Khusus.</li>
              <li>Mempelajari mekanika statistik dan teori kuantum awal.</li>
            </ul>
          </div><!-- End Resume Item -->
  
          <div class="resume-item">
            <h4>Professor of Theoretical Physics</h4>
            <h5>1909 - 1933</h5>
            <p><em>University of Zurich, Charles University Prague, ETH Zurich, University of Berlin</em></p>
            <ul>
              <li>Mengembangkan Teori Relativitas Umum (1915) yang merevolusi pemahaman gravitasi.</li>
              <li>Kontribusi besar dalam efek fotolistrik, yang membawanya meraih Hadiah Nobel Fisika.</li>
            </ul>
          </div><!-- End Resume Item -->
  
          <div class="resume-item">
            <h4>Institute for Advanced Study, Princeton</h4>
            <h5>1933 - 1955</h5>
            <p><em>Princeton, Amerika Serikat</em></p>
            <ul>
              <li>Mengembangkan teori medan terpadu untuk menghubungkan gravitasi dengan elektromagnetisme.</li>
              <li>Aktif dalam advokasi perdamaian dan menentang penggunaan senjata nuklir setelah Perang Dunia II.</li>
            </ul>
          </div><!-- End Resume Item -->
  
        </div><!-- End Right Column -->
  
      </div><!-- End Row -->
  
    </div><!-- End Container -->
  
  </section>
  
  
      </section><!-- /Resume Section -->
@endsection
