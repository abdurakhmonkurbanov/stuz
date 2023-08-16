<div class="container-login100">
    <div class="wrap-login100 p-6">
        <form class="login100-form validate-form" method="POST" action="{{route('login')}}">
            @csrf
            <span class="login100-form-title" style="padding-bottom: 0px;">
                Login
            </span>
            <div class="panel panel-primary">
                <div class="panel-body tabs-menu-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab5">
                            <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                    <i class="zmdi zmdi-phone text-muted" aria-hidden="true"></i>
                                </a>
                                <input class="input100 border-start-0 form-control ms-0" type="email" placeholder="Telefon raqam">
                            </div>

                            <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                </a>
                                <input class="input100 border-start-0 form-control ms-0" type="password" placeholder="Parol">
                            </div>
                            <div class="text-end pt-2">
                                <p class="mb-0"><a href="forgot-password.html" class="text-primary ms-1">Parolni tiklash</a></p>
                            </div>
                            <div class="container-login100-form-btn">
                                <button type="submit" class="btn btn-primary" style="margin-right: 10px;">Kirish</button>
                            </div>
                            <div class="text-center pt-3">
                                <p class="text-dark mb-0">Agar sizda login bo'lmasa<a href="{{route('reg_form')}}" class="text-primary ms-1">Ro'yxtdan o'tish</a></p>
                            </div>

                        </div>
                        <div class="tab-pane" id="tab6">
                            <div id="mobile-num" class="wrap-input100 validate-input input-group mb-4">
                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                    <span>+91</span>
                                </a>
                                <input class="input100 border-start-0 form-control ms-0">
                            </div>
                            <div id="login-otp" class="justify-content-around mb-5">
                                <input class="form-control text-center w-15" id="txt1" maxlength="1">
                                <input class="form-control text-center w-15" id="txt2" maxlength="1">
                                <input class="form-control text-center w-15" id="txt3" maxlength="1">
                                <input class="form-control text-center w-15" id="txt4" maxlength="1">
                            </div>
                            <span>Note : Login with registered mobile number to generate OTP.</span>
                            <div class="container-login100-form-btn ">
                                <a href="javascript:void(0)" class="login100-form-btn btn-primary" id="generate-otp">
                                    Proceed
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
<!-- CONTAINER CLOSED -->
