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
            <form action="#" class="account-form">
                <div class="form-group mb-3">
                    <label class="label" for="name">Username</label>
                    <input type="text" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group mb-3">
                    <label class="label" for="email">Email</label>
                    <input type="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group mb-3">
                    <label class="label" for="password">Password</label>
                    <input type="password" class="form-control" placeholder="Password" required="">
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