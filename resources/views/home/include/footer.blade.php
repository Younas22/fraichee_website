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

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
$(function() {
    var $form = $(".require-validation");
    $('form.require-validation').bind('submit', function(e) {
        var $form = $(".require-validation"),
            inputSelector = ['input[type=email]', 'input[type=password]',
                'input[type=text]', 'input[type=file]',
                'textarea'
            ].join(', '),
            $inputs = $form.find('.required').find(inputSelector),
            $errorMessage = $form.find('div.error'),
            valid = true;
        $errorMessage.addClass('d-none');
        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
            var $input = $(el);
            if ($input.val() === '') {
                $input.parent().addClass('has-error');
                $errorMessage.removeClass('d-none');
                e.preventDefault();
            }
        });
        if (!$form.data('cc-on-file')) {
            e.preventDefault();
            Stripe.setPublishableKey($form.data('stripe-publishable-key'));
            Stripe.createToken({
                number: $('#card_no').val(),
                cvc: $('#card-cvc').val(),
                exp_month: $('#card-expiry-month').val(),
                exp_year: $('#card-expiry-year').val()
            }, stripeResponseHandler);
        }
    });
    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('d-none')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
});
</script>



<script type="text/javascript">


$('#postcode').click(function(){  
           var query = $('#get_postcode').val();  
           if(query != '')  
           {  
                $.ajax({  
                     url: '{{ route('location') }}', 
                     method:"POST",  
                     data: {
                      _token: '{{ csrf_token() }}',
                      keyword: query
                      },

                     success:function(data)  
                     {  
                          // $('#addressList').fadeIn();  
                          $('#list_of_address').html(data);  
                     }  
                });  
           }  
      });


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



function increment_quantity(cart_id) {
    var inputQuantityElement = $("#qtyValue-"+cart_id);
    var newQuantity = parseInt($(inputQuantityElement).val())+1;
    save_to_db(cart_id, newQuantity);
}

function decrement_quantity(cart_id) {
    var inputQuantityElement = $("#qtyValue-"+cart_id);
    if($(inputQuantityElement).val() > 1) 
    {
    var newQuantity = parseInt($(inputQuantityElement).val()) - 1;
    save_to_db(cart_id, newQuantity);
    }else{
      alert('You need at least one product in cart');
    }
}

function save_to_db(cart_id, new_quantity) {
  var inputQuantityElement = $("#input-quantity-"+cart_id);
  // alert(new_quantity);
    $.ajax({
    url : "{{ route('update.cart') }}",
    data: {
          _token: '{{ csrf_token() }}', 
          id: cart_id, 
          quantity: new_quantity
    },
    type : 'post',
    success : function(response) {
      window.location.reload();
    }
  });
  }


      $(".remove-btn").click(function (e) {
        e.preventDefault();
        var ele = $(this);
        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route('remove.from.cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

</script>
</body>

</html>