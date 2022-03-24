@include('home.include.header')

<!-- Banner -->
<section class="banner">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-lg-6">
        <div class="banner-text" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-sine">
          <p class="sub">Professional Laundry Service</p>
          <h1>A better you start with clean clothes</h1>
          <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo</p>
          <div class="btn-group-banner">
            <a href="#" class="btn btn-primary btn-lg"><i data-feather="calendar"></i>Pickup Now</a>
            <a href="#" class="btn btn-outline-light btn-lg">Discover More<i class="ml-2 mr-0" data-feather="arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="card" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-sine">
      <div class="row no-gutters">
        <div class="col-md-8">
          <div class="card-body pt-4">
            <h4 class="card-title mb-3">Request Pickup</h4>
            <form>
              <div class="row no-gutters">
                <div class="col-md-4">
                  <input type="text" class="form-control" placeholder="Name">
                </div>
                <div class="col-md-4">
                  <input type="email" class="form-control" placeholder="Email">
                </div>
                <div class="col-md-4">
                  <input type="text" class="form-control" placeholder="Phone">
                </div>
                <div class="col-md-4">
                  <input type="date" class="form-control" placeholder="Date">
                </div>
                <div class="col-md-4">
                  <input type="time" class="form-control" placeholder="Time">
                </div>
                <div class="col-md-4">
                  <button class="btn btn-primary btn-lg btn-block">Pickup Now!<i data-feather="truck"></i></button>
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
          <div class="count-container" data-aos="fade-down" data-aos-anchor-placement="top-center" data-aos-offset="-200"><span class="count">15</span>+
            <p>Years Experienced</p>
          </div>
        </div>
      </div>
      <div class="col-md-5 ml-auto" data-aos="fade-left">
        <div class="section-title mt-5">
          <p>About Company</p>
          <h1>Excellent quality is worth the price tag.</h1>
        </div>
        <p class='desc'>Arcu eget malesuada imperdiet ornare pretium fringilla elit nullam. Orci elementum nec netus placerat convallis cursus class diam arcu tincidunt sed. Dolor tristique parturient consequat suscipit malesuada viverra proin commodo.</p>
        <div class="alert alert-secondary d-flex align-items-center mt-5">
          <i data-feather="loader"></i>
          <div class="alert-inner ml-2">
            <h5>The Idea</h5>
            <p>Eget nullam augue accumsan ridiculus sit ac ornare sociosqu molestie nibh massa lorem</p>
          </div>

        </div>
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
            <p class="text-white">Our Promise</p>
            <h1 class="text-white">24 hours to a day, clean clothes follow the same time schedule.</h1>
            <span class="text-white d-block">Montes dictum faucibus rutrum morbi sagittis blandit iaculis posuere neque nunc ac tortor</span>
            <button type="button" class="btn btn-primary btn-lg mt-4">Discover More</button>
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
              <img width="64" height="64" src="assets/img/washing-machine-02-1.png" alt="">
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
              <img width="64" height="64" src="assets/img/shirts-1.png" alt="">
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
              <img width="64" height="64" src="assets/img/iron-1.png" alt="">
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
              <img width="64" height="64" src="assets/img/hanger-1.png" alt="">
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
              <img width="64" height="64" src="assets/img/insert-coin-1.png" alt="">
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
              <img width="64" height="64" src="assets/img/insert-coin-1.png" alt="">
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
            <h1 class="text-white">Discount up to 50% Only this month.</h1>
            <sapn class="d-block text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</sapn>
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
          <h1>A better you start with clean clothes</h1>
        </div>
      </div>
      <div class="col-md-6" data-aos="fade-left">
        <p class='desc'>Platea metus letius in habitant montes. Lectus conubia duis condimentum commodo cras.
          Senectus metus tristique tempus nascetur curae conubia porttitor faucibus convallis est.</p>
        <button type="button" class="btn btn-primary ">Learn More</button>
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
            <p>Venenatis tempor morbi class taciti porttitor habitant aliquam hendrerit auctor a
              ultrices justo</p>
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
            <p>Venenatis tempor morbi class taciti porttitor habitant aliquam hendrerit auctor a
              ultrices justo</p>
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
            <p>Venenatis tempor morbi class taciti porttitor habitant aliquam hendrerit auctor a
              ultrices justo</p>
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
          <h1>Laundry. It’s no longer just your mom’s job</h1>
        </div>
      </div>
      <div class="col-md-6" data-aos="fade-left">
        <p>Efficitur habitant eleifend mus egestas urna eget cubilia vulputate quis accumsan erat.
          Si metus tortor mollis enim risus curae nec dapibus facilisis rhoncus.
          Curabitur sollicitudin taciti maximus rhoncus euismod consequat libero mauris mus.</p>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 col-sm-12 col-lg-4 mt-2">
        <div class="card" data-aos="fade-right">
          <div class="title  justify-content-center d-flex">
            <div class="section-title">
              <h5>Lite</h5>
              <p>Basic Package</p>
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
            <li> Sed vehicula nibh</li>
            <li>Sem libero</li>
            <li> Dictum cubilia facilisi commodo</li>
            <li>Vestibulum ornare dis</li>
            <li> Vehicula proin imperdiet</li>
            <li style="border-bottom:none"> Vehicula proin imperdiet</li>
          </ul>
          <div class="card-button content justify-content-center d-flex">
            <button type="button" class="btn btn-primary btn-lg">Purchase Now</button>
          </div>
          <div class="leo justify-content-center d-flex">
            <span>*Venenatis leo augue eget pellentesque tortor mauris fusce iaculis</span>
          </div>
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
              <h5>Premium</h5>
              <p>Pro Package Service</p>
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
            <li> Sed vehicula nibh</li>
            <li>Sem libero</li>
            <li> Dictum cubilia facilisi commodo</li>
            <li>Vestibulum ornare dis</li>
            <li> Vehicula proin imperdiet</li>
            <li style="border-bottom:none"> Vehicula proin imperdiet</li>
          </ul>
          <div class="card-button content justify-content-center d-flex">
            <button type="button" class="btn btn-primary btn-lg">Purchase Now</button>
          </div>
          <div class="leo justify-content-center d-flex">
            <span>*Venenatis leo augue eget pellentesque tortor mauris fusce iaculis</span>
          </div>
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
              <h5>Commercial</h5>
              <p>Comercial Package</p>
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
            <li> Sed vehicula nibh</li>
            <li>Sem libero</li>
            <li> Dictum cubilia facilisi commodo</li>
            <li>Vestibulum ornare dis</li>
            <li> Vehicula proin imperdiet</li>
            <li style="border-bottom:none"> Vehicula proin imperdiet</li>
          </ul>
          <div class="card-button content justify-content-center d-flex">
            <button type="button" class="btn btn-primary btn-lg">Purchase Now</button>
          </div>
          <div class="leo justify-content-center d-flex">
            <span>*Venenatis leo augue eget pellentesque tortor mauris fusce iaculis</span>
          </div>
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
          <h1 class="text-white">Ready to get laundry service?</h1>
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
                <div class="col-md-6">
                  <label>Name</label>
                  <input type="text" class="form-control" placeholder="Name">
                </div>
                <div class="col-md-6">
                  <label>Email</label>
                  <input type="email" class="form-control" placeholder="Email">
                </div>
                <div class="col-md-6">
                  <label>Phone</label>
                  <input type="text" class="form-control" placeholder="Phone">
                </div>
                <div class="col-md-3">
                  <label>Date</label>
                  <input type="date" class="form-control" placeholder="Date">
                </div>
                <div class="col-md-3">
                  <label>Time Pickup</label>
                  <input type="time" class="form-control" placeholder="Time">
                </div>
                <div class="col-md-12">
                  <label>Message</label>
                  <textarea name="" id="" class="form-control" placeholder="Message" cols="30" rows="5"></textarea>
                </div>
                <div class="col-md-12">
                  <button class="btn btn-primary btn-lg btn-block">Pickup Now!<i data-feather="truck"></i></button>
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
      <p>About Company</p>
      <h1>What They Say</h1>
      <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
    </div>
    <div class="testimoial-slider mt-5">
      <div class="col">
        <div class="card">
          <div class="card-body text-center px-4">
            <i class="bi bi-quote text-secondary"></i>
            <p class="card-text mt-4">Per lacus augue faucibus sociosqu lectus fusce phasellus luctus. Enim porta porttitor tempor non amet molestie. Sollicitudin mi aenean morbi torquent ante lobortis nunc tempor feugiat.</p>
            <ul class="nav justify-content-center stars mt-4">
              <li class="nav-item text-warning">
                <i class="bi bi-star-fill"></i>
              </li>
              <li class="nav-item text-warning">
                <i class="bi bi-star-fill"></i>
              </li>
              <li class="nav-item text-warning">
                <i class="bi bi-star-fill"></i>
              </li>
              <li class="nav-item text-warning">
                <i class="bi bi-star-fill"></i>
              </li>
              <li class="nav-item text-warning">
                <i class="bi bi-star-fill"></i>
              </li>
            </ul>
            <div class="img-container">
              <img src="https://show.moxcreative.com/cleanox/wp-content/uploads/sites/11/2021/11/head-shot-of-smart-asian-smiling-women-scaled.jpg" alt="testmonial" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="profile-info mt-5 d-flex flex-column align-items-center pt-3">
          <strong class="author-name">Lillian Bell</strong>
          <small class="author-des">Designation</small>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-body text-center px-4">
            <i class="bi bi-quote text-secondary"></i>
            <p class="card-text mt-4">Per lacus augue faucibus sociosqu lectus fusce phasellus luctus. Enim porta porttitor tempor non amet molestie. Sollicitudin mi aenean morbi torquent ante lobortis nunc tempor feugiat.</p>
            <ul class="nav justify-content-center stars mt-4">
              <li class="nav-item text-warning">
                <i class="bi bi-star-fill"></i>
              </li>
              <li class="nav-item text-warning">
                <i class="bi bi-star-fill"></i>
              </li>
              <li class="nav-item text-warning">
                <i class="bi bi-star-fill"></i>
              </li>
              <li class="nav-item text-warning">
                <i class="bi bi-star-fill"></i>
              </li>
              <li class="nav-item text-warning">
                <i class="bi bi-star-fill"></i>
              </li>
            </ul>
            <div class="img-container">
              <img src="https://show.moxcreative.com/cleanox/wp-content/uploads/sites/11/2021/11/head-shot-of-smart-asian-smiling-women-scaled.jpg" alt="testmonial" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="profile-info mt-5 d-flex flex-column align-items-center pt-3">
          <strong class="author-name">Lillian Bell</strong>
          <small class="author-des">Designation</small>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-body text-center px-4">
            <i class="bi bi-quote text-secondary"></i>
            <p class="card-text mt-4">Per lacus augue faucibus sociosqu lectus fusce phasellus luctus. Enim porta porttitor tempor non amet molestie. Sollicitudin mi aenean morbi torquent ante lobortis nunc tempor feugiat.</p>
            <ul class="nav justify-content-center stars mt-4">
              <li class="nav-item text-warning">
                <i class="bi bi-star-fill"></i>
              </li>
              <li class="nav-item text-warning">
                <i class="bi bi-star-fill"></i>
              </li>
              <li class="nav-item text-warning">
                <i class="bi bi-star-fill"></i>
              </li>
              <li class="nav-item text-warning">
                <i class="bi bi-star-fill"></i>
              </li>
              <li class="nav-item text-warning">
                <i class="bi bi-star-fill"></i>
              </li>
            </ul>
            <div class="img-container">
              <img src="https://show.moxcreative.com/cleanox/wp-content/uploads/sites/11/2021/11/head-shot-of-smart-asian-smiling-women-scaled.jpg" alt="testmonial" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="profile-info mt-5 d-flex flex-column align-items-center pt-3">
          <strong class="author-name">Lillian Bell</strong>
          <small class="author-des">Designation</small>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-body text-center px-4">
            <i class="bi bi-quote text-secondary"></i>
            <p class="card-text mt-4">Per lacus augue faucibus sociosqu lectus fusce phasellus luctus. Enim porta porttitor tempor non amet molestie. Sollicitudin mi aenean morbi torquent ante lobortis nunc tempor feugiat.</p>
            <ul class="nav justify-content-center stars mt-4">
              <li class="nav-item text-warning">
                <i class="bi bi-star-fill"></i>
              </li>
              <li class="nav-item text-warning">
                <i class="bi bi-star-fill"></i>
              </li>
              <li class="nav-item text-warning">
                <i class="bi bi-star-fill"></i>
              </li>
              <li class="nav-item text-warning">
                <i class="bi bi-star-fill"></i>
              </li>
              <li class="nav-item text-warning">
                <i class="bi bi-star-fill"></i>
              </li>
            </ul>
            <div class="img-container">
              <img src="https://show.moxcreative.com/cleanox/wp-content/uploads/sites/11/2021/11/head-shot-of-smart-asian-smiling-women-scaled.jpg" alt="testmonial" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="profile-info mt-5 d-flex flex-column align-items-center pt-3">
          <strong class="author-name">Lillian Bell</strong>
          <small class="author-des">Designation</small>
        </div>
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