  @extends('layouts.main')
  @section('main-container')
  
  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/course-video.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="caption">
              <h6>Sabhyata</h6>
              <h2><em>Little</em> Stars</h2>
              <div class="main-button">
                  <div class="scroll-to-section"><a href="#section2">Discover more</a></div>
              </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->


  <section class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-12">
          <div class="features-post">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-pencil"></i>Location</h4>
              </div>
              <div class="content-hide">
                <p>Balaju, Bahini Marg -16 Kathmandu, Nepaltar</p>
                <div class="scroll-to-section"><a href="#section6">See Map</a></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post second-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-graduation-cap"></i>Excellent Faculty</h4>
              </div>
              <div class="content-hide">
                <p>Sabhyata Little Star brings out Outstanding Faculty with Excellent Learning Environment to you</p>
               <div class="scroll-to-section"><a href="#section3">Details</a></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post third-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-book"></i>Second Home</h4>
              </div>
              <div class="content-hide">
                <p>SLS is really going to make your kids feel at home. </p>
               
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section why-us" data-section="section2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Why choose Sabhyata Little Star?</h2>
          </div>
        </div>
        <div class="col-md-12">
          <div id='tabs'>
            <ul>
              <li><a href='#tabs-1'>History</a></li>
              <li><a href='#tabs-2'>Top Faculty and Management</a></li>
              <li><a href='#tabs-3'>Quality Meeting</a></li>
            </ul>
            <section class='tabs-content'>
              <article id='tabs-1'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/choose-us-image-01.png" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>History</h4>
                    <p>Sabhyata Little Star was established at XXXXX
                      Having excellent teaching faculties and wonderful learning environment makes us different from other. </p>
                  </div>
                </div>
              </article>
              <article id='tabs-2'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/choose-us-image-02.png" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Excellent Team</h4>
                    <p>With years of experiences, SLS has got the best teaching and Management Team in the business.</p> 
                    <p>Management is the key to make any organization run in the right path.</p>
                  </div>
                </div>
              </article>
              <article id='tabs-3'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/choose-us-image-03.png" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Quality Meeting</h4>
                    <p>Parents Teacher meeting is a must to track down the progress of any student.</p>
                    <p>SLS strongly encourges to such events and is happy to interact with the parents more often</p>
                  </div>
                </div>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>

 
  <section class="section courses" data-section="section3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Our Faculty and Management Team</h2>
          </div>
        </div>

       
        <div class="owl-carousel ">
          @foreach($faculties as $item)
          <div class="item">
           <img src="{{asset('uploads/faculty_image/'.$item->filepath)}}" alt="teacher"> 
            <div class="down-content">
              <h4>{{$item->name}}</h4>
              <h6 class="text-success">{{$item->rank}}</h6>
              <p>{{$item->desc}}</p>
            </div>
          </div>
          @endforeach
        </div>
     
      </div>
    </div>
  </section>
  {{-- <section class="section coming-soon" data-section="section4">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="continer ">
            <div>
             <div class="section-heading">
              <h4>Best Students of the Month " <em>Baisakh</em> "</h4>
             </div>
            </div>
          </div>
        </div>

        @foreach($birthday as $bday)
        <div class="col-md-4">
         
          <div class="right-content">
           
              <div class="continer">
                  <img src="{{asset('uploads/birthday_image/'.$bday->photo)}}" width="330px" height="410px" alt=""> 
                  <div class="col-md-12">
                    <h5 class="">{{$bday->name}}</h5>
                    <h5>{{$bday->age}}</h5>
                  </div>               
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
   --}}

  <section class="section video" data-section="section5">
       <div class="container">
           <div class="col-md-12 align-self-center">
              <div class="left-content">
                 <h4>Wonderful Memories of <em>Sabhyata Little Star</em></h4>
             </div>
          </div>
        </div>
       
        <div class="">
          <div class="container">
   
            <div class="row row-cols-6">
                @foreach ($gallery as $gal)
                <div class="col">  
              
                   <a href="#img_{{$gal->id}}"><img style="max-width:100%;"class="gallery-item"src="{{asset('uploads/gallery_image/'.$gal->imagefile)}}" ></a>
                      {{-- <li><a href="#img_2"><img src="assets/images/1.jpg"></a></li> --}}
                </div>
                <div>
                  <a href="#_{{$gal->id}}" class="lightbox trans" id="img_{{$gal->id}}"><img src="{{asset('uploads/gallery_image/'.$gal->imagefile)}}"></a>
                  {{-- <a href="#_2" class="lightbox trans" id="img_2"><img src="assets/images/1.jpg"></a> --}}
                </div>
                  @endforeach
                 
              </div>
            </div>
          </div>
   
  </section>

  <section class="section contact" data-section="section6">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Let’s Keep In Touch</h2>
          </div>
        </div>
        <div class="col-md-6">
        
        <!-- Do you need a working HTML contact-form script?
                	
                    Please visit https://templatemo.com/contact page -->
                    
          <form id="contact" action="" method="post" >
            <div class="row">
              <div class="col-md-6">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                  </fieldset>
                </div>
                <div class="col-md-6">
                  <fieldset>
                    <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required="">
                  </fieldset>
                </div>
              <div class="col-md-12">
                <fieldset>
                  <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                </fieldset>
              </div>
              <div class="col-md-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="button">Send Message Now</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-6" id="section2">
          <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14126.083553662347!2d85.28548056473429!3d27.732075474504043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18c11dac7aed%3A0xe71ba78690a8b3fe!2sSamarpan%20Chowk!5e0!3m2!1sen!2snp!4v1651314401499!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

  @endsection