<!DOCTYPE html>
<html lang="ko">
<head>
    <?php include "../include/_head_common.php"; ?>

    <!-- 회원용 스타일 //-->
    <link rel="stylesheet" href="../css/member.css">
    <!--//-->
</head>
<body>
    <div id="wrap">

        <?php include "../include/_body_skip.php"; ?>

        <?php include "../include/_body_header.php"; ?>

        <div id="container">

            <!-- location //-->
            <div id="loc">
                <ul>
                    <li class="home"><a href="">홈</a></li>
                    <li><span>회원</span></li>
                    <li><strong>로그인</strong></li>
                </ul>
                <?php include "../include/_loc_option_menu.php"; ?>
            </div>
            <!--//-->

            <div id="contents">
                <section class="login-wrap">
                    <div class="page-title">
                        <h2>로그인</h2>
                        <p>
                            당원에 한해 홈페이지 회원 등록 후, 이용이 가능합니다.<br/>
                            당원이 아닌경우, 당원가입 후 이용하실 수 있습니다.
                        </p>
                    </div>                    
                    <form class="form">
                        <fieldset>    
                            <legend>로그인</legend>
                            <div class="form-field id">
                                <input type="text" id="user_id" name="user_id" class="form-input" required placeholder="아이디를 입력하세요">
                            </div>
                            <div class="form-field password mt10">
                                <input type="password" id="user_pass" name="user_pass" class="form-input" required placeholder="비밀번호를 입력하세요">
                            </div> 
                            <div class="form-field mt20">
                                <input type="checkbox" id="save_id" name="save_id" checked><label for="save_id">아이디 저장</label>
                            </div>
                            <div class="mt20 mbtn_login_box">
                                <a href="" class="mbtn grey">회원등록</a>
                                <button type="button" class="mbtn scolor">로그인</button>
                            </div>
                            <div class="mt30 find_link">
                                <a href="javascript:;">아이디찾기</a>
                                <span></span>
                                <a href="">비밀번호찾기</a>
                            </div>
                        </fieldset>
                    </form>
                    <div class="mbtn_bottom">
                        <h3>당원이 아니신가요?</h3>
                        <p>
                            <a href="" class="mbtn black wd100">당원가입</a>
                        </p>
                    </div>
                </section>
                <section class="use-website">
                    <h3>홈페이지 이용방법</h3>
                    <ul>
                        <li class="step1">
                            <div>
                                <span>01</span>
                                <p>당원가입</p>
                                <a href="" class="sbtn">바로가기</a>
                            </div>
                        </li>
                        <li class="step2">
                            <div>
                                <span>02</span>
                                <p>국민의힘 홈페이지 1회 본인인증</p>
                                <a href="" class="sbtn">바로가기</a>
                            </div>
                        </li>
                        <li class="step3">
                            <div>
                                <span>03</span>
                                <p>홈페이지 회원등록 완료</p>
                            </div>
                        </li>
                    </ul>       
                </section>
            </div>

        </div>

        <?php include "../include/_body_footer.php"; ?>

        <!-- ###### 로그인 실패 Popup Start ###### //-->
        <div class="modal-wrap" id="loginError">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="err-box">
                        <h3>죄송합니다</h3>
                        <p class="emsg1">입력하신 정보로 로그인할 수 없습니다.</p>
                        <p class="emsg2">
                            회원정보를 확인하신 후 시도해 주시기 바랍니다.<br/>
                            당원이 아니시면 당원가입 후 이용하실 수 있습니다.
                        </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="modalClose('loginError')">확인</button>
                </div>
            </div>
        </div>  
        <!--//-->

        <!-- 퍼블용 임시 스크립트 소스 //-->
        <script>
            // 로그인 실패 팝업
            $(function(){
                $(".mbtn_login_box .mbtn").click(function(){
                    modalOpen('loginError');
                });
            });
        </script>        
        <!--//-->

    </div>
</body>
</html>