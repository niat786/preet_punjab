@include('preet.header')
  <body class="d-flex poetrybody flex-column min-vh-100">
    <!-- navbar -->
  @include('preet.navbar')

    <div class="cont firstSec my-5">
      <!-- hero section -->
      <div class="hero bg-image">
        <div class="poetImg d-flex align-items-center gap-2 text-white">
          <img src="images/poet.png" alt="" />
          <div class="d-flex flex-column">
            <h2>SAYYAD WARIS SHAH</h2>
            <p>1722 – 1798 | Punjab, Pakistan</p>
          </div>
        </div>
      </div>

      <!-- profile section -->
      <div class="p-5 d-flex w-100 flex-column flex-md-row align-items-center">
        <div class="profile px-3 py-2 w-100 w-lg-50">
          <h2 class="mb-4">PROFILE OF WARIS SHAH</h2>
          <div class="d-flex gap-4 my-2">
            <span>Name:</span><b class="px-0">'Waris Shah'</b>
          </div>
          <div class="d-flex gap-4 my-2">
            <span>Born:</span><b class="px-3">Agra,Uttar pradesh</b>
          </div>
          <div class="d-flex gap-4 my-2">
            <span>Died:</span
            ><b class="px-3">21 Sep 1810 | Lucknow, Uttar pradesh</b>
          </div>
        </div>

        <div class="w-100 w-lg-50 map">
          <div class="mapborder">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d27122.867052799003!2d73.920933!3d31.815232!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3918c68a48a4f5fd%3A0xb4784a72a7875972!2sHazrat%20Peer%20Syed%20Waris%20Shah!5e0!3m2!1sen!2sus!4v1708178805654!5m2!1sen!2sus"
              height="300"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>
      </div>

      <!-- background section -->
      <div class="p-5 d-flex flex-column flex-md-row align-items-center">
        <div class="rel px-lg-3 w-100 w-lg-50">
          <div class="absPic">
            <img src="images/tomb waris sahh.jpg" alt="" />
          </div>
        </div>
        <div class="px-2 px-lg-5 w-100 w-lg-50 my-5">
          <h3 class="back">Background</h3>
          <h1>About Sayyad Waris Shah</h1>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing. veniam
            perferendis excepturi vero optio vel ipsam recusandae facilis
            mollitia dolores, modi accusamus neque dolor incidunt Id maiores
            similique, velit soluta, eligendi, explicabo incidunt facilis
            mollitia dolores, modi accusamus neque dolor incidunt Id maiores
            similique, velit soluta, eligendi, explicabo incidunt maiores
            similique, velit soluta, eligendi, explicabo incidunt recusandae
            possimus aliquid.
          </p>
        </div>
      </div>

      <!-- gazal section -->
      <div id="gazalDiv"></div>
      <div class="p-5 d-flex justify-content-center">
        <button
          id="seeAllGazal"
          class="btn text-white"
          style="background-color: #f27420"
        >
          See All
        </button>
        <button
          id="seeLessGazal"
          class="btn text-white"
          style="background-color: #f27420"
        >
          See Less
        </button>
      </div>
    </div>

    <!-- footer -->
    @include('preet.footer')
