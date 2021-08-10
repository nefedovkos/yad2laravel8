<!doctype html>
<html dir="rtl" lang="il">
@extends('layouts.index.header')
<body>
{{--NAV BAR--}}
<div class="nav-bar">
    <div class="wrapper-1240">
        <div class="right">
            <a href="#">
                <img src="{{ asset('images/add-new-apartments/new_logo_orange.png') }}" alt="">
            </a>
            <span class="text">פרסום מודעה חדשה</span>
        </div>
        <div class="left">
            <div class="user">
                <img src="{{ asset('images/add-new-apartments/user-icon.png') }}" alt="">
                <span>Konstantin Nefedov</span>
            </div>
            <div class="contact">
                <a href="#">צור קשר</a>
            </div>
            <div class="exit">
                <a href="#" class="exit-btn">   <img src="{{ asset('images/add-new-apartments/exit-btn.png') }}" alt=""></a>
            </div>


        </div>
    </div>

</div>
{{--END NAV BAR--}}
<div class="details">
    <div class="wrapper-880">

        {{--ACCORDION--}}
        <div class="accordion" id="accordionExample">
            <div class="accordion" id="accordionExample">
                {{--ACCORDION-1--}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <span class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <span class="circle-icon">
                                <span class="number-in-circle">
                                    1
                                </span>
                            </span>
                           <span class="title">
                              אני רוצה להשכיר נכס
                           </span>
                        </span>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <span class="circle-icon">
                                <span class="number-in-circle">
                                    1
                                </span>
                            </span>
                            <div class="title">
                                <div class="right">
                                    באיזו קטגוריה נפרסם היום?
                                </div>
                            </div>

                            <div class="content">
                                <div class="category-icons">
                                    <img class="" src="{{ asset('images/add-new-apartments/1-1-non_selected.png') }}" alt="">
                                    <img class="" src="{{ asset('images/add-new-apartments/1-2-non_selected.png') }}" alt="">
                                    <img class="" src="{{ asset('images/add-new-apartments/1-3-non_selected.png') }}" alt="">
                                    <img class="" src="{{ asset('images/add-new-apartments/1-4-non_selected.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--ACCORDION-2--}}
                <div class="accordion-item">

                    <h2 class="accordion-header" id="headingTwo">
                        <span class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <span class="circle-icon">
                                <span class="number-in-circle">
                                    2
                                </span>
                            </span>
                           <span class="title">
                             כתובת הנכס
                           </span>
                        </span>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <span class="circle-icon">
                                <span class="number-in-circle">
                                    2
                                </span>
                            </span>
                            <div class="title">
                                <div class="right">
                                    כתובת הנכס
                                </div>
                                <div class="left">
                                    <span class="icon">
                                          <img class="" src="{{ asset('images/add-new-apartments/2-video.png') }}" alt="">
                                    </span>
                                    <span class="bold-text">
                                            המלצה שלנו
                                    </span>
                                    <span class="regular-text">
                                            העלאת וידאו של הנכס תמשוך יותר מתעניינים למודעה שלך
                                    </span>
                                </div>

                            </div>
                            <div class="content">
                                <div class="sub-title">
                                    <span>
                                        סימנו עבורך את שדות החובה. שלא נפספס פרט חשוב
                                    </span>
                                </div>
                                <div class="sub-title">
                                    <span class="text-label">
                                        סוג הנכס
                                    </span>
                                    <span class="star">
                                        *
                                    </span>
                                    <br>
                                    <button type="button" class="sub-title_drop_button"><span>דירה או אולי פנטהאוז?</span> <i class="fas fa-chevron-down"></i></button>
                                </div>
                                <div class="sub-title">
                                    <span class="text-label">
                                       ישוב
                                    </span>
                                    <span class="star">
                                        *
                                    </span>
                                    <br>
                                    <input style="color: #999; height: 40px; padding-right: 10px; width: 264px" type="text" placeholder="איפה נמצא הנכס?">
                                </div>
                                <div class="sub-title">
                                    <span class="text-label">
                                       רחוב
                                    </span>
                                    <br>
                                    <input style="color: #999; height: 40px; padding-right: 10px; width: 264px" type="text" placeholder="הכנסת שם הרחוב">
                                </div>
                                <div class="sub-title" style="position: relative; bottom: 15px">
                                    <span class="text-label" style="color: #666666; font-size: 11px; line-height: 15px">
                                       רחוב         המידע הזה מגיע מגוף ממשלתי, אם הרחוב שלך לא מופיע,<br> מומלץ לבחור רחוב קרוב אליך
                                    </span>
                                </div>
                                <div class="sub-title">
                                    <span class="text-label">
                                        מס' בית
                                    </span>
                                    <br>
                                    <input style="color: #999; height: 40px; padding-right: 10px; width: 130px" type="text" {{--placeholder="הכנסת שם הרחוב"--}}>
                                </div>
                                <div class="sub-title">
                                    <ul class="parts-3">
                                        <li>
                                            <span class="text-label">
                                                   קומה
                                            </span>
                                            <span class="star">
                                                     *
                                            </span>
                                            <br>
                                            <input style="color: #999; height: 40px; padding-right: 10px; width: 177px" type="text" placeholder="הכנסת מספר קומה">
                                        </li>
                                        <li>
                                            <span class="text-label">
                                                  סה"כ קומות בבניין
                                            </span>
                                            <span class="star">
                                                     *
                                            </span>
                                            <br>
                                            <input style="color: #999; height: 40px; padding-right: 10px; width: 177px" type="text" placeholder='הכנסת סה"כ קומות'>
                                        </li>
                                        <li>
                                             <span style="position: relative; top: 34px; ">
                                                <input type="checkbox">
                                            </span>
                                            <span class="text-label" style="position: relative; top: 32px; margin-right: 5px">
                                                  על עמודים
                                            </span>


                                        </li>
                                    </ul>
                                </div>
                                <div class="sub-title">
                                    <span class="text-label">
                                       שכונה
                                    </span>
                                    <br>
                                    <input style="color: #999; height: 40px; padding-right: 10px; width: 264px" type="text" placeholder="">
                                </div>
                                <div class="sub-title" style="position: relative; bottom: 15px">
                                    <span class="text-label" style="color: #666666; font-size: 11px; line-height: 15px">
                                        המידע הזה מגיע מגוף ממשלתי ולא ניתן לשינוי
                                    </span>
                                </div>

                                <div class="sub-title">
                                    <span class="text-label">
                                      אזור השכרה
                                    </span>
                                    <br>
                                    <input style="color: #999; height: 40px; padding-right: 10px; width: 264px" type="text" placeholder="בחירת אזור השכרה">
                                </div>
                                <div class="sub-title" style="position: relative; bottom: 15px">
                                    <span class="text-label" style="color: #666666; font-size: 11px; line-height: 15px">
                                      המידע הזה מגיע מגוף ממשלתי ולא ניתן לשינוי
                                    </span>
                                </div>
                                <div class="checkbox-wrapper">
                                   <span style="position: relative; top: 2px;">
                                        <input type="checkbox">
                                    </span>
                                    <span class="text-label" style="margin-right: 5px;">
                                       אני רוצה לקבל עדכון חודשי במייל עם הערכת שווי מעודכנת עבור הנכס, עסקאות באזור והצעות מקצועיות מיועצי נדל"ן

                                    </span>
                                </div>
                                <div class="button-wrapper">
                                    <button type="button" class="btn-back" data-mdb-ripple-color="dark">
                                        חזרה
                                    </button>

                                    <button type="button" class="btn-next" data-mdb-ripple-color="dark">
                                        להמשיך לשלב הבא
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--ACCORDION-3--}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <span class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <span class="circle-icon">
                                <span class="number-in-circle">
                                   3
                                </span>
                            </span>
                           <span class="title">
                              על הנכס
                           </span>
                        </span>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <span class="circle-icon">
                                <span class="number-in-circle">
                                    3
                                </span>
                            </span>
                            <div class="title">
                                <div class="right">
                                    על הנכס
                                </div>
                            </div>
                            <div class="content">
                                <div class="sub-title">
                                    <span class="text-label">
                                       מספר חדרים
                                    </span>
                                    <span class="star">
                                        *
                                    </span>
                                    <br>
                                    <button type="button" class="sub-title_drop_button"><span>בחירת מספר חדרים</span> <i class="fas fa-chevron-down"></i></button>
                                </div>
                                <div class="sub-title">
                                    <span class="First-group">
                                      חניה
                                    </span>
                                    <br>
                                    <div class="btn-group" role="group" aria-label="First-group" style="direction: ltr">
                                        <button type="button" class="btn btn4">3</button>
                                        <button type="button" class="btn btn3">2</button>
                                        <button type="button" class="btn btn2">1</button>
                                        <button type="button" class="btn btn1">ללא</button>
                                    </div>
                                </div>
                                <div class="sub-title">
                                    <span class="Second-group">
                                      מרפסת
                                    </span>
                                    <br>
                                    <div class="btn-group" role="group" aria-label="Second-group" style="direction: ltr">
                                        <button type="button" class="btn btn4">3</button>
                                        <button type="button" class="btn btn3">2</button>
                                        <button type="button" class="btn btn2">1</button>
                                        <button type="button" class="btn btn1">ללא</button>
                                    </div>
                                </div>
                                <div class="sub-title">
                                    <span class="text-bold">
                                      מאפייני הנכס
                                    </span>
                                    <br>

                                    {{--TODO change this divs to checkboxes--}}
                                    <div class="items-container" style="display: flex; ;justify-content: space-between; margin-top: 20px">
                                        <div class="column" style="margin-left: 30px">
                                            <div class="row border-btn">
                                                 <span class="row-icon float-right" >
                                                     <img src="{{ asset('images/apartments_addition/01.jpg') }}" alt="">
                                                </span>
                                                <span class="row-text">
                                                      מיזוג
                                                </span>
                                            </div>
                                            <div class="row border-btn">
                                                <span class="row-icon" >
                                                     <img src="{{ asset('images/apartments_addition/02.jpg') }}" alt="">
                                                </span>
                                                <span class="row-text">
                                                          מעלית
                                                </span>
                                            </div>
                                            <div class="row border-btn">
                                <span class="row-icon" >
                                      <img src="{{ asset('images/apartments_addition/03.jpg') }}" alt="">
                                </span>
                                                <span class="row-text">
                                          מחסן
                                </span>
                                            </div>
                                            <div class="row border-btn">
                                <span class="row-icon" >
                                     <img src="{{ asset('images/apartments_addition/04.jpg') }}" alt="">
                                </span>
                                                <span class="row-text">
                                      ריהוט
                                </span>
                                            </div>
                                        </div>
                                        <div class="column" style="margin-left: 30px">
                                            <div class="row border-btn">
                                <span class="row-icon" >
                                     <img src="{{ asset('images/apartments_addition/05.jpg') }}" alt="">
                                </span>
                                                <span class="row-text">
                                      לשותפים
                                </span>
                                            </div>
                                            <div class="row border-btn">
                                <span class="row-icon" >
                                     <img src="{{ asset('images/apartments_addition/06.jpg') }}" alt="">
                                </span>
                                                <span class="row-text">
                                      גישה לנכים
                                </span>
                                            </div>
                                            <div class="row border-btn">
                                <span class="row-icon" >
                                      <img src="{{ asset('images/apartments_addition/07.jpg') }}" alt="">
                                </span>
                                                <span class="row-text">
                                      חיות מחמד
                                </span>
                                            </div>
                                            <div class="row border-btn">
                                <span class="row-icon" >
                                      <img src="{{ asset('images/apartments_addition/08.jpg') }}" alt="">
                                </span>
                                                <span class="row-text">
                                      לטווח ארוך
                                </span>
                                            </div>
                                        </div>
                                        <div class="column" style="margin-left: 30px">
                                            <div class="row border-btn">
                                 <span class="row-icon" >
                                      <img src="{{ asset('images/apartments_addition/09.jpg') }}" alt="">
                                </span>
                                                <span class="row-text">
                                      סורגים
                                </span>
                                            </div>
                                            <div class="row border-btn">
                                <span class="row-icon" >
                                      <img src="{{ asset('images/apartments_addition/10.jpg') }}" alt="">
                                </span>
                                                <span class="row-text">
                                      משופצת
                                </span>
                                            </div>
                                            <div class="row border-btn">
                                <span class="row-icon" >
                                      <img src="{{ asset('images/apartments_addition/11.jpg') }}" alt="">
                                </span>
                                                <span class="row-text">
                                      דלתות פנדור
                                </span>
                                            </div>
                                            <div class="row border-btn">
                                <span class="row-icon" >
                                     <img src="{{ asset('images/apartments_addition/12.jpg') }}" alt="">
                                </span>
                                                <span class="row-text">
                                     ממ"ד
                                </span>
                                            </div>
                                        </div>
                                        <div class="column" style="margin-left: 30px">
                                            <div class="row border-btn">
                                <span class="row-icon" >
                                    <img src="{{ asset('images/apartments_addition/13.jpg') }}" alt="">
                                </span>
                                                <span class="row-text">
                                      מטבח כשר
                                </span>
                                            </div>
                                            <div class="row border-btn">
                                <span class="row-icon" >
                                     <img src="{{ asset('images/apartments_addition/14.jpg') }}" alt="">
                                </span>
                                                <span class="row-text">
                                  יחידת דיור
                                </span>
                                            </div>
                                            <div class="row border-btn">
                                                <span class="row-icon" >
                                                      <img src="{{ asset('images/apartments_addition/15.jpg') }}" alt="">
                                                </span>
                                                <span class="row-text">
                                                      מזגן תדיראן
                                                </span>
                                            </div>
                                            <div class="row border-btn" style="visibility: hidden !important;">

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="sub-title">
                                    <span class="text-bold">
                                     מה חשוב לך שידעו על הנכס?
                                    </span>
                                    <br>
                                    {{--TODO check why JS not count simbols--}}
                                    <div class="textarea-title-furniture">
                                        <span>
                                          פרוט הריהוט: (עד 200 תוים)
                                        </span>
                                        <br>
                                        <span id="textarea-counter-furniture">
                                            0/200
                                        </span>
                                    </div>
                                    <div class="textarea-furniture">
                                        <textarea  style="width: 395px; height: 156px" maxlength="200" cols="5" id="textarea-field-furniture" ></textarea></div>
                                    <script type="text/javascript">
                                        function charCount200(){
                                            let element=document.getElementById("#textarea-field-furniture").value.length;
                                            document.getElementById("#textarea-counter-furniture").innerHTML=element+"/200";
                                        }
                                    </script>


                                    <div class="textarea-title">
                                        <span>
                                            פרוט הנכס
                                        </span>
                                        <span id="textarea-counter">
                                            0/400
                                        </span>
                                    </div>
                                    <div class="textarea"><textarea onkeyup="charCount400();" style="width: 395px; height: 156px" maxlength="400" cols="5" placeholder="זה המקום לתאר את הפרטים הבולטים, למשל, האם נערך שיפוץ במבנה, מה שופץ, כיווני אוויר, האווירה ברחוב וכו'" id="textarea-field"  title="פרוט הנכס"></textarea></div>
                                    <script type="text/javascript">
                                        function charCount400(){
                                            let element=document.getElementById("#textarea-field").value.length;
                                            document.getElementById("#textarea-counter").innerHTML=element+"/400";
                                        }
                                    </script>

                                    <div class="button-wrapper">
                                        <button type="button" class="btn-back" data-mdb-ripple-color="dark">
                                            חזרה
                                        </button>

                                        <button type="button" class="btn-next" data-mdb-ripple-color="dark">
                                            להמשיך לשלב הבא
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--ACCORDION-4--}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <span class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <span class="circle-icon">
                                <span class="number-in-circle">
                                    4
                                </span>
                            </span>
                           <span class="title">
                            תשלומים, תאריכים ועוד
                           </span>
                        </span>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <span class="circle-icon">
                                <span class="number-in-circle">
                                    4
                                </span>
                            </span>
                            <div class="title">
                                <div class="right">
                                    תשלומים, תאריכים ועוד
                                </div>
                                <div class="left">
                                    <span class="icon">
                                          <img class="" src="{{ asset('images/add-new-apartments/4-light-bulb-on.png') }}" alt="">
                                    </span>
                                    <div class="levels2">
                                        <span class="bold-text">
                                            גם לנו היה קשה להאמין!
                                    </span>
                                        <span class="regular-text">
                                          מודעות שעולות עם מחירים לא עגולים מוכרות מהר יותר
                                    </span>
                                    </div>

                                </div>

                            </div>

                            <div class="content">
                                <div class="sub-title">
                                    <span class="text-label">
                                       מספר תשלומים
                                    </span>
                                    <span class="star">
                                        *
                                    </span>
                                    <br>
                                    <button type="button" class="sub-title_drop_button" style="width: 208px; height: 42px"><span>בחירת מספר תשלומים</span> <i class="fas fa-chevron-down"></i></button>
                                </div>
                                <div class="sub-title">
                                    <span class="text-label">
                                        ועד בית
                                    </span>
                                    <br>
                                    <input style="color: #999; height: 42px; padding-right: 10px; width: 208px" type="text" placeholder="הכנסת סכום תשלום לועד בית">
                                </div>
                                <div class="sub-title">
                                    <span class="text-label">
                                      ארנונה לחודשיים
                                    </span>
                                    <br>
                                    <input style="color: #999; height: 42px; padding-right: 10px; width: 208px" type="text" placeholder="סכום הארנונה לתשלום">
                                </div>
                                <div class="sub-title">
                                    <span class="text-label">
                                       מ"ר בנוי
                                    </span>

                                    <br>
                                    <input style="color: #999; height: 42px; padding-right: 10px; width: 208px" type="text" placeholder=' כמה מ"ר יש בנכס'>
                                </div>
                                <div class="sub-title">
                                    <span class="text-label">
                                       גודל במ"ר סך הכל
                                    </span>
                                    <span class="star">
                                        *
                                    </span>
                                    <br>
                                    <input style="color: #999; height: 42px; padding-right: 10px; width: 208px" type="text">
                                </div>
                                <div class="sub-title" style="position: relative">
                                    <span class="text-label" >
                                      מחיר
                                    </span>

                                    <br>
                                    <i class="fal fa-shekel-sign" style="font-size: 1.3em; position: absolute; bottom: 10px; right: 200px; color: #999;"></i>
                                    <input style="color: #999; height: 42px; padding-right: 10px; width: 208px" type="text" placeholder='סכום מינימלי 100'>
                                </div>
                                {{--TODO make calendar on jQuery--}}
                                <div class="sub-title" style="position: relative">
                                    <span class="text-label" >
                                      מחיר
                                    </span>

                                    <br>
                                    <i class="fal fa-calendar-alt" style="font-size: 1.3em; position: absolute; bottom: 10px; right: 200px; color: black;"></i>
                                    <input style="color: #999; height: 42px; padding-right: 10px; width: 208px" type="text" placeholder='DD/MM/YYYY'>
                                    <input type="checkbox" class="checkbox-accordion4">
                                    <label style="margin-right: 5px; cursor: pointer">
                                        מיידי
                                    </label>
                                </div>
                                <div class="sub-title" style="position: relative; padding: 0; ">
                                    <input type="checkbox" class="checkbox-accordion4">
                                    <label style="margin-right: 5px; cursor: pointer">
                                        לטווח ארוך
                                    </label>
                                </div>
                                <div class="button-wrapper">
                                    <button type="button" class="btn-back" data-mdb-ripple-color="dark">
                                        חזרה
                                    </button>

                                    <button type="button" class="btn-next" data-mdb-ripple-color="dark">
                                        להמשיך לשלב הבא
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--ACCORDION-5--}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <span class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <span class="circle-icon">
                                <span class="number-in-circle">
                                    5
                                </span>
                            </span>
                           <span class="title">
                             תמונות וסרטונים
                           </span>
                        </span>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <span class="circle-icon">
                                <span class="number-in-circle">
                                    5
                                </span>
                            </span>
                            <div class="title">
                                <div class="right">
                                    תמונות וסרטונים
                                </div>
                                <div class="left" style="width: 413px">
                                    <span class="icon">
                                          <img class="" src="{{ asset('images/add-new-apartments/4-light-bulb-on.png') }}" alt="">
                                    </span>
                                    <div class="levels2">
                                        <span class="regular-text">
                                          לא לדאוג, גם אם רואים את התמונה באופן לא ברור כעת, לאחר
                                    </span>
                                        <span class="regular-text">
                                          הפרסום הכל יראה כמו שצריך
                                    </span>
                                    </div>

                                </div>

                            </div>


                            <div class="content">
                                <div class="sub-title" style=" font-size: 16px">
                                    <span>
                                       ידעת שמודעות עם תמונות ברורות מקבלות פי 10 יותר פניות?
                                    </span>
                                </div>
                                <div class="sub-title" style="margin: 0; font-size: 16px">
                                    <span>
                                       לא להסס להעלות לפה תמונות (אפשר עד 10 + וידאו) ולהבליט את הצדדים הטובים ביותר של הנכס
                                    </span>
                                </div>

                                <div class="uploads-wrapper792">
                                    <div class="priority-uploads">
                                        <a href="#" class="img1">
                                            <img src="{{ asset('images/add-new-apartments/upload-video.png') }}" alt="">
                                        </a>
                                        <a href="#" class="img2">
                                            <img src="{{ asset('images/add-new-apartments/upload-photo.png') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="underline-accordion5">
                                </div>
                                <div class="sub-title" style="margin: 0; font-size: 23px; font-weight: 400;">
                                    <span>
                                        תמונות שיופיעו בגוף המודעה
                                    </span>
                                </div>
                                <div class="uploads-wrapper792" style="padding: 0; margin: 0">
                                    <a href="#" class="img3">
                                        <img src="{{ asset('images/add-new-apartments/upload-photos-multi.png') }}" alt="">
                                    </a>
                                    <a href="#" class="img3">
                                        <img src="{{ asset('images/add-new-apartments/upload-photos-multi.png') }}" alt="">
                                    </a>
                                    <a href="#" class="img3">
                                        <img src="{{ asset('images/add-new-apartments/upload-photos-multi.png') }}" alt="">
                                    </a>
                                    <a href="#" class="img3">
                                        <img src="{{ asset('images/add-new-apartments/upload-photos-multi.png') }}" alt="">
                                    </a>
                                    <a href="#" class="img3">
                                        <img src="{{ asset('images/add-new-apartments/upload-photos-multi.png') }}" alt="">
                                    </a>
                                    <a href="#" class="img3">
                                        <img src="{{ asset('images/add-new-apartments/upload-photos-multi.png') }}" alt="">
                                    </a>
                                    <a href="#" class="img3">
                                        <img src="{{ asset('images/add-new-apartments/upload-photos-multi.png') }}" alt="">
                                    </a>
                                    <a href="#" class="img3">
                                        <img src="{{ asset('images/add-new-apartments/upload-photos-multi.png') }}" alt="">
                                    </a>
                                    <a href="#" class="img3">
                                        <img src="{{ asset('images/add-new-apartments/upload-photos-multi.png') }}" alt="">
                                    </a>

                                </div>
                                <div class="button-wrapper">
                                    <button type="button" class="btn-back" data-mdb-ripple-color="dark">
                                        חזרה
                                    </button>

                                    <button type="button" class="btn-next" data-mdb-ripple-color="dark">
                                        להמשיך לשלב הבא
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                {{--ACCORDION-6--}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <span class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            <span class="circle-icon">
                                <span class="number-in-circle">
                                    6
                                </span>
                            </span>
                           <span class="title">
                             פרטים ליצירת קשר
                           </span>
                        </span>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <span class="circle-icon">
                                <span class="number-in-circle">
                                    6
                                </span>
                            </span>
                            <div class="title">
                                <div class="right">
                                    פרטים ליצירת קשר
                                </div>
                            </div>

                            <div class="content">
                                <div class="sub-title" style=" font-size: 16px">
                                    <span>
                                      רגע לפני שמפרסמים את המודעה, נבדוק שפרטי הקשר נכונים
                                    </span>
                                </div>
                                <div class="sub-title">
                                    <ul class="parts-3">
                                        <li>
                                            <span class="text-label">
                                                   שם איש קשר
                                            </span>
                                            <span class="star">
                                                     *
                                            </span>
                                            <br>
                                            <input style="color: #999; height: 40px; padding-right: 10px; width: 242px; border: 1px solid #ccc;" type="text" >
                                        </li>
                                        <li>
                                            <span class="text-label">
                                                 טלפון ראשי
                                            </span>
                                            <span class="star">
                                                     *
                                            </span>
                                            <br>
                                            <input style="color: #999; height: 40px; padding-right: 10px; width: 177px; border: 1px solid #ccc;" type="text" >
                                        </li>

                                        <li>
                                            <span class="text-label">

                                            </span>
                                            <br>
                                            <button type="button" class="sub-title_drop_button" style="color: #999; width: 93px; height: 40px; border: 1px solid #ccc;"><span>054</span> <i class="fas fa-chevron-down"></i></button>
                                        </li>
                                        <li>
                                            <span class="text-label">
                                            </span>
                                            <br>
                                            <button type="button" class="checkbtn-accordion6"><i class="fas fa-check"></i><span>אימות מספר טלפון</span> </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="sub-title">
                                    <div class="add-contact-btn">
                                        <a href="#"><i class="far fa-plus-circle"></i><span style="margin-right: 5px">הוספת איש קשר נוסף</span> </a>
                                    </div>
                                </div>
                                <div class="sub-title">
                                    <ul class="parts-3">
                                        <li>
                                            <span class="text-label">
                                                   איש קשר נוסף
                                            </span>
                                            <br>
                                            <input style="color: #999; height: 40px; padding-right: 10px; width: 242px; border: 1px solid #ccc;" type="text" >
                                        </li>
                                        <li>
                                            <span class="text-label">
                                                טלפון נוסף
                                            </span>
                                            <br>
                                            <input style="color: #999; height: 40px; padding-right: 10px; width: 177px; border: 1px solid #ccc;" type="text" >
                                        </li>
                                        <li>
                                            <span class="text-label">

                                            </span>
                                            <br>
                                            <button type="button" class="sub-title_drop_button" style="color: #999; width: 93px; height: 40px; border: 1px solid #ccc;"><span>054</span> <i class="fas fa-chevron-down"></i></button>
                                        </li>
                                        <li>
                                            <span class="text-label">

                                            </span>
                                            <div class="remove-contact-btn">
                                                <a href="#"><i class="fal fa-trash-alt"></i><span style="margin-right: 5px">ביטול</span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="sub-title">
                                    <span class="text-label">
                                              דוא"ל
                                    </span>
                                    <br>
                                    <input style="color: #999; height: 40px; padding-right: 10px; width: 242px; border: 1px solid #ccc;" type="text" >
                                </div>
                                <div class="sub-title" style="position: relative; padding: 0; ">
                                    <input type="checkbox" class="checkbox-accordion4">
                                    <label style="margin-right: 5px; cursor: pointer; font-weight: bold">

                                        קראתי ואישרתי את<span style="color: #ff7100; margin-right: 4px">התקנון,</span> זה חשוב
                                        <span class="star" >*</span>
                                    </label>
                                </div>
                                <div class="sub-title" style="position: relative; padding: 0; ">
                                    <input type="checkbox" class="checkbox-accordion4">
                                    <label style="margin-right: 5px; cursor: pointer">
                                        אני רוצה שתשלחו לי עדכונים למייל
                                    </label>
                                </div>
                                <div class="button-wrapper">
                                    <button type="button" class="btn-back" data-mdb-ripple-color="dark" style="visibility: hidden">
                                        חזרה
                                    </button>

                                    <button type="button" class="btn-next" data-mdb-ripple-color="dark" >
                                        המשך לבחירת מסלול
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--ACCORDION-7--}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSeven">
                        <span class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            <span class="circle-icon">
                                <span class="number-in-circle">
                                   7
                                </span>
                            </span>
                           <span class="title">
                                 סיום פרסום
                           </span>
                        </span>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <span class="circle-icon">
                                <span class="number-in-circle">
                                   7
                                </span>
                            </span>
                            <div class="title">
                                <div class="right">
                                    סיום פרסום
                                </div>
                            </div>

                            <div class="content">
                                <div class="sub-title" style=" font-size: 16px">
                                    <span>
                                     זהו, אנחנו בסוף. לנו נשאר לשמור את המודעה שלך, לך נשאר לבחור את מסלול הפרסום.
                                    </span>
                                </div>
                                <div class="sub-title" style=" font-size: 16px">
                                    <span>אגב, רצינו לספר לך שיש באתר עוד </span>
                                    <span class="number-accordion7-wrap">
                                            <span class="number-accordion7"> 255 </span>
                                        </span>
                                    <span>מודעות דומות לשלך ב</span>
                                    <span>אזור רמות מנשה</span>
                                    <span> שמתחרות על תשומת הלב של </span>
                                    <span>השוכרים</span>
                                    <span>!</span>
                                </div>
                                <div class="sub-title" style=" font-size: 16px">
                                    <span>המלצה שלנו? </span>
                                    <span class="upgrade-text-accordion7">לשדרג </span>
                                    <span>את המודעה, להופיע לפני כולם </span>
                                    <span>ולהתקדם להסכם תיק תק</span>
                                </div>
                                <div class="underline-accordion7">
                                </div>
                                <div class="sub-title" style=" font-size: 16px">
                                    <span>
                                     באיזה מסלול לפרסם את המודעה? זה הרגע לבלוט מעל כולם
                                    </span>
                                </div>


                                <div class="ad-wrapper792">
                                    <div class="basic">
                                        <div class="zone1">
                                            <div class="title">
                                                <span >
                                                    בסיסי
                                                </span>
                                            </div>

                                            <div class="image">
                                                <img src="{{ asset('images/add-new-apartments/7-rocketShip_Free.png') }}" alt="">

                                            </div>

                                        </div>
                                        <div class="zone2">
                                            <div class="text-black">
                                                <i class="fal fa-check"></i>
                                                <span class="text">
                                                    מודעה רגילה בצבע אפור
                                                </span>
                                            </div>
                                            <div class="text-grey">
                                                <i class="fal fa-times"></i>
                                                <span class="text">
                                                    הקפצה אוטומטית לחסכון בזמן
                                                </span>
                                            </div>
                                        </div>
                                        <div class="zone3">
                                            <button class="btn-free">
                                                <span class="price">חינם</span>
                                                <span > /
                                                <span class="days">
                                                    <span >40</span>
                                                    <span > ימים</span>
                                                </span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="vip">
                                        <div class="zone1">
                                            <div class="title">
                                                <span >
                                                    VIP
                                                </span>
                                            </div>
                                            <div class="recommend">
                                                <div class="image">
                                                    <img src="{{ asset('images/add-new-apartments/7-crown.png') }}" alt="">
                                                </div>
                                                <span>
                                                    מומלץ
                                                </span>
                                            </div>
                                            <div class="image">
                                                <img src="{{ asset('images/add-new-apartments/7-rocketShip_VIP.png') }}" alt="">

                                            </div>

                                        </div>
                                        <div class="zone2">
                                            <div class="text-black">
                                                <i class="fal fa-check"></i>
                                                <span class="text">
                                                    מודעה מודגשת בצבע צהוב
                                                </span>
                                            </div>
                                            <div class="text-black">
                                                <i class="fal fa-check"></i>
                                                <span class="text">
                                                   הקפצה אוטומטית לחסכון בזמן
                                                </span>
                                            </div>
                                            <div class="text-black">
                                                <i class="fal fa-check"></i>
                                                <span class="text">
                                                   מופיעה מעל מודעות אפורות וורודות
                                                </span>
                                            </div>

                                        </div>
                                        <div class="zone3">
                                            <button class="btn-vip">
                                                <span class="price">135 ₪</span>
                                                <span > /
                                                <span class="days">
                                                    <span >28</span>
                                                    <span > ימים</span>
                                                </span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="advance">
                                        <div class="zone1">
                                            <div class="title">
                                                <span >
                                                   מודגשת
                                                </span>
                                            </div>

                                            <div class="image">
                                                <img src="{{ asset('images/add-new-apartments/7-rocketShip_Bold.png') }}" alt="">

                                            </div>

                                        </div>
                                        <div class="zone2">
                                            <div class="text-black">
                                                <i class="fal fa-check"></i>
                                                <span class="text">
                                                    מודעה מודגשת בצבע ורוד
                                                </span>
                                            </div>
                                            <div class="text-black">
                                                <i class="fal fa-check"></i>
                                                <span class="text">
                                                    הקפצה אוטומטית לחסכון בזמן
                                                </span>
                                            </div>

                                        </div>
                                        <div class="zone3">
                                            <button class="btn-free">
                                                <span class="price">109 ₪</span>
                                                <span > /
                                                <span class="days">
                                                    <span >28</span>
                                                    <span > ימים</span>
                                                </span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                                <div class="sub-title" style="position: relative; padding: 0; ">
                                    <input type="checkbox" class="checkbox-accordion4">
                                    <label style="margin-right: 5px; cursor: pointer">
                                        אני מאשר קבלת דיוור פרסומי הקשור למודעה שפרסמתי באתר יד 2 (להסרה - יש להוריד את הסימון בתיבה)
                                    </label>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--END ACCORDION--}}
    </div>
</div>
</body>
