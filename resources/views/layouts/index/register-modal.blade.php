<div class="container" style="height: 0px;">
    <form method="POST" action="{{ route('register') }}" class="login-form">
    @csrf
    {{--MODAL REGISTER WINDOW--}}

    <!-- Modal -->
        <div class="" id="register-modal" style="display: none" role="dialog">
            <div class="center-screen" role="document">
                <!-- Modal content-->
                <div class="modal-content" id="login-modal">
                    <div class="modal-body">
                        <div class="right-login">

                            <div class="image1">
                                <img src="{{ asset('images/login-modal/New_logo_negative.svg') }}" alt="">
                            </div>
                            <div class="big-text">
                                ברוכים הבאים לאתר יד2
                            </div>
                            <div class="small-text">
                                טוב לראות אותך שוב!
                            </div>
                            <div class="image2">
                                <img src="{{ asset('images/login-modal/couch_lamp.svg') }}" alt="">
                            </div>
                        </div>


                        <div class="left-login">
                            <div class="header">
                                <span class="text">
                                    הרשמה
                                </span>
                                <span class="button">
                                    <button id="close-register-modal">
                                        <i class="fal fa-times" style="width: 24px; height: 24px"></i>
                                    </button>
                                </span>
                            </div>
                            <div class="text2">
                                הזן את הפרטים כדי להירשם
                            </div>


                            <div class="login-form">
                                <label class="address-login">
                                    כתובת מייל
                                </label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email"
                                       placeholder="your@mail.com">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                                <label for="" class="password-login">
                                    סיסמה
                                </label>

                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="new-password" placeholder="6 תווים, אותיות באנגלית וספרה">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" required autocomplete="new-password"
                                       placeholder="חזור על הסיסמה שהקלדת" style="margin-top: 13px">


                                <button class="login-btn" style="margin-top: 50px" id="to-second-register">
                                    המשך
                                </button>
                                <div class="last-text">
                                <span>
                                   כבר רשום?
                                </span>
                                    <span style="margin-left: 5px">
                                    <a href="#" id="login-back-btn">להתחברות </a>
                                </span>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    {{--END MODAL REGISTER WINDOW--}}


    {{--MODAL REGISTER2 WINDOW--}}

    <!-- Modal -->
        <div class="" id="second-register-modal" style="display: none" role="dialog">
            <div class="center-screen" role="document">
                <!-- Modal content-->
                <div class="modal-content" id="login-modal" style="height: 600px">
                    <div class="modal-body">
                        <div class="right-login">

                            <div class="image1">
                                <img src="{{ asset('images/login-modal/New_logo_negative.svg') }}" alt="">
                            </div>
                            <div class="big-text">
                                ברוכים הבאים לאתר יד2
                            </div>
                            <div class="small-text">
                                טוב לראות אותך שוב!
                            </div>
                            <div class="image2" style="margin-top: 120px !important;">
                                <img src="{{ asset('images/login-modal/couch_lamp.svg') }}" alt="">
                            </div>
                        </div>

                        <div class="left-login">
                            <div class="header">
                                  <span class="text">
                                    הרשמה
                                </span>
                                <span class="button">
                                    <button id="close-second-register-modal">
                                        <i class="fal fa-times" style="width: 24px; height: 24px"></i>
                                    </button>
                                </span>
                            </div>
                            <div class="text2">
                                הזן את הפרטים כדי להירשם
                            </div>

                            <div class="login-form">
                                <label>
                                    שם פרטי
                                </label>
                                <input id="name" style="height: 40px !important;" type="text"
                                       class="form-control @error('name') is-invalid @enderror" name="name"
                                       value="{{ old('name') }}" required autocomplete="name" autofocus
                                       placeholder="הקלד שם פרטי">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label>
                                    שם משפחה
                                </label>

                                <input id="family" type="text"
                                       class="form-control @error('family') is-invalid @enderror" name="family"
                                       value="{{ old('family') }}" required autocomplete="family" autofocus
                                       placeholder="הקלד שם משפחה">

                                @error('family')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label>
                                    מספר טלפון
                                </label>
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                                       name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus
                                       placeholder="טלפון">

                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                                <label>
                                    תאריך לידה
                                </label>

                                <input id="birthday" type="date"
                                       class="form-control @error('birthday') is-invalid @enderror" name="birthday"
                                       placeholder="בחר תאריך לידה" value="בחר תאריך לידה" required
                                       autocomplete="birthday" autofocus>

                                @error('birthday')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div style="display: flex; margin-top: 20px; margin-right: 2px ">
                                    <input type="checkbox" name="regulations"
                                           style="height: 16px; width: 16px; background-color: #fff; border: 1px solid #363636; border-radius: 2px; position: relative; top: 5px">
                                    <span style="margin-right: 5px; position: relative; top: -2px">קראתי ומאשר את <a
                                            href="https://www.yad2.co.il/eula" target="_blank">תקנון</a> האתר</span>
                                </div>
                                <div style="display: flex; margin-top: 5px; margin-right: 2px ">
                                    <input type="checkbox" name="privateAd"
                                           style="height: 16px; width: 16px; background-color: #fff; border: 1px solid #363636; border-radius: 2px; position: relative; top: 5px">
                                    <span style="margin-right: 5px; position: relative; top: -2px">מאשר קבלת דיוור פרסומי כללי מיד2</span>
                                </div>

                                <button type="submit" class="login-btn">
                                    {{ __('להרשם') }}
                                </button>
                                <div class="last-text">
                                <span>
                                   כבר רשום?
                              </span>
                                    <span style="margin-left: 5px">
                                    <a href="#" id="login-back-btn2">להתחברות </a>
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        {{--END MODAL REGISTER2 WINDOW--}}
    </form>
</div>

