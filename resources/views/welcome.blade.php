<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ko" xml:lang="ko">


<!-- Mirrored from max668.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Nov 2024 07:24:08 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta name="viewport"
        content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=10,user-scalable=yes">
    <meta name="robots" content="noindex, nofollow">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <title>MAX</title>
</head>

<script type="text/javascript">
    // 자바스크립트에서 사용하는 전역변수 선언
    var g4_path = ".";
    var g4_bbs = "bbs";
    var g4_bbs_path = "./bbs";
    var g4_t_user_path = "./user";
    var g4_bbs_img = "img";
    var g4_url = "http://max668.com/";
    var g4_is_member = "";
    var g4_is_admin = "";
    var g4_mb_level = "1";
    var g4_bo_table = "";
    var g4_sca = "";
    var g4_charset = "utf-8";
    var g4_cookie_domain = "";
    var memo = "https://max668.com/user/show_memo.php";
    var g4_is_gecko = navigator.userAgent.toLowerCase().indexOf("gecko") != -1;
    var g4_is_ie = navigator.userAgent.toLowerCase().indexOf("msie") != -1;
</script>


<link rel="stylesheet" href="{{ asset('user/css/max587/common.css') }}" type="text/css">

<link rel="stylesheet" href="{{ asset('user/css/max587/styleuser.css') }}" type="text/css">

<script src="{{ asset('user/js/jquery-1.8.3.min.js') }}"></script>
<script src="{{ asset('user/js/jquery-ui-1.9.2.custom.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('user/css/max587/jquery-ui-1.9.2.custom.min.css') }}" type="text/css">
<script src="{{ asset('user/js/jquery.menu.js') }}"></script>
<script type="text/javascript" src="{{ asset('user/js/common.js') }}"></script>
<script type="text/javascript" src="{{ asset('user/js/t_user_common.js') }}"></script>
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css?v=20240115452" />

<body topmargin="0" leftmargin="0">
    <a name="g4_head"></a>

    <div id="new_gift_box" style="display:none;">
        <div class="jb-text">
            <p><span data='https://max668.com/status_data_1'
                    style='font-size:30px; font-weight:bold; color:#fff;'></span></p>
        </div>
    </div>

    <div id="wrap">
        <header>

            <div class="_high">
                <div class="inne clea">
                    <div class="_left"></div>
                    <div class="logo">
                        <a href="/."><img src="{{ asset('imgidt/logo.png') }}" /></a>
                    </div>
                    <div class="_right"></div>
                </div>
            </div>

            <div class="_mid">
                <div class="_mobile">
                    <a onclick="l_showmenu()"><i class="fas fa-bars"></i></a>
                    <a href="/."><img src="{{ asset('imgidt/logo.png') }}" height:150px; /></a>
                    <a onclick="r_showmenu()"><i class="fas fa-user"></i></a>
                </div>

                <div class="_bg"></div>


                <div class="inne clea _pc">
                    <nav class="_left">
                        <li>
                            <a href="javascript:void(0);" onclick="deposit('')"><span style="text-align:center;">입금신청
                                    <br>(nạp tiền)</span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" onclick="withdrawal('')"><span style="text-align:center;">출금신청
                                    <br>(rút tiền)</span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" onclick="dwdetails('')"><span style="text-align:center;">입출금내역
                                    <br>(lịch sử nạp rút)</span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" onclick="center('')"><span style="text-align:center;">고객센터
                                    <br>(trung tâm khách hàng)</span></a> <!--//1:1 고객센터-->
                        </li>
                        <li>
                            <a href="javascript:void(0);" onclick="board('')"><span style="text-align:center;">공지사항
                                    <br>(thông báo)</span></a>
                        </li>
                    </nav>
                </div>


                <div class="m_menu_l">
                    <a onclick="l_hidemenu()" class="_m_menu_top_l">
                        <i class="fas fa-times"></i>
                    </a>
                    <nav class="_left" style='list-style:none; padding-top:45px;'>
                        <li style='height:30px; border-top:5px solid rgba(255,255,255,0.3);'>
                            <a href="javascript:void(0);" onclick="deposit('')"><span style='font-size:15px;'>입금신청 (nạp
                                    tiền)</span></a>
                        </li>
                        <li style='height:30px;'>
                            <a href="javascript:void(0);" onclick="withdrawal('')"><span style='font-size:15px;'>출금신청
                                    (rút tiền)</span></a>
                        </li>
                        <li style='height:30px;'>
                            <a href="javascript:void(0);" onclick="dwdetails('')"><span style='font-size:15px;'>입출금내역
                                    (lịch sử nạp rút)</span></a>
                        </li>
                        <li style='height:30px;'>
                            <a href="javascript:void(0);" onclick="center('')"><span style='font-size:15px;'>고객센터 (trung
                                    tâm khách hàng)</span></a>
                        </li>
                        <li style='height:30px;'>
                            <a href="javascript:void(0);" onclick="board('')"><span style='font-size:15px;'>공지사항 (thông
                                    báo)</span></a>
                        </li>
                    </nav>
                </div>

                @if (!auth()->check())
                <div class="m_menu_r">
                    <a onclick="r_hidemenu()" class="_m_menu_top_r">
                        <i class="fas fa-times"></i>
                    </a>
                    <form id="flogin" method="post" action="{{ route('login') }}">
                        @csrf
                        <nav class="_left" style='list-style:none; padding-top:45px;'>
                            <li style='border-top:5px solid rgba(255,255,255,0.3);'>
                                <input type="text" class="form-control" name="" id="login_id" placeholder="ID"
                                    maxLength="20" required autocomplete="off">
                                <span id='msg_mb_id' style="color: red;">2323</span>
                            </li>
                            <li>
                                <input type="password" class="form-control" name="mb_password" id="login_pw"
                                    placeholder="PW" maxLength="20" required autocomplete="on">
                            </li>
                            <li>
                                <button type="submit" class="btn btn-primary" name=""><span
                                        style='font-size:13px; font-weight:bold;'>Sign In</span></button>
                                <button type="button" class="btn btn-warning" onclick="return fregister_submit()"
                                    name=""><span style='font-size:13px; font-weight:bold;'>Sign Up</span></button>

                            </li>
                        </nav>
                    </form>
                </div>
                @endif


            </div>

            @if (!auth()->check())
            <form id="flogin" method="post" action="{{ route('login') }}">
                @csrf
                <input type="hidden" name="url" value="">

                <div class="_top">
                    <div class="inne clea">
                        <div class="_left"></div>
                        <div class="_right">
                            <div>

                            </div>
                            <div>
                                <input type="text" class="form-control" name="name" id="login_id" placeholder="ID"
                                    maxLength="20" required autocomplete="off" value="{{ old('name') }}">
                                @error('name')
                                <span id='msg_mb_id' style="color: red;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <input type="password" class="form-control" name="password" id="login_pw"
                                    placeholder="PW" maxLength="20" required autocomplete="on">
                            @error('password')
                                <span id='msg_mb_password' style="color: red;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary w-100" name=""><span
                                        style='font-size:13px; font-weight:bold;'>Sign In</span></button>&nbsp;
                                <button type="button" class="btn btn-warning w-100" onclick="return fregister_submit()"
                                    name=""><span style='font-size:13px; font-weight:bold;'>Sign Up</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            @endif
        </header>

        <div class="clear"></div>


        <section>

            <div id="main">

                <script type="text/javascript">
                    function deposit(id) {
                        if (!id) {
                            alert("로그인 하세요");
                            return false;
                        }
                        location.href = "https://max668.com/bbs/write.php?bo_table=m_deposit";
                    }

                    function withdrawal(id) {
                        if (!id) {
                            alert("로그인 하세요");
                            return false;
                        }
                        location.href = "https://max668.com/bbs/write.php?bo_table=m_withdrawal";
                    }

                    function dwdetails(id) {
                        if (!id) {
                            alert("로그인 하세요");
                            return false;
                        }
                        location.href = "https://max668.com/bbs/board.php?bo_table=m_deposit";
                    }

                    function center(id) {
                        if (!id) {
                            alert("로그인 하세요");
                            return false;
                        }
                        location.href = "https://max668.com/bbs/board.php?bo_table=cs_center";
                    }

                    function board(id) {
                        if (!id) {
                            alert("로그인 하세요");
                            return false;
                        }
                        location.href = "https://max668.com/bbs/board.php?bo_table=fr_board";
                    }

                    function fregister_submit() {
                        window.open("{{ route('register') }}");
                    }
                </script>

                <script type="text/javascript">

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
                        window.location.href = "https://max668.com/user/change_point.php?before_uri=max668.com%2F";
                    }
                </script>




                <script type="text/javascript"
                    src="https://max668.com/user/js/jquery.simplyscroll.js?v=20240115452"></script>
                <link rel="stylesheet" type="text/css"
                    href="https://max668.com/user/css/jquery.simplyscroll.css?v=20240115452">


                <link rel="stylesheet" type="text/css"
                    href="https://max668.com/user/css/max587/style.css?v=20240115452">


                <div class="index_contents">

                    <div class="inne clea">
                        <div class="sect">
                            <div class="conts">
                                <!--//
			<div class="_banner">
				<img src="/img_01/banner.png" />
			</div>
			-->

                                <div class="game-section">
                                    <div class="game-list-box ">
                                        <div class="game-list-tab">
                                        </div>
                                        <ul class="game-list casino-section active">
                                            <a href="javascript:void(0);" class="sc-btn w-ba"
                                                style="animation-delay: 0s;">
                                                <div class="g-panel w-ba">
                                                    <div class="g-cont">
                                                        <img class="g-img"
                                                            src="https://max668.com/data/vendor/max587/5240?v=2024112416241793812">
                                                        <button type="button" class="play-btn btn-danger"
                                                            onclick="gameplay('','5','1')">게임입장</button>
                                                    </div>
                                                    <div class="glass"></div>
                                                </div>
                                            </a> <a href="javascript:void(0);" class="sc-btn w-ba"
                                                style="animation-delay: 0.1s;">
                                                <div class="g-panel w-ba">
                                                    <div class="g-cont">
                                                        <img class="g-img"
                                                            src="https://max668.com/data/vendor/max587/5244?v=2024112416241793812">
                                                        <button type="button" class="play-btn btn-danger"
                                                            onclick="gameplay('','1','1')">게임입장</button>
                                                    </div>
                                                    <div class="glass"></div>
                                                </div>
                                            </a> <a href="javascript:void(0);" class="sc-btn w-ba"
                                                style="animation-delay: 0.2s;">
                                                <div class="g-panel w-ba">
                                                    <div class="g-cont">
                                                        <img class="g-img"
                                                            src="https://max668.com/data/vendor/max587/5122?v=2024112416241793812">
                                                        <button type="button" class="play-btn btn-danger"
                                                            onclick="gameplay('','201','1')">게임입장</button>
                                                    </div>
                                                    <div class="glass"></div>
                                                </div>
                                            </a> <a href="javascript:void(0);" class="sc-btn w-ba"
                                                style="animation-delay: 0.3s;">
                                                <div class="g-panel w-ba">
                                                    <div class="g-cont">
                                                        <img class="g-img"
                                                            src="https://max668.com/data/vendor/max587/5123?v=2024112416241793812">
                                                        <button type="button" class="play-btn btn-danger"
                                                            onclick="gameplay('','200','0')">게임입장</button>
                                                    </div>
                                                    <div class="glass"></div>
                                                </div>
                                            </a> <a href="javascript:void(0);" class="sc-btn w-ba"
                                                style="animation-delay: 0.4s;">
                                                <div class="g-panel w-ba">
                                                    <div class="g-cont">
                                                        <img class="g-img"
                                                            src="https://max668.com/data/vendor/max587/5185?v=2024112416241793812">
                                                        <button type="button" class="play-btn btn-danger"
                                                            onclick="gameplay('','75','1')">게임입장</button>
                                                    </div>
                                                    <div class="glass"></div>
                                                </div>
                                            </a> <a href="javascript:void(0);" class="sc-btn w-ba"
                                                style="animation-delay: 0.5s;">
                                                <div class="g-panel w-ba">
                                                    <div class="g-cont">
                                                        <img class="g-img"
                                                            src="https://max668.com/data/vendor/max587/5200?v=2024112416241793812">
                                                        <button type="button" class="play-btn btn-danger"
                                                            onclick="gameplay('','60','1')">게임입장</button>
                                                    </div>
                                                    <div class="glass"></div>
                                                </div>
                                            </a> <a href="javascript:void(0);" class="sc-btn w-ba"
                                                style="animation-delay: 0.6s;">
                                                <div class="g-panel w-ba">
                                                    <div class="g-cont">
                                                        <img class="g-img"
                                                            src="https://max668.com/data/vendor/max587/5216?v=2024112416241793812">
                                                        <button type="button" class="play-btn btn-danger"
                                                            onclick="gameplay('','43','1')">게임입장</button>
                                                    </div>
                                                    <div class="glass"></div>
                                                </div>
                                            </a> <a href="javascript:void(0);" class="sc-btn w-ba"
                                                style="animation-delay: 0.7s;">
                                                <div class="g-panel w-ba">
                                                    <div class="g-cont">
                                                        <img class="g-img"
                                                            src="https://max668.com/data/vendor/max587/5233?v=2024112416241793812">
                                                        <button type="button" class="play-btn btn-danger"
                                                            onclick="gameplay('','24','1')">게임입장</button>
                                                    </div>
                                                    <div class="glass"></div>
                                                </div>
                                            </a> <a href="javascript:void(0);" class="sc-btn w-ba"
                                                style="animation-delay: 0.8s;">
                                                <div class="g-panel w-ba">
                                                    <div class="g-cont">
                                                        <img class="g-img"
                                                            src="https://max668.com/data/vendor/max587/5234?v=2024112416241793812">
                                                        <button type="button" class="play-btn btn-danger"
                                                            onclick="gameplay('','23','1')">게임입장</button>
                                                    </div>
                                                    <div class="glass"></div>
                                                </div>
                                            </a> <a href="javascript:void(0);" class="sc-btn w-ba"
                                                style="animation-delay: 0.9s;">
                                                <div class="g-panel w-ba">
                                                    <div class="g-cont">
                                                        <img class="g-img"
                                                            src="https://max668.com/data/vendor/max587/5235?v=2024112416241793812">
                                                        <button type="button" class="play-btn btn-danger"
                                                            onclick="gameplay('','22','1')">게임입장</button>
                                                    </div>
                                                    <div class="glass"></div>
                                                </div>
                                            </a> <a href="javascript:void(0);" class="sc-btn w-ba"
                                                style="animation-delay: 1s;">
                                                <div class="g-panel w-ba">
                                                    <div class="g-cont">
                                                        <img class="g-img"
                                                            src="https://max668.com/data/vendor/max587/5236?v=2024112416241793812">
                                                        <button type="button" class="play-btn btn-danger"
                                                            onclick="gameplay('','21','1')">게임입장</button>
                                                    </div>
                                                    <div class="glass"></div>
                                                </div>
                                            </a>
                                        </ul>
                                    </div>
                                </div>

                                <div class="_game_area">
                                    <div class="main_best_wrap">
                                        <div class="main_best_box">

                                            <div class="main_best_title">
                                                <span><img src="https://max668.com/imgidt/slot.png" /></span>
                                            </div>
                                            <div class="main_best_title_1">
                                                <span><img src="https://max668.com/imgidt/slot.png" /></span>
                                            </div>

                                            <div id="bo_gall">
                                                <ul id="gall_ul" class="gall_row">
                                                    <li class="gall_li col-gn-4">
                                                        <div class="gall_box">
                                                            <div class="gall_con">
                                                                <div class="gall_img">
                                                                    <div class="zoom_image">
                                                                        <a href="javascript:void(0);"
                                                                            onclick="gameopen('','2','1' )"><img
                                                                                src="/img/logo.png" alt=""></a>
                                                                    </div>
                                                                </div>
                                                                <div class="gall_info"
                                                                    style="text-align:center; font-size:17px; font-weight:bold; ">
                                                                    <span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="gall_li col-gn-4">
                                                        <div class="gall_box">
                                                            <div class="gall_con">
                                                                <div class="gall_img">
                                                                    <div class="zoom_image">
                                                                        <a href="javascript:void(0);"
                                                                            onclick="gameopen('','134','1' )"><img
                                                                                src="https://max668.com/data/vendor/max587/5128?v=2024112416241727356"
                                                                                alt=""></a>
                                                                    </div>
                                                                </div>
                                                                <div class="gall_info"
                                                                    style="text-align:center; font-size:17px; font-weight:bold; ">
                                                                    <span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="gall_li col-gn-4">
                                                        <div class="gall_box">
                                                            <div class="gall_con">
                                                                <div class="gall_img">
                                                                    <div class="zoom_image">
                                                                        <a href="javascript:void(0);"
                                                                            onclick="gameopen('','133','1' )"><img
                                                                                src="https://max668.com/data/vendor/max587/5129?v=2024112416241727356"
                                                                                alt=""></a>
                                                                    </div>
                                                                </div>
                                                                <div class="gall_info"
                                                                    style="text-align:center; font-size:17px; font-weight:bold; ">
                                                                    <span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="gall_li col-gn-4">
                                                        <div class="gall_box">
                                                            <div class="gall_con">
                                                                <div class="gall_img">
                                                                    <div class="zoom_image">
                                                                        <a href="javascript:void(0);"
                                                                            onclick="gameopen('','132','1' )"><img
                                                                                src="https://max668.com/data/vendor/max587/5130?v=2024112416241727356"
                                                                                alt=""></a>
                                                                    </div>
                                                                </div>
                                                                <div class="gall_info"
                                                                    style="text-align:center; font-size:17px; font-weight:bold; ">
                                                                    <span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="gall_li col-gn-4 box_clear">
                                                        <div class="gall_box">
                                                            <div class="gall_con">
                                                                <div class="gall_img">
                                                                    <div class="zoom_image">
                                                                        <a href="javascript:void(0);"
                                                                            onclick="gameopen('','131','1' )"><img
                                                                                src="https://max668.com/data/vendor/max587/5131?v=2024112416241727356"
                                                                                alt=""></a>
                                                                    </div>
                                                                </div>
                                                                <div class="gall_info"
                                                                    style="text-align:center; font-size:17px; font-weight:bold; ">
                                                                    <span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="gall_li col-gn-4">
                                                        <div class="gall_box">
                                                            <div class="gall_con">
                                                                <div class="gall_img">
                                                                    <div class="zoom_image">
                                                                        <a href="javascript:void(0);"
                                                                            onclick="gameopen('','130','1' )"><img
                                                                                src="https://max668.com/data/vendor/max587/5132?v=2024112416241727356"
                                                                                alt=""></a>
                                                                    </div>
                                                                </div>
                                                                <div class="gall_info"
                                                                    style="text-align:center; font-size:17px; font-weight:bold; ">
                                                                    <span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="gall_li col-gn-4">
                                                        <div class="gall_box">
                                                            <div class="gall_con">
                                                                <div class="gall_img">
                                                                    <div class="zoom_image">
                                                                        <a href="javascript:void(0);"
                                                                            onclick="gameopen('','129','1' )"><img
                                                                                src="https://max668.com/data/vendor/max587/5133?v=2024112416241727356"
                                                                                alt=""></a>
                                                                    </div>
                                                                </div>
                                                                <div class="gall_info"
                                                                    style="text-align:center; font-size:17px; font-weight:bold; ">
                                                                    <span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="gall_li col-gn-4">
                                                        <div class="gall_box">
                                                            <div class="gall_con">
                                                                <div class="gall_img">
                                                                    <div class="zoom_image">
                                                                        <a href="javascript:void(0);"
                                                                            onclick="gameopen('','123','1' )"><img
                                                                                src="https://max668.com/data/vendor/max587/5139?v=2024112416241727356"
                                                                                alt=""></a>
                                                                    </div>
                                                                </div>
                                                                <div class="gall_info"
                                                                    style="text-align:center; font-size:17px; font-weight:bold; ">
                                                                    <span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="gall_li col-gn-4 box_clear">
                                                        <div class="gall_box">
                                                            <div class="gall_con">
                                                                <div class="gall_img">
                                                                    <div class="zoom_image">
                                                                        <a href="javascript:void(0);"
                                                                            onclick="gameopen('','118','1' )"><img
                                                                                src="https://max668.com/data/vendor/max587/5144?v=2024112416241727356"
                                                                                alt=""></a>
                                                                    </div>
                                                                </div>
                                                                <div class="gall_info"
                                                                    style="text-align:center; font-size:17px; font-weight:bold; ">
                                                                    <span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="gall_li col-gn-4">
                                                        <div class="gall_box">
                                                            <div class="gall_con">
                                                                <div class="gall_img">
                                                                    <div class="zoom_image">
                                                                        <a href="javascript:void(0);"
                                                                            onclick="gameopen('','117','1' )"><img
                                                                                src="https://max668.com/data/vendor/max587/5145?v=2024112416241727356"
                                                                                alt=""></a>
                                                                    </div>
                                                                </div>
                                                                <div class="gall_info"
                                                                    style="text-align:center; font-size:17px; font-weight:bold; ">
                                                                    <span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="gall_li col-gn-4">
                                                        <div class="gall_box">
                                                            <div class="gall_con">
                                                                <div class="gall_img">
                                                                    <div class="zoom_image">
                                                                        <a href="javascript:void(0);"
                                                                            onclick="gameopen('','111','1' )"><img
                                                                                src="https://max668.com/data/vendor/max587/5150?v=2024112416241727356"
                                                                                alt=""></a>
                                                                    </div>
                                                                </div>
                                                                <div class="gall_info"
                                                                    style="text-align:center; font-size:17px; font-weight:bold; ">
                                                                    <span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="gall_li col-gn-4">
                                                        <div class="gall_box">
                                                            <div class="gall_con">
                                                                <div class="gall_img">
                                                                    <div class="zoom_image">
                                                                        <a href="javascript:void(0);"
                                                                            onclick="gameopen('','110','1' )"><img
                                                                                src="https://max668.com/data/vendor/max587/5151?v=2024112416241727356"
                                                                                alt=""></a>
                                                                    </div>
                                                                </div>
                                                                <div class="gall_info"
                                                                    style="text-align:center; font-size:17px; font-weight:bold; ">
                                                                    <span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="gall_li col-gn-4 box_clear">
                                                        <div class="gall_box">
                                                            <div class="gall_con">
                                                                <div class="gall_img">
                                                                    <div class="zoom_image">
                                                                        <a href="javascript:void(0);"
                                                                            onclick="gameopen('','109','1' )"><img
                                                                                src="https://max668.com/data/vendor/max587/5152?v=2024112416241727356"
                                                                                alt=""></a>
                                                                    </div>
                                                                </div>
                                                                <div class="gall_info"
                                                                    style="text-align:center; font-size:17px; font-weight:bold; ">
                                                                    <span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="gall_li col-gn-4">
                                                        <div class="gall_box">
                                                            <div class="gall_con">
                                                                <div class="gall_img">
                                                                    <div class="zoom_image">
                                                                        <a href="javascript:void(0);"
                                                                            onclick="gameopen('','82','1' )"><img
                                                                                src="https://max668.com/data/vendor/max587/5178?v=2024112416241727356"
                                                                                alt=""></a>
                                                                    </div>
                                                                </div>
                                                                <div class="gall_info"
                                                                    style="text-align:center; font-size:17px; font-weight:bold; ">
                                                                    <span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="gall_li col-gn-4">
                                                        <div class="gall_box">
                                                            <div class="gall_con">
                                                                <div class="gall_img">
                                                                    <div class="zoom_image">
                                                                        <a href="javascript:void(0);"
                                                                            onclick="gameopen('','81','1' )"><img
                                                                                src="https://max668.com/data/vendor/max587/5179?v=2024112416241727356"
                                                                                alt=""></a>
                                                                    </div>
                                                                </div>
                                                                <div class="gall_info"
                                                                    style="text-align:center; font-size:17px; font-weight:bold; ">
                                                                    <span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="gall_li col-gn-4">
                                                        <div class="gall_box">
                                                            <div class="gall_con">
                                                                <div class="gall_img">
                                                                    <div class="zoom_image">
                                                                        <a href="javascript:void(0);"
                                                                            onclick="gameopen('','80','1' )"><img
                                                                                src="https://max668.com/data/vendor/max587/5180?v=2024112416241727356"
                                                                                alt=""></a>
                                                                    </div>
                                                                </div>
                                                                <div class="gall_info"
                                                                    style="text-align:center; font-size:17px; font-weight:bold; ">
                                                                    <span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <br>
                            </div>
                        </div>
                    </div>
                </div>
        </section>


        <style>
            @media all and (max-width: 800px) {
                #tail ._footer_logo {
                    display: none;
                }

                ;
            }
        </style>

        <footer>
            <div id="tail">
                <div class="_footer_logo">
                    <img src="https://max668.com/imgidt/footer.png" />
                </div>
                <div class="inne">
                    Copyright (c) 2021 <b>MAX</b> all right reserved -
                </div>
            </div>
        </footer>


    </div><!-- #wrap -->


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
                    $(this).attr("src", origin.replace(".png", "https://max668.com/_ov.png"));
                }
            },
            function() {
                var st_avail = $(this).attr("avail");
                if (st_avail == 'Y') {
                    var origin = $(this).attr("src");
                    $(this).attr("src", origin.replace("https://max668.com/_ov.png", ".png"));
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

        function flogin_submit(e) {

        }
    </script>




    <script type="text/javascript" src="https://max668.com/js/wrest.js"></script>
    <script type="text/javascript" src="https://max668.com/js/script.js?v=20240115452"></script>

    <!-- 새창 대신 사용하는 iframe -->
    <iframe width=0 height=0 name='hiddenframe' style='display:none;'></iframe>



    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"8e77a89268b5044d","version":"2024.10.5","r":1,"serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"ec3d60ab2bc04a2ca1bef4e77ab5161d","b":1}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from max668.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Nov 2024 07:24:08 GMT -->

</html>
