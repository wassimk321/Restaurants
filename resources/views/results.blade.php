<!DOCTYPE html>
<html lang="en">
    
@include('include.header')

<body>

  <!-- ======= Top Bar ======= -->

  <!-- ======= Header ======= -->
 <!-- End Header -->


  <main id="main">

    <!-- ======= About Section ======= -->
    <br>
    <br>
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
              <li><i class="bi bi-check-circle"></i>{{$rest->category->name}}</li>
            </ul>
            <p>
                {{$rest->description}}
            </p>
            <a href="#book-a-table" >Menu</a>
          </div>
        </div>

      </div>
      
      @endforeach
      <br>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
 <!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->

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
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>