{{--CONTENT WRAPPER-960px--}}
<div class="main-body-wrapper-960">
    <div class="breadcrumbs">
        <div class="breadcrumbs-text">
            <a href="#"> <span>ראשי </span></a>

            <span style="color: #999999"> \ נדל״ן להשכרה </span>

        </div>
        <button class="breadcrumbs-button ml-auto h-40">
            <span class="button_icon">
             <img style="height: 20px;" src="{{ asset('images/icons/accessebility.png') }}" alt="">
            </span>
            <span class="button_text" style="font-weight: bold;">
                       נגישות
            </span>
        </button>
    </div>


    <div class="ad-yad2 d-flex justify-content-center" id="image-960">
        <img src="{{ asset('images/ad-yad2.jpeg') }}" alt="" class="ad-yad2-img">
    </div>


    {{--SEARCH BAR--}}
    <div class="search-bar-yad2">
        <div class="header-section">
            <div class="right-text" style="font-size: 18px; font-weight: bold">
                <span>איזה נכס ל</span>
                <span style="color: #ff7100">השכרה</span>

                <span>תרצו לחפש?</span>
            </div>
            <button type="button" class="search-bar-btn">

            <span class="button_icon">
             <i class="fal fa-bell"></i>
            </span>
                <span class="button_text" style="font-size: 12px;   line-height: 30px;">
                              קבלו התראות במייל על החיפוש
            </span>

            </button>
        </div>


        <ul class="search-columns" style="margin: 0 !important;">
            <li class="search_li_1_1">
                <div>חפשו אזור, עיר, שכונה או רחוב</div>
            </li>
            <li class="search_li_1_2">
                <div>סוג נכס</div>
            </li>
            <li class="search_li_1_3">
                <div>חדרים</div>
            </li>
            <li class="search_li_1_4">
                <div>מחיר</div>
            </li>
            <li class="search_li_1_5">
                <div style="height: 21.82px"></div>
            </li>
            <li class="search_li_1_6">
                <div style="height: 21.82px"></div>
            </li>
        </ul>


        <ul class="search-columns" style="padding: 0 !important;">
            <li class="search_li_1">
                <div class="button-with-icon"><input style="color: #999; height: 40px; padding-right: 10px" type="text"
                                                     placeholder="לדוגמה: תל אביב יפו"></div>
            </li>
            <li class="search_li_2">
                <button type="button" class="search_drop_button"><span>בחרו סוגי נכסים</span> <i
                        class="fas fa-chevron-down"></i></button>
            </li>
            <li class="search_li_3">
                <button type="button" class="search_drop_button"><span>חדרים</span> <i class="fas fa-chevron-down"></i>
                </button>
            </li>
            <li class="search_li_4">
                <div style="display: flex">
                    <input type="text" placeholder="ממחיר"
                           style="color: #999; border: 1px solid #ccc; height: 40px;  padding-right: 10px">
                    <input style="color: #999; border: 1px solid #ccc; height: 40px;  padding-right: 10px" type="text"
                           placeholder="עד מחיר">
                </div>
            </li>
            <li class="search_li_5">

                <button class="li5_btn">
            <span class="button_icon">
             <i class="far fa-plus-circle"></i>
            </span>
                    <span class="button_text" style=" margin: 0 5px;">
                      חיפוש מתקדם
            </span>
                </button>

            </li>
            <li class="search_li_6">

                <button class="li6_btn">
                    <span class="button_icon">
                        <i class="fal fa-search"></i>
                    </span>
                    <span class="button_text" style=" margin: 0 5px;">
                      חיפוש
                    </span>
                </button>
            </li>
        </ul>
    </div>
    {{--END SEARCH BAR--}}
    {{--ADVANCED SEARCH--}}
    <div class="advanced-search-wrapper">
        <div class="search-title">
        <span>
            מאפייני דירה
        </span>
        </div>


        <div class="advanced-search-row">
            <ul class="advanced-search-row-ul">
                <li class="advanced-search-row-li">
                    <label class="" name="pandorDoors">
                        <input type="checkbox" class="checkbox" value="false">

                        <span class="cb_text">
                        דלתות פנדור
                    </span>
                    </label>
                </li>
                <li class="advanced-search-row-li">
                    <label class="" name="parking">
                        <input type="checkbox" class="checkbox" value="false">

                        <span class="cb_text">
                        חניה
                    </span>
                    </label>
                </li>
                <li class="advanced-search-row-li">
                    <label class="" name="elevator">
                        <input type="checkbox" class="checkbox" value="false">

                        <span class="cb_text">
                        מעלית
                    </span>
                    </label>
                </li>
                <li class="advanced-search-row-li">
                    <label class="" name="airConditioner">
                        <input type="checkbox" class="checkbox" value="false">

                        <span class="cb_text">
                        מיזוג
                    </span>
                    </label>
                </li>
                <li class="advanced-search-row-li">
                    <label class="" name="balcony">
                        <input type="checkbox" class="checkbox" value="false">

                        <span class="cb_text">
                        מרפסת
                    </span>
                    </label>
                </li>
                <li class="advanced-search-row-li">
                    <label class="" name="shelter">
                        <input type="checkbox" class="checkbox" value="false">

                        <span class="cb_text">
                        ממ"ד
                    </span>
                    </label>
                </li>
                <li class="advanced-search-row-li">
                    <label class="" name="bars">
                        <input type="checkbox" class="checkbox" value="false">

                        <span class="cb_text">
                    סורגים
                </span>
                    </label>
                </li>
                <li class="advanced-search-row-li">
                    <label class="" name="warhouse">
                        <input type="checkbox" class="checkbox" value="false">

                        <span class="cb_text">
                        מחסן
                    </span>
                    </label>
                </li>
                <li class="advanced-search-row-li">
                    <label class="" name="accessibility">
                        <input type="checkbox" class="checkbox" value="false">

                        <span class="cb_text">
                        גישה לנכים
                    </span>
                    </label>
                </li>
                <li class="advanced-search-row-li">
                    <label class="" name="renovated">
                        <input type="checkbox" class="checkbox" value="false">

                        <span class="cb_text">
                    משופצת
                </span>
                    </label>
                </li>
                <li class="advanced-search-row-li">
                    <label class="" name="furniture">
                        <input type="checkbox" class="checkbox" value="false">

                        <span class="cb_text">
                    מרוהטת
                </span>
                    </label>
                </li>
                <li class="advanced-search-row-li">
                    <label class="" name="pets">
                        <input type="checkbox" class="checkbox" value="false">

                        <span class="cb_text">
                    חיות מחמד
                </span>
                    </label>
                </li>
                <li class="advanced-search-row-li">
                    <label class="" name="forPartners">
                        <input type="checkbox" class="checkbox" value="false">

                        <span class="cb_text">
                    לשותפים
                </span>
                    </label>
                </li>
                <li class="advanced-search-row-li">
                    <label class="" name="longTerm">
                        <input type="checkbox" class="checkbox" value="false">

                        <span class="cb_text">
                    לטווח ארוך
                </span>
                    </label>
                </li>
                <li class="advanced-search-row-li">
                    <label class="" name="asset_exclusive">
                        <input type="checkbox" class="checkbox" value="false">

                        <span class="cb_text">
                    בבלעדיות
                </span>
                    </label>
                </li>
            </ul>
        </div>


        {{--TODO to create normal advanced search options--}}
        <div class="advanced-search-row2" style="display: flex; border-bottom: 1px solid #ccc;">
            <div class="range-select-wrapper">
                <label><span> קומה </span></label>
                <div class="range-select-inputs">
                    {{-- <select data-test-id="mobile_datalist" class="mobile_select">
                         <option value="-1">
                             הכל
                         </option>
                         <option data-test-id="mobile_datalist_from-floor_option_1000" value="1000">
                             <span dir="rtl">‏מרתף/פרטר</span>
                         </option>
                         <option data-test-id="mobile_datalist_from-floor_option_0" value="0">
                             <span dir="rtl">‏0</span>
                         </option>
                         <option data-test-id="mobile_datalist_from-floor_option_1" value="1">
                             <span dir="rtl">‏1</span>
                         </option>
                         <option data-test-id="mobile_datalist_from-floor_option_2" value="2">
                             <span dir="rtl">‏2</span>
                         </option>
                         <option data-test-id="mobile_datalist_from-floor_option_3" value="3">
                             <span dir="rtl">‏3</span>
                         </option>
                         <option data-test-id="mobile_datalist_from-floor_option_4" value="4">
                             <span dir="rtl">‏4</span>
                         </option>
                         <option data-test-id="mobile_datalist_from-floor_option_5" value="5">
                             <span dir="rtl">‏5</span>
                         </option>
                         <option data-test-id="mobile_datalist_from-floor_option_6" value="6">
                             <span dir="rtl">‏6</span>
                         </option>
                         <option data-test-id="mobile_datalist_from-floor_option_7" value="7">
                             <span dir="rtl">‏7</span>
                         </option>
                         <option data-test-id="mobile_datalist_from-floor_option_8" value="8">
                             <span dir="rtl">‏8</span>
                         </option>
                         <option data-test-id="mobile_datalist_from-floor_option_9" value="9">
                             <span dir="rtl">‏9</span>
                         </option>
                         <option data-test-id="mobile_datalist_from-floor_option_10" value="10">
                             <span dir="rtl">‏10</span>
                         </option>
                         <option data-test-id="mobile_datalist_from-floor_option_11" value="11">
                             <span dir="rtl">‏11</span>
                         </option>
                         <option data-test-id="mobile_datalist_from-floor_option_12" value="12">
                             <span dir="rtl">‏12</span>
                         </option>
                         <option data-test-id="mobile_datalist_from-floor_option_13" value="13">
                             <span dir="rtl">‏13</span>
                         </option>
                         <option data-test-id="mobile_datalist_from-floor_option_14" value="14">
                             <span dir="rtl">‏14</span>
                         </option><option data-test-id="mobile_datalist_from-floor_option_15" value="15">
                             <span dir="rtl">‏15</span>
                         </option>
                         <option data-test-id="mobile_datalist_from-floor_option_16" value="16">
                             <span dir="rtl">‏16</span>
                         </option>
                         <option data-test-id="mobile_datalist_from-floor_option_17" value="17">
                             <span dir="rtl">‏17</span>
                         </option>
                     </select>--}}

                    <label class="y2-input" style="display: flex">

                        <input type="text" name="" autocomplete="off" placeholder="מ-" class="text_input">
                        <span><i class="fas fa-chevron-down" id="arrow-inside-input"></i></span>
                    </label>
                    <label class="y2-input" style=" display: flex">
                        <input type="text" name="" autocomplete="off" placeholder="עד-" class="text_input">
                        <span><i class="fas fa-chevron-down" id="arrow-inside-input"></i></span>
                    </label>
                </div>
            </div>
            <div class="range-select-wrapper">
                <label>גודל דירה (במ"ר)</label>
                <div class="range-select-inputs">
                    <label class="y2-input">
                        <input type="text" name="" autocomplete="off" inputmode="numeric" maxlength="10"
                               placeholder="מ-" class="text_input">
                    </label>
                    <label class="y2-input" style="margin-right: 10px">
                        <input type="text" name="" autocomplete="off" inputmode="numeric" maxlength="10"
                               placeholder="עד-" class="text_input">
                    </label>
                </div>
            </div>
            <div class="range-select-wrapper" style="width: 340px;">
                <label>תאריך כניסה</label>
                <div class="range-select-inputs">
                    <label class="y2-input" style="display: flex">
                        <input type="text" name="" autocomplete="off" inputmode="numeric" maxlength="10"
                               placeholder="החל מ- הזינו תאריך" class="text_input" style="width: 187px !important;">
                        <span><i class="fal fa-calendar-exclamation" id="arrow-inside-input"
                                 style="font-size: 16px; top: 12px"></i></span>
                    </label>
                    <label class="advanced-search-row2-checkbox">
                        <input type="checkbox" class="checkbox" value="false">
                        <span class="cb_text" style="margin: 2px">
                        כניסה מיידית
                    </span>
                    </label>
                </div>
            </div>
        </div>

        <div class="advanced-search-row3" style="border-bottom: 1px solid #ccc;">
            <div class="range-select-wrapper" style="width: 568px !important;">
                <label>חיפוש חופשי</label>
                <div class="range-select-inputs">
                    <label class="y2-input">
                        <input type="text" name="" autocomplete="off" inputmode="numeric" maxlength="10"
                               {{--placeholder="החל מ- הזינו תאריך"--}} class="text_input"
                               style="width: 332px !important;">
                    </label>
                    <label class="advanced-search-row3-checkbox">
                        <input type="checkbox" class="checkbox" value="false" disabled>
                        <span class="cb_text" style="margin: 2px; width: 100%">
                               הצג רק מושבים וקיבוצים
                    </span>
                        <i class="far fa-question-circle" style="margin-right: 10px"></i>
                        {{--TODO to make this text on focuse icon--}}
                        {{-- <span >בחיפוש לפי מחוז / איזור ניתן לחפש במושבים וקיבוצים באיזור הנבחר</span>--}}
                    </label>
                </div>
            </div>
        </div>


        <div class="advanced-search-row4">
            <div class="btn-1">
                <button type="submit" class="advanced-search-btn-submit">חיפוש</button>
            </div>
            <div class="btn-2">
                <button type="reset" class="advanced-search-btn-reset">נקה</button>

            </div>

        </div>
    </div>
    {{--END ADVANCED SEARCH--}}




    {{--AD BOX--}}
    <div class="top-boxes">
        <ul style="display: flex; list-style: none; justify-content: space-between; padding-right: 0 !important;"
            id="top-boxes-ul">
            <li style="height: 90px;">
                <div class="top-boxes-image">
                    <img class="" src="{{ asset('images/ad/pic1.jpeg') }}" alt="">
                </div>
                <div class="top-boxes-text">
                    לקבלת הצעה
                </div>
            </li>
            <li style="height: 90px;">
                <div class="top-boxes-image">
                    <img class="" src="{{ asset('images/ad/pic2.jpeg') }}" alt="">
                </div>
                <div class="top-boxes-text">
                    זה הבית שלי
                </div>
            </li>
            <li style="height: 90px;">
                <div class="top-boxes-image">
                    <img class="" src="{{ asset('images/ad/pic3.jpeg') }}" alt="">
                </div>
                <div class="top-boxes-text">
                    תנאים מיוחדים
                </div>
            </li>
            <li style="height: 90px;">
                <div class="top-boxes-image">
                    <img class="" src="{{ asset('images/ad/pic4.jpeg') }}" alt="">
                </div>
                <div class="top-boxes-text">
                    מיקומים מנצחים
                </div>
            </li>
            <li style="height: 90px;">
                <div class="top-boxes-image">
                    <img class="" src="{{ asset('images/ad/pic5.jpeg') }}" alt="">
                </div>
                <div class="top-boxes-text">
                    לפרויקטים חדשים
                </div>
            </li>
            <li style="height: 90px;">
                <div class="top-boxes-image">
                    <img class="" src="{{ asset('images/ad/pic6.png') }}" alt="">
                </div>
                <div class="top-boxes-text">
                    פרויקטים חדשים
                </div>
            </li>
            <li style="height: 90px;">
                <div class="top-boxes-image">
                    <img class="" src="{{ asset('images/ad/pic7.jpeg') }}" alt="">
                </div>
                <div class="top-boxes-text">
                    משפחה שבוחרים
                </div>
            </li>
            <li style="height: 90px;">
                <div class="top-boxes-image">
                    <img class="" src="{{ asset('images/ad/pic8.jpeg') }}" alt="">
                </div>
                <div class="top-boxes-text">
                    מגוון דירות
                </div>
            </li>
        </ul>
    </div>
    {{--END AD BOX--}}

    {{--MAIN SECTION--}}
    <div class="main-section">
        {{--RIGHT MAIN SECTION--}}
        <div class="main-section-right">
            <div class="header-title">
            <span>
                 נדל״ן  להשכרה
            </span>
                <span style="font-size: 14px; color: #999999; padding-top: 7px">
               מציג <span>31,696</span> מודעות
           </span>
            </div>
            <div class="feed_sponsorship">
                <a class="">
                <span class="button_text">
                   בחסות
                    </span>
                </a>
                <a class="sponsorship_btn">
                    <span class="button_img">
                    <img class="" src="{{ asset('public/images/sponsor.png') }}" alt="">
                    </span>
                    <span class="button_text" style=" margin: 0 5px;">
                     <img class="" src="{{ asset('images/sponsor.png') }}" alt="">
                     אותו נכס ב40% פחות<i class="fas fa-angle-left"></i>
                    </span>
                </a>
            </div>
            {{--SEARCH BAR2--}}
            <div class="search-bar2-yad2"
                 style="padding: 30px 0 15px !important; box-shadow: none; justify-content: space-between">
                <div class="search-columns"
                     style="padding: 0 !important; display: flex; justify-content: space-between">
                    <ul class="search-columns" style="padding: 0 !important;">
                        <li>
                            <div class="bar2-text" style="width: 42px">
                                מיין לפי
                            </div>
                        </li>
                        <li class="search_li_2">
                            <button type="button" class="search_drop_button_2"
                                    style="width: 170px !important; height: 37px !important;"><span class="mr-auto">לפי תאריך</span>
                                <i class="fas fa-chevron-down ml-auto"></i></button>
                        </li>
                    </ul>
                    <ul class="search-columns" style="padding: 0 !important;">
                        <li>
                            <div class="bar2-text" style="width: 69px; margin-right: 10px">
                                הצג מודעות
                            </div>
                        </li>
                        <li class="search_li_5">
                            <button class="li5_btn_2" style="width: 99px !important; height: 37px !important;">
                        <span class="button_icon">
                             <i class="fal fa-shekel-sign"></i>
                        </span>
                                <span class="button_text" style=" margin: 0 5px; font-size: 14px !important;">
                                 עם מחיר
                        </span>
                            </button>

                        </li>
                        <li class="search_li_5" style="margin-right: 3px;">
                            <button class="li5_btn_2" style="width: 107px !important; height: 37px !important;">
                        <span class="button_icon">
                            <i class="far fa-image"></i>
                        </span>
                                <span class="button_text" style=" margin: 0 5px; font-size: 14px !important;">
                                עם תמונה
                        </span>
                            </button>
                        </li>
                    </ul>
                    <ul class="search-columns" style="padding: 0 !important;">
                        <li class="search_li_5" style="margin-right: 15px;">
                            <button class="li5_btn_2 " style="width: 115px !important; height: 37px !important;">
                            <span class="button_icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </span>
                                <span class="button_text" style=" margin: 0 5px; font-size: 14px !important;">
                                   תצוגת מפה
                            </span>
                            </button>

                        </li>
                    </ul>
                </div>
            </div>
            {{--END SEARCH BAR2--}}

            {{--APARTMENT SECTION--}}
            <div class="apartment-info">
                <div class="right-column">
                    <div class="right-column-image">
                        <button class="right-column-heart-btn">
                            <i class="far fa-heart"
                               style=" width:100% !important;position: relative; left: 3px; top: 1px"></i>
                        </button>
                        <div class="right-column-image-counter">
                            <img src="{{ asset('images/black-opacity-0.5.png') }}" alt="">
                            <div class="right-column-image-counter-bg">
                                <img style="width: 25px" src="{{ asset('images/image_counter_bg.png') }}" alt="">
                                <div class="right-column-image-counter-number">
                                    5+
                                </div>
                            </div>

                        </div>
                        <img src="{{ asset('images/apartments/1.jpeg') }}" alt="" style="width: 110px; height: 60px;">
                    </div>
                    <div class="right-column-info">
                    <span class="title">
                        עמנואל טובים 15
                    </span>
                        <span class="subtitle">
                        דירת גן, רמת החייל, תל אביב יפו
                    </span>
                    </div>
                </div>
                <div class="middle-column">
                    <div class="middle-column-info">
                    <span class="title">
                        2
                    </span>
                        <span class="subtitle">
                       חדרים
                    </span>
                    </div>
                    <div class="middle-column-info">
                    <span class="title">
                        קרקע
                    </span>
                        <span class="subtitle">
                        קומה
                    </span>
                    </div>
                    <div class="middle-column-info">
                    <span class="title">
                        50
                    </span>
                        <span class="subtitle">
                        מ"ר
                    </span>
                    </div>
                </div>
                <div class="left-column mr-auto">
                    <div class="left-column-info">
                    <span class="icon">
                        <span>פתיחה בטאב חדש</span>
                        <i class="far fa-external-link-alt"></i>

                    </span>
                        <span class="title">

                        6.500
                         <span><i class="fal fa-shekel-sign"></i></span>
                    </span>
                        <span class="subtitle">
                       עודכן היום
                    </span>
                    </div>
                </div>
            </div>
            {{-- END APARTMENT SECTION--}}
            {{--APARTMENT SECTION opened--}}
            <div class="apartment-info-open">
                <div class="apartment-info-open-upper">
                    <div class="right-column-open">
                        <div class="right-column-image-open">


                            <button class="right-column-heart-btn-open">
                                <i class="far fa-heart"
                                   style=" width:100% !important;position: relative; left: 3px; top: 1px"></i>
                            </button>
                            <div class="right-column-image-counter-open">
                                <img src="{{ asset('images/black-opacity-0.5.png') }}" alt="">
                                <div class="right-column-image-counter-bg-open">
                                    <img style="width: 25px" src="{{ asset('images/image_counter_bg.png') }}" alt="">
                                    <div class="right-column-image-counter-number-open">
                                        5+
                                    </div>
                                </div>
                            </div>
                            <img src="{{ asset('images/apartments/1.jpeg') }}" alt=""
                                 style="width: 195px; height: 117px; border-radius: 3px;">
                        </div>
                    </div>
                    <div class="middle-column-open">
                        <div class="right-column-info-open">
                    <span class="title">
                        עמנואל טובים 15
                        <button class="orange_map_btn " style="width: 70px !important; height: 25px !important;">
                            <span class="button_icon">
                                <i class="fal fa-map-marker-alt" style="color: #ff7100"></i>
                            </span>
                            <span class="button_text"
                                  style=" margin: 0 5px; font-size: 12px !important; color: #ff7100">
                                מפה
                            </span>
                        </button>
                    </span>
                            <span class="subtitle">
                        דירת גן, רמת החייל, תל אביב יפו
                    </span>
                        </div>
                        <div class="middle-column">
                            <div class="middle-column-info">
                    <span class="title">
                        2
                    </span>
                                <span class="subtitle">
                       חדרים
                    </span>
                            </div>
                            <div class="middle-column-info">
                    <span class="title">
                        קרקע
                    </span>
                                <span class="subtitle">
                        קומה
                    </span>
                            </div>
                            <div class="middle-column-info">
                    <span class="title">
                        50
                    </span>
                                <span class="subtitle">
                        מ"ר
                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="left-column-open">
                        <div class="left-column-info-open">
                    <span class="title">
                        6.500
                         <span><i class="fal fa-shekel-sign"></i></span>
                    </span>
                            <span class="subtitle">
                       עודכן היום
                    </span>
                            <span class="orange-link">
                        שוכר? בדוק אופציה לקניה<i class="fas fa-angle-left"></i>
                    </span>
                            <span class="green-btn">
                        <button>
                            <span class="button_icon">
                                  <img src="{{ asset('images/icons/call_white.png') }}" alt="">
                            </span>
                            <span class="button_text" style="font-size: 14px;   line-height: 30px;">
                                         הצגת מספר טלפון
                            </span>
                        </button>
                    </span>
                        </div>


                    </div>
                </div>
                <div class="apartment-info-open-lower">
                    <div class="right-column-open-lower">
                        <div style="font-size: 14px; font-weight: bold">
                            נכסים נוספים של המתווך
                        </div>
                        <span>
                          <img class="" src="{{ asset('images/apartments-ad/img1.jpg') }}" alt="">
                    </span>
                        <span>
                          <img class="" src="{{ asset('images/apartments-ad/img2.jpg') }}" alt="">
                    </span>
                        <span>
                          <img class="" src="{{ asset('images/apartments-ad/img3.jpg') }}" alt="">
                    </span>

                    </div>
                    <div class="left-column-open-lower">
                        <div class="title">
                        <span>
                            תיאור הנכס
                        </span>
                        </div>
                        <div class="content">
                        <span>
                            להשכרה דירה גדולה לאחר שיפוץ כללי!
החלפת כל הצנרת בבית לצנרת SP לא קורוזיבית, שקעי חשמל, ריצוף 80X80 בסלון, פרקט בחדרים, חדר אמביטה חדש עם מקלחון 80X80 וחיפוי קירות, ארון אמבט 120 ס"מ מפנק, שיש חדש במטבח, מקרר תנור וכריים חדשים לא חוברו לחשמל עדיין!! חדר ארונות פרטי ליחידת ההורים, מזגן בכל חדר ועוד ועוד ועוד
                        </span>
                        </div>
                        <div class="read-more">
                        <span>
                            קרא עוד
                        </span>
                        </div>
                        <div class="info-items">
                            <div class="right">
                                <div style="height: 76px; display: flex; flex-direction: row;">
                                <span class="title">
                                    תאריך כניסה
                                </span>
                                    <span class="subtitle">
                                    כניסה מיידית
                                </span>
                                </div>
                                <div style="height: 76px; display: flex; flex-direction: row;">
                                <span class="title">
                                  קומות בבנין
                                </span>
                                    <span class="subtitle">
                                   2
                                </span>
                                </div>
                                <div style="height: 76px; display: flex; flex-direction: row;">
                                <span class="title">
                                   ארנונה לחודשיים
                                </span>
                                    <span class="subtitle">
                                    1,300 ₪
                                </span>
                                </div>
                                <div
                                    style="height: 76px; display: flex; flex-direction: column; justify-content: space-between;">
                                <span class="title">

                                </span>
                                    <span class="subtitle">

                                </span>
                                </div>
                            </div>
                            <div class="left">
                                <div style="height: 76px; display: flex; flex-direction: row;">
                                <span class="title">
                                    ועד בית (לחודש)
                                </span>
                                    <span class="subtitle">
                                    50 ₪
                                </span>
                                </div>
                                <div style="height: 76px; display: flex; flex-direction: row;">
                                <span class="title">
                                   מס תשלומים
                                </span>
                                    <span class="subtitle">
                                  12
                                </span>
                                </div>
                                <div style="height: 76px; display: flex; flex-direction: row;">
                                <span class="title">
                                   חניות
                                </span>
                                    <span class="subtitle">
                                  1
                                </span>
                                </div>
                                <div style="height: 76px; display: flex; flex-direction: row;">
                                 <span class="orange-link">
                                     חסכו בענק ברכישת דירה <i class="fas fa-angle-left"></i>
                                </span>
                                </div>
                            </div>
                        </div>
                        <div class="additional_info_items">
                        <span class="title">
                            מה יש בנכס?
                        </span>
                            <span class="orange-link">
                            כל יועצי המס במקום אחד<i class="fas fa-angle-left"></i>
                        </span>
                        </div>

                        {{--TODO TO FIND CORRECT ICONS LIKE ON YAD2--}}

                        <div class="items-container">
                            <div class="column">
                                <div class="row">
                                 <span class="row-icon">
                                     <img src="{{ asset('images/apartments_addition/01.jpg') }}" alt="">
                                </span>
                                    <span class="row-text">
                                      מיזוג
                                </span>
                                </div>
                                <div class="row">
                                <span class="row-icon">
                                     <img src="{{ asset('images/apartments_addition/02.jpg') }}" alt="">
                                </span>
                                    <span class="row-text">
                                          מעלית
                                </span>
                                </div>
                                <div class="row">
                                <span class="row-icon">
                                      <img src="{{ asset('images/apartments_addition/03.jpg') }}" alt="">
                                </span>
                                    <span class="row-text">
                                          מחסן
                                </span>
                                </div>
                                <div class="row">
                                <span class="row-icon">
                                     <img src="{{ asset('images/apartments_addition/04.jpg') }}" alt="">
                                </span>
                                    <span class="row-text">
                                      ריהוט
                                </span>
                                </div>
                            </div>
                            <div class="column">
                                <div class="row">
                                <span class="row-icon">
                                     <img src="{{ asset('images/apartments_addition/05.jpg') }}" alt="">
                                </span>
                                    <span class="row-text">
                                      לשותפים
                                </span>
                                </div>
                                <div class="row">
                                <span class="row-icon">
                                     <img src="{{ asset('images/apartments_addition/06.jpg') }}" alt="">
                                </span>
                                    <span class="row-text">
                                      גישה לנכים
                                </span>
                                </div>
                                <div class="row">
                                <span class="row-icon">
                                      <img src="{{ asset('images/apartments_addition/07.jpg') }}" alt="">
                                </span>
                                    <span class="row-text">
                                      חיות מחמד
                                </span>
                                </div>
                                <div class="row">
                                <span class="row-icon">
                                      <img src="{{ asset('images/apartments_addition/08.jpg') }}" alt="">
                                </span>
                                    <span class="row-text">
                                      לטווח ארוך
                                </span>
                                </div>
                            </div>
                            <div class="column">
                                <div class="row">
                                 <span class="row-icon">
                                      <img src="{{ asset('images/apartments_addition/09.jpg') }}" alt="">
                                </span>
                                    <span class="row-text">
                                      סורגים
                                </span>
                                </div>
                                <div class="row">
                                <span class="row-icon">
                                      <img src="{{ asset('images/apartments_addition/10.jpg') }}" alt="">
                                </span>
                                    <span class="row-text">
                                      משופצת
                                </span>
                                </div>
                                <div class="row">
                                <span class="row-icon">
                                      <img src="{{ asset('images/apartments_addition/11.jpg') }}" alt="">
                                </span>
                                    <span class="row-text">
                                      דלתות פנדור
                                </span>
                                </div>
                                <div class="row">
                                <span class="row-icon">
                                     <img src="{{ asset('images/apartments_addition/12.jpg') }}" alt="">
                                </span>
                                    <span class="row-text">
                                     ממ"ד
                                </span>
                                </div>
                            </div>
                            <div class="column">
                                <div class="row">
                                <span class="row-icon">
                                    <img src="{{ asset('images/apartments_addition/13.jpg') }}" alt="">
                                </span>
                                    <span class="row-text">
                                      מטבח כשר
                                </span>
                                </div>
                                <div class="row">
                                <span class="row-icon">
                                     <img src="{{ asset('images/apartments_addition/14.jpg') }}" alt="">
                                </span>
                                    <span class="row-text">
                                  יחידת דיור
                                </span>
                                </div>
                                <div class="row">
                                <span class="row-icon">
                                      <img src="{{ asset('images/apartments_addition/15.jpg') }}" alt="">
                                </span>
                                    <span class="row-text">
                                      מזגן תדיראן
                                </span>
                                </div>
                                <div class="row">

                                </div>
                            </div>

                        </div>

                        {{-- TODO TO MAKE STYLES CSS FROM HERE--}}
                        <div class="furniture_title">
                        <span>
                            פירוט ריהוט
                        </span>
                        </div>
                        <div class="furniture-info">
                         <span>
                           רהוט : 2 מזגנים,ארון בגדים מיטה2 ארוניות, שולחן ו2 כסאות לחצר
                        </span>
                        </div>


                        <div class="border-div">
                            <div class="about-area">
                                <div class="title">
                            <span class="how-area">
                                איך השכונה
                            </span>
                                    <a href="#" class="addition-plans">
                                        תובנות נוספות
                                    </a>
                                </div>
                            </div>
                            <div class="percents">
                                <div class="title">
                            <span>
                               80%
                            </span>
                                    <span>
                                <img src="{{ asset('images/icons/shopping-bag.png') }}" alt="">
                            </span>
                                </div>
                            </div>
                            <div>
                        <span style="text-align: right !important;">
                             מהמשיבים מספרים שיש להם מקום שכונתי לבירה או קפה
                        </span>
                            </div>
                        </div>


                        <div class="know-area">
                        <span>
                            מכירים את השכונה?
                        </span>
                        </div>
                    </div>
                </div>


                <div class="social-links">
                    <div class="links">
                    <span>
                        <img src="{{ asset('images/apartments-link/01.jpg') }}" alt="">
                    </span>
                        <span>
                        <img src="{{ asset('images/apartments-link/02.jpg') }}" alt="">
                    </span>
                        <span>
                        <img src="{{ asset('images/apartments-link/03.jpg') }}" alt="">
                    </span>
                        <span>
                        <img style="height: 19px; margin-top: 3px" src="{{ asset('images/apartments-link/04.jpg') }}"
                             alt="">
                    </span>
                        <span>
                        <img style="height: 19px; margin-top: 3px" src="{{ asset('images/apartments-link/05.jpg') }}"
                             alt="">
                    </span>
                        <span>
                        <img style="height: 19px; margin-top: 3px" src="{{ asset('images/apartments-link/06.jpg') }}"
                             alt="">
                    </span>
                    </div>
                    <div class="text">
                    <span class="text1">
                        מצאתי טעות
                    </span>
                        <span class="text2">
                        מספר מודעה: 68872912
                    </span>
                    </div>
                </div>
                {{--TODO CSS TILL HERE--}}
                <div class="page-pagination">
                    <div class="page-numbers" style="display: flex; justify-content: space-between">
                        <div>קודם</div>
                        <div>1</div>
                        <div>2</div>
                        <div>3</div>
                        <div>4</div>
                        <div>5</div>
                        <div>6</div>
                        <div>7</div>
                        <div>8</div>
                        <div>9</div>
                        <div>הבא</div>

                    </div>
                </div>


            </div>
            {{-- END APARTMENT SECTION opened--}}
        </div>
        {{--END RIGHT MAIN SECTION--}}

        {{--LEFT MAIN SECTION--}}
        <div class="main-section-left">
            <div class="left-ad1" style="margin-bottom: 10px">
                <img class="" src="{{ asset('images/ad-left-side/1.png') }}" alt="">
            </div>
            <div class="left-ad2" style="margin-bottom: 10px">
                <img class="" src="{{ asset('images/ad-left-side/2.png') }}" alt="">
            </div>
            <div class="left-ad3">
                <img class="" src="{{ asset('images/ad-left-side/3.png') }}" alt="">
            </div>
            {{--        <div class="left-ad4">
                        <img class=""  src="{{ asset('images/ad-left-side/4.png') }}" alt="">
                    </div>--}}
        </div>
        {{--END LEFT MAIN SECTION--}}


    </div>
    {{--END MAIN SECTION--}}


    <div class="last-ad">
        <img class="" src="{{ asset('images/last-ad.jpeg') }}" alt="">
    </div>


</div>
{{--END CONTENT WRAPPER-960px--}}
