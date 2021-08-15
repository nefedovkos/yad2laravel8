        {{--ACCORDION-2--}}
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <span class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
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
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                 data-bs-parent="#accordionExample">
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
                                  <img class="" src="{{ asset('images/add-new-apartments/2-video.png') }}"
                                       alt="">
                            </span>
                            <span class="bold-text">
                                    המלצה שלנו
                            </span>
                            <span class="regular-text">
                                    העלאת וידאו של הנכס תמשוך יותר מתעניינים למודעה שלך
                            </span>
                        </div>

                    </div>
                    {{-- <form method="POST" class="login-form" action="{{ route('check.apartment') }}">
                        @csrf --}}
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


                                <select name="a2-apartment-type" style="width: 264px !important;"
                                        class="part2-select-type form-control @error('a2-apartment-type') is-invalid @enderror"
                                        title="סוג הנכס" required>
                                    <option value="" selected disabled>דירה או אולי פנטהאוז?</option>
                                    <option value="1"><span class="option-text">&nbsp;דירה</span></option>
                                    <option value="2"><span class="option-text">&nbsp;דירת גן</span></option>
                                    <option value="3"><span class="option-text">&nbsp;בית פרטי/קוטג'</span>
                                    </option>
                                    <option value="4"><span class="option-text">&nbsp;גג/פנטהאוז</span></option>
                                    <option value="5"><span class="option-text">&nbsp;מגרשים</span></option>
                                    <option value="6"><span class="option-text">&nbsp;דופלקס</span></option>
                                    <option value="7"><span class="option-text">&nbsp;דירת נופש</span></option>
                                    <option value="8"><span class="option-text">&nbsp;דו משפחתי</span></option>
                                    <option value="9"><span class="option-text">&nbsp;מרתף/פרטר</span></option>
                                    <option value="10"><span class="option-text">&nbsp;טריפלקס</span></option>
                                    <option value="11"><span class="option-text">&nbsp;יחידת דיור</span>
                                    </option>
                                    <option value="12"><span class="option-text">&nbsp;משק חקלאי/נחלה</span>
                                    </option>
                                    <option value="13"><span class="option-text">&nbsp;משק עזר</span></option>
                                    <option value="14"><span class="option-text">&nbsp;דיור מוגן</span></option>
                                    <option value="15"><span class="option-text">&nbsp;החלפת דירות</span>
                                    </option>
                                    <option value="16"><span class="option-text">&nbsp;סאבלט</span></option>
                                    <option value="17"><span class="option-text">&nbsp;בניין מגורים</span>
                                    </option>
                                    <option value="18"><span class="option-text">&nbsp;סטודיו/לופט</span>
                                    </option>
                                    <option value="19"><span class="option-text">&nbsp;מחסן</span></option>
                                    <option value="20"><span
                                            class="option-text">&nbsp;קב' רכישה/ זכות לנכס</span></option>
                                    <option value="21"><span class="option-text">&nbsp;חניה</span></option>
                                    <option value="22"><span class="option-text">&nbsp;כללי</span></option>
                                </select>
                                @error('a2-apartment-type')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror

                            </div>
                            <div class="sub-title">
                            <span class="text-label">
                               ישוב
                            </span>
                                <span class="star">
                                *
                            </span>
                                <br>
                                <input id="a2-city" style="width: 264px !important;" type="text"
                                       placeholder="איפה נמצא הנכס?"
                                       class="form-control @error('a2-city') is-invalid @enderror" name="a2-city"
                                       value="{{ old('city') }}" required autofocus>

                                @error('a2-city')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror


                            </div>
                            <div class="sub-title">
                            <span class="text-label">
                               רחוב
                            </span>
                                <br>
                                <input id="a2-street" style="width: 264px !important;" type="text"
                                       placeholder="הכנסת שם הרחוב"
                                       class="form-control @error('a2-street') is-invalid @enderror" name="a2-street"
                                       value="{{ old('street') }}" required autofocus>

                                @error('a2-street')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

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
                                <input id="a2-apatrtment-number" style="width: 130px !important;" type="text"
                                       class="form-control @error('a2-apatrtment-number') is-invalid @enderror"
                                       name="a2-apatrtment-number" value="{{ old('apatrtment-number') }}" required
                                       autofocus>
                                @error('a2-apatrtment-number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                {{--                                    <input style="color: #999; height: 40px; padding-right: 10px; width: 130px" type="text" --}}{{--placeholder="הכנסת שם הרחוב"--}}{{-->--}}
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
                                        <input id="a2-apatrtment-floor" placeholder="הכנסת מספר קומה"
                                               style="width: 177px !important;" type="text"
                                               class="form-control @error('a2-apatrtment-floor') is-invalid @enderror"
                                               name="a2-apatrtment-floor" value="{{ old('a2-apatrtment-floor') }}"
                                               required autofocus>
                                        @error('a2-apatrtment-floor')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        {{--                                            <input style="color: #999; height: 40px; padding-right: 10px; width: 177px" type="text" placeholder="הכנסת מספר קומה">--}}
                                    </li>
                                    <li>
                                    <span class="text-label">
                                          סה"כ קומות בבניין
                                    </span>
                                        <span class="star">
                                             *
                                    </span>
                                        <br>
                                        <input id="a2-apatrtment-floor-max" placeholder='הכנסת סה"כ קומות'
                                               style="width: 177px !important;" type="text"
                                               class="form-control @error('a2-apatrtment-floor-max') is-invalid @enderror"
                                               name="a2-apatrtment-floor-max"
                                               value="{{ old('a2-apatrtment-floor-max') }}" required autofocus>
                                        @error('a2-apatrtment-floor-max')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </li>
                                    <li style="display: flex;flex-direction: row">
                                        <input type="checkbox" name="a2-is-on-stand"
                                               style="height: 30px; width: 30px; position: relative; top: 27px;">
                                        <span style="position: relative; top: 32px; margin-right: 15px; width: 150px !important;">על עמודים</span>

                                    </li>
                                </ul>
                            </div>
                            <div class="sub-title">
                            <span class="text-label">
                               שכונה
                            </span>
                                <br>
                                <input id="a2-parked" style="width: 264px !important;" type="text"
                                       placeholder="הכנסת שם שחונה"
                                       class="form-control @error('a2-parked') is-invalid @enderror" name="a2-parked"
                                       value="{{ old('a2-parked') }}" required autofocus>

                                @error('a2-parked')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
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
                                <input id="a2-parked-sector" style="width: 264px !important;" type="text"
                                       placeholder="בחירת אזור השכרה"
                                       class="form-control @error('a2-parked-sector') is-invalid @enderror" name="a2-parked-sector"
                                       value="{{ old('a2-parked-sector') }}" required autofocus>

                                @error('a2-parked-sector')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>

                            <div style="display: flex;flex-direction: row; width: 792px !important; margin: 20px 20px">
                                <input type="checkbox" name="a2-monthly-ad"
                                       style="height: 30px !important; width: 30px !important;">
                                <span class="text-label" style="margin-right: 15px;">אני רוצה לקבל עדכון חודשי במייל עם הערכת שווי מעודכנת עבור הנכס, עסקאות באזור והצעות מקצועיות מיועצי נדל"ן</span>
                            </div>
                            <div class="button-wrapper">

                                <button class="btn-back">
                                    {{ __('חזרה') }}
                                </button>
                                <button type="submit" class="btn-next">
                                    {{ __('להמשיך לשלב הבא') }}
                                </button>

                            </div>
                        </div>

                    {{-- </form> --}}
                </div>
            </div>
        </div>
        {{--END ACCORDION-2--}}
