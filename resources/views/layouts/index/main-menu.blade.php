{{--main menu--}}
<div class="main-menu">
    {{--    RIGHT MENU--}}
    <div class="menu" style="float: right;" id="burger-main-menu-short">
        <button type="button" class="btn btn-light h-100" style="position: relative;  left: 20px; ">
                <span class="button_text">
                <img class="" style="margin: auto; padding: 0; width: 23px !important;height: 28px;"
                     src="{{ asset('images/buttons/menu-burger-btn-short.png') }}" alt="">
                </span>
        </button>
    </div>
    <div class="menu" style="float: right;" id="burger-main-menu">
        <button type="button" class="btn btn-light h-100" style="z-index: 2" id="burger-icon">
                    <span class="button_text">
                    <img class="" style="margin: auto; padding: 0; width: 58px;height: 37px;"
                         src="{{ asset('images/icons/yad2Logo.png') }}" alt="yad2">
                    </span>
        </button>
        <button type="button" class="btn btn-light h-100" id="burger-btn-880" style="position: relative;  left: 20px; ">
                    <span class="button_text">
                    <img class="" style="margin: auto; padding: 0; width: 97px !important;height: 28px;"
                         src="{{ asset('images/buttons/menu-burger-btn.png') }}" alt="">
                    </span>
        </button>
    </div>
    <div class="menu" style="float: right" id="main-right-menu">
        <button type="button" class="btn btn-light h-100">
                    <span class="button_text">
                    <img class="" style="margin: auto; padding: 0; width: 58px !important;height: 37px;"
                         src="{{ asset('images/icons/yad2Logo.png') }}" alt="yad2">
                    </span>
        </button>
        <button type="button" class="btn btn-light h-100 main-menu-selected">
                <span class="link_text">
                            נדל"ן
                </span>

        </button>
        <button type="button" class="btn btn-light h-100">
                <span class="button_text">
                            רכב
                </span>
        </button>


        <button type="button" class="btn btn-light h-100">
                <span class="button_text">
                            יד שנייה
                </span>
        </button>
        <button type="button" class="btn btn-light h-100">
                <span class="button_text">
                            דרושים IL
                </span>
        </button>
        <button type="button" class="btn btn-light h-100">
                <span class="button_text">
                            עסקים ומסחרי
                </span>
        </button>
        <button type="button" class="btn btn-light h-100">
                <span class="button_text">
                            חיות מחמד
                </span>
        </button>
        <button type="button" class="btn btn-light h-100">
                <span class="button_text">
                           בעלי מקצוע
                </span>
        </button>
        <button type="button" class="btn btn-light h-100">
                <span class="button_text">
                           עוד...
                </span>
        </button>
    </div>
    {{--  END  RIGHT MENU--}}
    {{--    LEFT MENU--}}
    <div class="menu" style="float: left" id="left-main-menu">
        <button type="button" class="btn btn-light h-100" id="btn1-880">
            <span class="button_icon">
             <img src="{{ asset('images/icons/notifications_black_24dp.svg') }}" alt="">
            </span>
            <span class="button_text" id="btn1">
                        התראות
            </span>
        </button>
        <button type="button" class="btn btn-light h-100">
                        <span class="button_icon">
             <img src="{{ asset('images/icons/heart_border_black_24dp.svg') }}" alt="">
            </span>
            <span class="button_text" id="btn2">
                        מודעות שאהבתי
            </span>
        </button>

        @guest
        <button type="button" class="btn btn-light h-100" id="btn3-880">
            <span class="button_icon">
                <img src="{{ asset('images/icons/person_black_24dp.svg') }}" alt="">
            </span>
            <span class="button_text" id="btn3">
                        התחברות
            </span>
        </button>
        @endguest
        @auth
            <button type="button" class="btn btn-light h-100" id="auth-btn3-880" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            <span class="button_icon">
                <img src="{{ asset('images/icons/person_black_24dp.svg') }}" alt="">
            </span>
                <span class="button_text" id="btn3">
                        {{ Auth::user()->name }}
            </span>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="auth-btn3-880">
                    <a class="dropdown-item" href="{{ route('logout') }}" style="text-align: right"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('התנתקות') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </button>
        @endauth


        <button type="button" class="btn btn-success btn-rounded main-left-menu-button-green">
            <span class="button_icon" style="bottom: 5px">
             <img src="{{ asset('images/icons/add_white_24dp.svg') }}" alt="">
            </span>
            <span class="button_text">
                        פרסום מודעה חדשה
            </span>
        </button>
    </div>
    {{--  END  LEFT MENU--}}
</div>
{{--END main menu--}}
