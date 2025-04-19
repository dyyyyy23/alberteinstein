<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
 <title>@yield('title', 'Albert Einstein-Ilmuwan Paling Berpengaruh Sepanjang Masa')</title>
 <meta content="Portofolio tokoh Albert Einstein yang menampilkan perjalanan hidup, karya ilmiah, penghargaan, dan kontribusinya dalam dunia fisika modern." name="description">
 <meta content="Albert Einstein, portofolio Einstein, teori relativitas, ilmuwan terkenal, sejarah sains, biografi Einstein, penemuan ilmiah, Nobel Fisika, tokoh dunia" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset ('assets/img/favicon.ico') }}" rel="icon">
  <link href="{{ asset ('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset ('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset ('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset ('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

   <!-- Main CSS File -->
  <link href="{{ asset ('assets/css/main.css') }}" rel="stylesheet">

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

  {{-- Navbar --}}
  @include('components.header')

  {{-- Konten Dinamis --}}
  <main>
    @yield('content')
  </main>

  {{-- Footer --}}
  @include('components.footer')
 

 <!-- Vendor JS Files -->
 <script src="{{ asset ('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ asset ('assets/vendor/php-email-form/validate.js') }}"></script>
 <script src="{{ asset ('assets/vendor/aos/aos.js') }}"></script>
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
 <script>
  AOS.init();
</script>
 <script src="{{ asset ('assets/vendor/typed.js/typed.umd.js') }}"></script>
 <script src="{{ asset ('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
 <script src="{{ asset ('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
 <script src="{{ asset ('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
 <script src="{{ asset ('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
 <script src="{{ asset ('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
 <script src="{{ asset ('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

 <!-- Main JS File -->
 <script src="{{ asset ('assets/js/main.js') }}"></script>


</body>
