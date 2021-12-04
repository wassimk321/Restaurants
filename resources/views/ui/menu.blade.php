<!DOCTYPE html>
<html lang="en">
@include('include.header')
  <main id="main">
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Restaurant Name </h2>
        </div>

      </div>
    </section>

    <section class="inner-page">
      <div class="container">
        <section id="menu" class="menu section-bg">
          <div class="container" data-aos="fade-up">
    
            <div class="section-title">
              <h2>Menu</h2>
              <p>Check Our Tasty Menu</p>
            </div>
    
            <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-12 d-flex justify-content-center">
                <ul id="menu-flters">
                  <li data-filter="*" class="filter-active">All</li>
                  @foreach($mealtypes as $mealtype)
                  <li data-filter=".filter-specialty">{{$mealtype->name}}</li>
                  @endforeach
                </ul>
              </div>
            </div>
    
            <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
    @foreach ($meals as $meal)
        
    
              <div class="col-lg-6 menu-item filter-starters">
                <img src="assets/img/menu/lobster-bisque.jpg" class="menu-img" alt="">
                <div class="menu-content">
                  <a href="#">{{$meal->description}}</a><span>{{$meal->price}}sp</span>
                </div>
                <div class="menu-ingredients">
                  Lorem, deren, trataro, filede, nerada
                </div>
              </div>
    @endforeach


 
    

    




    
            </div>
    
          </div>
        </section>
      </div>
    </section>

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