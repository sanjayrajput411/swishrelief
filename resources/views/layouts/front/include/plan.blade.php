<section class="choose-your-plan services-mains">

  <div class="container">

    <div class="plans">
       <h2>Membership Registration</h2>
      <p>ALL FEES WILL SUPPORT INSIDER CONTRIBUTORS</p>

          </div>

    <div class="row">

      <!-- <div class="col-md-4">

    <div class="have-any">

    <h2>Have Any Questions?</h2>

    <p>We work with a wide variety of groups an individuals to promote prison reform. We look forward to hearing from you!</p>

      <button type="button" class="btn btn-warning">Contact Us</button>

  </div>

  </div> -->

       <?php 
      //echo'<pre>';//print_r($data);die;

      ?>

      <!--@if(Auth::User())-->

      <div class="col-md-4">

        <div class="bronze-plan">
          <form action="" method="">
            <input type="hidden" name="plan_id" value="">
            <!--<h2>Newsletters</h2>-->
            <span>1 MONTH</span>
             <h3>$24.99</h3>
            <!-- <p>Receive articles through Corrlinks.</p> -->
            <ul>
              <i class="fa fa-check"></i>
              <li>Receive articles through Corrlinks.</li>
              <i class="fa fa-check"></i>
              <li>Motivate incarcerated to succeed.</li>
              <i class="fa fa-check"></i>
              <li>Free Service.</li>
              <!-- <i class="fa fa-check"></i>

            <li>Unlimited access to prisoner re-entry resources</li> -->

            </ul>

            <!--@if(Auth::User())-->

            <!--@else-->

            <a href="{{url('front/sign-up')}}" style="text-decoration:none;"><button type="button" class="btn btn-warning" style=" margin-top: 92px !important;">Process</button></a>

            <!--@endif-->
          </form>
        </div>

      </div>

      <!--@else-->

      <div class="col-md-4">

        <div class="bronze-plan">
          <form action="" method="">
            <input type="hidden" name="plan_id" value="">
            <h2>Newsletters</h2>

            <!-- <h3>$0.00</h3> -->

            <span>Free Plan</span>

            <!-- <p>Receive articles through Corrlinks.</p> -->
            <ul>

              <li><input type="checkbox" name="myCheckbox" value="1" onclick="selectOnlyThis(this)" style="position: absolute;margin-top: 5px;width: 4%;margin-left: -5%;"> Receive articles through Corrlinks.</li>
              <li><input type="checkbox" name="myCheckbox" value="1" onclick="selectOnlyThis(this)" style="position: absolute;margin-top: 5px;width: 4%;margin-left: -5%;"> Motivate incarcerated to succeed.</li>
             <li><input type="checkbox" name="myCheckbox" value="1" onclick="selectOnlyThis(this)" style="position: absolute;margin-top: 5px;width: 4%;margin-left: -5%;"> Free Service.</li>
            </ul>

            <!--@if(Auth::User())-->

            <!--@else-->

            <a href="{{url('front/sign-up')}}" style="text-decoration:none;"><button type="button" class="btn btn-warning" style=" margin-top: 92px !important;">Process</button></a>

            <!--@endif-->
          </form>
        </div>

      </div>

      <!--@endif-->



      <!--@if(Auth::User())-->





      <div class="col-md-4">

        <form action="{{url('front/billing-details') }}" method="POST" enctype="multipart/form-data">

          @csrf

          <input type="hidden" name="plan_id" value="{{ $plans1['plan_id'] }}">

          <div class="sliver-plan">

            <!---<h2>Silver Plan</h2>

              <h3>$6.95</h3> -->

            <h2>{{ $plans1['package_name'] }}</h2>

            <!-- <h3>${{ $plans1['plan_price'] }}</h3> -->

            <span>Paid Plan</span>

            <!-- <p>Government officials who found themselves on the wrong side</p> -->
            <ul>
            <!-- <li><input type="checkbox" name="myCheckbox" value="1" onclick="selectOnlyThis(this)" style="position: absolute;margin-top: 5px;width: 4%;margin-left: -5%;">$0.60 / picture</li>
            <li> <input type="checkbox" name="myCheckbox" value="1" onclick="selectOnlyThis(this)" style="position: absolute;margin-top: 5px;width: 4%;margin-left: -5%;"> $2.50 / 5 pictures</li> -->
            <li> <input type="checkbox" name="myCheckbox" value="1" onclick="selectOnlyThis(this)" style="position: absolute;margin-top: 5px;width: 4%;margin-left: -5%;"> $8.00/ 10 pictures</li>
              <li><a href="">Important details you should know.</a></li>
            </ul>

            <button type="submit" class="btn btn-warning">Process</button>

            <!--- <a href="{{url('front/billing-details')}}" style="text-decoration:none;">

            <button type="button" class="btn btn-warning">Upgrade</button>

          </a>  -->

        </form>

      </div>





    </div>

    <!--@else-->

    <div class="col-md-4">

      <div class="sliver-plan">
        <form action="" method="POST">
          <h2>Cheer up loved ones</h2>

          <!-- <h3>$6.95</h3> -->

          <span>Paid Plan</span>
          <!-- <p>Government officials who found themselves on the wrong side</p> -->

          <ul>
          <!-- <li><input type="checkbox" name="myCheckbox" value="1" onclick="selectOnlyThis(this)" style="position: absolute;margin-top: 5px;width: 4%;margin-left: -5%;">$0.60 / picture</li>
             <li> <input type="checkbox" name="myCheckbox" value="1" onclick="selectOnlyThis(this)" style="position: absolute;margin-top: 5px;width: 4%;margin-left: -5%;">$2.50 / 5 pictures</li> -->
             <li><input type="checkbox" name="myCheckbox" value="1" onclick="selectOnlyThis(this)" style="position: absolute;margin-top: 5px;width: 4%;margin-left: -5%;">$8.00/ 10 pictures</li>
             <li><a href="">Important details you should know.</a></li>
          </ul>

          <!--@if(Auth::User())-->

          <!--@else-->

          <a href="{{url('front/sign-up')}}" style="text-decoration:none;"><button type="button" class="btn btn-warning">Process</button></a>

          <!--@endif-->
        </form>
      </div>

    </div>

    <!--@endif-->



    <!--@if(Auth::User())-->

    <div class="col-md-4">

      <form action="{{url('front/billing-details') }}" method="POST" enctype="multipart/form-data">

        <!--@csrf-->

        <input type="hidden" name="plan_id" value="{{ $plans2['plan_id'] }}">



        <div class="sliver-plan">

          <!---<h2>Platinum</h2>

          <h3>$20.00</h3>-->

          <h2>{{ $plans2['package_name'] }}</h2>

          <!-- <h3>${{ $plans2['plan_price'] }}</h3> -->

          <span>Paid Plan</span>

          <!-- <p>Government officials who found themselves on the wrong side</p> -->
          <ul>
        
        <li><input type="checkbox" name="myCheckbox" value="1" onclick="selectOnlyThis(this)" style="position: absolute;margin-top: 5px;width: 4%;margin-left: -5%;">
          Basic research at $6.95 / month.</br>
          <a href="">More details</a></li>
        
       
        <!-- <li><input type="checkbox" name="myCheckbox" value="1" onclick="selectOnlyThis(this)" style="position: absolute;margin-top: 5px;width: 4%;margin-left: -5%;">
          Advance research at $0.21 / minute. Additional $0.50 for regular mail.</br>
          <a href="">More details</a></li>
       
        
          <li><input type="checkbox" name="myCheckbox" value="1" onclick="selectOnlyThis(this)" style="position: absolute;margin-top: 5px;width: 4%;margin-left: -5%;">
          Case research. The price depends on the scope. Proceed and provide us with the scope.</li> -->
        
      </ul>

          <!---<a href="{{url('front/bill-detail')}}" style="text-decoration:none;"><button type="button" class="btn btn-warning">Upgrade</button></a>-->

          <button type="submit" class="btn btn-warning">Process</button>

      </form>

    </div>

  </div>

  <!--@else-->

  <div class="col-md-4">

    <div class="sliver-plan">
      <h2>Research</h2>
      <!-- <h3>$20.00</h3> -->
      <span>Paid Plan</span>
      <!-- <p>Government officials who found themselves on the wrong side</p> -->
      <ul>
      
        <li><input type="checkbox" name="myCheckbox" value="1" onclick="selectOnlyThis(this)" style="position: absolute;margin-top: 5px;width: 4%;margin-left: -5%;">
          Basic research at $6.95 / month. </li>
          <li><a href="">More details</a></li>
      
        <!-- <li style="margin-left: 8%;"><input type="checkbox" name="myCheckbox" value="1" onclick="selectOnlyThis(this)" style="position: absolute;margin-top: 5px;width: 4%;margin-left: -5%;">
            Advance research at $0.21 / minute. Additional $0.50 for regular mail. </li>
          <li><a href="">More details</a></li>
        
          <li style="margin-left: 7%;"> <input type="checkbox" name="myCheckbox" value="1" onclick="selectOnlyThis(this)" style="position: absolute;margin-top: 5px;width: 4%;margin-left: -5%;">
         Case research. The price depends on the scope. Proceed and provide us with the scope.</li>
        -->
      </ul>

      <!--@if(Auth::User())-->

      <!--@else-->

      <a href="{{url('front/sign-up')}}" style="text-decoration:none;"><button type="button" class="btn btn-warning">Process</button></a>

      <!--@endif-->

    </div>

  </div>

  <!--@endif-->

  </div>

  </div>
  <script>
    function selectOnlyThis(id) {
      var myCheckbox = document.getElementsByName("myCheckbox");
      Array.prototype.forEach.call(myCheckbox, function(el) {
        el.checked = false;
      });
      id.checked = true;
    }
  </script>
</section>

<!-- end section -->