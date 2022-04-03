@include('home.include.header')

<!-- Banner -->
<section class="banner">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-lg-6">
        <div class="banner-text" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-sine">
          <p class="sub">Professional Laundry Service</p>
          <h1>Laundry Made simple</h1>
          <p class="desc" style="font-size: 30px;">Laundry services and Bed linen subscription services all in one place</p>
          <div class="btn-group-banner text-right">
            <a href="{{url('/login')}}" class="btn btn-primary btn-lg"><i data-feather="calendar"></i>Order Now</a>
            <!-- <a href="#" class="btn btn-outline-light btn-lg">Discover More<i class="ml-2 mr-0" data-feather="arrow-right"></i></a> -->
          </div>
        </div>
      </div>
    </div>
    <div class="card" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-sine">
      <div class="row no-gutters">
        <div class="col-md-8">
          <div class="card-body pt-4">
            <h4 class="card-title mb-3">Order Pickup</h4>
            <form>
              <div class="row no-gutters">
                <div class="col-md-6">
                  <input type="email" class="form-control" placeholder="Email">
                </div>
                <div class="col-md-6">
                  <input type="Password" class="form-control" placeholder="Password">
                </div>
                <div class="col-md-6">
                  <input type="date" class="form-control" placeholder="Pickup Date">
                </div>
<!--                 <div class="col-md-4">
                  <input type="time" class="form-control" placeholder="Time">
                </div> -->
                <div class="col-md-6">
                  <button class="btn btn-primary btn-lg btn-block">Select Item!<i data-feather="truck"></i></button>
                </div>
              </div>
            </form>

          </div>
        </div>
        <div class="col-md-4">
          <div class="promo">
            <div class="card-body pt-4">
              <h4 class="card-title mb-3">Special Offer</h4>
              <div class="card-text">
                <p>We care about your health, Discount up to 50% during covid 19.</p>
              </div>
              <div class="ribbon">
                <div class="ribbon-inner">Special Offer</div>
              </div>
              <a href="#" class="btn btn-outline-light">Claim promo</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- Banner -->
<!-- About -->
<section class="about-company">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="position-relative" data-aos="fade-right" data-aos-duration="1000">
          <img src="{{url('public/assets/web/img/women-selecting-clothes-1536x1024.jpg')}}" alt="about_company" class="img-fluid">
          <<!-- div class="count-container" data-aos="fade-down" data-aos-anchor-placement="top-center" data-aos-offset="-200"><span class="count">15</span>+
            <p>Years Experienced</p>
          </div> -->
        </div>
      </div>
      <div class="col-md-5 ml-auto" data-aos="fade-left" id="about_us">
        <div class="section-title mt-5">
          <p>About Us</p>
          <h1>Your comfort is our priority</h1>
        </div>
        <p class='desc'>Hi! Yes it is pronounced “freche”, a growing company of Freshness. We Aspire to take over your household chores delivering nothing but top quality Linen and laundry services to our customers.</p><br>

        <p class='desc'>At Fraîchee we believe that laundry services are a necessity which should be affordable and reliable to all, which is why we aim at maintaining top quality services at optimised prices. Fraîchee is here to serve everyone that is within our reach with passion and drive.<b>Your comfort is our priority</b></p>

<!--         <div class="alert alert-secondary d-flex align-items-center mt-5">
          <i data-feather="loader"></i>
          <div class="alert-inner ml-2">
            <h5>The Idea</h5>
            <p>Eget nullam augue accumsan ridiculus sit ac ornare sociosqu molestie nibh massa lorem</p>
          </div>

        </div> -->
      </div>
    </div>
  </div>
</section><!-- About -->
<!-- Our-Promise -->
<section class="our-promise ">
  <div class="bg-img">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 p-4" data-aos="fade-right">
          <div class="section-title mt-5">
            <!-- <h2 class="text-white">We are fraichee</h2><br> -->
            <div class="section-title mt-5 text-white">
          <!-- <p>About Us</p> -->
          <h1>We are fraichee</h1>
        </div>
<!--             <h1 class="text-white">24 hours to a day, clean clothes follow the same time schedule.</h1>
            <span class="text-white d-block">Montes dictum faucibus rutrum morbi sagittis blandit iaculis posuere neque nunc ac tortor</span>
            <button type="button" class="btn btn-primary btn-lg mt-4">Discover More</button> -->

          <ul class="text-white">
            
            <li><i class="icofont-check-circled text-dark"></i>We don’t reinvent Laundry</li><br>
            
            <li><i class="icofont-check-circled text-dark"></i>We simply pick up your Laundry</li><br>
            
            <li><i class="icofont-check-circled text-dark"></i>We clean it  to your needs.</li><br>
            
            <li><i class="icofont-check-circled text-dark"></i>We deliver it back in 24 hours</li><br>
            
            <li><i class="icofont-check-circled text-dark"></i>We make Laundry  simple</li>
        </ul>

          </div>
        </div>
        <div class="col-lg-6 col-md-6" data-aos="fade-left">
          <img src="https://show.moxcreative.com/cleanox/wp-content/uploads/sites/11/2021/11/self-service-laundry-scaled.jpg" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </div>
</section><!-- Our-Promise -->
<section class="about">
  <div class="service">
    <div class="container">
      <div class="row content">
        <div class="col-md-6">
          <div class="section-title">
            <p>About Service</p>
            <h1>Clean, fast, and free pickup.</h1>
          </div>
        </div>
        <div class="col-md-6">
          <div class="title">
            <p>Vestibulum pede vivamus natoque egestas risus integer mi euismod sodales amet.
              Conubia natoque dis rutrum cras ultricies facilisi sodales justo molestie scelerisque ligula.</p>
            <button type="button" class="btn btn-primary btn-lg mt-4">Discover service</button>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row mt-3">
        <div class="col-md-4">
          <div class="card machine" data-aos="fade-right">
            <div class="icon">
              <img width="64" height="64" src="<?=url('public/assets/web/img/washing-machine-02-1.png')?>" alt="">
            </div>

            <div class="title mt-3">
              <h5>Washing</h5>
              <p>
                Venenatis tempor morbi class taciti porttitor habitant aliquam hendrerit auctor a ultrices justo</p>
              <button type="button" class="btn btn-primary learn-btn">Learn more</button>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card machine" data-aos="fade-down">
            <div class="icon">
              <img width="64" height="64" src="<?=url('public/assets/web/img/shirts-1.png')?>" alt="">
            </div>

            <div class="title mt-3">
              <h5>Folding</h5>
              <p> Venenatis tempor morbi class taciti porttitor habitant aliquam hendrerit auctor a ultrices justo</p>
              <button type="button" class="btn btn-primary learn-btn">Learn more</button>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card machine" data-aos="fade-left">
            <div class="icon">
              <img width="64" height="64" src="<?=url('public/assets/web/img/iron-1.png')?>" alt="">
            </div>

            <div class="title mt-3">
              <h5>Ironing Clothes</h5>
              <p>Venenatis tempor morbi class taciti porttitor habitant aliquam hendrerit auctor a ultrices justo</p>
              <button type="button" class="btn btn-primary learn-btn">Learn more</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-4">
          <div class="card machine" data-aos="fade-right">
            <div class="icon">
              <img width="64" height="64" src="<?=url('public/assets/web/img/hanger-1.png')?>" alt="">
            </div>

            <div class="title mt-3">
              <h5>Dry Cleaning</h5>
              <p>
                Venenatis tempor morbi class taciti porttitor habitant aliquam hendrerit auctor a ultrices justo</p>
              <button type="button" class="btn btn-primary learn-btn">Learn more</button>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card machine" data-aos="fade-up">
            <div class="icon">
              <img width="64" height="64" src="<?=url('public/assets/web/img/insert-coin-1.png')?>" alt="">
            </div>
            <div class="title mt-3">
              <h5>Instant Service</h5>
              <p> Venenatis tempor morbi class taciti porttitor habitant aliquam hendrerit auctor a ultrices justo</p>
              <button type="button" class="btn btn-primary learn-btn">Learn more</button>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card machine" data-aos="fade-left">
            <div class="icon">
              <img width="64" height="64" src="<?=url('public/assets/web/img/insert-coin-1.png')?>" alt="">
            </div>
            <div class="title mt-3">
              <h5>Self Service</h5>
              <p>Venenatis tempor morbi class taciti porttitor habitant aliquam hendrerit auctor a ultrices justo</p>
              <button type="button" class="btn btn-primary learn-btn">Learn more</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<!-- Section About-Service End -->
<!-- Section Discount Start -->
<section class="discount">
  <div class="promo">
    <div class="container">
      <div class="row">
        <div class="col-md-6" data-aos="fade-right">
          <div class="section-title mt-5">
            <h1 class="text-white">Discount up to 15% off on your first order</h1>
            <!-- <sapn class="d-block text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</sapn> -->
            <button type="button" class="btn btn-primary btn-lg mt-4"><i class="bi bi-ticket-fill mr-2"></i>Claim Promo</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section Discount End -->
<!-- Section why-chose-us Start -->

<section class="why-choose-us">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="section-title" data-aos="fade-right">
          <p>Why Choose Us</p>
          <h1>Your comfort is our Priority</h1>
        </div>
      </div>
      <div class="col-md-6 mt-5" data-aos="fade-left">
        <p class='desc' style="font-size: 20px;">We are devoted to make your day-to-day Laundry simple and hustle free, in additional to our laundry services we provide bed linen subscription services where we deliver fresh bed linen weekly or according to your needs with the aim of making your sleep comfortable and soft.  Our services are eco-friendly, can be custom to your needs, and support 24/7.</p>
        <!-- <button type="button" class="btn btn-primary ">Learn More</button> -->
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row pt-5">
      <div class="col-md-6 col-sm-12 col-lg-4">
        <div class="card" data-aos="fade-right">
          <div class="box-icon">
            <i class="bi bi-explicit"></i>
          </div>
          <div class="card-title mt-3">
            <h5>Use Eco Material</h5>
            <!-- <p>Venenatis tempor morbi class taciti porttitor habitant aliquam hendrerit auctor a
              ultrices justo</p> -->
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12 col-lg-4">
        <div class="card" data-aos="fade-up">
          <div class="box-icon">
            <i class="bi bi-send-check"></i>
          </div>
          <div class="card-title mt-3">
            <h5>Fast Service</h5>
            <!-- <p>Venenatis tempor morbi class taciti porttitor habitant aliquam hendrerit auctor a
              ultrices justo</p> -->
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12 col-lg-4">
        <div class="card" data-aos="fade-left">
          <div class="box-icon">
            <i class="bi bi-chat-square-dots"></i>
          </div>
          <div class="card-title mt-3">
            <h5>24/7 Support</h5>
            <!-- <p>Venenatis tempor morbi class taciti porttitor habitant aliquam hendrerit auctor a
              ultrices justo</p> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section why-chose-us End -->

<!-- Section laundary Start -->
<section class="laundary">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-6">
        <div class="section-title" data-aos="fade-right">
          <h1>Join our monthly <br>bed Linen subscription</h1>
        </div>
      </div>
      <div class="col-md-6" data-aos="fade-left">
        <p>Washing bulk items like bedsheets, duvet covers can be annoying and often expensive. Our bed linen subscription services provide an easy and cheap alternative. As a subscriber, we will deliver fresh bed linen weekly. You will be able to custom choose bed linen you require from a wide range of selection we provide, and you can choose when you want fresh bed linen to be delivered.</p>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 col-sm-12 col-lg-4 mt-2">
        <div class="card" data-aos="fade-right">
          <div class="title  justify-content-center d-flex">
            <div class="section-title">
              <h5>Double size bedset Linen</h5>
              <!-- <p>Basic Package</p> -->
              <div class="kg">
                <span class="dollor">$</span>
                <span class="price">9</span>
                <span class="dollor">99</span>
              </div>
              <div>
                <p>/10Kg</p>
              </div>
            </div>
          </div>

          <ul class="card-list">
            <li>2 bedsheets</li>
            <li>1 duvet cover</li>
            <li>2 pillow cases</li>
            <li>1 bath towel</li>
            <li>All white</li>
          </ul>
          <div class="card-button content justify-content-center d-flex">
            <a href="{{url('/login')}}" type="button" class="btn btn-primary btn-lg">Join Now</a>
          </div>
          <!-- <div class="leo justify-content-center d-flex">
            <span>*Venenatis leo augue eget pellentesque tortor mauris fusce iaculis</span>
          </div> -->
        </div>
      </div>
      <div class="col-md-6 col-sm-12 col-lg-4 mt-2">
        <div class="card" data-aos="fade-up">
          <div class="wraper">
            <div class="ribon-wraper">
              <div class="ribon-red">
                Best value
              </div>
            </div>
          </div>
          <div class="title  justify-content-center d-flex">
            <div class="section-title">
              <h5>King size bedset Linen</h5>
              <!-- <p>Pro Package Service</p> -->
              <div class="kg">
                <span class="dollor">$</span>
                <span class="price">12</span>
                <span class="dollor">99</span>
              </div>
              <div>
                <p>/10Kg</p>
              </div>
            </div>
          </div>
          <ul class="card-list">
            <li>2 bedsheets</li>
            <li>1 duvet cover</li>
            <li>4 pillow cases</li>
            <li>2 bath towel</li>
            <li>All white</li>
          </ul>
          <div class="card-button content justify-content-center d-flex">
            <a href="{{url('/login')}}" type="button" class="btn btn-primary btn-lg">Join Now</a>
          </div>
          <!-- <div class="leo justify-content-center d-flex">
            <span>*Venenatis leo augue eget pellentesque tortor mauris fusce iaculis</span>
          </div> -->
        </div>
      </div>
      <div class="col-md-6 col-sm-12 col-lg-4 mt-2">
        <div class="card" data-aos="fade-left">
          <div class="wraper">
            <div class="ribon-wraper">
              <div class="ribon-red">
                Best value
              </div>
            </div>
          </div>
          <div class="title  justify-content-center d-flex">
            <div class="section-title">
              <h5>Custom</h5>
              <!-- <p>Comercial Package</p> -->
              <div class="kg">
                <span class="dollor">$</span>
                <span class="price">14</span>
                <span class="dollor">99</span>
              </div>
              <div>
                <p>/10Kg</p>
              </div>
            </div>
          </div>
          <ul class="card-list">
            <li>choose bedsheets</li>
            <li>choose duvet covers</li>
            <li>choose pillow cases</li>
            <li>choose bath towels</li>
            <li>all white</li>
          </ul>
          <div class="card-button content justify-content-center d-flex">
            <a href="{{url('/login')}}" type="button" class="btn btn-primary btn-lg">Join Now</a>
          </div>
          <!-- <div class="leo justify-content-center d-flex">
            <span>*Venenatis leo augue eget pellentesque tortor mauris fusce iaculis</span>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Laundry-Services -->
<section class="laundry-services">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-5" data-aos="fade-right" data-aos-duration="1000">
        <div class="section-title mt-5">
          <h1 class="text-white">Drop Us a line for any enquiries</h1>
        </div>
        <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
        <ul class="nav">
          <li class="nav-item">
            <ul class="nav flex-column">
              <li class="nav-item">
                <i data-feather="check" class="mr-1"></i> Turpis imperdiet interdum
              </li>
              <li class="nav-item">
                <i data-feather="check" class="mr-1"></i> Vel fusce blandit massa eros
              </li>
              <li class="nav-item">
                <i data-feather="check" class="mr-1"></i> Vitae id curabitur
              </li>
              <li class="nav-item">
                <i data-feather="check" class="mr-1"></i> Semper sed viverra
              </li>
            </ul>
          </li>
          <li class="nav-item ml-md-auto">
            <ul class="nav flex-column">
              <li class="nav-item">
                <i data-feather="check" class="mr-1"></i> Turpis imperdiet interdum
              </li>
              <li class="nav-item">
                <i data-feather="check" class="mr-1"></i> Vel fusce blandit massa eros
              </li>
              <li class="nav-item">
                <i data-feather="check" class="mr-1"></i> Vitae id curabitur
              </li>
              <li class="nav-item">
                <i data-feather="check" class="mr-1"></i> Semper sed viverra
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="col-md-7" data-aos="fade-left" data-aos-duration="1000">
        <div class="card py-4">
          <div class="card-body pt-4">
            <form>
              <div class="row">
                <div class="col-md-4">
                  <label>Name</label>
                  <input type="text" class="form-control" placeholder="Name">
                </div>
                <div class="col-md-4">
                  <label>Email</label>
                  <input type="email" class="form-control" placeholder="Email">
                </div>
                <div class="col-md-4">
                  <label>Phone</label>
                  <input type="text" class="form-control" placeholder="Phone">
                </div>
<!--                 <div class="col-md-3">
                  <label>Date</label>
                  <input type="date" class="form-control" placeholder="Date">
                </div>
                <div class="col-md-3">
                  <label>Time Pickup</label>
                  <input type="time" class="form-control" placeholder="Time">
                </div> -->
                <div class="col-md-12">
                  <label>Message</label>
                  <textarea name="" id="" class="form-control" placeholder="Message" cols="30" rows="5"></textarea>
                </div>
                <div class="col-md-12">
                  <button class="btn btn-primary btn-lg btn-block">Contact us<i data-feather="send"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- Laundry-Services -->
<!-- Testimonial -->
<section class="testimonial">
  <div class="container-fluid">
    <div class="section-title mt-5 text-center">
      <!-- <p>About Company</p> -->
      <h1>FREQUENTLY ASKED QUESTIONS</h1>
      <!-- <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> -->
    </div>



        <!-- my faq -->
        <div class="row faq-item d-flex align-items-stretch bg-white" data-aos="fade-up" data-aos-delay="100" style="border-bottom:none;">
          <div class="col-md-12 px-0 p-5 m-5">
            <!-- panel group start -->
            <div class="panel-group" id="faqAccordion">
              <div class="panel panel-info">
                  <div class="panel-heading" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question0">
                    <i class="ri-question-line"></i>
                    <h5>What services are offered by Fraichee?</h5>
                  </div>
                  <div id="question0" class="panel-collapse collapse" style="height: 0px;">
                      <div class="panel-body">
                          <h5><span class="label label-primary">Answer</span></h5>

                          <p>
                            <ul class="list-group">
                              <li class="list-group-item">We offer Laundry services, Linen subscription services and Linen hire services. All our services can be simply accessed through our website or by contacting us. 
 </li>
                            </ul>
                          </p>
                      </div>
                  </div>
              </div>
            </div>
            <!-- panel group ends here -->

            <!-- panel group start -->
            <div class="panel-group" id="faqAccordion">
              <div class="panel panel-info">
                  <div class="panel-heading" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question1">
                    <i class="ri-question-line"></i>
                    <h5>What areas do you operate in?</h5>
                  </div>
                  <div id="question1" class="panel-collapse collapse" style="height: 0px;">
                      <div class="panel-body">
                          <h5><span class="label label-primary">Answer</span></h5>

                          <p class="bg-white p-4">
                            London, we currently operate in London only but we will be expanding quickly, if we are not in your area yet, simple leave your email address and we will let you know once we have arrived. 
                          </p>
                      </div>
                  </div>
              </div>
            </div>
            <!-- panel group ends here -->

            <!-- panel group start -->
            <div class="panel-group" id="faqAccordion">
              <div class="panel panel-info">
                  <div class="panel-heading" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question2">
                    <i class="ri-question-line"></i>
                    <h5>What types of clothes do you clean?</h5>
                  </div>
                  <div id="question2" class="panel-collapse collapse" style="height: 0px;">
                      <div class="panel-body">
                          <h5><span class="label label-primary">Answer</span></h5>

                          <p>
                            We clean all types of clothes.  Our staff are trained in dealing with any type of clothes/ materials, any cloth that is handed over to us, we guarantee it is in safe hands.
                          </p>
                      </div>
                  </div>
              </div>
            </div>
            <!-- panel group ends here -->

            <!-- panel group start -->
            <div class="panel-group" id="faqAccordion">
              <div class="panel panel-info">
                  <div class="panel-heading" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question3">
                    <i class="ri-question-line"></i>
                    <h5>What is the Delivery time?</h5>
                  </div>
                  <div id="question3" class="panel-collapse collapse" style="height: 0px;">
                      <div class="panel-body">
                          <h5><span class="label label-primary">Answer</span></h5>

                          <p>
                            We aim to make all our deliveries within 24 hours. Counting from when the driver picks up your laundry.
                          </p>
                      </div>
                  </div>
              </div>
            </div>
            <!-- panel group ends here -->

            <!-- panel group start -->
            <div class="panel-group" id="faqAccordion">
              <div class="panel panel-info">
                  <div class="panel-heading" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question4">
                    <i class="ri-question-line"></i>
                    <h5>How do we ensure our customer’s clothes are not damaged?</h5>
                  </div>
                  <div id="question4" class="panel-collapse collapse" style="height: 0px;">
                      <div class="panel-body">
                          <h5><span class="label label-primary">Answer</span></h5>

                          <p>
                            Our staff are trained to handle any cloth material with complete care from pick up to drop off but if any damages do occur, they will be covered by our insurance. Report an errors or damages as soon as you realise them. Follow terms and condition of guidance.  
                          </p>
                      </div>
                  </div>
              </div>
            </div>
            <!-- panel group ends here -->

            <!-- panel group start -->
            <div class="panel-group" id="faqAccordion">
              <div class="panel panel-info">
                  <div class="panel-heading" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question5">
                    <i class="ri-question-line"></i>
                    <h5>How does our linen subscription service work?</h5>
                  </div>
                  <div id="question5" class="panel-collapse collapse" style="height: 0px;">
                      <div class="panel-body">
                          <h5><span class="label label-primary">Answer</span></h5>

                          <p>
                            <ul class="list-group">
                              <li class="list-group-item">Choose what Linen you require from a variety listed on our website</li>
                              <li class="list-group-item">Choose how often you want it delivered</li>
                              <li class="list-group-item">Choose when to deliver your first order </li>
                              <li class="list-group-item">Driver will drop off fresh Linen and pick up the used ones following the chosen delievery frequency  </li>
                            </ul>
                          </p>
                      </div>
                  </div>
              </div>
            </div>
            <!-- panel group ends here -->

            <!-- panel group start -->
            <div class="panel-group" id="faqAccordion">
              <div class="panel panel-info">
                  <div class="panel-heading" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question5">
                    <i class="ri-question-line"></i>
                    <h5>Can I use my own linen for the linen subscription?</h5>
                  </div>
                  <div id="question5" class="panel-collapse collapse" style="height: 0px;">
                      <div class="panel-body">
                          <h5><span class="label label-primary">Answer</span></h5>

                          <p>
                            No. Linen subscription services are provided on hire basis however you can use our Laundry services for your linen.
                          </p>
                      </div>
                  </div>
              </div>
            </div>
            <!-- panel group ends here -->
          </div>
          
        </div>




  </div>
</section><!-- Testimonial -->
<!-- Blogs -->
<section class="insight">
  <div class="container-fluid">
    <div class="mb-3 d-flex" style="justify-content: space-between; align-items: center">
      <h1 class="insight-heading">Blogs</h1>

      <a href="<?=url('blog');?>" class="btn btn-primary more-article float-right text-white">View more article
      </a>
    </div>

    <div class="row">
      
        <?php foreach ($blog as $key) { ?>
          <div class="col-md-3 mt-3">
          <div class="card">
          <img class="card-img-top" src="<?= url('public/assets/images/blog').'/'.$key->post_img; ?>" alt="Card image cap" />
          <div class="card-body">
            <h5 class="card-title">
              <a href="<?= url('/blog-details').'/'. str_replace(' ', '-', $key->post_slug); ?>"> <?=$key->post_title?></a>
            </h5>
            <div class="post-meta-data">
              <span class="post-date"> <?=date('m/d/Y', strtotime($key->post_created_at))?> </span>
              <span class="post-avatar"> No Comments </span>
            </div>
            <div class="post-excerpt">
              <p>
                <?=Str::limit($key->post_desc, 20) ?>
              </p>
            </div>
          </div>
        </div>
        </div>
        <?php } ?>
    </div>
  </div>
</section><!-- Blogs -->

@include('home.include.footer')