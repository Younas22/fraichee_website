@include('home.include.header')
<style>
    footer .newsletter::before {
        background: linear-gradient(180deg, #fff 45%, #032b56 30%);
    }
</style>
<!-- shop -->
<section class="shop">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php //dd(session('cart')); ?>
<!-- // Laundary -->
            <?php foreach ($laundary as $key): ?>
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-md-center">
                            <div class="col-3 col-md-2 text-center">
                                <img class=" img-wash" src="https://prod-cdn.laundryheap.com/uploads/service/image/1/wash.png" alt="Generic placeholder image" width="48px" height="48px">
                            </div>
                            <div class="col-9 col-md-8 px-0">
                                <h5 class="mt-0 card-title"><?=$key->name?></h5>
                                <p class="mb-2 card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <div class="m-0 d-flex align-items-center">
                                    <p class="mb-0 font-italic">Priced per weight, no upper weight limit · £16.95 per each 6kg</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-2 text-center">
                                <button type="button" class="btn btn-primary service-item-button btn-block mt-3 mt-md-0" data-toggle="modal" data-target="#abc<?=$key->service_id?>">
                                    <i class="bi bi-plus-circle mr-1"></i> Price
                                </button>


                                <div class="modal fade" id="abc<?=$key->service_id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title"><?=$key->name?></h5>
                                                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                    Close<i class="bi bi-x-circle ml-1 mt-1"></i>
                                                    <i class="fa fa-times-circle-o" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="modal-body">
                                                <div class="media">
                                                    <img class="mr-3" src="https://app.laundryheap.com/images/fact-check-color.svg" alt="Generic" width="95px" height="95px">
                                                    <div class="media-body">
                                                        <h6 class="text-primary">NO HIDDEN FEES</h6>
                                                        <h3 class="mt-0">Simple pricing</h3>
                                                        <p>Free 24h delivery. · £20 minimum order. · £5 cancellation fee.</p>
                                                    </div>
                                                </div>

                                                <?php foreach (lan_products($key->service_id) as $L_pro): ?>
                                                <div class="modal-pricing">
                                                    <h6 class="text-center my-5 price-title"><?= $L_pro->title; ?></h6>

                                                <?php foreach (lan_child_products($L_pro->prod_id) as $child_products): ?>
                                                    <ul class="navbar-nav flex-column">
                                                    <li class="list-items py-3">
                                                    <div class="item">
                                                        <div class="item-title">
                                                            <h6><?=$child_products->cp_name?></h6>
                                                        </div>
                                                        <div class="item-price">
                                                            <p class="text-center">£<?=$child_products->cp_price?></p>
                                                        </div>
                                                        
                                                        <!-- <a href="{{ route('add.to.cart', $child_products->cp_id) }}"><i class="bi bi-plus-circle text-primary"></i></a> -->

                                                        <i data-id="{{ $child_products->cp_id }}"  class="add_to_cart bi bi-plus-circle text-primary"></i>
                                                    </div>
                                                    </li>
                                                    </ul>
                                                    <?php endforeach; ?>

                                                </div>
                                                <?php endforeach; ?>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary py-3 w-100">Add Wash to the order</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>

            </div>
            <div class="col-md-4">
                <!-- summary -->
                <section class="summary">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title pb-2">Price estimator</h6>
                            <p class="mb-2">Add items to start estimating...</p>
                            <ul class="navbar-nav flex-column">
                                <?php if(session('cart')){ foreach (session('cart') as $cart) {?>
                                    <li class="list-item py-2">
                                        <div class="title">
                                            <p><?=$cart['name']?></p>
                                        </div>
<!--                                         <div class="counter">
                                            <i class="bi bi-dash-circle text-primary mr-1"></i>
                                            <?=$cart['quantity']?>
                                            <i class="bi bi-plus-circle text-primary ml-1"></i>
                                        </div> -->
                                        <div class="price">
                                            <p>£<?=$cart['price']?></p>
                                        </div>
                                    </li>
                                <?php } } ?>
                            </ul>
<!-- 
                            <div class="total-price mt-3">
                                <h6 class="mb-0 text-right">Estimate <span class="text-primary"> £20.00*</span></h6>
                                <p class="text-primary text-right">* £20 is our minimum order</p>
                            </div> -->
                            <a href="{{url('/cart')}}" class="btn btn-primary py-2 my-3 w-100">continue order</a>
                            <!-- <p>Please note that the final price may vary and it will be calculated after the cleaning process.</p> -->
                        </div>
                    </div>
                </section>
                <!-- summary -->
            </div>
        </div>
</section>


@include('home.include.footer')