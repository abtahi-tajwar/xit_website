<!-- Start Footer bottom Area -->
<footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span>XiT</span> Bangladesh</h2>
                </div>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a target="blank" href="https://www.facebook.com/xitbd/"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="https://www.xitbangladesh.com/"><i class="fa fa-chrome"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-6 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>information</h4>
                <p>
                  Feel Free To Contact With Us -
                </p>
                <div class="footer-contacts">
                  <p><span>Tel:</span> {{$data->contact->phone[0]}}</p>
                  <p><span>Email:</span> {{$data->contact->email}}</p>
                  <p><span>Working Hours:</span> {{$data->contact->time}}</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <!--<div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Instagram</h4>
                <div class="flicker-img">
                  <a href="#"><img src="img/portfolio/1.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/2.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/3.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/4.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/5.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/6.jpg" alt=""></a>
                </div>
              </div>
            </div>
          </div>-->
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>XitBangladesh</strong>. All Rights Reserved
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{ URL::asset('/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('/lib/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ URL::asset('/lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ URL::asset('/lib/venobox/venobox.min.js') }}"></script>
  <script src="{{ URL::asset('/lib/knob/jquery.knob.js') }}"></script>
  <script src="{{ URL::asset('/lib/wow/wow.min.js') }}"></script>
  <script src="{{ URL::asset('/lib/parallax/parallax.js') }}"></script>
  <script src="{{ URL::asset('/lib/easing/easing.min.js') }}"></script>
  <script src="{{ URL::asset('/lib/nivo-slider/js/jquery.nivo.slider.js') }}" type="text/javascript"></script>
  <script src="{{ URL::asset('/lib/appear/jquery.appear.js') }}"></script>
  <script src="{{ URL::asset('/lib/isotope/isotope.pkgd.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{ URL::asset('/contactform/contactform.js') }}"></script>

  <script src="{{ URL::asset('/js/single-project.js') }}"></script>
  <script src="{{ URL::asset('/js/main.js') }}"></script>
</body>


</html>