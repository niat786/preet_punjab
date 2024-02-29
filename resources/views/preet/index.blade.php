@include('preet.header')
  <body >
    <!-- navbar -->
  @include('preet.navbar')

   <div class="firstSec">
     <!-- slider -->
     <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="{{asset('preet/images/slider1.svg')}}"
            class="d-block w-100"
            alt="..."
            style="object-fit: cover; height: 80vh"
          />
          <div
            class="carousel-caption d-md-block text-center"
            style="top: 8rem; bottom: unset !important"
            ;
          >
            <h1 class="slider_head">
              Welcome to <span style="color: #f27420">PreetPunjab</span>
            </h1>
            <h4 class="d-none d-md-block">
              All About Preet Punjab And Its Culture
            </h4>
            <div class="d-flex justify-content-center d-none d-md-flex">
              <p class="w-50">
                Lorem ipsum dolor, sit amet consectetur adipisicing.veniam
                perferendis excepturi vero optio vel ipsam recusandae
              </p>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <img
            src="{{asset('preet/images/slider1.svg')}}"
            class="d-block w-100"
            alt="..."
            style="object-fit: cover; height: 80vh"
          />
          <div
            class="carousel-caption d-md-block text-center"
            style="top: 8rem; bottom: unset !important"
            ;
          >
            <h1 class="slider_head">
              Welcome to <span style="color: #f27420">PreetPunjab</span>
            </h1>
            <h4 class="d-none d-md-block">
              All About Preet Punjab And Its Culture
            </h4>
            <div class="d-flex justify-content-center d-none d-md-flex">
              <p class="w-50">
                Lorem ipsum dolor, sit amet consectetur adipisicing.veniam
                perferendis excepturi vero optio vel ipsam recusandae
              </p>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <img
            src="{{asset('preet/images/slider1.svg')}}"
            class="d-block w-100"
            alt="..."
            style="object-fit: cover; height: 80vh"
          />
          <div
            class="carousel-caption d-md-block text-center"
            style="top: 8rem; bottom: unset !important"
            ;
          >
            <h1 class="slider_head">
              Welcome to <span style="color: #f27420">PreetPunjab</span>
            </h1>
            <h4 class="d-none d-md-block">
              All About Preet Punjab And Its Culture
            </h4>
            <div class="d-flex justify-content-center d-none d-md-flex">
              <p class="w-50">
                Lorem ipsum dolor, sit amet consectetur adipisicing.veniam
                perferendis excepturi vero optio vel ipsam recusandae
              </p>
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

    <!-- slider bottom boxes -->
    <div
      class="px-5 d-flex justify-content-center align-items-center gap-4 flex-column flex-md-row"
    >
      <div
        class="boxDiv rounded p-3 d-flex justify-content-center gap-3 align-items-center"
      >
        <div class="rounded py-2 px-3" style="background-color: #f1843c62">
          <img src="{{asset('preet/images/Vector.svg')}}" alt="" />
        </div>
        <div>
          <h3>Poets</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>

      <div
        class="boxDiv rounded p-3 d-flex justify-content-center gap-3 align-items-center"
      >
        <div class="rounded py-2 px-3" style="background-color: #f1843c62">
          <img src="{{asset('preet/images/Vector.svg')}}" alt="" />
        </div>
        <div>
          <h3>Poets</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>

      <div
        class="boxDiv rounded p-3 d-flex justify-content-center gap-3 align-items-center"
      >
        <div class="rounded py-2 px-3" style="background-color: #f1843c62">
          <img src="{{asset('preet/images/Vector.svg')}}" alt="" />
        </div>
        <div>
          <h3>Poets</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
    </div>

   <div class="cont">
     <!-- about us -->
    
     <div
     class="p-5 d-flex justify-content-center align-items-center flex-column flex-md-row w-100"
   >
     <div class="w-100 w-md-50 p-0 p-sm-5">
       <h2 class="aboutHead">
         See more <br />
         About Us
       </h2>
       <div class="aboutBox"></div>
       <p>
         Punjab is a state in northwest region of India and is one of the most
         prosperous states. The name Punjab is made of two words Punj (Five) +
         Aab (Water) i.e. land of five rivers. These five rivers of Punjab are
         Sutlej, Beas, Ravi, Chenab, and Jhelum. Only Sutlej, Ravi and Beas
         rivers flow in today's Punjab.
       </p>

       <div class="socialIcons d-flex align-items-center justify-content-center p-2 rounded gap-4">
         <i class="fa-brands fa-twitter"></i>
         <i class="fa-brands fa-square-facebook"></i>
         <i class="fa-brands fa-square-instagram"></i>
         
       </div>
     </div>
     <div class="w-100 w-md-50 d-flex justify-content-center">
       <div class="aboutImg">
         <img src="{{asset('preet/images/taj.svg')}}" alt="" />
       </div>
     </div>
     </div>

   <!-- famous poet -->
   
   <div class="px-4 px-md-5">
     <h2 class="m-3 px-4 px-md-2 px-lg-3">Famous Poet</h2>
   </div>
   <div class="d-flex  gap-4 px-5 flex-wrap poetDiv">
     
     <div class="d-flex flex-column famousPoet ">
       <div>
         <img class="poetImg" src="{{asset('preet/images/download__4_-removebg-preview 1.png')}}" alt="">
       </div>
       <div class="poetDesc d-flex justify-content-between px-3  align-items-center">
         <div><p><h5>Waris Shah</h5> 1722-1798</p></div>
         <div class="linkBox "><img src="{{asset('preet/images/Vector (2).png')}}" alt=""></div>
       </div>
     </div>

     <div class="d-flex flex-column famousPoet">
       <div>
         <img class="poetImg" src="{{asset('preet/images/download__4_-removebg-preview 1.png')}}" alt="">
       </div>
       <div class="poetDesc d-flex justify-content-between px-3  align-items-center">
         <div><p><h5>Waris Shah</h5> 1722-1798</p></div>
         <div class="linkBox "><img src="{{asset('preet/images/Vector (2).png')}}" alt=""></div>
       </div>
     </div>

     <div class="d-flex flex-column famousPoet">
       <div>
         <img class="poetImg" src="{{asset('preet/images/download__4_-removebg-preview 1.png')}}" alt="">
       </div>
       <div class="poetDesc d-flex justify-content-between px-3  align-items-center">
         <div><p><h5>Waris Shah</h5> 1722-1798</p></div>
         <div class="linkBox "><img src="{{asset('preet/images/Vector (2).png')}}" alt=""></div>
       </div>
     </div>

     <div class="d-flex flex-column famousPoet">
       <div>
         <img class="poetImg" src="{{asset('preet/images/download__4_-removebg-preview 1.png')}}" alt="">
       </div>
       <div class="poetDesc d-flex justify-content-between px-3  align-items-center">
         <div><p><h5>Waris Shah</h5> 1722-1798</p></div>
         <div class="linkBox "><img src="{{asset('preet/images/Vector (2).png')}}" alt=""></div>
       </div>
     </div>
   </div>
 

   <!-- popular poetry -->
    <div class="popularPoetry d-flex  justify-content-between p-5 flex-wrap ">
     <div class="popTxt px-0 px-sm-5">
       <h2>Popular Poetry</h2>
       <p>---==, and ghazals penned by renowned poets.
          Uncover the celebrated literary figures of Pakistan and India who crafted exceptional </p>
     </div>

     <div class="popSlider  d-flex gap-3">
       <div class="popSliderFirst">
         <h5 id="sliderTxtHeadFirst" class="text-center">Na Kar Bandya Meri Meri</h5>
         <p id="sliderDescHeadFirst" class="d-flex justify-content-center ">
         Na kar bandya meri meri <br>
             Na teri na meri<br>
            Char dina da mela<br>
         Dunya pher matti de dheri</p>
         <div class="d-flex justify-content-end"><span id="firstWriter" >-Bulleh Shah</span></div>
          
       </div>
       <div class="popSliderSecond">
       
           <h5 id="sliderTxtHeadSecond" class="text-center">Lorem ipsum </h5>
           <p id="sliderDescHeadSecond" class="d-flex justify-content-center">
             lorem ipsum <br>
             lorem ipsum <br>
             lorum imspsum</p>
           <div class="d-flex justify-content-end"><span id="secondWriter" >-Bulleh Shah</span></div>
            
         
       </div>
       
     </div>
     <div class="popBtns w-100 d-flex justify-content-center gap-4">
       <div id="popPrev"><</div>
       <div id="popNext">></div>
     </div>

    </div>

    <!-- sufyana kalam section -->

    <div class="d-flex p-5 align-items-center justify-content-center flex-column flex-lg-row  ">
     <div  class="w-100  w-md-50 p-0 px-sm-5"><h2>Sufiyana Kalam</h2>
     <p>Sufi Kalam refers to Sufi devotional poetry, which is usually sung in Sufi Samaa' gatherings. It is a way to convey obstruse mystical meanings in simple words. Kalam include
        genres like Qawwali, Kaafi, Khayal, Taraana, etc. which are very popular among the masses.</p>
     </div>

     <div class="d-flex justify-content-center justify-content-md-end  w-100 w-md-50 ">
       <img src="{{asset('preet/images/dc2fdc14bf882cdb8f88bfea289a6ba7-removebg-preview (1) 1.png')}}" alt="">
     </div>

     
    </div>
    <div class="d-flex p-0 p-sm-5 mx-2 mx-sm-3 gap-4   poetPic " >

     
     
       <div class="con ">
         <img src="{{asset('preet/images/nusret fateh ali khan.png')}}" alt="Avatar" class="image">
         <div class="overlay">
           <div class="text"><b>
             Nusrat Fateh ALI khan
           </b>
           <p>1948-1997</p>
         </div>
         </div>
       </div>

       <div class="con ">
         <img src="{{asset('preet/images/nusret fateh ali khan.png')}}" alt="Avatar" class="image">
         <div class="overlay">
           <div class="text"><b>
             Nusrat Fateh ALI khan
           </b>
           <p>1948-1997</p>
         </div>
         </div>
       </div>

       <div class="con ">
         <img src="{{asset('preet/images/nusret fateh ali khan.png')}}" alt="Avatar" class="image">
         <div class="overlay">
           <div class="text"><b>
             Nusrat Fateh ALI khan
           </b>
           <p>1948-1997</p>
         </div>
         </div>
       </div>

       <div class="con ">
         <img src="{{asset('preet/images/nusret fateh ali khan.png')}}" alt="Avatar" class="image">
         <div class="overlay">
           <div class="text"><b>
             Nusrat Fateh ALI khan
           </b>
           <p>1948-1997</p>
         </div>
         </div>
       </div>

       <div class="con ">
         <img src="{{asset('preet/images/nusret fateh ali khan.png')}}" alt="Avatar" class="image">
         <div class="overlay">
           <div class="text"><b>
             Nusrat Fateh ALI khan
           </b>
           <p>1948-1997</p>
         </div>
         </div>
       </div>
     
      
   
   </div>
<!-- punjab heritage -->
<div class="d-flex  m-sm-5 py-5 flex-column  flex-xl-row  align-items-center heritage">
 <div class= "w-100   w-xl-50 px-3 px-5 ">
   <h2>Punjab Heritage</h2>
   <p>Punjab's many festivals–Teej, Lohri, Basant, and Baisakhi, to name some–are celebrations that mirror the farming ethos. Indeed, Bhangra, the traditional dance of Punjab revolves around, and replicates a farmer's daily life. Historically, Punjab has played host to a number of ethnicities, including 
     the Aryans, Persians, Greeks, Afghans and Mongols, thus bestowed with a rich tangible heritage.</p>
     <a href="punjabheritage.html"><button class="filterBtnActive border-0 rounded px-5 py-2">View All</button></a>
 </div>
 <div class="d-flex gap-2 flex-column w-100 w-xl-50 justify-content-center align-items-center p-5  ">
   <div class="d-flex flex-column flex-sm-row ">
     <div  class="d-flex  flex-column flex-sm-row ">
       <img src="{{asset('preet/images/download (18) 2.png')}}" alt="" srcset=""  >
       <div class="centerImg py-2 py-sm-0"><img src="{{asset('preet/images/1-1520321533 1.png')}}" alt=""></div>
     </div>
     <div><img src="{{asset('preet/images/Khalsa_College-Monumentos_de_Amritsar-India16 1.png')}}" alt=""></div>

   </div>
   <div class="d-flex flex-column flex-sm-row gap-2 my-4 my-sm-0    secondImg ">
     <div >
       <img src="{{asset('preet/images/download (2) 4.png')}}" alt="" srcset=""  >
     </div>
   
       <div ><img src="{{asset('preet/images/download (7) 2.png')}}" alt=""></div>

     
   
   <div><img src="{{asset('preet/images/1024px-Panorama_of_Jallianwala_Bagh-IMG_6348_(cropped) 1.png')}}" alt=""></div>

   </div>
 </div>
</div>
   <!-- filter btns -->
   <div>
     <div class="d-flex gap-2 gap-md-5 justify-content-center my-5 " id="filterBtns">
       <button class="  filterBtn filterBtnActive " id="all">All</button>
       <button class="  filterBtn filterBtnNotActive" id="food">Food</button>
       <button class="  filterBtn filterBtnNotActive" id="dress">Dresses</button>
       <button class="  filterBtn filterBtnNotActive" id="art">Art</button>
       <button class="  filterBtn filterBtnNotActive" id="dance">Dance</button>
       
     </div>

     <div class="m-5 px-5  d-flex gap-2 flex-wrap justify-content-center">
       
       <div id="foodImg" class="allImg">
         <img src="{{asset('preet/images/Makki-di-Roti-and-Sarson-ka-Saag 1.png')}}" alt="">
       </div>

       <div id="artImg" class="allImg ">
          <div class="d-flex  flex-column gap-3">
           <img src="{{asset('preet/images/The-lifestyle-of-Punjab 1.png')}}" alt="">
           <img src="{{asset('preet/images/images (13) 1.png')}}" alt="">
          </div>

          
       </div>

       <div id="dressImg" class="allImg">
         <img src="{{asset('preet/images/culture-costume 1.png')}}" alt="">
       </div>

       <div id="danceImg" class="allImg">
         <img src="{{asset('preet/images/group-modern-bhangra-dancers-fun-600w-2282785947 1.png')}}" alt="">
       </div>

       <div class="allImg">
         <img src="{{asset('preet/images/images (12) 2.png')}}" alt="">
       </div>
     </div>

   </div>
    
   <!-- punjabi culture section -->
   <div class="d-flex w-100 p-0 p-sm-5 flex-column  flex-xl-row  align-items-center punjabi">
     <div class= "w-100   w-xl-50  px-4 px-5 ">
       <h2>Punjabi Culture</h2>
       <p>Unique, colourful and extravagant, these are the attributes of the heartland of India, Punjab. Popular and distinguished across the globe, the culture of Punjab is indeed overwhelming. The delicious Punjabi food appeases your taste buds 
         like never before. Colourful fancy clothes and Bhangra attract you like nothing else.</p>
         <a  href="punjabiculture.html"></a><button class="filterBtnActive border-0 rounded px-5 py-2">View All</button></a>
     </div>
     <div class="d-flex gap-2 w-100 w-xl-50 justify-content-center justify-content-lg-start p-5  flex-wrap flex-md-nowrap">
       <div class="d-flex flex-column  gap-2 justify-content-center  ">
         <div class="d-flex gap-2 justify-content-center  ">
           <img src="{{asset('preet/images/download (8) 1.png')}}" alt="" srcset="" width="140">
           <img src="{{asset('preet/images/220px-Punjabi_Traditional_Fashion_-_Cultural_Night_-_Wiki_Conference_India_-_CGC_-_Mohali_2016-08-05_7370 1.png')}}" alt="" width="140">
         </div>
         <img src="{{asset('preet/images/dance.png')}}" alt="">

       </div>
       <div class="d-flex flex-column gap-2">
         <img src="{{asset('preet/images/art.png')}}" alt="">
         <img src="{{asset('preet/images/culture.png')}}" alt="">
       </div>
     </div>
   </div>

  
   </div>
   </div>
   </div>

    

   
</div>
 <!-- footer -->
 @include('preet.footer')
