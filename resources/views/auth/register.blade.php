@include('auth.header')
    <!--begin::Signup-->
    <div class="login-form login-signin pt-11">
        <!--begin::Form-->
        <form class="form" id="kt_login_signup_form" action="/register" method="POST">
            @csrf
            @if(session('success'))
                <div class="alert alert-success">
                    <span>Please verify your email address</span>
                </div>
            @endif
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </div>
            @endif
            <!--begin::Title-->
            <div class="text-center pb-8">
                <h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Sign Up</h2>
                <p class="text-muted font-weight-bold font-size-h4">Enter your details to create
                    your account</p>
            </div>
            <!--end::Title-->

            <!--begin::Form group-->
            <div class="form-group">
                <input
                    class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6"
                    type="text" placeholder="Full name" name="fullname" autocomplete="off" />
            </div>
            <!--end::Form group-->

            <!--begin::Form group-->
            <div class="form-group">
                <input
                    class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6"
                    type="email" placeholder="Email" name="email" autocomplete="off" />
            </div>
            <!--end::Form group-->

            <!--begin::Form group-->
            <div class="form-group">
                <input
                    class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6"
                    type="password" placeholder="Password" name="password" autocomplete="off" />
            </div>
            <!--end::Form group-->

            <!--begin::Form group-->
            <div class="form-group">
                <input
                    class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6"
                    type="password" placeholder="Confirm password" name="cpassword"
                    autocomplete="off" />
            </div>
            <!--end::Form group-->

            <!--begin::Form group-->
            <div class="form-group">
                <label class="checkbox mb-0">
                    <input type="checkbox" name="agree" />I Agree the &nbsp;<a href="#">terms and conditions</a>.
                    <span></span>
                </label>
            </div>
            <!--end::Form group-->

            <!--begin::Form group-->
            <div class="form-group d-flex flex-wrap flex-center pb-lg-0 pb-3">
                <button type="button" id="kt_login_signup_submit"
                    class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">Submit</button>
                <a type="button" id="kt_login_signup_cancel"
                    href="{{route('login')}}"
                    class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">Cancel</a>
            </div>
            <!--end::Form group-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Signup-->
@include('auth.footer')