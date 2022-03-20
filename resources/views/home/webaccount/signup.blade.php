@include('home.include.header')
<style>
    footer .newsletter::before {
        background: linear-gradient(180deg, #fff 45%, #032b56 30%);
    }
</style>
<div class="container-fluid">
    <div class="account-wrap d-md-flex">
        <div class="img">
        </div>
        <div class="login-wrap p-4 p-md-5">
            <div class="d-flex">
                <div class="w-100">
                    <h3 class="mb-4 title">Sign Up</h3>
                </div>
            </div>
            <form action="{{ route('register.custom') }}" method="POST" class="account-form">
                @csrf
              <div class="form-group mx-sm-3 mb-2">

                <div class="form-group mb-3">
                    <label class="label" for="name">Location</label>
                    <input type="text" class="form-control" id="get_postcode" placeholder="Enter Your Postcode">
                    <button type="button" id="postcode" class="btn btn-primary btn-sm btn-block">Find Your Address</button>
                </div>

                <div class="form-group mb-3">
                    <label class="label" for="name">Select Address</label>
                    <select class="form-control" id="list_of_address" name="address">
                        <option class="form-control">Select Address</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label class="label" for="name">First Name</label>
                    <input type="text" class="form-control" name="fname" placeholder="First Name" required="">
                </div>

                <div class="form-group mb-3">
                    <label class="label" for="name">Last Name</label>
                    <input type="text" class="form-control" name="lname" placeholder="Last Name">
                </div>

                <div class="form-group mb-3">
                    <label class="label" for="email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email" required="">
                     @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <div class="form-group mb-3">
                    <label class="label" for="phone">Phone</label>
                    <input type="number" class="form-control" name="phone" placeholder="Phone" required="">
                     @if ($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                     @endif
                </div>



                <div class="form-group mb-3">
                    <label class="label" for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" required="">
                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                </div>
            </form>
            <p class="text-center">All Ready Has Account <a href="<?=url('login')?>">Sign In</a></p>
        </div>
    </div>
</div>
@include('home.include.footer')