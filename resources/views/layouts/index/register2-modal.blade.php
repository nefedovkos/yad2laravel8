{{--MODAL REGISTER2 WINDOW--}}
<div class="container">
    <!-- Modal -->
    <div class="" id="register-modal-second" style="display: none" role="dialog">
        <div class="center-screen" role="document">
            <!-- Modal content-->
            <div class="modal-content" id="login-modal" style="height: 600px">
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
                                   2 הרשמה
                                </span>
                            <span class="button">
                                    <button id="close-register-modal">
                                        <i class="fal fa-times" style="width: 24px; height: 24px"></i>
                                    </button>
                                </span>
                        </div>
                        <div class="text2">
                            הזן את הפרטים כדי להירשם
                        </div>









                        <form action="" class="login-form">
                            <label>
                                שם פרטי
                            </label>
                            <div style="display: flex">
                                <input type="text" placeholder="הקלד שם פרטי">
                            </div>
                            <label>
                                שם משפחה
                            </label>
                            <div style="display: flex">
                                <input type="text" placeholder="הקלד שם משפחה">
                            </div>

                            <label>
                                מספר טלפון
                            </label>
                            <div style="display: flex">
                                <input type="text" placeholder="טלפון" style="width: 206px">
                                <select class="select-telephone" style="width: 88px">
                                    <option value="51">051</option>
                                    <option value="52">052</option>
                                    <option value="53">053</option>
                                    <option value="54">054</option>
                                    <option value="55">055</option>
                                    <option value="58">058</option>
                                </select>
                            </div>
                            <label>
                                תאריך לידה
                            </label>
                            <div style="display: flex">
                                <input type="date" placeholder="בחר תאריך לידה" value="בחר תאריך לידה"
                                       style="    font-family: Rubik; position: relative; width: 238px;color: #363636;border-radius: 2px;border: 1px solid #ccc; padding: 8px 15px 8px 30px!important;font-size: 1rem; border-radius: 4px;">
                            </div>
                            <div style="display: flex; margin-top: 20px; margin-right: 2px ">
                                <input type="checkbox"
                                       style="height: 16px; width: 16px; background-color: #fff; border: 1px solid #363636; border-radius: 2px; position: relative; top: 5px">
                                <span style="margin-right: 5px; position: relative; top: -2px">קראתי ומאשר את <a
                                        href="https://www.yad2.co.il/eula" target="_blank">תקנון</a> האתר</span>
                            </div>
                            <div style="display: flex; margin-top: 5px; margin-right: 2px ">
                                <input type="checkbox"
                                       style="height: 16px; width: 16px; background-color: #fff; border: 1px solid #363636; border-radius: 2px; position: relative; top: 5px">
                                <span style="margin-right: 5px; position: relative; top: -2px">מאשר קבלת דיוור פרסומי כללי מיד2</span>
                            </div>
                            <button class="login-btn" style="margin-top: 50px">
                                המשך
                            </button>
                            <div class="last-text">
                                <span>
                                   כבר רשום?
                                </span>
                                <span style="margin-left: 5px">
                                    <a href="#" id="login-back-btn">להתחברות </a>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
{{--END MODAL REGISTER2 WINDOW--}}
