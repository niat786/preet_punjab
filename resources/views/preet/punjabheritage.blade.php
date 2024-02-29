@include('preet.header')
  <body>
    <!-- navbar -->
  @include('preet.navbar')

    <div class="firstSec my-5" style="margin-top:100px;">
      <!-- slider -->
      <div
        id="carouselExampleCaptions"
        class="carousel slide mx-1 mx-lg-5 px-1 px-lg-4 px-xl-5 mx-xl-5"
        data-bs-ride="carousel"
      >
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="{{asset('preet/images/badshahSlider.webp')}}"
              class="d-block w-100"
              alt="..."
              style="object-fit: cover; height: 60vh"
            />
            <div
              class="carousel-caption d-md-block text-center"
              style="top: 8rem; bottom: unset !important"
              ;
            >
              <h1 class="slider_head">
                Punjabi <span style="color: #f27420">Heritage</span>
              </h1>

              <div class="d-flex justify-content-center d-none d-md-flex">
                <p class="w-50 fs-5">
                  Traditions and Culture Diversty of Punjab
                </p>
              </div>

              <div class="d-flex justify-content-center">
                <a href="./heritage_sub.html">
                  <button
                    class="btn text-white"
                    style="background-color: #f27420"
                  >
                    View More
                  </button>
                </a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <img
              src="{{asset('preet/images/badshahSlider.webp')}}"
              class="d-block w-100"
              alt="..."
              style="object-fit: cover; height: 60vh"
            />
            <div
              class="carousel-caption d-md-block text-center"
              style="top: 8rem; bottom: unset !important"
              ;
            >
              <h1 class="slider_head">
                Punjabi <span style="color: #f27420">Heritage</span>
              </h1>

              <div class="d-flex justify-content-center d-none d-md-flex">
                <p class="w-50 fs-5">
                  Traditions and Culture Diversty of Punjab
                </p>
              </div>

              <div class="d-flex justify-content-center">
                <a href="./heritage_sub.html">
                  <button
                    class="btn text-white"
                    style="background-color: #f27420"
                  >
                    View More
                  </button>
                </a>
              </div>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
@php $counter = 1 @endphp
      <div class="cont">

        <div>
            @foreach($hr as $p)
         @if($counter % 2 != 0)
          <!-- faisal mosque section -->
          <div class="mx-2 mx-md-0 mx-lg-4 mx-lg-5 my-5">
            <div
              class="d-flex align-items-center mx-md-2 mx-lg-4 mx-xl-5 p-5 gap-5 faisalSec"
            >
              <div class="txt">
                <h2>{{$p->title}}</h2>
                <p>
                  {{$p->description}}
                </p>
                <div class="d-flex justify-content-start">
                  <a href="{{ route('hr.show', ['slug' => $p->slug]) }}" id="faisal">
                    <button
                      class="btn text-white"
                      style="background-color: #f27420"
                    >
                      View More
                    </button>
                  </a>
                </div>
              </div>

              <div
                class="img d-flex justify-content-center justify-content-lg-end py-5"
              >
                <img class="w-100 shadowImg" src="{{asset('storage/'.$p->featured_image)}}" alt="" />
              </div>
            </div>
          </div>
@else
          <!-- minare pakistan -->
          <div class="mx-2 mx-md-0 mx-lg-4 mx-lg-5 my-5">
            <div
              class="d-flex align-items-center mx-md-2 mx-lg-4 mx-xl-5 p-5 gap-5 minarSec"
            >
              <div
                class="img d-flex justify-content-center justify-content-lg-end py-5"
              >
                <img class="w-100 shadowImg" src="{{asset('storage/'.$p->featured_image)}}" alt="" />
              </div>

              <div class="txt">
                <h2> {{$p->title}}</h2>
                <p>
                   {{$p->description}}
                </p>
                <div class="d-flex justify-content-start">
                  <a href="{{ route('hr.show', ['slug' => $p->slug]) }}">
                    <button
                      class="btn text-white"
                      style="background-color: #f27420"
                    >
                      View More
                    </button>
                  </a>
                </div>
              </div>
            </div>
          </div>

      @endif
           @php $counter++ @endphp
        @endforeach
        </div>

     
        </div>
      </div>
    </div>

    <!-- footer -->
    @include('preet.footer')
