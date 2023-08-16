<div class="container w-50 mx-auto mb-5">
    <div class="wrap p-6">
        <form class="" method="POST" action="#">
            @csrf
            <span class="login100-form-title">
                    Ro'yxatdan o'tish
                </span>
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group ">
                                    <label class="form-label text-center">Ismingiz <span class="text-red">*</span></label>
                                    <input type="text" name="fistname" class="form-control" placeholder="Ismingiz">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label text-center">Familiyangiz <span class="text-red">*</span></label>
                                    <input type="text" name="lastname" class="form-control" placeholder="Familiyangiz">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Telefonigiz <span class="text-red">*</span></label>
                                <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                        <i class="zmdi zmdi-phone text-muted" aria-hidden="true"></i>
                                    </a>
                                    <input class="input100 border-start-0 form-control ms-0" type="email" placeholder="Telefon raqam">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Tanlagan parolingiz <span class="text-red">*</span></label>
                                <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                        <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                    </a>
                                    <input class="input100 border-start-0 form-control ms-0" type="password" placeholder="Parol">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label"> Foydalanuvchini tanlang</label>
                                    <select class="form-control select2-show-search form-select select2-hidden-accessible" data-placeholder="Choose one" tabindex="-1" aria-hidden="true">
                                            <option label="Foydalanuvchini tanlang"></option>
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="ID">Idaho</option>
                                        </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label text-center">Manzilingiz <span class="text-red">*</span></label>

                                        <div class="form-group">
                                            <label class="form-label">Viloyat</label>
                                            <select name="country" class="form-control form-select select2 select2-hidden-accessible" data-bs-placeholder="Select Country">
                                                    <option value="br" selected="">Sirdaryo</option>
                                                    <option value="cz">Czech Republic</option>
                                                    <option value="de">Germany</option>
                                                    <option value="pl">Poland</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Tuman</label>
                                            <select name="country" class="form-control form-select select2 select2-hidden-accessible" data-bs-placeholder="Select Country" tabindex="-1" aria-hidden="true">
                                                    <option value="br">Boyovut</option>
                                                    <option value="cz">Czech Republic</option>
                                                    <option value="de">Germany</option>
                                                    <option value="pl">Poland</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Maktab</label>
                                            <select name="country" class="form-control form-select select2 select2-hidden-accessible" data-bs-placeholder="Select Country" tabindex="-1" aria-hidden="true">
                                                    <option value="br">1-Maktab</option>
                                                    <option value="cz">Czech Republic</option>
                                                    <option value="de">Germany</option>
                                                    <option value="pl">Poland</option>
                                                </select>
                                        </div>
                                </div>
                        </div>
            <div class="container-login100-form-btn mx-auto w-50">
                <a href="index.html" class="login100-form-btn btn-primary">
                        Register
                    </a>
            </div>
            <div class="text-center pt-3">
                <p class="text-dark mb-0">Already have account?<a href="{{route('login_form')}}" class="text-primary ms-1">Sign In</a></p>
            </div>

        </form>
    </div>
</div>
