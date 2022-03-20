@include('home.include.header')
<style>
    footer .newsletter::before {
        background: linear-gradient(180deg, #ffffff 45%, #032b56 30%);
    }

    .custome_btn{
    color: rgb(253, 253, 253);
    font-size: 12px;
    border-radius: 0;
    min-width: 184px;
    padding: 0px 40px 0px;
    height: 50px;
    margin-left: 20px;
    text-transform: uppercase;
    font-weight: 600;
    display: flex;
    align-items: center;
    justify-content: center;
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


                    <?php if(session('cart')){ $total = 0; foreach (session('cart') as $id => $cart) {
                        
                        $total = $total + $cart['price']*$cart['quantity'];

                        ?>
                    <tr>
                        <td scope="row" class="cart-product">
                            <a href="#" class="cart-product-img">
                                <img height="50" width="50" src="<?=url('public/assets/images/products').'/'.$cart['image']?>" alt="cart-product-img">
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
            <!-- <a  class="btn" type="submit">Continue Shopping</a> -->
            <a href="{{url('/shop')}}" class="btn btn-primary custome_btn" type="submit">Update cart</a>
        </div>
    </div>
</section>
<!-- cart-button-group  -->

<!-- cart-total -->
<section class="cart-total my-5">
    <div class="container">
        <h3>Other details</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="table-responsive">
                    <form action="{{route('checkout')}}" method="POST">
                        @csrf
                        <?php if ($total < 30) { ?>
                            <input type="hidden" name="total_cost" value="<?=$total+3.99?>">
                        <?php }else{?>
                            <input type="hidden" name="total_cost" value="<?=$total?>">
                        <?php } ?>
                    
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">Pick Up Date</th>
                                <th scope="col">Delivery Date</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>
                                    <fieldset class="form-group">
                                        <!-- <label for="exampleInputEmail1">Pick Up Date</label> -->
                                        <input type="date" class="form-control" name="pickup_dates" placeholder="dd-mm-yyyy" required="">
                                    </fieldset>
                                </td>

                                <td>
                                    <fieldset class="form-group">
                                        <!-- <label for="exampleInputEmail1">Pick Up Date</label> -->
                                        <input type="date" class="form-control" name="delivery_dates" placeholder="dd-mm-yyyy" required="">
                                    </fieldset>
                                </td>
                            </tr>
                        </tbody>

                        <thead>
                            <tr>
                                <th scope="col">Optional</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>
                                    <fieldset class="form-group">
                                        <textarea class="form-control" name="note_box" placeholder="Note Box"></textarea>
                                    </fieldset>
                                </td>

                                <td>
                                    <fieldset class="form-group">
                                        <!-- <label for="exampleInputEmail1">Pick Up Date</label> -->
                                        <input type="text" class="form-control" name="other_address" placeholder="Confirm Address">
                                    </fieldset>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                <div class="cart-btn">
                    <button class="btn btn-primary custome_btn" type="submit">Continue Shopping</button>
                </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="cart-check-out">
                    <h3>Payment details</h3>
                    <ul class="nav flex-column">
                        <?php if ($total < 30) { ?>
                        <li class="nav-item d-flex justify-content-between align-items-center mb-3">
                            <p class="mb-0">Subtotal</p>
                            <strong>£<?=$total?></strong>
                        </li>
                        <li class="nav-item d-flex justify-content-between align-items-center mb-3">
                            <p class="mb-0">Delivery cost</p>
                            <strong>£3.99</strong>
                        </li>
                        <li class="nav-items d-flex justify-content-between align-items-center">
                            <strong>Total Price:</strong>
                            <strong class="text-primary">£<?= $total+3.99?></strong>
                        </li>
                        <?php }else{?>
                        <li class="nav-item d-flex justify-content-between align-items-center mb-3">
                            <p class="mb-0">Subtotal</p>
                            <strong>£<?=$total?></strong>
                        </li>
                        <li class="nav-items d-flex justify-content-between align-items-center">
                            <strong>Total Price:</strong>
                            <strong class="text-primary">£<?= $total?></strong>
                        </li>
                        <?php } ?>


                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- cart-total -->


<!-- cart -->

@include('home.include.footer')