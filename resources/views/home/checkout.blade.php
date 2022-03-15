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
        <div class="row">
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
                    <h3>Billing Details</h3>
                    <form class="row g-3">
                        <div class="col-12 form-group">
                            <label for="Country">Country *</label>
                            <select class="form-select form-control">
                                <option value="5">Banladesh</option>
                                <option value="1">Romania</option>
                                <option value="2">French</option>
                                <option value="3">Germany</option>
                                <option value="4">Australia</option>
                            </select>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="inputCity" class="form-label">First Name *</label>
                            <input type="text" class="form-control" id="inputCity" />
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="inputCity" class="form-label">Last Name*</label>
                            <input type="text" class="form-control" id="inputCity" />
                        </div>
                        <div class="col-12 form-group">
                            <label for="inputAddress2" class="form-label">Company Name *</label>
                            <input type="text" class="form-control" id="Company name" />
                        </div>
                        <div class="col-12 form-group">
                            <label for="inputAddress2" class="form-label">Address </label>
                            <input type="text" class="form-control" id="inputAddress1" placeholder="Street Address" />
                            <input type="text" class="form-control mt-4" id="inputAddress2" placeholder="Apartment, suite, unit etc. (optional)" />
                        </div>
                        <div class="col-12 form-group">
                            <label for="inputAddress2" class="form-label">Town / City *</label>
                            <input type="text" class="form-control" id="inputCity" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputstate">State / Country *</label>
                            <input type="text" class="form-control" id="input" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputstate">Postcode / Zip *</label>
                            <input type="text" class="form-control" id="input" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputstate">Email Address</label>
                            <input type="email" class="form-control" id="input" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputstate">Phone</label>
                            <input type="email" class="form-control" id="input" />
                        </div>
                    </form>
                    <div class="form-group">
                        <input type="checkbox" id="newAddressCheck" data-toggle="collapse" data-target="#create-address" aria-expanded="false" aria-controls="create-address" />
                        <label class="form-check-label" for="newAddressCheck">
                            Create an account?
                        </label>
                    </div>
                    <div class="collapse" id="create-address">
                        <form action="">
                            <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                            <div class="form-group">
                                <label class="form-label">Account password *</label>
                                <input class="form-control" type="password" placeholder="password" />
                            </div>
                        </form>
                    </div>

                </div>

                <div class="ship-to" style="border-bottom:1px solid #ddd; padding: 2px; ">
                    <h3 class="d-flex align-items-center justify-content-between">
                        <label>Ship to a different address?</label>
                        <input type="checkbox" id="gridCheck" data-toggle="collapse" data-target="#different-address" aria-expanded="false" aria-controls="different-address" />
                    </h3>
                </div>
                </p>
                <div class="collapse" id="different-address">
                    <div class="">
                        <form class="row g-3">
                            <div class="col-12 form-group">
                                <label for="Country">Country *</label>
                                <select class="form-control" aria-label="Default select example" aria-placeholder="Banladesh">
                                    <option value="5">Banladesh</option>
                                    <option value="1">Romania</option>
                                    <option value="2">French</option>
                                    <option value="3">Germany</option>
                                    <option value="4">Australia</option>
                                </select>
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="inputCity" class="form-label">First Name *</label>
                                <input type="text" class="form-control" id="inputCity" />
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="inputCity" class="form-label">Last Name*</label>
                                <input type="text" class="form-control" id="inputCity" />
                            </div>
                            <div class="col-12 form-group">
                                <label for="inputAddress2" class="form-label">Company Name *</label>
                                <input type="text" class="form-control" id="Company name" />
                            </div>
                            <div class="col-12 form-group">
                                <label for="inputAddress2" class="form-label">Address </label>
                                <input type="text" class="form-control" id="inputAddress1" placeholder="Street Address" />
                                <input type="text" class="form-control mt-4" id="inputAddress2" placeholder="Apartment, suite, unit etc. (optional)" />
                            </div>
                            <div class="col-12 form-group ">
                                <label for="inputAddress2" class="form-label">Town / City *</label>
                                <input type="text" class="form-control" id="inputCity" />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputstate">State / Country *</label>
                                <input type="text" class="form-control" id="input" />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputstate">Postcode / Zip *</label>
                                <input type="text" class="form-control" id="input" />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputstate">Email Address</label>
                                <input type="email" class="form-control" id="input" />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputstate">Phone</label>
                                <input type="email" class="form-control" id="input" />
                            </div>

                        </form>
                    </div>
                </div>
                <div class="order-notes ">
                    <div class="checkout-form-list checkout-form-list-2">
                        <label>Order Notes</label>
                        <textarea id="checkout-mess" class="form-control" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                    </div>
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
                                <tr>
                                    <th scope="row">
                                        Vestibulum suscipit <strong>× 1</strong>
                                    </th>
                                    <td>$165.00</td>
                                </tr>
                                <tr>
                                    <th scope="row">Vestibulum suscipit × 1</th>
                                    <td>Jacob</td>
                                </tr>
                                <tr>
                                    <th scope="row">Cart Subtotal</th>
                                    <td>$165.00</td>
                                </tr>
                                <tr>
                                    <th scope="row">Order Total</th>
                                    <td>$215.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex flex-column collapse-buttons px-2">
                        <a type="button" data-toggle="collapse" data-target="#payment1" aria-expanded="false" aria-controls="payment">
                            Direct Bank Transfer.
                        </a>
                        <div class="collapse" id="payment1">
                            <div class="m-0">
                                Make your payment directly into our bank account. Please use
                                your Order ID as the payment reference. Your order won’t be
                                shipped until the funds have cleared in our account.
                            </div>
                        </div>

                        <a type="button" data-toggle="collapse" data-target="#payment2" aria-expanded="false" aria-controls="payment">
                            Cheque Payment
                        </a>
                        <div class="collapse" id="payment2">
                            <div class="m-0">
                                Make your payment directly into our bank account. Please use
                                your Order ID as the payment reference. Your order won’t be
                                shipped until the funds have cleared in our account.
                            </div>
                        </div>

                        <a type="button" data-toggle="collapse" data-target="#payment3" aria-expanded="false" aria-controls="payment">
                            PayPal
                        </a>
                        <div class="collapse" id="payment3">
                            <div class="m-0">
                                Make your payment directly into our bank account. Please use
                                your Order ID as the payment reference. Your order won’t be
                                shipped until the funds have cleared in our account.
                            </div>
                        </div>
                    </div>
                    <div class="order-button-payment text-center mt-3">
                        <input value="Place order" class="btn btn-primary btn-lg btn-block" type="submit" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- checkout-area end -->

@include('home.include.footer')