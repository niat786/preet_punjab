@include('preet.header')
  <body>
    <!-- navbar -->
  @include('preet.navbar')

    <div class="firstSec my-5">
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

      <div class="cont">
        <div>
          <!-- faisal mosque section -->
          <div class="mx-2 mx-md-0 mx-lg-4 mx-lg-5 my-5">
            <div
              class="d-flex align-items-center mx-md-2 mx-lg-4 mx-xl-5 p-5 gap-5 faisalSec"
            >
              <div class="txt">
                <h2>Faisal Mosque</h2>
                <p>
                  The Faisal Mosque in Islamabad, Pakistan, is renowned for its
                  modern design, inspired by a Bedouin tent, with four towering
                  minarets and a vast prayer hall.
                </p>
                <div class="d-flex justify-content-start">
                  <a href="./heritage_sub.html" id="faisal">
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
                <img class="w-100 shadowImg" src="{{asset('preet/images/faisal.jpg')}}" alt="" />
              </div>
            </div>
          </div>

          <!-- minare pakistan -->
          <div class="mx-2 mx-md-0 mx-lg-4 mx-lg-5 my-5">
            <div
              class="d-flex align-items-center mx-md-2 mx-lg-4 mx-xl-5 p-5 gap-5 minarSec"
            >
              <div
                class="img d-flex justify-content-center justify-content-lg-end py-5"
              >
                <img class="w-100 shadowImg" src="{{asset('preet/images/minar.jpg')}}" alt="" />
              </div>

              <div class="txt">
                <h2>Minar-e-Pakistan</h2>
                <p>
                  The Minar-e-Pakistan in Lahore symbolizes Pakistan's
                  independence, commemorating the Lahore Resolution of 1940.
                  Standing over 70 meters tall, it is a significant landmark and
                  a reminder of the nation's history.
                </p>
                <div class="d-flex justify-content-start">
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

          <!-- badshahi section -->

          <div class="mx-2 mx-md-0 mx-lg-4 mx-lg-5 my-5">
            <div
              class="d-flex align-items-center mx-md-2 mx-lg-4 mx-xl-5 p-5 gap-5 badshahSec"
            >
              <div class="txt">
                <h2 class="org">Badshahi Mosque</h2>
                <p>
                  The Badshahi Mosque in Lahore, Pakistan, is a masterpiece of
                  Mughal architecture, known for its grandeur and historical
                  significance.
                </p>
                <div class="d-flex justify-content-start">
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

              <div
                class="img d-flex justify-content-center justify-content-lg-end py-5"
              >
                <img class="w-100 shadowImg" src="{{asset('preet/images/badshah.webp')}}" alt="" />
              </div>
            </div>
          </div>
        </div>

        <div>
          <!-- Gandhara civilization -->
          <div class="mx-2 mx-md-0 mx-lg-4 mx-lg-5 my-5">
            <div
              class="d-flex align-items-center mx-md-2 mx-lg-4 mx-xl-5 p-5 gap-5 minarSec"
            >
              <div
                class="img d-flex justify-content-center justify-content-lg-end py-5"
              >
                <img
                  class="w-100 shadowImg"
                  src="{{asset('preet/images/Gandhara-School-of-Art.jpg')}}"
                  alt=""
                />
              </div>

              <div class="txt">
                <h2 class="org">Gandhara civilization</h2>
                <p>
                  The Gandhara civilization, flourishing in present-day Pakistan
                  and Afghanistan from the 6th century BCE to the 5th century
                  CE, was renowned for its exquisite Buddhist art and sculpture,
                  blending Hellenistic and Indian influences. This ancient
                  civilization played a pivotal role in the transmission of
                  Buddhist culture across Central Asia, leaving a lasting legacy
                  in art and philosophy.
                </p>
                <div class="d-flex justify-content-start">
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

          <!-- kartas section -->
          <div class="mx-2 mx-md-0 mx-lg-4 mx-lg-5 my-5">
            <div
              class="d-flex align-items-center mx-md-2 mx-lg-4 mx-xl-5 p-5 gap-5 faisalSec"
            >
              <div class="txt">
                <h2 class="org">Katas Raj Mandir</h2>
                <p>
                  Katas Raj Mandir, a historic Hindu temple complex in Pakistan,
                  is renowned for its sacred pools and intricate stone carvings,
                  dating back over a millennium. This architectural marvel,
                  nestled amidst the serene Chakwal district, holds deep
                  cultural and religious significance, attracting visitors with
                  its timeless beauty and spiritual ambiance.
                </p>
                <div class="d-flex justify-content-start">
                  <a href="./heritage_sub.html" id="faisal">
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
                <img class="w-100 shadowImg" src="{{asset('preet/images/kartas.jpg')}}" alt="" />
              </div>
            </div>
          </div>

          <!-- Nankana sahib -->
          <div class="mx-2 mx-md-0 mx-lg-4 mx-lg-5 my-5">
            <div
              class="d-flex align-items-center mx-md-2 mx-lg-4 mx-xl-5 p-5 gap-5 minarSec"
            >
              <div
                class="img d-flex justify-content-center justify-content-lg-end py-5"
              >
                <img
                  class="w-100 shadowImg"
                  src="{{asset('preet/images/Nankana-Sahib.jpg')}}"
                  alt=""
                 style="height:60%;"
                />
              </div>

              <div class="txt">
                <h2 class="org">Nankana Sahib</h2>
                <p>
                  Nankana Sahib, located in Punjab, Pakistan, is the birthplace
                  of Guru Nanak Dev Ji, the founder of Sikhism, making it a
                  revered pilgrimage site for Sikhs worldwide. The city is home
                  to the Gurdwara Janam Asthan, a prominent Sikh gurdwara built
                  at the site of Guru Nanak's birth.
                </p>
                <div class="d-flex justify-content-start">
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
        </div>
      </div>
    </div>

    <!-- footer -->
    @include('preet.footer')
