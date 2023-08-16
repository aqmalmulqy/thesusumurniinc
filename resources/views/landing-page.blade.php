<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Susumurni Inc</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  </head>
  <body>
    <!-- Navbar start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">the<span>susumurniinc</span>.</a>

      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#contact">Kontak</a>
      </div>

      </div>

      <div class="navbar-extra">
        @auth
        <div class="dropdown">
          <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome back, {{auth()->user()->name }}
          </a>
        
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i>My Dashboard</a></li>
            <li class="nav-item">
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="nav-link px-3"><i class="bi bi-box-arrow-right"></i> Logout</button>
            </form>
            </li>
          </ul>
        </div>
        @else
        <a href="/login" id="login-button"><i data-feather="user"></i>Login</a>
        @endauth
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>

      <!-- Search Form start -->
      <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box"><i data-feather="search"></i></label>
      </div>
      <!-- Search Form end -->
    </nav>
    <!-- Navbar end -->

    <!-- Hero Section start -->
    <section class="hero" id="home">
      <main class="content">
        <h1>Nikmati Produk <span>The Susumurni Inc</span></h1>
        <p>Untuk rasa dan sensasi nikmat, The Susumurni Inc juaranya!</p>
        <a href="/product" class="cta">Beli Sekarang</a>
      </main>
    </section>
    <!-- Hero Section end -->

    <!-- About Section start -->
    <section id="about" class="about">
      <h2><span>Tentang</span> Kami</h2>

      <div class="row">
        <div class="about-img">
          <img src="img/tentang-kami.jpg" alt="Tentang Kami" />
        </div>
        <div class="content">
          <h3>Kenapa memilih The Susumurni Inc?</h3>
          <p>
            Karena The Susumurni Inc menyajikan berbagai olahan susu murni yang bisa anda rasakan tanpa campuran bahan kimia apapun. Terlebih dari itu, kita juga menyajikan berbagai macam olahan rasa buah - buahan yang dipadukan dengan susu murni.
          </p>
          <p>
            Oleh karena itu, tunggu apalagi. Ayo datang dan nikmati sensasinya.
          </p>
        </div>
      </div>
    </section>
    <!-- About Section end -->

    

    <!-- Contact Section start -->
    <section id="contact" class="contact">
      <h2><span>Kontak</span> Kami</h2>
      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.690863164448!2d107.60554927384906!3d-6.927506193072252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e76e631fca5b%3A0x9a8cf358cb56bbdd!2sthe%20susumurni%20inc.!5e0!3m2!1sid!2sid!4v1689087579702!5m2!1sid!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe>

        <form action="">
          <div class="input-group">
            <i data-feather="user"></i>
            <input type="text" placeholder="nama" />
          </div>
          <div class="input-group">
            <i data-feather="mail"></i>
            <input type="text" placeholder="email" />
          </div>
          <div class="input-group">
            <i data-feather="phone"></i>
            <input type="text" placeholder="no hp" />
          </div>
          <div class="input-group">
            <i data-feather="file-text"></i>
            <input type="text" placeholder="kritik & saran" />
          </div>
          <button type="submit" class="btn">kirim pesan</button>
        </form>
      </div>
    </section>
    <!-- Contact Section end -->

    <!-- Footer start -->
    <footer>
      <div class="socials">
        <a href="#"><i data-feather="instagram"></i></a>
        <a href="#"><i data-feather="twitter"></i></a>
        <a href="#"><i data-feather="facebook"></i></a>
      </div>

      <div class="links">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#contact">Kontak</a>
      </div>

      <div class="credit">
        <p>Created by <a href="">TheSusumurniInc</a>. | &copy; 2023.</p>
      </div>
    </footer>
    <!-- Footer end -->
    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>

    <!-- My Javascript -->
    <script src="{{ asset('js/script.js') }}"></script>
  </body>
</html>
