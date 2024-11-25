@extends('layouts.app')
@push('styles')
<link rel="stylesheet" href="{{ asset('user/css/max587/common.css') }}" type="text/css">

<link rel="stylesheet" href="{{ asset('user/css/max587/styleuser.css') }}" type="text/css">

<script src="{{ asset('user/js/jquery-1.8.3.min.js') }}"></script>
<script src="{{ asset('user/js/jquery-ui-1.9.2.custom.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('user/css/max587/jquery-ui-1.9.2.custom.min.css') }}" type="text/css">
<script src="{{ asset('user/js/jquery.menu.js') }}"></script>
<script type="text/javascript" src="{{ asset('user/js/common.js') }}"></script>
<script type="text/javascript" src="{{ asset('user/js/t_user_common.js') }}"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css?v=20240115452" />
@endpush
@section('content')
<a name="g4_head"></a>


<div id="new_gift_box" style="display:none;">
    <div class="jb-text">
        <p><span data='status_data_1' style='font-size:30px; font-weight:bold; color:#fff;'></span></p>
    </div>
</div>


<div id="wrap">

    <section>
        <div id="main">

            <style>
                input {
                    padding-left: 3px;
                    font-weight: bold;
                }

                #main {
                    width: 100%;
                    margin: 0;
                    padding: 0;
                }

                #register_new .font-18 {
                    font-size: 18px;
                }

                #register_new .font-16 {
                    font-size: 16px;
                }

                #register_new .font-14 {
                    font-size: 14px;
                }

                #register_new .font-12 {
                    font-size: 12px;
                }

                #register_new .font-b {
                    font-weight: 700;
                }

                #register_new .color-999 {
                    color: #999;
                }

                #register_new .color-000 {
                    color: #000;
                }

                #register_new .letter-05 {
                    letter-spacing: -0.5px;
                }

                #register_new .fl {
                    float: left;
                }

                #register_new .fr {
                    float: right;
                }

                #register_new .cb {
                    clear: both;
                }

                .required,
                textarea.required {
                    background-position: right 5px center !important;
                }

                /* } */

                /* 회원가입 { */
                #register_new {
                    width: 100%;
                    height: 100%;
                }

                #register_new .sub_div {
                    padding-top: 50px;
                    padding-bottom: 150px;
                }

                /*background:transparent*/
                #register_new .login_div {
                    width: 450px;
                    margin: 0 auto;
                    background: rgb(20, 21, 25, 0.9);
                    border-radius: 15px;
                    box-shadow: 30px 30px 70px rgba(0, 0, 0, 0.1);
                }

                #register_new .login_wrap_1 {
                    padding: 40px 40px 40px 40px;
                    text-align: center;
                }

                #register_new .login_wrap_1 ul {
                    list-style: none;
                    padding-left: 0px;
                }

                #register_new .ci_full {
                    width: 120px;
                }

                #register_new .api_join {
                    border-top: 1px solid #eee;
                    padding: 40px;
                }

                #register_new .reg_input_id {
                    margin-top: 10px;
                    position: relative;
                }

                #register_new .reg_input_id svg {
                    position: absolute;
                    top: 12px;
                    right: 12px;
                }

                #register_new .reg_input_nick {
                    margin-top: 10px;
                    position: relative;
                }

                #register_new .reg_input_nick svg {
                    position: absolute;
                    top: 12px;
                    right: 12px;
                }

                #register_new .reg_input_pw {
                    margin-top: 10px;
                    position: relative;
                }

                #register_new .reg_input_pw svg {
                    position: absolute;
                    top: 12px;
                    right: 12px;
                }

                #register_new .reg_input_bank {
                    margin-top: 20px;
                    position: relative;
                }

                #register_new .reg_input_bank svg {
                    position: absolute;
                    top: 12px;
                    right: 12px;
                }

                #register_new .reg_input_acount {
                    margin-top: 10px;
                    position: relative;
                }

                #register_new .reg_input_acount svg {
                    position: absolute;
                    top: 12px;
                    right: 12px;
                }

                #register_new .reg_input_bank_name {
                    margin-top: 10px;
                    position: relative;
                }

                #register_new .reg_input_bank_name svg {
                    position: absolute;
                    top: 12px;
                    right: 12px;
                }

                #register_new .reg_input_recom {
                    margin-top: 10px;
                    position: relative;
                }

                #register_new .reg_input_recom svg {
                    position: absolute;
                    top: 12px;
                    right: 12px;
                }

                #register_new .reg_input_capt {
                    margin-top: 10px;
                    position: relative;
                }

                #register_new .reg_input_capt svg {
                    position: absolute;
                    top: 12px;
                    right: 12px;
                }


                #register_new .login_input_id {
                    margin-top: 30px;
                    position: relative;
                }

                #register_new .login_input_id svg {
                    position: absolute;
                    top: 12px;
                    right: 12px;
                }

                #register_new .login_input_pw {
                    margin-top: 10px;
                    position: relative;
                }

                #register_new .login_input_pw svg {
                    position: absolute;
                    top: 12px;
                    right: 12px;
                }

                #register_new .login_input {
                    width: 100%;
                    text-indent: 15px;
                    height: 48px;
                    background-color: #f1f1f1;
                    border: 0px;
                    border-radius: 4px;
                    color: #000;
                }

                #register_new .login_input:focus {
                    outline: none !important;
                    box-shadow: none !important;
                    border: 0px !important;
                }

                #register_new .login_b {
                    margin-top: 10px;
                    font-size: 13px;
                }

                #register_new .login_b_li1 {
                    float: left;
                    margin-top: 2px;
                }

                #register_new .login_b_li2 {
                    float: right;
                }

                #register_new .login_btn_d {
                    margin-top: 25px;
                }

                #register_new .login_btns {
                    width: 100%;
                    height: 48px;
                    background-color: #ba6dff;
                    border: 0px;
                    border-radius: 4px;
                    color: #fff;
                    text-align: center;
                    cursor: pointer;
                }

                #register_new .join_btns {
                    width: 100%;
                    height: 48px;
                    background-color: #24b2e5;
                    border: 0px;
                    border-radius: 4px;
                    color: #fff;
                    text-align: center;
                    cursor: pointer;
                }

                #register_new #login_password_lost {
                    display: inline-block;
                    border: 1px solid #eee;
                    color: #999;
                    border-radius: 4px;
                    padding: 2px 5px;
                    line-height: 20px;
                }

                #register_new .login_logo img {
                    max-height: 80px;
                }

                @media all and (max-width:1024px) {
                    #register_new .sub_div {
                        padding-top: 10px;
                        padding-bottom: 50px;
                    }

                    #register_new .login_wrap_1 {
                        padding: 20px 20px 20px 20px;
                    }

                    #register_new .login_div {
                        width: 90%;
                        border-radius: 10px;
                        box-shadow: none;
                    }

                    #register_new .login_logo img {
                        max-height: 80px;
                    }
                }
            </style>
            <div class="main_wrap" id="register_new">
                <div class="sub_div">
                    <div class="" style="text-align:center; padding-bottom:10px;">
                        <a href=".."><img src="/imgidt/logo.png?cache=2024112416273040632" height=50px; /></a>
                    </div>

                    <div class="login_div">

                        <div class="login_wrap_1">
                            <form id="fregister" method="post" action="{{ route('register') }}" class="register_form"
                                enctype="multipart/form-data">
                                @csrf
                                <ul>
                                    <li class="reg_input_nick">

                                        <input type="text" class="login_input letter-05 font-14" name="name"
                                            id="reg_mb_nick" placeholder="닉네임 (nick name)" maxLength="20" required
                                            autocomplete="on" value="" />
                                        @error('name')
                                        <span id='msg_mb_nick' style="color: red;">{{ $message }}</span>
                                        @enderror
                                    </li>

                                    <li class="reg_input_pw">
                                        <input type="password" class="login_input letter-05 font-14"
                                            name="password" id="reg_mb_password" placeholder="비밀번호 (mật khẩu)"
                                            maxLength="20" required autocomplete="on">
                                        (Bạn có thể nhập mật khẩu nhiều hơn 4 ký tự bằng tiếng Anh, số và ký tự đặc
                                        biệt.)
                                        @error('password')
                                        <span id='msg_mb_password' style="color: red;">{{ $message }}</span>
                                        @enderror
                                    </li>

                                    <li class="reg_input_pw">
                                        <input type="password" class="login_input letter-05 font-14"
                                            name="password_confirmation" id="reg_mb_password_re"
                                            placeholder="비밀번호 확인 (kiểm tra mật khẩu)" maxLength="20" required
                                            autocomplete="on">
                                        @error('password_confirmation')
                                        <span id='msg_mb_password_re' style="color: red;">{{ $message }}</span>
                                        @enderror
                                    </li>

                                    (số điện thoại di động)

                                    <li class="reg_input_bank">

                                        <select name="bank_name" id="bank_mb_2" class="login_input letter-05 font-14">
                                            <option value="">선택하세요 (tên ngân hàng)</option>
                                            <option value='SC제일은행'>SC제일은행</option>
                                            <option value='경남(BNK)'>경남(BNK)</option>
                                            <option value='광주(KWANGJU)'>광주(KWANGJU)</option>
                                            <option value='국민(KB)'>국민(KB)</option>
                                            <option value='기업(IBK)'>기업(IBK)</option>
                                            <option value='농협(NH)'>농협(NH)</option>
                                            <option value='대구(Deagu)'>대구(Deagu)</option>
                                            <option value='부산(Busan)'>부산(Busan)</option>
                                            <option value='산림조합'>산림조합</option>
                                            <option value='산업(KDB)'>산업(KDB)</option>
                                            <option value='새마을금고(KFCC)'>새마을금고(KFCC)</option>
                                            <option value='수협(Suhyup)'>수협(Suhyup)</option>
                                            <option value='신한(Shinhan)'>신한(Shinhan)</option>
                                            <option value='신협(NACUFOK)'>신협(NACUFOK)</option>
                                            <option value='씨티(Citi Bank)'>씨티(Citi Bank)</option>
                                            <option value='우리(Woori)'>우리(Woori)</option>
                                            <option value='우체국(KoreaPost)'>우체국(KoreaPost)</option>
                                            <option value='저축(SB)'>저축(SB)</option>
                                            <option value='전북(Chunbuk)'>전북(Chunbuk)</option>
                                            <option value='제주(Jeju)'>제주(Jeju)</option>
                                            <option value='카카오뱅크(Kakao Bank)'>카카오뱅크(Kakao Bank)</option>
                                            <option value='케이뱅크(K Bank)'>케이뱅크(K Bank)</option>
                                            <option value='토스뱅크'>토스뱅크</option>
                                            <option value='하나(Hana)'>하나(Hana)</option>
                                        </select>
                                        @error('bank_name')
                                        <span id='msg_bank_name' style="color: red;">{{ $message }}</span>
                                        @enderror
                                    </li>


                                    <li class="reg_input_acount">
                                        <input type="text"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                            class="login_input letter-05 font-14" name="mb_3" id="bank_mb_3"
                                            placeholder="계좌번호 (số tài khoản)" maxLength="20" required
                                            autocomplete="on">
                                        @error('bank_account_number')
                                        <span id='msg_bank_mb_3' style="color: red;">{{ $message }}</span>
                                        @enderror
                                    </li>

                                    <li class="reg_input_bank_name">
                                        <input type="text" class="login_input letter-05 font-14" name="bank_account_name"
                                            id="bank_mb_1" placeholder="예금주 (Chủ tài khoản)" maxLength="20" required
                                            autocomplete="on">
                                        @error('bank_account_name')
                                        <span id='msg_bank_mb_1' style="color: red;">{{ $message }}</span>
                                        @enderror
                                        <span style='color:#eb2268;'>** Khi đăng ký đổi tiền, chủ tài khoản không
                                            thể thay đổi, vì vậy vui lòng điền vào thông tin chính xác của
                                            bạn.</span>
                                    </li>
                                    <li class="reg_input_recom">
                                        <input type="text" class="login_input letter-05 font-14" name="bank_account_number"
                                            id="reg_mb_recommend" placeholder="추천인 (mã giới thiệu)" maxLength="20"
                                            required autocomplete="on">
                                        @error('bank_account_number')
                                        <span id='msg_mb_recommend' style="color: red;">{{ $message }}</span>
                                        @enderror
                                        <br>
                                        ** Không thể giới thiệu thành viên không có quyền giới thiệu.
                                        <br>
                                        <span style='color:#ff0000;'>** Phân biệt chữ hoa và chữ thường <br> ex)
                                            Abc001 và abc001Khác nhau</span>
                                    </li>

                                    <div class="btn_confirm">
                                        <input type="image" id="btn_confirm" src="/img/btn_member_join.png"
                                            style='margin-top: 10px;' />
                                        (đăng ký gia nhập)
                                    </div>

                                </ul>

                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


</div>


<div id="dialog-confirm">
    <p id="confirm_msg">
    </p>
</div>



<iframe width=0 height=0 name='hiddenframe' style='display:none;'></iframe>

@endsection

@push('scripts')
@endpush
