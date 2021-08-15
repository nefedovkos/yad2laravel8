<!doctype html>
<html dir="rtl" lang="il">

<head>
    @extends('layouts.index.header')
    @extends('layouts.add-apartment.header')
</head>

<body>
    @include('layouts.add-apartment.navbar')
    <div class="details">
        <div class="wrapper-880">
            {{-- ACCORDION --}}
            <div class="accordion" id="accordionExample">
                <div class="accordion" id="accordionExample">



                    {{-- <form method="POST" class="login-form" action="{{ route('check.apartment') }}">
                        @csrf --}}
                        {{-- ACCORDION-5 --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <span class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
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
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
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
                                                <img class=""
                                                    src="{{ asset('images/add-new-apartments/4-light-bulb-on.png') }}"
                                                    alt="">
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
                                                לא להסס להעלות לפה תמונות (אפשר עד 10 + וידאו) ולהבליט את הצדדים הטובים
                                                ביותר של הנכס
                                            </span>
                                        </div>

                                        <div class="uploads-wrapper792">
                                            <div class="priority-uploads">
                                                <a href="#" class="img1">
                                                    <img src="{{ asset('images/add-new-apartments/upload-video.png') }}"
                                                        alt="">
                                                </a>
                                                <a href="#" class="img2">
                                                    <img src="{{ asset('images/add-new-apartments/upload-photo.png') }}"
                                                        alt="">
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




                                        <div style="background-color: rgb(209, 209, 241); width: 100%; height:500px">
                                            <a href="#"  onclick="defaultBtnActive()" id="custom-btn" class="img3">
                                                <img id="img1" style="width: 220px; height: 166px" src="{{ asset('images/add-new-apartments/upload-photos-multi.png') }}" alt="">
                                            </a>
                                            <input type="file" id="default-btn" hidden>
                                        </div>









                                        <div class="uploads-wrapper792" style="padding: 0; margin: 0">







                                            <a href="#" class="img3">
                                                <img src="{{ asset('images/add-new-apartments/upload-photos-multi.png') }}"
                                                    alt="">
                                            </a>





                                            <a href="#" class="img3">
                                                <img src="{{ asset('images/add-new-apartments/upload-photos-multi.png') }}"
                                                    alt="">
                                            </a>
                                            <a href="#" class="img3">
                                                <img src="{{ asset('images/add-new-apartments/upload-photos-multi.png') }}"
                                                    alt="">
                                            </a>
                                            <a href="#" class="img3">
                                                <img src="{{ asset('images/add-new-apartments/upload-photos-multi.png') }}"
                                                    alt="">
                                            </a>
                                            <a href="#" class="img3">
                                                <img src="{{ asset('images/add-new-apartments/upload-photos-multi.png') }}"
                                                    alt="">
                                            </a>
                                            <a href="#" class="img3">
                                                <img src="{{ asset('images/add-new-apartments/upload-photos-multi.png') }}"
                                                    alt="">
                                            </a>
                                            <a href="#" class="img3">
                                                <img src="{{ asset('images/add-new-apartments/upload-photos-multi.png') }}"
                                                    alt="">
                                            </a>
                                            <a href="#" class="img3">
                                                <img src="{{ asset('images/add-new-apartments/upload-photos-multi.png') }}"
                                                    alt="">
                                            </a>
                                            <a href="#" class="img3">
                                                <img src="{{ asset('images/add-new-apartments/upload-photos-multi.png') }}"
                                                    alt="">
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
                        {{-- END ACCORDION-5 --}}
                    {{-- </form> --}}
                </div>
            </div>
            {{-- END ACCORDION --}}
        </div>
    </div>
</body>
