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

                        <select name="a3-rooms" style="width: 196px !important;"
                        class="part2-select-type form-control @error('a3-rooms') is-invalid @enderror"
                        title="מספר חדרים" required>
                            <option value="" selected disabled>בחירת מספר חדרים</option>
                            <option  index="0" value="0"><span  class="option-text">&nbsp;0</span></option>
                            <option  index="1" value="1"><span  class="option-text">&nbsp;1</span></option>
                            <option  index="2" value="1.5"><span  class="option-text">&nbsp;1.5</span></option>
                            <option  index="3" value="2"><span  class="option-text">&nbsp;2</span></option>
                            <option  index="4" value="2.5"><span  class="option-text">&nbsp;2.5</span></option>
                            <option  index="5" value="3"><span  class="option-text">&nbsp;3</span></option>
                            <option  index="6" value="3.5"><span  class="option-text">&nbsp;3.5</span></option>
                            <option  index="7" value="4"><span  class="option-text">&nbsp;4</span></option>
                            <option  index="8" value="4.5"><span  class="option-text">&nbsp;4.5</span></option>
                            <option  index="9" value="5"><span  class="option-text">&nbsp;5</span></option>
                            <option  index="10" value="5.5"><span  class="option-text">&nbsp;5.5</span></option>
                            <option  index="11" value="6"><span  class="option-text">&nbsp;6</span></option>
                            <option  index="12" value="6.5"><span  class="option-text">&nbsp;6.5</span></option>
                            <option  index="13" value="7"><span  class="option-text">&nbsp;7</span></option>
                            <option  index="14" value="8"><span  class="option-text">&nbsp;8</span></option>
                            <option  index="15" value="9"><span  class="option-text">&nbsp;9</span></option>
                            <option  index="16" value="10"><span  class="option-text">&nbsp;10</span></option>
                            <option  index="17" value="11"><span  class="option-text">&nbsp;11</span></option>
                            <option  index="18" value="12"><span  class="option-text">&nbsp;12</span></option>
                            <option  index="19" value="12.5"><span  class="option-text">&nbsp;12.5</span></option>
                        </select>






                        {{-- <button type="button" class="sub-title_drop_button"><span>בחירת מספר חדרים</span> <i class="fas fa-chevron-down"></i></button> --}}
                    </div>
                    <div class="sub-title">
                                        <span class="First-group">
                                        חניה
                                        </span>
                        <br>
                        <div class="btn-group" role="group" aria-label="Second-group" style="direction: ltr" required>
                            <button type="radio" class="btn btn4" name="a3-parking" >3</button>
                            <button type="radio" class="btn btn3" name="a3-parking" >2</button>
                            <button type="radio" class="btn btn2" name="a3-parking" >1</button>
                            <button type="radio" class="btn btn1" name="a3-parking" >ללא</button>
                        </div>
                    </div>
                    <div class="sub-title">
                                        <span class="Second-group">
                                        מרפסת
                                        </span>
                        <br>
                        <div class="btn-group" role="group" aria-label="Second-group" style="direction: ltr" required>
                            <button type="radio" class="btn btn4" name="a3-balcony" >3</button>
                            <button type="radio" class="btn btn3" name="a3-balcony" >2</button>
                            <button type="radio" class="btn btn2" name="a3-balcony" >1</button>
                            <button type="radio" class="btn btn1" name="a3-balcony" >ללא</button>
                        </div>
                    </div>
                    <div class="sub-title">
                                        <span class="text-bold">
                                        מאפייני הנכס
                                        </span>
                        <br>

                        {{--TODO change this divs to checkboxes--}}
                        {{-- <div class="items-container" style="display: flex; ; justify-content: space-between; margin-top: 20px"> --}}
                            <div class="items-container" style="display: flex; ; flex-direction : row; margin-top: 20px">
                            <div class="column" style="margin-left: 30px" required>
                                <button type="checkbox" class="row border-btn" name="a3-air">
                                                    <span class="row-icon float-right" >
                                                        <img src="{{ asset('images/apartments_addition/01.jpg') }}" alt="">
                                                    </span>
                                    <span class="row-text">
                                                        מיזוג
                                                    </span>
                                </button>
                                <button type="checkbox" class="row border-btn" name="a3-lift">
                                                    <span class="row-icon" >
                                                        <img src="{{ asset('images/apartments_addition/02.jpg') }}" alt="">
                                                    </span>
                                    <span class="row-text">
                                                            מעלית
                                                    </span>
                                </button>
                                <button type="checkbox" class="row border-btn" name="a3-warhause">
                                    <span class="row-icon" >
                                        <img src="{{ asset('images/apartments_addition/03.jpg') }}" alt="">
                                    </span>
                                    <span class="row-text">
                                            מחסן
                                    </span>
                                </button>
                                <button type="checkbox" class="row border-btn" name="a3-furniture">
                                    <span class="row-icon" >
                                        <img src="{{ asset('images/apartments_addition/04.jpg') }}" alt="">
                                    </span>
                                    <span class="row-text">
                                        ריהוט
                                    </span>
                                </button>
                            </div>
                            <div class="column" style="margin-left: 30px">
                                <button type="checkbox" class="row border-btn" name="a3-join">
                                    <span class="row-icon" >
                                        <img src="{{ asset('images/apartments_addition/05.jpg') }}" alt="">
                                    </span>
                                    <span class="row-text">
                                        לשותפים
                                    </span>
                                </button>
                                <button type="checkbox" class="row border-btn" name="a3-invalid">
                                    <span class="row-icon" >
                                        <img src="{{ asset('images/apartments_addition/06.jpg') }}" alt="">
                                    </span>
                                    <span class="row-text">
                                        גישה לנכים
                                    </span>
                                </button>
                                <button type="checkbox" class="row border-btn" name="a3-animal">
                                    <span class="row-icon" >
                                        <img src="{{ asset('images/apartments_addition/07.jpg') }}" alt="">
                                    </span>
                                    <span class="row-text">
                                        חיות מחמד
                                    </span>
                                </button>
                                <button type="checkbox" class="row border-btn" name="a3-longtime">
                                    <span class="row-icon" >
                                        <img src="{{ asset('images/apartments_addition/08.jpg') }}" alt="">
                                    </span>
                                    <span class="row-text">
                                        לטווח ארוך
                                    </span>
                                </button>
                            </div>
                            <div class="column" style="margin-left: 30px">
                                <button type="checkbox" class="row border-btn" name="a3-bars">
                                    <span class="row-icon" >
                                        <img src="{{ asset('images/apartments_addition/09.jpg') }}" alt="">
                                    </span>
                                    <span class="row-text">
                                        סורגים
                                    </span>
                                </button>
                                <button type="checkbox" class="row border-btn" name="a3-renovated">
                                    <span class="row-icon" >
                                        <img src="{{ asset('images/apartments_addition/10.jpg') }}" alt="">
                                    </span>
                                    <span class="row-text">
                                        משופצת
                                    </span>
                                </button>
                                <button type="checkbox" class="row border-btn" name="a3-pandorDoors">
                                    <span class="row-icon" >
                                        <img src="{{ asset('images/apartments_addition/11.jpg') }}" alt="">
                                    </span>
                                    <span class="row-text">
                                        דלתות פנדור
                                    </span>
                                </button>
                                <button type="checkbox" class="row border-btn" name="a3-shelter">
                                    <span class="row-icon" >
                                        <img src="{{ asset('images/apartments_addition/12.jpg') }}" alt="">
                                    </span>
                                    <span class="row-text">
                                        ממ"ד
                                    </span>
                                </button>
                            </div>
                            <div class="column" style="margin-left: 30px">
                                <button type="checkbox" class="row border-btn" name="a3-kosherKitchen">
                                    <span class="row-icon" >
                                        <img src="{{ asset('images/apartments_addition/13.jpg') }}" alt="">
                                    </span>
                                    <span class="row-text">
                                        מטבח כשר
                                    </span>
                                </button>
                                <button type="checkbox" class="row border-btn" name="a3-housingUnit">
                                    <span class="row-icon" >
                                        <img src="{{ asset('images/apartments_addition/14.jpg') }}" alt="">
                                    </span>
                                    <span class="row-text">
                                    יחידת דיור
                                    </span>
                                </button>
                                <button type="checkbox" class="row border-btn" name="a3-tadiran">
                                                    <span class="row-icon" >
                                                        <img src="{{ asset('images/apartments_addition/15.jpg') }}" alt="">
                                                    </span>
                                    <span class="row-text">
                                                        מזגן תדיראן
                                                    </span>
                                </button>
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
                        <div class="textarea-title">
                            <span>
                                פרוט הנכס
                            </span>
                            <div>
                                <span>
                                    400/
                                </span>
                                <span id="textarea-counter">
                                    0
                                </span>
                            </div>

                        </div>
                        <div class="textarea"><textarea onkeyup="countChar(this)" name="about-apartment" style="width: 395px; height: 156px" maxlength="400" cols="5" placeholder="זה המקום לתאר את הפרטים הבולטים, למשל, האם נערך שיפוץ במבנה, מה שופץ, כיווני אוויר, האווירה ברחוב וכו'" id="textarea-field"  title="פרוט הנכס" required></textarea></div>


                        <div class="button-wrapper">
                            <button type="button" class="btn-back" data-mdb-ripple-color="dark">
                                חזרה
                            </button>

                            <button type="submit" class="btn-next" data-mdb-ripple-color="dark">
                                להמשיך לשלב הבא
                            </button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
    {{--END ACCORDION-3--}}
