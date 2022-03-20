<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style>
    /*--thank you pop starts here--*/
.thank-you-pop{
    width:100%;
    padding:20px;
    text-align:center;
}
.thank-you-pop img{
    width:76px;
    height:auto;
    margin:0 auto;
    display:block;
    margin-bottom:25px;
}

.thank-you-pop h1{
    font-size: 42px;
    margin-bottom: 25px;
    color:#5C5C5C;
}
.thank-you-pop p{
    font-size: 20px;
    margin-bottom: 27px;
    color:#5C5C5C;
}
.thank-you-pop h3.cupon-pop{
    font-size: 25px;
    margin-bottom: 40px;
    color:#222;
    display:inline-block;
    text-align:center;
    padding:10px 20px;
    border:2px dashed #222;
    clear:both;
    font-weight:normal;
}
.thank-you-pop h3.cupon-pop span{
    color:#03A9F4;
}
.thank-you-pop a{
    display: inline-block;
    margin: 0 auto;
    padding: 9px 20px;
    color: #fff;
    text-transform: uppercase;
    font-size: 14px;
    background-color: #8BC34A;
    border-radius: 17px;
}
.thank-you-pop a i{
    margin-right:5px;
    color:#fff;
}
#ignismyModal .modal-header{
    border:0px;
}
/*--thank you pop ends here--*/

</style> 
<!--Model Popup starts-->
<div class="container">
    <div class="row">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <img src="<?=url('public/assets/web/img/newlogo-removebg-preview.png')?>" alt="" width="50%" height="50%">
                     </div>
					
                    <div class="modal-body">
                       
						<div class="thank-you-pop">
							<img src="<?=url('public/assets/web/img/circle_light.png')?>" alt="">
							<h1>Thank You!</h1>
							<p>for being our valued customer. We are so grateful and hope we met your expectations</p>
                            <h3 class="cupon-pop">Your Order Id: <span><?=$invoice_id?></span></h3>
                            
                <p class="text-danger">All pickups and deliveries are done between 18:00 to 23:00</p>
							
 						</div>

                        <center><a href="<?=url('shop')?>" class="btn btn-primary">Back To Home</a></center>
                         
                    </div>
					
                </div>
            </div>
    </div>
</div>
<!--Model Popup ends-->
