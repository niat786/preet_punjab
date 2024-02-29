@include('preet.header')
  <body >
    <!-- navbar -->
  @include('preet.navbar')

    <div class="count firstSec my-5">
      <!-- hero sectio -->
      <div
        class="d-flex m-4 m-lg-3 flex-column flex-lg-row align-items-center justify-content-center p-3 p-lg-2 p-lg-5 gap-5 left"
      >
        <div class="hero w-100 w-lg-50">
          <h2>Badshahi <span>Mosque</span></h2>
          <p>
            The Badshahi Mosque, located in Lahore, Pakistan, is a magnificent
            example of Mughal architecture, known for its grandeur and
            historical significance. Completed in 1673, it remains one of the
            largest mosques in the world, attracting visitors with its stunning
            beauty and rich cultural heritage.
          </p>
        </div>
        <div
          class="w-100 w-lg-50 d-flex justify-content-center justify-content-lg-end"
        >
          <img
            src="{{asset('preet/images/badshah1.jpg')}}"
            alt=""
            width="400"
            class="borderRadiusImg shadow animation animImg"
          />
          <!-- <div class="d-flex justify-content-md-end">
          <img
            src="{{asset('preet/images/badshah3.webp"
            alt=""
            width="350"
            class="borderRadiusImg shadowImg"
          />
        </div> -->
        </div>
      </div>

      <!-- about section -->
      <div class="mx-0 mx-lg-2 my-5 d-flex flex-column-reverse flex-lg-row p-5">
        <div class="w-100 w-lg-50 map d-flex justify-content-center ali">
          <div class="mapborder">
            <iframe
              src="{{asset('preet/https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3398.6755665441315!2d74.30686077469947!3d31.58794354380205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39191c9dbf0ddeb1%3A0x13bfcdb10fb490de!2sBadshahi%20Mosque!5e0!3m2!1sen!2s!4v1708428780075!5m2!1sen!2s"
              height="300"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>

        <div
          class="d-flex flex-column mx-md-2 mx-lg-0 mx-xl-5 gap-1 about w-100 w-lg-50"
        >
          <div>
            <h2>About</h2>
            <p id="heritageTxt">
              “If you have not visited Lahore, you have not yet been born.” So,
              the saying goes in Pakistan’s second largest city. Why such
              confident largess from the Lahoris, who variously refer to their
              city as the Paris of the East and the Cultural Capital of
              Pakistan? I spent a few days there to find out. The capital of the
              fertile Punjab (“five rivers”) region, Lahore has been fought over
              and ruled from by a number of great empires. Arguably, it reached
              its peak under the Mughal Empire, before the Sikh Empire was
              centred here and more recently the British Empire, before
              partition and Pakistan’s self rule since 1947. Each empire has
              left their mark on the city and, in architectural terms at least,
              the city is the richer for it. The city is also the most
              cosmopolitan in Pakistan, a liberal and creative hub where
              ‘Lollywood’ the Pakistani film scene, is based. Having crossed the
              border between India and Pakistan on foot at the Wagha Border,
              scene of the nightly flamboyant border closing ceremony, my first
              stop was Lahore Fort.
            </p>
          </div>
        </div>
      </div>
      <div
        class="px-5 mx-lg-0 my-5 d-flex flex-column align-items-center flex-sm-row justify-content-center gap-2 w-100"
      >
        <img class="aboutImg" src="{{asset('preet/images/badshah1.jpg')}}" alt="" height="500" />
        <img class="aboutImg" src="{{asset('preet/images/badshah2.jpg')}}" alt="" height="500" />
      </div>

      <div class="p-5">
        <!-- nearest hotels -->
        <h4>
          Nearby <span class="org">Accommodations</span> &
          <span class="org">Distance</span> from Allama Iqbal International
          Airport to the Iconic Badshahi Mosque
        </h4>

        <div>
          <p>
            The distance between the Badshahi Mosque in Lahore and the Allama
            Iqbal International Airport in Lahore, Pakistan, is approximately 17
            kilometers (10.5 miles) by road. The travel time between the two
            locations can vary depending on traffic conditions.
          </p>
        </div>

        <div class="d-flex">
          <div>
            <h6>Pearl Continental Lahore</h6>
            <h6>Hotel One Lahore</h6>
            <h6>Lahore Guest House</h6>
          </div>
        </div>
      </div>
    </div>

    <!-- footer -->
    <div class="footerBtm">
      <div>
        <a href="index.html">Preet Punjab.com</a>
      </div>

      <div class="ftrAbout">
        <div>About us</div>
        <div class="ftrLine"></div>
        <div>Advertising</div>
        <div class="ftrLine"></div>
        <div>Privacy Policy</div>
      </div>
    </div>

    <script src="{{asset('preet/./js/script.js"></script>

    <script
      src="{{asset('preet/https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
