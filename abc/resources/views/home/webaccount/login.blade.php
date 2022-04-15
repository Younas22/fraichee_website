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
                    <h3 class="mb-4 title">Sign In</h3>
                </div>
                    @if (Session::get('fail'))
                    <div class="alert alert-light">
                    {{Session::get('fail')}}
                    </div>
                    @endif
            </div>
            <form class="account-form" action="{{ route('user-login.custom') }}" method="POST" >
                @csrf
                <div class="form-group mb-3">
                    <label class="label" for="email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email" required="">
                     @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
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
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </div>
                <div class="form-group d-md-flex">
                    <div class="w-50 text-left">
                        <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                            <input type="checkbox" checked="">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="w-50 text-md-right">
                        <a href="<?=url('forget-password')?>">Forgot Password</a>
                    </div>
                </div>
            </form>
            <p class="text-center">Not a member? <a href="<?=url('signup')?>">Sign Up</a></p>
        </div>
    </div>
</div>
@include('home.include.footer')