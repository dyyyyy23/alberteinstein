@extends('layouts.app')

@section('content')
<body class="index-page">
<main class="main">

<!-- Hero Section -->
<section id="hero" class="hero section light-background">

    <img src="{{ asset ('assets/img/hero-bg.jpg') }}" alt="">

    <div class="container" data-aos="zoom-out">
      <div class="row justify-content-center">
        <div class="col-lg-9">
          <h2>Albert Einstein</h2>
          <p>Bapak <span class="typed" data-typed-items="Fisika Modern, Relativitas , Ilmuwan Terhebat Sepanjang Masa,">Ilmuwan</span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
          <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      new Typed('.typed', {
        strings: ['Fisika Modern', 'Relativitas', 'Ilmuwan Terhebat Sepanjang Masa'],
        typeSpeed: 50,
        backSpeed: 30,
        loop: true
      });
    });
  </script>
</body>
          <div class="social-links">
            <a href="https://x.com/s6996444667061"><i class="bi bi-twitter-x"></i></a>
            <a href="https://www.facebook.com/share/15qPuZHdYU/"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/study_ashhhh/?__pwa=1"><i class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/in/abdillah-sandy-56445a2ab/"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div>

  </section><!-- /Hero Section -->
  </main>
</body>
@endsection