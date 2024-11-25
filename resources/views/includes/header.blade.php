<a name="g4_head"></a>


<div id="new_gift_box" style="display:none;">
    <div class="jb-text">
        <p><span data='status_data_1' style='font-size:30px; font-weight:bold; color:#fff;'></span></p>
    </div>
</div>


<div id="wrap">

    <section>
        <div id="main">
            <script type="text/javascript">
                function deposit(id) {
                    if (!id) {
                        alert("로그인 하세요");
                        return false;
                    }
                    location.href = "../bbs/write.php?bo_table=m_deposit";
                }

                function withdrawal(id) {
                    if (!id) {
                        alert("로그인 하세요");
                        return false;
                    }
                    location.href = "../bbs/write.php?bo_table=m_withdrawal";
                }

                function dwdetails(id) {
                    if (!id) {
                        alert("로그인 하세요");
                        return false;
                    }
                    location.href = "../bbs/board.php?bo_table=m_deposit";
                }

                function center(id) {
                    if (!id) {
                        alert("로그인 하세요");
                        return false;
                    }
                    location.href = "../bbs/board.php?bo_table=cs_center";
                }

                function board(id) {
                    if (!id) {
                        alert("로그인 하세요");
                        return false;
                    }
                    location.href = "../bbs/board.php?bo_table=fr_board";
                }

                function flogin_submit(f) {
                    f.action = '../bbs/login_check.php';
                    return true;
                }

                function fregister_submit() {
                    var f = $('#fregister');
                    f.attr('action', "../bbs/register_form.php");
                    f.submit();
                    return true;
                }
            </script>

            <script type="text/javascript">
                /*
                    var gift_sound = new Audio('../proc/sound/배경음악^^박수소리.mp3');
                    setTimeout(function run()
                    {
                        get_new_gift("");
                        timerId = setTimeout(run, 1000 * 10);
                    }, 1000 * 10);
                    */
            </script>

            <script type="text/javascript">
                //left
                var time = 200;

                function l_showmenu() {
                    $('div._bg').fadeIn();
                    $('.m_menu_l').css({
                        'left': '-100%'
                    });
                    $('.m_menu_l').animate({
                        left: '0px'
                    }, {
                        duration: time
                    });
                    $("body").css('overflow', 'hidden').css('display', 'fixed');
                }

                function l_hidemenu() {
                    $('.m_menu_l').animate({
                        left: '-100%'
                    }, {
                        duration: time,
                        complete: function() {
                            $('div._bg').fadeOut();
                        }
                    });
                    $("body").css('overflow', '').css('display', '');
                }
                //right
                var r_time = 200;

                function r_showmenu() {
                    $('div._bg').fadeIn();
                    $('.m_menu_r').css({
                        'left': '100%'
                    });
                    $('.m_menu_r').animate({
                        left: '0px'
                    }, {
                        duration: time
                    });
                    $("body").css('overflow', 'hidden').css('display', 'fixed');
                }

                function r_hidemenu() {
                    $('.m_menu_r').animate({
                        left: '100%'
                    }, {
                        duration: time,
                        complete: function() {
                            $('div._bg').fadeOut();
                        }
                    });
                    $("body").css('overflow', '').css('display', '');
                }
            </script>

            <script type="text/javascript">
                // 헤드라인 문구가 있으면 출력
            </script>

            <script>
                function rolling_change() {
                    if (!confirm('포인트전환 하시겠습니까?')) {
                        return false;
                    }
                    window.location.href = "../user/change_point.php?before_uri=max668.com%2Fbbs%2Fregister_form.php";
                }
            </script>


            <script type='text/javascript'>
                var md5_norobot_key = 'd41d8cd98f00b204e9800998ecf8427e';
            </script>
            <style>
                /*
	body {
		background:url("/imgidt/bg_visual.jpg") top;
	}
	*/

                /*body { background: #000 }*/
                input {
                    padding-left: 3px;
                    font-weight: bold;
                }

                #main {
                    width: 100%;
                    margin: 0;
                    padding: 0;
                }

                /*
	#register_table { background: url(/img_p/bg_register_table.png) no-repeat top center; width: 869px; height: 665px; margin: 70px auto 0px auto; }
	#register_table { background: url(/img_p/bg_register_table.png) no-repeat top center; width: 100%; height: 665px; margin: 70px auto 0px auto; }
	#register_table table { margin: 0px 0px 0px 0px; border: none; }
	#register_table table tr { }
	#register_table table tr.first_child { }
	#register_table table tr td {
		//////background: #000000;
		color: #bcbcbc;
		height: 35px;
		border-top: 1px solid #333333;
		border-bottom: 1px solid #333333;
	}
	#register_table table tr td input {
		background: #fff;
		color: #000;
		border: 1px solid #3c3c40;
	}
	#register_table table tr th {
		background: url(/img_p/bg_register_title.png);
		color: #bababa;
		font-size: 13px;
		font-weight: bold;
		text-align: right;
		padding: 10px 30px 0px 0px;
		vertical-align: top;
		border-top: 1px solid #333333;
		border-right: 1px solid #333333;
		border-bottom: 1px solid #333333;
	}
	#register_table table tr td { padding: 0px 0px 0px 10px; }
	#register_table table tr td input {
		height: 25px;
	}
	#register_table table tr td select {
		height: 20px;
	}
	.sub_title_area img { }
*/


                /* 공통 { */
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

                /*
#register_new .login_join {margin-top: 40px;}
#register_new .login_join_t {margin-top: 25px;}
*/
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
                            <form id="fregister" method="post" action="./register_form_update.php"
                                class="register_form" enctype="multipart/form-data">

                                <input type="hidden" name="w" value="" />
                                <input type="hidden" name="url" value="%2Fbbs%2Fregister_form.php" />
                                <input type="hidden" name="token" value="3a43d03d88591ad0bce411441f9246f3" />

                                <ul>
                                    <li class="reg_input_id">


                                        <input type="text" class="login_input letter-05 font-14" name="mb_id"
                                            id="reg_mb_id" placeholder="아이디 (ID)" maxLength="20" required
                                            autocomplete="on">
                                        <span id='msg_mb_id'></span>


                                    </li>

                                    <li class="reg_input_nick">

                                        <input type="text" class="login_input letter-05 font-14" name="mb_nick"
                                            id="reg_mb_nick" placeholder="닉네임 (nick name)" maxLength="20" required
                                            autocomplete="on" value="" />
                                        <span id='msg_mb_nick'></span>
                                        <input type="hidden" name="mb_nick_default" value="" />

                                    </li>

                                    <li class="reg_input_pw">
                                        <input type="password" class="login_input letter-05 font-14"
                                            name="mb_password" id="reg_mb_password" placeholder="비밀번호 (mật khẩu)"
                                            maxLength="20" required autocomplete="on">
                                        (Bạn có thể nhập mật khẩu nhiều hơn 4 ký tự bằng tiếng Anh, số và ký tự đặc
                                        biệt.)
                                    </li>

                                    <li class="reg_input_pw">
                                        <input type="password" class="login_input letter-05 font-14"
                                            name="mb_password" id="reg_mb_password_re"
                                            placeholder="비밀번호 확인 (kiểm tra mật khẩu)" maxLength="20" required
                                            autocomplete="on">
                                    </li>

                                    <input type="hidden" name="mb_name" id="hidden_mb_name" value="" />
                                    <input type="hidden" name="mb_email" id="hidden_mb_email" value="" />
                                    <input type="hidden" name="mb_sex" value="M" />
                                    <input type="hidden" name="mb_birth" value="" />


                                    <li class="login_input_id">

                                        <select name="mb_hp1" id="reg_mb_hp1" class="login_input letter-05 font-14"
                                            title="휴대폰 앞번호" style="width:30%;">
                                            <option value="010">010</option>
                                        </select>
                                        -
                                        <input type="text" name="mb_hp2" id="mb_hp2" size="6" maxlength="4"
                                            class="login_input letter-05 font-14" class="text " title="휴대폰 중간번호"
                                            value="" style="padding-left: 2px; width:30%;" />
                                        -
                                        <input type="text" name="mb_hp3" id="mb_hp3" size="6" maxlength="4"
                                            class="login_input letter-05 font-14" class="text " title="휴대폰 뒷번호"
                                            value="" style="padding-left: 2px; width:30%;" />

                                    </li>
                                    (số điện thoại di động)
                                    <input type="hidden" name="mb_mailling" id="mb_mailling" value="1"
                                        checked="checked" />
                                    <input type="hidden" name="mb_sms" id="mb_sms" value="1" checked="checked" />
                                    <input type="hidden" name="mb_open_default" value="" />
                                    <input type="hidden" name="mb_open" id="mb_open" value="0" />

                                    <li class="reg_input_bank">

                                        <select name="mb_2" id="bank_mb_2" class="login_input letter-05 font-14">
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

                                    </li>


                                    <li class="reg_input_acount">
                                        <input type="text"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                            class="login_input letter-05 font-14" name="mb_3" id="bank_mb_3"
                                            placeholder="계좌번호 (số tài khoản)" maxLength="20" required
                                            autocomplete="on">
                                    </li>

                                    <li class="reg_input_bank_name">
                                        <input type="text" class="login_input letter-05 font-14" name="mb_1"
                                            id="bank_mb_1" placeholder="예금주 (Chủ tài khoản)" maxLength="20" required
                                            autocomplete="on">
                                        <span style='color:#eb2268;'>** Khi đăng ký đổi tiền, chủ tài khoản không
                                            thể thay đổi, vì vậy vui lòng điền vào thông tin chính xác của
                                            bạn.</span>
                                    </li>
                                    <li class="reg_input_recom">
                                        <input type="text" class="login_input letter-05 font-14" name="mb_agent"
                                            id="reg_mb_recommend" placeholder="추천인 (mã giới thiệu)" maxLength="20"
                                            required autocomplete="on"><span id='msg_mb_recommend'></span>
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



            <script type="text/javascript" src="../js/md5.js"></script>
            <script type="text/javascript" src="../js/jquery.kcaptcha.js"></script>
            <script type="text/javascript">
                //<![CDATA[
                /*
                var crypt_num = '';
                $('#get_sms').click(function(){
                    var num1 = $('#reg_mb_hp1 option:selected').val();
                    var num2 = $('#mb_hp2').val();
                    var num3 = $('#mb_hp3').val();

                    if(num1 == '' || num2 == '' || num3 == ''){
                        alert('휴대전화 번호를 정확히 입력해주세요');
                        return false;
                    }

                    $.ajax({
                        url : '../user/ajax/ajax.make_num.php',
                        data : { phone: '' + num1 + num2 + num3 + '' },
                        dataType: "json",
                        type: "post",
                        success: function(data){
                            if(data.errors == 'Y'){
                                alert(data.msg);
                                return false;
                            } else {
                                crypt_num = data.crypt;
                                $('#get_sms').hide();
                                $('#phone_confirm').show();
                                $('#phone_confirm_txt').show();
                                alert(data.msg);
                            }
                        },
                        error: function(){
                            alert('통신실패');
                        }
                    });
                });
                */


                var enabled_mb_id = false;
                var enabled_mb_name = false;
                var enabled_mb_nick = false;
                var enabled_mb_email = false;
                var enabled_mb_recommend = false;

                // 저장값과 입력값이 같다면 ajax 코드 실행하지 않음
                var save_mb_id = null;
                var save_mb_name = null;
                var save_mb_nick = null;
                var save_mb_email = null;
                var save_mb_recommend = null;

                var d = new Date();

                $(function() {

                    //
                    /*
                        $('.datepicker').datepicker({
                            changeMonth: true,
                            changeYear: true,
                            dateFormat: "yymmdd",
                            maxDate: "+0d",
                            yearRange: (d.getFullYear()-50)+":"+(d.getFullYear())
                        });
                    */

                    // 회원아이디 검사
                    $("#reg_mb_id").bind("blur", function() {
                        this.value = this.value.toLowerCase();
                        if (save_mb_id != this.value) {
                            enabled_mb_id = false;
                            $.ajax({
                                async: false,
                                cache: false,
                                type: "POST",
                                url: "../skin/member/basic/ajax_mb_id_check.php",
                                data: {
                                    "reg_mb_id": $(this).val()
                                },
                                success: function(data, textStatus) {
                                    var msg = $("#msg_mb_id");

                                    var trans = 1;

                                    if (trans == 1) {

                                        switch (data) {
                                            case "889":
                                                msg.html("ID không được bao gồm khoảng trống.").removeClass().addClass("ajax_error");
                                                break;
                                            case "888":
                                                msg.html("ID không thể bắt đầu bằng 0 được.").removeClass().addClass("ajax_error");
                                                break;
                                            case "110":
                                                msg.html("영소문자, 숫자, _ 만 입력하세요.").removeClass().addClass("ajax_error");
                                                break;
                                            case "120":
                                                msg.html("Hãy nhập ít nhất 4 chữ cái.").removeClass().addClass("ajax_error");
                                                break;
                                            case "130":
                                                msg.html("Đây là ID đã được sử dụng rồi.").removeClass().addClass("ajax_error");
                                                break;
                                            case "140":
                                                msg.html("예약어로 사용할 수 없는 아이디 입니다.").removeClass().addClass("ajax_error");
                                                break;
                                            case "000":
                                                msg.html("Bạn có thể sử dụng ID này.").removeClass().addClass("ajax_success");
                                                enabled_mb_id = true;
                                                break;
                                            default:
                                                alert("잘못된 접근입니다.\n\n" + result);
                                                break;
                                        }

                                    } else {
                                        switch (data) {
                                            case "889":
                                                msg.html("아이디는 공백을 포함할 수 없습니다.").removeClass().addClass("ajax_error");
                                                break;
                                            case "888":
                                                msg.html("아이디는 0으로 시작할 수 없습니다.").removeClass().addClass("ajax_error");
                                                break;
                                            case "110":
                                                msg.html("영소문자, 숫자, _ 만 입력하세요.").removeClass().addClass("ajax_error");
                                                break;
                                            case "120":
                                                msg.html("최소 4글자 이상 입력하세요.").removeClass().addClass("ajax_error");
                                                break;
                                            case "130":
                                                msg.html("이미 사용중인 아이디 입니다.").removeClass().addClass("ajax_error");
                                                break;
                                            case "140":
                                                msg.html("예약어로 사용할 수 없는 아이디 입니다.").removeClass().addClass("ajax_error");
                                                break;
                                            case "000":
                                                msg.html("사용하셔도 좋은 아이디 입니다.").removeClass().addClass("ajax_success");
                                                enabled_mb_id = true;
                                                break;
                                            default:
                                                alert("잘못된 접근입니다.\n\n" + result);
                                                break;
                                        }
                                    }


                                }
                            });
                        }
                        save_mb_id = this.value;
                    });

                    // 회원 별명 검사
                    // case "120" : msg.html("한글 2글자 이상 6글자 이하로만 입력 가능합니다.").removeClass().addClass("ajax_error"); break;
                    $("#reg_mb_nick").bind("blur", function() {
                        if (save_mb_nick != this.value) {
                            enabled_mb_nick = false;
                            $.ajax({
                                async: false,
                                cache: false,
                                type: "POST",
                                url: "../skin/member/basic/ajax_mb_nick_check.php",
                                data: {
                                    "reg_mb_nick": $(this).val()
                                },
                                success: function(data, textStatus) {
                                    var msg = $("#msg_mb_nick");

                                    var trans = 1;
                                    if (trans == 1) {

                                        switch (data) {
                                            case "110":
                                                msg.html("닉네임은 공백 없이 한글만 입력 가능합니다.").removeClass().addClass("ajax_error");
                                                break;
                                            case "120":
                                                msg.html("Biệt danh phải có ít nhất 3 chữ cái.").removeClass().addClass("ajax_error");
                                                break;
                                            case "130":
                                                msg.html("Đây là nickname đã có sẵn rồi.").removeClass().addClass("ajax_error");
                                                break;
                                            case "140":
                                                msg.html("예약어로 사용할 수 없는 닉네임 입니다.").removeClass().addClass("ajax_error");
                                                break;
                                            case "000":
                                                msg.html("Đây là nickname mà các bạn có thể sử dụng.").removeClass().addClass("ajax_success");
                                                enabled_mb_nick = true;
                                                break;
                                            default:
                                                alert("잘못된 접근입니다.\n\n" + result);
                                                break;
                                        }
                                    } else {
                                        switch (data) {
                                            case "110":
                                                msg.html("닉네임은 공백 없이 한글만 입력 가능합니다.").removeClass().addClass("ajax_error");
                                                break;
                                            case "120":
                                                msg.html("별명은 최소 3글자 이상이어야 합니다.").removeClass().addClass("ajax_error");
                                                break;
                                            case "130":
                                                msg.html("이미 존재하는 닉네임입니다.").removeClass().addClass("ajax_error");
                                                break;
                                            case "140":
                                                msg.html("예약어로 사용할 수 없는 닉네임 입니다.").removeClass().addClass("ajax_error");
                                                break;
                                            case "000":
                                                msg.html("사용하셔도 좋은 닉네임 입니다.").removeClass().addClass("ajax_success");
                                                enabled_mb_nick = true;
                                                break;
                                            default:
                                                alert("잘못된 접근입니다.\n\n" + result);
                                                break;
                                        }
                                    }
                                }
                            });
                        }
                        save_mb_nick = this.value;
                    });

                    // 이메일 검사
                    $("#reg_mb_email").bind("blur", function() {
                        if (save_mb_email != this.value) {
                            enabled_mb_email = false;
                            $.ajax({
                                async: false,
                                cache: false,
                                type: "POST",
                                url: "../skin/member/basic/ajax_mb_email_check.php",
                                data: {
                                    "reg_mb_id": $("#reg_mb_id").val(),
                                    "reg_mb_email": $("#reg_mb_email").val()
                                },
                                success: function(data, textStatus) {
                                    var msg = $("#msg_mb_email");
                                    switch (data) {
                                        case "110":
                                            msg.html("이메일 주소를 입력하세요.").removeClass().addClass("ajax_error");
                                            break;
                                        case "120":
                                            msg.html("이메일 주소가 형식에 맞지 않습니다.").removeClass().addClass("ajax_error");
                                            break;
                                        case "130":
                                            msg.html("이미 존재하는 이메일 주소입니다.").removeClass().addClass("ajax_error");
                                            break;
                                        case "000":
                                            msg.html("사용하셔도 좋은 이메일 주소입니다.").removeClass().addClass("ajax_success");
                                            enabled_mb_email = true;
                                            break;
                                        default:
                                            alert("잘못된 접근입니다.\n\n" + result);
                                            break;
                                    }
                                }
                            });
                        }
                        save_mb_email = this.value;
                    });

                    // 추천인 아이디 검사
                    $("#reg_mb_recommend").bind("blur", function() {
                        if (this.value.trim() != "") {
                            if (save_mb_recommend != this.value) {
                                enabled_mb_recommend = false;
                                $.ajax({
                                    async: false,
                                    cache: false,
                                    type: "POST",
                                    url: "../skin/member/basic/ajax_mb_recommend_check.php",
                                    data: {
                                        "reg_mb_id": $("#reg_mb_id").val(),
                                        "reg_mb_recommend": $("#reg_mb_recommend").val()
                                    },
                                    success: function(data, textStatus) {
                                        var msg = $("#msg_mb_recommend");
                                        switch (data) {
                                            case "110":
                                                msg.html("영소문자, 숫자, _ 만 입력하세요.").removeClass().addClass("ajax_error");
                                                break;
                                            case "120":
                                                msg.html("최소 3글자 이상 입력하세요.").removeClass().addClass("ajax_error");
                                                break;
                                            case "130":
                                                msg.html("존재하지 않은 아이디로 추천할 수 없습니다.").removeClass().addClass("ajax_error");
                                                break;
                                            case "140":
                                                msg.html("자기 자신을 추천할 수 없습니다.").removeClass().addClass("ajax_error");
                                                break;
                                            case "150":
                                                msg.html("추천할 수 없는 아이디 입니다.").removeClass().addClass("ajax_error");
                                                break;
                                            case "160":
                                                msg.html("해당회원은 더이상 추천할 수 없습니다.").removeClass().addClass("ajax_error");
                                                break;
                                            case "170":
                                                msg.html("해당회원은 추천 권한이 없습니다.").removeClass().addClass("ajax_error");
                                                break;
                                            case "000":
                                                msg.html("사용하셔도 좋은 추천인 아이디입니다.").removeClass().addClass("ajax_success");
                                                enabled_mb_recommend = true;
                                                break;
                                            default:
                                                alert("잘못된 접근입니다.\n\n" + result);
                                                break;
                                        }
                                    }
                                });
                            }
                        }
                        save_mb_recommend = this.value;
                    });

                    $("#reg_mb_password_q_select").bind("change", function() {
                        if (this.value) {
                            $("#reg_mb_password_q").val(this.value);
                        }
                    });

                    //    $("#reg_mb_tel1").val("");
                    //    $("#reg_mb_hp1").val("");

                    //휴대폰값 설정
                    $("#reg_mb_hp1").val("010");

                    // 첫번째 입력 필드에 포커스 맞추기
                    $("#fregister").attr("autocomplete", "off").find(":input:visible:enabled:first").focus();
                    $("form.register_form").submit(function() {
                        return fregister_submit(document.getElementById("fregister"));
                    });
                });

                // 날짜 유효성 검사
                function is_valid_date(yyyy, mm, dd) {
                    var d = new Date(yyyy, mm - 1, dd);
                    return (d.getFullYear() == yyyy && d.getMonth() + 1 == mm && d.getDate() == dd) ? true : false;
                }

                function fregister_submit(f) {
                    if (f.w.value == "") {
                        if (!enabled_mb_id) {
                            alert("회원아이디를 입력하지 않았거나 입력에 오류가 있습니다.");
                            //f.mb_id.focus();
                            f.mb_id.select();
                            return false;
                        }
                    }

                    if (f.mb_password.value != f.mb_password_re.value) {
                        alert("비밀번호와 비밀번호 확인이 같지 않습니다.");
                        //f.mb_password_re.focus();
                        f.mb_password_re.select();
                        return false;
                    }

                    if (typeof(f.mb_nick) != "undefined") {
                        if (f.mb_nick.value.trim() == "") {
                            if (f.mb_nick.type == "text") {
                                if (!enabled_mb_nick) {
                                    alert("닉네임을 입력하지 않았거나 입력에 오류가 있습니다.");
                                    //f.mb_nick.focus();
                                    f.mb_nick.select();
                                    return false;
                                }
                            }
                        }
                    }

                    if (typeof(f.mb_birth) != "undefined") {
                        /* 생년월일에 대한 필수 설정이 없으므로 주석 처리 합니다 # 2011-03-15 17:18:13 [By. June.] #
                        if (f.mb_birth.value.trim() == "") {
                            alert("생년월일을 입력하여 주십시오.\n\n달력아이콘으로도 날짜를 선택할 수 있습니다.");
                            //f.mb_birth.focus();
                            f.mb_birth.select();
                            return false;
                        }
                            */
                        if (f.mb_birth.value.trim() != "") {
                            if (!/[0-9]{8}/.test(f.mb_birth.value)) {
                                alert("생년월일은 숫자로 8자리를 입력하여 주십시오.\n\n년도 4자리 + 월 2자리 + 일 2자리\n\n입력예) 를 참고하세요.");
                                //f.mb_birth.focus();
                                f.mb_birth.select();
                                return false;
                            }

                            var y = f.mb_birth.value.substr(0, 4);
                            var m = f.mb_birth.value.substr(4, 2);
                            var d = f.mb_birth.value.substr(6, 2);
                            if (!is_valid_date(y, m, d)) {
                                alert("생년월일의 날짜에 오류가 있습니다.\n\n입력예) 를 참고하세요.");
                                //f.mb_birth.focus();
                                f.mb_birth.select();
                                return false;
                            }

                            // 오늘날짜에서 생일을 빼고 거기서 140000 을 뺀다.
                            // 결과가 0 이상의 양수이면 만 14세가 지난것임
                            var n = 20241124 - parseInt(f.mb_birth.value) - 140000;
                            if (n < 0) {
                                alert("만 14세 미만의 아동은 정보통신망 이용촉진 및 정보보호 등에 관한 법률\n\n제 31조 1항의 규정에 의하여 법정대리인의 동의를 얻어야 회원가입이 가능합니다.");
                                //f.mb_birth.focus();
                                f.mb_birth.select();
                                return false;
                            }
                        }
                    }

                    if ($('#bank_mb_1').val() == '') {
                        alert("예금주 성명을 입력하지 않았습니다.");
                        return false;
                    }

                    if ($('#bank_mb_2 option:selected').val() == '') {
                        alert("은행 종류를 입력하지 않았습니다.");
                        return false;
                    }

                    if ($('#bank_mb_3').val() == '') {
                        alert("계좌번호를 입력하지 않았습니다.");
                        return false;
                    }






                    if (typeof(f.mb_icon) != "undefined") {
                        if (f.mb_icon.value != "") {
                            if (!/\.gif$/i.test(f.mb_icon.value)) {
                                alert("회원아이콘은 gif 파일만 업로드 가능합니다.");
                                //f.mb_icon.focus();
                                f.mb_icon.select();
                                return false;
                            }
                        }
                    }

                    if (!enabled_mb_recommend) {
                        alert("추천인 아이디 입력에 오류가 있습니다.");
                        //f.mb_recommend.focus();
                        f.mb_recommend.select();
                        return false;
                    }

                    var input_crypt_num = hex_md5($('#phone_confirm').val());
                    if (crypt_num != input_crypt_num) {
                        alert('문자 인증번호가 올바르지 않습니다. 정확히 입력해주세요.');
                        return false;
                    }

                    if (!check_kcaptcha(f.wr_key)) {
                        return false;
                    }

                    if (typeof(f.mb_tel) != "undefined") {
                        if (f.mb_tel1.value != "" && f.mb_tel2.value != "" && f.mb_tel3.value != "") {
                            f.mb_tel.value = f.mb_tel1.value + "-" + f.mb_tel2.value + "-" + f.mb_tel3.value;
                        }
                    }
                    if (g4_https_url)
                        f.action = g4_https_url + "/" + g4_bbs + "/register_form_update.php";
                    else
                        f.action = "./register_form_update.php";

                    return true;
                }

                function chk_radio(elem) {
                    // return 0 이 되는 경우가 있으므로 === false 로 물어볼 것
                    var rdo = document.getElementsByName(elem);
                    for (i = 0; i < rdo.length; i++) {
                        if (rdo['i'].checked)
                            return i;
                    }
                    return false;
                }
                //]]>
            </script>

            <script>
                function fn_select(val) {
                    if (val == "직접입력")
                        document.getElementById('mb_2').style.display = "block";
                    else {
                        document.getElementById('mb_2').style.display = "none";
                        document.getElementById('mb_2').value = val;
                    }
                }
            </script>
        </div>
    </section>


</div>


<div id="dialog-confirm">
    <p id="confirm_msg">
    </p>
</div>


<script type="text/javascript">
    $('img[name^="imgMenu"]').hover(
        function() {
            var st_avail = $(this).attr("avail");
            if (st_avail == 'Y') {
                var origin = $(this).attr("src");
                $(this).attr("src", origin.replace(".png", "_ov.png"));
            }
        },
        function() {
            var st_avail = $(this).attr("avail");
            if (st_avail == 'Y') {
                var origin = $(this).attr("src");
                $(this).attr("src", origin.replace("_ov.png", ".png"));
            }
        }
    );

    $('.loading_img_area').hide();

    var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    var dayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]

    // Create a newDate() object
    var newDate = new Date();
    // Extract the current date from Date object
    newDate.setDate(newDate.getDate());
    // Output the day, date, month and year
    //$('#clock_date').html(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());

    setInterval(function() {
        // Create a newDate() object and extract the seconds of the current time on the visitor's
        var seconds = new Date().getSeconds();
        // Add a leading zero to seconds value
        $("#clock_sec").html((seconds < 10 ? "0" : "") + seconds);
    }, 1000);

    setInterval(function() {
        // Create a newDate() object and extract the minutes of the current time on the visitor's
        var minutes = new Date().getMinutes();
        // Add a leading zero to the minutes value
        $("#clock_min").html((minutes < 10 ? "0" : "") + minutes);
    }, 1000);

    setInterval(function() {
        // Create a newDate() object and extract the hours of the current time on the visitor's
        var hours = new Date().getHours();
        // Add a leading zero to the hours value
        $("#clock_hours").html((hours < 10 ? "0" : "") + hours);
    }, 1000);
</script>


<iframe width=0 height=0 name='hiddenframe' style='display:none;'></iframe>


@push('scripts')
<script type="text/javascript" src="../js/wrest.js"></script>
<script type="text/javascript" src="../js/script.js?v=20240115452"></script>
<script defer
    src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
    integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
    data-cf-beacon='{"rayId":"8e77ad485a310972","version":"2024.10.5","r":1,"token":"ec3d60ab2bc04a2ca1bef4e77ab5161d","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}}}'
    crossorigin="anonymous"></script>
@endpush
