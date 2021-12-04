<!DOCTYPE html>
<html lang="en">
    
@include('include.header')

<body>

  <!-- ======= Top Bar ======= -->

  <!-- ======= Header ======= -->
 <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span>Restaurants</span></h1>
          <h2>Find Best Restaurants!</h2>

        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        @foreach($restaurants as $rest)
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="{{$rest->image}}" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h2>{{$rest->name}}</h2>
            <p class="fst-italic">
                {{$rest->city}} - {{$rest->address}}
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i><a href="{{route('cat.show', ['id' =>$rest->category->id] )}}">{{$rest->category->name}}</a></li>
            </ul>
            <p>
                {{$rest->description}}
            </p>
            <a href="{{route('menu', ['id' =>$rest->id] )}}" >Menu</a>
          </div>
        </div>

      </div>
      
      @endforeach
      <br>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
 <!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
            <p>Restaurants Categories</p>
        </div>
        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-starters">
            
            <div class="">
                @foreach($categories as $cat)

                <a href="{{route('cat.show', ['id' =>$cat->id] )}}">{{$cat->name}}</a>
                <br>
          @endforeach
          <br>
            </div>
          </div>


        </div>

      </div>




      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
   <!-- End Events Section -->

    <!-- ======= Book A Table Section ======= -->
    <!-- End Book A Table Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
<!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <!-- End Chefs Section -->

    <!-- ======= Contact Section ======= -->
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('include.footer')
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>