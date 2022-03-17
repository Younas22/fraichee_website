<footer>
  <section class="newsletter">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <h5 class="card-title">Need Help?</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <h5 class="card-title">+(62)21 2002-2012</h5>
            </div>
            <div class="col-md-6">
              <div class="pl-md-5">
                <h5 class="card-title">Newsletter</h5>
                <p class="card-text py-2">Signup our newsletter to get update information, promotion and insight.</p>
                <form>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter your email">
                    <div class="input-group-append">
                      <button class="btn btn-primary px-5" type="button"><i class="bi bi-envelope"></i> Signup</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <div class="footer-logo mb-3">
            <img src="{{url('public/assets/web/img/footerlogo.png')}}" alt="footerlogo">
          </div>
          <div class="footer-text">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
          </div>
        </div>
        <div class="col-md-8 ml-md-auto">
          <div class="row">
            <div class="col-6 col-md-4">
              <div class="footer-title">
                <h5>Company</h5>
              </div>
              <div class="footer-list">
                <ul class="nav flex-column">
                  <li class="list-item"><a href="#" class="nav-link">About Us</a></li>
                  <li class="list-item"><a href="#" class="nav-link">Leadership</a></li>
                  <li class="list-item"><a href="#" class="nav-link">Careers</a></li>
                  <li class="list-item"><a href="#" class="nav-link">Partner</a></li>
                  <li class="list-item"><a href="#" class="nav-link">News & Article</a></li>
                </ul>
              </div>
            </div>
            <div class="col-6 col-md-4">
              <div class="footer-title">
                <h5>Support</h5>
              </div>
              <div class="footer-list">
                <ul class="nav flex-column">
                  <li class="list-item"><a href="#" class="nav-link">Help Center</a></li>
                  <li class="list-item"><a href="#" class="nav-link">FAQ</a></li>
                  <li class="list-item"><a href="#" class="nav-link">Contact Us</a></li>
                  <li class="list-item"><a href="#" class="nav-link">Ticket Support</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="footer-title">
                <h5>Contact Info</h5>
              </div>
              <div class="contact-info mt-4">
                <p>If you have any questions or need help, feel free to contact with our team.</p>
                <ul class="nav flex-column">
                  <li class="list-item d-flex align-items-start">
                    <i class="bi bi-geo-alt-fill mr-2 mt-1"></i>
                    <p>Jln Cempaka Wangi No 22, Jakarta - Indonesia</p>
                  </li>
                  <li class="list-item d-flex align-items-start"><i class="bi bi-envelope mr-2 mt-1"></i>
                    <a href="mailto:#">support@yourdomain.tld</a>
                  </li>
              </div>
            </div>
          </div>
  </section>
  <section class="copyright">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5">
          <img src="https://show.moxcreative.com/cleanox/wp-content/uploads/sites/11/elementor/thumbs/Payment-Icon-pfg8lgarqhvoy0kca0mx7xc8v1t0j0jqj9tesl9gcg.png" alt="payment" class="img-fluid">
        </div>
        <div class="col-md-7">
          <div class="copyright-text text-md-right">
            <p>Copyright © 2020 <a href="#">Your Company</a>. All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </div>
</footer>
<div class="se-pre-con"></div>


<script src="{{url('public/assets/web/js/aos.js')}}"></script>
<script src="{{url('public/assets/web/js/feather.min.js')}}"></script>
<script src="{{url('public/assets/web/js/bootstrap.min.js')}}"></script>
<script src="{{url('public/assets/web/js/slick.min.js')}}"></script>
<script src="{{url('public/assets/web/js/script.js')}}"></script>

<script type="text/javascript">
  $('.add_to_cart').click(function () {
    var ele = $(this);
    var id = ele.attr("data-id");
            $.ajax({
                url: '{{ route('add.to.cart') }}',
                method: "get",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: id
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        

  });
</script>
</body>

</html>