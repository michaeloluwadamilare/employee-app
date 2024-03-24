<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mint Lounge</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/3f6adae92c.js" crossorigin="anonymous"></script>
    <link href="{{ asset('assets/css/mint.css') }}" rel="stylesheet">

      <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">    

</head>
<body class="bg-dark text-white">

<header id="header" class="fixed-top d-flex align-items-center">

<div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

    <!-- <h1 class="logo me-auto me-lg-0"><a href="#">Mint Bar and Resturant</a></h1> -->

    <nav id="navbar" class="navbar order-last order-lg-0">
    <ul>
        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
        <li><a class="nav-link scrollto" href="#about">About</a></li>
        <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
        <li><a class="nav-link scrollto" href="#specials">Specials</a></li>
        <li><a class="nav-link scrollto" href="#events">Events</a></li>
        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    @if(Session::has('cart'))
    {{ count(Session::get('cart')) }}
    @endif

    <div class="actionbtn d-flex align-item-center">
        <a href="#" class="action-table-btn fas fa-cocktail d-none d-lg-flex text-decoration-none">Tray</a>
        <a href="#" class="action-table-btn d-none d-lg-flex text-decoration-none">My order</a>
    </div>
</div>
</header>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">

        <div class="mb-2" >
            <img src="{{ asset('assets/img/mint_vector_white.png') }}" width="200px" alt="">
        </div> 
            <h1 class="text-large" id="hometext">
                MINT
                <br>
                RESTAURANT
                <br>
                AND BAR
            </h1>
            <h3>Menu and Ordering Made Easy</h3>
      </div>
    </div>
  </section><!-- End Hero -->







    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title text-center">
          <h2>Menu</h2>
          <p>Check Our Tasty Menu</p>
        </div>

        @foreach ($menuList as $list)
        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
                
                <div class="section-title category-name">
                    <p>{{$list->name}}</p>
                </div>

                @foreach ($list['menuItems'] as $m)

                <div class="col-lg-12 menu-item">

                <div class=menu-bsk>
                    <form action="{{url('addcart', $m->id)}}" method="POST">
                        @csrf
                        <input type="number" value="1" min="1" class="form-control" name="quantity" hidden>
                        <button type="submit"><span class="bx bx-basket"></span></button>
                    </form>
                </div>

                <div class="menu-content">
                    <a href="#">{{$m->name}}</a><span>&#8358 {{ number_format($m->amount, 2) }}</span>
                </div>
                
                

                <div class="menu-ingredients">
                    {{$m->description}}
                </div>

                </div>
                @endforeach
        </div>
        @endforeach
      </div>
    </section><!-- End Menu Section -->






<footer id="footer">
    <div class="px-5 py-3 d-flex flex-wrap flex-row justify-content-between opacity-100">
            <div>&copy Mint Bar & Lounge</div>
            <div class="text-white">                
                <a href="https://www.twitter.com/baxx_v" target="_blank" class="twitter text-white"><i class="bi-twitter"></i></a>
                <a href="https://instagram.com/the.baxx" target="_blank" class="instagram text-white"><i class="bi-instagram"></i></a>
                <a href="https://wa.me/2348179586771" class="whatsapp text-white" target="_blank"><i class="bi-whatsapp"></i></a></div>
            <div>Created by Notionwave Technologies, {{ date('Y') }} </div>
    </div>
</footer>

    <!-- Bootstrap JS (optional, only if you need Bootstrap JavaScript features) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    
    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/mint.js') }}"></script>

</body>
</html>
