
<div class="container w-50 mx-auto mb-5">
    <div class="wrap p-6">
        <form class="" method="POST" action="{{route('registration')}}">
            @csrf
            <span class="login100-form-title">
                    Ro'yxatdan o'tish
                    @isset($xabar)
                        {{$xabar}}
                    @endisset
                </span>
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group ">
                                    <label class="form-label text-center">Ismingiz <span class="text-red">*</span></label>
                                    <input type="text" name="fistname" class="form-control" placeholder="Ismingiz" value="{{old('fistname')}}">
                                    <span class="text-danger">@error('fistname') {{'Ismingizni kiriting'}} @enderror</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label text-center">Familiyangiz <span class="text-red">*</span></label>
                                    <input type="text" name="lastname" class="form-control" placeholder="Familiyangiz" value="{{old('lastname')}}">
                                    <span class="text-danger">@error('lastname') {{'familoiyangizni kiriting'}} @enderror</span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Telefonigiz <span class="text-red">*</span></label>
                                <div class="wrap-input100 validate-input input-group">
                                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                        <i class="zmdi zmdi-phone text-muted" aria-hidden="true"></i>
                                    </a>
                                    <input class="input100 border-start-0 form-control ms-0" type="text" name="phone" placeholder="Telefon raqam"  value="{{old('phone')}}">
                                    <span class="text-danger">@error('phone') {{'Telefon raqamingizni kiriting'}} @enderror</span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Tanlagan parolingiz <span class="text-red">*</span></label>
                                <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                        <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                    </a>
                                    <input class="input100 border-start-0 form-control ms-0" type="password" name="password" placeholder="Parol" value="{{old('password')}}">
                                    <span class="text-danger">@error('password') {{'Parolingizni kiriting'}} @enderror</span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label"> Foydalanuvchini tanlang</label>
                                    <select class="form-control select2-show-search form-select select2-hidden-accessible" data-placeholder="Choose one" tabindex="-1" aria-hidden="true" name="user_type">
                                            <option label="">Foydalanuvchini tanlang</option>
                                            @foreach ($user_type as $item)
                                                <option value="{{$item->id}}">{{$item->user_type_name}}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger">@error('user_type') {{'Foydalanuvchi turini tanlang'}} @enderror</span>
                                </div>
                            </div>
                            <div class="col-md-12">

                                <label class="form-label text-center">Manzilingiz <span class="text-red">*</span></label>

                                        <div class="form-group">
                                            <label class="form-label">Viloyat</label>
                                            <select name="viloyat" id="viloyat" class="form-select" tabindex="-1">
                                                <option value="">Viloyatni tanlang</option>
                                                @foreach ($viloyat as $item)
                                                    <option value="{{$item->id}}"> {{$item->viloyat_name}}
                                                    </option>
                                                @endforeach
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Tuman</label>
                                            <select name="region" id="region" class="form-select">

                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Maktab</label>
                                            <select  name="school" id="school" class="form-select">

                                                </select>
                                        </div>
                                </div>
                        </div>
            <div class="container-login100-form-btn mx-auto w-50">
                <button id="registration"  type="submit" class="login100-form-btn btn-primary">
                        Register
                </button>

            </div>
            <div class="text-center pt-3">
                <p class="text-dark mb-0">Already have account?<a href="{{route('login_form')}}" class="text-primary ms-1">Sign In</a></p>
            </div>
        </form>
    </div>
</div>
