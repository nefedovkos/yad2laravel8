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

                    <select name="a4-paymentInYear" style="width: 208px !important;"
                    class="part2-select-type form-control @error('a3-paymentInYear') is-invalid @enderror"
                    title="מספר תשלומים" required>
                        <option value="" selected disabled>בחירת מספר תשלומים</option>
                        <option  index="0" value="1"><span  class="option-text">&nbsp;1</span></option>
                        <option  index="1" value="2"><span  class="option-text">&nbsp;2</span></option>
                        <option  index="2" value="3"><span  class="option-text">&nbsp;3</span></option>
                        <option  index="3" value="4"><span  class="option-text">&nbsp;4</span></option>
                        <option  index="4" value="5"><span  class="option-text">&nbsp;5</span></option>
                        <option  index="5" value="6"><span  class="option-text">&nbsp;6</span></option>
                        <option  index="6" value="7"><span  class="option-text">&nbsp;7</span></option>
                        <option  index="7" value="8"><span  class="option-text">&nbsp;8</span></option>
                        <option  index="8" value="9"><span  class="option-text">&nbsp;9</span></option>
                        <option  index="9" value="10"><span  class="option-text">&nbsp;10</span></option>
                        <option  index="10" value="11"><span  class="option-text">&nbsp;11</span></option>
                        <option  index="11" value="12"><span  class="option-text">&nbsp;12</span></option>
                        <option  index="12" value="13"><span  class="option-text">&nbsp;גמיש</span></option>
                    </select>
            </div>
                <div class="sub-title">
                                    <span class="text-label">
                                        ועד בית
                                    </span>
                    <br>

                    <input id="a4-houseCommittee" style="width: 208px !important;" type="text"  placeholder="הכנסת סכום תשלום לועד בית"
                    class="form-control @error('a4-houseCommittee') is-invalid @enderror" name="a4-houseCommittee"
                    value="{{ old('houseCommittee') }}" required autofocus>

                    @error('a4-houseCommittee')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="sub-title">
                                    <span class="text-label">
                                    ארנונה לחודשיים
                                    </span>
                    <br>
                    <input id="a4-arnona" style="width: 208px !important;" type="text"   placeholder="סכום הארנונה לתשלום"
                    class="form-control @error('a4-arnona') is-invalid @enderror" name="a4-arnona"
                    value="{{ old('a4-arnona') }}" required autofocus>

                    @error('a4-arnona')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="sub-title">
                                    <span class="text-label">
                                    מ"ר בנוי
                                    </span>

                    <br>


                    <input id="a4-sqmBuilt" style="width: 208px !important;" type="text"   placeholder=' כמה מ"ר יש בנכס'
                    class="form-control @error('a4-sqmBuilt') is-invalid @enderror" name="a4-sqmBuilt"
                    value="{{ old('a4-sqmBuilt') }}" required autofocus>

                    @error('a4-sqmBuilt')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="sub-title">
                                    <span class="text-label">
                                    גודל במ"ר סך הכל
                                    </span>
                    <span class="star">
                                        *
                                    </span>
                    <br>
                    <input id="a4-squareMeter" style="width: 208px !important;" type="text"
                    class="form-control @error('a4-squareMeter') is-invalid @enderror" name="a4-squareMeter"
                    value="{{ old('a4-squareMeter') }}" required autofocus>

                    @error('a4-squareMeter')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="sub-title" style="position: relative">
                                    <span class="text-label" >
                                    מחיר
                                    </span>

                    <br>
                    <i class="fal fa-shekel-sign" style="font-size: 1.3em; position: absolute; bottom: 10px; right: 200px; color: #999;"></i>

                    <input id="a4-price" style="width: 208px !important;" type="text" placeholder='סכום מינימלי 100'
                    class="form-control @error('a4-price') is-invalid @enderror" name="a4-price"
                    value="{{ old('a4-price') }}" required autofocus>

                    @error('a4-price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                {{--TODO make calendar on jQuery--}}
                <div class="sub-title" style="position: relative">
                                    <span class="text-label" >
                                    מחיר
                                    </span>

                    <br>

                    <div style="display: flex; flex-direction: row">

                        <input  name="a4-date" class="form-control @error('a4-date') is-invalid @enderror" style="color: #999; height: 42px; padding-right: 10px; width: 208px !important" type="date" placeholder='DD/MM/YYYY'>

                        <input type="checkbox" name="a4-immediate"
                        style="height: 30px; width: 30px; position: relative; top: 5px; margin-right: 15px; ">
                            <span style="position: relative; top: 10px; margin-right: 10px; width: 150px !important;">מיידי</span>
                    </div>
                </div>


                <div style="display: flex; flex-direction: row">

                        <input type="checkbox" name="a4-longTerm"
                    style="height: 30px; width: 30px; position: relative; top: 5px; margin-right: 20px; margin-top: 10px; ">
                        <span style="position: relative; top: 20px; margin-right: 10px; width: 150px !important;">לטווח ארוך</span>
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
{{--END ACCORDION-4--}}
