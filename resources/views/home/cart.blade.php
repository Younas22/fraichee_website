@include('home.include.header')
<style>
    footer .newsletter::before {
        background: linear-gradient(180deg, #ffffff 45%, #032b56 30%);
    }
</style>
<!-- cart -->

<!-- cart-hero -->
<section class="cart-hero">
    <div class="section-title">
        <h1>Cart</h1>
    </div>
</section>
<!-- cart-hero -->

<!-- cart-table -->
<section class="cart-table py-5">
    <div class="container">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Product Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Subtotal</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>


                    <?php if(session('cart')){ foreach (session('cart') as $id => $cart) {?>
                    <tr>
                        <td scope="row" class="cart-product">
                            <a href="#" class="cart-product-img">
                                <img height="50" width="50" src="http://localhost/fraichee_web/public/assets/images/products/<?=$cart['image']?>" alt="cart-product-img">
                            </a>
                            <a href="#">
                                <h5><?=$cart['name']?></h5>
                            </a>
                        </td>
                        <td>£<?=$cart['price']?></td>
                        <td>
                            <div class="qtySelector text-center">
                                <span class="decreaseQty"><i class="bi bi-dash-lg" onClick="decrement_quantity(<?php echo $id; ?>)"></i></span>
                                <input type="number" readonly class="qtyValue" id="qtyValue-<?php echo $id; ?>" value="<?=$cart['quantity']?>">
                                <span class="increaseQty"><i class="bi bi-plus-lg" onClick="increment_quantity(<?php echo $id; ?>)"></i></span>
                            </div>
                        </td>
                        <td>£<?=$cart['price']*$cart['quantity']?></td>
                        <td class="remove-btn" data-id="<?php echo $id; ?>"><i class="bi bi-x-lg"></i></td>
                    </tr>
                    <?php }} ?>

                </tbody>
            </table>
        </div>
    </div>
</section>
<!-- cart-table -->

<!-- cart-button-group -->
<section class="container">
    <div class="cart-button-group">
        <div class="cart-coupon">
            <form action="">
                <input type="text" name="coupon-code" value="" placeholder="Coupon Code" spellcheck="false" data-ms-editor="true">
                <button class="btn btn-primary" type="submit">Apply-coupon</button>
            </form>
        </div>
        <div class="cart-btn">
            <a href="{{url('/checkout')}}" class="btn" type="submit">Continue Shopping</a>
            <button class="btn btn-primary bg-primary text-white" type="submit">Update cart</button>
        </div>
</section>
<!-- cart-button-group  -->

<!-- cart-total -->
<section class="cart-total my-5">
    <div class="container">
        <h3>Cart Totals</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="table-responsive">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">Shipping</th>
                                <th scope="col">$2500.00</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Shipping</td>
                                <td>
                                    <ul class="radio-list">
                                        <li>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline1">Free Shipping</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline2">Free Shipping</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline3">Free Shipping</label>
                                            </div>
                                        </li>
                                    </ul>
                                    <p>Shipping options will be updated during checkout</p>
                                    <h4>Calculate Shipping</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>Shipping</td>
                                <td class="subtotal">$0.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-6">
                <div class="cart-check-out">
                    <h3>Check out</h3>
                    <ul class="nav flex-column">
                        <li class="nav-item d-flex justify-content-between align-items-center mb-3">
                            <p class="mb-0">Subtotal</p>
                            <strong>$2500.00</strong>
                        </li>
                        <li class="nav-item d-flex justify-content-between align-items-center mb-3">
                            <p class="mb-0">Shipping</p>
                            <strong>$2500.00</strong>
                        </li>
                        <li class="nav-items d-flex justify-content-between align-items-center">
                            <strong>Total Price:</strong>
                            <strong class="text-primary">$2500.00</strong>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- cart-total -->


<!-- cart -->

@include('home.include.footer')