
<!-- start newsletter -->


<footer class="footer text-center text-lg-start bg-light text-muted" style="display: none;">
  <!-- Section: Social media -->
  <section class="container d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class=" me-5 d-none d-lg-block">
       <img src="{{ url('public/images/contentimg/atrium.png')}}" alt="logo">
    </div>
    <!-- Left -->

    <!-- Right -->
    <div class="icon">
      <a
        class="btn text-white btn-floating m-1"
        href="#!"
        role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn text-white btn-floating m-1"
        href="#!"
        role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn text-white btn-floating m-1"
        href="#!"
        role="button"
        ><i class="fa-brands fa-youtube"></i></a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 ">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            UPDATES
          </h6>
          <p>
          <a href="{{url('geopolitics')}}" class="text-reset">Geopolitics</a>
          </p>
          <p>
            <a href="{{url('geopolitics')}}" class="text-reset">Fintech</a>
          </p>
          <p>
            <a href="{{url('geopolitics')}}" class="text-reset">Science</a>
          </p>
          <p>
            <a href="{{url('geopolitics')}}" class="text-reset">Health</a>
          </p>
          <p>
            <a href="{{url('geopolitics')}}" class="text-reset">Environment</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            INFORMATION
          </h6>
          <p>
            <a href="#!" class="text-reset">Introduction</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Advertise</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Privacy Policy</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Terms of Service</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 ">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            SERVICES
          </h6>
          <p>
            <a href="#!" class="text-reset">Subscription</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Customer Support</a>
          </p>
          <p>
            <a href="#!" class="text-reset">FAQ</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Work with us</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 ">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">CONTRIBUTE INTEL</h6>
          <form>
            <div class="form-group">
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-outline">
              <textarea  placeholder="Message" class="form-control" id="textAreaExample1" rows="4"></textarea>
            </div>
            <div class="form-group">
              <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">By signing up, you agree to the our terms and our <a>Privacy Policy</a> agreement.</label>
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-primary submit">Send</button>
          </div>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="container text-center p-4 border-top">
    © 2023 The insider update. Designed by
    <a class="text-reset fw-bold" href="https://netmaxims.com/">Netmaxims.</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->


</body>
</html>


<script type="text/javascript">
         $(function() {
             var url = window.location.href;
             // alert(url);
             $("#menus a").each(function() {
                 if (url == (this.href)) {
                     $(this).closest("li").addClass("actives");

                 } else {
                     $(this).closest("li").removeClass("actives");
                 }

             });
         });
      </script>
