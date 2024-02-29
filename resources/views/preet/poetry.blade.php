@include('preet.header')
  <body class="d-flex poetrybody flex-column min-vh-100">
  @include('preet.navbar')

    <!-- main section start-->
    <div class="cont firstSec my-5">
      <div class="container-fluid">
        <div class="container main-poetry-section">
          <div class="row">
            <div class="col-lg-7 p-0">
              <div class="poetry-image-section">
                <h1><strong>Poetry</strong></h1>
                <p>
                  <strong
                    >Poetry in Urdu serves as an exquisite means to convey
                    emotions to people. Explore a remarkable compilation of Urdu
                    poetry, shayari</strong
                  >
                </p>

                <div class="input-container clearfix">
                  <input
                    type="text"
                    class="input-field"
                    placeholder="Search..."
                  />
              
                </div>

                <h3 style="margin-top: 30px; margin-bottom: 30px">
                  <strong>Today</strong>
                </h3>
                @if($poetries)
                  @foreach ($poetries as $poetry)
                  <div class="Potd">
                    
                    <div class="potdtext">
                      <h3><strong>{{$poetry->title}}</strong></h3>
                      <h6>
                        {{$poetry->poetry}}
                        ---
                      </h6>
                    </div>
                    <hr class="potdfooterhr" />
                    <div class="potdfooter">
                      <div>
                        <h6>By {{$poetry->poet->name}}</h6>
                      </div>
                      <div class="h6a">
                        <h6><a href="">Read poetry ></a></h6>
                      </div>
                    </div>
                  </div>
                  @endforeach
                  {{$poetries->links()}}
                @endif
                <!-- //////////////////////////////////////////// -->
       
              </div>
            </div>

            <div class="col-lg-5 p-0 poetry-form-section">
              <div class="Potd1">
                <div class="hrpoet1">
                  <hr class="potdhr1" />
                  <p>Best Poets</p>
                </div>
                <div></div>
                @foreach ($poets as $poet)
                <div class="potdtext1">
                  <div class="potdimg">
                    <img src="{{ asset($poet->poet_image) }}" alt="" />
                  </div>
                  <div class="sidebartext">
                    <p class="sidebartextp"><strong><a href="{{ route('poet.show', ['slug' => $poet->slug]) }}">{{$poet->real_name}}</a></strong></p>
                    <p class="sidebartextp1">{{ \Carbon\Carbon::parse($poet->date_of_birth)->format('Y') }} -
                <!-- Extracting the year of death -->
                {{ \Carbon\Carbon::parse($poet->date_of_death)->format('Y') }}</p>
                  </div>
                </div>
                <hr class="potdfooterhr1" />
                @endforeach
              </div>
              <div class="poetry-section"></div>

              <!-- /////////////////////////////////////////////////////////////////////////////////////////////////// -->

             
            </div>

            <!-- /////////////////////////////////////////////////////////////////////////// -->
          </div>
        </div>

      
      </div>
    </div>

    <!-- footer -->
    @include('preet.footer')

