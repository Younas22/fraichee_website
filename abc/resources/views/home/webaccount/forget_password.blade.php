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
                    <h3 class="mb-4 title">Forget Password</h3>
                </div>
            </div>
            <form action="#" class="account-form">
                <div class="form-group mb-3">
                    <label class="label" for="email">Email</label>
                    <input type="email" class="form-control" placeholder="Email" required="">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">submit</button>
                </div>

            </form>
        </div>
    </div>
</div>
@include('home.include.footer')