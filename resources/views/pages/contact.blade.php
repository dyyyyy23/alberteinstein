@extends('layouts.app')

@section('title', 'Albert Einstein | About')

@section('content')


  <!-- Contact Section -->
  <section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Contact</h2>
      <p>Dalam proses pembuatan, saya berfokus pada tampilan yang responsif, interaktif, dan modern, dengan animasi yang menarik serta navigasi yang nyaman bagi pengguna. Saya juga memastikan bahwa konten yang disajikan lengkap dan informatif, sehingga dapat memberikan pengalaman terbaik bagi pengunjung. Proyek ini tidak hanya menjadi latihan teknis bagi saya, tetapi juga sebagai wujud apresiasi terhadap salah satu ilmuwan terbesar sepanjang sejarah, Albert Einstein.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-4">
          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <i class="bi bi-geo-alt flex-shrink-0"></i>
            <div>
              <h3>Address</h3>
              <p>Medan, Indoenesia</p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-telephone flex-shrink-0"></i>
            <div>
              <h3>Call Us</h3>
              <p>+6281238727551</p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div>
              <h3>Email Us</h3>
              <p>abdillahsandyharahap@gmail.com</p>
            </div>
          </div><!-- End Info Item -->

        </div>

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('contact.send') }}" method="POST">
        @csrf
        
        <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        
        <div class="mb-3">
            <label for="email" class="form-label">Your Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        
        <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject" required>
        </div>
        
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>

              <script>
               document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Mencegah reload halaman
    
    const submitBtn = document.getElementById('submitBtn');
    submitBtn.disabled = true; // Nonaktifkan tombol saat proses
    
    fetch(this.action, {
        method: 'POST',
        body: new FormData(this),
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'Accept': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message); // Tampilkan pesan sukses
        submitBtn.disabled = false;
    })
    .catch(error => {
        alert('Error: ' + error.message);
        submitBtn.disabled = false;
    });
});
                </script>
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        </div><!-- End Contact Form -->

      </div>

    </div>

  </section><!-- /Contact Section -->
@endsection
