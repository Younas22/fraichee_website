@include('home.include.header')
<style>
    footer .newsletter::before {
        background: linear-gradient(180deg, #ffffff 45%, #032b56 30%);
    }
</style>
<section class="cart-hero">
    <div class="section-title">
        <h1>Checkout</h1>
    </div>
</section>
<section class="py-4 mt-4 checkout">
    <div class="container">
        <div class="row d-none">
            <din class="col-md-12">
                <button class="btn btn-light btn-lg btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    <i class="bi bi-cart mr-1"></i>
                    Returning customer? Click here to login
                </button>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body my-3">
                        <p>
                            Quisque gravida turpis sit amet nulla posuere lacinia. Cras
                            sed est sit amet ipsum luctus.
                        </p>
                        <form action="">
                            <div class="form-group">
                                <label for="Email">Username or email</label>
                                <input class="form-control" type="email" />
                            </div>
                            <div class="form-group">
                                <label for="password">password</label>
                                <input type="password" class="form-control" />
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="mt-3">
                                        <input type="checkbox" value="" id="defaultCheck1" />
                                        <label for="defaultCheck1">
                                            Remember me
                                        </label>
                                        <a href="#" class="mt-2">Lost your password?</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </din>
        </div>
        <div class="row">
            <din class="col-md-12">
                <button class="btn btn-light btn-lg btn-block text-left mt-4" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                    <i class="bi bi-cart mr-1"></i>
                    Have a coupon? Click here to enter your code
                </button>
                <div class="collapse" id="collapseExample2">
                    <div class="mt-4 mb-3">
                        <div class="checkout-coupon from-group d-flex">
                            <input placeholder="Coupon code" class="form-control d-inline-block" type="text" />
                            <input class="btn btn-primary" value="Apply Coupon" type="submit" />
                        </div>
                    </div>
                </div>
            </din>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="checkbox-form mt-5">

                     @if (Session::has('success'))
                     <div class="alert alert-success text-center">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        <p>{{ Session::get('success') }}</p>
                     </div>
                     @endif


                        <div class='form-row row'>
                           <div class='col-md-12 error form-group d-none'>
                              <div class='alert-danger alert'>Please correct the errors and try
                                 again.
                              </div>
                           </div>
                        </div>
                        
                    <h3>Billing Details</h3>
                    <form class="row g-3 require-validation" action="{{route('checkout-order')}}" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" data-cc-on-file="false"
                        id="payment-form" method="POST">
                        @csrf

                        <!-- Payment -->
                    <?php if(session('cart')){ $total = 0; foreach (session('cart') as $id => $cart) {
                    $total = $total + $cart['price']*$cart['quantity']; }} ?>

                        <?php if ($total < 30) { ?>
                            <input type="hidden" name="total_cost" value="<?=$total+3.99?>">
                        <?php }else{?>
                            <input type="hidden" name="total_cost" value="<?=$total?>">
                        <?php } ?>

                        <div class="col-md-6 form-group">
                            <label for="inputCity" class="form-label">Card Holder Name *</label>
                            <input type="text" name="card_holder_name" class="form-control required" placeholder="Card Holder Name" required="" />
                            <input type="hidden" name="order_id" value="<?=$order_id?>" />
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="inputCity" class="form-label">Card Number *</label>
                            <input type="text" name="card_no" class="form-control required" id="card_no" placeholder="Card Number" required="" />
                        </div>
                        <div class="col-4 form-group">
                            <label for="inputAddress2" class="form-label">Expiry Month *</label>
                                <select name="month" id="card-expiry-month" class="form-control required" required>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                        </div>

                            <div class="col-4 form-group">
                            <label for="inputAddress2" class="form-label">Expiry Year *</label>
                               <select name="year" id="card-expiry-year" class="form-control required" required>
                                    <option value="18">2018</option>
                                    <option value="19">2019</option>
                                    <option value="20">2020</option>
                                    <option value="21">2021</option>
                                    <option value="22">2022</option>
                                    <option value="23">2023</option>
                                    <option value="24">2024</option>
                                    <option value="25">2025</option>
                                    <option value="26">2026</option>
                                    <option value="27">2027</option>
                                    <option value="28">2028</option>
                                    <option value="29">2029</option>
                                    <option value="30">2030</option>
                                </select>
                        </div>

                        <div class="col-4 form-group">
                            <label for="inputAddress2" class="form-label">CVC *</label>
                            <input type="text" id="card-cvc" name="cvc" class="form-control required" placeholder="CVC" required>
                        </div>
                    <div class="order-button-payment text-center mt-3">
                        <input value="Place order" class="btn btn-primary btn-lg btn-block" type="submit" />
                    </div>
                    </form>


                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="your-order mt-5">
                    <h3 class="mb-4">Your order</h3>
                    <div class="your-order-table table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col title" class="border-0">PRODUCT</th>
                                    <th scope="col title" class="border-0">TOTAL</th>
                                </tr>
                            </thead>
                            <tbody>

                    <?php if(session('cart')){ $total = 0; foreach (session('cart') as $id => $cart) {
                        $total = $total + $cart['price']*$cart['quantity'];
                        ?>
                                <tr>
                                    <th scope="row"><?=$cart['name']?> <strong>× <?=$cart['quantity']?></strong></th>
                                    <td>£<?=$cart['price']*$cart['quantity'];?></td>
                                </tr>
                    <?php }} ?>

<!--                                 <tr>
                                    <th scope="row">Cart Subtotal</th>
                                    <td>$165.00</td>
                                </tr>
                                <tr>
                                    <th scope="row">Order Total</th>
                                    <td>£<?=$total?></td>
                                </tr> -->

                        <?php if ($total < 30) { ?>
                        <tr>
                            <th scope="row">Subtotal</th>
                            <td>£<?=$total?></td>
                        </tr>
                        <tr>
                            <th scope="row">Delivery cost</th>
                            <td>£3.99</td>
                        </tr>
                        <tr>
                            <td>Total Price:</td>
                            <td class="text-primary">£<?= $total+3.99?></td>
                        </tr>
                        <?php }else{?>
                        <tr>
                            <th scope="row">Subtotal</th>
                            <td>£<?=$total?></td>
                        </tr>
                        <tr>
                            <td>Total Price:</td>
                            <td class="text-primary">£<?= $total?></td>
                        </tr>
                        <?php } ?>

                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- checkout-area end -->

@include('home.include.footer')