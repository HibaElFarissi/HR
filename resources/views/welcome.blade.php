
@extends('layouts.app')



<html>

@section('title')
    Welcome | Laravel In Humain Resource App
@endsection

<body>

    <!-- ======= Header ======= -->


    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="#">Human Resource</a></h1>


      <nav id="navbar" class="navbar">
        <ul>
         <div id="google_translate_element"></div>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

          <!--login page: -->



          <li><a class="getstarted scrollto" href="{{ url('/login') }}">Login</a></li>


          <!--Register page: -->

          {{-- <li><a class="getstarted scrollto" href="{{ route('register') }}">Register</a></li> --}}


        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        </div>


</header>

<!-- End Header -->


    <!-- ======= Home Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Bettter Digital Experience With Laravel</h1>
          <h2>Our human resource management website is committed to providing practical.</h2>

          <!-- Page Home -->
          <div><a  href="{{ url('admin/home') }}" class="btn-get-started scrollto">Get Started</a></div>


        </div>
        <div class="col-xl-4 col-lg-6 order-1 order-lg-2 main-img.png" data-aos="zoom-in" data-aos-delay="150">
          <img src="{{ asset('assets/img/main-img.png') }}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section>
  <!-- End Home -->

  <main id="main">


      <!-- ======= About Section 1 ======= -->
      <section id="about" class="about" >
        <div class="container">
          <div class="row ">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
              <img src="{{ asset('assets/img/services-1.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content " data-aos="fade-right">
              <h3>Human Resource Laravel</h3>
              <p class="fst-italic">
                With Laravel's extensive capabilities and flexibility, we have been able to develop a comprehensive HR application
                that includes essential features such as employee management.
                <ul>
                    <li><i class="bi bi-check-circle"></i> Improved employee management more effectively,</li>
                    <li><i class="bi bi-check-circle"></i> Enhanced employee engagement</li>
                    <li><i class="bi bi-check-circle"></i>Increased efficiency: With an HR project, many processes can be automated, reducing the need for manual intervention and saving time. This can lead to increased productivity and efficiency for the organization.</li>
                </ul>
              <a href="https://www.adp.com/resources/articles-and-insights/articles/h/human-resource-management.aspx" class="read-more">Read More <i class="bi bi-long-arrow-right"></i></a>
            </div>
          </div>

        </div>
      </section>
      <!-- End About Section  1-->

  <!-- ======= About Section 2 ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row flex-row-reverse">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
          {{-- <img src="assets/img/about.jpg" class="img-fluid" alt=""> --}}
           <img src="assets/img/rj.webp" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
          <h2>Human Resource</h2>
          <ul>
            <li><i class="ri-check-double-line"></i>Our human resource management website is designed to help companies effectively manage their workforce and improve employee engagement and productivity.</li>
            <li><i class="ri-check-double-line"></i>At our HR management website, we provide a range of tools and resources to help businesses navigate the complexities of HR administration and compliance. </li>
            <li><i class="ri-check-double-line"></i>Our website is dedicated to helping organizations build and maintain a strong and motivated workforce through effective human resource management practices.</li>
          </ul>
          <p>
            Whether you're looking to streamline your HR processes, attract top talent, or enhance employee development, our website has the resources you need to achieve your goals.
            Our human resource management website is committed to providing practical.
          </p>
        </div>
      </div>

    </div>
  </section>
  <!-- End About Section 2 -->




    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Frequently Asked Questions</h2>
            <p>the Human Resource Laravel website is highly customizable. It is built using the Laravel PHP framework, which is known for its flexibility and scalability. This means that businesses can customize the platform according to their specific needs and requirements.</p>
          </div>

          <div class="faq-list">
            <ul>
              <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">What is the Human Resource Laravel website?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                  <p>
                    The Human Resource Laravel website is an online platform that provides comprehensive human resource management solutions to businesses. It is built using the Laravel PHP framework and offers a range of features and functionalities to help organizations manage their HR processes efficiently.
                  </p>
                </div>
              </li>

              <li  data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq-list-2">What types of resources does the human resource management website offer? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-2" class="collapse show" data-bs-parent=".faq-list">
                  <p>
                    The website offers a range of resources, including articles, guides, templates, and tools to help businesses manage their workforce effectively.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Can the website help with HR compliance and regulations? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                  <p>
                      Yes, the website provides information on HR compliance and regulations, including updates on labor laws and regulations.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Is the website suitable for small businesses?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Yes, the website caters to businesses of all sizes, including small businesses, and provides resources and guidance on HR management.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="400">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">  Can the website help with employee recruitment and retention?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Yes, the website offers resources and tools to help businesses attract, hire, and retain top talent, including tips for employee engagement and retention strategies.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="500">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-6" class="collapsed"> Is the website updated regularly? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-6" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Yes, the website is updated regularly with new resources, insights, and best practices on HR management and workforce optimization.
                  </p>
                </div>
              </li>

            </ul>
          </div>

        </div>
      </section>
      <!-- End Frequently Asked Questions Section -->

    <!-- Contact Section Begin -->
    <section id="contact" class="contact section-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Contact</h2>
            <p>A contact form is a vital tool that allows website visitors to get in touch with a company or organization quickly and easily.
                 By filling out a contact form, visitors can request more information,

                email address, and message. By using a contact form</p>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <div class="info-box mb-4">
                <i class="bx bx-map"></i>
                <h3>Our Address</h3>
                <p>Faculté des Sciences Semlalia Marrakech(FSSM) </p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>elfarissihiba780gmail.com</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+212 615 256 198</p>
                </div>
              </div>

              <div class="row">

                <div class="col-lg-6 ">
                    <br>
                    <br>
                    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen></iframe> --}}
                    <div ><iframe width="100%"  height="300px" allowfullscreen frameborder="0" scrolling="no" marginheight="0"  src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Facult%C3%A9%20des%20Sciences%20Semlalia%20Marrakech%20(FSSM)+(Facult%C3%A9%20des%20Sciences%20Semlalia%20Marrakech%20(FSSM))&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html"></a></iframe></div>
                </div>

      <div class="col-lg-6">
          <form action="{{ route('send.email') }}" class="contact100-form validate-form" method="post">

            <br>
            <br>
          <div class="row">
            <div class="col-md-6 form-group">
                 @csrf
                    @if(session()->has('message'))
                            <div class="alert alert-success">
                                 {{ session()->get('message') }}
                            </div>
                    @endif
                <input type="text" name="name"  type="text" class="form-control" name="name"  placeholder="Your Name" data-validate = "Name is required">
            </div>

            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
               @error('name')
                    <span class="text-danger"> {{ $message }} </span>
                @enderror
            </div>

          </div>

          <div class="form-group mt-3">
            <input type="text" class="form-control "  name="subject" placeholder="Subject"  data-validate = "Subject is required">
                        @error('subject')
                             <span class="text-danger"> {{ $message }} </span>
                        @enderror
          </div>

          <div class="form-group mt-3">
           <textarea class="form-control" name="content" rows="5" placeholder="Message"  data-validate = "Message is required"></textarea>


                    @error('content')
                       <span class="text-danger"> {{ $message }} </span>
                    @enderror

          </div>

          <div class="my-3">

          </div>

          <div class="php-email-form">
            <button type="submit">Send Message</button>
        </div>

        </form>
      </div>

    </div>

  </div>
</section><!-- End Contact Section -->


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Human <br><span>Resource</span></h3>
              <p>
                Faculté des Sciences <br>
                Semlalia Marrakech<br>
                (FSSM)<br><br>
                <strong>Phone:</strong>+212 615 256 198<br>
                <strong>Email:</strong>elfarissihiba780@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="telegram"><i class="bx bxl-telegram"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/login') }}">Login</a></li>
              {{-- <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/register') }}">Register</a></li> --}}
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">

          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Project </h4>
            <p>By using Laravel for a HRM project, companies can automate and simplify many of the HR processes</p>
            <form action="" method="GET">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Human Resource</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
        Designed by <a href="#"></a>Hiba El Farissi</a>
      </div>
    </div>
  </footer><!-- End Footer -->

 <!--Create button back-to-top: -->

    <div id="preloader"></div>
    {{-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> --}}

    <a href="#" class="position-absolute bottom-0 end-0 p-3">
        <i class="bi bi-arrow-up-circle h2"></i>
  </a>









  <script type="text/javascript" src="{{ asset('folder1/js/mdb.min.js') }}"></script>
  <!-- Custom scripts -->
  <script type="text/javascript" src="{{ asset('folder1/js/script.js') }}"></script>
  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

  <!-- google translate---->
  <script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement(
            {pageLanguage: 'en'},
            'google_translate_element'
        );
    }
</script>

<script type="text/javascript"
        src= "https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>
<style>
    body{
        top: 0px !important;
        position: static !important;
    }
    .goog-te-banner-frame{
        display:none !important
    }
    .goog-te-combo{
        width: 100%;
        height: 40px;
        border-radius: 6px;
        background: rgba(24, 6, 185, 0.8);
        color: white;
        outline: none;
        cursor: pointer;
        margin-bottom: 10px;
        border: 2px solid rgb(83, 52, 237);
    }
    .goog-te-combo:hover{
        border: 2px solid white;
    }
    .goog-te-gadget {
        color: #040f1c00;
    }
    .goog-logo-link, .goog-logo-link:link, .goog-logo-link:visited, .goog-logo-link:hover, .goog-logo-link:active {
     font-size: 12px;
     font-weight: bold;
     color: #6b96cb00;
     text-decoration: none;
     visibility: hidden;
}
</style>

    </body>
</html>
