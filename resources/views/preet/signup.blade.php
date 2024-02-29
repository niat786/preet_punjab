@include('preet.header')
  <body class="d-flex poetrybody flex-column min-vh-100">
    <!-- navbar -->
  @include('preet.navbar')

    <div class="firstSec cont" style="margin-top: 100px;">

         <!-- main section start-->
  <div class="container-fluid">
    <div class="container main-signup-section">
      <div class="row">
        <div class="col-lg-6 p-0">
          <div class="signup-image-section">
            <div class="image-section-content">
            </div>
          </div>
        </div>
        <div class="col-lg-6 p-0 signup-form-section">
          <div class="signup-section">
            <h4>Sign Up </h4>
            <!-- <form action=""></form> -->
            <form action="#" method="" class="contform">
              <div class="mb-4">
                <input type="text" name="name" class="form-control" placeholder="Username" value="" required />
              </div>
              <div class="mb-4">
                <input type="password" name="email" class="form-control" placeholder="Password" required />
              </div>
              <div class="mb-4">
                <input type="password" name="phone" class="form-control" placeholder="Confirm Password" value=""
                  required />
              </div>
              <div class="mb-4">
                <input type="email" name="email" class="form-control" placeholder="Mail" value="" required />
              </div>
              <div class="mb-4 form-check">
                <input type="checkbox" class="form-check-input" id="checkme" name="remember" />
                <label class="form-check-label" for="checkme">Remember me
                </label>
              </div>
              <div class="submitbtn">
                <button type="submit" class="btn btn-primary">Sign Up</button>
              </div>
            </form>
          </div>
          <div class="signup-section1">
            <p>Already have an account? <a href="/login">login</a> </p>
          </div>
        </div>
      </div>
    </div>
    <!-- main section end-->
    </div>

 <!-- footer -->
 @include('preet.footer')
