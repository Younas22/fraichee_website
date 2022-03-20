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
            </div>
            <form action="#" class="account-form">
                <div class="form-group mb-3">
                    <label class="label" for="name">Username</label>
                    <input type="text" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group mb-3">
                    <label class="label" for="password">Password</label>
                    <input type="password" class="form-control" placeholder="Password" required="">
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