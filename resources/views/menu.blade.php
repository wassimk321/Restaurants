<!DOCTYPE html>
<html lang="en">
@include('include.header')
  <main id="main">
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>{{$resturant->name}} Restaurant</h2>
        </div>

      </div>
    </section>

    <section class="inner-page">
    
            <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
    @foreach ($meals as $meal)
              <div class="col-lg-6 menu-item filter-starters">
                <img src="{{ asset($meal->img) }}" class="menu-img" alt="" width="100" height="100">
                <div class="menu-content">
                  <a href="#">{{$meal->description}}</a><br><span>{{$meal->price}}sp</span>
                </div>
              </div>
    @endforeach




 
    

    




    </section>

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