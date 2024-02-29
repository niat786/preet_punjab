@include('preet.header')
  <body class="d-flex poetrybody flex-column min-vh-100">
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
                <div>
                  <h3 style="margin-top: 6px">About Us</h3>
                </div>
                <div class="about_content">
                  <h4><strong>- Introduction</strong></h4>
                  <p style="margin-bottom: 20px">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Accusamus sint aperiam vitae accusantium nulla, libero
                    deleniti officiis provident aut fuga autem maiores corporis?
                    Enim sequi a iste quae sed? Corrupti explicabo iusto laborum
                    quibusdam, assumenda aperiam nostrum optio distinctio ad
                    voluptates deleniti enim, quod excepturi velit natus.
                    Dignissimos, aspernatur ea!
                  </p>
                  <h4><strong>- Our Mission</strong></h4>
                  <p style="margin-bottom: 20px">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Accusamus sint aperiam vitae accusantium nulla, libero
                    deleniti officiis provident aut fuga autem maiores corporis?
                    Enim sequi a iste quae sed? Corrupti explicabo iusto laborum
                    quibusdam, assumenda aperiam nostrum optio distinctio ad
                    voluptates deleniti enim, quod excepturi velit natus.
                    Dignissimos, aspernatur ea!
                  </p>
                  <h4><strong>- Features</strong></h4>
                  <p style="margin-bottom: 20px">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Accusamus sint aperiam vitae accusantium nulla, libero
                    deleniti officiis provident aut fuga autem maiores corporis?
                    Enim sequi a iste quae sed? Corrupti explicabo iusto laborum
                    quibusdam, assumenda aperiam nostrum optio distinctio ad
                    voluptates deleniti enim, quod excepturi velit natus.
                    Dignissimos, aspernatur ea!
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer -->
@include('preet.footer')

@push('custom-styles')
<link rel="stylesheet" href="{{asset('preet/css/about.css')}}" />
@endpush
