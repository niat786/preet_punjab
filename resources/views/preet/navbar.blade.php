<div class="navDiv d-flex flex-column   py-2">
      <div class="firstNav d-flex justify-content-between justify-content-sm-between">
        <div class="dropdown d-flex align-items-center" >
          
         
          <div id="myDropdown" class="dropdown-content" >
              <!-- Google Translate Element -->
              <div id="google_translate_element"></div>
          </div>
      </div>
      
        <h1 class="navHead"><a href="index.html" class="text-decoration-none text-black"><img src="{{asset('preet/images/logo.png')}}" alt="" width="50%" /></a> </h1>
        <div
          class="searchSignUp d-flex justify-content-center align-items-center  gap-sm-4 gap-lg-2"
        >  <input type="text" class="rounded searchBar d-none d-lg-block">
          <div
            class="rounded px-2 py-2 d-none d-lg-block text-white d-flex align-items-center justify-content-center"
            style="background-color: #f27420;cursor: pointer;"
          > 
          
            <img src="{{asset('preet/images/search.png')}}" alt="" width="20" />
          </div>
          <div
            class="line d-none d-lg-block"
            style="
              width: 2px;
              height: 40px;
              background-color: rgba(0, 0, 0, 0.452);
            "
          ></div>
          <button class="btn text-white d-none d-md-block" style="background-color: #f27420">
           <a href="{{url('sign-up')}}"> Sign Up</a>
          </button>
          <div id="navBtn">
            <div></div>
            <div></div>
            <div></div>
          </div>
        </div>
      </div>

      <div id="navPages" class="navPages justify-content-between py-3">
        <div class="d-flex justify-content-center gap-1">
          <input type="text" class="rounded searchBar d-block d-lg-none">
          <div
            class="rounded px-2 py-2 d-block d-lg-none text-white d-flex align-items-center justify-content-center"
            style="background-color: #f27420;cursor: pointer;"
          > 
          
            <img src="{{asset('preet/images/search.png')}}" alt="" width="20" />
          </div>
        </div>
        <div class="fw-medium">
          <a id="home" class="text-decoration-none active" href="/"
            >Home</a
          >
        </div>
      
        <div class="fw-medium">
          <a id="poet" class="text-decoration-none" href="{{url('poet')}}">Poet</a>
        </div>
        <div class="fw-medium">
          <a id="poetry" class="text-decoration-none" href="{{url('poetry')}}"
            >Poetry</a
          >
        </div>
        <div class="fw-medium">
          <a id="kalam" class="text-decoration-none" href="{{url('kalam')}}"
            >Sufiyana Kalam</a
          >
        </div>
        <div class="fw-medium">
          <a id="culture" class="text-decoration-none" href="{{url('punjabi-culture')}}"
            >Punjabi Culture</a
          >
        </div>
        <div class="fw-medium">
          <a id="heritage" class="text-decoration-none" href="{{url('heritage-sites')}}"
            >Punjab Heritage</a
          >
        </div>
        <div href="index.html" class="fw-medium">
          <a id="conatct" class="text-decoration-none" href="{{url('contact')}}"
            >Contact Us</a
          >
        </div>
        <div class="fw-medium">
          <a id="about" class="text-decoration-none" href="{{url('about')}}"
            >About Us</a
          >
        </div>
        <a href="{{url('register')}}" class="btn text-white d-block d-md-none" style="background-color: #f27420">
          Sign Up
      </a>
      </div>
    </div>