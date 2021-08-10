{{--MODAL LOGIN WINDOW--}}
<div class="container">
    <!-- Modal -->
    <div class="" id="login-modal" style="display: none" role="dialog">
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
                                    התחברות
                                </span>
                            <span class="button">
                                    <button id="close-login-modal">
                                        <i class="fal fa-times" style="width: 24px; height: 24px"></i>
                                    </button>
                                </span>
                        </div>
                        <div class="text2">
                            הזן את הפרטים כדי להתחבר
                        </div>

                        <form method="POST" class="login-form" action="{{ route('login') }}">
                            @csrf
                            <label class="address-login">
                                כתובת מייל
                            </label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="your@mail.com" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <label for="" class="password-login">
                                סיסמה
                            </label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="הקלד סיסמה">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <a href="#" id="restore-password-btn">שכחתי סיסמה</a>

                            <button type="submit" class="login-btn" style="margin-top: 60px !important;">
                                {{ __('התחבר') }}
                            </button>
                            <div class="last-text">
                                <span>
                                    לא רשום?
                                </span>
                                <span>
                                    <a href="#" id="register-btn">להרשמה</a>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
{{--END MODAL LOGIN WINDOW--}}
