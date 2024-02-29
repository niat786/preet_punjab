@include('preet.header')
  <body >
    <!-- navbar -->
  @include('preet.navbar')

    <div class="count firstSec my-5" style="margin-top:100px;">
      <!-- hero sectio -->
      <div
        class="d-flex m-4 m-lg-3 flex-column flex-lg-row align-items-center justify-content-center p-3 p-lg-2 p-lg-5 gap-5 left"
      >
        <div class="hero w-100 w-lg-50">
          <h2>{{$hr->title}}</span></h2>
          <p>
            {{$hr->description}}
          </p>
        </div>
        <div
          class="w-100 w-lg-50 d-flex justify-content-center justify-content-lg-end"
        >
          <img
            src="{{asset('storage/'.$hr->featured_image) }}"
            alt=""
            width="400"
            class="borderRadiusImg shadow animation animImg"
          />
        </div>
      </div>

      <!-- about section -->
      <div class="mx-0 mx-lg-2 my-5 d-flex flex-column-reverse flex-lg-row p-5">
  

        <div
          class="d-flex flex-column mx-md-2 mx-lg-0 mx-xl-5 gap-1 about w-100 w-lg-50"
        >
          <div>
            <h2>About</h2>
            <p id="heritageTxt">
              {{$hr->content}}
            </p>
          </div>
        </div>
      </div>
     


    </div>

    <!-- footer -->
    <div class="footerBtm">
      <div>
        <a href="/">Preet Punjab.com</a>
      </div>

      <div class="ftrAbout">
        <div>About us</div>
        <div class="ftrLine"></div>
        <div>Advertising</div>
        <div class="ftrLine"></div>
        <div>Privacy Policy</div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
