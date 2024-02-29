@include('preet.header')
<body class="d-flex poetrybody flex-column min-vh-100">
    <!-- navbar -->
  @include('preet.navbar')

    <div class="firstSec cont">
      <!-- main section start-->
      <div class="container-fluid">
        <div class="container main-contact-section">
          <div class="row">
            <div class="col-lg-6 p-0">
              <div class="contact-image-section">
                <div class="image-section-content"></div>
              </div>
            </div>
            <div class="col-lg-6 p-0 contact-form-section">
              <div class="contact-section">
                <h4>Contact us today!</h4>
                <p>
                  <strong
                    >Hello, we are always have to help you. Please fill out the
                    form.</strong
                  >
                </p>
                <!-- <form action=""></form> -->
                <form action="#" method="" class="contform">
                  <label for="name"><strong>Name</strong></label>
                  <div class="mb-4">
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      placeholder="Your Name"
                      value=""
                      required
                    />
                  </div>
                  <label for="email"><strong>Email</strong></label>
                  <div class="mb-4">
                    <input
                      type="email"
                      name="email"
                      class="form-control"
                      placeholder="Your Email"
                      required
                    />
                  </div>
                  <label for="phone"><strong>Phone Number</strong></label>
                  <div class="mb-4">
                    <input
                      type="contact"
                      name="phone"
                      class="form-control"
                      placeholder="Your Number"
                      value=""
                      required
                    />
                  </div>

                  <label for="message"><strong>Your Message</strong></label>
                  <div class="mb-4">
                    <textarea
                      type="text"
                      name="message"
                      class="form-control"
                      placeholder="Write your message"
                      required
                    ></textarea>
                  </div>
                  <div class="submitbtn">
                    <button type="submit" class="conbtn">Submit</button>
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

