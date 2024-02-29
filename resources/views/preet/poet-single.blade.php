@include('preet.header')
  <body class="d-flex poetrybody flex-column min-vh-100">
    <!-- navbar -->
  @include('preet.navbar')

    <div class="cont firstSec my-5" style="margin-top:100px;">
      <!-- hero section -->
      <div class="hero bg-image">
        <div class="poetImg d-flex align-items-center gap-2 text-white">
          <img src="{{asset('storage/'.$poet->poet_image)}}" alt="" />
          <div class="d-flex flex-column">
            <h2>{{$poet->real_name}}</h2>
            <p>1722 – 1798 | Punjab, Pakistan</p>
          </div>
        </div>
      </div>

      <!-- profile section -->
      <div class="p-5 d-flex w-100 flex-column flex-md-row align-items-center">
        <div class="profile px-3 py-2 w-100 w-lg-50">
          <h2 class="mb-4">PROFILE OF {{$poet->real_name}}</h2>
          <div class="d-flex gap-4 my-2">
            <span>Name:</span><b class="px-0">'{{$poet->real_name}}'</b>
          </div>
          <div class="d-flex gap-4 my-2">
            <span>Born:</span><b class="px-3">{{$poet->birth_place}}</b>
          </div>
          <div class="d-flex gap-4 my-2">
            <span>Died:</span
            ><b class="px-3">{{$poet->death_date}} | {{$poet->birth_place}}</b>
          </div>
        </div>

        <div class="w-100 w-lg-50 map">
          <div class="mapborder">
           {!!$poet->google_map!!}
          </div>
        </div>
      </div>

      <!-- background section -->
      <div class="p-5 d-flex flex-column flex-md-row align-items-center">
        <div class="rel px-lg-3 w-100 w-lg-50">
          <div class="absPic">
            <img src="{{asset('storage/'.$poet->cover_image)}}" alt="" />
          </div>
        </div>
        <div class="px-2 px-lg-5 w-100 w-lg-50 my-5">
          <h3 class="back">Background</h3>
          <h1>About {{$poet->real_name}}</h1>
          <p>
            {!!$poet->bio!!}
          </p>
        </div>
      </div>

      <!-- gazal section -->
      
    </div>

    <!-- footer -->
    @include('preet.footer')
