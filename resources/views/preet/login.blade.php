@include('preet.header')
  <body >
    <!-- navbar -->
  @include('preet.navbar')

    <div class="firstSec cont">
      <!-- main section start-->
      <div class="container-fluid">
        <div class="container main-login-section">
          <div class="row">
            <div class="col-lg-6 p-0">
              <div class="login-image-section">
                <div class="image-section-content"></div>
              </div>
            </div>
            <div class="col-lg-6 p-0 login-form-section">
              <div class="form-section-heading"></div>
              <div class="login-section">
                <div style="display: inline-flex">
                  <h4 class="lp" style="color: black; margin-top: 6px">
                    Preet
                  </h4>
                  <h1 style="color: black"><strong>//</strong></h1>
                  <h4 style="margin-top: 6px">Punjab</h4>
                </div>
                <div>
                  <p style="color: #f27420; margin-bottom: 50px">
                    Welcome to Preet Punjab
                  </p>
                </div>
                <!-- <form action=""></form> -->
                <form action="#" method="">
                  <div class="mb-4">
                    <input
                      type="email"
                      name="email"
                      class="form-control"
                      placeholder="Username or E-mails"
                      value=""
                    />
                  </div>
                  <div class="mb-4">
                    <input
                      type="password"
                      name="password"
                      class="form-control"
                      placeholder="Password"
                    />
                  </div>

                  <p class="my-4">
                    <a href="#" type="button">Forgot password</a>
                  </p>
                  <div class="px-5">
                    <button>Login</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- main section end-->
    </div>

    <!-- footer -->
    @include('preet.footer')

