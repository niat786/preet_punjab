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
              src="{{asset('preet/images/Punjabi-Luddi-1024x568.jpg')}}"
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
                Punjabi <span style="color: #f27420">Culture</span>
              </h1>

              <div class="d-flex justify-content-center d-none d-md-flex">
                <p class="w-50 fs-5">
                  Traditions and Culture Diversty of Punjab
                </p>
              </div>

              <div class="d-flex justify-content-center">
                <a href="./punjabi_sub.html">
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
              src="{{asset('preet/images/bangra.jpg')}}"
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
                Punjabi <span style="color: #f27420">Culture</span>
              </h1>

              <div class="d-flex justify-content-center d-none d-md-flex">
                <p class="w-50 fs-5">
                  Traditions and Culture Diversty of Punjab
                </p>
              </div>

              <div class="d-flex justify-content-center">
                <a href="./punjabi_sub.html">
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

      <div class="cont">
        <!-- food section -->
        <div class="mx-2 mx-md-0 mx-lg-4 mx-lg-5 my-5">
          <div
            class="d-flex align-items-center mx-md-2 mx-lg-4 mx-xl-5 p-5 gap-5 foodSec"
          >
            <div class="txt">
              <h2>Foods</h2>
              <p>
                Makke di Roti (maize bread) and Sarson da Saag (mustard leaf
                curry) is another traditional dish of Punjab. There are many
                other foods like Chole Bhathure, Rajma Chawal and Paneer Naan,
                but one of the humongous favourites is Tandoori Chicken!
              </p>
              <div class="d-flex justify-content-start">
                <a href="./punjabi_sub.html">
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
              <div class="relDiv">
                <img
                  class="absDiv"
                  src="{{asset('preet/images/Makki-di-Roti-and-Sarson-ka-Saag 1.png')}}"
                  alt=""
                />
              </div>
            </div>
          </div>
        </div>

        <!-- dress section -->
        <div class="mx-2 mx-md-0 mx-lg-4 mx-lg-5 my-5">
          <div
            class="d-flex align-items-center mx-md-2 mx-lg-4 mx-xl-5 p-5 gap-5 dressSec"
          >
            <div
              class="img d-flex justify-content-center justify-content-lg-between py-5"
            >
              <div class="relDiv">
                <img
                  class="absDiv"
                  src="{{asset('preet/images/220px.png')}}"
                  alt=""
                />
              </div>
            </div>

            <div class="txt">
              <h2>Dresses</h2>
              <p>
                The costumes are a mix of colours, comfort and beauty and Punjab
                is well known for the use of phulkari(embroidery) in its
                costumes. In most of the villages of Punjab men wear
                Pagri(turban), dhoti/lacha, kurta, khusa.
              </p>
              <div class="d-flex justify-content-start">
                <a href="./punjabi_sub.html">
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
        <!-- art section -->
        <div class="mx-2 mx-md-0 mx-lg-4 mx-lg-5 my-5">
          <div
            class="d-flex align-items-center mx-md-2 mx-lg-4 mx-xl-5 p-5 gap-5 artSec"
          >
            <div class="txt">
              <h2>Art</h2>
              <p>
                Makke di Roti (maize bread) and Sarson da Saag (mustard leaf
                curry) is another traditional dish of Punjab. There are many
                other foods like Chole Bhathure, Rajma Chawal and Paneer Naan,
                but one of the humongous favourites is Tandoori Chicken!
              </p>

              <div class="d-flex justify-content-start">
                <a href="./punjabi_sub.html">
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
              <div class="relDiv">
                <img class="absDiv" src="{{asset('preet/images/images (14) 1.png')}}" alt="" />
              </div>
            </div>
          </div>
        </div>

        <!-- Dance Section -->

        <div class="mx-2 mx-md-0 mx-lg-4 mx-lg-5 my-5">
          <div
            class="d-flex align-items-center mx-md-2 mx-lg-4 mx-xl-5 p-5 gap-5 danceSec"
          >
            <div
              class="img d-flex justify-content-center justify-content-lg-between py-5"
            >
              <div class="relDiv">
                <img
                  class="absDiv"
                  src="{{asset('preet/images/group-modern-bhangra-dancers-fun-600w-2282785947 1.png')}}"
                  alt=""
                />
              </div>
            </div>

            <div class="txt">
              <h2>Dances</h2>
              <p>
                The costumes are a mix of colours, comfort and beauty and Punjab
                is well known for the use of phulkari(embroidery) in its
                costumes. In most of the villages of Punjab men wear
                Pagri(turban), dhoti/lacha, kurta, khusa.
              </p>
              <div class="d-flex justify-content-start">
                <a href="./punjabi_sub.html">
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
      </div>
    </div>

    <!-- footer -->
    @include('preet.footer')

