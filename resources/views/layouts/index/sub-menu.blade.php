{{--SUB MENU--}}
<div class="sub-menu">
    {{--    RIGHT MENU--}}
    <div class="menu">
        <button type="button" class="btn btn-light h-100">
                <span class="link_text">
                           מכירה
                </span>
        </button>
        <button type="button" class="btn btn-light h-100 selected">
                <span class="button_text">
                           השכרה
                </span>
        </button>

        <button type="button" class="btn btn-light h-100">
                <span class="button_text">
                           דירות שותפים
                </span>
        </button>
        <button type="button" class="btn btn-light h-100">
                <span class="button_text">
                           נדל"ן מסחרי
                </span>
        </button>

    </div>
    {{--    LEFT MENU--}}
    <div class="menu ml-auto">
        <button type="button" class="btn btn-light h-100">
            <span class="button_icon">
             <img style="height: 20px" src="{{ asset('images/icons/property.png') }}" alt="">
            </span>
            <span class="button_text">
                       כונס נכסים
            </span>
        </button>
        <button type="button" class="btn btn-light h-100">
                        <span class="button_icon">
             <img style="height: 20px" src="{{ asset('images/icons/nadlan_index.png') }}" alt="">
            </span>
            <span class="button_text">
                        מדד הנדל"ן
            </span>
        </button>
        <button type="button" class="btn btn-light h-100">
                        <span class="button_icon">
             <img style="height: 20px" src="{{ asset('images/icons/yad1_logo.png') }}" alt="">
            </span>
            <span class="button_text">
                     יד1 דירות חדשות
            </span>
        </button>
        <button type="button" class="btn btn-light h-100" id="btn-submenu-1230">
                        <span class="button_icon">
             <img style="height: 20px" src="{{ asset('images/icons/yadata_logo.png') }}" alt="">
            </span>
            <span class="button_text">
                      הערכת שווי נכס
            </span>
        </button>
    </div>
</div>
{{--END SUB MENU--}}
