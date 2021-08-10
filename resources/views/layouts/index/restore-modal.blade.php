{{--MODAL RESTORE PASS WINDOW--}}
<div class="container">
    <!-- Modal -->
    <div class="" id="restore-password-modal" style="display: none" role="dialog">
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
                        <div class="image2" style="margin-top: 90px ">
                            <img style="height: 32px" src="{{ asset('images/login-modal/top@2x.png') }}" alt="">
                        </div>
                    </div>
                    <div class="left-login">
                        <div class="header">
                                <span class="text">
                                    חידוש סיסמה
                                </span>
                            <span class="button">
                                    <button id="close-restore-modal">
                                        <i class="fal fa-times" style="width: 24px; height: 24px"></i>
                                    </button>
                                </span>
                        </div>
                        <div class="text2">
                            על מנת לחדש סיסמה, הזן מייל לקבלת לינק לחידוש
                        </div>

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}"  class="login-form">
                            @csrf
                            <label class="address-login">
                                כתובת מייל
                            </label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="your@mail.com">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <button type="submit" class="login-btn"  style="margin-top: 220px ">
                                {{ __('שלח קוד אימות למייל') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


{{-- <div class="container">
    <!-- Modal -->
    <div class="" id="restore-password-modal"  style="display: none" role="dialog">
        <div class="center-screen" role="document">
            <!-- Modal content-->
            <div class="modal-content">
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
                            <img style="width: 227px; height: 36px; margin-top: 180px; " src="{{ asset('images/login-modal/top@2x.png') }}" alt="">
                        </div>
                    </div>

                    <div class="left-login">
                        <div class="header">
                                <span class="text">
                                   חידוש סיסמה
                                </span>
                            <span class="button">
                                    <button  id="close-restore-modal" >
                                        <i class="fal fa-times"></i>
                                    </button>
                                </span>
                        </div>
                        <div class="text2">
                            על מנת לחדש סיסמה, הזן מייל לקבלת לינק לחידוש
                        </div>
                        <form action="" class="login-form" style="margin-top: 30px">
                            <label class="address-login">
                                כתובת מייל
                            </label>
                            <input type="text" placeholder="your@mail.com">

                            <button class="login-btn" style="margin-top: 220px; /*background-color: #007bff*/">
                                שלח קוד אימות למייל
                            </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div> --}}
{{--END MODAL RESTORE PASS WINDOW--}}
